function insertRecord(id, name, price, quantity){
    $.ajax({type:"POST", url:"insertRecord.php", data:{type: "item", item_id: id, item_name: name, item_price: price, quantity: quantity}, success:function(data){
      
        if(data.includes("Too many items") == 1){
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

function submitOrder(branch, time){
  console.log(branch, time);
  let price = document.getElementById("price").innerHTML;
  let distance = document.getElementById("distance").innerHTML;
  
  $.ajax({type:"POST", url:"insertRecord.php", data:{type: "order", user_id: 1, branch: branch, time: time, price: price, distance: distance}, success:function(data){
    console.log(data);
  }
  })
}

function shoppingCart(){



  let branch = document.querySelector("input[name='branch']:checked").value;
  let price = document.getElementById("price").innerHTML;
  // console.log(branch);

  $.ajax({type:"POST", url:"insertRecord.php", data:{type: "shopping", branch: branch, price: price}, success:function(data){
    console.log(data);
  }
  })
}

<<<<<<< Updated upstream
=======
function payment(){

  let cc_num = document.getElementById("cc_num").value;
  let cvv = document.getElementById("cvv").value;
  console.log(cc_num);

  $.ajax({type:"POST", url:"insertRecord.php", data:{type: "payment", cc_num: cc_num, cvv: cvv}, success:function(data){
    console.log(data);
  }
  })
}





>>>>>>> Stashed changes
