<?php
$page_title       = 'Navaacharan — Where research meets real-world innovation';
$page_description = 'Navaacharan is an R&D and software solutions firm bridging research and real-world application — AI/ML, software development, embedded systems and applied research for industry, enterprise and government.';
$page_slug        = 'home';
include 'head.php';
include 'header.php';
?>

<!-- ============================================================ Hero -->
<section class="hero">
  <div class="hero__grid"></div>
  <div class="container hero__inner">
    <p class="eyebrow">R&amp;D &amp; Software Solutions · Since 2022</p>
    <h1 class="display">
      <span class="reveal-line"><span>Where research meets</span></span>
      <span class="reveal-line"><span><em class="serif-i">real-world</em> innovation.</span></span>
    </h1>
    <p class="lead">We bridge the gap between research and application — building intelligent, scalable and reliable technology for businesses, institutions and government.</p>
    <div class="hero__cta">
      <a class="btn btn--primary" href="<?= $base ?>/services.php">Discover our services <span class="arw">&rarr;</span></a>
      <a class="btn btn--ghost" href="<?= $base ?>/who-we-are.php">Who we are</a>
    </div>

    <div class="hero__metrics" data-reveal>
      <div class="metric"><span class="n">100%</span><span class="l">Year-on-year growth</span></div>
      <div class="metric"><span class="n">3+ yrs</span><span class="l">In operation since 2022</span></div>
      <div class="metric"><span class="n">Multi&#8209;sector</span><span class="l">Clients across industries</span></div>
    </div>
  </div>
</section>

<!-- ====================================================== What we do -->
<section class="section" id="what-we-do">
  <div class="container">
    <div class="sec-head" data-reveal>
      <p class="eyebrow">What we do</p>
      <h2 class="h2">Four disciplines, one standard of rigour.</h2>
      <p class="lead" style="max-width:54ch">From applied research to production systems — we design, build and support technology that holds up in the real world.</p>
    </div>

    <div class="grid">
      <article class="card card--link" data-reveal>
        <span class="idx">01</span>
        <h3 class="h3">AI &amp; Machine Learning</h3>
        <p>NLP, computer vision, ML pipelines and intelligent data models tailored to your use-case.</p>
        <a class="tlink" href="<?= $base ?>/services.php">Learn more <span class="arw">&rarr;</span></a>
      </article>
      <article class="card card--link" data-reveal data-reveal-delay="1">
        <span class="idx">02</span>
        <h3 class="h3">Software Development</h3>
        <p>Custom web, mobile, API and cloud solutions built for scale, performance and maintainability.</p>
        <a class="tlink" href="<?= $base ?>/services.php">Learn more <span class="arw">&rarr;</span></a>
      </article>
      <article class="card card--link" data-reveal data-reveal-delay="2">
        <span class="idx">03</span>
        <h3 class="h3">Embedded Systems &amp; IoT</h3>
        <p>Firmware, IoT, robotics and low-level systems bridging the lab to real-world deployment.</p>
        <a class="tlink" href="<?= $base ?>/services.php">Learn more <span class="arw">&rarr;</span></a>
      </article>
      <article class="card card--link" data-reveal data-reveal-delay="3">
        <span class="idx">04</span>
        <h3 class="h3">Applied R&amp;D</h3>
        <p>Domain-specific research that produces actionable insights and production-ready outcomes.</p>
        <a class="tlink" href="<?= $base ?>/services.php">Learn more <span class="arw">&rarr;</span></a>
      </article>
    </div>
  </div>
</section>

<!-- ======================================================= HTTP values -->
<section class="section section--alt" id="values">
  <div class="container split split--center">
    <div data-reveal>
      <p class="eyebrow">Our principles</p>
      <p class="statement">Building with <span class="serif-i">HTTP</span> — Honesty, Trust, Transparency &amp; Partnership.</p>
    </div>
    <div class="pillars" data-reveal data-reveal-delay="1">
      <div class="pillar"><h3>Honesty</h3><p>We say what we mean and deliver what we promise — no overpromising, no shortcuts.</p></div>
      <div class="pillar"><h3>Trust</h3><p>Earned through consistent delivery across enterprise, industry and government engagements.</p></div>
      <div class="pillar"><h3>Transparency</h3><p>We keep clients informed at every stage — no black boxes, no surprises.</p></div>
      <div class="pillar"><h3>Partnership</h3><p>Lasting innovation starts with lasting relationships. We're in it for the long term.</p></div>
    </div>
  </div>
</section>

<!-- ========================================================= Approach -->
<section class="section">
  <div class="container">
    <div class="sec-head" data-reveal>
      <p class="eyebrow">How we work</p>
      <h2 class="h2">From the right problem to a lasting solution.</h2>
    </div>
    <div class="steps">
      <div class="step" data-reveal>
        <span class="num">1</span>
        <div><h3 class="h3">Discovery &amp; Research</h3><p>We immerse in your domain, understand the challenges, and define the right problem before writing a single line of code.</p></div>
      </div>
      <div class="step" data-reveal>
        <span class="num">2</span>
        <div><h3 class="h3">Design &amp; Development</h3><p>We design scalable architectures and build with precision — from firmware to full-stack to AI models.</p></div>
      </div>
      <div class="step" data-reveal>
        <span class="num">3</span>
        <div><h3 class="h3">Delivery &amp; Support</h3><p>We deliver, deploy, and stay as long-term partners — ensuring the solution keeps delivering value.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================== Industries -->
<section class="section section--alt">
  <div class="container">
    <div class="split">
      <div class="sec-head" data-reveal style="margin-bottom:0">
        <p class="eyebrow">Industries</p>
        <h2 class="h2">Technology built for the sectors that shape tomorrow.</h2>
        <a class="tlink mt-md" href="<?= $base ?>/industries.php">Explore the industries we serve <span class="arw">&rarr;</span></a>
      </div>
      <div class="flow" data-reveal data-reveal-delay="1">
        <p class="lead" style="max-width:none">Drone &amp; aerospace engineering. Automotive &amp; industry. Infrastructure &amp; construction. Marketing &amp; media. Government &amp; administration. Enterprise &amp; SaaS.</p>
        <p class="muted">Wherever the work is demanding, reliability matters most — and that's where we do our best work.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================= CTA -->
<section class="section cta-band">
  <div class="container" data-reveal>
    <h2 class="display">Let's build something that lasts.</h2>
    <p class="lead">Ready to start? Let's discuss how Navaacharan can help you build smarter — from research to deployment.</p>
    <div class="cta-band__btns">
      <a class="btn btn--primary" href="<?= $base ?>/contact.php">Start a project <span class="arw">&rarr;</span></a>
      <a class="btn btn--ghost" href="<?= $base ?>/services.php">Our services</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
