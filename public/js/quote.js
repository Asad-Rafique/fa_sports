// FA SPORTS — Request A Quote: subtle scroll-reveal only.
// Product Interest / Preferred Contact selection is handled entirely by CSS
// (checkbox/radio + sibling selector), so no JS is required for the form itself.

document.addEventListener('DOMContentLoaded', () => {
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const revealTargets = document.querySelectorAll(
    '.fa-rq-hero, .fa-rq-intro, .fa-rq-form-layout, .fa-rq-final'
  );

  revealTargets.forEach((el) => el.classList.add('fa-rq-reveal'));

  if (prefersReducedMotion) {
    revealTargets.forEach((el) => el.classList.add('is-visible'));
    return;
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  revealTargets.forEach((el) => observer.observe(el));
});
