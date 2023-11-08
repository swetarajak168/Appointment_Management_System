function display(sectionid, e, formid) {
    e.preventDefault();
    var formdisplay = document.getElementById(formid);
    var section = document.getElementById(sectionid);
    formdisplay.style.display = 'none';
    section.style.display = 'block';
  }
  
  
  
  document.addEventListener('DOMContentLoaded', function() {
    
    let cloneCount = 0; // Initialize the clone count
    const cloneLimit = 5; // Set your desired clone limit
        document.getElementById('addEducation').addEventListener('click', function() {
            if (cloneCount < cloneLimit) {
            const newRow = document.querySelector('.education-form').cloneNode(true);            
            document.querySelector('.education-form').parentNode.appendChild(newRow);
            
            const inputFields = newRow.querySelectorAll("input");
            inputFields.forEach(function (input) {
              input.value = "";   
                 
          });    
          initializaNepaliDatePicker(newRow);       
          cloneCount++;
        } else {
            alert('Education limit is 6'); // Display an alert when the limit is reached
        }
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
                const educationForms = document.querySelectorAll('.education-form');
                if (educationForms.length > 1) {
                e.target.closest('.education-form').remove();
                }else{
                    alert('You cannot delete all data')
                }
            }     
     
       
    });
    document.addEventListener('click', function(e) {
      if (e.target && e.target.classList.contains('remove-experience')) {
        const experienceForm = document.querySelectorAll('.experience-form');
        if (experienceForm.length > 1) {
          e.target.closest('.experience-form').remove();
        }else{
            alert('You cannot delete all data')
        }
      }
  });
  });