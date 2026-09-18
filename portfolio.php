<?php
require_once __DIR__ . '/includes/lang.php';

$isTH = getCurrentLang() === 'th';
$active = 'portfolio';
$pageTitle = $isTH ? 'แฟ้มผลงาน' : 'Portfolio';
$hideFooter = true;

require_once __DIR__ . '/includes/header.php';
?>

<section class="placeholder-page" aria-labelledby="portfolio-page-title">
  <h1 class="sr-only" id="portfolio-page-title"><?= $isTH ? 'แฟ้มผลงานของภูมิพัฒน์ ไชยชาติ' : 'Portfolio of Pumiput Chaichat' ?></h1>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
