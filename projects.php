<?php
require_once __DIR__ . '/includes/lang.php';

$isTH = getCurrentLang() === 'th';
$active = 'work';
$pageTitle = $isTH ? 'ผลงาน' : 'Work';
$hideFooter = true;

require_once __DIR__ . '/includes/header.php';
?>

<section class="placeholder-page" aria-labelledby="work-page-title">
  <h1 class="sr-only" id="work-page-title"><?= $isTH ? 'ผลงานของภูมิพัฒน์ ไชยชาติ' : 'Work by Pumiput Chaichat' ?></h1>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
