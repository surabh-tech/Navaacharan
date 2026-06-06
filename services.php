<?php
$page_title       = 'Services — Navaacharan';
$page_description = 'AI & Machine Learning, software development, embedded systems & IoT, and applied research — end-to-end, from architecture to deployment and ongoing support.';
$page_slug        = 'services';
include 'head.php';
include 'header.php';
?>

<!-- ====================================================== Page hero -->
<section class="page-hero">
  <div class="container">
    <p class="eyebrow">Services</p>
    <h1 class="display">From the <em class="serif-i">first idea</em> to production and beyond.</h1>
    <p class="lead">Web, mobile, AI, embedded and applied research — designed for scale, performance and long-term maintainability.</p>
  </div>
</section>

<!-- ====================================================== Core categories -->
<section class="section">
  <div class="container">
    <div class="grid grid--2">
      <article class="card" data-reveal>
        <span class="idx">01</span>
        <h3 class="h3">AI &amp; Machine Learning</h3>
        <p>NLP, computer vision, ML pipelines and data-driven intelligence built for real-world applications — supervised, unsupervised and reinforcement learning, with LLM integration.</p>
      </article>
      <article class="card" data-reveal data-reveal-delay="1">
        <span class="idx">02</span>
        <h3 class="h3">Software Development</h3>
        <p>Custom web, mobile, API and cloud solutions built for scale, performance and reliability — designed for long-term maintainability.</p>
      </article>
      <article class="card" data-reveal data-reveal-delay="2">
        <span class="idx">03</span>
        <h3 class="h3">Embedded Systems &amp; IoT</h3>
        <p>Firmware, IoT, robotics and low-level systems for industrial-grade applications — bridging labs to real-world deployment.</p>
      </article>
      <article class="card" data-reveal data-reveal-delay="3">
        <span class="idx">04</span>
        <h3 class="h3">Applied Research &amp; Development</h3>
        <p>Bridging the gap between cutting-edge research and real-world business impact, with production-ready outcomes.</p>
      </article>
    </div>
  </div>
</section>

<!-- ====================================================== Capabilities -->
<section class="section section--alt">
  <div class="container">
    <div class="sec-head" data-reveal>
      <p class="eyebrow">Capabilities</p>
      <h2 class="h2">End-to-end, from architecture to support.</h2>
    </div>
    <div class="grid">
      <article class="card" data-reveal><h3 class="h3">Applied Research</h3><p>Domain-specific research that produces actionable insights and production-ready outcomes.</p></article>
      <article class="card" data-reveal data-reveal-delay="1"><h3 class="h3">Custom Software</h3><p>End-to-end development from architecture design to deployment and ongoing support.</p></article>
      <article class="card" data-reveal data-reveal-delay="2"><h3 class="h3">AI-Driven Products</h3><p>Intelligent products with LLMs, computer vision and predictive analytics at the core.</p></article>
      <article class="card" data-reveal><h3 class="h3">IoT &amp; Embedded</h3><p>Low-level systems, firmware and IoT integrations for industrial and medical use-cases.</p></article>
      <article class="card" data-reveal data-reveal-delay="1"><h3 class="h3">Cloud &amp; DevOps</h3><p>Cloud-native architectures on AWS, Azure and GCP with CI/CD and containerised deployments.</p></article>
      <article class="card" data-reveal data-reveal-delay="2"><h3 class="h3">Cyber Security</h3><p>Security assessments, vulnerability testing and hardened system design for critical infrastructure.</p></article>
    </div>
  </div>
</section>

<!-- ====================================================== Tech stack -->
<section class="section">
  <div class="container">
    <div class="sec-head" data-reveal>
      <p class="eyebrow">Technology</p>
      <h2 class="h2">A stack chosen for the job, not the trend.</h2>
    </div>
    <div class="stack" data-reveal data-reveal-delay="1">
      <div class="stack__col"><h4>Front-end</h4><ul><li>HTML · CSS</li><li>React.js · Next.js</li><li>TypeScript</li><li>Bootstrap</li></ul></div>
      <div class="stack__col"><h4>Back-end</h4><ul><li>PHP · Node.js</li><li>Java · Spring</li><li>Django · Flask</li><li>Nginx</li></ul></div>
      <div class="stack__col"><h4>Databases</h4><ul><li>MySQL · PostgreSQL</li><li>MongoDB</li><li>Redis</li><li>Firebase</li></ul></div>
      <div class="stack__col"><h4>Cloud</h4><ul><li>AWS</li><li>Microsoft Azure</li><li>Google Cloud</li></ul></div>
      <div class="stack__col"><h4>Embedded &amp; IoT</h4><ul><li>C · C++</li><li>Firmware</li><li>Raspberry Pi</li><li>Autonomous systems</li></ul></div>
      <div class="stack__col"><h4>Mobile</h4><ul><li>Flutter</li><li>React Native</li><li>Android · iOS</li></ul></div>
      <div class="stack__col"><h4>Machine Learning</h4><ul><li>Supervised</li><li>Unsupervised</li><li>Reinforcement</li></ul></div>
      <div class="stack__col"><h4>Artificial Intelligence</h4><ul><li>NLP</li><li>Computer Vision</li><li>Robotics</li><li>LLM Integration</li></ul></div>
    </div>
  </div>
</section>

<!-- ============================================================= CTA -->
<section class="section section--alt cta-band">
  <div class="container" data-reveal>
    <h2 class="display">Have a problem worth solving?</h2>
    <p class="lead">Tell us about it — we'll define the right problem before proposing a solution.</p>
    <div class="cta-band__btns">
      <a class="btn btn--primary" href="<?= $base ?>/contact.php">Start a project <span class="arw">&rarr;</span></a>
      <a class="btn btn--ghost" href="<?= $base ?>/industries.php">Industries we serve</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
