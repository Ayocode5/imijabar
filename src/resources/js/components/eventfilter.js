$(document).ready(function() {

    /**
     * Filter Events by it's category
     */
    function filterEvents(events, filter) {
        const filteredEvents = [];
        events.forEach(event => {
            const categories = event.getAttribute('categories').split(",")
            categories.forEach(category => {
                if (filter.includes(category)) {
                    if (!filteredEvents.includes(event)) {
                        filteredEvents.push(event)
                    }
                }
            });
        });

        return filteredEvents;
    }

    const eventListsWrapper = document.querySelector('.events_wrapper')
    const events = document.querySelectorAll(".item_event");

    $(".event-category .list-dropdown .dropdown-item").click(function() {
        $(".select_category:first-child").text($(this).text());
        $(".select_category:first-child").val($(this).text());
        eventListsWrapper.innerHTML = '';
        filterEvents(events, this.getAttribute('filters').split(',')).forEach((event) => {
            eventListsWrapper.append(event);
        })
    });


})