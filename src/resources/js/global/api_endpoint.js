import GLOBAL_API_URL from "./global_api_url";

const API_ENDPOINT = {
    URL_NEWS: (pageCount) => `${GLOBAL_API_URL.PAGE_API_URL_NEWS}${pageCount}`,
    URL_CATEGORY_NEWS: (pageCount, categoryName) => `${GLOBAL_API_URL.PAGE_API_URL_NEWS}${pageCount}&category=${categoryName}`,
    URL_EVENTS: (pageCount) => `${GLOBAL_API_URL.PAGE_API_URL_EVENTS}${pageCount}`,
}

export default API_ENDPOINT;