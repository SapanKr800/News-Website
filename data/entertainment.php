<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://newsapi.org/v2/top-headlines?country=in&category=entertainment&apiKey=335c0e75fcf04cf18fbb1507f9ed273f',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
 $response = json_decode($response);
 
 ?>
 




  
  
    <section class="main-content">

      <div class="main row">
       
        <div class="col-md-12 col-sm-12 second">
          <h3 class="heading"> Top Entertainment Stories</h3>
          <div class="row" id="card">
		     <?php
    if($response->status == 'ok'){
        foreach($response->articles as $res){ ?>
		  
    <div class="content  col-md-3 col-sm-6">
	<div class="contents">
          <a href="<?php echo $res->url; ?>" target="_blank">
        <img src= " <?php echo $res->urlToImage; ?> "  alt="<?php echo $res->urlToImage; ?>">
		
		</a>
          <div class="container ">
           <a href="<?php echo $res->url; ?>" target="_blank">
            <p><?php echo $res->title; ?></p> </a>
            
          </div>
        </div>
		 </div>
		  <?php }
    }?>
		

          </div>

        </div>
      </div>

    </section>
