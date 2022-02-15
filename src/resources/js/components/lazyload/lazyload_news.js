import API_ENDPOINT from "../../global/api_endpoint";
import newsCardTemplate from "../../global/template";
import getQueryParams from "../../getQueryLink";


$(document).ready(() => {

    let pageCount = 2;
    let pageCountCategory = 2;
    let pageCountSearch = 2;
    let pageCountSearchCategory = 2;
    const newsWrapper = $('.wrap_list_berita .row');

    function getAPI(url) {
        return $.ajax({
            url: url,
            success: function (result) {
                return result;
            },
            error: function (err) {
                return newsWrapper.append("Error Something wrong !", p);
            }
        });
    }

    $('.btn_load_more_list_berita').click(async () => {
        // search and category
        if (getQueryParams(window.location.href).q && getQueryParams(window.location.href).category) {
            const resultData = await getAPI(`${API_ENDPOINT.URL_SEARCH_CATEGORY_NEWS(
                getQueryParams(window.location.href).q,
                pageCountSearchCategory,
                getQueryParams(window.location.href).category
            )}`);

            if (resultData.current_page <= resultData.last_page) {
                const res = [];
                resultData.data.forEach(data => {
                    res.push(newsCardTemplate(
                        data.slug,
                        data.title,
                        data.summary,
                        data.photo,
                        data.category,
                        data.created_at));
                });
                newsWrapper.append(res);
                if (resultData.current_page === resultData.last_page) {
                    $('.btn_load_more_list_berita ').remove();
                }
            } else {
                $('.btn_load_more_list_berita ').remove();
                return false;
            }
            pageCountSearchCategory += 1;
        }
        // Search only
        else if (getQueryParams(window.location.href).q && !getQueryParams(window.location.href).category) {
            const resultData = await getAPI(`${API_ENDPOINT.URL_SEARCH_NEWS(
                getQueryParams(window.location.href).q,
                pageCountSearch
            )}`);

            if (resultData.current_page <= resultData.last_page) {
                const res = [];
                resultData.data.forEach(data => {
                    res.push(newsCardTemplate(
                        data.slug,
                        data.title,
                        data.summary,
                        data.photo,
                        data.category,
                        data.created_at));
                });
                newsWrapper.append(res);
                if (resultData.current_page === resultData.last_page) {
                    $('.btn_load_more_list_berita ').remove();
                }
            } else {
                $('.btn_load_more_list_berita ').remove();
                return false;
            }
            pageCountSearch += 1;
        }
        // Category only
        else if (getQueryParams(window.location.href).category && !getQueryParams(window.location.href).q) {
            const resultDataFiltered = await getAPI(`${API_ENDPOINT.URL_CATEGORY_NEWS(pageCountCategory, getQueryParams(window.location.href).category)}`)

            if (resultDataFiltered.current_page <= resultDataFiltered.last_page) {
                const resultArray = [];
                resultDataFiltered.data.forEach(data => {
                    resultArray.push(newsCardTemplate(
                        data.slug,
                        data.title,
                        data.summary,
                        data.photo,
                        data.category,
                        data.created_at));
                });
                newsWrapper.append(resultArray);
                if (resultDataFiltered.current_page === resultDataFiltered.last_page) {
                    $('.btn_load_more_list_berita ').remove();
                }
            } else {
                $('.btn_load_more_list_berita ').remove();
                return false;
            }
            pageCountCategory += 1;

            // $.ajax({
            //     url: `${API_ENDPOINT.URL_CATEGORY_NEWS(pageCountCategory, getQueryParams(window.location.href).category)}`, 
            //     success: function(result){
            //         if (result.current_page <= result.last_page) {
            //             const res = [];
            //             result.data.forEach(data => {
            //                 res.push(newsCardTemplate(
            //                     data.slug, 
            //                     data.title, 
            //                     data.summary, 
            //                     data.photo, 
            //                     data.category, 
            //                     data.created_at));
            //             });
            //             newsWrapper.append(res);
            //             if(result.current_page === result.last_page) {
            //                 $('.btn_load_more_list_berita ').remove();
            //             }
            //         } else {
            //             $('.btn_load_more_list_berita ').remove();
            //             return false; 
            //         } 
            //         pageCountCategory += 1;
            //     }
            // });

        }
        // ALL list
        else {
            const resultData = await getAPI(`${API_ENDPOINT.URL_NEWS(pageCount)}`);

            if (resultData.current_page <= resultData.last_page) {
                const res = [];
                resultData.data.forEach(data => {
                    res.push(newsCardTemplate(
                        data.slug,
                        data.title,
                        data.summary,
                        data.photo,
                        data.category,
                        data.created_at));
                });
                newsWrapper.append(res);
                if (resultData.current_page === resultData.last_page) {
                    $('.btn_load_more_list_berita ').remove();
                }
            } else {
                $('.btn_load_more_list_berita ').remove();
                return false;
            }
            pageCount += 1;

            // $.ajax({
            //     url: `${API_ENDPOINT.URL_NEWS(pageCount)}`, 
            //     success: function(result){

            //         if (result.current_page <= result.last_page) {
            //             const res = [];
            //             result.data.forEach(data => {
            //                 res.push(newsCardTemplate(
            //                     data.slug, 
            //                     data.title, 
            //                     data.summary, 
            //                     data.photo, 
            //                     data.category, 
            //                     data.created_at));
            //             });
            //             newsWrapper.append(res);
            //             if(result.current_page === result.last_page) {
            //                 $('.btn_load_more_list_berita ').remove();
            //             }
            //         } else {
            //             $('.btn_load_more_list_berita ').remove();
            //             return false; 
            //         } 
            //         pageCount += 1;
            //     }
            // });
        }

    });

});
