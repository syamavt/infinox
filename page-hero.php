<?php
/*
Template Name: Hero Landing Page
Description: A custom landing page with editable hero section via ACF
*/

//get_header(); // Include header   Removed Header and Footer for timebeing 
// ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<main class="landing-page">
<section class="campaign-hero"  style="background-image: url('<?php the_field('hero_bg_image'); ?>');">
    <!-- Overlay -->
  <div class="campaign-hero__overlay"></div>
  <div class="campaign-hero__content">
    <p class="campaign-hero__label">Limited Time Offer</p>
    <h1><?php the_field('hero_title');?></h1>
    <p><?php the_field('hero_subtile');?></p>
    <a href="#register" class="btn-gold">Register Now</a>
  </div>
</section>

<section class="campaign-section">
  <div class="section-header">
    <h2><?php the_field('promo_title');?></h2>
    <p><?php the_field('promo_description');?></p>
  </div>
  <div class="features-grid">
    <div class="feature-card">
      <div class="feature-card__icon">
        <svg class="icon-svg" viewBox="0 0 24 24"><path d="M12 2l2.09 6.26L20.18 9l-5 4.27L16.82 20 12 16.9 7.18 20l1.64-6.73L3.82 9l6.09-.74Z"/></svg>
      </div>
      <h3><?php the_field('promo_item_title1');?></h3>
      <p><?php the_field('promo_item_desc1');?></p>
    </div>
    <div class="feature-card">
      <div class="feature-card__icon">
        <svg class="icon-svg" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      </div>
      <h3><?php the_field('promo_item_title2');?></h3>
      <p><?php the_field('promo_item_desc2');?></p>
    </div>
    <div class="feature-card">
      <div class="feature-card__icon">
        <svg class="icon-svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
      </div>
     <h3><?php the_field('promo_item_title3');?></h3>
      <p><?php the_field('promo_item_desc3');?></p>
    </div>
  </div>
</section>
 <!--REGISTER -->
<section id="register" class="campaign-section--card">
  <div class="campaign-section__inner">
    <div class="section-header">
      <h2><span>Register</span> Now</h2>
      <p>Fill in your details to enter the campaign</p>
    </div>
    <!--<form class="register-form" onsubmit="event.preventDefault(); alert('Registration submitted!');">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="tel" name="phone" placeholder="Phone Number" required>
      <button type="submit" class="btn-gold">Submit Registration</button>      
    </form>-->
    <div id="register"  class="register-form">
     <?php echo do_shortcode('[contact-form-7 id="dfacce4" title="Register"]'); ?>
    </div>
     
  </div>
</section>
<!-- PRIZES -->
<section class="campaign-section">
  <div class="section-header">
    <h2><?php the_field('price_title');?></h2>
    <p><?php the_field('price_description');?></p>
  </div>
  <div class="prizes-grid">
    <div class="prize-card">
      <span class="prize-card__label"><?php the_field('prize_1_title');?></span>
      <div class="prize-card__icon">
        <svg class="icon-svg icon-svg-sm" viewBox="0 0 24 24"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5C7 4 7 7 7 7"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5C17 4 17 7 17 7"/><path d="M4 22h16"/><path d="M10 22V10"/><path d="M14 22V10"/><path d="M8 9h8l-1 13H9L8 9Z"/></svg>
      </div>
     <?php the_field('prize_1_description');?>
    </div>
    <div class="prize-card">
      <span class="prize-card__label"> <?php the_field('price_title_2');?> </span>
      <div class="prize-card__icon">
        <svg class="icon-svg icon-svg-sm" viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
      </div>
    <?php the_field('price_description_2');?> 
    </div>
    <div class="prize-card">
      <span class="prize-card__label"><?php the_field('price_title_3');?> </span>
      <div class="prize-card__icon">
        <svg class="icon-svg icon-svg-sm" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      </div>
     <?php the_field('price_description_3');?> 
    </div>
    <div class="prize-card">
      <span class="prize-card__label"><?php the_field('price_title_4');?> </span>
      <div class="prize-card__icon">
        <svg class="icon-svg icon-svg-sm" viewBox="0 0 24 24"><rect x="3" y="8" width="18" height="4" rx="1"/><path d="M12 8v13"/><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"/><path d="M7.5 8a2.5 2.5 0 0 1 0-5C10 3 12 8 12 8"/><path d="M16.5 8a2.5 2.5 0 0 0 0-5C14 3 12 8 12 8"/></svg>
      </div>
      <?php the_field('price_description_4');?> 
    </div>
  </div>
</section>
 <!--TERMS-->
<section class="campaign-section--card">
  <div class="campaign-section__inner">
    <div class="section-header">
      <h2><?php the_field('terms_title');?> </h2>
      <p><?php the_field('terms_description');?></p>
    </div>
    <ul class="accordion">
      
      <li class="accordion-item">
        <button class="accordion-trigger" onclick="this.parentElement.classList.toggle('open')">
          <?php the_field('term_title_1');?>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="accordion-content"><div class="accordion-content__inner"><?php the_field('term_description_1');?></div></div>
      </li>
      <li class="accordion-item">
        <button class="accordion-trigger" onclick="this.parentElement.classList.toggle('open')">
          <?php the_field('term_title_2');?>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="accordion-content"><div class="accordion-content__inner"><?php the_field('term_description_2');?></div></div>
      </li>
    </ul>
  </div>
</section>
</main>
<style>
 .campaign-hero {
  background-size: cover;
  background-position: center;
  color: #fff;
} 
/* Overlay */
.campaign-hero__overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* 50% opacity black overlay */
  z-index: 1;
}

/* Hero content above overlay */
.campaign-hero__content {
  position: relative;
  z-index: 2;
  max-width: 1200px;
  width: 100%;
}
.wpcf7-form-control.wpcf7-submit {
  display: inline-block;
  background: var(--gold);
  color: var(--bg);
  font-weight: 600;
  font-size: 14px;
  padding: 12px 32px;
  border-radius: 50px;
  text-decoration: none;
  border: none;
  cursor: pointer;
  transition: opacity 0.2s;
}

</style>
<?php //get_footer(); // Include footer ?>