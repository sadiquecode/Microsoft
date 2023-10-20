
$(function () {
    var current_progress = 0;
    var duration = 2000;
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

