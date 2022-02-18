$(document).ready(function() {
    console.log("tt")
    $("#exampleModalCenter").on('hidden.bs.modal', function (e) {
        $("#exampleModalCenter iframe").attr("src", $("#exampleModalCenter iframe").attr("src"));
    });

})