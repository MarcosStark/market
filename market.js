    var text_body = document.getElementById("text-body");
    var clientReg_btn = document.getElementById("clientReg-btn");
    var productReg_btn = document.getElementById("productReg-btn");
    var client_reg = document.getElementById("client-reg");
    var product_reg = document.getElementById("product-reg");


    /*clientReg_btn.addEventListener("click", function () {
        text_body.style.backgroundImage = "url('')";
        product_reg.style.display = "none";
        client_reg.style.display = "";
        client_reg.style.visibility = "visible";
    })

    productReg_btn.addEventListener("click", function () {
        text_body.style.backgroundImage = "url('')";
        client_reg.style.display = "none";
        product_reg.style.display = "";
        product_reg.style.visibility = "visible";
    })*/

function teste(){

    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp == 4){
            
        }
    }
    xhttp.open("GET", "product_reg.php");
    xhttp.send();
}


