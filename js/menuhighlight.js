document.addEventListener("DOMContentLoaded", () => {
  section = document.querySelectorAll('section');
  navLinks = document.querySelectorAll('header nav .navbar-links ul li a');

  window.onscroll = () =>{
    section.forEach(sec => {
      let top = window.scrollY;
      let offset = sec.offsetTop - 100;
      let height = sec.offsetHeight;
      let id = sec.getAttribute('id');

      if (top >= offset && top < offset + height){
        navLinks.forEach(links =>{
          links.classList.remove('current');
          document.querySelector('header nav .navbar-links ul li a[href*=' + id + ']').classList.add('current');
        });
      };
    });
  };
});