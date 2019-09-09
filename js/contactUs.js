// FORM VALIDATION FOR CONTACT US FORM

var contactForm = document.forms.theForm;
var error_full_name = document.getElementById('errFullName');
var error_emailAdd = document.getElementById('errEmail');
var error_PhoneNo = document.getElementById('errPhone');
var error_Enquiry = document.getElementById('errEnquiry');


function nameValidation() {
	
	if (contactForm.fullName.value === "" || contactForm.fullName.value === null) {

          contactForm.fullName.style.borderColor = "red";
          error_full_name.innerHTML = "Name is required";

	}else{

		contactForm.fullName.style.borderColor = "green";
		error_full_name.innerHTML = "";
	}
}


contactForm.fullName.addEventListener("blur", nameValidation, false);

function emailValidation(){

   if (contactForm.emailAdd.value === ""  || contactForm.emailAdd.value === null || contactForm.emailAdd.value.indexOf('@') > contactForm.emailAdd.value.lastIndexOf('.')) {

   	contactForm.emailAdd.borderColor = "red";
   	error_emailAdd.innerHTML = "Email address Required";
   }else{

   contactForm.emailAdd.borderColor = "green";
   error_emailAdd.innerHTML = "";

   }

}

contactForm.emailAdd.addEventListener("blur", emailValidation, false);


function phoneValidation(){

   if (contactForm.phone.value === ""  || contactForm.phone.value === null) {

   	contactForm.phone.borderColor = "red";
   	error_PhoneNo.innerHTML = "Phone Number is Required";

   }else if (isNaN(contactForm.phone.value)) {

     contactForm.phone.borderColor = "red";
     error_PhoneNo.innerHTML = "This is not a Number";

   }else{

   contactForm.phone.borderColor = "green";
   error_PhoneNo.innerHTML = "";

   }

}

contactForm.phone.addEventListener("blur", phoneValidation, false);


function enquiryValidation(){

   if (contactForm.enquiry.value === ""  || contactForm.enquiry.value === null) {

   	contactForm.enquiry.borderColor = "red";
   	error_Enquiry.innerHTML = "Enquiry details is Required";
   }else if (contactForm.enquiry.value.length <= 20) {

     contactForm.enquiry.borderColor = "red";
     error_Enquiry.innerHTML = "Please Enter more characters";

   }else{

   contactForm.enquiry.borderColor = "green";
   error_Enquiry.innerHTML = "";

   }

}

contactForm.enquiry.addEventListener("blur", enquiryValidation, false);

// VALIDATION AFTER CLICKING ON SUBMIT BUTTON

function submitValidation(){

//THIS event.preventDefault() TO AVOID BROWSER FROM LOADING AFTER CLICK OF SUBMIT BUTTON

   event.preventDefault();
 if (contactForm.fullName.value === "" || contactForm.fullName.value === null) {

 	contactForm.fullName.style.borderColor = "red";
    error_full_name.innerHTML = "Name is required";

    
}else if (contactForm.emailAdd.value === ""  || contactForm.emailAdd.value === null || contactForm.emailAdd.value.indexOf('@') > contactForm.emailAdd.value.lastIndexOf('.')) {

	contactForm.emailAdd.borderColor = "red";
	error_emailAdd.innerHTML = "Email address Required";

}else if (contactForm.phone.value === ""  || contactForm.phone.value === null || isNaN(contactForm.phone.value)) {

	contactForm.phone.borderColor = "red";
	error_PhoneNo.innerHTML = "Phone Number is Required";
}else if (contactForm.enquiry.value === ""  || contactForm.enquiry.value === null || contactForm.enquiry.value.length <= 20) {


	contactForm.enquiry.borderColor = "red";
	error_Enquiry.innerHTML = "Enquiry details is Required";
}else{

   alert('Successfully Submitted' + '\n Full Name:' + contactForm.fullName.value + '\n Email Address:' + contactForm.emailAdd.value + '\n Phone Number:' + contactForm.phone.value + '\n Enquiry :' + contactForm.enquiry.value );
}

 }
