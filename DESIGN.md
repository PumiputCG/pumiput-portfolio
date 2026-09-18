# Design

## Direction

Cinematic Personal Journal Portfolio. The reference principle is a personal
travel film translated into a webpage: decisive photography, quiet navigation,
short copy, and contrast between bright landscape chapters and neutral-black
night chapters.

The page must feel personal before it feels like a developer portfolio.

## Home Structure

1. Transparent navigation over the hero with
   `Home / About Me / Portfolio / Work / Contact`.
   - Home opens a localized submenu: Home, Introduction, Travel Journal,
     Contact Information.
   - About Me, Portfolio, and Work open dedicated white pages reserved for
     future content.
   - Contact opens a dedicated blank white page reserved for future content.
   - Home submenu item Contact Information still links to the final contact
     section on Home.
2. Full-viewport opening image with a single-line rotating headline and one
   short journal line.
3. Dark editorial About Story composition.
4. Blank white content canvas reserved for future information.
5. Contact ending with a full-width personal image, bilingual email CTA, and a
   neutral-black information grid.

About Me, Portfolio, Work, and Contact are active navigation destinations and
remain intentionally blank white canvases until their content is designed.

## Hero Rotating Headline

- Fixed phrase: `A STORY OF`.
- Rotating words: `LEARNING`, `CREATING`, `EXPLORING`, `GROWING`.
- Use Montserrat 700 for the fixed phrase and Montserrat 800 for the rotating
  word.
- Keep the complete phrase on one line at every viewport.
- The rotating word is approximately `10-15%` larger and full white; the fixed
  phrase uses white at `80%` opacity.
- Use a fixed-width outer slot sized for `EXPLORING` so word changes never move
  the layout.
- Center-align the fixed and rotating text boxes, and explicitly lock their
  line-height so the Thai page's global line-height cannot offset the words.
- Keep the vertical gap above and below the headline visually equal.
- Only the inner word clip animates horizontally. Reveal/hide duration is
  `800ms`, hold duration is `2200ms`, with a restrained vertical cursor.
- Reduced-motion mode displays a static word without cycling.

## Palette

| Token | Value | Use |
|---|---|---|
| `--ivory` | `#f4f1e9` | Bright journal surfaces |
| `--paper` | `#faf8f2` | Clean supporting surface |
| `--near-black` | `#090a09` | Night chapters and footer |
| `--charcoal` | `#252824` | Secondary dark detail |
| `--moss` | `#8f9d72` | Small active/accent details only |
| `--light-text` | `#f7f4ec` | Text over dark images |

Dark surfaces must be neutral black or charcoal, never green-tinted.

## Typography

- English display: `Italiana`, light editorial presence.
- Thai display: `Noto Serif Thai`.
- Body/navigation: `Jost`, with `Anuphan` for Thai.
- Personal image captions and quotes: `La Belle Aurore` for English and
  `Mali Light 300` for Thai.
- Hero rotating headline uses `Montserrat` and remains on one line.
- The top-left signature displays `Pumiput Chaichat` in `La Belle Aurore`.
- The page-transition loader displays `Pumiput Chaichat` in
  `La Belle Aurore`.

## Section 2 Target Layout

Reference image: `.codex/references/section-2-backpack-layout.png`

Use this composition when Pumiput supplies the replacement photographs:

- Desktop canvas reference: `1920 x 1080`.
- Dark neutral or dark navy full-width section, with no card frames.
- Inner composition width approximately `1080-1100px`.
- Two-column layout: left visual column approximately `44-45%`, right story
  column approximately `50-51%`, with a `56-64px` gap.
- Left column: one dominant portrait image at approximately `2:3`; target
  rendered size around `484 x 724px` at a `1920px` viewport.
- A centered handwritten quote sits directly below the portrait image.
- Right column: short uppercase story label, restrained display heading,
  readable body copy, then one supporting landscape image.
- Supporting landscape image uses approximately `3:2`; target rendered size
  around `540 x 360px` at a `1920px` viewport.
- Right heading targets approximately `40-44px`, regular weight, around three
  lines. Body text targets approximately `13-15px` with compact but readable
  line-height.
- The portrait image begins level with the story label. The landscape image
  begins after the body copy, not level with the portrait bottom.
- Keep the composition open and photographic. Do not add borders, shadows,
  rounded cards, or decorative UI.
- On mobile, stack in narrative order: portrait image, localized quote, story
  label/title/body, supporting landscape image.

## Imagery

- Hero and chapters use real photography at full width.
- Preserve `35-45%` negative space for text whenever possible.
- Each chapter has its own `object-position` for desktop and mobile.
- Temporary licensed travel images may be used until Pumiput supplies personal
  photographs.
- Every image receives descriptive bilingual alt text.
- Do not place images inside the blank Section 3 content canvas.
- The final Contact section may use one full-width personal image.

## Sections 3 And Final Contact

- Section 3 is an intentionally empty white canvas reserved for future data.
- Do not add gallery images, chapter images, placeholder copy, or decorative
  elements to the canvas before content is supplied.
- The final contact area follows a two-layer editorial structure: image-led
  email CTA above and neutral-black information grid below.
- The email field opens the visitor's configured email client through a
  `mailto:` URL addressed to `pumiputc3210@gmail.com`, with the visitor's
  entered email included in the draft body.
- Contact information is Bangkok, phone, email, and icon-only social links for
  Facebook, Instagram, X, LINE QR, and email.
- LINE opens an accessible modal containing the supplied QR code.
- The email action uses a paper-plane icon.
- Social icons are enlarged and unframed.

## Motion

- One restrained opening sequence.
- Image drift is subtle and scroll-linked.
- Text reveals only where it supports the reading rhythm.
- All content remains visible without JavaScript.
- `prefers-reduced-motion` removes scroll-linked movement and long transitions.

## Avoid

- Cards, chips, badges, dashboards, skill bars, and project grids on Home.
- Decorative gradients, glass panels, or poster-like graphics.
- Text over faces or important image subjects.
- Dark green backgrounds.
