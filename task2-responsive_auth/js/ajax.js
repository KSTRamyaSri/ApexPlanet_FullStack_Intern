const username=

document
.getElementById(
"regUsername"
);

if(username){

username.addEventListener(
"keyup",

()=>{

fetch(

`php/checkUser.php?u=${username.value}`

)

.then(
res=>
res.text()
)

.then(
data=>{

document
.getElementById(
"usernameFeedback"
)

.innerHTML=

data;

});

});

}