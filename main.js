function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
	    
 function validate() {
     let email = document.getElementById('email');
     let message = document.getElementById('message');
     let response = document.getElementById('response');
     
     if(email.value === '' || message.value === '') {
         response.style.display = 'block';
         response.textContent = 'Input fields cannot be empty';
     } else if (validateEmail(email.value) == false) {
         response.style.display = 'block';
         response.textContent = 'Please enter a valid email address';
     } else if (message.value.length < 12) {
         response.style.display = 'block';
         response.textContent = 'Message length not accepted; Characters must be up to 12';
     } else {
         window.location.href = 'mailto:techcarefoundation@gmail.com';
     }
 }