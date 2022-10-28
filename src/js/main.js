//console.log('Hello, Test');

const btnAdd = document.querySelector('.btn-add');
const modal = document.querySelector('.modal');
const modalClose = document.querySelector('.modal-close');
console.log(modalClose);

//Show modal
btnAdd.addEventListener('click', () => {
  modal.classList.remove('hidden');
})


//Hide modal
modalClose.addEventListener('click', () => {
  modal.classList.add('hidden');
})

