// const form = document.querySelector('.myform');
// const details = document.querySelector('#tab1');
// form.addEventListener('submit', e=>{
// 	// e.preventDefault();
// 	details.classList.remove('d-none');
// });

const edit = document.querySelector('.edit');
const close = document.querySelector('.close');
const popup = document.querySelector('.popup-wrapper');
edit.addEventListener('click' , ()=>{
    popup.style.display = "block";
});

close.addEventListener('click', ()=>{
    popup.style.display = "none";
});