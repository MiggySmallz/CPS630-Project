function insertRecord(id, name, price, quantity){
    $.ajax({type:"POST", url:"insertRecord.php", data:{item_id: id, item_name: name, item_price: price, quantity: quantity}, success:function(data){
        if(data.localeCompare("Too many items") == 1){
          $('.max-items').fadeIn(function() {
            window.setTimeout(function() {
              $('.max-items').fadeOut('slow');
            }, 1500);
          });
        }
        else{
          $('.bottomleft').fadeIn(function() {
            window.setTimeout(function() {
              $('.bottomleft').fadeOut('slow');
            }, 1500);
          });
        }
      ;}
    })

    
    
} 


