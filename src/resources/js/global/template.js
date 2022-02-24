import timeSince from '../getTimeSince';


const newsCardTemplate = (slug, title, summary, photo, category, created_at) => {
    return `
        <div class="col mb-4" categories="${slug}">
            <a href="/news/${slug}" class="text-decoration-none">
                <div class="card">
                    <div class="header_card_image">
                        <img src="/uploads/${photo}"
                            class="card-img-top" alt="${title}">
                        <div
                            class="label_header_card_image d-flex justify-content-between align-items-center px-3">
                            <p style="height: 8px;" class="category_berita">
                                ${category.name}
                            </p>
                            <p style="height: 8px;" class="realease_date">
                                ${timeSince(new Date(created_at))}
                            </p >
                        </div >
                    </div >
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
                </div >
            </a >
        </div >
    `
}


const eventsCardTemplate = (slug, name, summary, photo, categories, organizer, location, sports, start_date, end_date) => {
    return `
    <div class="col mb-4">
        <a class="text-decoration-none text-dark" href="/event/${slug}">
            <img class="calender_pin"
                src="/images/calender_pin.svg"
                alt="calender pin image">
            <div class="card">
                <div class="header_card_image shadow">
                    <div class="feature_image_event_list">
                        <img src="/uploads/${photo}"
                            class="card-img-top image_feature_event" alt="featured image">
                        <div class="ribbon_wrapper">
                            ${categories.map((category) => {
        return "<div class='ribbon_category_event text-white'>" +
            category.name + "</div>"
    }).join("")}
                        </div>
                    </div>
                </div>
                <div class="card-body" style="background-color: #f5f5f5">
                    <div class="card-title">
                        <h3>
                            ${name}
                        </h3>
                        <p class="presented_events">
                            Presented by : ${organizer}
                        </p>
                        
                    </div>
                    <div class="d-flex flex-wrap justify-content-between  card_events_list_detail">
                        <div class="col-12 col-md-5 pt-3 location_events_list">
                            ${location}
                        </div>
                        <div class="col-12 col-md-7 pt-3 date_events_list pl-0 align-self-center">
                            <div class="d-flex justify-content-center">
                                <p class="ml-2">
                                    ${new Date(start_date.replace(/-/g, '/')).toLocaleDateString('en', { weekday: 'long' })} - ${new Date(end_date.replace(/-/g, '/')).toLocaleDateString('en', { weekday: 'long' })}
                                    <br />
                                    <span>
                                    ${new Date(start_date.replace(/-/g, '/')).getDate()} - ${new Date(end_date.replace(/-/g, '/')).toLocaleDateString('en-GB', {
        day: "numeric",
        month: "long",
        year: "numeric",
    })}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    `
}


export {
    newsCardTemplate,
    eventsCardTemplate,
};