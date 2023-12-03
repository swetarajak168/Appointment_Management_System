function display(sectionid, e, formid) {
  e.preventDefault();
  var formdisplay = document.getElementById(formid);
  var section = document.getElementById(sectionid);
  formdisplay.style.display = 'none';
  section.style.display = 'block';
}


//adding doctor 
document.addEventListener('DOMContentLoaded', function () {
  let cloneCount = 0; // Initialize the clone count
  const cloneLimit = 5; // Set your desired clone limit

  let i = 1

  var originalelem = document.querySelector('.education-form');
  var elem = originalelem.querySelector('.education-nepali-datepicker');
  elem.id = 'CompletionDate_' + 1;
 



  document.getElementById('addEducation').addEventListener('click', function () {
    if (cloneCount < cloneLimit) {

      var newRow = document.querySelector('.education-form').cloneNode(true);
      //setting id for every cloned nodes
      i++;
      var newId = 'CompletionDate_' + i;
      var a = newRow.querySelector('.education-nepali-datepicker')
      a.id = newId;
      // console.log(a.id);
      
      initializaNepaliDatePicker(newRow);

      setInterval(() => {
        englishDate(newRow);
      }, 30);
      //end
      document.querySelector('.education-form:last-child').parentNode.appendChild(newRow);
      const inputFields = newRow.querySelectorAll("input");
      inputFields.forEach(function (input) {
        input.value = "";

      });

      // console.log(newRow);
      cloneCount++;

    } else {
      alert('Education limit is 6'); // Display an alert when the limit is reached
    }
  }

  );
 
  
  // Remove an input field when the "Remove" button is clicked
  document.addEventListener('click', function (e) {
    if (e.target && e.target.classList.contains('remove-education')&& e.target.closest('.education-form')) {
      // console.log('object')
      const educationForms = document.querySelectorAll('.education-form');
      if (educationForms.length > 1) {
        e.target.closest('.education-form').remove();
      } else {
        alert('You cannot delete all data')
      }
    }
  });
  document.addEventListener('click', function (e) {
    if (e.target && e.target.classList.contains('remove-experience')) {
      const experienceForm = document.querySelectorAll('.experience-form');
      if (experienceForm.length > 1) {
        e.target.closest('.experience-form').remove();
      } else {
        alert('You cannot delete all data')
      }
    }
  });
 

});
const originalScheduleTime = document.querySelector('.scheduleTime');


function addSchedule() {
  var newRow = originalScheduleTime.cloneNode(true);
  document.querySelector('.scheduleTime').parentNode.appendChild(newRow);
  const inputFields = newRow.querySelectorAll("input");
  inputFields.forEach(function (input) {
    input.value = "";
  });

}
document.addEventListener('click', function (e) {
  if (e.target && e.target.classList.contains('remove-schedule')) {
    const scheduleTimes = document.querySelectorAll('.scheduleTime');
    console.log(scheduleTimes.length);

    if (scheduleTimes.length > 1) {
      e.target.closest('.scheduleTime').remove();
    } else {
      if (e.target.closest('.scheduleTime') === originalScheduleTime) {
        alert('You cannot delete the original data');
      }
    }
  }
});


document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('addExperience').addEventListener('click', function () {
    let j = 1
    var originalelem = document.querySelector('.experience-form');
    var elem = originalelem.querySelector('.start-nepali-datepicker');
    var elem1 = originalelem.querySelector('.end-nepali-datepicker');
    elem.id = "Start_date"+1;
    elem1.id = "End_Date"+1;
    
    count = 1;
    if (count > 0) {
      const newRow = document.querySelector('.experience-form').cloneNode(true);
      var startDate  = newRow.querySelector('.start-nepali-datepicker');
      var endDate  = newRow.querySelector('.end-nepali-datepicker');
      j++;
      startDate.id = "Start_date"+j;
      endDate.id = "End_Date"+j;  
      document.querySelector('.experience-form').parentNode.appendChild(newRow);
      initNepaliDatePicker(newRow);
      setInterval(() => {

        expEnglishDate(newRow);
      }, 30);
      const inputFields = newRow.querySelectorAll("input");
      inputFields.forEach(function (input) {
        input.value = " ";
      });
    }
  });

});
