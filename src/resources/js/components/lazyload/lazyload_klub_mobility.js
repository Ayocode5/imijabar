import API_ENDPOINT from "../../global/api_endpoint";
import { klubMobilityCardTemplate } from "../../global/template";

$(document).ready(function async() {
    const wrapListClubMobility = document.querySelector(".list_klub_mobility");
    let pageCountMobility = 2;

    function getAPI(url) {
        return $.ajax({
            url: url,
            beforeSend: function () {
                $("#loader").show();
            },
            complete: function () {
                $("#loader").hide();
            },
            success: function (result) {
                return result;
            },
            error: function (err) {
                return wrapListClubMobility.append(
                    "Error Something wrong !",
                    p
                );
            },
        });
    }

    const firstLoad = async () => {
        const resultData = await getAPI(`${API_ENDPOINT.URL_KLUB_MOBILITY(1)}`);

        resultData.data.map((data) => {
            wrapListClubMobility.innerHTML += klubMobilityCardTemplate(
                data.club_name,
                data.leader,
                data.image,
                data.establishment_date,
                JSON.parse(data.social_media),
                data.category,
                data.address
            );
        });

        if (resultData.current_page === resultData.last_page) {
            $(".btn_load_more_klub_mobility").remove();
        }
    };

    if (window.location.pathname === "/about/club/mobility") {
        firstLoad();
    }

    $(".btn_load_more_klub_mobility").on("click", async () => {
        const resultData = await getAPI(
            `${API_ENDPOINT.URL_KLUB_MOBILITY(pageCountMobility)}`
        );
        if (resultData.current_page <= resultData.last_page) {
            resultData.data.forEach((data) => {
                wrapListClubMobility.innerHTML += klubMobilityCardTemplate(
                    data.club_name,
                    data.leader,
                    data.image,
                    data.establishment_date,
                    JSON.parse(data.social_media),
                    data.category,
                    data.address
                );
            });

            if (resultData.current_page === resultData.last_page) {
                $(".btn_load_more_klub_mobility").remove();
            }
        } else {
            $(".btn_load_more_klub_mobility").remove();
            return false;
        }
        pageCountMobility += 1;
    });
});
