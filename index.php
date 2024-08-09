<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
     <style>
        *{
            margin: 0;
            padding: 0;
        }

        .home{
            background-image: url('/uploaded_img/Wills.jpg');
            height: 100vh; 
            display:flex; 
          align-items:center;
          justify-content: center;
          background: linear-gradient(to top,
          rgba(255, 255, 255, 0.8),
          rgba(255, 0, 0, 0.6),
          rgba(255, 255, 255, 0.2)
          ),
          url('./images/default-avatar.png') center center;
          background-repeat: no-repeat;
          flex-direction: column;
          background-size: cover;
          
        }

        .home h2{
            color: aliceblue;
            font-weight: 800;
            font-family: Arial, Helvetica, sans-serif;
            text-shadow: 2px 5px 50px black;
        }

        .home p{
            font-size: 20px;
            background-color: black;
            color: white;
            padding: 10px;
            border-radius: 7px;
            margin: 10px;
        }

        .home a{
            color: wheat;
        }

       
     </style>
</head>
<body>
    
    
    <div class="home">
        <h2>Your are welcome to our Server.</h2>
        <p >don't have an account? <a href="register.php">regiser now</a></p>

        <div class="cool">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima pariatur culpa numquam quis similique quam inventore aliquam voluptatem unde assumenda.</p>
        </div>
    </div>
    
</body>
</html>