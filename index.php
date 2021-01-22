<!DOCTYPE html>
<html lang="en" >
<?php
    
    function getSliderElement(){
         $imgs = scandir('./img/slider/');
         unset($imgs[0]);
         unset($imgs[1]);

         return $imgs;
    }

    function getListElement(){
         $imgs = scandir('./img/list/');
         unset($imgs[0]);
         unset($imgs[1]);

         return $imgs;
    }


/***********
CITY_NAME - label city in the text
***********/
//var_dump($_SERVER["DOCUMENT_ROOT"].'text');
$text1=file_get_contents('./texts/1.txt');
$text2=file_get_contents('./texts/2.txt');
$text3=file_get_contents('./texts/3.txt');
$text4=file_get_contents('./texts/4.txt');
$text5=file_get_contents('./texts/5.txt');
$text6=file_get_contents('./texts/6.txt');
$text7=file_get_contents('./texts/7.txt');
$text8=file_get_contents('./texts/8.txt');
$text9=file_get_contents('./texts/9.txt');


#ini_set('display_errors','On');
$ip_info = json_decode(file_get_contents('http://ip-api.com/json/'.$_SERVER['REMOTE_ADDR']), true); 

if ($ip_info['status'] == 'fail') { 
  $city = 'Netherlands'; 
} else {
  $city = (isset( $ip_info['city'] )) ? $ip_info['city'] : $ip_info['country'];
} 
  $text1 = preg_replace("#CITY_NAME#", $city, $text1);
  $text2 = preg_replace("#CITY_NAME#", $city, $text2);
  $text3 = preg_replace("#CITY_NAME#", $city, $text3);
  $text4 = preg_replace("#CITY_NAME#", $city, $text4);
  $text5 = preg_replace("#CITY_NAME#", $city, $text5);
  $text6 = preg_replace("#CITY_NAME#", $city, $text6);
  $text7 = preg_replace("#CITY_NAME#", $city, $text7);
  $text8 = preg_replace("#CITY_NAME#", $city, $text8);
  $text9 = preg_replace("#CITY_NAME#", $city, $text9);
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, height=device-height, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">
  <title>Mary - Chats</title>
  
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="img/favicon.ico"/>

  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
  <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <style type="text/css">
  	
  	.card{
  		height: <?=file_get_contents('./texts/height_img.txt');?>px;
  	}
  </style>
</head>
<body>
	 <div class="container">
	 	<!---- IMG 1--->
	      <img src="img/1.png">
	    <!---- IMG 1 END--->

	    <!---- TEXT 1--->
	    <div class="wrap-text"><?=$text1;?></div> 
	    <!---- TEXT 1 END--->

	    <!---- AUDIO--->
		<?php if(file_exists("media/audio.mp3")){ ?>
	    	<audio  src="media/audio.mp3" controls autoplay>
			    Тег audio не поддерживается вашим браузером. 
			    <a href="media/audio.mp3">Скачайте музыку</a>.
			  </audio>
	    
		<?php }?>
		<!---- AUDIO END--->

		<!---- TEXT 2--->
		<div class="wrap-text"><?=$text2;?></div> 
		<!---- TEXT 2 END--->


		<!---- VIDEO --->
		<?php if(file_exists("media/video.mp4")){ ?>
	    	<video  src="media/video.mp4" controls autoplay>
			    Тег video не поддерживается вашим браузером. 
			    <a href="media/video.mp4">Скачайте видео</a>.
			  </video>
	    
		<?php }?>
		<!----  VIDEO END--->

		<!---- TEXT 3--->
		<div class="wrap-text"><?=$text3;?></div> 
		<!---- TEXT 3 END--->

		<!-- SLIDER -->
	    <?php if($sliders=getSliderElement()){ ?>
	        <div class="owl-carousel owl-theme wrap-card">
	        <?php foreach ($sliders as $vay){?>
	        	<div class="card" style='background-image: url("img/slider/<?=$vay;?>");'></div>
	        <?php } ?> </div> <?php }?>
	    <!-- SLIDER END-->

		<!---- TEXT 4--->
	      <div class="wrap-text"><?=$text4;?></div> 
	    <!---- TEXT 4 END--->

		<!---- IMAGES --->
	      ​ <?php if($sliders=getListElement()){ ?>
	        <div class="wrap-card">
	        <?php foreach ($sliders as $vay){?>
	        	<div class="card" style='background-image: url("img/list/<?=$vay;?>");'></div>
	        <?php } ?> </div> <?php }?>

		<!----IMAGES END--->

		<!---- TEXT 5--->
	        <div class="wrap-text"><?=$text5;?></div> 
		<!---- TEXT 5 END--->

		<!----IMAGE 2--->
	    <img src="img/2.jpg">
	    <!----IMAGE 2  END--->
	    
	    <!---- TEXT 6--->
			<div class="wrap-text"><?=$text6;?></div> 
		<!---- TEXT 6 END--->

		<!----BUTTON--->
	       <a class="buttons" href='<?=file_get_contents("./buttons/CLICK TO SAVE YOUR SNAPCHAT USERNAME");?>'>CLICK TO SAVE YOUR SNAPCHAT USERNAME</a>
		<!----BUTTON END--->

		<!---- TEXT 7--->
	        <div class="wrap-text"><?=$text7;?></div>
		<!---- TEXT 7 END--->

		<!----BUTTON 2--->
	      <a class=" buttons green" href='<?=file_get_contents("./buttons/​Sign Up For Free");?>'>​Sign Up For Free</a>
	      <!----BUTTON 2 END--->
			
			<!---- TEXT 8 --->
			<div class="wrap-text">
	      		<img src="https://s.w.org/images/core/emoji/2.3/svg/1f525.svg" alt="?" width="30" height="30">
				<strong><?=$text8;?></strong>
	      		<img src="https://s.w.org/images/core/emoji/2.3/svg/1f525.svg" alt="?" width="30" height="30">
			</div> 
			<!---- TEXT 8 END--->

			<!---- TEXT 9 --->
			<div class="wrap-text"><?=$text9;?></div> 
			<!---- TEXT 9 END--->

	  </div>
  <footer>
    <a href='https://api.whatsapp.com/send?phone=+77019407033&text=Здравствуйте! %20Интересует%20Ваша%20продукция.'><i class="fab fa-whatsapp"></i>Написать в WhatsApp</a>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="owlcarousel/owl.carousel.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
      	autoplay: true,
      	autoHeight: false,
      	Height: <?=file_get_contents('./texts/height_img.txt');?>,
		responsive:{
		        600:{
		            items:2,
		            nav:false
		        },
		        0:{
		            items:2,
		            nav:true
		        }
      }
    });
     });
  </script>

</body>
</html>
