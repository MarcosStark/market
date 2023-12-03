text_body = document.getElementById("text-body");

$(document).ready( function(){
    
    $('#clientReg-btn').click(function(){
        $.ajax({
            url: 'client_reg.php',

            success: function(data){
                text_body.style.backgroundImage = "url('')";
                $('#text-body').html(data);
            }
        })
    });
});

$(document).ready( function(){
    
    $('#productReg-btn').click(function(){
        $.ajax({
            url: 'product_reg.php',

            success: function(data){
                text_body.style.backgroundImage = "url('')";
                $('#text-body').html(data);
            }
        })
    });
});

