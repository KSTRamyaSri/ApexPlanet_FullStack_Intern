// ======================
// REGISTER
// ======================

const registerForm =
document.getElementById(
"registerForm"
);

if(registerForm){

registerForm.addEventListener(

"submit",

(e)=>{

e.preventDefault();

const username=

document
.getElementById(
"regUsername"
)
.value
.trim();

const email=

document
.getElementById(
"regEmail"
)
.value
.trim();

const password=

document
.getElementById(
"regPassword"
)
.value;

const confirm=

document
.getElementById(
"regConfirmPassword"
)
.value;

if(
password!==confirm
){

alert(
"Passwords do not match"
);

return;

}

const user={

username,
email,
password

};

localStorage.setItem(

"user",

JSON.stringify(
user
)

);

alert(
"Registration Success"
);

window.location=
"login.html";

});

}



// ======================
// LOGIN
// ======================

const loginForm=
document.getElementById(
"loginForm"
);

if(loginForm){

loginForm.addEventListener(

"submit",

(e)=>{

e.preventDefault();

const email=

document
.getElementById(
"loginUser"
)
.value
.trim();

const password=

document
.getElementById(
"loginPassword"
)
.value;

const stored=

JSON.parse(

localStorage.getItem(
"user"
)

);

if(
!stored
){

alert(
"No account found"
);

return;

}

if(

stored.email===email

&&

stored.password===password

){

alert(
"Login Success"
);

window.location=
"index.html";

}

else{

alert(
"Wrong Email or Password"
);

}

});

}