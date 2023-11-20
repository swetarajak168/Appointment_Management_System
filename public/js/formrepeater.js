function display(sectionid, e, formid) {
  e.preventDefault();
  var formdisplay = document.getElementById(formid);
  var section = document.getElementById(sectionid);
  formdisplay.style.display = 'none';
  section.style.display = 'block';
}



document.addEventListener('DOMContentLoaded', function () {
  let cloneCount = 0; // Initialize the clone count
  const cloneLimit = 5; // Set your desired clone limit
  let i = 1
  var originalelem = document.querySelector('.education-form');
  var elem = originalelem.querySelector('.nepali-datepicker');
  elem.id = 'CompletionDate_' + 1;
  
  document.getElementById('addEducation').addEventListener('click', function () {
    if (cloneCount < cloneLimit) {
      
      var newRow = document.querySelector('.education-form').cloneNode(true);
      //setting id for every cloned nodes
      i++;
      var newId = 'CompletionDate_' + i;
      var a = newRow.querySelector('.nepali-datepicker')
      a.id = newId;
      // console.log(a.id);
        initializaNepaliDatePicker(newRow);
      setInterval(() => {

        nepToEng(newRow)
      }, 30);
    //end
      document.querySelector('.education-form').parentNode.appendChild(newRow);
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
  let j = 1
  var originalelem = document.querySelector('.experience-form');
  var elem = originalelem.querySelector('.nepali-datepicker');
  var elem1 = originalelem.querySelector('.nepali-datepicker:last-child');
  elem.id = 'startDate_' + 1;
  elem1.id = 'endDate_' + 1;
  document.getElementById('addExperience').addEventListener('click', function () {
    const newRow = document.querySelector('.experience-form').cloneNode(true);
    j++;
      var newId = 'startDate_' + j;
      var newId1 = 'endDate_' + j;
      var a = newRow.querySelector('.nepali-datepicker')
      var b = newRow.querySelector('.nepali-datepicker:last-child')
      console.log(b)
      a.id = newId;
      b.id = newId1;

    document.querySelector('.experience-form').parentNode.appendChild(newRow);
    initializaNepaliDatePicker(newRow);
    const inputFields = newRow.querySelectorAll("input");
    inputFields.forEach(function (input) {
      input.value = "";
    });
  });
  // Remove an input field when the "Remove" button is clicked
  document.addEventListener('click', function (e) {

    if (e.target && e.target.classList.contains('remove-education')) {
      const educationForms = document.querySelectorAll('.education-form');
      if (educationForms.length > 1) {
        e.target.closest('.education-form').remove();
      } else {
        alert('You cannot delete all data')
      }
    }


  });
  document.addEventListener('click', function (e) {s
    if (e.target && e.target.classList.contains('remove-experience')) {
      const experienceForm = document.querySelectorAll('.experience-form');
      if (experienceForm.length > 1) {
        e.target.closest('.experience-form').remove();
      } else {
        alert('You cannot delete all data')
      }
    }
  });
  document.getElementById('addSchedule').addEventListener('click', function () {
    console.log("object")
    var newRow = document.querySelector('.scheduleTime').cloneNode(true);
    document.querySelector('.scheduleTime').parentNode.appendChild(newRow);
    });
});
function addSchedule(){
  var newRow = document.querySelector('.scheduleTime').cloneNode(true);
  document.querySelector('.scheduleTime').parentNode.appendChild(newRow);
}