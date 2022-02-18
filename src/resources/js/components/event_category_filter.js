$(function () {

    let filteredSports = [];

    $("#filterCategoryEvents").on("change", function (e) {
        const sports_wrapper = $("#filterSports");

        const sports = Array.from($("#filterSports option"));

        filteredSports = [];
        if ($(this).children(":selected").attr("value") == "all") {
            sports.forEach((sport) => {
                sport.classList.remove('d-none')
            });
            filteredSports.push(...sports);
            filteredSports.splice(0, 1);
        } else {
            sports.forEach((sport) => {
                ;

                if (
                    sport.getAttribute("categories") ==
                    $(this).children(":selected").attr("value")
                ) {
                    filteredSports.push(sport);
                    sport.classList.remove('d-none')

                } else {
                    sport.classList.add('d-none')
                }
            });
        }
        // Array.from($("#filterSports option")).forEach((item) => {
        //     if (item.getAttribute('disable')) {
        //         console.log(item);
        //     } else {
        //         item.remove()
        //     }
        // })
        // filteredSports.forEach((val) => {
        //     let optionTemplate = document.createElement('option');

        //     let categories = val.getAttribute('categories');
        //     let value = val.getAttribute('value');
        //     let sport = val.innerHTML;

        //     optionTemplate.value = value;
        //     optionTemplate.innerHTML = sport;
        //     optionTemplate.className = "sports sport-menu";
        //     optionTemplate.setAttribute('categories', categories);
        //     console.log(sport)

        //     document.querySelector('#filterSports').appendChild(optionTemplate)
        // });


    });
});
