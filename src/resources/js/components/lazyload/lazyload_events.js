import API_ENDPOINT from "../../global/api_endpoint";
import { eventsCardTemplate } from "../../global/template";
import getQueryParams from "../../getQueryLink";


$(document).ready(() => {
    $('#loader').hide();

    let loading = true;
    let pageCountNews = 2;

    const eventWrapper = $('.wrap_list_events .row');

    async function getAPI(url) {
        return $.ajax({
            type: 'GET',
            url: url,
            beforeSend: function () {
                $('#loader').show();
            },
            complete: function () {
                $('#loader').hide();
            },
            success: function (result) {
                if (result.data.length != 0) {
                    loading = true;
                    return result;
                } else {
                    $('#loader').hide();
                    loading = true;
                }
            },
            error: function (err) {
                console.log(err);
            }
        });

    }

    $(window).scroll(async function () {

        let docHeight = $(document).height();
        let footerHeight = $('footer').height();

        let winHeight = $(window).height();
        let scrollPosition = $(document).scrollTop();
        let creditWrapper = $('.wrap_credit').height()
        let cardEvent = $('.wrap_list_events .row .col').height();

        let bottomWindowHeight = $(document).scrollTop() + $(window).height();
        let footerTop = docHeight - (footerHeight + creditWrapper);

        // console.log(docHeight, footerHeight, footerTop, winHeight, scrollPosition);

        // console.log(creditWrapper);
        // console.clear();
        // console.log("Scroll ", scrollPosition)
        // console.log("window height ", winHeight);
        // console.log("bootom window ", bottomWindowHeight);
        // console.log("batas Top ", footerTop - (cardEvent));
        // console.log("batas bawah ", footerTop);
        // console.log("footer height ", footerHeight);
        // console.log("Doc Height / 2", docHeight / 2)
        // console.log('diluar range : ' + loading)

        if (bottomWindowHeight >= (footerTop - (cardEvent)) && bottomWindowHeight <= footerTop && loading) {
            loading = false;
            // console.log('dalem range :' + loading)
            const resultData = await getAPI(`${API_ENDPOINT.URL_EVENTS(pageCountNews)}`);

            if (resultData.current_page <= resultData.last_page) {
                if (pageCountNews <= resultData.last_page) {
                    const res = [];
                    resultData.data.forEach(data => {
                        res.push(eventsCardTemplate(
                            data.slug,
                            data.name,
                            data.summary,
                            data.photo,
                            data.categories,
                            data.organizer,
                            data.location,
                            data.sports,
                            data.start_date,
                            data.date,

                        ));
                    })
                    eventWrapper.append(res);
                    console.log(`${API_ENDPOINT.URL_EVENTS(pageCountNews)}`);
                    pageCountNews += 1;
                }
            } else {
                console.log('remove')
                $('#loader').remove();
            }

        }

    });

});