# Visual Implementation Guide

## Category Pages Display

### When visiting /category/wellness/

```
┌─────────────────────────────────────┐
│  Header with Search & Menu          │
├─────────────────────────────────────┤
│  Home | Blog | Wellness | Fitness...│
├─────────────────────────────────────┤
│                                     │
│  Wellness                           │
│  Exploring Wellness                 │
│  "Full category description here"   │
│                                     │
│  In this category: 5 articles       │
├─────────────────────────────────────┤
│                                     │
│  Wellness Articles                  │
│                                     │
│  ┌──────────┐                       │
│  │  Image   │ Article Title 1       │
│  │          │ Date | Category       │
│  └──────────┘ Description text...   │
│                                     │
│  ┌──────────┐                       │
│  │  Image   │ Article Title 2       │
│  │          │ Date | Category       │
│  └──────────┘ Description text...   │
│                                     │
└─────────────────────────────────────┘
```

---

## Blog Page with Category Filtering

### Filter Tabs (Updated)

```
┌──────────────────────────────────────┐
│  All Articles | Wellness | Fitness   │
│  Lifestyle                           │
│                                      │
│  (All Articles is highlighted in     │
│   lime green when active)            │
└──────────────────────────────────────┘
```

### How Filtering Works

```
User clicks "Wellness" tab
        ↓
JavaScript detects click
        ↓
Redirects to /category/wellness/
        ↓
Category page loads
        ↓
Shows only Wellness posts
        ↓
Blog page filters tab becomes active
```

---

## Search Form - Before & After

### BEFORE (Current)
```
┌────────────────────────┐
│ [Search...] │ [Search] │
└────────────────────────┘
```
- Split left/right design
- Black button
- Not centered

### AFTER (New)
```
                ┌─────────────────────────┐
                │ [Search input...]  [🔍] │
                └─────────────────────────┘
```
- Centered on screen
- Pill-shaped rounded container
- Lime green button
- Full-width overlay behind it
- Modern shadow effect

---

## Navigation Flow

### Homepage Navigation

```
HOME (/)
  ↓
┌─────────────────────────────────┐
│ Ribbon Navigation:              │
│ Home | Blog | Wellness | Fitness│
│              Lifestyle          │
└─────────────────────────────────┘
  ↓
BLOG (/blog/)
  ↓
  ├─→ [Click "Wellness"] → /category/wellness/
  ├─→ [Click "Fitness"] → /category/fitness/
  └─→ [Click "Lifestyle"] → /category/lifestyle/

CATEGORY PAGES
  ↓
  └─→ Show filtered posts from that category
```

---

## Mobile Responsive Design

### Mobile (Tablet & Below 900px)

```
┌──────────────────────┐
│ Logo    [🔍] [≡]     │  ← Hamburger + Search
├──────────────────────┤
│ Home | Blog | Wellness│  ← Scrollable ribbon
│ Fitness | Lifestyle  │
├──────────────────────┤
│ Article 1            │
│ [Full Width]         │
├──────────────────────┤
│ Article 2            │
│ [Full Width]         │
└──────────────────────┘
```

### Tablet View Search

```
        ┌─────────────────────┐
        │  [Search...]   [🔍] │ ← Centered
        └─────────────────────┘
        
Full-width centered overlay when open
Keyboard appears in input field
```

---

## Category Colors & Styling

### Filter Tags

**Inactive State:**
- Background: White
- Border: Light gray (#ddd)
- Text: Gray (#666)
- Cursor: Pointer

**Active State:**
- Background: Lime green (#c8f03a)
- Border: Lime green (#c8f03a)
- Text: Dark (#1a1a1a)
- Font Weight: 500

**Hover State:**
- Border: Lime green
- Text: Lime green

---

## JavaScript Filter Flow

```
Page Load
  ↓
Check current URL path
  ↓
If /category/wellness/ → Set "Wellness" tab active
If /category/fitness/ → Set "Fitness" tab active
If /category/lifestyle/ → Set "Lifestyle" tab active
If /blog/ → Set "All Articles" tab active
  ↓
User clicks tab
  ↓
JavaScript redirects to appropriate URL
  ↓
Page reloads with filtered posts
```

---

## Post Card Layout (Category Pages)

```
┌──────────────────────────────┐
│  [Featured Image]            │
│  160px × 120px               │
├──────────────────────────────┤
│                              │
│  MAY 23, 2026 (date)         │
│                              │
│  Article Title (h3)          │
│                              │
│  Description text showing    │
│  excerpt of post...          │
│                              │
│                    CATEGORY  │
└──────────────────────────────┘
```

All cards use consistent styling with hover effects that lift them slightly.
