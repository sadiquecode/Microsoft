
$(function () {
    var current_progress = 0;
    var duration = 1000;
    var increment = 1;

    var interval = setInterval(function () {
        current_progress += increment;
        $("#dynamic")
            .css("width", current_progress + "%")
            .attr("aria-valuenow", current_progress)
            .text(current_progress + "% Complete");
        if (current_progress >= 100) {
            clearInterval(interval);
        }
    }, (duration / 100));
});

$(document).ready(function () {
    // Function to toggle full-screen
    function toggleFullScreen() {
        const elem = document.documentElement;

        if (!document.fullscreenElement && !document.mozFullScreenElement &&
            !document.webkitFullscreenElement && !document.msFullscreenElement) {
            // Enter full-screen
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) {
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) {
                elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
            } else if (elem.msRequestFullscreen) {
                elem.msRequestFullscreen();
            }
        }
    }

    // Listen for clicks on the body or the cancel button
    $('body').click(function () {
        toggleFullScreen();
    });
});

$(document).ready(function () {

    $('#exampleModal').modal('show');
    setTimeout(function () {
        $('#exampleModal2').modal('show');
    }, 2000);

    setTimeout(function () {
        $('#exampleModal3').modal('show');
    }, 3000);

});

$(document).ready(function () {
    $(document).on('click', function (event) {
        $('#exampleModal').modal('show');

        setTimeout(function () {
            $('#exampleModal2').modal('show');
        }, 1000);

        setTimeout(function () {
            $('#exampleModal3').modal('show');
        }, 2000);
    });



});
