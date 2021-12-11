<?php
include("autocad.php");
//echo "<pre>";
//print_r($_GET);
//echo "</pre>";


//    print_r($user_data);
//isset($_SESSION['microgram_userid']);
$login = new Login();
$user_data = $login->check_login($_SESSION['microgram_userid']);


//$profile = new Profile();
//
//$profile_data = $profile->get_profile($_GET['id']);
//
//
//if(is_array($profile_data))
//{
//    $user_data = $profile_data[0];
//}
//echo "<pre>";
//print_r($profile_data);
//echo "</pre>";

//echo "<pre>";
//print_r($_GET);
//echo "</pre>";

//posting starts here
if ($_SERVER['REQUEST_METHOD'] == "POST") {



    $post = new Post();
    $id = $_SESSION['microgram_userid'];
    $result = $post->create_post($id, $_POST, $_FILES);

    if ($result == "") {
        header("Location: profile1.php");
        die;

    } else {
        echo "The error has occured please check it once...";
        echo $result;

    }
}


//collecting posts

$post = new Post();
$id = $_SESSION['microgram_userid'];
$posts = $post->get_posts($id);


//collect friends
$user = new User();
$id = $_SESSION['microgram_userid'];
$friends = $user->get_friends($id);

$image_class = new Image();


?>


<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​​​​​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Microgram | Profile</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.0.3, nicepage.com">

    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


    <!--    <script type="application/ld+json">-->
    <!--		"@context": "https//schema.org",-->
    <!--		"@type": "Organization",-->
    <!--		"name": ""-->
    <!--}</script>-->
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
</head>

<style>

    #blue_bar {
        height: 90px;
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 19%, rgba(0, 212, 255, 1) 77%);;
        margin-top: -10px;
        margin-right: -10px;
        margin-left: -10px;
    }

    #search_box {
        width: 400px;
        height: 50px;
        border-radius: 5px;
        border: none;
        padding: 4px;
        font-size: 20px;

        background-repeat: no-repeat;
        background-position: right;
        color: black;
    }

    textarea {

        width: 96%;
        height: 91px;
        margin-top: 30px;
        margin-left: 20px;
        font-size: 20px;
        margin-right: -45px;
        margin-bottom: 10px;
        color: white;

        background-color: #eec0c6;
        background-image: linear-gradient(315deg, #eec0c6 0%, #7ee8fa 74%);

    }

    #post_button {
        height: 40px;
        margin-bottom: 30px;
        width: 130px;
        margin-top: 5px;
        font-size: 20px;
        margin-right: 30px;
        font-family: FootLight MT Light;
        font-weight: bold;
        float: right;
        text-align: center;

    }

    #post {
        margin-left: 50px;
        margin-top: -500px;


    }

    #post1_bar {
        height: 600px;
        width: 1000px;
        background-color: whitesmoke;
        margin-left: 100px;

        background-image: url("images/backgroundpost.jpeg");
        margin-top: 500px;



    }
    #textposting{
        height: 200px;
        width: 1000px;
        background-color: whitesmoke;
        margin-left: 100px;

        background-image: url("images/backgroundpost.jpeg");
        margin-top: 500px;


    }

    #button {
        float: right;
        margin-top: -60px;
        margin-right: 13px;
    }

    #postwala {
        background-image: url("images/beautiful.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        min-height: 800px;
    }

    #friendbar {
        min-height: 50px;
        flex: 1;
        margin-top: 70px;
        height: 400px;


    }

    #titlefriend {
        font-weight: bold;
        font-family: "Bookman Old Style";
        font-size: 35px;
        text-align: center;
        margin-left: 20px;
        color: whitesmoke;
        margin-top: 30px;
        margin-right: 20px;
    }

    #friends {


        font-weight: bold;
        /*color: whitesmoke;*/
        font-size: 30px;
        font-family: FootLight MT Light, serif;
        color: black;
        text-align: center;


    }

    #friends_img {

        width: 192px;
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
        border-bottom-right-radius: 50px;
        border-bottom-left-radius: 50px;


    }

    #coverarea {
        min-height: 559px;
        background: url('./mountain.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>
<body class="u-body" style="background-color: #5ca0f2;
background-image: linear-gradient(315deg, #5ca0f2 0%, #f5f7f6 74%);

">

<?php
include("header.php")
?>



<div id="coverarea">



    <?php
    $image = "cover.jpg";


    if (file_exists($user_data['cover_image'])) {
        $image = $image_class->get_thumb_cover($user_data['cover_image']);
    }
    ?>


    <img src="<?php echo $image ?>"
         style="width: 120%;margin-right: 50px;background-repeat: no-repeat;background-size: auto;" alt="$image">
</div>


<div id="coverarea">
    <marquee behavior="scroll" direction="left" scrollamount="8">
        <img src=
             "log.png" style="width: 80%;height: 30%;"
             alt="GeeksforGeeks logo">
    </marquee>
    <!--<img src="coverpage.jpg" style="width: 1000px;height:500px;margin-left: 170px;padding:10px;margin-bottom: 100px;" alt="ash">-->

</div>


<section class="u-clearfix u-image u-shading u-section-1" id="sec-73f8" data-image-width="1280"
         data-image-height="720">
    <div class="u-clearfix u-sheet u-sheet-1">
        <?php
        $image =  "usermale.jpg";
        if($user_data['gender'] == "Female")
        {
            $image = "userfemale.jpg";


        }

        if (file_exists($user_data['profile_image'])) {
            $image = $image_class->get_thumb_profile($user_data['profile_image']);
        }
        ?>
        <img class="u-image u-image-circle u-image-1" src="<?php echo $image ?>" alt="" data-image-width="840"
             data-image-height="859">
        <h1 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-1">  <?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?>
            <span style="font-weight: 300;color: yellow;font-size: 50px;background-color :#20bf55;
background-image: linear-gradient(315deg, #20bf55 0%, #01baef 74%);border-radius: 20px;text-decoration: none
;
">
                    <br>
                    <a href="change_profile_image.php?change=profile">Change Image</a>
                                    <br><br>
                                    <a href="change_profile_image.php?change=cover">Change Cover</a>
            <span style="font-weight: 400;">
              <span style="font-weight: 700;"></span>
            </span>
          </span>
        </h1>
<!--        <a href=""-->
<!--           class="u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-custom-color-1 u-hover-feature u-none u-radius-50 u-btn-1">settings</a>-->
<!--        <a href="timeline.php"-->
<!--           class="u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-custom-color-1 u-hover-feature u-none u-radius-50 u-btn-2">Timeline</a>-->
<!--        <a href=" "-->
<!--           class="u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-custom-color-1 u-hover-feature u-none u-radius-50 u-btn-3">Friends</a>-->
<!--        <a href=" "-->
<!--           class="u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-custom-color-1 u-hover-feature u-none u-radius-50 u-btn-4">Photos</a>-->
<!--        <a href=" "-->
<!--           class="u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-custom-color-1 u-hover-feature u-none u-radius-50 u-btn-5">BIO</a>-->
<!--    </div>-->


</section>
<section class="u-clearfix u-image u-section-2" id="sec-4bef" data-image-width="1280" data-image-height="768">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-form u-form-1">
            <!--          <form method="post"  class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form-1" style="padding: 10px;">-->
            <!--            <input type="hidden" id="siteId" name="siteId" value="189294145">-->
            <!--            <input type="hidden" id="pageId" name="pageId" value="27350821">-->
            <!--            <div class="u-form-group u-form-message u-form-group-1">-->
            <!--              <label for="message-4fe7" class="u-form-control-hidden u-label"></label>-->
            <!--              <textarea placeholder="Whats in your mind ???" rows="4" cols="50" id="message-4fe7" name="post" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>-->
            <!--            </div>-->
            <!--            <div class="u-align-right u-form-group u-form-submit u-form-group-2">-->
            <!--              <a href="" class="u-btn u-btn-submit u-button-style"><span class="u-icon u-icon-1"><svg class="u-svg-content" viewBox="0 0 52 52" x="0px" y="0px" style="width: 1em; height: 1em;"><g><path d="M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M26,50C12.767,50,2,39.233,2,26-->
            <!--		S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z"></path><path d="M38.252,15.336l-15.369,17.29l-9.259-7.407c-0.43-0.345-1.061-0.274-1.405,0.156c-0.345,0.432-0.275,1.061,0.156,1.406-->
            <!--		l10,8C22.559,34.928,22.78,35,23,35c0.276,0,0.551-0.114,0.748-0.336l16-18c0.367-0.412,0.33-1.045-0.083-1.411-->
            <!--		C39.251,14.885,38.62,14.922,38.252,15.336z" value="Post"></path>-->
            <!--</g></svg><img alt=""></span>Post<br>-->
            <!--              </a>-->
            <!--              <input type="submit" value="Post" class="u-form-control-hidden">-->
            <!--            </div>-->
            <!--            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>-->
            <!--            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>-->
            <!--            <input type="hidden" value="Post" name="recaptchaResponse">-->

            <div>
<!--                <form method="post" enctype="multipart/form-data">-->
<!---->
<!--                    <label>-->
<!--                        <textarea name="post" placeholder="Whats on your mind"></textarea>-->
<!---->
<!--                    </label>-->
<!---->
<!--                    <input id="post_button" type="submit" value="Post">-->
<!--                    <br>-->
<!--                </form>-->

                <form method="post" enctype="multipart/form-data">
                    <label>
                        <textarea name="post" placeholder="Whats on your mind"></textarea>

                    </label>
                    <input type="file" name="file"
                           style="font-weight: bold;margin-left: 20px;font-family: FootLight MT Light, serif;color: whitesmoke;">
                    <input id="post_button" type="submit" value="Post">
                    <br>

<!--                    <input id="post_button" type="submit" value="Post IMG">-->
                    <br>
                </form>
            </div>

        </div>
        <div>
            <div id="titlefriend">
                FRIENDS
            </div>

            <?php
            if ($friends) {
                foreach ($friends as $FRIEND_ROW) {


                    include("friend.php");

                }
            }
            ?>


        </div>


</section>


<!--    -->
<!--    <section class="u-backlink u-clearfix u-grey-80">-->
<!--      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">-->
<!--        <span>Website Templates</span>-->
<!--      </a>-->
<!--      <p class="u-text">-->
<!--        <span>created with</span>-->
<!--      </p>-->
<!--      <a class="u-link" href="" target="_blank">-->
<!--        <span>Website Builder Software</span>-->
<!--      </a>. -->
<!--    </section>-->


<div id="postwala">
    <div class="u-clearfix u-image u-section-3" id="sec-7c65" data-image-width="1280" data-image-height="905">
        <div class="u-clearfix u-sheet u-sheet-1" style="margin-bottom: 10px;">


            <!-- post 1 -->


            <?php
            if ($posts) {
                foreach ($posts as $ROW) {

                    $user = new User();
                    $ROW_USER = $user->get_user($ROW['userid']);
                    include("posts.php");

                }
            }
            ?>

        </div>
    </div>
</div>


</body>
</html>