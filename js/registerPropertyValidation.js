
const registerProperty = document.getElementById("register-property");
const firstName = document.getElementById("name");

const propertyAddress = document.getElementById("address");
const propertyRooms = document.getElementById("no-rooms");
const propertyBathRooms = document.getElementById("no-bath-rooms");
const propertySqFoot = document.getElementById("sq-foot");
const propertyDescription = document.getElementById("description");


var maxNumber = Number.MAX_VALUE;

console.log(maxNumber)

registerProperty.addEventListener('submit', (e) =>{
    e.preventDefault();
    checkfirstName();
    checkProperty();
    checkRooms();
    checkBathRooms();
    checkSqFt();
    checkDescription();
  
    
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


function checkProperty() {
    const propertyAddressValue = propertyAddress.value;
    if(propertyAddressValue === '') {
		setErrorFor(propertyAddress, "Shenoni adresen nuk mund ta lini zbrazet");
    } 
   
    else if (propertyAddressValue) {
		setSuccessFor(propertyAddress,"Në Rregull");
    }
}

/** Prototype */

Number.prototype.isNegative = function() {
  return this<0;   
}



function checkRooms() {
    const propertyRoomValue = propertyRooms.value;
    
    if(propertyRoomValue === '') {
		setErrorFor(propertyRooms, "Shenoni numrin e dhomave");
    } 

    else if(parseInt(propertyRoomValue).isNegative()){
                  setErrorFor(propertyRooms, "Nuk mund te shenoni numer negativ");
    }
   
    else if (propertyRoomValue) {
		setSuccessFor(propertyRooms,"Në Rregull");
    }
}


function checkBathRooms() {
    const propertyBathRoomValue = propertyBathRooms.value;
    if(propertyBathRoomValue === '') {
		setErrorFor(propertyBathRooms, "Shenoni numrin e banjove");
    } 

    else if (isNaN(propertyBathRoomValue)) {
           setErrorFor(propertyBathRooms, "Ju nuk keni shenuar nje numer");
    }

    else if(propertyBathRoomValue<0){
                  setErrorFor(propertyBathRooms, "Nuk mund te shenoni numer negativ");
    }
   
    else if (propertyBathRoomValue) {
		setSuccessFor(propertyBathRooms,"Në Rregull");
    }
}

function checkSqFt() {
    const propertySqFootValue = propertySqFoot.value;

    if(propertySqFootValue === '') {
		setErrorFor(propertySqFoot, "Shenoni numrin metrave katror");
    } 

   else if (propertySqFootValue>Number.MAX_VALUE) {
      setErrorFor(propertySqFoot, "Ky numer tejkalon maksimumin sa lejohet");
    }

    else if(propertySqFootValue<0){
                  setErrorFor(propertySqFoot, "Nuk mund te shenoni numer negativ");
    }
   
    else if (propertySqFootValue) {
		setSuccessFor(propertySqFoot,"Në Rregull");
    }
}


function checkDescription() {
    let propertyDescriptionValue = propertyDescription.value;
    
    if (propertyDescriptionValue === "") {
        setErrorFor(propertyDescription, "Ju lutem shenoni nje mesazh mos e lini te zbrazet"); 
        }

        else if ((propertyDescriptionValue.length)<80) {
            setErrorFor(propertyDescription, "Mesazhi duhet te permbaje me shume se 30 karaktere");
        }

        else{
            setSuccessFor(propertyDescription, "Hapesira e mesazhit eshte ne rregull");
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