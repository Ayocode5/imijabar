import API_ENDPOINT from "../../global/api_endpoint";
import { cardCommitteeTemplate } from "../../global/template";

$(document).ready(function async() {
    const wrapListCommittee = document.querySelector(".wrap_list_committee");
    let pageCountCommittee = 2;

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
                return wrapListCommittee.append("Error Something wrong !", p);
            },
        });
    }

    const firstLoad = async () => {
        const resultData = await getAPI(`${API_ENDPOINT.URL_COMMITTEE(1)}`);
        resultData.data.map((data) => {
            console.log(data);
            wrapListCommittee.innerHTML += cardCommitteeTemplate(
                data.id,
                data.name,
                data.designation,
                data.address,
                data.photo,
                {
                    email: data.email,
                    facebook: data.facebook,
                    instagram: data.instagram,
                    twitter: data.twitter,
                    linkedin: data.linkedin,
                    youtube: data.youtube,
                }
            );
        });

        if (resultData.current_page === resultData.last_page) {
            $(".btn_load_more_list_committee").remove();
        }
    };

    if (window.location.pathname === "/organizations/committee") {
        firstLoad();
    }

    $(".btn_load_more_list_committee").on("click", async () => {
        const resultData = await getAPI(
            `${API_ENDPOINT.URL_COMMITTEE(pageCountCommittee)}`
        );
        if (resultData.current_page <= resultData.last_page) {
            resultData.data.forEach((data) => {
                wrapListCommittee.innerHTML += cardCommitteeTemplate(
                    data.id,
                    data.name,
                    data.designation,
                    data.address,
                    data.photo,
                    {
                        email: data.email,
                        facebook: data.facebook,
                        instagram: data.instagram,
                        twitter: data.twitter,
                        linkedin: data.linkedin,
                        youtube: data.youtube,
                    }
                );
            });

            if (resultData.current_page === resultData.last_page) {
                $(".btn_load_more_list_committee ").remove();
            }
        } else {
            $(".btn_load_more_list_committee ").remove();
            return false;
        }
        pageCountCommittee += 1;
    });
});
