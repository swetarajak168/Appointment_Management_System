//validation for basic info form
function formvalidation() {
  var tck = false;
  var licenseno = document.getElementById("license_no").value;
  var firstname = document.getElementById("fname").value;
  var lastname = document.getElementById("lname").value;
  var email = document.getElementById("email").value;
  var contact = document.getElementById("Contact").value;
  var municipality = document.getElementById("municipality").value;
  var Province = document.getElementById("province").value;
  var district = document.getElementById("district").value;
  var tole = document.getElementById("Tole").value;
  var ward = document.getElementById("ward").value;
  var radio = document.getElementsByName("gender");
  var specialization = document.getElementById("specialization").value;
  var department = document.getElementById("department").value;

  var btn = document.getElementById("nextbtn");
  if (licenseno.length > 0 && firstname.length > 0 && lastname.length > 0 && email.length > 0 && contact.length > 0 && municipality.length > 0 && Province.length > 0 && district.length > 0 && tole.length > 0 && ward.length > 0 && specialization.length > 0 && department.length > 0) {
    tck = true;
  }
  else {
    tck = false;
  }

  for (var i = 0; i < radio.length; i++) {
    if (radio[i].checked) {
      tck = true;
      break; // Exit the loop as soon as a checked radio button is found
    }
  }

  if (tck == true) {
    btn.style.backgroundColor = "#17a2b8"
    btn.removeAttribute("disabled");
  } else {
    btn.setAttribute("disabled", "disabled");
    btn.style.backgroundColor = "#696969"
  }

}


//client side validation for education form
function eduvalidation() {
  var institution = document.getElementById("Institution").value;
  console.log(institution)
  // var date = document.getElementById("CompletionDate").value;
  var board = document.getElementById("Board").value;
  var scores = document.getElementById("Scores").value;
  var btn = document.getElementById("edunextbtn");
  if (institution.length > 0 && board.length > 0 && scores.length > 0) {
    btn.style.backgroundColor = "#17a2b8"
    btn.removeAttribute("disabled");
  } else {
    btn.setAttribute("disabled", "disabled");
    btn.style.backgroundColor = "#696969"
  }
}
//client side validation for experience form
function expvalidation() {
  var org = document.getElementById("organization_name").value;
  
  var position = document.getElementById("position").value;
 

  // var startdate = document.getElementById("startDate").value;

  // console.log(startdate);
  // && startdate.length > 0
  // var enddate = document.getElementById("endDate").value;

  var jobdescription = document.getElementById("jobDescription").value;
 
  var btn = document.getElementById("expNextbtn");

  if (org.length > 0 && position.length > 0&& jobdescription.length > 0) {
    btn.style.backgroundColor = "#17a2b8"
    btn.removeAttribute("disabled");
  } else {
    btn.setAttribute("disabled", "disabled");
    btn.style.backgroundColor = "#696969"
  }
}

function loginvalidation() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var btn = document.getElementById("loginbtn");
  if (email.length > 0 && password.length > 0) {
    btn.style.backgroundColor = "#17a2b8"
    btn.removeAttribute("disabled");
  } else {
    btn.setAttribute("disabled", "disabled");
    btn.style.backgroundColor = "#696969"
  }

}

//form toggling
