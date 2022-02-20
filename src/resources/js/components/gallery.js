$(document).ready(() => {

    $('.modal').on('hidden.bs.modal', function (e) {
        // do something...
        $('.modal #video').attr("src", $(".modal  #video").attr("src"));
    });

    $('.thumbnail_gallery').each((index, item) => {

        item.addEventListener('click', () => {
            if (item.getAttribute("type-file") === "photo") {
                let srcPhoto = item.getAttribute("srcModal");
                $('.frame_modal_gallery img').attr('src', '');
                $('.frame_modal_gallery img').attr('src', `public/uploads/${srcPhoto}`);

            } else if (item.getAttribute("type-file") === "video") {
                $('.frame_modal_gallery iframe').attr('src', '');
                $('.frame_modal_gallery iframe').attr('src', `https://www.youtube.com/embed/${item.getAttribute("srcModal")}`)
            }
        });

    })
});
