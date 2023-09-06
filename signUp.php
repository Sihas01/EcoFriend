<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco-Friend</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="./resorses/planet-earth.png">
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="SignIn-banner"></div>

            <div class="cen">
                <div class="signIn col-lg-3 col-sm-3 col-md-6 shadow-sm">

                    <p class="text-center ">Sign Up</p>

                    <div class="icon-box">
                        <div class="ficon border">
                            <img src="./resorses/facebook.png" alt="">
                        </div>
                        <div class="sicon border">
                            <img src="./resorses/social.png" alt="">
                        </div>
                    </div>

                    <p class="mt-3">Or</p>

                  
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" id="fname" class="form-control" aria-label="Sizing example input" placeholder="first name">
                      </div>

                      <div class="input-group input-group-sm mb-3">
                        <input type="text" id="lname" class="form-control" aria-label="Sizing example input" placeholder="last name">
                      </div>


                      <div class="input-group input-group-sm mb-3">
                        <input type="email" id="email" class="form-control" aria-label="Sizing example input" placeholder="email">
                      </div>
                      
                      <div class="input-group input-group-sm mb-3">
                        <input type="passsword" id="password" class="form-control" aria-label="Sizing example input" placeholder="password">
                      </div>


                      

                      <button class="sign-btn mt-4" onclick="signUp();">Sign Up</button>

                      <p class="mt-3">Already Have a account? <a href="./signIn.php">Sign In</a></p>



                </div>
            </div>
            
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>