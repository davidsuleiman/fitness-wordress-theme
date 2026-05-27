# Elementor HTML Implementation Guide

## Overview
This guide explains how to implement the custom HTML blocks for your Elementor pages and the bug fixes applied to your WordPress theme.

---

## Bug Fixes Applied

### 1. Search & Hamburger Menu Icons Now Functional
**Problem:** Icons were not clickable on mobile/tablet views
**Solution:** 
- Added proper `z-index: 250` to both buttons in `.header-actions`
- Ensured buttons have `flex-shrink: 0` to prevent collapsing
- Added focus states for better keyboard accessibility
- Fixed CSS to make buttons fully clickable

**Files Modified:**
- `style.css` - Updated header actions and button styling

---

## Homepage Updates

### 1. Display 10 Posts on Homepage
**Change:** Homepage now shows exactly 10 blog posts instead of unlimited
**How it works:** Added `pre_get_posts` filter in `functions.php` that limits homepage posts to 10 per page

**Files Modified:**
- `functions.php` - Added `redefine_co_home_posts_limit()` function

### 2. "View All" Link Points to `/blog`
**Change:** The "View all" button on homepage now links to `/blog` instead of the posts page
**What you need to do:**
1. Create a page in WordPress called "Blog" (if you haven't already)
2. Set the slug to `/blog`
3. The link will now direct users to that page

**Files Modified:**
- `index.php` - Updated the view-link href to `/blog`

---

## Elementor HTML Blocks

### How to Use These Blocks

1. **Go to the page** where you want to add the content
2. **Add an Elementor widget** - Click "Add Element" > Search for "HTML"
3. **Open the HTML widget**
4. **Copy the entire HTML code** from the corresponding file (see below)
5. **Paste it** into the HTML widget
6. **Update email addresses** to your actual contact emails
7. **Publish/Update the page**

---

## 1. Product Page - Coming Soon

**File:** `elementor-product-coming-soon.html`

**What's Included:**
- Beautiful hero section with gradient icon
- "Coming Soon" messaging
- Email notification form
- 3 feature highlights (Performance Gear, Curated Selection, Fast Shipping)
- Responsive design for all devices

**Email Addresses to Update:**
- Not needed for this template (form doesn't send emails)

**Customization Tips:**
- Change the emoji icon (🚀) in the `.coming-soon-icon` div
- Update feature icons and text as needed
- Modify the description text to match your brand voice

---

## 2. Contact Us Page

**File:** `elementor-contact-us.html`

**What's Included:**
- Two-column layout (form + contact info)
- Fully functional contact form with validation
- Three email contact methods:
  - General Inquiries: `hello@redefineandco.com`
  - Press: `press@redefineandco.com`
  - Partnerships: `partnerships@redefineandco.com`
- Success message after form submission
- Responsive mobile layout

**Email Addresses to Update (IMPORTANT):**
1. Find these email addresses in the HTML:
   - `hello@redefineandco.com` - General inquiries
   - `press@redefineandco.com` - Press/media
   - `partnerships@redefineandco.com` - Business partnerships

2. Replace them with your actual email addresses

**Features:**
- Real-time form validation
- Success message appears for 5 seconds after submission
- Form resets automatically
- Accessible form labels and inputs

---

## 3. Sponsor Us Page

**File:** `elementor-sponsor-us.html`

**What's Included:**
- Sponsorship inquiry form with dropdown for industry selection
- 5 sponsorship benefit highlights (Targeted Audience, Brand Authority, Content Integration, Growth Opportunity, Performance Metrics)
- Direct email contact section
- Responsive grid layout

**Email Address to Update (IMPORTANT):**
1. Find this email in the HTML:
   - `sponsorships@redefineandco.com`
2. Replace it with your actual sponsorship email address

**Features:**
- Multi-step form with industry selector
- Success message after submission
- Clean benefit showcase section
- Mobile-responsive design

---

## 4. Blog Page Template

**File:** `elementor-blog-page.html`

**What's Included:**
- Hero section with page title
- Category filter tags (All, Training, Nutrition, Recovery, Mindset, Gear)
- Sort dropdown (Newest First, Oldest First, Title A-Z)
- Blog post grid layout
- Pagination buttons
- Newsletter subscription section at bottom

**Important Notes:**
- This template is designed to work alongside WordPress's native blog loop
- The HTML provides the layout and styling
- WordPress will automatically populate your actual posts
- Filter and sort functionality would require additional WP hooks (advanced)

**How to Implement:**
1. Create a page called "Blog" with slug `/blog`
2. Use this template as the page content
3. Make sure your post loop displays properly

**Customization:**
- Categories can be updated to match your actual categories
- Email in newsletter form at bottom defaults to form submission
- Colors and spacing follow the Redefine & Co theme

---

## Customization Guide

### Changing Colors
All custom pages use the primary brand color:
- **Lime Green:** `#c8f03a` (primary accent)
- **Darker Green:** `#a8cb2a` (hover state)
- **Dark Text:** `#1a1a1a`
- **Light Gray:** `#f5f5f5` (backgrounds)

To change colors globally, search and replace:
- `#c8f03a` → your primary color
- `#a8cb2a` → your secondary color

### Changing Email Addresses
Each page has specific email addresses:
1. **Contact Us Page:**
   - `hello@redefineandco.com`
   - `press@redefineandco.com`
   - `partnerships@redefineandco.com`

2. **Sponsor Us Page:**
   - `sponsorships@redefineandco.com`

### Adding More Features
You can:
- Add more category filters in the blog page
- Add more sponsor benefits in the sponsor page
- Customize form fields in any form
- Change icons/emojis to match your brand

---

## Testing Checklist

- [ ] Search icon works on mobile (click it to open search)
- [ ] Hamburger menu icon works on mobile (click it to open menu)
- [ ] Product page displays correctly on desktop and mobile
- [ ] Contact form submission shows success message
- [ ] Sponsor form submission shows success message
- [ ] Blog page loads with proper grid layout
- [ ] Email links are clickable (mailto: links work)
- [ ] All forms are responsive on mobile devices
- [ ] Links to `/blog` work from homepage

---

## Troubleshooting

### Forms Not Working
- Make sure you've replaced the placeholder email addresses
- Check browser console for JavaScript errors
- Test in different browsers

### Layout Issues
- Clear your Elementor cache
- Make sure you're using the latest version of Elementor
- Check that no conflicting CSS is applied

### Mobile Display Problems
- View on actual mobile device or use browser dev tools (F12)
- Check media query breakpoints (768px, 600px)
- Ensure viewport meta tag is in place

---

## Files Provided

1. `elementor-product-coming-soon.html` - Product page
2. `elementor-contact-us.html` - Contact Us page
3. `elementor-sponsor-us.html` - Sponsor Us page
4. `elementor-blog-page.html` - Blog template
5. `ELEMENTOR-IMPLEMENTATION-GUIDE.md` - This file

---

## Next Steps

1. Create pages in WordPress:
   - Products page (slug: `/products`)
   - Contact Us page (slug: `/contact`)
   - Sponsor Us page (slug: `/sponsors`)
   - Blog page (slug: `/blog`)

2. Add Elementor HTML widgets to each page

3. Paste the corresponding HTML code into each widget

4. Replace placeholder email addresses with your actual emails

5. Test all forms and links

6. Publish pages

---

## Support

If you encounter any issues:
1. Check the troubleshooting section above
2. Verify all email addresses are correct
3. Test in an incognito/private browser window
4. Check browser console for errors (F12)

Enjoy your new pages! 🎉
