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

//Show delete all icon on hover
btnDeleteAll.addEventListener('mouseover', () =>{
  document.querySelector('.btn-delete-icon').classList.remove('hidden');
  btnDeleteAll.classList.add('hidden');
})

// Show delete all button text on mouse leave
btnDeleteAll.addEventListener('mouseleave', () =>{
  document.querySelector('.btn-delete-icon').classList.add('hidden');
  btnDeleteAll.classList.remove('hidden');
})

//Show warning modal
document.querySelector('.btn-delete-icon').addEventListener('click', ()=>{
   document.querySelector('.modal-warning').classList.remove('hidden');
})


// Hide warning modal
document.querySelector('#cancel').addEventListener('click', ()=>{
  document.querySelector('.modal-warning').classList.add('hidden');
})