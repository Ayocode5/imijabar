$(document).ready(() => {


    $('.modal').on('hidden.bs.modal', function (e) {
        // do something...
        $('.modal #video').attr("src", $(".modal  #video").attr("src"));
    });


})