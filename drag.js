
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

       
function drop(ev) {
ev.preventDefault();
var data = ev.dataTransfer.getData("text");


$.ajax({type:"POST", url:"insertFromDrag.php", data:{item_id: Number(data.split('_')[1])}, success:function(data){
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

// $('.bottomleft').fadeIn(function() {
//     window.setTimeout(function() {
//       $('.bottomleft').fadeOut('slow');
//     }, 1500);
//   });

ev.stopPropagation();
return false;
}

    
 



    