(function () {
  const header = document.querySelector('.site-header');
  const toggle = document.querySelector('.menu-toggle');
  const navigation = document.querySelector('.site-navigation');

  if (!header || !toggle || !navigation) {
    return;
  }

  toggle.addEventListener('click', function () {
    const isOpen = header.classList.toggle('is-menu-open');
    toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  });

  navigation.addEventListener('click', function (event) {
    if (!event.target.closest('a')) {
      return;
    }

    header.classList.remove('is-menu-open');
    toggle.setAttribute('aria-expanded', 'false');
  });
})();
