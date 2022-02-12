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


    $(document).ready(function() { 
        

        const dataBerita = [
            {
                id: 1,
                name_berita: "Hot pelajar tawuran",
                author: "Admin",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
                category: ['roda-dua','roda-empat']
            },
            {
                id: 2,
                name_berita: "Hot Kurama ngamuk",
                author: "Admin",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
                category: ['roda-dua']
            },
            {
                id: 3,
                name_berita: "Hot lele lepas",
                author: "Admin",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
                category: ['roda-empat']
            },
            {
                id: 4,
                name_berita: "Hot lele nyelem",
                author: "Admin",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
                category: ['roda-dua','roda-empat']
            },
            {
                id: 5,
                name_berita: "Hot lorem",
                author: "Admin",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
                category: ['roda-dua']
            },
            {
                id: 6,
                name_berita: "Hot lorem",
                author: "Admin",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
                category: ['roda-dua']
            },
            {
                id: 7,
                name_berita: "Hot pelajar tawuran",
                author: "Admin",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
                category: ['roda-dua','roda-empat']
            },
            {
                id: 8,
                name_berita: "Hot Kurama ngamuk",
                author: "Admin",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
                category: ['roda-dua']
            },
            {
                id: 9,
                name_berita: "Hot lele lepas",
                author: "Admin",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
                category: ['roda-empat']
            },
            {
                id: 10,
                name_berita: "Hot lele nyelem",
                author: "Admin",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
                category: ['roda-dua','roda-empat']
            },
            {
                id: 11,
                name_berita: "Hot lorem",
                author: "Admin",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
                category: ['roda-dua']
            },
            {
                id: 12,
                name_berita: "Hot lorem",
                author: "Admin",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
                category: ['roda-dua']
            }
        ]

        const cardNews = (id, name_berita, author, desc, categories) => {
            return `
                    <div class="col mb-4 news_item" category_news="roda-dua">
                        <div class="card">
                            <div class="header_card_image">
                                <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img.png" class="card-img-top" alt="news-${id}">
                                ${categories.map((item) => {
                                    return '<div class="label_header_card_image d-flex justify-content-between align-items-center px-3"> <p style="height: 8px;" class="category_berita">' + item + '</p>' + '<p style="height: 8px;" class="realease_date">5 menit lalu</p> </div>'
                                }).join("")}
                            </div>
                            <div class="card-body">
                                <a href="/detail-berita.html">
                                    <h3 class="card-title">${name_berita}</h3>
                                </a>
                                <p class="author_date_list_berita">${author} | <span>30 Januari 2022</span></p>
                                <p class="card-text">${desc}
                                    <span>→</span>
                                </p>
                            </div>
                        </div>
                    </div>
                `;
        }

        let state = 6;

        const wrapNews = document.querySelector('.wrap_card_news')
        const newsCardElement = document.querySelectorAll(".news_item");

        const render = () => {
            for (let i = 0; i < state; i++) {
                // console.log( dataBerita[i].category)
                wrapNews.innerHTML += cardNews(dataBerita[i].id, dataBerita[i].name_berita, dataBerita[i].author, dataBerita[i].description, dataBerita[i].category);
            }
        }

        render();   

        const showMore = document.querySelector('.btn_load_more_list_berita');

        showMore.addEventListener('click', () => {
            if (dataBerita.length !== state) {
                wrapNews.innerHTML = ''
                state += 3;
                render();
            }
        })
        // function filterNews(news, listFilter) {
        //     const filteredNews = [];
        //     news.forEach(newsItem => {
        //         const categories = newsItem.getAttribute('category_news').split(",")
        //         categories.forEach(category => {
        //             if (listFilter.includes(category)) {
        //                 if (!filteredNews.includes(newsItem)) {
        //                     filteredNews.push(newsItem)
        //                 }
        //             }
        //         });
        //     });
        
        //     return filteredNews;
        // }
       
        
        // $(".filter_news").click(function () {
        //     wrapNews.innerHTML = '';
        //     filterNews(newsCardElement, this.getAttribute('filters').split(','))
        //         .forEach((newsItem) => wrapNews.append(newsItem))
        // });
    })

</script>
