<?php

session_start();
include("connect.php");

include("user.php");
include("login1.php");
include("post.php");



//    print_r($user_data);
//isset($_SESSION['microgram_userid']);
$login = new Login();
$user_data = $login->check_login($_SESSION['microgram_userid']);



?>









<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Microgram | Profile</title>
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet"> -->
	<style type="text/css">
		#blue_bar{
			height: 70px;
			background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 19%, rgba(0,212,255,1) 77%);;
            margin-top: -25px;
            margin-right: -10px;
            margin-left: -10px;
		}

		#search_box{
			width: 500px;
			height: 20px;
			border-radius: 5px;
			border: none;
			padding: 4px;
			font-size: 15px;
			background-image: url(search.png);
			background-repeat: no-repeat;
			background-position: right;
			
		}

		#profile_pic{
			width: 150px;
			margin-left: 29px;
			border-radius: 60%;
			border: solid 2px white;
			margin-top: 20px;




		}
		#menu_button{
			width: 100px;
			background-color: whitesmoke;
			display: inline-block;
			margin: 2px;
			font-size: 20px;
			color: darkblue;
			font-family: FootLight MT Light;
			font-weight: bold;
		}

		#friends_img{
			width: 100px;
			float: left;
			margin: 20px;
			

		}

		#friend_bar{
			
				
				min-height: 640px;
					margin-top: 30px;
					color: whitesmoke;
			width:250px;
			margin-left: 30px;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
			border-bottom-left-radius: 5px;
			font-family: FootLight MT Light;
			font-size: 30px;
			font-weight: bold;
		

			border-bottom-right-radius: 5px;
			text-align: center;
		}

		#friends{
			clear: both;

		}

		textarea{

			width: 100%;
			height: 91px;
			margin-top: 30px;
			margin-left: 20px;
			font-size: 20px;
			margin-right: -45px;
			margin-bottom: 10px;
			color: white;
			
background-color :#000000;
background-image: linear-gradient(315deg, #000000 0%, #7f8c8d 74%);



		}

		#post_button{
			height: 40px;
			margin-bottom: 30px;
		
			margin-top: 90px;
			font-size: 20px;
			margin-right: 10px;
			font-family: FootLight MT Light;
			font-weight: bold;
			
		
			
				}

				#post_bar{
				height: 200px;
					width: 490px;
					background-color: whitesmoke;
					margin-left: 300px;
					padding-top: -100px;
					background-color :#000000;
					background-image: linear-gradient(315deg, #000000 0%, #7f8c8d 74%);
					margin-top: -550px;

					margin-bottom: 20px;

				}

				#post{
					margin-left: 50px;margin-top: -500px; padding-bottom: 850px;

				}
				#post1_bar{
					height: 200px;
					width: 490px;
					background-color: whitesmoke;
					margin-left: 300px;
					padding-top: -100px;
					background-color :#000000;
					background-image: linear-gradient(315deg, #000000 0%, #7f8c8d 74%);
					margin-top: 500px;

					margin-bottom: 20px;

				}

	</style>
</head>
<body style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 1%, rgba(0,212,255,1) 49%, rgba(9,9,121,1) 99%);;
">
	<br>
	<!-- Top bar -->
	<div id="blue_bar">
		<div style="width:900px;margin: auto;font-size: 50px;color: whitesmoke;font-family: Footlight MT Light;">
			Microgram  &nbsp &nbsp<input type="text" id="search_box" placeholder="Search for people">

            <a href="profile1.php">
			<img src="selfie.jpg" style="width:70px;float:right;">
            </a>

        </div>
	</div>

	<!-- cover page
 -->
 <div style="width: 800px;margin: auto;min-height: 300px;">
 	

 		<!-- below cover area -->
 		<div style="display: flex;">
 			<!-- friends area -->
 			<div style="min-height: 700px;flex:1;">

 				<div id="friend_bar">

 					<img src="selfie.jpg" id="profile_pic">
                    <a href="profile1.php" style="color: whitesmoke;text-decoration: none;">



                      <?php echo $user_data['first_name'] . " " . $user_data['last_name']?>

                    </a>
 					
 				</div>
 			</div>
 			<!-- postarea -->

 			<div style="min-height: 400px;flex:2.5;"></div>
 				
 				<textarea placeholder="Whats on your mind?"></textarea>
 				<br><input id="post_button" type="submit" value="Post">
 								
 			</div>
 		
 					<!-- posting -->
 					<div id="post_bar">

 						<!-- post 1 -->
 						<div id="post">
 							<div>
 								<img src="Nobita.jpg" style="width:75px;  ">
 							</div>
 							<div style="font-size:large; font-family: Verdana; color: whitesmoke;">
 								
 							
 							Hello. This is Nobita Nobi. You all would have heard my name. I live in Japan. I am 14 yrs old. I love to read comics and love to swim.

 							<br/></br><br/>
 							<a href="">Like</a> .  <a href="">Comment</a> . <span >April 23 2020</span> </div>
 						</div>
 					</div>



 					<div id="post1_bar">

 						<!-- post 2 -->
 						<div id="post">
 							<div>
 								<img src="Dorami.jpg" style="width:75px;  ">
 							</div>
 							<div style="font-size:large; font-family: Verdana; color: whitesmoke;">
 								
 							
 							Hello connections. I am Dorami. My fav dish is lemon bread. I am Doreamon's sis.

 							<br/></br><br/>
 							<a href="">Like</a> .  <a href="">Comment</a> . <span >February23 2002</span> </div>
 						</div>
 					</div>


 					<div id="post1_bar">

 						<!-- post 3-->
 						<div id="post" >
 							<div>
 								<img src="Jiyan.jpg" style="width:75px;  ">
 							</div>
 							<div style="font-size:large; font-family: Verdana; color: whitesmoke;">
 								
 							
 							"Mai hu Jiyan. Meri aawaj hai suruli." Song by me. Hello friends I am Jiyan. I stay in USA.

 							<br/></br><br/>
 							<a href="">Like</a> .  <a href="">Comment</a> . <span >May 01 2021</span> </div>
 						</div>
 					</div>


 					<div id="post1_bar">

 						<!-- post 4 -->
 						<div id="post" >
 							<div>
 								<img src="Doreamon.jpg" style="width:75px;  ">
 							</div>
 							<div style="font-size:large; font-family: Verdana; color: whitesmoke;">
 								
 							
 							Hello Friends . This is Doreamon. I love to eat Doracakes and travel. I am scared of mouse.

 							<br/></br><br/>
 							<a href="">Like</a> .  <a href="">Comment</a> . <span >December 31 2007</span> </div>
 						</div>
 					</div>



 					<div id="post1_bar">

 						<!-- post 5 -->
 						<div id="post">
 							<div>
 								<img src="Suniyo.jpg" style="width:75px;  ">
 							</div>
 							<div style="font-size:large; font-family: Verdana; color: whitesmoke;">
 								
 							
 							Myself Suniyo. I stay in UK, USA and Singapore. I am studying in Amity University Mumbai. I love myself.
 							<br/></br><br/>
 							<a href="">Like</a> .  <a href="">Comment</a> . <span >November 10 2009</span> </div>
 						</div>
 					</div>



 						
 						







 					</div>

 				
 			

 		
 </div>
</body>
</html>