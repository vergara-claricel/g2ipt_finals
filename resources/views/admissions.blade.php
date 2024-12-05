<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions</title>
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

        #logoheader{
            height: 151px;
            width: 154px;
            opacity :5%;
            position: relative;
            left: 100px;
            bottom: 90px;
        }

        .admissionheader{
            margin-left: 150px;
            margin-top: 50px;
            color: #7cd902;
            font-size: 12pt;
        }

        .pcimg{
            height: 180px;
            width: 290px;
            border-radius: 6px;
        }

        .admissionoptions{
            display: flex;
            justify-content: center;
            gap: 100px;
            margin-top: -90px;
            padding-bottom: 4rem;
        }

        .description{
            background-color: white;
            margin-top: -10px;
            padding-top: 20px;
            padding-left: 30px;
            
        }

        .postcard{
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            border: none;
            background-color: white;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.3);;
        }

        .postcard h3{
            color:#006400;
            font-size: 18pt;
            padding-top: 20px;
            padding-left: 50px;
        }

        .postcard p{
            padding-top: 20px;
            padding-left: 50px;
            padding-bottom: 20px;
        }
        

        .postcard:hover{
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);;
            
        }

        .pcimg{
            border-radius: 0;
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

    

    <div class="admissionheader">
        <h1>ADMISSION</h1>
        <p>Subtitle</p>
    </div>
    <img src="../img/logo_plain.png" id="logoheader" alt="">

    <div class="admissionoptions">
        <!-- <div class="postcard">
            <img class="pcimg" src="../img/yo.jpg" alt="">
            <div class="description">
            <a href=""><h3>New Students</h3></a>
                <p>Dhehhe</p>
            </div>
        </div>

        <div class="postcard">
            <img class="pcimg" src="../img/ayo.jpg" alt="">
            <div class="description">
                <a href=""><h3>Old Students</h3></a>
                <p>Dhehhe</p>
            </div>
        </div> -->

        <button class="postcard">
            <img class="pcimg" src="../img/yo.jpg" alt="">
            <h3>New Students</h3>
            <p>Dheheh</p>
        </button>

        <button class="postcard">
            <img class="pcimg" src="../img/ayo.jpg" alt="">
            <h3>Old Students</h3>
            <p>Dheheh</p>
        </button>
    </div>
</body>
</html>