import API_ENDPOINT from "../../global/api_endpoint";
import { cardBulletinBoardTemplate, cardBulletinBoardInfoTemplate } from "../../global/template";


$(document).ready(function async() {
    const wrapBulletingBoard = document.querySelector('.wrap_bulletin_board');
    let pageCountBulletinBoard = 2;
    let pageCountBulletinInfo = 2;

    function getAPI(url) {
        return $.ajax({
            url: url,
            beforeSend: function () {
                $('#loader').show();
            },
            complete: function () {
                $('#loader').hide();
            },
            success: function (result) {
                return result;
            },
            error: function (err) {
                return wrapBulletingBoard.append("Error Something wrong !", p);
            }
        });
    }

    const firstLoad = async () => {
        const resultData = await getAPI(`${API_ENDPOINT.URL_BULLETIN_BOARD_AGENDA(1)}`);
        resultData.data.map((data) => {
            if (data.type === "info") {
                wrapBulletingBoard.innerHTML += cardBulletinBoardInfoTemplate(
                    data.id,
                    data.type,
                    data.name,
                    data.description,
                )
            } else {
                wrapBulletingBoard.innerHTML += (cardBulletinBoardTemplate(
                    data.id,
                    data.type,
                    data.name,
                    data.description,
                    data.date,
                ));
            }
        });


        if (resultData.current_page === resultData.last_page) {
            $('.btn_load_more_buletin').remove();
        }

    };

    if (window.location.pathname === "/about") {
        firstLoad();
    }

    $('.btn_load_more_buletin').on("click", async () => {
        const resultData = await getAPI(`${API_ENDPOINT.URL_BULLETIN_BOARD_AGENDA(pageCountBulletinBoard)}`);
        if (resultData.current_page <= resultData.last_page) {

            resultData.data.forEach(data => {

                if (data.type === "info") {
                    wrapBulletingBoard.innerHTML += cardBulletinBoardInfoTemplate(
                        data.id,
                        data.type,
                        data.name,
                        data.description,
                    )
                } else {
                    wrapBulletingBoard.innerHTML += (cardBulletinBoardTemplate(
                        data.id,
                        data.type,
                        data.name,
                        data.description,
                        data.date,
                    ));
                }
            });

            if (resultData.current_page === resultData.last_page) {
                $('.btn_load_more_buletin ').remove();
            }
        } else {
            $('.btn_load_more_buletin ').remove();
            return false;
        }
        pageCountBulletinBoard += 1;
    });


});