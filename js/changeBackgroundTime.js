console.log("Change background based on the time of the day ");


const blogPart = document.querySelector('.blog-part');
const article = document.querySelectorAll('.article');
console.log(article)

//var currentTime = new Date().getHours();
const currentTime = new Date('December 17, 1995 14:24:00').getHours();

if (document.body) {
    if (7 <= currentTime && currentTime < 20) {
        blogPart.classList.add('day');
        article.forEach(element => {
            element.classList.add('day');
        });
    }
    else {
        blogPart.classList.remove('day');
        blogPart.classList.add('night');
    }
}