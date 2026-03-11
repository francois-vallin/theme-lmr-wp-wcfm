/*
Thème : Le Marché Rural
Version actuelle : 2.4.0
Version de création du fichier : 0.1.0
Auteur : François Vallin

Création : 2025-04-08 00:00
Dernière modification : 2026-03-11 17:45
*/

document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.lmr-cats-carousel ul.products').forEach(function (el) {
    el.addEventListener('wheel', function (event) {
      if (Math.abs(event.deltaY) > Math.abs(event.deltaX)) {
        el.scrollLeft += event.deltaY;
        event.preventDefault();
      }
    }, { passive: false });
  });
});
