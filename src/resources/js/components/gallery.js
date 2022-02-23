$(document).ready(() => {

    $('.modal').on('hidden.bs.modal', function (e) {
        // do something...
        $('.modal #video').attr("src", $(".modal  #video").attr("src"));
    });

    $('.thumbnail_gallery').on('click', function (e) {
        console.log('test')
        if (this.getAttribute("type-file") === "photo") {
            let srcPhoto = this.getAttribute("srcModal");

            $(this).parent().find('.frame_modal_gallery img').attr('src', '');
            $(this).parent().find('.frame_modal_gallery img').attr('src', `public/uploads/${srcPhoto}`);

        } else if (this.getAttribute("type-file") === "video") {
            e.preventDefault();
            let srcVideo = this.getAttribute("srcModal");

            if ($(this).parent().find(`.frame_modal_body_video`).children().length > 0) {
            } else {
                $(this).parent().find(`.frame_modal_body_video`).append(`<iframe loading="lazy" class="embed-responsive-this skeleton" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="video" width="100%" height="480" src="https://www.youtube.com/embed/${srcVideo}"></iframe>`);
            }
        }
    })


});
