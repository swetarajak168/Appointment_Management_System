
function initializeNepaliDatePickers() {
    // Initialize dae of birth date pickers
    var elm = document.querySelectorAll(".nepali-datepicker");
    elm.forEach(function (element) {
        element.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            ndpYearCount: 10,
            language: "english",
        });
    });

    // Initialize schedule date pickers
    var calendar = document.querySelectorAll(".nepali-datepicker-schedule");
    calendar.forEach(function (element) {
        element.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            ndpYearCount: 10,
            language: "english",
            disableDaysAfter: 3,
            disableDaysBefore: 0,
        });
    });

    //Initialize education datepicker
    var edu = document.querySelectorAll(".education-nepali-datepicker");
    edu.forEach(function (element) {
        element.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            ndpYearCount: 10,
            language: "english",
        });
    });

    //Initialize nepali date picker for experience form 
    var element = document.querySelector(".start-nepali-datepicker");
    console.log(element)
    var element1 = document.querySelector(".end-nepali-datepicker");
    console.log(element1)
    element.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            ndpYearCount: 10,
            language: "english",
        });
    
        element1.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            ndpYearCount: 10,
            language: "english",
        });
    

}

window.onload = initializeNepaliDatePickers;
//eductaion form nepali date picker

function initializaNepaliDatePicker(newRow) {

    // console.log(newRow);
    var elm = newRow.querySelector(".education-nepali-datepicker");

    elm.nepaliDatePicker({
        ndpYear: true,
        ndpMonth: true,
        ndpYearCount: 10,
        language: "english"
    });

    
}
//experience clone for nepali date picker
function initNepaliDatePicker(newRow){
    var element = newRow.querySelector(".start-nepali-datepicker");
    var element1 = newRow.querySelector(".end-nepali-datepicker");
    element.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            ndpYearCount: 10,
            language: "english",
        });
    
        element1.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            ndpYearCount: 10,
            language: "english",
        });
}
function bsToAd() {
    //converting basic detail date of birth
    var bsDate = document.getElementById("nepali-datepicker").value;
    var englishdate = document.getElementById("englishdate");
    var adDate = NepaliFunctions.BS2AD(bsDate)
    englishdate.value = adDate

     //converting original row of education form
     var completionDateBS = document.querySelector(".education-nepali-datepicker").value;
     var completionDateAD = document.querySelector(".englishDate");
     var changed_date = NepaliFunctions.BS2AD(completionDateBS)
     completionDateAD.value = changed_date

     //converting original row of experience form
     var startDateBS = document.querySelector(".start-nepali-datepicker").value;
     var endDateBS = document.querySelector(".end-nepali-datepicker").value;
     var startDateAD = document.querySelector(".startenglishDate");
     var endDateAD = document.querySelector(".endenglishDate");
     var changed_start_date = NepaliFunctions.BS2AD(startDateBS)
     var changed_end_date = NepaliFunctions.BS2AD(endDateBS)
     startDateAD.value = changed_start_date
     endDateAD.value = changed_end_date

}
setInterval(() => {
    bsToAd();


}, 30);

function englishDate(newRow) {
    var edu_bs_date = newRow.querySelector(".education-nepali-datepicker").value;
    var edu_ad_date = newRow.querySelector(".englishDate");
    var english_date = NepaliFunctions.BS2AD(edu_bs_date);
    edu_ad_date.value = english_date
    console.log(edu_ad_date)
}


function expEnglishDate(newRow){

    var start_bs_date = newRow.querySelector(".start-nepali-datepicker").value;
    console.log(start_bs_date)
    var end_bs_date = newRow.querySelector(".end-nepali-datepicker").value;
    var start_ad_date = newRow.querySelector(".startenglishDate");
    var end_ad_date = newRow.querySelector(".endenglishDate");
    var start_english_date = NepaliFunctions.BS2AD(start_bs_date);
    console.log(start_english_date);
    var end_english_date = NepaliFunctions.BS2AD(end_bs_date);
    start_ad_date.value = start_english_date
    end_ad_date.value = end_english_date
    console.log(start_ad_date)
    console.log(end_ad_date)

}





