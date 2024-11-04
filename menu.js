var menuItem= document.querySelectorAll('.item-menu')

function selectlink(){

menuItem.forEach((item)=>
   item.classList.remove('ativo')

)

this.classList.add('ativo')


}

menuItem.forEach((item)=>

  item.addEventListener('click',selectlink)

)


var btnExp = document.querySelector('#btn-exp')
var menuSide = document.querySelector('.menu-lateral')

btnExp.addEventListener('click',function(){
    menuSide.classList.toggle('expandir')
})


var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");

var body = document.querySelector("body");


btnSignin.addEventListener("click", function () {
   body.className = "sign-in-js"; 
});

btnSignup.addEventListener("click", function () {
    body.className = "sign-up-js";
})