<?php

session_start();
include("connect.php");

include("user.php");
include("login1.php");
include("post.php");
include("image1.php");



//    print_r($user_data);
//isset($_SESSION['microgram_userid']);
$login = new Login();
$user_data = $login->check_login($_SESSION['microgram_userid']);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
//    echo "<pre>";
//    print_r($_POST);
//    print_r($_FILES);
//    echo "</pre>";
//    $error = "";

    if(isset($_FILES['file']['name'])  && $_FILES['file']['name'] != "") {

//        echo "<pre>";
//        print_r($_FILES);
//        echo "</pre>";
//        die;
        if ($_FILES['file']['type'] == "image/jpeg") {

            $allowed_size = (1024 * 1024) * 7;
            if ($_FILES['file']['size'] < $allowed_size) {
                //everything is fine...
                $folder = "Uploads/" . $user_data['userid'] . "/";

                //create folder
                if(!file_exists($folder))
                {
                    mkdir($folder,0777,true);
                }
                $image = new Image();

                $filename = $folder . $image->generate_filename(15);
                move_uploaded_file($_FILES['file']['tmp_name'], $filename);


                $change = "profile";
                //check  for mode
                if(isset($_GET['change']))
                {
                    $change = $_GET['change'];
                }


//                echo "$filename";
                if($change == "cover")
                {
                    if(file_exists($user_data['cover_image']))
                    {
                        unlink($user_data['cover_image']);
                    }
                    $image->resize_image($filename, $filename, 1500, 1500);
                }else{
                    if(file_exists($user_data['profile_image']))
                    {
                        unlink($user_data['profile_image']);
                    }
                    $image->resize_image($filename, $filename, 1500, 1500
                    );
                }





                    $userid = $user_data['userid'];

                    if($change == "cover")
                    {
                       $query = "update users set cover_image = '$filename' where userid = '$userid' limit 1";
                    }else{
                        $query = "update users set profile_image  = '$filename' where userid = '$userid' limit 1";

                    }




                    $DB = new Database();
                    $DB->save($query);


                    //create a post
                    $post = new Post();

                    $post->create_post($userid, $_POST, $filename);


                          header(("Location: profile1.php"));
                          die;
                }

            } else {
                echo "please enter valid img";
            }

        } else {
            echo "please enter valid img.";
        }














}





?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Microgram | change profile image</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet"> -->
    <style>
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

        #posting{
            background-image: url("images/beautiful.jpg");
            width: 200%;
            height: 140px;
            margin-top: 10px;
            font-size: 50px;
            padding: 6px;
            margin-left: 20px;
            font-weight: bold;

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
        Microgram  &nbsp &nbsp<label for="search_box"></label><input type="text" id="search_box" placeholder="Search for people">
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

        <!-- postarea -->
        <form method="post" enctype="multipart/form-data">
        <div id="posting">


            <input type="file" name="file" style="margin-left: 10px;font-size: 20px;font-family: FootLight MT Light, serif;">
<!--           <br><input type="file" name="file2" style="margin-left: 10px;font-size: 20px;font-family: FootLight MT Light, serif;">-->

        <br><input id="post_button" type="submit" value="Change" style="width: 20%;float: right;margin-top: -20px;
        border-radius: 10px; background-color: #20bf55;
background-image :linear-gradient(315deg, #20bf55 0%, #01baef 74%);

;">
            <br><br><br><br>

            <?php

            $change = "profile";
            //check  for mode
            if(isset($_GET['change']) && $_GET['change'] == "cover")
            {
                $change = "cover";
                echo "<img src='$user_data[cover_image]' style='max-width:500px;' >";
            }else{
                    echo "<img src='$user_data[profile_image]' style='max-width:500px;' >";
            }

            ?>
        </div>

    </div>

    <!-- posting -->












</div>






</body>
</html>
