console.log("Script is working");

fetch('database.json')
.then(function (response) {
    return response.json();
})
.then(function (data) {

    appendData(data);
});



function appendData(data){
    var container = document.getElementById('all-products-container');
   
    for(let i=0; i<data.length; i++){
           

        let card = document.createElement('div');
           card.classList.add('item1');

       let heading = document.createElement('h1');
         heading.classList.add('card-title');
         heading.textContent = data[i].title;


      let image = document.createElement('div');
      image.classList.add('house1');
      image.setAttribute("id", "card-image");

      
     
      image.style.backgroundImage = "url('" + data[i].sourceImage + "')";

      let price = document.createElement('p');
          price.classList.add('price-label');
          
          let price1 = document.createElement('span');
          price1.classList.add('price-tag');
          price1.textContent = "$ "+ data[i].price;
          price.appendChild(price1);
          


      let address = document.createElement('p');
          address.classList.add('address-label');
          address.textContent = "Address:  "
    
      let address1 = document.createElement('span');
          address1.classList.add('room-tag');
          address1.textContent =  data[i].address;    

      address.appendChild(address1);


      let room = document.createElement('p');
          room.classList.add('room-label');
          room.textContent = "Rooms:  "
    
      let room1 = document.createElement('span');
          room1.classList.add('room-tag');
          room1.textContent =  data[i].room; 
          room.appendChild(room1);
          
          

    let bathroom = document.createElement('p');
          bathroom.classList.add('bathroom-label');
          bathroom.textContent = "Bathrooms:  "
    
      let bathroom1 = document.createElement('span');
          bathroom1.classList.add('bathroom-tag');
          bathroom1.textContent =  data[i].bathroom;     
          bathroom.appendChild(bathroom1);
         

     let sqft = document.createElement('p');
          sqft.classList.add('sqft-label');
          sqft.textContent = "Sqft:  "
    
      let sqft1 = document.createElement('span');
          sqft1.classList.add('sqft-tag');
          sqft1.textContent =  data[i].sqft;     
          sqft.appendChild(sqft1);

       let mailto = document.createElement('p');
          mailto.classList.add('mailto-label');
    
      let mailto1 = document.createElement('a');
          mailto1.classList.add('emailto');
          mailto1.href = "mailto:"+data[i].email;
          mailto1.textContent = "Contact the Agent"     
          mailto.appendChild(mailto1);

       let continue_reading = document.createElement('a');
          continue_reading.classList.add('link-continue-reading');
          continue_reading.href = "mailto:"+data[i].email;
          continue_reading.textContent = "Continue Reading"     

         
         


       card.appendChild(heading);
       card.appendChild(image);
       card.appendChild(price);
       card.appendChild(address);
       card.appendChild(room);
       card.appendChild(bathroom);
       card.appendChild(sqft);
       card.appendChild(mailto);
       card.appendChild(continue_reading);

       container.appendChild(card);


    }
}


