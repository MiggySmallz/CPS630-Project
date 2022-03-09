
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function removeNode(node) {
        node.parentNode.removeChild(node);
        }
        
        function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        // var isLeft = 'product' == data.split('_')[0];


        // var nodeCopy = document.getElementById(data).cloneNode(true);
        // nodeCopy.id = "img" + ev.target.id;
        // // clean target space if needed
        // if (isLeft) {
        //     if (ev.target.nodeName == 'IMG') {
        //     ev.target.parentNode.appendChild(nodeCopy);
        //     removeNode(ev.target);
        //     }
        //     else 
        //     ev.target.appendChild(nodeCopy);
        // }

        // console.log(data);
        
        $.ajax({type:"POST", url:"insertFromDrag.php", data:{item_id: Number(data.split('_')[1])}, success:function(data){
            console.log(data);}
        })
        // else {
        //     if (ev.target.nodeName != 'IMG') {
        //     removeNode(document.getElementById(data));
        //     //ev.target.appendChild(nodeCopy);
        //     }
        // }
        $('.bottomleft').fadeIn(function() {
            window.setTimeout(function() {
              $('.bottomleft').fadeOut('slow');
            }, 1500);
          });

        ev.stopPropagation();
        return false;
        }

    
 



    