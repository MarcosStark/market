$(document).ready( function(){
    
    $('#client_reg_btn').click( function(){
        $.ajax({
            url: 'client_reg_bd.php',
            method: 'post',
            data: $('#client-reg').serialize(),

            success: function(data){
               alert(data); 
            },
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
            var id = $(this).data('id_client');
});

$(document).ready( function(){
    
    $('.deleteClient-btn').click( function(){
        var id = $(this).data('id_client');
        
        $.ajax({
            url: 'deleteClient_bd.php',
            method: 'post',
            data: {id_client: id}, 

            success: function(data){
                $.ajax({
                    url: 'consult_clients.php',
        
                    success: function(data){
                        text_body.style.backgroundImage = "url('')";
                        $('#text-body').html(data);            
                    }
                });
            },
        });
    });
});

$(document).ready( function(){
    
    $('.editClient-btn').click( function(){
        var id = $(this).data('id_client');
        
        /*$.ajax({
            url: 'edit_client.php',
            method: 'post',
            data: {id_client: id}, */

            //success: function(data){
                $.ajax({
                    url: 'edit2.php',
        
                    success: function(data){
                        text_body.style.backgroundImage = "url('')";
                        $('#text-body').html(data);            
                    }
                });
           // },
        //});
    });
});












