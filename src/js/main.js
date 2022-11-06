//console.log('Hello, Test');
const inputs = document.querySelectorAll('.form__input');
const placeholder = document.querySelectorAll('.form__input-placeholder');
const outline = document.querySelectorAll('.form__input-outline');



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

//VALIDATION
