$(document).ready(() => {
    const switchLanguageElement = document.querySelector('.checkbox_switch_language');
    function firstLoad() {
        if (localStorage.getItem("language") == "en") {
            switchLanguageElement.checked = true;

            setTimeout(function () {
                new google.translate.TranslateElement(
                    {
                        pageLanguage: 'id',
                        includedLanguages: 'en',
                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                    },
                    'google_translate_element'
                );

            }, 1000)
            window.location.href = "#googtrans(en|en)";

        } else {
            switchLanguageElement.checked = false;
        }
    }

    firstLoad();

    $('.checkbox_switch_language').on("change", () => {

        if ($('.checkbox_switch_language').is(':checked')) {
            console.log($('.checkbox_switch_language').is(':checked'))
            localStorage.setItem("language", "en");
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                includedLanguages: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
            window.location.href = "#googtrans(en|en)";
        } else {
            console.log($('.checkbox_switch_language').is(':checked'))
            localStorage.setItem("language", "id");
            window.location.href = "";
        }
    })

});