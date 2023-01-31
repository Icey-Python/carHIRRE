<?php 
    
?>
</div>

      
      
    
   <div class="container">
    <div class="row col-lg-4 mt-3 mb-3">
  
  <div class="card-deck" >
   <div class="card boarder-info p-2" style= "height:500px; width; 500px"> 
<img class="card-img-top" src= "images/'.$carImage.'" / style="height: 3   00px;">

<br>
<br>
<br>
<div class=" card-body">
    <h4 class="card-tittle"> Name: ' . $name . '</h4>
    <br>
    <h4 class="card-tittle"> Price:  ' . $price . ' / day</h4>
<a href="order.php? orderid=' . $id . ' "  class= "btn btn-danger btn-block btn-lg p-2" > Book Now </a>
</div>
  </div>
  </div>
 </div>
 </div>
 ';
  
 } 
  }else mysqli_error($con);
?>
*/