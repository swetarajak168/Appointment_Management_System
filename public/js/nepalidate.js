window.onload = function() {

    var elm = document.getElementById("nepali-datepicker");

    elm.nepaliDatePicker({
        ndpYear: true,
        ndpMonth: true,
        ndpYearCount: 10,
        language: "english"
    });
};

function bsToAd() {
    var bsDate = document.getElementById("nepali-datepicker").value;
    var englishdate = document.getElementById("englishdate");

    var adDate = NepaliFunctions.BS2AD(bsDate)

    englishdate.value = adDate
}
setInterval(() => {
    bsToAd()
}, 30);