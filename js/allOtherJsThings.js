

const maxNumber = Number.MAX_VALUE;
console.log(`Numri me i madh ne Javascript`)

let oneMB = 1000000;
console.log(`1 MB to exponential form is  ${oneMB.toExponential(10)} B  ` );

const piNum = Math.PI;
console.log(`Number PI:`);
console.log(piNum)
console.log(`Type of Variable: ${typeof(piNum)}`)

console.log("----------------------------------")

var piNumString = piNum.toString();
console.log(`Number PI:`);
console.log(piNumString);   
console.log(`Type of Variable: ${typeof(piNumString)}`);



/**20 mathematical constants */

const circleBtn = document.getElementById('circleradiusBtn');
const radius = document.getElementById('radius');
const result = document.getElementById('result');

circleBtn.addEventListener('click', calcCircleArea);


/**Protype object */

Number.prototype.circleArea = function() {
    return (Math.pow(this.valueOf(),2)*Math.PI);
  };


  

function calcCircleArea() {
    const radiusValue = parseInt(radius.value,10);
  //  let rez =  Math.PI * radiusValue * radiusValue;

  let rez = radiusValue.circleArea();
    rez = Math.ceil(rez);
    radius.textContent  = '';

    result.textContent = `Syprina e rrezit me rreze ${radiusValue} eshte ${rez}`;
}


const e = Math.E;
const interesBtn = document.getElementById('interesBtn');
const amount = document.getElementById('amount');
const interest = document.getElementById('interest');
const period = document.getElementById('period');
const result2 = document.getElementById('result2');

function calcInteres() {
    const amountValue = parseFloat(amount.value);
    const interestValue = parseFloat(interest.value);
    const periodValue = parseFloat(period.value);
    
   

   let rez = amountValue*(Math.pow(e,(interestValue/100)*periodValue));

    rez = Math.round(rez*100)/100;

   result2.textContent = `Vlera e parase pas ${period.value} vitesh eshte ${rez} $`
}

interesBtn.addEventListener('click', calcInteres);





const lnBtn = document.getElementById('getln2');
const result3 = document.getElementById('result3');

function getNatLog2() {
    let rez = Math.LN2;
    result3.textContent = `The values of LN2 is: ${rez} and it is ${checkSign(Math.sign(rez))}`;
  }

   function checkSign(x) {
       if (x=1) {
           return "positive";
       } else {
           return "negative";
       }
   }
lnBtn.addEventListener('click',getNatLog2);







const ln10Btn = document.getElementById('getln10e');
const result4 = document.getElementById('result4');

function getLog10e() {
    let rez =Math.LOG10E;
    rez = Math.abs(rez);
    result4.textContent = `The values of LN10e is: ${rez} `;
  }


ln10Btn.addEventListener('click',getLog10e);





/**Creating object with constructor*/

function Person(first, last, age, eye) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eye;
  }
  
  
  const person1 = new Person("Zenit", "Neziri", 20, "brown");
  const person2 = new Person("Gentrit", "Hoxha", 20, "green");
  const person3 = new Person("Jetmir", "Halili", 20, "blue");
  const person4 = new Person("Filan", "Fisteku", 25, "blue");



  function Account(number, amount) {
    this.accountNumber = number;
    this.amountNumber = amount;
  }
  const account1 = new Account(114125, 58478);
  const account2 = new Account(114126, 800000);
  const account3 = new Account(552175, 968500);




  function Hotel(name, location, employess, starNum) {
      this.restaurantName = name;
      this.restaurantLocation = location;
      this.restaurantNumOfEmployess = employess;
      this.restaurantNumOfStars = starNum;
  }

  const emeralHotel =  new Hotel("Emerald Hotel", "Rr. Prishtine-Ferizaj",250, 5 );
  const swissDiamondHotel =  new Hotel("Swiss Diamond Hotel", "Prishtine",150, 5 );
  const venusHotel =  new Hotel("Venus Hotel", "Prishtine",100, 5 );
  const fourPointsHotel =  new Hotel("Four Points Hotel", " Prishtine",145, 5 );







  const replaceBtn = document.getElementById('replaceBtn');
  const result5 = document.getElementById('result5');

   function replaceString() {
    var text  = result5.textContent;
    result5.textContent = text.replace("student.uni-pr.edu","com");
  }


   replaceBtn.addEventListener('click',replaceString);
  

      // var ss = "gentrit.hoxha@student.uni-pr.edu";
      // console.log(ss.replace("student.uni-pr.edu","gmail.com"));


var tryCatchBtn = document.getElementById('tryCatchButton');

tryCatchBtn.addEventListener('click', tryCatchFunction);

function tryCatchFunction() {
  const message = document.getElementById("tryCatchMessage");
  message.innerHTML = "";
  let x = document.getElementById("tryCatchValue").value;
  
  
  try { 
    if(x == "")  throw "is empty";
    if(isNaN(x)) throw "is not a number";
    x = Number(x);
    if(x > 100)   throw "is too high";
    if(x < 10 )  throw "is too low";
  }


  catch(err) {
    message.innerHTML = "Input " + err;
  }

  finally {
    document.getElementById("tryCatchMessage").value = "";
  }
}