import API_ENDPOINT from "../../global/api_endpoint";
import { eventsCardTemplate } from "../../global/template";
import getQueryParams from "../../getQueryLink";


$(document).ready(() => {
    $('#loader').hide();

    let loading = true;
    let pageCountEvents = 2;
    let pageCountCategoryEvents = 2;
    let pageCountSearchEvents = 2;
    let pageCountSearchCategoryEvents = 2;

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
                try {
                    if (result.data.length == 0 && !result) {
                        $('#loader').hide();
                        loading = false;
                    } else {
                        loading = true;
                        return result;
                    }
                } catch (err) {
                    loading = false;
                    return err;
                }

            },
            error: function (xhr, ajaxOptions, thrownError) {
                if (xhr.status == 404) {
                    return false;
                }
            },

        });

    }

    $(window).scroll(async function () {

        let docHeight = $(document).height();
        let footerHeight = $('footer').height();

        let winHeight = $(window).height();
        let scrollPosition = $(document).scrollTop();
        let creditWrapper = $('.wrap_credit').height();
        let cardEvent = $('.wrap_list_events .row .col').height();

        let bottomWindowHeight = $(document).scrollTop() + $(window).height();
        let footerTop = docHeight - (footerHeight + creditWrapper);

        if (bottomWindowHeight >= (footerTop - (cardEvent)) && bottomWindowHeight <= footerTop && loading) {
            loading = false;
            // console.log('dalem range :' + loading)
            if (getQueryParams(window.location.href).q && getQueryParams(window.location.href).sport) {

                const resultData = await getAPI(`${API_ENDPOINT.URL_SEARCH_CATEGORY_EVENTS(
                    getQueryParams(window.location.href).q,
                    pageCountSearchCategoryEvents,
                    getQueryParams(window.location.href).sport)
                    }`);
                // console.log(resultData)

                if (resultData.current_page <= resultData.last_page) {
                    if (pageCountSearchCategoryEvents <= resultData.last_page) {
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
                                data.end_date,

                            ));
                        })
                        eventWrapper.append(res);
                        pageCountSearchCategoryEvents += 1;
                    }
                } else {
                    $('#loader').remove();
                    loading = false;

                }

            } else if (getQueryParams(window.location.href).q && !getQueryParams(window.location.href).sport) {
                const resultData = await getAPI(`${API_ENDPOINT.URL_SEARCH_EVENTS(
                    getQueryParams(window.location.href).q,
                    pageCountSearchEvents)
                    }`);
                // console.log(resultData)

                // console.log(resultData)
                if (resultData.current_page <= resultData.last_page) {
                    if (pageCountSearchCategoryEvents <= resultData.last_page) {
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
                                data.end_date,

                            ));
                        })
                        eventWrapper.append(res);

                        pageCountSearchEvents += 1;
                    }
                } else {
                    $('#loader').remove();
                    loading = false;
                }
            } else if (getQueryParams(window.location.href).sport && !getQueryParams(window.location.href).q) {
                const resultData = await getAPI(`${API_ENDPOINT.URL_CATEGORY_EVENTS(
                    pageCountCategoryEvents,
                    getQueryParams(window.location.href).sport)
                    }`);

                if (resultData.current_page <= resultData.last_page) {
                    if (pageCountSearchCategoryEvents <= resultData.last_page) {
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
                                data.end_date,

                            ));
                        })
                        eventWrapper.append(res);

                        pageCountCategoryEvents += 1;
                    }
                } else {
                    $('#loader').remove();
                    loading = false;

                }
            } else {
                const resultData = await getAPI(`${API_ENDPOINT.URL_EVENTS(pageCountEvents)}`);
                if (resultData.current_page <= resultData.last_page) {
                    if (pageCountEvents <= resultData.last_page) {
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
                                data.end_date,

                            ));
                        })
                        console.log(`${API_ENDPOINT.URL_EVENTS(pageCountEvents)}`)
                        eventWrapper.append(res);
                        pageCountEvents += 1;
                    }
                } else {
                    $('#loader').remove();
                    loading = false;

                }
            }

        }

    });

});