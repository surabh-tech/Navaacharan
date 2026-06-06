<?php
$page_title       = 'Who We Are — Navaacharan';
$page_description = 'Founded in 2023, Navaacharan is an R&D and software solutions firm that bridges the gap between research and real-world application across AI/ML, software, embedded systems and applied research.';
$page_slug        = 'about';
include 'head.php';
include 'header.php';
?>

<!-- ====================================================== Page hero -->
<section class="page-hero">
  <div class="container">
    <p class="eyebrow">Who we are</p>
    <h1 class="display">Research-led. <em class="serif-i">Real-world</em> ready.</h1>
    <p class="lead">Founded in 2023, Navaacharan is an R&amp;D and software solutions firm that bridges the gap between research and real-world application — committed to building intelligent, scalable and reliable technology that creates lasting value.</p>
  </div>
</section>

<!-- ====================================================== Mission / Vision -->
<section class="section">
  <div class="container">
    <div class="mv">
      <article class="card" data-reveal>
        <p class="eyebrow">Mission</p>
        <p class="statement" style="font-size:clamp(1.4rem,2.6vw,2rem)">To drive meaningful impact through technology — solutions that are intelligent, reliable, and built for the real world.</p>
      </article>
      <article class="card" data-reveal data-reveal-delay="1">
        <p class="eyebrow">Vision</p>
        <p class="statement" style="font-size:clamp(1.4rem,2.6vw,2rem)">To be a trusted technology partner for organisations navigating change — from research to deployment, we grow with our clients.</p>
      </article>
    </div>
  </div>
</section>

<!-- ====================================================== HTTP pillars -->
<section class="section section--alt">
  <div class="container">
    <div class="sec-head" data-reveal>
      <p class="eyebrow">What we stand for</p>
      <h2 class="h2">Four pillars behind every engagement.</h2>
    </div>
    <div class="pillars" data-reveal data-reveal-delay="1">
      <div class="pillar"><h3>Honesty</h3><p>We operate with complete integrity in every client engagement — no overpromising, no shortcuts.</p></div>
      <div class="pillar"><h3>Trust</h3><p>Earned through consistent delivery across enterprise, industry and government engagements since 2022.</p></div>
      <div class="pillar"><h3>Transparency</h3><p>Clear communication and open collaboration at every step — no black boxes, no surprises.</p></div>
      <div class="pillar"><h3>Partnership</h3><p>Long-term relationships built on shared goals and mutual growth.</p></div>
    </div>
  </div>
</section>

<!-- ====================================================== Timeline -->
<section class="section">
  <div class="container">
    <div class="sec-head" data-reveal>
      <p class="eyebrow">Our journey</p>
      <h2 class="h2">From a first product to an innovation-first company.</h2>
    </div>
    <div class="timeline">
      <div class="tl-item" data-reveal>
        <span class="tl-year">2022</span>
        <div><h3>The beginning</h3><p>Seeds of Navaacharan were sown with our first product — laying the groundwork for an innovation-first company.</p></div>
      </div>
      <div class="tl-item" data-reveal>
        <span class="tl-year">2023</span>
        <div><h3>Company founded</h3><p>Navaacharan was formally established. We delivered our first client engagements across emerging-tech sectors.</p></div>
      </div>
      <div class="tl-item" data-reveal>
        <span class="tl-year">2024</span>
        <div><h3>Scaling up</h3><p>Expanded our portfolio with enterprise software, access management and platform-based solutions across industries.</p></div>
      </div>
      <div class="tl-item" data-reveal>
        <span class="tl-year">2025</span>
        <div><h3>AI &amp; beyond</h3><p>Shifted focus towards AI-driven product development — building intelligent, scalable platforms for diverse markets.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================= CTA -->
<section class="section section--alt cta-band">
  <div class="container" data-reveal>
    <h2 class="display">Grow with a partner, not a vendor.</h2>
    <p class="lead">From research to deployment, we stay in it for the long term.</p>
    <div class="cta-band__btns">
      <a class="btn btn--primary" href="<?= $base ?>/contact.php">Get in touch <span class="arw">&rarr;</span></a>
      <a class="btn btn--ghost" href="<?= $base ?>/services.php">Our services</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
