var date = new Date();
const showTime = document.getElementById("time");
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "October", "November", "December"]


showTime.textContent = `${date.getDate()}/${months[date.getMonth()]}/${date.getFullYear()}:
                        ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;