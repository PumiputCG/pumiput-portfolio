<?php
require_once __DIR__ . '/lang.php';
require_once __DIR__ . '/data.php';

$isTH = getCurrentLang() === 'th';
$p    = getProfile();
$hideFooter = $hideFooter ?? false;
$topUrl = ($active ?? 'home') === 'home'
  ? '#home'
  : 'index.php?lang=' . rawurlencode(getCurrentLang()) . '#home';
$mainVersion = filemtime(__DIR__ . '/../assets/js/main.js');
$motionVersion = filemtime(__DIR__ . '/../assets/js/animations.js');
?>
  </main>

<?php if (!$hideFooter): ?>
  <footer class="journal-footer" id="contact">
    <section class="contact-intro" aria-labelledby="contact-title">
      <img
        class="contact-intro-image"
        src="assets/images/journal/contact-bridge.jpg"
        alt="<?= $isTH ? 'สะพานภูมิพลในแสงพระอาทิตย์ตกเหนือแม่น้ำเจ้าพระยา' : 'Bhumibol Bridge at sunset above the Chao Phraya River' ?>"
        width="1477"
        height="1108"
        loading="lazy"
      >
      <div class="contact-intro-shade" aria-hidden="true"></div>

      <div class="contact-intro-copy">
        <h2 id="contact-title" class="reveal">
          <?= $isTH
            ? 'พูดคุยและสร้างโอกาสร่วมกัน'
            : 'Let’s Connect and Create Opportunities' ?>
        </h2>
        <p class="contact-description reveal">
          <?= $isTH
            ? 'ติดตามเรื่องราวชีวิต ประสบการณ์ การเดินทาง และงานต่าง ๆ ที่ผมกำลังสร้างผ่านพื้นที่แห่งนี้ หากท่านใดสนใจพูดคุย ติดต่อ หรือร่วมงาน สามารถติดต่อผมได้ทางอีเมล'
            : 'Follow my life, experiences, journeys, and the work I create through the stories shared here. If you are interested in connecting, collaborating, or learning more, feel free to contact me.' ?>
        </p>
      </div>

      <div class="contact-intro-action reveal">
        <p><?= $isTH ? 'กรอกอีเมลของคุณเพื่อติดต่อ' : 'Enter your email to get in touch.' ?></p>
        <form
          class="contact-email-form"
          id="contactEmailForm"
          data-recipient="<?= htmlspecialchars($p['email']) ?>"
          data-subject="<?= $isTH ? 'ติดต่อจากเว็บไซต์ Pumiput' : 'Contact from Pumiput website' ?>"
          data-message="<?= $isTH ? 'สวัสดี Pumiput อีเมลของฉันคือ' : 'Hello Pumiput, my email is' ?>"
        >
          <label class="sr-only" for="contactEmail">
            <?= $isTH ? 'อีเมลของคุณ' : 'Your email address' ?>
          </label>
          <input
            id="contactEmail"
            name="email"
            type="email"
            placeholder="<?= $isTH ? 'อีเมลของคุณ' : 'Your Email Address' ?>"
            autocomplete="email"
            required
          >
          <button type="submit" title="<?= $isTH ? 'เปิดอีเมลเพื่อติดต่อ' : 'Open email to get in touch' ?>" aria-label="<?= $isTH ? 'เปิดอีเมลเพื่อติดต่อ' : 'Open email to get in touch' ?>">
            <svg aria-hidden="true" viewBox="0 0 24 24">
              <path d="m22 2-7 20-4-9-9-4Z"></path>
              <path d="M22 2 11 13"></path>
            </svg>
          </button>
        </form>
      </div>
    </section>

    <div class="footer-details">
      <div class="footer-detail">
        <span><?= $isTH ? 'ที่อยู่' : 'Address' ?></span>
        <strong>Bangkok, Thailand</strong>
      </div>
      <div class="footer-detail">
        <span><?= $isTH ? 'โทรศัพท์' : 'Phone' ?></span>
        <strong><a href="tel:<?= htmlspecialchars(str_replace('-', '', $p['phone'])) ?>"><?= htmlspecialchars($p['phone']) ?></a></strong>
      </div>
      <div class="footer-detail">
        <span><?= $isTH ? 'อีเมล' : 'Email' ?></span>
        <strong><a href="mailto:<?= htmlspecialchars($p['email']) ?>"><?= htmlspecialchars($p['email']) ?></a></strong>
      </div>
      <div class="footer-detail footer-social">
        <span><?= $isTH ? 'ช่องทางติดต่อ' : 'Social' ?></span>
        <div class="social-icons">
          <a class="social-icon social-letter social-linkedin" href="<?= $p['social']['linkedin'] ?>" target="_blank" rel="noopener" title="LinkedIn" aria-label="LinkedIn">in</a>
          <a class="social-icon" href="<?= $p['social']['instagram'] ?>" target="_blank" rel="noopener" title="Instagram" aria-label="Instagram">
            <svg aria-hidden="true" viewBox="0 0 24 24"><rect width="18" height="18" x="3" y="3" rx="5"></rect><circle cx="12" cy="12" r="4"></circle><circle cx="17.5" cy="6.5" r="1"></circle></svg>
          </a>
          <a class="social-icon social-letter social-x" href="<?= $p['social']['x'] ?>" target="_blank" rel="noopener" title="X" aria-label="X">X</a>
          <button class="social-icon social-line" id="lineQrOpen" type="button" title="LINE" aria-label="<?= $isTH ? 'เปิดคิวอาร์โค้ดไลน์' : 'Open LINE QR code' ?>">LINE</button>
          <a class="social-icon" href="mailto:<?= htmlspecialchars($p['email']) ?>" title="<?= $isTH ? 'อีเมล' : 'Email' ?>" aria-label="<?= $isTH ? 'ส่งอีเมล' : 'Send email' ?>">
            <svg aria-hidden="true" viewBox="0 0 24 24"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-10 6L2 7"></path></svg>
          </a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <span>© <?= date('Y') ?> <?= $p['name_en'] ?></span>
      <a
        class="footer-top-link"
        href="<?= htmlspecialchars($topUrl) ?>"
        title="<?= $isTH ? 'กลับขึ้นด้านบน' : 'Back to top' ?>"
        aria-label="<?= $isTH ? 'กลับขึ้นด้านบน' : 'Back to top' ?>"
      >
        <svg aria-hidden="true" viewBox="0 0 24 24">
          <path d="m18 15-6-6-6 6"></path>
        </svg>
      </a>
    </div>
  </footer>

  <dialog class="line-qr-dialog" id="lineQrDialog" aria-labelledby="lineQrTitle">
    <button class="line-qr-close" id="lineQrClose" type="button" aria-label="<?= $isTH ? 'ปิด' : 'Close' ?>">×</button>
    <p id="lineQrTitle"><?= $isTH ? 'สแกนเพื่อเพิ่ม LINE' : 'Scan to connect on LINE' ?></p>
    <img src="assets/images/journal/line-qr.jpg" alt="<?= $isTH ? 'คิวอาร์โค้ด LINE ของ Pumiput' : 'Pumiput LINE QR code' ?>" width="684" height="651" loading="lazy">
  </dialog>
<?php endif; ?>

  <script src="assets/js/main.js?v=<?= $mainVersion ?>" defer></script>
  <script src="assets/js/animations.js?v=<?= $motionVersion ?>" defer></script>
</body>
</html>
