// custom-script.js
function yourCustomFunction() {
  var $customGrid = $('.grid2');
  var $gridUnit = $('.grid__item');

  var gridUnitHeight = $gridUnit.height();
  var gridUnitWidth = $gridUnit.width();

  var horzCount = Math.ceil($customGrid.width() / gridUnitWidth) + 5;
  var vertCount = Math.ceil($customGrid.height() / gridUnitHeight) + 5;

  var totalGridItems = horzCount * vertCount;
  for (var i = 0; i < totalGridItems; i++) {
    var $gridUnitClone = $gridUnit.clone();
    $customGrid.append($gridUnitClone);
  }

  // Add touch interaction to grid items
  $gridUnit.on('touchstart touchmove', function (e) {
    e.preventDefault(); // Prevent default touch behavior

    // Get touch coordinates
    var touchX = e.originalEvent.touches[0].clientX;
    var touchY = e.originalEvent.touches[0].clientY;

    // Check if the touch position is within the grid item
    $gridUnit.each(function () {
      var $this = $(this);
      if (
        touchX >= $this.offset().left &&
        touchX <= $this.offset().left + $this.width() &&
        touchY >= $this.offset().top &&
        touchY <= $this.offset().top + $this.height()
      ) {
        $this.addClass('touch-hover');
      } else {
        $this.removeClass('touch-hover');
      }
    });
  });

  // Remove touch-hover class when touch ends
  $gridUnit.on('touchend', function () {
    $(this).removeClass('touch-hover');
  });
}

// Run the function on document ready
$(document).ready(function () {
  yourCustomFunction();

  // Add click event listener to the button
  $('#triggerButton').on('click', function () {
    yourCustomFunction();
  });
});
