// window.onload = function() {   
//     var elm = document.querySelectorAll(".nepali-datepicker");
//     elm.nepaliDatePicker({
//         ndpYear: true,
//         ndpMonth: true,
//         ndpYearCount: 10,
//         language: "english"
//     });
// };
function initializaNepaliDatePickers(){
    var elm = document.querySelectorAll(".nepali-datepicker");
    // var elm = document.querySelectorAll(className);
    console.log(elm);
        elm.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            ndpYearCount: 10,
            language: "english"
        });
}

window.onload = initializaNepaliDatePickers;


function initializaNepaliDatePicker(newRow){
    
    console.log(newRow);
    var elm = newRow.querySelectorAll(".nepali-datepicker");
    // var elm = document.querySelectorAll(className);
    console.log(elm);
        elm.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            ndpYearCount: 10,
            language: "english"
        });
       
}
// window.onload = initializaNepaliDatePicker;
function bsToAd() {
    var bsDate = document.getElementById("nepali-datepicker").value;
    var englishdate = document.getElementById("englishdate");
    var adDate = NepaliFunctions.BS2AD(bsDate)
    englishdate.value = adDate
}
setInterval(() => {
    bsToAd()
}, 30);

