$(document).ready(() => {

    $('.modal').on('hidden.bs.modal', function (e) {
        // do something...
        $('.modal #video').attr("src", $(".modal  #video").attr("src"));
    });

    $('.thumbnail_gallery').each((index, item) => {

        item.addEventListener('click', (e) => {
            if (item.getAttribute("type-file") === "photo") {
                let srcPhoto = item.getAttribute("srcModal");
                // $('.wrap_modal_body').html('');
                // $('.wrap_modal_body').append(galleryIframeVideo(`public/uploads/${srcPhoto}`));
                $('.frame_modal_gallery img').attr('src', '');
                $('.frame_modal_gallery img').attr('src', `public/uploads/${srcPhoto}`);

            } else if (item.getAttribute("type-file") === "video") {
                e.preventDefault();
                let srcVideo = item.getAttribute("srcModal");
                $('.frame_modal_body_video').html('');
                $('.frame_modal_body_video').append(`<iframe loading="lazy" class="embed-responsive-item skeleton" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="video" width="100%" height="300" src="https://www.youtube.com/embed/${srcVideo}">
                </iframe>`);

                // $('.frame_modal_gallery iframe').attr('src', '');
                // $('.frame_modal_gallery iframe').attr('src', `https://www.youtube.com/embed/${item.getAttribute("srcModal")}`)
            }
        });

    })
});
