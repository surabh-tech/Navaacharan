/* =========================================================================
   Navaacharan — main.js
   Vanilla, no dependencies. Reveal-on-scroll, sticky header state,
   mobile nav, hero load animation, contact-form AJAX submit.
   ========================================================================= */
(function () {
  'use strict';

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---- Hero load reveal ---- */
  window.addEventListener('load', function () {
    document.body.classList.add('loaded');
  });
  // fallback in case load already fired
  if (document.readyState === 'complete') document.body.classList.add('loaded');

  /* ---- Sticky header: transparent over hero -> solid once scrolled ---- */
  var header = document.querySelector('.site-header');
  function onScroll() {
    if (!header) return;
    if (window.scrollY > 40) header.classList.add('is-solid');
    else header.classList.remove('is-solid');
  }
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });

  /* ---- Mobile nav ---- */
  var toggle = document.querySelector('.nav__toggle');
  var close  = document.querySelector('.nav__close');
  var panel  = document.querySelector('.nav__panel');
  function openNav()  {
    document.body.classList.add('nav-open');
    if (toggle) { toggle.setAttribute('aria-expanded', 'true'); toggle.setAttribute('aria-label', 'Close menu'); }
    if (panel) panel.setAttribute('aria-hidden', 'false');
  }
  function closeNav() {
    document.body.classList.remove('nav-open');
    if (toggle) { toggle.setAttribute('aria-expanded', 'false'); toggle.setAttribute('aria-label', 'Open menu'); }
    if (panel) panel.setAttribute('aria-hidden', 'true');
  }
  if (toggle) toggle.addEventListener('click', function () {
    document.body.classList.contains('nav-open') ? closeNav() : openNav();
  });
  if (close)  close.addEventListener('click', closeNav);
  document.querySelectorAll('.nav__panel a').forEach(function (a) {
    a.addEventListener('click', closeNav);
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeNav();
  });

  /* ---- Reveal on scroll ---- */
  var revealEls = document.querySelectorAll('[data-reveal]');
  if (reduceMotion || !('IntersectionObserver' in window)) {
    revealEls.forEach(function (el) { el.classList.add('is-in'); });
  } else {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-in');
          io.unobserve(entry.target);
        }
      });
    }, { rootMargin: '0px 0px -10% 0px', threshold: 0.1 });
    revealEls.forEach(function (el) { io.observe(el); });
  }

  /* ---- Contact form AJAX submit ---- */
  var form = document.querySelector('form[data-contact]');
  if (form) {
    var status = form.querySelector('.form__status');
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var btn = form.querySelector('button[type="submit"]');
      var original = btn ? btn.textContent : '';
      if (btn) { btn.disabled = true; btn.textContent = 'Sending…'; }
      if (status) { status.className = 'form__status'; status.textContent = ''; }

      fetch(form.getAttribute('action'), {
        method: 'POST',
        body: new FormData(form)
      })
        .then(function (r) { return r.json(); })
        .then(function (data) {
          if (status) {
            status.className = 'form__status ' + (data.alert || '').replace(/^alert\s+/, '');
            status.textContent = data.message || 'Thank you.';
          }
          if (data.alert && data.alert.indexOf('success') !== -1) form.reset();
        })
        .catch(function () {
          if (status) {
            status.className = 'form__status alert-danger';
            status.textContent = 'Something went wrong. Please email info@navaacharan.com directly.';
          }
        })
        .finally(function () {
          if (btn) { btn.disabled = false; btn.textContent = original; }
        });
    });
  }

  /* ---- Footer year ---- */
  var y = document.querySelector('[data-year]');
  if (y) y.textContent = new Date().getFullYear();

  /* Signal successful init so the inline failsafe in footer.php stands down. */
  window.__navReady = true;
})();
