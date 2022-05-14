console.log("contact form author: jetmir halili");

const signUp = document.getElementById("contact-form");

const firstName = document.getElementById("name");
const lastName = document.getElementById("surname");
const contactEmail = document.getElementById("email");
const contactMessage = document.getElementById("message");


signUp.addEventListener('submit', (e) =>{
    e.preventDefault();
    checkfirstName();
    checkLastName();
    checkMail();
    checkMessage();

}); 




function checkfirstName() {
    const name_value = firstName.value;
    if(name_value === '') {
		setErrorFor(firstName, "Shenoni emrin tuaj nuk mund ta lini te zbrazet");
    } 
   
    else if (name_value) {
		setSuccessFor(firstName,"Në Rregull");
    }
}


function checkLastName() {
  const surname_value = lastName.value;

  if (surname_value === "") {
         setErrorFor(lastName, "Shenoni mbiemrin tuaj nuk mund ta lini zbrazet"); 
  }
  
  else{
           setSuccessFor(lastName, "Hapesira e mbiemrit eshte ne rregull");
  }
  
}


function checkMail() {
    const email_value = contactEmail.value;
    if(email_value === '') {
		setErrorFor(contactEmail, "Shenoni emailin ne menyre korrekte, e.g username@domain.com");
    } 
    else if(!(email_value.includes(".com")||email_value.includes(".edu"))){
      setErrorFor(contactEmail, "Ju duhet te dhenoni nje domain si: .com, .edu, .gov ose tjera");
    }
    else if (email_value) {
		setSuccessFor(contactEmail,"Në Rregull");
    }
}


function checkMessage() {
    let message_value = contactMessage.value;
    
    if (message_value === "") {
        setErrorFor(contactMessage, "Ju lutem shenoni nje mesazh mos e lini te zbrazet"); 
        }

        else if ((message_value.length)<80) {
            setErrorFor(contactMessage, "Mesazhi duhet te permbaje me shume se 30 karaktere");
        }

        else{
            setSuccessFor(contactMessage, "Hapesira e mesazhit eshte ne rregyll");
    }
}



function setErrorFor(input, message) {
    var formControl = input;
    formControl.className = 'error';


    var small = formControl.nextElementSibling;
    small.innerText = message;
    small.className = 'errorMsg yes';
}



function setSuccessFor(input, message) {
    const formControl = input;
    formControl.className = 'success';



     var small = formControl.nextElementSibling;
     small.textContent = message;
     small.className = 'successMsg yes';
}
