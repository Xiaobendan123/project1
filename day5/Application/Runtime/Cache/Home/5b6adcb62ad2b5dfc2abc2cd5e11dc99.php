<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="UTF-8">-->
    <!--<title>登录</title>-->

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>登录</title>
    <style>
        .text-red{color: red;}
        h1{

            font-size: 2.6rem;
        }
        p{
            font-size: 1.4rem;
            front-family: arial;
            margin:20px;
            padding:10px;
        }
        form{
            display: table;
            margin:0 auto;
            position: relative;
            top: 10px;
        }
        button{
            background-color: #008CBA;
            font-size:16px;

        }


    </style>
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/day4/Public/js/main.js"></script>
    <script>
        function checklogin(){
            var email = document.getElementById("email").value;
            var pattern =  /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
            var password = document.getElementById("password").value;

            if(!pattern.test(email)&&password.length<=6){

                var obj1= document.getElementById("div1").innerHTML="邮箱和密码格式不正确！";
                return false;
            }


            else if(!pattern.test(email) || !email||email == ""){

                var obj1= document.getElementById("div1").innerHTML="邮箱格式不正确！";

                return false;
            }


            else if(password.length<=6||!password|| password==""){
                var obj1= document.getElementById("div1").innerHTML="密码格式不正确！";
                return false;
            }


            else return true;

        }
    </script>
</head>
<body>
<!--用户ID:<?php echo ($user['id']); ?><br>-->
<!--用户邮箱:<?php echo ($user['email']); ?><br>-->
<!--用户密码:<?php echo ($user['password']); ?><br>-->

<h1>Log in</h1>
    <form id= "login-form" action="" method="post" onsubmit="">
    <p>Email: <input type="text" placeholder="Email" id="email" name="email"/></p>
    <p>Password:  <input type="Password" placeholder="Password" id="password" name="password"/></p>
    <button><input type="submit" value="Sign in"/></button>
    <div class="text-red" id="div1"></div>

    </form>

</body>
</html>