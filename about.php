<?php
require_once __DIR__ . '/includes/lang.php';

$isTH = getCurrentLang() === 'th';
$active = 'about';
$pageTitle = $isTH ? 'เกี่ยวกับฉัน' : 'About';
$hideFooter = true;

require_once __DIR__ . '/includes/header.php';
?>

<section class="placeholder-page" aria-labelledby="about-page-title">
  <h1 class="sr-only" id="about-page-title"><?= $isTH ? 'เกี่ยวกับภูมิพัฒน์ ไชยชาติ' : 'About Pumiput Chaichat' ?></h1>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
