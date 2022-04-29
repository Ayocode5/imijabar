import { join } from 'lodash';
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
            <span>${new Date(created_at).toLocaleDateString('en-GB', {
        day: "numeric",
        month: "long",
        year: "numeric",
    })}</span>
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


const klubMobilCardTemplate = (clubName, leader, linkImage, establishmentDate, listSocialMedia, category) => {
    return `    
    <div class="col mb-4">
        <div class="card wrap_card_community border-0 position-relative d-block">
            <img src="${linkImage}" class="card-img-top image_card_klub_mobil" alt="logo club ${category}">

            <div class="position-absolute overlay_collaps overlay_car_community h-100 w-100">

                <div class="head_overlay_collaps">
                    <h5 class="card-title">${clubName}</h5>

                    <div style="color: rgba(244, 244, 249, 0.8);"
                        class="d-flex subtittle_card justify-content-between align-items-center">
                        <p style="margin-bottom: 0;">Dibentuk Pada: ${new Date(establishmentDate.replace(/-/g, '/')).toLocaleDateString('en-GB', {
        day: "numeric",
        month: "long",
        year: "numeric",
    })}</p>
                        <div class="click_icon">
                            <p
                                style="font-size:10px; font-weight: 700; margin-bottom: 0; text-align: center;">
                                Click
                                Me</p>
                            <img class="mx-auto d-block" src="/images/cursor-hand-click.svg"
                                alt="click icon">
                        </div>
                    </div>
                </div>

                <div class="content_overlay_collaps opacity_object">
                    <div class="leader_name">
                        <p style="margin-bottom: 0;">Ketua Komunitas:</p>
                        <p class="">${leader}</p>
                    </div>
                    <p style="margin-bottom: 0;">Terhubung Bersama Kami:</p>
                    <div class="sosial_media_klub_mobil align-self-end">
                        <p>
                        ${Object.keys(listSocialMedia).map(key => listSocialMedia[key] === null ? `` : key === "email" ? `<a target="_blank" rel="noopener noreferrer" href="mailto:${listSocialMedia[key]}"><i
                        class="fa fa-envelope fa-2xl"></i></a>` : `<a target="_blank" rel="noopener noreferrer" href="${listSocialMedia[key]}"><i
                        class="fab fa-${key} fa-2xl"></i></a>`).join("")}
                        </p>
                        <img src="/images/close_icon.svg" alt="close_icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
}

const klubMotorCardTemplate = (clubName, leader, linkImage, establishmentDate, listSocialMedia, category) => {
    return `    
    <div class="col mb-4">
        <div class="card wrap_card_community border-0 position-relative d-block">
            <img src="${linkImage}" class="card-img-top image_card_klub_mobil" alt="logo club ${category}">

            <div style="background: linear-gradient(163.89deg, #A8891B -2.61%, #FFCE51 88.8%);
            box-shadow: 0px -5px 4px rgba(0, 0, 0, 0.37);" 
            class="position-absolute overlay_collaps overlay_car_community h-100 w-100">

                <div class="head_overlay_collaps">
                    <h5 class="card-title">${clubName}</h5>

                    <div style="color: rgba(244, 244, 249, 0.8);"
                        class="d-flex subtittle_card justify-content-between align-items-center">
                        <p style="margin-bottom: 0;">Dibentuk Pada: ${new Date(establishmentDate.replace(/-/g, '/')).toLocaleDateString('en-GB', {
        day: "numeric",
        month: "long",
        year: "numeric",
    })}</p>
                        <div class="click_icon">
                            <p
                                style="font-size:10px; font-weight: 700; margin-bottom: 0; text-align: center;">
                                Click
                                Me</p>
                            <img class="mx-auto d-block" src="/images/cursor-hand-click.svg"
                                alt="click icon">
                        </div>
                    </div>
                </div>

                <div class="content_overlay_collaps opacity_object">
                    <div class="leader_name">
                        <p style="margin-bottom: 0;">Ketua Komunitas:</p>
                        <p class="">${leader}</p>
                    </div>
                    <p style="margin-bottom: 0;">Terhubung Bersama Kami:</p>
                    <div class="sosial_media_klub_mobil align-self-end">
                        <p>
                          ${Object.keys(listSocialMedia).map(key => listSocialMedia[key] === null ? `` : key === "email" ? `<a target="_blank" rel="noopener noreferrer" href="mailto:${listSocialMedia[key]}"><i
        class="fa fa-envelope fa-2xl"></i></a>` : `<a target="_blank" rel="noopener noreferrer" href="${listSocialMedia[key]}"><i
        class="fab fa-${key} fa-2xl"></i></a>`).join("")}
                        </p>
                        <img src="/images/close_icon.svg" alt="close_icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
}

const klubMobilityCardTemplate = (clubName, leader, linkImage, establishmentDate, listSocialMedia, category) => {
    return `    
    <div class="col mb-4">
        <div class="card wrap_card_community border-0 position-relative d-block">
            <img src="${linkImage}" class="card-img-top image_card_klub_mobil" alt="logo club ${category}">

            <div style="background: linear-gradient(163.89deg, #1BA829 -2.61%, #51FF58 88.8%);
            box-shadow: 0px -5px 4px rgba(0, 0, 0, 0.37);"
            class="position-absolute overlay_collaps overlay_car_community h-100 w-100">

                <div class="head_overlay_collaps">
                    <h5 class="card-title">${clubName}</h5>

                    <div style="color: rgba(244, 244, 249, 0.8);"
                        class="d-flex subtittle_card justify-content-between align-items-center">
                        <p style="margin-bottom: 0;">Dibentuk Pada: ${new Date(establishmentDate.replace(/-/g, '/')).toLocaleDateString('en-GB', {
        day: "numeric",
        month: "long",
        year: "numeric",
    })}</p>
                        <div class="click_icon">
                            <p
                                style="font-size:10px; font-weight: 700; margin-bottom: 0; text-align: center;">
                                Click
                                Me</p>
                            <img class="mx-auto d-block" src="/images/cursor-hand-click.svg"
                                alt="click icon">
                        </div>
                    </div>
                </div>

                <div class="content_overlay_collaps opacity_object">
                    <div class="leader_name">
                        <p style="margin-bottom: 0;">Ketua Komunitas:</p>
                        <p class="">${leader}</p>
                    </div>
                    <p style="margin-bottom: 0;">Terhubung Bersama Kami:</p>
                    <div class="sosial_media_klub_mobil align-self-end">
                        <p>
                          ${Object.keys(listSocialMedia).map(key => listSocialMedia[key] === null ? `` : key === "email" ? `<a target="_blank" rel="noopener noreferrer" href="mailto:${listSocialMedia[key]}"><i
        class="fa fa-envelope fa-2xl"></i></a>` : `<a target="_blank" rel="noopener noreferrer" href="${listSocialMedia[key]}"><i
        class="fab fa-${key}"></i></a>`).join("")}
                        </p>
                        <img src="/images/close_icon.svg" alt="close_icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
}

const cardCommitteeTemplate = (name, designation, address, photo, listSocialMedia) => {
    return `    
    <div class="col mb-4">
        <div class="wrap_committe_image selectDisable">

            <img class="photo_committe selectDisable" src="/uploads/${photo}" alt="pengurus imi">
            <div class="ribbon_committee">

                <div class="d-flex align-items-center">
                    <div class="col-3 small_logo">
                        <img src="/images/logoSmall.svg" alt="logoimi">
                    </div>
                    <div class="col-1 sparator">
                        <img src="/images/sparator.svg" alt="sparator">
                    </div>
                    <div class="col-8 small_tag">
                        <p>
                            Official Management of IMI Jawa Barat
                        </p>
                    </div>
                </div>

            </div>
            <div class="wrap_animation_img_overlay_committe">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="content_overlay_committes">
                <h2 class="selecDisable name_committe text-center selectDisable">
                    ${name}
                </h2>
                <p class="selectDisable position_committee">${designation}</p>
                <span class="sosial_media_committe">
                    <p>
                    ${Object.keys(listSocialMedia).map(key => listSocialMedia[key] === null ? false : key === "email" ? `<a target="_blank" rel="noopener noreferrer" href="mailto:${listSocialMedia[key]}"><i
                    class="fa fa-envelope fa-2xl"></i></a>` : `<a target="_blank" rel="noopener noreferrer" href="${listSocialMedia[key]}"><i
                    class="fab fa-${key}"></i></a>`).join("")}
                    </p>
                </span>
            </div>
        </div>
    </div>
    `;
}

const cardBulletinBoardTemplate = (id, type, name, description, date) => {
    return `
    <div>
        <div>
            <img src="${type === "activity" ? '/images/icon-calendar.svg' : '/images/icon-pin.svg'}" alt="icon-calendar" class="buletin_icon_cal">
        </div>
        <div style="cursor: pointer" class="card buletin_card" data-toggle="collapse" data-target="#collapsBulletin${id}" aria-expanded="false" aria-controls="collapsBulletin${id}">
            <div class="card-header buletin_card_header" style="border-radius: 10px;" id="headingOne">
                <div class="d-flex justify-content-betweet align-items-center">
                    <div>
                        <div>
                            <button class="btn btn-link buletin_card_title" type="button">
                                ${name}
                            </button>
                        </div>
                        <div>
                            <button class="btn btn-link buletin_card_subtitle">${new Date(date).toLocaleDateString('en-GB', {
        day: "numeric",
        month: "long",
        year: "numeric",
    })}</button>
                        </div> 
                    </div>
                    <img style="scale(1.4);" class="d-block ml-auto" src="/images/icon-arrow-down.svg" alt="arrow collaps">
                </div>
            </div>

            <div id="collapsBulletin${id}" class="collapse" aria-labelledby="headingOne"
                data-parent="#accordionPapanBuletin">
                <div class="card-body buletin_card_body">
                    <div>
                        <h4>
                            Deskripsi Acara:
                        </h4>
                        <p>
                            ${description}
                        </p>
                    </div>
                    <div>
                    <h4>
                        Detail Acara:
                    </h4>
                    <p>
                       Tanggal: ${new Date(date).toLocaleDateString('en-GB', {
        day: "numeric",
        month: "long",
        year: "numeric",
    })} <br>
                        Waktu: ${new Date(date).toLocaleTimeString('en-GB', {
        // en-US can be set to 'default' to use user's browser settings
        hour: '2-digit',
        minute: '2-digit',
    })} - Selesai
                    </p > 
                        
                    </div >
                </div >
            </div >
        </div >
    </div >
    `;
}

const cardBulletinBoardInfoTemplate = (id, type, name, description) => {
    return `
    <div>
        <div>
            <img src="/images/icon-pin.svg" alt="icon-pin" class="buletin_icon_cal">
        </div>
        <div style="cursor: pointer" class="card buletin_card" data-toggle="collapse" data-target="#collapsBulletin${id}" aria-expanded="false" aria-controls="collapsBulletin${id}">
            <div class="card-header buletin_card_header" style="border-radius: 10px;" id="headingOne">
                <div class="d-flex justify-content-betweet align-items-center">
                    <div>
                        <div>
                            <button class="btn btn-link buletin_card_title" type="button">
                                PENGUMUMAN !
                            </button>
                        </div>
                        <div>
                            <button class="btn btn-link buletin_card_subtitle">${name}</button>
                        </div> 
                    </div>
                    <img style="scale(1.4);" class="d-block ml-auto" src="/images/icon-arrow-down.svg" alt="arrow collaps">
                </div>
            </div>

            <div id="collapsBulletin${id}" class="collapse" aria-labelledby="headingOne"
                data-parent="#accordionPapanBuletin">
                <div class="card-body buletin_card_body">
                    <div>
                        <h4>
                            Detail Info :
                        </h4>
                        <div class="description_bulletin_info">
                            ${description}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
}


export {
    newsCardTemplate,
    eventsCardTemplate,
    klubMobilCardTemplate,
    klubMotorCardTemplate,
    klubMobilityCardTemplate,
    cardCommitteeTemplate,
    cardBulletinBoardTemplate,
    cardBulletinBoardInfoTemplate,
};