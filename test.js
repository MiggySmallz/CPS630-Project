// function insertRecord(id, name, price, quantity){
//     $.ajax({type:"POST", url:"insertRecord.php", data:{type: "item", item_id: id, item_name: name, item_price: price, quantity: quantity}, success:function(data){
      
//         if(data.includes("Too many items") == 1){
          // $('.max-items').fadeIn(function() {
          //   window.setTimeout(function() {
          //     $('.max-items').fadeOut('slow');
          //   }, 1500);
          // });
//         }
//         else{
//           $('.bottomleft').fadeIn(function() {
//             window.setTimeout(function() {
//               $('.bottomleft').fadeOut('slow');
//             }, 1500);
//           });
//         }
//       ;}
//     })
// } 

function submitOrder(branch, time){

  // let branch = document.querySelector("input[name='branch']:checked").value;
  // let price = document.getElementById("price").innerHTML;


  
  let itemList = JSON.parse(localStorage.getItem("Cart"));


  for(let i=0;i<itemList.length;i++){
    let item_id = itemList[i]['item_id'];
    let name = itemList[i]['name'];
    let price = itemList[i]['price'];
    let quantity = itemList[i]['quantity'];

    console.log("Sending: " + item_id + " " + name +  " " + price + " " + quantity);

    (function (i) {
      
      $.ajax({type:"POST", url:"insertRecord.php", data:{type: "item", item_id: item_id, item_name: name, item_price: price, quantity: quantity, newCart: 'no'}, success:function(data){
        document.getElementById("result").innerHTML = data;
        ;}
      })
    })(i);

    
  }


  

  console.log(branch, time);
  let price = document.getElementById("price").innerHTML;
  let distance = document.getElementById("distance").innerHTML;
  
  $.ajax({type:"POST", url:"insertRecord.php", data:{type: "order", user_id: 1, branch: branch, time: time, price: price, distance: distance}, success:function(data){
    console.log(data);
  }
  })


  localStorage.clear()
}


function payment(){

  let cc_num = document.getElementById("cc_num").value;
  let cvv = document.getElementById("cvv").value;
  console.log(cc_num);

  $.ajax({type:"POST", url:"insertRecord.php", data:{type: "payment", cc_num: cc_num, cvv: cvv}, success:function(data){
    console.log(data);
  }
  })
}

function addedItemNotification(){
  $('.bottomright').fadeIn(function() {
    window.setTimeout(function() {
      $('.bottomright').fadeOut('slow');
    }, 1500);
  }); return false;
}

function sendPost(){
  let userID = localStorage.getItem("userID");

  $.ajax({type:"POST", url:"getUserAddress.php", data:{userID: userID}, success:function(data){
    console.log(data);
  }
  })

}




