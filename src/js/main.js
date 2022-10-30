//console.log('Hello, Test');

const btnAdd = document.querySelector('.btn-add');
const modal = document.querySelector('.modal');
const modalClose = document.querySelector('.modal__close');
const btnEdit = document.querySelector('.section-table__edit');
const formAdd =  document.querySelector('.modal-btn__add');
const formAddMore =  document.querySelector('.modal-btn__add-more');
const formUpdate =  document.querySelector('.modal-btn__update');
const inputs = document.querySelectorAll('.modal__input')

inputs.forEach(input => {
  //If input lost focus but has a value
  input.addEventListener('blur', e => {
    //Add class name focus 
    if(e.target.value){
      e.target.classList.add('focus')
    }else{
      e.target.classList.remove('focus')
    }
  })
});

//Show modal
btnAdd.addEventListener('click', () => {
  modal.classList.remove('hidden');
})

//Hide modal
modalClose.addEventListener('click', (e) => {
  modal.classList.add('hidden');
  formAddMore.classList.add('hidden');
  formAdd.classList.remove('hidden');

  // refresh page data when click close button
  // window.location = window.location;
})

//Show modal when edit button was click
btnEdit.addEventListener('click', () => {
  modal.classList.remove('hidden');
  formAdd.classList.add('hidden');
  formUpdate.classList.remove('hidden');
})

