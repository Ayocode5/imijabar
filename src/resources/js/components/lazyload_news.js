$(document).ready(() => {

    let pageCount = 2;
    const PAGE_API_URL = `http://localhost:8090/news?page=`;
    
    const newsCardTemplate = (slug, title, summary, photo, category, created_at) => {
        return `
            <div class="col mb-4" categories="${slug}">
                <a href="/news/${slug}" class="text-decoration-none">
                    <div class="card">
                        <div class="header_card_image">
                            <img src="uploads/${photo}"
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
    
    $('.btn_load_more_list_berita').click(() => {
        $.ajax({
            type: 'GET',
            url: `${PAGE_API_URL}${pageCount}`, 

            success: function(result){

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
            },

            error: function(err) {
                console.log(err)
            }
        });
        
    });
    
});
