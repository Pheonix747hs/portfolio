// custom-script.js
$(document).ready(function () {
  var $customGrid = $('.grid2');
  var $gridUnit = $('.grid__item');

  var gridUnitHeight = $gridUnit.height();
  var gridUnitWidth = $gridUnit.width();

  function addGridItems() {
    var horzCount = Math.ceil($customGrid.width() / gridUnitWidth) + 5;
    var vertCount = Math.ceil($customGrid.height() / gridUnitHeight) + 5;

    var totalGridItems = horzCount * vertCount;
    for (var i = 0; i < totalGridItems; i++) {
      var $gridUnitClone = $gridUnit.clone();
      $customGrid.append($gridUnitClone);
    }
  }

  // Initial load
  addGridItems();

  // Add more grids as user scrolls down
  $(window).on('scroll', function () {
    var scrollPosition = $(window).scrollTop();
    var windowHeight = $(window).height();
    var documentHeight = $(document).height();

    // Adjust this value based on when you want to trigger more grids
    var triggerPoint = 0.8; // 80% down the page

    if (scrollPosition > (triggerPoint * (documentHeight - windowHeight))) {
      addGridItems();
    }
  });

  // Add touch interaction to grid items
  $gridUnit.on('touchstart touchmove', function (e) {
    e.preventDefault();

    // Touch event handling code...
  });

  $gridUnit.on('touchend', function () {
    $(this).removeClass('touch-hover');
  });
});
