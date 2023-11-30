    var text_body = document.getElementById("text-body");

function registerClient(){

    text_body.style.backgroundImage = "url('')";

    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4){
            if(xhttp.status == 200){
                text_body.innerHTML = xhttp.responseText;
            }
        }
    }
    xhttp.open("GET", "client_reg.html");
    xhttp.send();
}


function registerProduct(){

    text_body.style.backgroundImage = "url('')";

    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4){
            if(xhttp.status == 200){
                text_body.innerHTML = xhttp.responseText;
            }
        }
    }
    xhttp.open("GET", "product_reg.html");
    xhttp.send();
}

