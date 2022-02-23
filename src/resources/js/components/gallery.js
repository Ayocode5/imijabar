$(document).ready(() => {

    $('.modal').on('hidden.bs.modal', function (e) {
        // do something...
        $(this).parent().find('#video').attr("src", $(this).parent().find("#video").attr("src"));
    });

    $('.thumbnail_gallery').on('click', function (e) {
        if (this.getAttribute("type-file") === "photo") {
            let srcPhoto = this.getAttribute("srcModal");

            $(this).parent().find('.frame_modal_gallery img').attr('src', '');
            $(this).parent().find('.frame_modal_gallery img').attr('src', `public/uploads/${$(this).attr("srcModal")}`);

        } else if (this.getAttribute("type-file") === "video") {
            // e.preventDefault();
            // let srcVideo = $(this).attr("srcModal");

            if ($(this).parent().find(`.frame_modal_body_video`).children().length > 0) {
                // return false;
            } else {
                $(this).parent().find(`.frame_modal_body_video`).append(`<iframe loading="lazy" class="embed-responsive-this skeleton" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="video" width="100%" height="360" src="https://www.youtube.com/embed/${$(this).attr("srcModal")}"></iframe>`);
            }
        }
    })


});
