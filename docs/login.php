<html>
<head>
	<title>Microsoft_Book| Login</title>
	</head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
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
    bottom: -90px;
}
form{
    height: 700px;
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
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 25px;
    font-weight: 500;
    font-family: FootLight MT Light;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 3px;
    cursor: pointer;
    font-family: Bookman Old Style;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 127px;
}
.social i{
  margin-right: 10px;
}
#bar{height:70px;background-color:normal;color:whitesmoke;padding:5px; font-family: Footlight MT Light;}

			

    </style>
</head>
<body>
     
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div id="bar"> 
			<div style="font-size:60px;">Microgram

			 </div></div>
			
				
			
		</div>
    <form>
        <h3 style="font-weight: bold;font-family: Bookman Old Style;font-size: 40px;">Login to Microgram!</h3>

        <label for="Email">Email</label>
        <input type="text" placeholder="Email" id="Email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="Password">

         <button>Register</button><div class="social"></div>

    
        <button>Log In</button>
        <div class="social">
          <a href="https://accounts.google.com/signin/v2/identifier?ltmpl=meet&continue=https%3A%2F%2Fmeet.google.com%2Fnew%3Fhs%3D195&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><div class="go"><i class="fab fa-google"></i>  Google</div></a>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
        
    </form>
</body>
</html>
