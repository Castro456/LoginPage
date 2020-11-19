function ValidateName(input) 
{
  var name = document.forms["form2"]["firstname"].value;
  var nameformat=/^[A-Za-z\s]+$/;   
  var username = document.forms["form2"]["usr"].value;
  var usercheck = username.length;

  if (name == "" || name == null) 
{
    alert("Name must be filled out!");
    return false;
}

if(!input.value.match(nameformat))
{
   alert("Invalid Name!"); 
   return true;
}

if (username == "" || username == null) 
{
    alert("UserName must be filled out!");
    return false;
}

if(usercheck > 6)
{
    alert("UserName must be within 1-6 characters!");
    return false;
} 

}
function ValidateEmail(inputText)
{
var email = document.forms["form2"]["email"].value;
var password = document.forms["form2"]["psr"].value;
var passcheck = password.length;
var dateofbirth = document.forms["form2"]["dob"].value;
var age = document.forms["form2"]["age"].value;
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

if (email == "" || email == null) 
{
    alert("Email must be filled out!");
    return false;
}

if(! inputText.value.match(mailformat))
{
  alert("Invalid email address!"); 
  return true;
}

if (password == "" || password == null) 
{
    alert("Password must be filled out!");
    return false;
}

if (passcheck < 6) 
{
    alert("Password must be atleast 6 characters!");
    return false;
}


if (dateofbirth == "" || dateofbirth == null) 
{
    alert("DOB must be filled out!");
    return false;
}

if (age == "" || age == null) 
{
    alert("Age must be filled out!");
    return false;
}

}
function calAge() 
{
// alert('Calculating age'+now);
//Get the entered DOB
//get the current date
//subtract current date from the dob
//populate age field with the age
}