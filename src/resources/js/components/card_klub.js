$(".list_klub_mobil").bind("DOMSubtreeModified", function () {
    // Animation Card Click
    let overlay_car_community = document.querySelectorAll(".overlay_car_community");
    let contentOverlayCollaps = document.querySelectorAll('.content_overlay_collaps');
    let headOverlayCollaps = document.querySelectorAll('.head_overlay_collaps');
    let overlayCollaps = document.querySelectorAll('.overlay_collaps');
    let clickIcon = document.querySelectorAll('.click_icon');
    let wrapCardCommunity = document.querySelectorAll('.wrap_card_community');


    overlayCollaps.forEach((item, i) => {
        let y2 = item.clientHeight;
        let y1 = headOverlayCollaps[i].clientHeight + 48;
        item.style.transform = `translate(0px, ${y2 - y1}px)`;
    });

    overlay_car_community.forEach((element, index) => {
        element.addEventListener("click", () => {
            element.classList.toggle("overlay_show");
            element.classList.toggle("overlay_collaps");
            clickIcon[index].classList.toggle('opacity_object');
            contentOverlayCollaps[index].classList.toggle('opacity_object');
            wrapCardCommunity[index].classList.toggle('scroll_wrap_card_community');
        })
    });
});

$(".list_klub_motor").bind("DOMSubtreeModified", function () {
    // Animation Card Click
    let overlay_car_community = document.querySelectorAll(".overlay_car_community");
    let contentOverlayCollaps = document.querySelectorAll('.content_overlay_collaps');
    let headOverlayCollaps = document.querySelectorAll('.head_overlay_collaps');
    let overlayCollaps = document.querySelectorAll('.overlay_collaps');
    let clickIcon = document.querySelectorAll('.click_icon');
    let wrapCardCommunity = document.querySelectorAll('.wrap_card_community');


    overlayCollaps.forEach((item, i) => {
        let y2 = item.clientHeight;
        let y1 = headOverlayCollaps[i].clientHeight + 48;
        item.style.transform = `translate(0px, ${y2 - y1}px)`;
    });

    overlay_car_community.forEach((element, index) => {
        element.addEventListener("click", () => {
            element.classList.toggle("overlay_show");
            element.classList.toggle("overlay_collaps");
            clickIcon[index].classList.toggle('opacity_object');
            contentOverlayCollaps[index].classList.toggle('opacity_object');
            wrapCardCommunity[index].classList.toggle('scroll_wrap_card_motor_community');
        })
    });
});


$(".list_klub_mobility").bind("DOMSubtreeModified", function () {
    // Animation Card Click
    let overlay_car_community = document.querySelectorAll(".overlay_car_community");
    let contentOverlayCollaps = document.querySelectorAll('.content_overlay_collaps');
    let headOverlayCollaps = document.querySelectorAll('.head_overlay_collaps');
    let overlayCollaps = document.querySelectorAll('.overlay_collaps');
    let clickIcon = document.querySelectorAll('.click_icon');
    let wrapCardCommunity = document.querySelectorAll('.wrap_card_community');


    overlayCollaps.forEach((item, i) => {
        let y2 = item.clientHeight;
        let y1 = headOverlayCollaps[i].clientHeight + 48;
        item.style.transform = `translate(0px, ${y2 - y1}px)`;
    });

    overlay_car_community.forEach((element, index) => {
        element.addEventListener("click", () => {
            element.classList.toggle("overlay_show");
            element.classList.toggle("overlay_collaps");
            clickIcon[index].classList.toggle('opacity_object');
            contentOverlayCollaps[index].classList.toggle('opacity_object');
            wrapCardCommunity[index].classList.toggle('scroll_wrap_card_mobility_community');
        })
    });
});
