<?php

    include 'dbconnect.php';
    if($result=mysqli_query($conn, "SELECT name, price, image FROM hotel ORDER BY RAND() LIMIT 3"))
    {   
        $colors = array("yellow", "green", "red");
        $i = 0;
        while($data = mysqli_fetch_row($result))
        {   
            echo '
            <div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
					<img src="uploads/'.$data[2].'" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-'.$colors[$i].'-gradient-bg tm-city-price-container">
							<span>'.$data[0].'</span>
							<span>'.$data[1].'$</span>
						</div>	
					</a>			
				</div>				
			</div>';
            $i++;
        }
    }

    $conn->close();
?>