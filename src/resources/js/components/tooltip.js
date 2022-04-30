$(document).ready(function () {

    if (window.location.pathname === "/about") {
        $('.sejarah-text a').attr("title", "   ");

        $('.sejarah-text').find('a').attr("data-toggle", "tooltip");

        $('.sejarah-text a[data-toggle="tooltip"]').each(function () {
            $(this).tooltip({
                animated: 'fade',
                placement: 'top',
                template: `<div class="wrap_tooltip">
                        <img class="image_tooltip" src=${$(this).attr("href")} />
            
                        <div class="content_tooltip">
                            <h3>${$(this).text()}</h3>
                        </div>
                    </div>`,
            });

        })
    }

});