$(document).ready(function () {

    $('#project').click(function () {

        $('#project').each(function () {
            var href = $(this).find("a").attr("href");
            if (href) {
                window.location = href;
            }
        })
    })
});



