<?php

class Post
{
    private $error = "";

    public function create_post($userid, $data, $files)
    {
        if (!empty($data['post'])   || !empty($files['file']['name']))

        {

            $myimage = "";
            $has_image = 0;
            if(isset($data['is_profile_image']) ||  isset($data['is_cover_image']))
            {
                $myimage =$files;
                $has_image = 1;

            }else {


                if (!empty($files['file']['name'])) {
                    $folder = "Uploads/" . $userid . "/";
                    //create folder
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }


                    $image_class = new Image();

                   $myimage = $folder . $image_class->generate_filename(15) . ".jpg";
                    move_uploaded_file($_FILES['file']['tmp_name'], $myimage);

                    $image_class->resize_image($myimage, $myimage, 1500, 1500);


                    $has_image = 1;
                }
            }



            $post = addslashes($data['post']);
            $postid = $this->create_postid();

            $query = "insert into posts (userid,postid,post,image,has_image) values ('$userid','$postid','$post','$myimage','$has_image')";


                $DB = new Database();
            $DB->save($query);

        } else {
            $this->error .= "Please type something to post!<br>";
        }


        return $this->error;

    }

    public function get_posts($id)
    {
        $query = "select * from posts where userid = '$id' order by id desc limit 10";


        $DB = new Database();
        $result = $DB->read($query);

        if($result){
            return $result;
        }else{
            return false;
    }
    }

    public function like_post($id,$type,$microgram_userid)
    {
        if($type == "post") {
            $DB =  new Database();
            //increment the posts table
            $sql = "update posts set likes = likes + 1 where postid = '$id' limit 1 ";
            $DB->save($sql);

            //save the likes details

            $sql = "select likes from likes where type='post' && contentid = '$id' limit 1 ";
            $result = $DB->read($sql);
            if(is_array($result))
            {
                $likes = json_decode($result[0]['likes'],true);

               $user_ids =  array_column($likes,"userid");

               if(!in_array($microgram_userid, $user_ids))
               {
                   $arr["userid"] = $microgram_userid;
                   $arr["date"] = date("Y-m-d H:i:s");
                  $likes[] = $arr;
                   $likes_string = json_encode($likes);


                   $sql = "update likes set likes = '$likes_string' where type='post' && contentid = '$id' limit 1";
                   $DB->save($sql);
               }


            }else{
                $arr["userid"] = $microgram_userid;
                $arr["date"] = date("Y-m-d H:i:s");
                $arr2[] = $arr;
                $likes = json_encode($arr2);


                $sql = "insert into likes (type,contentid,likes) values ('$type','$id','$likes')";
                $DB->save($sql);
            }

        }

}

    private function create_postid()
    {
        $length = rand(4, 10);
        $number = "";
        for ($i = 0; $i < $length; $i++) {
            $new_rand = rand(0, 9);
            $number = $number . $new_rand;
        }
        return $number;
    }
}