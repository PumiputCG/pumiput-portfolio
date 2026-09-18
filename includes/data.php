<?php
/**
 * Shared personal information for the active Home experience.
 */

require_once __DIR__ . '/lang.php';

function getProfile(): array {
  return [
    'name_en' => 'Pumiput Chaichat',
    'name_th' => 'ภูมิพัฒน์ ไชยชาติ',
    'university' => [
      'th' => 'มหาวิทยาลัยธรรมศาสตร์',
      'en' => 'Thammasat University',
    ],
    'phone' => '083-455-4197',
    'email' => 'pumiputc3210@gmail.com',
    'social' => [
      'linkedin' => 'https://www.linkedin.com/feed/',
      'instagram' => 'https://www.instagram.com/cgame._',
      'x' => 'https://x.com/zextinctc8405?s=11',
    ],
  ];
}
