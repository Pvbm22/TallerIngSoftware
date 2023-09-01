

function colorazul(){
    document.getElementById("azul").style.backgroundColor="blue";
}

function colorverde(){
    document.getElementsByClassName("verde")[0].style.backgroundColor="green";

}

function reset(){
    document.getElementById("azul").style.backgroundColor="red";


}


function rotate(value){
document.getElementById('caja2').style.webkitTransform="rotate(" + value + "deg)";
document.getElementById('caja2').style.msTransform="rotate(" + value + "deg)";
document.getElementById('caja2').style.transform="rotate(" + value + "deg)";
}


