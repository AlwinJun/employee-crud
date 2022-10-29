//console.log('Hello, Test');

const btnAdd = document.querySelector('.btn-add');
const modal = document.querySelector('.modal');
const modalClose = document.querySelector('.modal-close');
const btnEdit = document.querySelector('.action-edit');
const formAdd =  document.querySelector('.modal-add');
const formAddMore =  document.querySelector('.modal-add-more');
const formUpdate =  document.querySelector('.modal-update');
const form = document.querySelector('form');

//Show modal
btnAdd.addEventListener('click', () => {
  modal.classList.remove('hidden');
})
//Hide modal
modalClose.addEventListener('click', (e) => {
  modal.classList.add('hidden');
  formAddMore.classList.add('hidden');
  formAdd.classList.remove('hidden');

  //refresh page data when click close button
 // window.location = window.location;
})
//Show modal when edit button was click
btnEdit.addEventListener('click', () => {
  modal.classList.remove('hidden');
  formAdd.classList.add('hidden');
  formUpdate.classList.remove('hidden');
})


//Show add-more and remove add button
/* formAdd.addEventListener('click', () => {
  formAdd.classList.add('hidden')
  formAddMore.classList.remove('hidden')
})

//Prevent form from refresh
modal.addEventListener('submit', def)

function def (e) {
  e.preventDefault();
  console.log('yo');
} */