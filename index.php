<?php
require_once __DIR__ . '/includes/lang.php';

$isTH      = getCurrentLang() === 'th';
$active    = 'home';
$pageTitle = $isTH ? 'บันทึกการเดินทาง' : 'Personal Journal';

require_once __DIR__ . '/includes/header.php';
?>

<section class="journal-hero" id="home" aria-labelledby="home-title">
  <img
    class="journal-hero-image"
    src="assets/images/journal/pumiput-mountain-hero.png"
    alt="<?= $isTH
      ? 'ภูมิพัฒน์ยืนมองวิวภูเขาในแสงเช้า'
      : 'Pumiput overlooking layered mountains in the morning light' ?>"
    width="1983"
    height="793"
    fetchpriority="high"
  >
  <div class="journal-hero-shade" aria-hidden="true"></div>

  <div class="journal-hero-content">
    
    <p class="journal-location entrance"><?= $isTH ? 'เรื่องราวและบันทึกส่วนตัว' : 'Stories & Personal Journal' ?></p>
    <h1 id="home-title" class="rotating-headline entrance entrance-delay">
      <span class="sr-only">A story of learning, creating, exploring, and growing</span>
      <span class="rotating-headline-visual" aria-hidden="true">
        <span class="rotating-headline-fixed">A Story Of</span>
        <span
          class="rotating-word-slot"
          data-rotating-words="LEARNING,CREATING,EXPLORING,GROWING"
        >
          <span class="rotating-word-clip is-visible">
            <span class="rotating-word">Learning</span>
            <span class="rotating-word-cursor"></span>
          </span>
        </span>
      </span>
    </h1>
    <p class="journal-hero-copy entrance entrance-delay-2">
      <?= $isTH
        ? 'ทุกประสบการณ์ในชีวิต ล้วนสอนเราเสมอ'
        : 'Every experience in life teaches us something.' ?>
    </p>
  </div>

  <a class="scroll-cue entrance entrance-delay-3" href="#journal">
    <span><?= $isTH ? 'เปิดบันทึก' : 'Enter journal' ?></span>
    <span class="scroll-line" aria-hidden="true"></span>
  </a>
</section>

<section class="about-story" id="journal" aria-labelledby="about-story-title">
  <div class="about-story-layout">
    <figure class="about-story-primary reveal">
      <img
        src="assets/images/journal/pumiput-fuji-composite.png"
        alt="<?= $isTH
          ? 'ภูเขาไฟฟูจิ ประเทศญี่ปุ่น'
          : 'Fuji in Japan' ?>"
        width="1025"
        height="1534"
        loading="lazy"
      >
      <blockquote class="about-story-quote">
        <p lang="<?= $isTH ? 'th' : 'en' ?>">
          <?= $isTH
            ? 'ความมุ่งมั่นและความตั้งใจ จะพาเราเข้าใกล้ความฝัน'
            : 'Determination and dedication bring us closer to our dreams.' ?>
        </p>
      </blockquote>
    </figure>

    <div class="about-story-content">
      <p class="about-story-label reveal">
        <?= $isTH ? 'เรื่องราวของการเติบโต' : 'A story of growth and discovery' ?>
      </p>
      <h2 id="about-story-title" class="reveal">
        The Journey of Becoming
      </h2>

      <div class="about-story-copy">
      <?php if ($isTH): ?>
          <p class="reveal">ในฐานะ Software Engineer ผมชอบการนำไอเดียที่ซับซ้อนมาพัฒนาให้กลายเป็นซอฟต์แวร์ที่เรียบง่าย ใช้งานได้จริง และช่วยแก้ปัญหาให้กับผู้คน การทำงานในแต่ละโปรเจกต์ทำให้ผมได้ลองผิดลองถูก แก้ปัญหา และเรียนรู้สิ่งใหม่อยู่เสมอ</p>
          <p class="reveal">แต่ชีวิตของผมไม่ได้อยู่แค่หน้าจอคอมพิวเตอร์ ผมชอบออกเดินทาง ไปพบสถานที่ ผู้คน และมุมมองใหม่ ๆ รวมถึงการได้นั่งดื่มกาแฟเงียบ ๆ เพื่อหยุดพักและทบทวนเรื่องราวต่าง ๆ ส่วนการออกกำลังกายก็สอนให้ผมรู้ว่า ความก้าวหน้าที่ดีเกิดจากความอดทนและความสม่ำเสมอ</p>
          <p class="reveal">ผมเชื่อว่าทุกสิ่งที่ได้พบเจอ และทุกประสบการณ์ระหว่างทาง ล้วนมีบางอย่างให้เราได้เรียนรู้ เรื่องราวเหล่านี้จึงเป็นทั้งความทรงจำ ประสบการณ์ และส่วนหนึ่งของตัวผมในวันนี้</p>
      <?php else: ?>
          <p class="reveal">As a Software Engineer, I enjoy turning complex ideas into simple, practical software that helps solve real problems. Each project gives me the opportunity to experiment, overcome challenges, and learn something new.</p>
          <p class="reveal">But my life is not limited to a computer screen. I enjoy traveling, discovering new places, meeting different people, and seeing life from new perspectives. A quiet cup of coffee gives me time to pause and reflect, while exercise reminds me that meaningful progress comes from patience and consistency.</p>
          <p class="reveal">I believe that everything I encounter and every experience along the way has something to teach me. These stories have become memories, experiences, and a part of who I am today.</p>
      <?php endif; ?>
      </div>

      <figure class="about-story-secondary reveal">
        <img
          src="assets/images/journal/pumiput-sakura-landscape.png"
          alt="<?= $isTH
            ? 'ภูมิพัฒน์ยืนอยู่ใต้ต้นซากุระในประเทศญี่ปุ่น'
            : 'Pumiput standing beneath cherry blossom trees in Japan' ?>"
          width="1536"
          height="1024"
          loading="lazy"
        >
      </figure>
    </div>
  </div>
</section>

<?php
  require_once __DIR__ . '/includes/journal-data.php';
  $travelLang = rawurlencode(getCurrentLang());
  $countries  = getJournalCountries();
  $firstKey   = array_key_first($countries);

  // Localized data for the stage (consumed by JS)
  $stageData = [];
  foreach ($countries as $key => $c) {
    $stageData[$key] = [
      'label'  => $isTH ? $c['label_th'] : $c['label_en'],
      'page'   => $c['page'] . '?lang=' . $travelLang,
      'places' => array_map(static function ($p) use ($isTH) {
        return [
          'id'     => $p['id'],
          'date'   => $p['date'],
          'title'  => $isTH ? $p['title_th'] : $p['title_en'],
          'desc'   => $isTH ? $p['desc_th'] : $p['desc_en'],
          'alt'    => $isTH ? $p['alt_th'] : $p['alt_en'],
          'images' => $p['images'],
        ];
      }, $c['places']),
    ];
  }

  // Server-side default (first place) so the stage shows without JS
  $d0    = $countries[$firstKey];
  $p0    = $d0['places'][0];
?>
<section class="travel-journal" id="moments" aria-labelledby="travel-title">
  <div class="travel-head">
    <p class="section-label reveal"><?= $isTH ? 'บันทึกการเดินทาง' : 'Travel Journal' ?></p>
    <h2 id="travel-title" class="reveal"><?= $isTH ? 'ที่ที่ฉันได้ไปเยือน' : "Places I've Wandered" ?></h2>
  </div>

  <!-- Stage: rotates through trips by default; a card's "Read more" loads that place here -->
  <div class="travel-stage reveal" id="travelStage" data-mode="auto">
    <div class="travel-stage-media">
      <div class="travel-stage-frame">
        <img class="travel-stage-image" id="stageImage"
             src="<?= htmlspecialchars($p0['images'][0]) ?>"
             alt="<?= htmlspecialchars($isTH ? $p0['alt_th'] : $p0['alt_en']) ?>"
             width="1448" height="1086">
        <span class="travel-stage-date" id="stageDate" aria-hidden="true"><?= $p0['date'][0] . ' ' . $p0['date'][1] ?></span>
        <button class="travel-stage-nav travel-stage-prev" id="stagePrev" type="button" aria-label="<?= $isTH ? 'ภาพก่อนหน้า' : 'Previous photo' ?>">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m15 6-6 6 6 6"/></svg>
        </button>
        <button class="travel-stage-nav travel-stage-next" id="stageNext" type="button" aria-label="<?= $isTH ? 'ภาพถัดไป' : 'Next photo' ?>">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 6 6 6-6 6"/></svg>
        </button>
      </div>
      <div class="travel-stage-thumbs" id="stageThumbs" aria-label="<?= $isTH ? 'ภาพในสถานที่นี้' : 'Photos at this place' ?>" hidden></div>
    </div>
    <div class="travel-stage-info">
      <p class="travel-stage-place" id="stagePlace"><?= htmlspecialchars($isTH ? $d0['label_th'] : $d0['label_en']) ?></p>
      <h3 class="travel-stage-title" id="stageTitle"><?= htmlspecialchars($isTH ? $p0['title_th'] : $p0['title_en']) ?></h3>
      <p class="travel-stage-desc" id="stageDesc"><?= htmlspecialchars($isTH ? $p0['desc_th'] : $p0['desc_en']) ?></p>
    </div>
  </div>

  <div class="travel-explore">
  <div class="travel-tabs reveal" role="tablist" aria-label="<?= $isTH ? 'ประเทศที่ไป' : 'Countries visited' ?>">
    <?php foreach ($countries as $key => $c): $on = $key === $firstKey; ?>
      <button class="travel-tab<?= $on ? ' is-active' : '' ?>" type="button" role="tab"
              id="tab-<?= $key ?>" aria-selected="<?= $on ? 'true' : 'false' ?>"
              aria-controls="panel-<?= $key ?>" data-country="<?= $key ?>"<?= $on ? '' : ' tabindex="-1"' ?>>
        <?= htmlspecialchars($isTH ? $c['label_th'] : $c['label_en']) ?>
      </button>
    <?php endforeach; ?>
  </div>

  <div class="travel-panels">
    <?php foreach ($countries as $key => $c): $on = $key === $firstKey; ?>
      <article class="travel-panel<?= $on ? ' is-active' : '' ?>" id="panel-<?= $key ?>"
               role="tabpanel" aria-labelledby="tab-<?= $key ?>" data-country="<?= $key ?>"<?= $on ? '' : ' hidden' ?>>
        <div class="travel-grid">
          <?php foreach ($c['places'] as $p): ?>
            <a class="travel-card" href="#moments" data-country="<?= $key ?>" data-place="<?= htmlspecialchars($p['id']) ?>"
               aria-label="<?= htmlspecialchars($isTH ? $p['title_th'] : $p['title_en']) ?>">
              <figure class="travel-card-media">
                <img src="<?= htmlspecialchars($p['images'][0]) ?>"
                     alt="<?= htmlspecialchars($isTH ? $p['alt_th'] : $p['alt_en']) ?>"
                     width="800" height="600" loading="lazy">
                <span class="travel-card-date"><span class="travel-card-month"><?= htmlspecialchars($p['date'][0]) ?></span><span class="travel-card-day"><?= htmlspecialchars($p['date'][1]) ?></span></span>
              </figure>
              <h3 class="travel-card-title"><?= htmlspecialchars($isTH ? $p['title_th'] : $p['title_en']) ?></h3>
            </a>
          <?php endforeach; ?>
        </div>
      </article>
    <?php endforeach; ?>
  </div>

  </div>

  <script type="application/json" id="travelStageData"><?= json_encode($stageData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
