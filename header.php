<?php
/** Site navigation. Relies on $page_slug + $base set in head.php. */
$nav = [
  'home'       => ['index.php',        'Home'],
  'about'      => ['who-we-are.php',   'Who We Are'],
  'services'   => ['services.php',     'Services'],
  'industries' => ['industries.php',   'Industries'],
  'contact'    => ['contact.php',      'Contact'],
];
?>
<header class="site-header">
  <div class="site-header__inner">
    <a class="brand" href="<?= $base ?>/index.php" aria-label="Navaacharan home"><img class="brand__logo" src="<?= $base ?>/images/logo.png" alt="Navaacharan" width="376" height="52"></a>

    <nav class="nav" aria-label="Primary">
      <ul class="nav__links">
        <?php foreach ($nav as $slug => [$href, $label]): ?>
          <li><a href="<?= $base ?>/<?= $href ?>"<?= $page_slug === $slug ? ' class="is-active"' : '' ?>><?= $label ?></a></li>
        <?php endforeach; ?>
      </ul>
      <a class="btn btn--primary" href="<?= $base ?>/contact.php">Get in touch</a>

      <button class="nav__toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
        <span></span><span></span><span></span>
      </button>
    </nav>
  </div>

  <!-- Mobile panel -->
  <div class="nav__panel" id="mobile-menu" aria-hidden="true">
    <div class="nav__panel-head">
      <a class="brand" href="<?= $base ?>/index.php" aria-label="Navaacharan home"><img class="brand__logo" src="<?= $base ?>/images/logo.png" alt="Navaacharan" width="376" height="52"></a>
      <button class="nav__close" aria-label="Close menu">&times;</button>
    </div>
    <nav class="nav__panel-links" aria-label="Mobile">
      <?php foreach ($nav as $slug => [$href, $label]): ?>
        <a href="<?= $base ?>/<?= $href ?>"<?= $page_slug === $slug ? ' class="is-active"' : '' ?>><?= $label ?></a>
      <?php endforeach; ?>
    </nav>
    <a class="btn btn--primary nav__panel-cta" href="<?= $base ?>/contact.php">Get in touch</a>
  </div>
</header>
