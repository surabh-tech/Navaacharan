<?php
$page_title       = 'Contact — Navaacharan';
$page_description = 'Get in touch with Navaacharan. Chhatrapati Sambhajinagar, Maharashtra. +91 93079 58935 · info@navaacharan.com';
$page_slug        = 'contact';
include 'head.php';
include 'header.php';
?>

<!-- ====================================================== Page hero -->
<section class="page-hero">
  <div class="container">
    <p class="eyebrow">Contact</p>
    <h1 class="display">Let's discuss how we can <em class="serif-i">help</em>.</h1>
    <p class="lead">Tell us about your project and we'll get back to you. We're committed to protecting your privacy and will never share your information without consent.</p>
  </div>
</section>

<!-- ====================================================== Contact + form -->
<section class="section">
  <div class="container">
    <div class="contact-grid">

      <div data-reveal>
        <div class="contact-detail">
          <p class="k">Email</p>
          <p class="v"><a href="mailto:info@navaacharan.com">info@navaacharan.com</a></p>
        </div>
        <div class="contact-detail">
          <p class="k">Phone</p>
          <p class="v"><a href="tel:+919307958935">+91 93079 58935</a></p>
        </div>
        <div class="contact-detail">
          <p class="k">Office</p>
          <p class="v">Chhatrapati Sambhajinagar,<br>Maharashtra 431005, India</p>
        </div>
      </div>

      <div data-reveal data-reveal-delay="1">
        <form class="form" data-contact action="<?= $base ?>/email-templates/contact-form.php" method="post">
          <div class="row">
            <div class="field">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" placeholder="Your name" required>
            </div>
            <div class="field">
              <label for="email">Email <span aria-hidden="true">*</span></label>
              <input type="email" id="email" name="email" placeholder="you@company.com" required>
            </div>
          </div>
          <div class="row">
            <div class="field">
              <label for="phone">Phone</label>
              <input type="tel" id="phone" name="phone" placeholder="+91 …">
            </div>
            <div class="field">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="How can we help?">
            </div>
          </div>
          <div class="field">
            <label for="comment">Message</label>
            <textarea id="comment" name="comment" placeholder="Tell us about your project…" required></textarea>
          </div>
          <p class="form__status" role="status" aria-live="polite"></p>
          <div>
            <button type="submit" class="btn btn--primary">Send message <span class="arw">&rarr;</span></button>
          </div>
          <p class="form__note">We are committed to protecting your privacy and will never share your information without consent.</p>
        </form>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
