
function initializeNepaliDatePickers() {
    // Initialize regular date pickers
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
}

window.onload = initializeNepaliDatePickers;

function initializaNepaliDatePicker(newRow) {

    // console.log(newRow);
    var elm = newRow.querySelectorAll(".nepali-datepicker");
    // var elm = document.querySelectorAll(className);
    // console.log(elm);
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
    // console.log( englishdate.value);


}
setInterval(() => {
    bsToAd();

}, 30);


function nepToEng(newRow) {
    // console.log(newRow);
    // const inputFields =  newRow.querySelector('.nepali-datepicker').id; 
    // console.log(inputFields.id);
    // const bsdate = document.getElementById('CompletionDate_1').value; 
    // console.log(bsdate);
    // var adDate = NepaliFunctions.BS2AD(bsdate) 
    // console.log(adDate);
    var i = 2;
    if (i < 6) {
        const inputFields = newRow.querySelectorAll('.nepali-datepicker');
        // console.log(inputFields)
    //   console.log(inputFields);
    //     inputFields.forEach(function (node, i) {
    //         const elm =  node.querySelector('.nepali-datepicker');
    //         // console.log(elm + i)

    //     }

    //     );
    //        console.log(inputFields);
    }
}


    //     console.log(inputFields)
    //        var date = inputFields.value;
    //        console.log(date);
    //        var adDate = NepaliFunctions.BS2AD(date)
    //        console.log(adDate);
    //         // var bsDate = newRow.getElementById(date);
    //     console.log(bsDate);
    //     var adDate = NepaliFunctions.BS2AD(bsDate)   ;
    //     englishdate.value = adDate;
    //     i++;
    // }
    // // for(var i=1;i<=6;i++){
    //     // console.log(newRow);
    // const inputFields =  newRow.querySelector('.nepali-datepicker');
    //     // var bsDate = document.getElementById('CompletionDate_'+i).value;
    //     var bsDate = newRow.getElementById(inputFields);
    //     console.log(bsDate);
    //     var adDate = NepaliFunctions.BS2AD(bsDate)   ;
    //     englishdate.value = adDate 
    // if(bsDate){
    //     console.log(bsDate);
    // var englishdate = document.getElementById('englishdate_'+i);   
    // var adDate = NepaliFunctions.BS2AD(bsDate)   
    // englishdate.value = adDate 
    // }  

    // console.log(englishdate.value);



