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

// FONCTION FILTRE

// });
$(document).ready(function () {
  // Écouteur d'événements pour les changements de curseur et de sélection
  $('#price-range, #mileage-range, #year-select').on(
    'input change',
    function () {
      // Récupération des valeurs actuelles des curseurs et de la sélection
      var price = parseInt($('#price-range').val());
      var mileage = parseInt($('#mileage-range').val());
      var year = parseInt($('#year-select').val());

      // Boucle de chaque voiture / envoie au filtre
      $('.box').each(function () {
        var carPrice = parseInt($(this).data('price'));
        var carMileage = parseInt($(this).data('mileage'));
        var carYear = parseInt($(this).data('year'));

        // Vérification des conditions du filtre
        var showCar = true;
        if (price > 0 && carPrice > price) {
          showCar = false;
        }
        if (mileage > 0 && carMileage > mileage) {
          showCar = false;
        }
        if (year > 0 && carYear < year) {
          showCar = false;
        }

        // Affichage / masquage de la voiture en fonction du filtre
        if (showCar) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    }
  );
});
