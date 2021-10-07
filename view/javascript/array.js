
let fruits = ['Apple', 'Banana'];
//<button id="greenMode" type="button">Click Me!</button>
/*document.addEventListener("click", function(){
    document.body.style.backgroundColor = "red";
});
*/

var length = document.getElementById("myTable").rows.length;
console.log(length)
if(length > 1)
{
document.getElementsByTagName("body")[0].style = "background-color:orange";}
else { document.getElementsByTagName("body")[0].style = "background-color:green";  }
    


function myFunction(echo)
{
    console.log(echo)
    
    document.getElementById(echo).remove();  
    var length = document.getElementById("myTable").rows.length;
console.log(length)
if(length > 1)
{
document.getElementsByTagName("body")[0].style = "background-color:orange";}
else { document.getElementsByTagName("body")[0].style = "background-color:green";  }
    
}


function myFunction1()
{
alert("le texte a bien été enregistrer")
$('#text').html('changed value');

}


