<?php 
include('config.php');
session_start();
date_default_timezone_set('Asia/Kolkata');
$json_data=json_decode(file_get_contents('php://input'), true);
$search=$json_data['search'];

          	$today=date("Y-m-d");
          	$qry2=mysqli_query($con,"select DISTINCT movie_name,movie_id,image,cast from tbl_movie where movie_name like'%".$search."%'");
				$x1=" ";
			echo "<div>";			
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    echo "<div class=\"col_1_of_4 span_1_of_4\">
					<div class=\"imageRow\">
						  	<div class=\"single\">
						  	<a href='about.php?id=".$m['movie_id']."' rel=\"lightbox\"><img src=".$m['image']." alt=\"\" /></a>
						  	</div>	
						  	<div class=\"movie-text\">
						  	<h4 class=\"h-text\"><a href='about.php?id=".$m['movie_id']."'>".$m['movie_name']."</a></h4>
						  	Cast:<Span class=\"color2\">".$m['cast']."</span><br>	
						  	</div>
						  	
		  				</div>
		  		</div> ";
  	    		}
  	    	echo "</div>
				<div class=\"clear\"></div>		
			</div>";	
  	    	?>
			
