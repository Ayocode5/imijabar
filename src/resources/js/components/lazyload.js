$(document).ready(() => {

    let pageCount = 2;
    const PAGE_API_URL = `http://localhost:8090/news?page=`;
    
    const newsCardTemplate = (slug, title, summary, photo, category, created_at) => {
        return `
            <div class="col mb-4" categories="${slug}">
                <a href="/news/${slug}" class="text-decoration-none">
                    <div class="card">
                        <div class="header_card_image">
                            <img src="/public/uploads/${photo}"
                                class="card-img-top" alt="${title}">
                            <div
                                class="label_header_card_image d-flex justify-content-between align-items-center px-3">
                                <p style="height: 8px;" class="category_berita">
                                    ${category.name}
                                </p>
                                <p style="height: 8px;" class="realease_date">
                                    ${created_at} ini belum
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                ${title}
                            </h3>
                            <p class="author_date_list_berita">Editor &nbsp; | &nbsp;
                                <span>${created_at}</span>
                            </p>
                            <p class="card-text">
                                ${summary}
                                <span>→</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        `
    } 
    const newsWrapper = $('.wrap_list_berita .row');
    window.location();
    $('.btn_load_more_list_berita').click(() => {
        $.ajax({
            url: `${PAGE_API_URL}${pageCount}`, 
            success: function(result){
                console.log(pageCount);
                console.log('current page => ', result.current_page);
                console.log('last page => ', result.last_page);

                if (result.current_page <= result.last_page) {
                    const res = [];
                    result.data.forEach(data => {
                        res.push(newsCardTemplate(
                            data.slug, 
                            data.title, 
                            data.summary, 
                            data.photo, 
                            data.category, 
                            data.created_at));
                    });
                    newsWrapper.append(res);
                    if(result.current_page === result.last_page) {
                        $('.btn_load_more_list_berita ').remove();
                    }
                } else {
                    $('.btn_load_more_list_berita ').remove();
                    return false; 
                } 
                pageCount += 1;
            }
        });
        
    });
    
});


// $(document).ready(function() {


//     const dataBerita = [{
//             id: 1,
//             name_berita: "Hot pelajar tawuran",
//             author: "Admin",
//             description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
//             category: ['roda-dua', 'roda-empat']
//         },
//         {
//             id: 2,
//             name_berita: "Hot Kurama ngamuk",
//             author: "Admin",
//             description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
//             category: ['roda-dua']
//         },
//         {
//             id: 3,
//             name_berita: "Hot lele lepas",
//             author: "Admin",
//             description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
//             category: ['roda-empat']
//         },
//         {
//             id: 4,
//             name_berita: "Hot lele nyelem",
//             author: "Admin",
//             description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
//             category: ['roda-dua', 'roda-empat']
//         },
//         {
//             id: 5,
//             name_berita: "Hot lorem",
//             author: "Admin",
//             description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
//             category: ['roda-dua']
//         },
//         {
//             id: 6,
//             name_berita: "Hot lorem",
//             author: "Admin",
//             description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
//             category: ['roda-dua']
//         },
//         {
//             id: 7,
//             name_berita: "Hot pelajar tawuran",
//             author: "Admin",
//             description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
//             category: ['roda-dua', 'roda-empat']
//         },
//         {
//             id: 8,
//             name_berita: "Hot Kurama ngamuk",
//             author: "Admin",
//             description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
//             category: ['roda-dua']
//         },
//         {
//             id: 9,
//             name_berita: "Hot lele lepas",
//             author: "Admin",
//             description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
//             category: ['roda-empat']
//         },
//         {
//             id: 10,
//             name_berita: "Hot lele nyelem",
//             author: "Admin",
//             description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
//             category: ['roda-dua', 'roda-empat']
//         },
//         {
//             id: 11,
//             name_berita: "Hot lorem",
//             author: "Admin",
//             description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
//             category: ['roda-dua']
//         },
//         {
//             id: 12,
//             name_berita: "Hot lorem",
//             author: "Admin",
//             description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac dui dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames fermentum at libero, nuncio",
//             category: ['roda-dua']
//         }
//     ]

//     const cardNews = (id, name_berita, author, desc, categories) => {
//         return `
//                 <div class="col mb-4 news_item" category_news="roda-dua">
//                     <div class="card">
//                         <div class="header_card_image">
//                             <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img.png" class="card-img-top" alt="news-${id}">
//                             ${categories.map((item) => {
//                                 return '<div class="label_header_card_image d-flex justify-content-between align-items-center px-3"> <p style="height: 8px;" class="category_berita">' + item + '</p>' + '<p style="height: 8px;" class="realease_date">5 menit lalu</p> </div>'
//                             }).join("")}
//                         </div>
//                         <div class="card-body">
//                             <a href="/detail-berita.html">
//                                 <h3 class="card-title">${name_berita}</h3>
//                             </a>
//                             <p class="author_date_list_berita">${author} | <span>30 Januari 2022</span></p>
//                             <p class="card-text">${desc}
//                                 <span>→</span>
//                             </p>
//                         </div>
//                     </div>
//                 </div>
//             `;
//     }

//     let state = 6;

//     const wrapNews = document.querySelector('.wrap_card_news')
//     const newsCardElement = document.querySelectorAll(".news_item");

//     const render = () => {
//         for (let i = 0; i < state; i++) {
//             // console.log( dataBerita[i].category)
//             wrapNews.innerHTML += cardNews(dataBerita[i].id, dataBerita[i].name_berita, dataBerita[i]
//                 .author, dataBerita[i].description, dataBerita[i].category);
//         }
//     }

//     render();

//     const showMore = document.querySelector('.btn_load_more_list_berita');

//     showMore.addEventListener('click', () => {
//         if (dataBerita.length !== state) {
//             wrapNews.innerHTML = ''
//             state += 3;
//             render();
//         }
//     })
   
// })