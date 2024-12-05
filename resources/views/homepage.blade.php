<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPCST Home</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            /* border: 1px solid red; */
        }

        body{
            color: #006400;
            
        }

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

        .button{
            display: flex;
            align-items: center;
        }

        .enrollbtn{
            text-align: center;
            font-size: 16pt;
            border-radius: 6px;
            color: white;
            background-color: #7cd902;
            padding: 20px 30px;
        }



        .login{
            background-color: #69b800;
            color: white;
            padding: 15px 25px;
            border-radius: 20px;
            border: none;
            text-align: center;
        }

        .title{
            background-image:url('../iptfinals/img/contact-page-background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.3); 
            background-blend-mode: overlay;
            height: 500px;
            width: 1263px;
            color: white;
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
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

        .logotitle{
            height: 151px;
            width: 152px;
        }

        .title h3{
            font-size: 30pt;
            text-align: center;
            margin-left: 200px;
            margin-right: 200px;
        }

        .quote{
            background-color: #7cd902;
            padding-top: 10px;
            padding-bottom: 10px;
            color: white;
            text-align: center;
        }

        .parentenroll{
            display: flex;
            flex-direction: row;
            align-items: center;
        }

    .enroll {
        background-image: url('../img/home.jpg'); /* Specify the image */
        width: 1000px;
        height: 550px; 
        background-repeat: no-repeat;
        background-size: cover;
        clip-path: circle(50% at 50% 50%);
        margin-left: -250px;
}

.footer{
    background-color: black;
    color: white;
    text-align: center;
    padding: 5px 5px;
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

    <div class="title">
        <img src="../img/logo_plain.png" class="logotitle"alt="">
        <h3>EASTWOODS PROFESSIONAL COLLEGE OF SCIENCE AND TECHNOLOGY</h3>
    </div>

    <div class="quote">
        <p>"Empowering Futures, Building Success: Preparing Students for Lifelong Career Achievement"</p>
    </div>

    
    <div class="parentenroll">
        <div class="enroll">
        </div>
        <div class="enrolltxt">
            <h1>To all aspiring students!</h1>
            <h3>EPCST is now accepting enrollees. Join us and become a champion!</h3>
            <div class="button">
                <button class="enrollbtn">ENROLL NOW</button>
            </div>
        </div>
    </div>


    <div class="footer">
        <p>Copyright | EPCST 2024</p>
    </div>
    
   

    
    
</body>
</html>