// FA SPORTS — THE PLAYBOOK: subtle scroll-reveal only.

document.addEventListener('DOMContentLoaded', () => {
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const revealTargets = document.querySelectorAll(
    '.fa-pb-index__card, .fa-pb-featured, .fa-pb-principles__item, .fa-pb-inside__card'
  );

  revealTargets.forEach((el) => el.classList.add('fa-pb-reveal'));

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
