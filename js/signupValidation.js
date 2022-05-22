

const signUp = document.getElementById("sign-up-form");
const firstName = document.getElementById("firstName");
const lastName = document.getElementById("surname");
const signUpEmail = document.getElementById("signUpemail");
const signUpPassoword1 = document.getElementById("signUpPassword1");
const signUpPassoword2 = document.getElementById("signUpPassword2");
const agreeTerm = document.getElementById("agree-terms");

signUp.addEventListener('submit', (e) =>{
     e.preventDefault();
     checkfirstName();
     checkLastName();
     checkMail();   
     checkPassword();
    checkPassword2();
    checkAgreeTerm();
    console.log(agreeTerm.checked)
     // console.log(typeof parseInt(loginPassword.value));
     //console.log(`Email: ${loginUsername.value}`);
     //console.log(`Password: ${loginPassword.value}`);
}); 

function checkfirstName() {
    const firstNameValue = firstName.value;
    if(firstNameValue === '') {
		setErrorFor(firstName, "Shenoni emrin tuaj nuk mund ta lini te zbrazet");
    } 
   
    else if (firstNameValue) {
		setSuccessFor(firstName,"Në Rregull");
    }
}


var special22 = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/gi;
var username22 = "gentrit-@";

console.log(username22.match(special22));


function checkLastName() {
  const lastNameValue = lastName.value;
  var special = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/i;


  var res = lastNameValue.match(special);
  if (lastNameValue === "") {
         setErrorFor(lastName, "Shenoni Usernamin tuaj nuk mund ta lini zbrazet"); 
  }

  else if (res==null) {
    setErrorFor(lastName, "Nuk keni keni karaktere speciale"); 
  }
  
  else{
           setSuccessFor(lastName, "Hapesira e Username eshte ne rregull");
  }
  
}


function checkMail() {
    const emailValue = signUpEmail.value;
    if(emailValue === '') {
		setErrorFor(signUpEmail, "Shenoni emailin ne menyre korrekte, e.g username@domain.com");
    } 
    else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailValue))){
      setErrorFor(signUpEmail, "Invalid email address");
    }
    else if (emailValue) {
		setSuccessFor(signUpEmail,"Në Rregull");
    }
}





function checkPassword() {
    const passwordValue1 = signUpPassoword1.value;
  

/**Password length 7
 * at least uppercase
 * lowercase
 * number
 */
    var parameter = /^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9]{7,}$/g;
    var arr  = parameter.exec(passwordValue1);

    if (passwordValue1 === "") {
           setErrorFor(signUpPassoword1, "Hapesira e Passwordit eshte e zbrazet"); 
    }

    else if (arr==null) {
      setErrorFor(signUpPassoword1, "Paswwordi duhet te permbaj numer, shkronje te vogel dhe te madhe "); 
    }


    
    else{
             setSuccessFor(signUpPassoword1, "Hapesira e Passwordit eshte ne rregull");
    }

  }

  function checkPassword2() {
    const passwordValue1 = signUpPassoword1.value;
    const passwordValue2 = signUpPassoword2.value;
  
    if (passwordValue2 === "") {
           setErrorFor(signUpPassoword2, "Hapesira e Passwordit eshte e zbrazet"); 
    }

    else if (!(passwordValue1===passwordValue2)){
        setErrorFor(signUpPassoword2, " Paswordi i dyte nuk eshte i njejte me te parin");
    }
    
    else{
             setSuccessFor(signUpPassoword2, "Hapesira e Passwordit eshte ne rregull");
    }

  }



  function checkAgreeTerm() {
    const agreeValue = agreeTerm.checked;
  
    if (!(agreeValue)) {
           setErrorFor(agreeTerm, "Ju lutem pranoni kushtet e perdorimit"); 
    }

    else {
        setSuccessFor(agreeTerm, "Hapesira e Passwordit eshte ne rregull");
    }
    
    

  }




function setErrorFor(input, message) {
    var formControl = input;
    formControl.className = 'error';


    // var small1 = document.getElementById("small1");
    // small1.textContent = message;
    // small1.className = 'errorMsg yes';

    var small = formControl.nextElementSibling;
    small.innerText = message;
    small.className = 'errorMsg yes';
}



function setSuccessFor(input, message) {
    const formControl = input;
    formControl.className = 'success';


    // var small1 = document.getElementById("small1");
    // small1.textContent = message;
    // small1.className = 'succesMsg yes';

     var small = formControl.nextElementSibling;
     small.textContent = message;
     small.className = 'successMsg yes';
}