document.addEventListener(
"DOMContentLoaded",

()=>{

loadComponent(
"navbar-placeholder",
"components/navbar.html"
);

loadComponent(
"footer-placeholder",
"components/footer.html"
);

restoreTheme();

initPasswordToggle();

});



// THEME

function toggleTheme(){

document.body.classList.toggle(
"dark"
);

const icon=
document.getElementById(
"themeIcon"
);

if(icon){

icon.className=

document.body.classList.contains(
"dark"
)

?

"fa-solid fa-sun"

:

"fa-solid fa-moon";

}

localStorage.setItem(

"theme",

document.body.classList.contains(
"dark"
)

?

"dark"

:

"light"

);

}



function restoreTheme(){

const saved=

localStorage.getItem(
"theme"
);

if(
saved==="dark"
){

document.body.classList.add(
"dark"
);

setTimeout(()=>{

const icon=

document.getElementById(
"themeIcon"
);

if(icon){

icon.className=
"fa-solid fa-sun";

}

},300);

}

}



// PASSWORD

function initPasswordToggle(){

document.body.addEventListener(

"click",

(e)=>{

const btn=

e.target.closest(
".pass-toggle"
);

if(!btn)
return;

const input=

btn
.closest(
".input-group"
)
.querySelector(
".toggle-password"
);

const icon=
btn.querySelector(
"i"
);

if(
input.type
===
"password"
){

input.type=
"text";

icon.className=
"fa-solid fa-eye-slash";

}

else{

input.type=
"password";

icon.className=
"fa-solid fa-eye";

}

});

}



// COMPONENTS

async function loadComponent(
target,
path
){

const container=

document.getElementById(
target
);

if(!container)
return;

try{

const response=
await fetch(path);

container.innerHTML=
await response.text();

}

catch(err){

console.log(err);

}

}

function logout(){

localStorage.removeItem(
"user"
);

window.location=
"login.html";

}