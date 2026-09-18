<?php
require_once __DIR__ . '/includes/lang.php';

$isTH = getCurrentLang() === 'th';
$active = 'contact';
$pageTitle = $isTH ? 'ติดต่อ' : 'Contact';
$hideFooter = true;

require_once __DIR__ . '/includes/header.php';
?>

<section class="placeholder-page" aria-labelledby="contact-page-title">
  <h1 class="sr-only" id="contact-page-title"><?= $isTH ? 'ติดต่อภูมิพัฒน์ ไชยชาติ' : 'Contact Pumiput Chaichat' ?></h1>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
