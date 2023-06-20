<?php
include '../php/conn.php';

$sql = " SELECT Name, Ulasan FROM customer; ";
$result = mysqli_query($conn, $sql);

foreach ($result as $shil ) {
    $name = $shil ['Name'];
    $ulasan = $shil ['Ulasan'];

    echo '
    <div class="carousel-item">
    <div class="client_section_2">
       <div class="client_main">
          <div class="client_left">
             <div class="client_img"><img src="images/Ashila.jpeg"></div>
          </div>
          <div class="client_right">
             <h3 class="name_text">'. $name .' </h3>
             <p class="dolor_text">'. $ulasan .'  </p>
          </div>
       </div>
    </div>
    </div>
    
    ';
} 

mysqli_close($conn);

?>