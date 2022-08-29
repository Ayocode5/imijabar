$(document).ready(function () {
    /**
     * Filter Events by it's category
     */
    function filterEvents(events, filter) {
        const filteredEvents = [];
        events.forEach((event) => {
            const categories = event.getAttribute("categories").split(",");
            categories.forEach((category) => {
                if (filter.includes(category)) {
                    if (!filteredEvents.includes(event)) {
                        filteredEvents.push(event);
                    }
                }
            });
        });

        return filteredEvents;
    }

    const eventListsWrapper = document.querySelector(".events_wrapper_home");
    const events = document.querySelectorAll(".item_event");

    $(".filter_events").change(() => {
        document.querySelector(".filter_events")[
            document.querySelector(".filter_events").selectedIndex
        ].value;
        eventListsWrapper.innerHTML = "";
        filterEvents(
            events,
            document
                .querySelector(".filter_events")
                [
                    document.querySelector(".filter_events").selectedIndex
                ].value.split(",")
        ).forEach((event) => {
            eventListsWrapper.append(event);
        });
    });

    const contentOvrlayEvent = document.querySelector(
        ".content_overlay_image_event_detail"
    );
    const featuredImageEvent = document.querySelector(
        ".featured_image_event_detail"
    );

    if (featuredImageEvent != null) {
        featuredImageEvent.style.height = `${
            contentOvrlayEvent.clientHeight + 48
        }px`;
    }

});
