# infinox
## Project Overview

This project implements a **reusable promotional landing page template** built with **WordPress , Advanced Custom Fields (ACF), Contact Form 7(For Registration Form)**.

The goal was to create a **flexible landing page system** that allows non-technical users (marketing team) to easily create campaign pages directly from the WordPress admin panel without modifying code.

---

## Key Features

The custom template **Hero Landing Page** includes the following editable sections:

### 1. Hero Banner

* Editable title
* Subtitle
* Background image
* Call-to-action button (Linked to Form)

### 2. Registration Form

* Name
* Email
* Phone number
  Includes basic frontend validation.

### 3. Promotion Description

Rich text content area to explain the campaign or promotion.

### 4. Prize / Reward Section

List of prizes or rewards with descriptions.

### 5. Terms & Conditions

Expandable section for campaign terms.

All content fields are managed via **ACF custom fields**.

---

## Technology Stack

* WordPress
* PHP
* Advanced Custom Fields (ACF)
* Contact Form 7
* Custom WordPress Theme
* Responsive CSS (mobile-friendly)

---

## Why Elementor Was Not Used

Elementor was intentionally avoided because the **free version does not support retrieving dynamic PHP data from ACF fields**.

Using a **custom template with ACF** ensures:

* Better performance
* Cleaner architecture
* Structured content management

---

## Setup Instructions

### 1. Install WordPress locally

You can use any local environment such as:

* Docker
* LocalWP
* XAMPP

---

### 2. Install the Theme

Clone the repository:

```
git clone https://github.com/syamavt/infinox.git
```

Copy the theme folder(promo-campaign) into:

```
wp-content/themes/
```

Then activate the theme from the **WordPress Admin → Appearance → Themes**.

---

### 3. Install ACF Plugin & Contact Form 7

Install the plugin:

**Plugins → Add New → Advanced Custom Fields**
**Plugins → Add New → Contact Form 7**

---

### 4. Import ACF Fields

Import the provided JSON file. (acf-json Folder)

Steps:

```
ACF → Tools → Import Field Groups
```

Upload the provided JSON file.

After importing, the **custom field groups will appear for Pages**.

---

## How to Create a Landing Page

1. Go to **Pages → Add New**
2. Select the template **Hero Landing Page**
3. Fill the ACF fields:

   * Hero title
   * Background image
   * Promotion content
   * Prize details
   * Terms & Conditions
4. Publish the page.

The landing page will automatically render using the custom template.

---

## Future Improvements

Possible enhancements:

* Elementor integration for drag-and-drop section management
* Marketing campaign analytics tracking
* Form submission integration with CRM
* Page speed optimization
* Component-based section builder

---

## Result

The system allows **marketing teams to quickly create promotional landing pages without developer support**, while maintaining clean code architecture and performance.
