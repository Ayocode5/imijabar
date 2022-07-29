import API_ENDPOINT from "../../global/api_endpoint";
import { klubMotorCardTemplate } from "../../global/template";

$(document).ready(function async() {
    const wrapListClubMotor = document.querySelector(".list_klub_motor");
    let pageCountMotor = 2;

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
                return wrapListClubMotor.append("Error Something wrong !", p);
            },
        });
    }

    const firstLoad = async () => {
        const resultData = await getAPI(`${API_ENDPOINT.URL_KLUB_MOTOR(1)}`);
        resultData.data.map((data) => {
            wrapListClubMotor.innerHTML += klubMotorCardTemplate(
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
            $(".btn_load_more_klub_motor").remove();
        }
    };
    if (window.location.pathname === "/about/club/motor") {
        firstLoad();
    }

    $(".btn_load_more_klub_motor").on("click", async () => {
        const resultData = await getAPI(
            `${API_ENDPOINT.URL_KLUB_MOTOR(pageCountMotor)}`
        );
        if (resultData.current_page <= resultData.last_page) {
            resultData.data.forEach((data) => {
                wrapListClubMotor.innerHTML += klubMotorCardTemplate(
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
                $(".btn_load_more_klub_motor").remove();
            }
        } else {
            $(".btn_load_more_klub_motor").remove();
            return false;
        }
        pageCountMotor += 1;
    });
});
