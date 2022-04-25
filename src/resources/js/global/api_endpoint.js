import GLOBAL_API_URL from "./global_api_url";

const API_ENDPOINT = {

    //News
    URL_NEWS: (pageCount) => `${GLOBAL_API_URL.PAGE_API_URL_NEWS}?page=${pageCount}`,
    URL_CATEGORY_NEWS: (pageCount, categoryName) => `${GLOBAL_API_URL.PAGE_API_URL_NEWS}?page=${pageCount}&category=${categoryName}`,
    URL_SEARCH_NEWS: (q, pageCount) => `${GLOBAL_API_URL.PAGE_API_URL_NEWS}/search?q=${q}&page=${pageCount}`,
    URL_SEARCH_CATEGORY_NEWS: (q, pageCount, categoryName) => `${GLOBAL_API_URL.PAGE_API_URL_NEWS}/search?q=${q}&page=${pageCount}&category=${categoryName}`,

    // Events
    URL_EVENTS: (pageCount) => `${GLOBAL_API_URL.PAGE_API_URL_EVENTS}?page=${pageCount}`,
    URL_CATEGORY_EVENTS: (pageCount, categoryName) => `${GLOBAL_API_URL.PAGE_API_URL_EVENTS}?page=${pageCount}&sport=${categoryName}`,
    URL_SEARCH_EVENTS: (q, pageCount) => `${GLOBAL_API_URL.PAGE_API_URL_EVENTS}/search?q=${q}&page=${pageCount}`,
    URL_SEARCH_CATEGORY_EVENTS: (q, pageCount, categoryName) => `${GLOBAL_API_URL.PAGE_API_URL_EVENTS}/search?q=${q}&page=${pageCount}&sport=${categoryName}`,


    // Klub Mobil
    URL_KLUB_MOBIL: (pageCount) => `${GLOBAL_API_URL.PAGE_API_URL_KLUB_MOBIL}?page=${pageCount}`,

}

export default API_ENDPOINT;