document.getElementById("addform").addEventListener("submit",addtext);
function addtext(e){
e.preventDefault();
var text = document.getElementById("text").value;
var pro="add1="+text;
var xhr = new XMLHttpRequest();
xhr.open("POST","addconfig.php",true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.onload = function(){
    document.getElementById("text").value = '';
    alert(this.responseText);
   }
xhr.send(pro);
}