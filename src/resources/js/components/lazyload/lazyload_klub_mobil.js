import API_ENDPOINT from "../../global/api_endpoint";
import { klubMobilCardTemplate } from "../../global/template";

$(document).ready(function async() {
    const wrapListClubMobil = document.querySelector(".list_klub_mobil");
    let pageCountClubMobil = 2;

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
                return wrapListClubMobil.append("Error Something wrong !", p);
            },
        });
    }

    const firstLoad = async () => {
        const resultData = await getAPI(`${API_ENDPOINT.URL_KLUB_MOBIL(1)}`);
        resultData.data.map((data) => {
            wrapListClubMobil.innerHTML += klubMobilCardTemplate(
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
            $(".btn_load_more_klub_mobil").remove();
        }
    };

    if (window.location.pathname === "/about/club/mobil") {
        firstLoad();
    }

    $(".btn_load_more_klub_mobil").on("click", async () => {
        const resultData = await getAPI(
            `${API_ENDPOINT.URL_KLUB_MOBIL(pageCountClubMobil)}`
        );
        if (resultData.current_page <= resultData.last_page) {
            resultData.data.forEach((data) => {
                wrapListClubMobil.innerHTML += klubMobilCardTemplate(
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
                $(".btn_load_more_klub_mobil ").remove();
            }
        } else {
            $(".btn_load_more_klub_mobil ").remove();
            return false;
        }
        pageCountClubMobil += 1;
    });
});
