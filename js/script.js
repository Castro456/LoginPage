function ValidateEmail(inputText)
{
var x = document.forms["form1"]["em"].value;
var y = document.forms["form1"]["psr"].value;
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

if (x == "" || x == null) 
{
alert("Email must be filled out!");
return false;
}

else if(! inputText.value.match(mailformat))
{
alert("Invalid email address!");
return true;
}

if (y == "" || y == null) 
{
alert("Password must be filled out!");
return false;
}

}


