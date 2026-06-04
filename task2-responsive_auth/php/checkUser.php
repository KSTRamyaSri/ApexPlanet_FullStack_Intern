<?php

$users=[

"admin",

"sri",

"test"

];

$email=[

"admin@gmail.com"

];

if(

in_array(
$_GET["u"],
$users
)

||

in_array(
$_GET["u"],
$email
)

)

echo
"<span style='color:red'>
Already Exists
</span>";

else

echo
"<span style='color:green'>
Available
</span>";

?>