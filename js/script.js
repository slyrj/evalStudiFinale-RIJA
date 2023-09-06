document
  .querySelectorAll('.about .video-container .controls .control-btn')
  .forEach((btn) => {
    btn.onclick = () => {
      let src = btn.getAttribute('data-src');
      document.querySelector('.about .video-container .video').src = src;
    };
  });

document.addEventListener('DOMContentLoaded', function () {
  let menuBtn = document.getElementById('menu-btn');
  let navbar = document.querySelector('.navbar');

  menuBtn.addEventListener('click', function () {
    navbar.classList.toggle('active');
  });
});
