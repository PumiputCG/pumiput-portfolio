<?php
/**
 * Language system — TH / EN
 * Stores the choice in a cookie + session and exposes small helpers
 * used across every page.
 */

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

/* ---- Resolve current language --------------------------------------- */
// Priority: ?lang= query  →  cookie  →  session  →  default 'en'
function resolveLang(): string {
  $allowed = ['th', 'en'];

  if (isset($_GET['lang']) && in_array($_GET['lang'], $allowed, true)) {
    $lang = $_GET['lang'];
    setcookie('site_lang', $lang, time() + 60 * 60 * 24 * 365, '/');
    $_SESSION['site_lang'] = $lang;
    return $lang;
  }
  if (isset($_COOKIE['site_lang']) && in_array($_COOKIE['site_lang'], $allowed, true)) {
    return $_COOKIE['site_lang'];
  }
  if (isset($_SESSION['site_lang']) && in_array($_SESSION['site_lang'], $allowed, true)) {
    return $_SESSION['site_lang'];
  }
  return 'en';
}

function getCurrentLang(): string {
  static $lang = null;
  if ($lang === null) {
    $lang = resolveLang();
  }
  return $lang;
}

/* ---- Build a URL that switches language, keeping the current page ---- */
function getLangSwitchUrl(): string {
  $target = getCurrentLang() === 'th' ? 'en' : 'th';
  $path   = strtok($_SERVER['REQUEST_URI'], '?');
  $params = $_GET;
  $params['lang'] = $target;
  return $path . '?' . http_build_query($params);
}

/* ---- Tiny translation helper ---------------------------------------- */
// t(['th' => '...', 'en' => '...'])
function t(array $pair): string {
  $lang = getCurrentLang();
  return $pair[$lang] ?? $pair['en'] ?? reset($pair);
}
