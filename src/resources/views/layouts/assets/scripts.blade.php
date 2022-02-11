<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<!-- <script src="typewriter.js"></script> -->

<script src="{{ asset('storage/app/public/assets/js') }}/owl-carousel/owl.carousel.min.js"></script>
<script src="{{ asset('storage/app/public/assets/js') }}/script.js"></script>

{{-- Newsletter Subscribtion Scripts --}}
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".button_newsletter").click(function() {

            $.ajax({
                url: "/subscription",
                type: 'POST',
                data: {
                    'subs_email': $(".input_newsletter").val()
                },
                success: function(result) {
                    $(".input_newsletter").addClass("is-valid")
                    $(".input_newsletter").removeClass("is-invalid")
                    $(".input-newsletter-valid").text(result.message)
                },
                error: function(err) {
                    $(".input-newsletter-invalid").text(err.responseJSON.errors.subs_email[0])
                    $(".input_newsletter").removeClass("is-valid")
                    $(".input_newsletter").addClass("is-invalid")
                }
            });
        })

    // Filter Events by it's category
        function filterEvents(events, listFilter) {
            const filteredEvents = [];
            events.forEach(event => {
                const categories = event.getAttribute('categories').split(",")
                console.log(categories)
                categories.forEach(category => {
                    if (listFilter.includes(category)) {
                        if (!filteredEvents.includes(event)) {
                            filteredEvents.push(event)
                        }
                    }
                });
            });
        
            return filteredEvents;
        }
        
        const wrapEvents = document.querySelector('.events_wrapper')
        const events = document.querySelectorAll(".item_event");
        
        $(".event-category .list-dropdown .dropdown-item").click(function () {
            $(".select_category:first-child").text($(this).text());
            $(".select_category:first-child").val($(this).text());
            wrapEvents.innerHTML = '';
            filterEvents(events, this.getAttribute('filters').split(',')).forEach((event) => {

                wrapEvents.append(event);
            })
        });


    })
</script>
