<?php
    include("connect.php");
    include("signup1.php");

$first_name = "";
$last_name = "";
$gender = "";
$email = "";


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $signup = new signup();
    $result = $signup->evaluate($_POST);

    if($result != "") {

        echo "The following errors occured";



        echo $result;

    }else{
        header("Location: login.php");
        die;
    }



        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];



}
?>

<!--<html>-->
<!--<head>-->
<!--    <title>Microgram | Signup</title>-->
<!---->
<!--</head>-->
<!--<style>-->
<!--    #bar{-->
<!--        height: 100px;-->
<!--        background-color:rgb(59,89,152);-->
<!--        color: white;-->
<!--        padding: 4px;-->
<!---->
<!--    }-->
<!--    #signup_button-->
<!--    {-->
<!--        background-color:#405d9b;-->
<!--        width: 70px;-->
<!--        text-align: center;-->
<!--        padding: 40px;-->
<!--        border-radius: 40px;-->
<!--        float:right;-->
<!--    }-->
<!--    #bar2{-->
<!--        background-color:white;-->
<!--        width:800px;-->
<!--        margin:auto;-->
<!--        margin-top-50px;-->
<!--        padding:10px;-->
<!--        padding-top:50px;-->
<!--        text-align-center;-->
<!--        font-weight: bold;-->
<!--    }-->
<!--    #text{-->
<!--        height: 40px;-->
<!--        width:800px;-->
<!--        border-radius: 4px;-->
<!--        border: solid 1px #ccc;-->
<!--        padding: 4px;-->
<!--        font-size: 14px;-->
<!--    }-->
<!--    #button{-->
<!--        width:300px;-->
<!--        height: 40px;-->
<!--        boder-radius: 4px;-->
<!---->
<!--    }-->
<!--</style>-->
<!--</html>-->
<!---->



    <html lang="english">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="home.css">
        <title>Microgram | Register</title>
    </head>


		<style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}

      .background{
          width: 430px;
          height: 520px;
          position: absolute;
          transform: translate(-50%,-50%);
          left: 50%;
          top: 50%;
      }
      .background .shape{
          height: 200px;
          width: 200px;
          position: absolute;
          border-radius: 60%;
      }
      .shape:first-child{
          background: linear-gradient(
                  #1845ad,
                  #23a2f6
          );
          left: -80px;
          top: -80px;
      }
      .shape:last-child{
          background: linear-gradient(
                  to right,
                  #ff512f,
                  #f09819
          );
          right: -80px;
          bottom: -150px;
      }

      form{
    height: 800px;
    width: 500px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;

}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 1px;
    outline: none;
    border: none;
    margin-top: 75px;
}
form h3{
    font-size: 25px;
    font-weight: 300;
    line-height: 100px;
    text-align: center;
}

label{
    display: block;
    margin-top: 10px;
    font-size: 25px;
    font-weight: 300;
    font-family: Footlight MT Light, serif;

}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 10px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 25px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 3px;
    cursor: pointer;

}

      .social div{
    width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
    background: rgba(255, 255, 255, 0.27);
    color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}

}
.social i{
  margin-right: 10px;
}
        </style>

<body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div>
			<div style="font-size:60px;height:70px;color:whitesmoke;padding:5px;
      font-family: Footlight MT Light, serif;">Microgram </div>




    <form method="post" action=" ">

        <h3 style="font-weight: bold;font-family:'Bookman Old Style',serif;font-size: 40px;">Registration Form</h3>

        <label>First Name</label>

        <label>
            <input value="<?php echo $first_name ?>" name="first_name" type="text" placeholder="First Name" >
        </label>


        <label>Last Name</label>

        <label>
            <input value="<?php echo $last_name ?>" name="last_name" type="text" placeholder="Last Name">
        </label>


        <label for="password">Password</label>
        <label for="Password"></label><label>
            <input  name="password" type="password" placeholder="Password" >
        </label>

        <label for="Gender">Gender</label>
        <label>
            <input value="<?php echo $gender ?>"  name="gender" type="text" placeholder="Gender" >
        </label>

        <label for="Email">Email</label>
        <label>
            <input  value="<?php echo $email ?>"  name="email" type="text" placeholder="Email">
        </label>

        <input type="Submit"  class="button" style="font-family: Bookman Old Style,serif;background-color: whitesmoke;color: black;font-weight: bold;font-size: 20px;" value="Register">






    </form>


        <a href="login.php" type="button" class="button"  style="margin-left:10px;font-family: Bookman Old Style,serif;background-color: whitesmoke;text-align:center; color: black;font-weight: bold;font-size: 20px; width: 50px">Login</a>


</body>
</html>


<!--<html lang="english">-->
<!--<head>-->
<!--    <title>Microgram</title>-->
<!---->
<!--</head>-->
<!--<style>-->
<!---->
<!---->
<!---->
<!--#bar2{ background-color: hotpink;width:700px;height:600px;-->
<!--    margin: 100px auto auto;-->
<!--    padding: 10px;-->
<!--    text-align: center;-->
<!--    font-size: 25px;}-->
<!---->
<!--#text{-->
<!--height: 40px;-->
<!--width: 300px;-->
<!--border-radius:4px;-->
<!--border: solid 1px black;-->
<!--padding: 4px;-->
<!--font-size: 15px;-->
<!--}-->
<!--#button{-->
<!--height: 40px;-->
<!--width: 300px;-->
<!--border-radius: 4px;-->
<!--padding: 4px;-->
<!--background-color:green;-->
<!--font-size: 22px;-->
<!--border: solid 1px black;-->
<!--    font-family: Eras Bold ITC, serif;-->
<!--font-weight: bold;-->
<!---->
<!--}-->
<!--		 </style>-->
<!--	<body style="font-family:Bookman Old Style,sans-serif;background-color:lightgrey;">-->
<!---->
<!--		<div id="bar">-->
<!--			<div style="font-size:40px;">Microgram </div>-->
<!--			<div id="signup_button">Login</div>-->
<!---->
<!--		</div>-->
<!--		<div id="bar2">-->
<!--			Get Registered to Microgram!-->
<!--			<br> <label for="text"></label><input type="text" placeholder="First Name" id="text">-->
<!--            <br> <input type="text" placeholder="Last Name" id="text">-->
<!---->
<!--			<span style="font-weight: normal;">Gender:</span><br><select id="text">-->
<!--				<option>Female</option>-->
<!--				<option>Male</option>-->
<!--			</select>-->
<!--			<br><input type="text"  placeholder="Email" id="text">-->
<!--			<br><input type="password" placeholder="password" id="text">-->
<!---->
<!--			<br><input type="password" placeholder="Retype password " id="text">-->
<!--			>-->
<!--			<br><input type="submit" id="button" value="REGISTER">-->
<!--		</div>-->
<!--	</body>-->
