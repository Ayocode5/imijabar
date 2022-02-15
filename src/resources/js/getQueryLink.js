function getQueryParams(url = window.location) {
    // Create a params object
    let params = {};
    new URL(url).searchParams.forEach(function (val, key) {
        if (params[key] !== undefined) {
            if (!Array.isArray(params[key])) {
                params[key] = [params[key]];
            }
            params[key].push(val);
        } else {
            params[key] = val;
        }
    });
    return params;
}

export default getQueryParams;