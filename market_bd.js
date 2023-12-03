$(document).ready( function(){
    
    $('#client_reg_btn').click( function(){
        $.ajax({
            url: 'client_reg_bd.php',
            method: 'post',
            data: $('#client-reg').serialize(),

            success: function(data){
               alert(data);
            }
        });
    });
});

$(document).ready( function(){
    text_body = document.getElementById("text-body");

    $('#clientBd-btn').click( function(){
        $.ajax({
            url: 'consult_clients.php',

            success: function(data){
                text_body.style.backgroundImage = "url('')";
                $('#text-body').html(data);            
            }
        });
    });
});