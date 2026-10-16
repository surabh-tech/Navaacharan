<?php
$page_title       = 'Industries — Navaacharan';
$page_description = 'Technology and security for the sectors that shape tomorrow — aerospace, automotive, infrastructure, media, government, enterprise, BFSI, healthcare and education.';
$page_slug        = 'industries';
include 'head.php';
include 'header.php';
?>

<!-- ====================================================== Page hero -->
<section class="page-hero">
  <div class="container">
    <p class="eyebrow">Industries</p>
    <h1 class="display">Built for the sectors that <em class="serif-i">shape tomorrow</em>.</h1>
    <p class="lead">We bring research-grade rigour to the industries where reliability matters most — from engineering to public administration.</p>
  </div>
</section>

<!-- ====================================================== Sector grid -->
<section class="section">
  <div class="container">
    <div class="grid">
      <article class="card card--sec" data-reveal>
        <p class="eyebrow">Engineering · R&amp;D</p>
        <h3 class="h3">Drone &amp; Aerospace</h3>
        <p>Embedded systems, firmware and intelligence solutions for unmanned aerial systems and precision engineering.</p>
        <p class="card__sec"><span>Security</span>Securing flight controllers, telemetry links and ground stations against hijack and data interception.</p>
      </article>
      <article class="card card--sec" data-reveal data-reveal-delay="1">
        <p class="eyebrow">Manufacturing</p>
        <h3 class="h3">Automotive &amp; Industry</h3>
        <p>Digital platforms and operational tools that enhance collaboration and efficiency across industrial ecosystems.</p>
        <p class="card__sec"><span>Security</span>OT/ICS and connected-vehicle security assessments that protect production lines and products.</p>
      </article>
      <article class="card card--sec" data-reveal data-reveal-delay="2">
        <p class="eyebrow">Consulting · Planning</p>
        <h3 class="h3">Infrastructure &amp; Construction</h3>
        <p>Software and analytical tools that streamline project planning, resource management and execution oversight.</p>
        <p class="card__sec"><span>Security</span>Protecting smart-building systems, project data and site IoT from disruption.</p>
      </article>
      <article class="card card--sec" data-reveal>
        <p class="eyebrow">Ads · Campaigns</p>
        <h3 class="h3">Marketing &amp; Media</h3>
        <p>Technology-backed creative solutions that power data-driven campaigns and brand growth strategies.</p>
        <p class="card__sec"><span>Security</span>Safeguarding customer data, websites and campaign platforms against breaches and defacement.</p>
      </article>
      <article class="card card--sec" data-reveal data-reveal-delay="1">
        <p class="eyebrow">Municipal · Civic</p>
        <h3 class="h3">Government &amp; Administration</h3>
        <p>Digital solutions for public administration — streamlining civic operations, records management and citizen-facing services.</p>
        <p class="card__sec"><span>Security</span>Security audits and VAPT aligned to CERT-In guidelines for citizen-facing portals and internal systems.</p>
      </article>
      <article class="card card--sec" data-reveal data-reveal-delay="2">
        <p class="eyebrow">SaaS · Platforms</p>
        <h3 class="h3">Enterprise &amp; SaaS</h3>
        <p>Scalable platforms, access management and enterprise software designed for performance and long-term maintainability.</p>
        <p class="card__sec"><span>Security</span>SOC 2 and ISO 27001 readiness plus product VAPT that helps you pass customer security reviews.</p>
      </article>
      <article class="card" data-reveal>
        <p class="eyebrow">BFSI · Regulated</p>
        <h3 class="h3">Banking, Finance &amp; Insurance</h3>
        <p>RBI- and SEBI-aligned audits, VAPT and continuous monitoring for regulated financial institutions.</p>
      </article>
      <article class="card" data-reveal data-reveal-delay="1">
        <p class="eyebrow">Health · Education</p>
        <h3 class="h3">Healthcare &amp; Education</h3>
        <p>Protecting patient and student records under the DPDP Act and global privacy laws.</p>
      </article>
    </div>
  </div>
</section>

<!-- ====================================================== Stats -->
<section class="section section--alt">
  <div class="container">
    <div class="hero__metrics" style="border-top:0;padding-top:0;margin-top:0" data-reveal>
      <div class="metric"><span class="n">100%</span><span class="l">Year-on-year growth — consistent doubling</span></div>
      <div class="metric"><span class="n">3+ yrs</span><span class="l">In operation since 2022</span></div>
      <div class="metric"><span class="n">Multi&#8209;sector</span><span class="l">Clients served across industries</span></div>
    </div>
  </div>
</section>

<!-- ============================================================= CTA -->
<section class="section cta-band">
  <div class="container" data-reveal>
    <h2 class="display">Don't see your sector?</h2>
    <p class="lead">Our approach travels well. If the problem is hard and reliability matters, we'd like to hear about it.</p>
    <div class="cta-band__btns">
      <a class="btn btn--primary" href="<?= $base ?>/contact.php">Start a conversation <span class="arw">&rarr;</span></a>
      <a class="btn btn--ghost" href="<?= $base ?>/services.php">Our services</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
