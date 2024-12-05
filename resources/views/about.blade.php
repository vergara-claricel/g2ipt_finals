<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About EPCST</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            /* border: 1px solid red; */
        }

        body{
            color: #006400;
            
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

        .line{
            background-color: #7cd902;
            height: 1px;
        }

        .mission{
            background-color: #69b800;
            clip-path: polygon(0% 0%, 65% 0%, 55% 20%, 50% 24%, 45% 55%, 40% 80%, 30% 100%, 0% 100%);
            height: 350px;
            color: white;
            padding-left: 5rem;
            padding-top: 3rem;
        }

        .misvis{
            position: relative;
            
        }

        .vision{
            position:absolute;
            top: 50px;
            left: 870px;
          
        }

        .history{
            padding-left: 5rem;
            padding-right:5rem;
            padding-top: 3rem;
            padding-bottom: 3rem;
            
        }

        .historyarea{
            display:flex;
            padding-top: 1rem;
        }

        .historyarea img{
            height:100px;
            width:100px;
            float: right;
        }

        .philoarea img{
            height:200px;
            width: 200px;
        }

        .philoarea{
            display: flex;
            padding-top: 1rem;
        }

        .philo{
            padding-top: 3rem;
            padding-bottom: 3rem;
            padding-left: 5rem;
            padding-right: 5rem;
        }

        .philotitle{
            text-align: center;
        }

        .facibanner{
            background-color: #69b800;
            color: white;
            height: 50px;
            text-align: center;
            padding-top: 20px;
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

        <div class="history">
            <div class="historytitle">
                <h1>OUR HISTORY</h1>
            </div>
            <div class="line">
            </div>
            <div class="historyarea">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet cum reiciendis repellat non eum vero iure placeat aliquid! Veritatis vitae earum, nulla quo ducimus nisi accusamus quaerat porro rerum repudiandae.
                Commodi tempore quam laudantium alias sapiente, ut dolorem ducimus voluptas odit, ipsum totam rerum! Ducimus repudiandae delectus molestiae quae commodi, officia nesciunt consectetur consequuntur, quas saepe doloremque, similique aut facilis?
                Ipsa asperiores sunt deserunt voluptatum atque. Cumque, obcaecati. Cupiditate accusantium quis tempora nobis laboriosam! A veritatis quasi, reiciendis porro, impedit saepe accusantium quibusdam voluptatum neque debitis pariatur totam itaque ducimus?</p>
                <img src="../img/ce34cb1a-cdf4-4d1c-afde-707578b3538c.jpg" alt="">
            </div>
        </div>

        <div class="misvis">
            <div class="mission">
                <h1 class="mistitle">OUR MISSION</h1>
                <p>mission here</p>
            </div>
            <div class="vision">
                <h1 class="vistitle">OUR VISION</h1>
                <p>vision here</p>
            </div>
        </div>

        <div class="philo">
            <h1 class="philotitle">OUR PHILOSOPHY</h1>
            <div class="philoarea">
                <img src="../img/5776927.png" alt="">
                <p>philo here</p>
            </div>
        </div>
        
        <div class="facilities">
            <div class="facibanner">
                <h2>CAMPUS FACILITIES</h2>
            </div>

            <div class="faciarea">
                
            </div>
        </div>
    
</body>
</html>