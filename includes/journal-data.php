<?php
/**
 * Travel journal data — countries → places (images + bilingual copy).
 *
 * To add more photos to a place, append paths to its 'images' array.
 * The stage gallery shows clickable thumbnails automatically when a
 * place has 2+ images.
 */

function getJournalCountries(): array {
  return [
    'japan' => [
      'label_th' => 'ญี่ปุ่น',
      'label_en' => 'Japan',
      'flag'     => 'jp',
      'page'     => 'journal-japan.php',
      'places'   => [
        [
          'id'       => 'asakusa',
          'date'     => ['Apr', '08'],
          'title_th' => 'วัดเซนโซจิ',
          'title_en' => 'Senso-ji Temple',
          'desc_th'  => 'วันแรกในโตเกียว ผมเริ่มต้นที่วัดเก่าแก่ที่สุดแห่งหนึ่งของเมือง แสงไฟยามค่ำคืนทำให้อาคารสีแดงดูโดดเด่นขึ้นมาก โคมไฟขนาดใหญ่และบรรยากาศเงียบลงกว่าตอนกลางวัน ทำให้ที่นี่เป็นจุดเริ่มต้นของทริปที่ผมจำได้ชัดที่สุด',
          'desc_en'  => 'My first day in Tokyo began at one of the city\'s oldest temples. The night lights made the red buildings stand out, and with the giant lantern and a quieter atmosphere than daytime, this became the most memorable start to my trip.',
          'alt_th'   => 'อาซากุสะ วัดเซนโซจิ',
          'alt_en'   => 'Senso-ji Temple, Asakusa',
          'images'   => [
            'assets/images/journal/japan/อาซากุสะ.png',
          ],
        ],
        [
          'id'       => 'ueno',
          'date'     => ['Apr', '09'],
          'title_th' => 'สวนอุเอโนะ',
          'title_en' => 'Ueno Park',
          'desc_th'  => 'ผมได้เดินเล่นในสวนอุเอโนะช่วงฤดูใบไม้ผลิ บ่อน้ำกว้าง เรือหงส์ และกิ่งซากุระที่ยื่นเข้ามาในภาพ ทำให้บรรยากาศกลางเมืองดูช้าลงกว่าปกติ เป็นช่วงเวลาสบาย ๆ ที่ได้หยุดพักและมองโตเกียวในมุมที่สงบกว่าเดิม',
          'desc_en'  => 'I strolled through Ueno Park in spring, where the wide pond, swan boats, and cherry blossom branches framed the view. The city felt slower here — an easy moment to pause and see Tokyo from a calmer angle.',
          'alt_th'   => 'สวนอุเอโนะในฤดูใบไม้ผลิ',
          'alt_en'   => 'Ueno Park in spring',
          'images'   => [
            'assets/images/journal/japan/สวนอุเอโนะ.png',
          ],
        ],
        [
          'id'       => 'akihabara',
          'date'     => ['Apr', '10'],
          'title_th' => 'อากิฮาบาระ',
          'title_en' => 'Akihabara',
          'desc_th'  => 'ผมได้มาเดินในย่านอากิฮาบาระ เมืองที่เต็มไปด้วยป้ายสีสัน ร้านเกม การ์ตูน อนิเมะ และเครื่องใช้ไฟฟ้า ทุกตึกเหมือนมีเรื่องราวของตัวเอง เป็นอีกด้านของโตเกียวที่สดใส คึกคัก และมีพลังมากกว่าที่คิด',
          'desc_en'  => 'I walked through Akihabara, a district full of colorful signs, game arcades, manga, anime, and electronics. Every building seemed to have its own story — a bright, lively side of Tokyo with more energy than I expected.',
          'alt_th'   => 'ย่านอากิฮาบาระกลางวัน',
          'alt_en'   => 'Akihabara district by day',
          'images'   => [
            'assets/images/journal/japan/อากิฮาบาระ.png',
          ],
        ],
        [
          'id'       => 'shibuya',
          'date'     => ['Apr', '11'],
          'title_th' => 'ชิบูย่า',
          'title_en' => 'Shibuya',
          'desc_th'  => 'ผมได้มายืนอยู่ท่ามกลางแสงไฟของชิบูย่ายามค่ำคืน ผู้คนจำนวนมากเดินผ่านกันไปมาใต้ป้ายไฟขนาดใหญ่ พื้นถนนที่สะท้อนแสงหลังฝนตกทำให้เมืองดูมีชีวิตมากขึ้น เป็นโมเมนต์ที่ทำให้รู้สึกถึงพลังของโตเกียวจริง ๆ',
          'desc_en'  => 'I stood amid the lights of Shibuya at night, as crowds crossed beneath the giant screens. The streets, still glistening after the rain, made the city feel even more alive — a moment that let me truly feel the energy of Tokyo.',
          'alt_th'   => 'สี่แยกชิบูย่ายามค่ำคืน',
          'alt_en'   => 'Shibuya Crossing at night',
          'images'   => [
            'assets/images/journal/japan/ชิบูย่า.png',
          ],
        ],
        [
          'id'       => 'skytree',
          'date'     => ['Apr', '12'],
          'title_th' => 'โตเกียวสกายทรี',
          'title_en' => 'Tokyo Skytree',
          'desc_th'  => 'ผมได้แวะมาชมโตเกียวสกายทรีในวันที่ท้องฟ้าครึ้ม หอคอยสูงตั้งตระหง่านอยู่กลางเมือง แม้อากาศจะไม่สดใสมาก แต่ความสูงและโครงสร้างของสกายทรียังทำให้รู้สึกว่าโตเกียวเป็นเมืองที่ยิ่งใหญ่มากเมื่อได้มองจากข้างล่าง',
          'desc_en'  => 'I visited Tokyo Skytree on a cloudy day, the tall tower standing proud in the middle of the city. Even without bright skies, its height and structure made Tokyo feel like a truly grand city when seen from below.',
          'alt_th'   => 'โตเกียวสกายทรีในวันฟ้าครึ้ม',
          'alt_en'   => 'Tokyo Skytree on a cloudy day',
          'images'   => [
            'assets/images/journal/japan/โตเกียวสกาย.png',
          ],
        ],
        [
          'id'       => 'fuji',
          'date'     => ['Apr', '13'],
          'title_th' => 'ภูเขาไฟฟูจิ',
          'title_en' => 'Mount Fuji',
          'desc_th'  => 'วันท้าย ๆ ของทริป ผมเดินทางออกนอกโตเกียวเพื่อไปเห็นภูเขาไฟฟูจิด้วยตาตัวเอง ฟูจิตั้งอยู่ไกล ๆ เหนือเมืองและดอกซากุระในวันที่ฟ้าใส เป็นภาพที่ทำให้เข้าใจเลยว่าทำไมหลายคนถึงอยากกลับมาญี่ปุ่นอีกครั้ง',
          'desc_en'  => 'Near the end of the trip, I traveled out of Tokyo to see Mount Fuji with my own eyes. Standing far in the distance above the town and the cherry blossoms on a clear day, it was the image that made me understand why so many people long to return to Japan.',
          'alt_th'   => 'ภูเขาไฟฟูจิในวันฟ้าใส',
          'alt_en'   => 'Mount Fuji on a clear day',
          'images'   => [
            'assets/images/journal/japan/ภูเขาไฟฟูจิ.png',
          ],
        ],
      ],
    ],

    'thailand' => [
      'label_th' => 'ไทย',
      'label_en' => 'Thailand',
      'flag'     => 'th',
      'page'     => 'journal-thailand.php',
      'places'   => [
        [
          'id'       => 'watarun',
          'date'     => ['Mar', '15'],
          'title_th' => 'วัดอรุณราชวราราม',
          'title_en' => 'Wat Arun',
          'desc_th'  => 'ผมได้เดินทางไปชมวัดอรุณในช่วงแสงสวยของวัน พระปรางค์สูงริมแม่น้ำเจ้าพระยาดูโดดเด่นมาก รายละเอียดของลวดลายและสีสันบนองค์พระปรางค์ทำให้รู้สึกว่านี่คือหนึ่งในภาพจำของกรุงเทพฯ ที่ควรได้มาเห็นด้วยตัวเอง',
          'desc_en'  => 'I visited Wat Arun during a beautiful moment of the day, when the light made the riverside temple feel even more special. Its tall prang, detailed patterns, and warm colors made this place one of the most memorable views of Bangkok for me.',
          'alt_th'   => 'วัดอรุณราชวราราม กรุงเทพฯ',
          'alt_en'   => 'Wat Arun, Bangkok',
          'images'   => [
            'assets/images/journal/thailand/วัดอรุณ.png',
          ],
        ],
        [
          'id'       => 'taihong',
          'date'     => ['Mar', '18'],
          'title_th' => 'ศาลเจ้าไต้ฮงกงหยกขาว',
          'title_en' => 'Tai Hong Kong White Jade Shrine',
          'desc_th'  => 'ผมได้มาเดินชมศาลเจ้าสถาปัตยกรรมจีนสีขาวที่ตัดกับประตูสีแดงและลวดลายสีทอง บรรยากาศค่อนข้างสงบกว่าที่คิด เป็นสถานที่ที่เหมาะกับการค่อย ๆ เดินดูรายละเอียดและเก็บความรู้สึกระหว่างทาง',
          'desc_en'  => 'I visited this white Chinese-style shrine and was drawn to the contrast between the pale stone, red doors, and golden details. The atmosphere felt calm and quiet, making it a nice place to slowly observe the architecture and enjoy the moment.',
          'alt_th'   => 'ศาลเจ้าไต้ฮงกงหยกขาว กรุงเทพฯ',
          'alt_en'   => 'Tai Hong Kong White Jade Shrine, Bangkok',
          'images'   => [
            'assets/images/journal/thailand/ศาลเจ้าไต้ฮงกงหยกขาว.png',
          ],
        ],
        [
          'id'       => 'kohloi',
          'date'     => ['Apr', '02'],
          'title_th' => 'เกาะลอย ศรีราชา',
          'title_en' => 'Koh Loi',
          'desc_th'  => 'ผมได้แวะมาที่เกาะลอยในช่วงเย็น เป็นมุมทะเลที่มีทั้งแสงอาทิตย์ เรือ และทางเดินริมทะเลอยู่ในภาพเดียวกัน บรรยากาศไม่ได้เงียบจนเหงา แต่ก็ยังมีจังหวะให้ได้นั่งมองทะเลแบบสบาย ๆ',
          'desc_en'  => 'I stopped by Koh Loi in the evening, where the sunlight, boats, and seaside walkway came together in one view. It was not completely quiet, but it still had a peaceful rhythm that made me want to slow down and watch the sea.',
          'alt_th'   => 'เกาะลอย ศรีราชา ชลบุรี',
          'alt_en'   => 'Koh Loi, Si Racha, Chonburi',
          'images'   => [
            'assets/images/journal/thailand/เกาะลอย.png',
          ],
        ],
        [
          'id'       => 'pattaya',
          'date'     => ['Apr', '28'],
          'title_th' => 'หาดพัทยา ชลบุรี',
          'title_en' => 'Pattaya Beach',
          'desc_th'  => 'ผมได้เห็นอีกมุมหนึ่งของพัทยาจากมุมสูง ทะเลสีฟ้า หาดทราย และร่มชายหาดที่เรียงกันทำให้ภาพนี้ดูสดใสกว่าที่คิด เป็นพัทยาในวันที่แดดดีและให้ความรู้สึกเหมาะกับการพักผ่อนมากกว่าความวุ่นวาย',
          'desc_en'  => 'I saw Pattaya from a higher viewpoint, where the blue sea, sandy beach, and rows of beach umbrellas created a bright and relaxing scene. It showed me a softer side of Pattaya, one that felt more peaceful than busy.',
          'alt_th'   => 'หาดพัทยา ชลบุรี',
          'alt_en'   => 'Pattaya Beach, Chonburi',
          'images'   => [
            'assets/images/journal/thailand/หาดพัทยา.png',
          ],
        ],
        [
          'id'       => 'kohkret',
          'date'     => ['May', '10'],
          'title_th' => 'เกาะเกร็ด',
          'title_en' => 'Koh Kret',
          'desc_th'  => 'ผมได้มานั่งกินข้าวริมแม่น้ำที่เกาะเกร็ด มองเรือและวิถีชีวิตสองฝั่งน้ำผ่านโต๊ะอาหารตรงหน้า เป็นช่วงเวลาง่าย ๆ ที่ทำให้รู้สึกว่าไม่ต้องเดินทางไกล ก็เจอบรรยากาศดี ๆ ใกล้กรุงเทพฯ ได้เหมือนกัน',
          'desc_en'  => 'I spent time having a meal by the river at Koh Kret, watching boats and local life move along both sides of the water. It was a simple moment that reminded me that a calm and meaningful trip can be found close to Bangkok too.',
          'alt_th'   => 'เกาะเกร็ด นนทบุรี',
          'alt_en'   => 'Koh Kret, Nonthaburi',
          'images'   => [
            'assets/images/journal/thailand/เกาะเกร็ด.png',
          ],
        ],
        [
          'id'       => 'khaochalak',
          'date'     => ['May', '22'],
          'title_th' => 'เขาฉลาก',
          'title_en' => 'Khao Chalak',
          'desc_th'  => 'ผมได้ขึ้นมาชมวิวเมืองและทะเลจากมุมสูงในช่วงพลบค่ำ แสงไฟด้านล่างค่อย ๆ สว่างขึ้นพร้อมกับสีของท้องฟ้าที่เปลี่ยนไป ธงไทยด้านหน้าทำให้ภาพนี้มีความรู้สึกของการเดินทางและความทรงจำมากขึ้น',
          'desc_en'  => 'I went up to Khao Chalak to see the city and the sea from above during dusk. As the lights below slowly appeared and the sky changed color, the Thai flag in the foreground made the whole view feel even more memorable.',
          'alt_th'   => 'เขาฉลาก ชลบุรี',
          'alt_en'   => 'Khao Chalak, Chonburi',
          'images'   => [
            'assets/images/journal/thailand/เขาฉลาก.png',
          ],
        ],
        [
          'id'       => 'laemphochao',
          'date'     => ['May', '25'],
          'title_th' => 'แหลมปู่เจ้า',
          'title_en' => 'Laem Pu Chao',
          'desc_th'  => 'ผมได้มาชมวิวทะเลจากมุมสูงที่แหลมปู่เจ้า มองเห็นเกาะเล็ก ๆ แนวเขื่อน และผืนน้ำกว้างอยู่ไกลออกไป เมฆก้อนใหญ่กับสีฟ้าของทะเลทำให้ภาพนี้รู้สึกกว้าง สงบ และน่าจดจำ',
          'desc_en'  => 'I visited Laem Pu Chao and looked out over the sea from a high viewpoint. The small islands, long breakwater, wide water, and dramatic clouds made this view feel open, peaceful, and unforgettable.',
          'alt_th'   => 'แหลมปู่เจ้า ชลบุรี',
          'alt_en'   => 'Laem Pu Chao, Chonburi',
          'images'   => [
            'assets/images/journal/thailand/แหลมปู่เจ้า.png',
          ],
        ],
      ],
    ],
  ];
}
