# Exact Code Changes Reference

## File 1: style.css

### Change 1: Separated Hero and Page Hero Title Sizes
**Location**: Lines 475-492

```css
/* BEFORE */
.hero h1, .page-hero h1 {
  max-width: 880px; margin: 0;
  font-family: var(--f-head);
  font-size: clamp(2.8rem,8vw,6.8rem);
  font-weight: 700;
  line-height: 0.95;
  letter-spacing: -0.02em;
}

/* AFTER */
.hero h1 {
  max-width: 880px; margin: 0;
  font-family: var(--f-head);
  font-size: clamp(2.8rem,8vw,6.8rem);
  font-weight: 700;
  line-height: 0.95;
  letter-spacing: -0.02em;
}

.page-hero h1 {
  max-width: 880px; margin: 0;
  font-family: var(--f-head);
  font-size: clamp(1.8rem,4vw,2.8rem);
  font-weight: 700;
  line-height: 1.2;
  letter-spacing: -0.02em;
}
```

---

### Change 2: Header Actions Right Alignment
**Location**: Lines 219-223

```css
/* BEFORE */
.header-actions {
  display: flex;
  align-items: center;
  gap: 4px;
}

/* AFTER */
.header-actions {
  display: flex;
  align-items: center;
  gap: 4px;
  margin-left: auto;  /* ← ADDED */
}
```

---

### Change 3: Modern Search Button Design
**Location**: Lines 224-266

```css
/* BEFORE */
.search-toggle {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px; height: 40px;
  border: none;
  background: transparent;
  color: var(--ink);
  cursor: pointer;
  border-radius: 50%;
  transition: background 0.2s, color 0.2s;
}

.search-toggle:hover {
  background: var(--line);
}

/* AFTER */
.search-toggle {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px; height: 40px;
  border: none;
  background: transparent;
  color: var(--ink);
  cursor: pointer;
  border-radius: 50%;
  transition: all 0.2s;
}

.search-toggle:hover {
  background: var(--line);
}

@media (min-width: 901px) {
  .search-toggle {
    width: 140px;
    border-radius: 999px;
    background: var(--line);
    gap: 8px;
  }

  .search-toggle::after {
    content: 'Search';
    font-size: 0.75rem;
    font-weight: 500;
    color: var(--muted);
  }

  .search-toggle:hover {
    background: var(--accent);
    color: var(--ink);
  }

  .search-toggle:hover::after {
    color: var(--ink);
  }
}
```

---

### Change 4: Post Card Layout & Featured Images
**Location**: Lines 507-527

```css
/* BEFORE */
.post-grid { display: grid; border-top: 1px solid var(--line); }
.post-card { display: grid; grid-template-columns: 150px minmax(0,1fr) auto; gap: 24px; align-items: baseline; padding: 22px 0; border-bottom: 1px solid var(--line); }
.post-date, .post-category, .product-meta { color: var(--muted); font-size: 0.72rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; }
.post-card h3 { margin: 0 0 6px; font-family: var(--f-head); font-size: clamp(1.1rem,2vw,1.7rem); font-weight: 600; line-height: 1.2; }
.post-card p { margin: 0; color: var(--muted); font-size: 0.9rem; }

/* AFTER */
.post-grid { display: grid; border-top: 1px solid var(--line); }
.post-card { display: grid; grid-template-columns: 160px minmax(0,1fr) auto; gap: 24px; align-items: start; padding: 22px 0; border-bottom: 1px solid var(--line); }
.post-date, .post-category, .product-meta { color: var(--muted); font-size: 0.72rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; }
.post-card h3 { margin: 0 0 6px; font-family: var(--f-head); font-size: clamp(1.1rem,2vw,1.7rem); font-weight: 600; line-height: 1.2; }
.post-card p { margin: 0; color: var(--muted); font-size: 0.9rem; }

/* Featured image in post cards (NEW) */
.post-card .featured-image {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 160px;
  height: 120px;
  border-radius: var(--r);
  overflow: hidden;
  background: var(--line);
  flex-shrink: 0;
}

.post-card .featured-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
```

**Changes**:
- `grid-template-columns`: `150px` → `160px`
- `align-items`: `baseline` → `start`
- Added `.post-card .featured-image` styles (NEW)
- Added `.post-card .featured-image img` styles (NEW)

---

### Change 5: Responsive Post Card & Search Updates
**Location**: Lines 789-796

```css
/* BEFORE */
.post-card { grid-template-columns: 1fr; gap: 8px; }

/* AFTER */
.post-card { grid-template-columns: 1fr; gap: 14px; }
.post-card .featured-image { width: 100%; height: 180px; }

/* Hide search label on tablet (NEW) */
.search-toggle::after { display: none; }
.search-toggle { width: 40px !important; background: transparent !important; }
```

---

## File 2: index.php

### Change 1: Add Featured Images to Post Cards
**Location**: Lines 37-51

```php
/* BEFORE */
<div class="post-grid">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class( 'post-card' ); ?>>
        <time class="post-date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
        <div>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo esc_html( redefine_co_excerpt() ); ?></p>
        </div>
        <span class="post-category"><?php echo esc_html( get_the_category_list( ', ' ) ? wp_strip_all_tags( get_the_category_list( ', ' ) ) : __( 'Training', 'redefine-co' ) ); ?></span>
      </article>
    <?php endwhile; ?>

/* AFTER */
<div class="post-grid">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class( 'post-card' ); ?>>
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="featured-image">
            <?php the_post_thumbnail( 'medium', array( 'alt' => get_the_title() ) ); ?>
          </div>
        <?php else : ?>
          <div class="featured-image" style="background: linear-gradient(135deg, #c8f03a 0%, #a8cb2a 100%); display: flex; align-items: center; justify-content: center; color: var(--ink); font-weight: 700; font-size: 2.5rem;">
            <?php echo esc_html( substr( get_the_title(), 0, 1 ) ); ?>
          </div>
        <?php endif; ?>
        <div>
          <time class="post-date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo esc_html( redefine_co_excerpt() ); ?></p>
        </div>
        <span class="post-category"><?php echo esc_html( get_the_category_list( ', ' ) ? wp_strip_all_tags( get_the_category_list( ', ' ) ) : __( 'Training', 'redefine-co' ) ); ?></span>
      </article>
    <?php endwhile; ?>
```

**Changes**:
- Added featured image conditional block
- Falls back to gradient with first letter if no image
- Moved `<time>` element inside content `<div>`

---

### Change 2: Update Sample Posts (Fallback)
**Location**: Lines 57-72

```php
/* BEFORE */
<?php
$sample_posts = array(
  array( 'date' => 'May 25, 2026', 'title' => 'The New Rules of Strength Training', 'summary' => 'How hybrid routines, recovery data, and better coaching are changing the weekly split.', 'cat' => 'Training' ),
  array( 'date' => 'May 24, 2026', 'title' => 'Recovery Tech Gets More Personal', 'summary' => 'Wearables are moving from passive dashboards into practical suggestions athletes can use.', 'cat' => 'Recovery' ),
  array( 'date' => 'May 23, 2026', 'title' => 'What Boutique Studios Are Learning From Clubs', 'summary' => 'Community, pricing, and programming shifts are redrawing the fitness membership map.', 'cat' => 'Business' ),
);
?>
<?php foreach ( $sample_posts as $sample_post ) : ?>
  <article class="post-card">
    <time class="post-date"><?php echo esc_html( $sample_post['date'] ); ?></time>
    <div>
      <h3><?php echo esc_html( $sample_post['title'] ); ?></h3>
      <p><?php echo esc_html( $sample_post['summary'] ); ?></p>
    </div>
    <span class="post-category"><?php echo esc_html( $sample_post['cat'] ); ?></span>
  </article>
<?php endforeach; ?>

/* AFTER */
<?php
$sample_posts = array(
  array( 'date' => 'May 25, 2026', 'title' => 'The New Rules of Strength Training', 'summary' => 'How hybrid routines, recovery data, and better coaching are changing the weekly split.', 'cat' => 'Training', 'letter' => 'T' ),
  array( 'date' => 'May 24, 2026', 'title' => 'Recovery Tech Gets More Personal', 'summary' => 'Wearables are moving from passive dashboards into practical suggestions athletes can use.', 'cat' => 'Recovery', 'letter' => 'R' ),
  array( 'date' => 'May 23, 2026', 'title' => 'What Boutique Studios Are Learning From Clubs', 'summary' => 'Community, pricing, and programming shifts are redrawing the fitness membership map.', 'cat' => 'Business', 'letter' => 'W' ),
);
?>
<?php foreach ( $sample_posts as $sample_post ) : ?>
  <article class="post-card">
    <div class="featured-image" style="background: linear-gradient(135deg, #c8f03a 0%, #a8cb2a 100%); display: flex; align-items: center; justify-content: center; color: var(--ink); font-weight: 700; font-size: 2.5rem;">
      <?php echo esc_html( $sample_post['letter'] ); ?>
    </div>
    <div>
      <time class="post-date"><?php echo esc_html( $sample_post['date'] ); ?></time>
      <h3><?php echo esc_html( $sample_post['title'] ); ?></h3>
      <p><?php echo esc_html( $sample_post['summary'] ); ?></p>
    </div>
    <span class="post-category"><?php echo esc_html( $sample_post['cat'] ); ?></span>
  </article>
<?php endforeach; ?>
```

---

## File 3: functions.php

### Change 1: Register Featured Image Size
**Location**: Lines 23-25

```php
/* BEFORE */
function redefine_co_setup() {
	load_theme_textdomain( 'redefine-co', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	...
}

/* AFTER */
function redefine_co_setup() {
	load_theme_textdomain( 'redefine-co', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	
	// Add featured image size for post cards (NEW)
	add_image_size( 'redefine-post-card', 160, 120, true );
	
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	...
}
```

---

## Summary of Changes

| File | Changes | Purpose |
|------|---------|---------|
| `style.css` | 5 major CSS updates | Styling for all three issues |
| `index.php` | 2 markup changes | Featured image display + sample posts |
| `functions.php` | 1 function addition | Image size registration |

**Total Lines Modified**: ~50 lines across 3 files
**Lines Added**: ~40
**Lines Removed**: ~10

