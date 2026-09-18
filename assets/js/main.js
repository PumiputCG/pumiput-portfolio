'use strict';

(function () {
  const onReady = (callback) => {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', callback, { once: true });
      return;
    }
    callback();
  };

  onReady(() => {
    initLoader();
    initHeader();
    initMenu();
    initTravelTabs();
    initTravelStage();
    initContactEmail();
    initLineQrDialog();
  });

  function initLoader() {
    const loader = document.querySelector('.page-loader');
    const revealPage = () => {
      document.documentElement.classList.add('is-ready');
      if (!loader) return;
      loader.classList.add('is-hidden');
      window.setTimeout(() => loader.remove(), 1000);
    };

    window.addEventListener('load', revealPage, { once: true });
    window.setTimeout(revealPage, 1800);
  }

  function initHeader() {
    const header = document.getElementById('siteHeader');
    if (!header) return;

    let ticking = false;
    const update = () => {
      header.classList.toggle('is-scrolled', window.scrollY > 24);
      ticking = false;
    };

    const onScroll = () => {
      if (ticking) return;
      ticking = true;
      window.requestAnimationFrame(update);
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    update();
  }

  function initMenu() {
    const button = document.getElementById('menuButton');
    const menu = document.getElementById('mobileMenu');
    if (!button || !menu) return;

    const homeItem = menu.querySelector('.m-home');
    const homeTrigger = menu.querySelector('.m-home-trigger');

    const setOpen = (open) => {
      button.classList.toggle('is-open', open);
      menu.classList.toggle('is-open', open);
      document.body.classList.toggle('menu-open', open);
      button.setAttribute('aria-expanded', String(open));
      button.setAttribute(
        'aria-label',
        open ? button.dataset.closeLabel : button.dataset.openLabel
      );
      if (!open && homeItem) {
        homeItem.classList.remove('is-open');
        homeTrigger.setAttribute('aria-expanded', 'false');
      }
    };

    button.addEventListener('click', () => {
      setOpen(!menu.classList.contains('is-open'));
    });

    if (homeItem && homeTrigger) {
      homeTrigger.addEventListener('click', (event) => {
        event.preventDefault();
        const open = !homeItem.classList.contains('is-open');
        homeItem.classList.toggle('is-open', open);
        homeTrigger.setAttribute('aria-expanded', String(open));
      });
    }

    menu.querySelectorAll('a:not(.m-home-trigger)').forEach((link) => {
      link.addEventListener('click', () => setOpen(false));
    });

    document.addEventListener('click', (event) => {
      if (!menu.classList.contains('is-open')) return;
      if (button.contains(event.target) || menu.contains(event.target)) return;
      setOpen(false);
    });

    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') setOpen(false);
    });
  }

  function initTravelTabs() {
    const tabs = Array.from(document.querySelectorAll('.travel-tab'));
    const panels = Array.from(document.querySelectorAll('.travel-panel'));
    if (!tabs.length || !panels.length) return;

    const activate = (country) => {
      tabs.forEach((tab) => {
        const on = tab.dataset.country === country;
        tab.classList.toggle('is-active', on);
        tab.setAttribute('aria-selected', String(on));
        tab.tabIndex = on ? 0 : -1;
      });
      panels.forEach((panel) => {
        const on = panel.dataset.country === country;
        panel.classList.toggle('is-active', on);
        panel.hidden = !on;
      });
    };

    tabs.forEach((tab) => {
      tab.addEventListener('click', () => activate(tab.dataset.country));
    });
  }

  function initTravelStage() {
    const stage = document.getElementById('travelStage');
    const dataEl = document.getElementById('travelStageData');
    if (!stage || !dataEl) return;

    let data;
    try {
      data = JSON.parse(dataEl.textContent);
    } catch (error) {
      return;
    }

    const els = {
      image: document.getElementById('stageImage'),
      date: document.getElementById('stageDate'),
      thumbs: document.getElementById('stageThumbs'),
      place: document.getElementById('stagePlace'),
      title: document.getElementById('stageTitle'),
      desc: document.getElementById('stageDesc'),
      prev: document.getElementById('stagePrev'),
      next: document.getElementById('stageNext'),
    };
    if (!els.image) return;

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    let sequence = [];
    let index = 0;
    let paused = false;
    let timer = null;

    const setImage = (src, alt) => {
      els.image.classList.add('is-fading');
      const pre = new Image();
      const swap = () => {
        els.image.src = src;
        els.image.alt = alt || '';
        window.requestAnimationFrame(() => els.image.classList.remove('is-fading'));
      };
      pre.onload = swap;
      pre.onerror = swap;
      pre.src = src;
    };

    const renderThumbs = (place) => {
      els.thumbs.innerHTML = '';
      if (place.images.length < 2) {
        els.thumbs.hidden = true;
        return;
      }
      els.thumbs.hidden = false;
      place.images.forEach((src, i) => {
        const button = document.createElement('button');
        button.type = 'button';
        button.className = 'travel-stage-thumb' + (i === 0 ? ' is-active' : '');
        const thumb = new Image();
        thumb.src = src;
        thumb.alt = '';
        button.appendChild(thumb);
        button.addEventListener('click', () => {
          setImage(src, place.alt);
          Array.from(els.thumbs.children).forEach((child, ci) => {
            child.classList.toggle('is-active', ci === i);
          });
        });
        els.thumbs.appendChild(button);
      });
    };

    const render = (i) => {
      if (!sequence.length) return;
      index = (i + sequence.length) % sequence.length;
      const item = sequence[index];
      const c = data[item.country];
      const place = c.places.find((p) => p.id === item.id) || c.places[0];
      setImage(place.images[0], place.alt);
      els.date.textContent = place.date.join(' ');
      els.place.textContent = c.label;
      els.title.textContent = place.title;
      els.desc.textContent = place.desc;
      renderThumbs(place);
    };

    const stopTimer = () => {
      if (timer) {
        window.clearInterval(timer);
        timer = null;
      }
    };

    const startTimer = () => {
      stopTimer();
      if (reduceMotion || sequence.length < 2) return;
      timer = window.setInterval(() => {
        if (!paused) render(index + 1);
      }, 4500);
    };

    const setCountry = (country) => {
      const c = data[country];
      if (!c || !c.places.length) return;
      sequence = c.places.map((p) => ({ country: country, id: p.id }));
      render(0);
      startTimer();
    };

    // Prev / next controls
    if (els.prev) {
      els.prev.addEventListener('click', () => {
        render(index - 1);
        startTimer();
      });
    }
    if (els.next) {
      els.next.addEventListener('click', () => {
        render(index + 1);
        startTimer();
      });
    }

    // Pause while hovering the image or the description
    stage.addEventListener('mouseenter', () => { paused = true; });
    stage.addEventListener('mouseleave', () => { paused = false; });

    // Card click → jump the stage to that place
    document.querySelectorAll('.travel-card[data-place]').forEach((card) => {
      card.addEventListener('click', (event) => {
        event.preventDefault();
        const country = card.dataset.country;
        if (!sequence.length || sequence[0].country !== country) setCountry(country);
        const target = sequence.findIndex((s) => s.id === card.dataset.place);
        render(target < 0 ? 0 : target);
        startTimer();
        stage.scrollIntoView({ behavior: 'smooth', block: 'center' });
      });
    });

    // Tab switch → carousel for that country
    document.querySelectorAll('.travel-tab').forEach((tab) => {
      tab.addEventListener('click', () => setCountry(tab.dataset.country));
    });

    const activeTab = document.querySelector('.travel-tab.is-active');
    setCountry(activeTab ? activeTab.dataset.country : Object.keys(data)[0]);
  }

  function initContactEmail() {
    const form = document.getElementById('contactEmailForm');
    const input = document.getElementById('contactEmail');
    if (!form || !input) return;

    form.addEventListener('submit', (event) => {
      event.preventDefault();
      if (!input.reportValidity()) return;

      const recipient = form.dataset.recipient;
      const subject = form.dataset.subject;
      const body = `${form.dataset.message} ${input.value.trim()}.\n\n`;
      window.location.href = `mailto:${recipient}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    });
  }

  function initLineQrDialog() {
    const dialog = document.getElementById('lineQrDialog');
    const openButton = document.getElementById('lineQrOpen');
    const closeButton = document.getElementById('lineQrClose');
    if (!dialog || !openButton || !closeButton) return;

    openButton.addEventListener('click', () => dialog.showModal());
    closeButton.addEventListener('click', () => dialog.close());

    dialog.addEventListener('click', (event) => {
      if (event.target === dialog) dialog.close();
    });
  }
})();
