<?php
$corner_image = "usermale.jpg";
if(isset($user_data))
{
    $corner_image = $user_data['profile_image'];

}

?>


<div id="blue_bar">
    <div style="width:900px;margin:auto;font-size: 50px;color: whitesmoke;font-family: Footlight MT Light,serif;">
        <a href="timeline.php" style="color: whitesmoke;"> Microgram </a>



        &nbsp &nbsp<label for="search_box"></label><input type="text" id="search_box"
                                                                    placeholder="Search for people">


        <a href="logout.php">
            &nbsp &nbsp <span style="font-size: 30px; margin-right: 30px;color: whitesmoke
            ;">Logout</span></a>


        <a href="profile1.php">
            <img src="<?php echo $corner_image ?>" style="width: 100px;float: right;margin-top: 10px;margin-right: 390px;"
        </a>




    </div>
</div>