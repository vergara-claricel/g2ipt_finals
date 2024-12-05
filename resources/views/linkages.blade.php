<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkages</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            /* border: 1px solid red; */
        }

        body{
            color: #006400;
            background-color: #f5f5f5;
        }

        /* header start */
        .header{
            background-color: #f5f5f5;
            display:flex;
            justify-content: space-between;
        }


        .logo{
            height: 58px;
            width: 62px;
            margin: 7px;
            margin-left: 26px;
            padding-top: 5px;
            padding-bottom: 5px;
            
        }

        .logoftname{
            display: flex;
        }

        .name{
            display:flex;
            flex-direction: column;
            margin-top:20px;
            padding-top: 6px;
            font-weight: bold;
        }

        .nav{
            display: flex;
            gap: .5rem;
            margin-right: 26px;
        }

        .nav a{
            text-decoration: none;
            color: #006400;
            margin-top: 10px;
            padding-top: 1.5rem;
            padding-left: 18px;
            padding-right: 18px;
            font-weight: bold;
        }

        .button{
            display: flex;
            align-items: center;
        }

        .login{
            background-color: #69b800;
            color: white;
            padding: 15px 25px;
            border-radius: 20px;
            border: none;
            text-align: center;
        }

         /* header end */

         .banner{
            background-image:url('../img/ce34cb1a-cdf4-4d1c-afde-707578b3538c.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: overlay;
            opacity: 100%;
            height: 50px;
            background-position: 45% 50%;
        }

        .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(105, 184, 0, .9);
            pointer-events: none;
            margin-top:82px;
            height:50px;
        }

    </style>
</head>

<body>
<div class="header">
            <div class="logoftname">
                <img src="../img/logo_plain.png" class="logo" alt="">
                
                <div class="name">
                <p>EASTWOODS PROFESSIONAL COLLEGE</p>
                <p> Of Science and Technology</p>
                </div>
            </div>
            <div class="nav">
                <a href="">Home</a>
                <a href="">About EPCST</a>
                <a href="">Programs</a>
                <a href="">Admissions</a>
                <a href="">Linkages</a>
                <a href="">Contact Us</a>
                <div class="button">
                <button class="login">LOGIN</button>
                </div>
            </div>
        </div>

        <div class="banner">
            
        </div>
</body>
</html>