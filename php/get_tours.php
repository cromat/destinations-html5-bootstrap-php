<?php

include 'dbconnect.php';


if(isset($_GET['site'])) {
    $site = $_GET['site'];
}
if(isset($_GET['type'])) {
    $type = $_GET['type'];
}


if ($site == "index" && $type == "nature"){
    
    if($result=mysqli_query($conn, "SELECT name, description, price, image, event_date FROM tour WHERE type LIKE 'nature' ORDER BY RAND() LIMIT 4"))
    {
        while($data = mysqli_fetch_row($result))
        {
            echo '
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
            <div class="tm-home-box-2">
            <img src="uploads/'.$data[3].'" alt="image" class="img-responsive">
            <h3>'.$data[0].'</h3>
            <p class="tm-date">'.$data[4].'</p>
            <div class="tm-home-box-2-container">
            <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
            <a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Travel</span></a>
            <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
            </div>
            </div>
            </div>';
        }
    }
}

if ($site == "index" && $type == "city"){

    if($result=mysqli_query($conn, "SELECT name, description, price, image, event_date FROM tour WHERE type LIKE 'city' ORDER BY RAND() LIMIT 4"))
    {
        while($data = mysqli_fetch_row($result))
        {
            echo '
            <div class="col-lg-6">
            <div class="tm-home-box-3">
            <div id="city-img-div" class="tm-home-box-3-img-container">
            <img id="city-img" src="uploads/'.$data[3].'" alt="image" class="img-responsive">
            </div>
            <div class="tm-home-box-3-info">
            <p id="city-p" class="tm-home-box-3-description">'.$data[1].'</p>
            <div class="tm-home-box-2-container">
            <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
            <a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">'.$data[0].'</span></a>
            <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
            </div>
            </div>
            </div>
            </div>';
        }
    }
}

if ($site == "tour"){
    
    if($result=mysqli_query($conn, "SELECT name, description, price, image, event_date, duration FROM tour"))
    {
        $i = 0;
        while($data = mysqli_fetch_row($result))
        {
            if ($i % 2 == 0){
                echo '<div class="row">';
            }
            echo '
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="tm-tours-box-1">
            <img id="tour-img" src="uploads/'.$data[3].'" alt="image" class="img-responsive">
            <div class="tm-tours-box-1-info">
            <div class="tm-tours-box-1-info-left">
            <p class="text-uppercase margin-bottom-20">'.$data[0].'</p>
            <p class="gray-text">'.$data[4].'</p>
            </div>
            <div class="tm-tours-box-1-info-right">
            <p class="gray-text tours-1-description">'.$data[1].'</p>
            </div>
            </div>
            <div class="tm-tours-box-1-link">
            <div class="tm-tours-box-1-link-left">
            Duration: '.$data[5].' DAYS
            </div>
            <a href="#" class="tm-tours-box-1-link-right">
            '.$data[2].' $
            </a>
            </div>
            </div>
            </div>';

            if($i % 2){ 
                echo '</div>';
            }
            $i++;
        }
    }
}

$conn->close();
?>