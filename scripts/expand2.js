 window.onload = function () {
    $(".cv_div").click(function (e) {
        e.stopPropagation();
        if ($(this).children('.cv_div').is(':visible')) {
            $(this).children('.cv_div').hide();

        } else {

            $(this).children('.cv_div').show();
        }
    });
  }
