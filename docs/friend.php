<div id="friendbar">


<div id="friends">
    <?php
    $image =  "usermale.jpg";
    if($FRIEND_ROW['gender'] == "Female")
    {
        $image = "userfemale.jpg";

    }
    if(file_exists($FRIEND_ROW['profile_image']))
    {

        $image = $image_class->get_thumb_profile($FRIEND_ROW['profile_image']);
    }
    ?>
    <a href="profile1.php?id=<?php echo $FRIEND_ROW['userid']; ?>">
    <img id="friends_img" src="<?php echo $image ?>" alt="THat is a girl">
    <br>
        ❤<?php echo $FRIEND_ROW['first_name'] . " " . $FRIEND_ROW['last_name']?></a>

</div>
</div>



























<!--<div class="u-expanded-width u-list u-list-1">-->
<!--    <div class="u-repeater u-repeater-1">-->
<!--        <div class="u-container-style u-hover-feature u-list-item u-repeater-item u-list-item-1">-->
<!--            <div class="u-container-layout u-similar-container u-container-layout-1">-->
<!---->
<!--    --><?php
//    $image =  "usermale.jpg";
//
//    if($FRIEND_ROW['gender'] == "Female")
//    {
//        $image = "userfemale.jpg";
//
//    }
//    ?>
<!---->

<!--            <img class="u-image u-image-round u-radius-10 u-image-1" src="--><?php //echo $image?><!--"-->
<!--                 data-image-width="266" data-image-height="190">-->
<!--            <h3 class="u-text u-text-default u-text-1"><span class="u-icon u-icon-2"><svg-->
<!--                        class="u-svg-content" viewBox="0 0 50 50" x="0px" y="0px"-->
<!--                        style="width: 1em; height: 1em;"><path style="fill:#C03A2B;" d="M24.85,10.126c2.018-4.783,6.628-8.125,11.99-8.125c7.223,0,12.425,6.179,13.079,13.543-->
<!--	c0,0,0.353,1.828-0.424,5.119c-1.058,4.482-3.545,8.464-6.898,11.503L24.85,48L7.402,32.165c-3.353-3.038-5.84-7.021-6.898-11.503-->
<!--	c-0.777-3.291-0.424-5.119-0.424-5.119C0.734,8.179,5.936,2,13.159,2C18.522,2,22.832,5.343,24.85,10.126z"></path><path-->
<!--                            style="fill:#ED7161;" d="M6,18.078c-0.553,0-1-0.447-1-1c0-5.514,4.486-10,10-10c0.553,0,1,0.447,1,1s-0.447,1-1,1-->
<!--	c-4.411,0-8,3.589-8,8C7,17.631,6.553,18.078,6,18.078z"></path></svg><img></span>&nbsp;-->
<!--                <br>-->
<!--                --><?php //echo $FRIEND_ROW['first_name'] . " " . $FRIEND_ROW['last_name']?>
<!--            </h3>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--    <div class="u-container-style u-hover-feature u-list-item u-repeater-item u-list-item-2">-->
<!--        <div class="u-container-layout u-similar-container u-container-layout-2">-->
<!--            <img class="u-image u-image-round u-radius-10 u-image-2" src="images/Suniyo.jpg" alt=""-->
<!--                 data-image-width="259" data-image-height="194">-->
<!--            <h3 class="u-text u-text-default u-text-2">Suniyo</h3>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="u-container-style u-hover-feature u-list-item u-repeater-item u-list-item-3">-->
<!--        <div class="u-container-layout u-similar-container u-container-layout-3">-->
<!--            <img class="u-image u-image-round u-radius-10 u-image-3" src="images/Doreamon.jpg" alt=""-->
<!--                 data-image-width="512" data-image-height="512">-->
<!--            <h3 class="u-text u-text-default u-text-3">Doreamon</h3>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="u-container-style u-hover-feature u-list-item u-repeater-item u-list-item-4">-->
<!--        <div class="u-container-layout u-similar-container u-container-layout-4">-->
<!--            <img class="u-image u-image-round u-radius-10 u-image-4" src="images/Jiyan.jpg" alt=""-->
<!--                 data-image-width="225" data-image-height="225">-->
<!--            <h3 class="u-text u-text-default u-text-4">Jiyan</h3>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->