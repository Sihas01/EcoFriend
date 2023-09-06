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

                    <p class="text-center ">Sign In</p>

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
                        <input type="text" class="form-control" aria-label="Sizing example input" placeholder="Email" id="email">
                      </div>
                      
                      <div class="input-group input-group-sm mb-3">
                        <input type="password" class="form-control" aria-label="Sizing example input" placeholder="Password" id="password">
                      </div>


                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Remember Me
                        </label>
                      </div>

                      <button class="sign-btn mt-4" onclick="signIn();">Sign In</button>

                      <p class="mt-3">New to here? <a href="./signUp.php">Create an account</a></p>



                </div>
            </div>
            
        </div>
    </div>


    <script src="./js/script.js"></script>
</body>
</html>