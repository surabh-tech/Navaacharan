<?php
$page_title       = 'Cybersecurity Services — VAPT, Audit & Compliance | Navaacharan';
$page_description = 'VAPT, security audits, vCISO and ISO 27001 / SOC 2 compliance services from Navaacharan, Chhatrapati Sambhajinagar. Find and fix risk before attackers do.';
$page_slug        = 'cybersecurity';
$cyber_services   = require 'cyber-services.php';
include 'head.php';
include 'header.php';
?>

<!-- ====================================================== Page hero -->
<section class="page-hero">
  <div class="container">
    <p class="eyebrow">Cybersecurity Services · Audit · VAPT · Compliance</p>
    <h1 class="display">Security built on <em class="serif-i">evidence</em>, not assumptions.</h1>
    <p class="lead">We find the gaps in your applications, networks and cloud before attackers do — then help you close them, prove compliance and stay secure.</p>
    <div class="hero__cta">
      <a class="btn btn--primary" href="<?= $base ?>/contact.php">Book a security assessment <span class="arw">&rarr;</span></a>
      <a class="btn btn--ghost" href="#services">View our services</a>
    </div>
  </div>
</section>

<!-- ====================================================== Intro -->
<section class="section">
  <div class="container split">
    <div class="sec-head" data-reveal style="margin-bottom:0">
      <p class="eyebrow">Why it matters</p>
      <h2 class="h2">Every technology system is a target.</h2>
    </div>
    <p class="lead" style="max-width:none" data-reveal data-reveal-delay="1">Every organisation is now a technology organisation, and every technology system is a target. Navaacharan brings the same research-driven rigour we use to build software, AI and embedded systems to testing and securing them. We combine hands-on offensive testing with structured audits and compliance guidance, so you get both the technical findings and the roadmap to fix them.</p>
  </div>
</section>

<!-- ====================================================== Why Navaacharan -->
<section class="section section--alt">
  <div class="container">
    <div class="sec-head" data-reveal>
      <p class="eyebrow">Why Navaacharan for security</p>
      <h2 class="h2">Builders who know where systems break.</h2>
    </div>
    <div class="grid">
      <article class="card" data-reveal>
        <span class="idx">01</span>
        <h3 class="h3">Builders, not just testers.</h3>
        <p>We engineer software, AI and IoT systems, so our findings come with fixes your developers can actually apply.</p>
      </article>
      <article class="card" data-reveal data-reveal-delay="1">
        <span class="idx">02</span>
        <h3 class="h3">Manual depth, not scanner dumps.</h3>
        <p>Automated tools start the work; experienced testers finish it, verifying every finding and removing false positives.</p>
      </article>
      <article class="card" data-reveal data-reveal-delay="2">
        <span class="idx">03</span>
        <h3 class="h3">Reports for two audiences.</h3>
        <p>An executive summary for leadership and step-by-step technical detail for your engineering team.</p>
      </article>
      <article class="card" data-reveal>
        <span class="idx">04</span>
        <h3 class="h3">Free retest.</h3>
        <p>After you remediate, we retest the reported issues and confirm closure.</p>
      </article>
      <article class="card" data-reveal data-reveal-delay="1">
        <span class="idx">05</span>
        <h3 class="h3">Confidential by default.</h3>
        <p>NDA before scoping, strict handling of your data, and testing only within written, agreed scope.</p>
      </article>
      <article class="card" data-reveal data-reveal-delay="2">
        <span class="idx">06</span>
        <h3 class="h3">Standards-aligned.</h3>
        <p>Methodology mapped to OWASP, NIST, PTES and ISO/IEC 27001 controls.</p>
      </article>
    </div>
  </div>
</section>

<!-- ====================================================== Services -->
<section class="section section--dark" id="services">
  <div class="container">
    <div class="sec-head" data-reveal>
      <p class="eyebrow">Our services</p>
      <h2 class="h2">From first test to lasting assurance.</h2>
    </div>
    <div class="grid grid--4">
      <?php foreach ($cyber_services as $i => $s): ?>
        <article class="card card--link" data-reveal<?= $i % 4 ? ' data-reveal-delay="' . $i % 4 . '"' : '' ?>>
          <span class="idx"><?= sprintf('%02d', $i + 1) ?></span>
          <h3 class="h3"><?= htmlspecialchars($s['title']) ?></h3>
          <p><?= htmlspecialchars($s['line']) ?></p>
          <a class="tlink" href="#<?= $s['slug'] ?>">What's included <span class="arw">&rarr;</span></a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ====================================================== Service detail -->
<section class="section">
  <div class="container">
    <div class="sec-head" data-reveal>
      <p class="eyebrow">Service detail</p>
      <h2 class="h2">What each engagement includes.</h2>
    </div>
    <?php foreach ($cyber_services as $i => $s): ?>
      <article class="svc" id="<?= $s['slug'] ?>" data-reveal>
        <div>
          <span class="idx"><?= sprintf('%02d', $i + 1) ?></span>
          <h3 class="h3"><?= htmlspecialchars($s['title']) ?></h3>
          <p><strong><?= htmlspecialchars($s['tagline']) ?></strong> <?= htmlspecialchars($s['body']) ?></p>
          <?php if (!empty($s['cta'])): ?>
            <a class="tlink" href="<?= $base ?>/contact.php?service=<?= $s['slug'] ?>"><?= htmlspecialchars($s['cta']) ?> <span class="arw">&rarr;</span></a>
          <?php endif; ?>
        </div>
        <div>
          <h4>What's included</h4>
          <ul class="checklist">
            <?php foreach ($s['includes'] as $item): ?>
              <li><?= htmlspecialchars($item) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- ====================================================== How we work -->
<section class="section section--alt">
  <div class="container">
    <div class="sec-head" data-reveal>
      <p class="eyebrow">How we work</p>
      <h2 class="h2">From scope to verified closure.</h2>
    </div>
    <div class="steps">
      <div class="step" data-reveal>
        <span class="num">1</span>
        <div><h3 class="h3">Scope &amp; Discovery</h3><p>We understand your business, map your assets and agree a clear, written scope and rules of engagement.</p></div>
      </div>
      <div class="step" data-reveal>
        <span class="num">2</span>
        <div><h3 class="h3">Assess &amp; Test</h3><p>We combine automated scanning with manual testing and audit review to uncover real, exploitable risk.</p></div>
      </div>
      <div class="step" data-reveal>
        <span class="num">3</span>
        <div><h3 class="h3">Report, Remediate &amp; Retest</h3><p>You receive prioritised findings with fixes; we support remediation and verify closure.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================= FAQs -->
<section class="section">
  <div class="container split">
    <div class="sec-head" data-reveal style="margin-bottom:0">
      <p class="eyebrow">FAQs</p>
      <h2 class="h2">Questions we hear most.</h2>
      <a class="tlink mt-md" href="<?= $base ?>/contact.php">Talk to a security expert <span class="arw">&rarr;</span></a>
    </div>
    <div class="faq" data-reveal data-reveal-delay="1">
      <details>
        <summary>What is the difference between a vulnerability assessment and a penetration test?</summary>
        <p>A vulnerability assessment identifies and lists known weaknesses. A penetration test goes further, safely exploiting them to show real-world impact. VAPT combines both.</p>
      </details>
      <details>
        <summary>Will testing disrupt our live systems?</summary>
        <p>No. We agree scope, timing and rules of engagement in writing first, avoid destructive techniques, and can test in staging or off-peak hours.</p>
      </details>
      <details>
        <summary>How long does a VAPT engagement take?</summary>
        <p>Most web application tests take one to two weeks, depending on size and complexity. We share a timeline with every proposal.</p>
      </details>
      <details>
        <summary>Do you help us fix the issues you find?</summary>
        <p>Yes. Every finding includes remediation steps, our team supports your developers, and we retest to confirm each issue is closed.</p>
      </details>
      <details>
        <summary>Can you get us ISO 27001 or SOC 2 certified?</summary>
        <p>We prepare you end to end — gap analysis, documentation, controls and audit readiness. The certificate itself is issued by an accredited certification body, and we support you through that audit.</p>
      </details>
      <details>
        <summary>Do you sign an NDA?</summary>
        <p>Always, before any scoping discussion that involves your systems or data.</p>
      </details>
      <details>
        <summary>What does a vCISO cost compared with a full-time CISO?</summary>
        <p>A vCISO is engaged on a monthly retainer for a set number of days, typically a fraction of a full-time senior hire. We size it to your needs.</p>
      </details>
    </div>
  </div>
</section>

<!-- ============================================================= CTA -->
<section class="section section--alt cta-band">
  <div class="container" data-reveal>
    <h2 class="display">Know your risk before someone else does.</h2>
    <p class="lead">Tell us what you need to protect. We'll come back with a scoped proposal, timeline and quote.</p>
    <div class="cta-band__btns">
      <a class="btn btn--primary" href="<?= $base ?>/contact.php">Request a free consultation <span class="arw">&rarr;</span></a>
      <a class="btn btn--ghost" href="<?= $base ?>/industries.php">Industries we serve</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
