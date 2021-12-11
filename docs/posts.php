<div id="post1_bar">

    <!-- post 1 -->
    <div id="post">
        <?php
        $image = "usermale.jpg";
        if ($ROW_USER['gender'] == "Female") {
            $image = "userfemale.jpg";

        }
        if (file_exists($ROW_USER['profile_image'])) {
            $image = "userfemale.jpg";
            $image = $image_class->get_thumb_profile($ROW_USER['profile_image']);
        }
        ?>


        <div style="font-family: Algerian; serif;font-size: 25px;">
            <img src="<?php echo $image ?>" style="width:75px;font-size: large;font-family: 'Footlight MT';  ">
            <?php echo $ROW_USER['first_name'] . " " . $ROW_USER['last_name']; ?>
        </div>
        <div style="font-size:large; font-family: Verdana; black;border:10px;">


            <?php
            echo "<style='width:20%'>";
            echo $ROW['post'] ?>
            <br><br>

            <?php
            if (file_exists($ROW['image'])) {
                $post_image = $image_class->get_thumb_post($ROW['image']);
                echo "<img src='$post_image' style='width:36%;' />";
            }

            ?>
            <br><br>
            <span>
            <?php echo $ROW['date']; ?>
            </span>
        </div>
        <div id="button">
            <a href=""
               class="u-btn u-btn-round u-button-style u-gradient u-none u-radius-4 u-text-body-alt-color u-btn-1"><span
                        class="u-icon u-icon-1"><svg class="u-svg-content" viewBox="0 0 50 50" x="0px" y="0px"
                                                     style="width: 1em; height: 1em;"><path style="fill:currentColor;"
                                                                                            d="M24.85,10.126c2.018-4.783,6.628-8.125,11.99-8.125c7.223,0,12.425,6.179,13.079,13.543
	c0,0,0.353,1.828-0.424,5.119c-1.058,4.482-3.545,8.464-6.898,11.503L24.85,48L7.402,32.165c-3.353-3.038-5.84-7.021-6.898-11.503
	c-0.777-3.291-0.424-5.119-0.424-5.119C0.734,8.179,5.936,2,13.159,2C18.522,2,22.832,5.343,24.85,10.126z"></path></svg><img></span>&nbsp;Comment
            </a>
            <a href="like.php?type=post&id=<?php echo $ROW['postid'] ?>"
               class="u-btn u-btn-round u-button-style u-gradient u-none u-radius-4 u-text-body-alt-color u-btn-2"><span
                        class="u-icon u-icon-2"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px"
                                                     style="width: 1em; height: 1em;"><path
                                d="M53.333,224C23.936,224,0,247.936,0,277.333V448c0,29.397,23.936,53.333,53.333,53.333h64 c12.011,0,23.061-4.053,32-10.795V224H53.333z"></path><path
                                d="M512,304c0-12.821-5.077-24.768-13.888-33.579c9.963-10.901,15.04-25.515,13.653-40.725    c-2.496-27.115-26.923-48.363-55.637-48.363H324.352c6.528-19.819,16.981-56.149,16.981-85.333c0-46.272-39.317-85.333-64-85.333 c-22.165,0-37.995,12.48-38.677,12.992c-2.517,2.027-3.989,5.099-3.989,8.341v72.341l-61.44,133.099l-2.56,1.301v228.651    C188.032,475.584,210.005,480,224,480h195.819c23.232,0,43.563-15.659,48.341-37.269c2.453-11.115,1.024-22.315-3.861-32.043 c15.765-7.936,26.368-24.171,26.368-42.688c0-7.552-1.728-14.784-5.013-21.333C501.419,338.731,512,322.496,512,304z"></path></svg><img
                            alt=""></span>&nbsp;Like(<?php echo $ROW['likes'] ?>)
            </a>
        </div>
    </div>
</div>
