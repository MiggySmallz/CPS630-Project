function insertRecord(id, name, price, quantity){
    $.ajax({type:"POST", url:"insertRecord.php", data:{item_id: id, item_name: name, item_price: price, quantity: quantity}, success:function(data){
        console.log(data);}
    })

    $('.bottomleft').fadeIn(function() {
        window.setTimeout(function() {
          $('.bottomleft').fadeOut('slow');
        }, 1500);
      });
    
} 


