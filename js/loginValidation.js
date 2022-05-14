console.log("The form is working");

const loginForm = document.getElementById("login-form");
const loginUsername = document.getElementById("login-username");
const loginPassword = document.getElementById("login-password");

loginForm.addEventListener('submit', (e) =>{
     e.preventDefault();
     checkMail();
     checkPassword();
     console.log(typeof parseInt(loginPassword.value));
     //console.log(`Email: ${loginUsername.value}`);
     console.log(`Password: ${typeof (loginPassword.value)}`);
}); 

function checkMail() {
    const emailValue = loginUsername.value;
    if(emailValue === '') {
		setErrorFor(loginUsername, "Shenoni emailin ne menyre korrekte, e.g username@domain.com");
    } 
    else if(!(emailValue.includes(".com")||emailValue.includes(".edu"))){
      setErrorFor(loginUsername, "Ju duhet te dhenoni nje domain si: .com, .edu, .gov ose tjera");
    }
    else if (emailValue) {
		setSuccessFor(loginUsername,"Në Rregull");
    }
}

String.prototype.isLengthLowerThan = function(limit) {
  return this.length < limit;  
}

console.log("John".isLengthLowerThan(3));

var testpro = "dasdddasdsadsadasdas";
console.log(testpro.isLengthLowerThan(10));

function checkPassword() {
  const passwordValue = loginPassword.value;

  if (passwordValue === "") {
         setErrorFor(loginPassword, "Hapesira e Passwordit eshte e zbrazet"); 
  }

  else if (passwordValue.isLengthLowerThan(10)) {
    setErrorFor(loginPassword, "Gjatesia e passwordit duhet te jete me e madhe se 10");
  }
  
  else{
           setSuccessFor(loginPassword, "Hapesira e Passwordit eshte ne rregull");
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

