   const open = document.querySelector('.show-modal');
   var close = document.querySelector('.close-modal');
   var modal  = document.querySelector('.modal');
   var overlay  = document.querySelector('.overlay');


   

   function openModal(params) {
      modal.classList.remove('hidden');
      overlay.classList.remove('hidden');
   }

   function closeTheModal() {
    modal.classList.add('hidden');
    overlay.classList.add('hidden');
}

open.addEventListener('click' , openModal);
close.addEventListener('click' , closeTheModal);




    