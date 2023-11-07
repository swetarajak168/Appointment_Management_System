function display(sectionid, e, formid) {
    e.preventDefault();
    var formdisplay = document.getElementById(formid);
    var section = document.getElementById(sectionid);
    formdisplay.style.display = 'none';
    section.style.display = 'block';
  }
  
  
  
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('addEducation').addEventListener('click', function() {
        const newRow = document.querySelector('.education-form').cloneNode(true);
        document.querySelector('.education-form').parentNode.appendChild(newRow);
        const inputFields = newRow.querySelectorAll("input");
        inputFields.forEach(function (input) {
          input.value = "";
      });
        
    });
  
    document.getElementById('addExperience').addEventListener('click', function() {
        const newRow = document.querySelector('.experience-form').cloneNode(true);
        document.querySelector('.experience-form').parentNode.appendChild(newRow);
        const inputFields = newRow.querySelectorAll("input");
        inputFields.forEach(function (input) {
          input.value = "";
      });
    });
    // Remove an input field when the "Remove" button is clicked
    document.addEventListener('click', function(e) {
     
        if (e.target && e.target.classList.contains('remove-education')) {
            e.target.closest('.education-form').remove();
        }
    });
    document.addEventListener('click', function(e) {
      if (e.target && e.target.classList.contains('remove-experience')) {
          e.target.closest('.experience-form').remove();
      }
  });
  });