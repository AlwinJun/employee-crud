//console.log('Hello, Test');
const inputs = document.querySelectorAll('.form__input');
const btnDeleteAll =  document.querySelector('.btn-delete-all')

inputs.forEach(input => {
  //If input lost focus but has a value
  input.addEventListener('blur', e => {
    //Add class name focus 
    if(e.target.value){
      e.target.classList.add('focus');
    }else{
      e.target.classList.remove('focus');
    }
  })
});


//Show warning modal
btnDeleteAll.addEventListener('click', ()=>{
   document.querySelector('.modal-warning').classList.remove('hidden');
})


// Hide warning modal
document.querySelector('#cancel').addEventListener('click', ()=>{
  document.querySelector('.modal-warning').classList.add('hidden');
})