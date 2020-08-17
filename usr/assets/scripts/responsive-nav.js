const wrapper = document.querySelector('header');
const menuBtn = document.querySelector('.header-menu-btn');
const nav = document.querySelector('.header-nav');
const menuIcons = {
  'burger': `<g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#020202">
        <path d="M3 12h18"></path>
        <path d="M3 6h18"></path>
        <path d="M3 18h18"></path>
      </g>
      `,
  'x': `
      <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#020202">
        <path d="M18 6L6 18" />
        <path d="M6 6l12 12" />
      </g>
      `
};

function mobileNav(ev) {
  if (window.innerWidth <= 900) {
    wrapper.classList.remove('pure-menu-horizontal');
    menuBtn.classList.remove('hidden');
    nav.classList.add('hidden');
  } else {
    wrapper.classList.add('pure-menu-horizontal');
    menuBtn.classList.add('hidden');
    nav.classList.remove('hidden');
  }
}

function init() {
  menuBtn.innerHTML = menuIcons.burger;
  window.addEventListener('DOMContentLoaded', mobileNav);
  window.addEventListener('resize', mobileNav);
  menuBtn.addEventListener('click', () => {
    nav.classList.toggle('hidden');
    menuBtn.innerHTML = (menuBtn.innerHTML === menuIcons.burger) ? menuIcons.x : menuIcons.burger;
  });
}

init();