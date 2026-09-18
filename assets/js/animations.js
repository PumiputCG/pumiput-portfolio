'use strict';

(function () {
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init, { once: true });
  } else {
    init();
  }

  function init() {
    initReveal();
    initRotatingHeadline();
    if (!reduceMotion) initImageDrift();
  }

  function initRotatingHeadline() {
    const slot = document.querySelector('[data-rotating-words]');
    if (!slot) return;

    const clip = slot.querySelector('.rotating-word-clip');
    const wordElement = slot.querySelector('.rotating-word');
    const words = slot.dataset.rotatingWords
      .split(',')
      .map((word) => word.trim())
      .filter(Boolean);

    if (!clip || !wordElement || !words.length) return;

    let currentIndex = 0;
    let cycleTimer;

    const measureWord = () => {
      clip.style.setProperty('--rotating-word-width', `${Math.ceil(clip.scrollWidth)}px`);
    };

    const revealWord = () => {
      measureWord();
      window.requestAnimationFrame(() => clip.classList.add('is-visible'));
    };

    const showNextWord = () => {
      clip.classList.remove('is-visible');

      cycleTimer = window.setTimeout(() => {
        currentIndex = (currentIndex + 1) % words.length;
        wordElement.textContent = words[currentIndex];
        revealWord();
        cycleTimer = window.setTimeout(showNextWord, 2200);
      }, 800);
    };

    const start = () => {
      window.clearTimeout(cycleTimer);
      wordElement.textContent = words[currentIndex];
      revealWord();
      if (!reduceMotion) cycleTimer = window.setTimeout(showNextWord, 2200);
    };

    if (document.fonts?.ready) {
      document.fonts.ready.then(start);
    } else {
      start();
    }

    window.addEventListener('resize', measureWord, { passive: true });
  }

  function initReveal() {
    const elements = document.querySelectorAll('.reveal');
    if (!elements.length) return;

    if (reduceMotion || !('IntersectionObserver' in window)) {
      elements.forEach((element) => element.classList.add('is-visible'));
      return;
    }

    const observer = new IntersectionObserver((entries, currentObserver) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        currentObserver.unobserve(entry.target);
      });
    }, {
      threshold: 0.16,
      rootMargin: '0px 0px -8% 0px',
    });

    elements.forEach((element) => observer.observe(element));
    window.setTimeout(() => {
      elements.forEach((element) => element.classList.add('is-visible'));
    }, 2600);
  }

  function initImageDrift() {
    const images = Array.from(document.querySelectorAll('.journal-hero-image'));
    if (!images.length) return;

    let ticking = false;
    const update = () => {
      const viewportHeight = window.innerHeight;

      images.forEach((image) => {
        const section = image.parentElement;
        const rect = section.getBoundingClientRect();
        if (rect.bottom < 0 || rect.top > viewportHeight) return;

        const centerOffset = rect.top + rect.height / 2 - viewportHeight / 2;
        const movement = Math.max(-36, Math.min(36, centerOffset * -0.035));
        image.style.transform = `translate3d(0, ${movement.toFixed(2)}px, 0)`;
      });

      ticking = false;
    };

    const requestUpdate = () => {
      if (ticking) return;
      ticking = true;
      window.requestAnimationFrame(update);
    };

    window.addEventListener('scroll', requestUpdate, { passive: true });
    window.addEventListener('resize', requestUpdate, { passive: true });
    update();
  }
})();
