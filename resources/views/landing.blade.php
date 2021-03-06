@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
    
    <style>

        .login-btn{
            color: #002db3; 
            background:white;
            border: #4064cfb0 1px solid;
           
        }

        .login-btn:hover{
            background: #002db3; 
            color:white;
        }

    </style>

</head>
<body>

    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-6">
                <div class="text-center" style="padding-top: 10%">
                    <img src="image/SAT-w1.png" width="35%" class="d-inline-block align-top pt-2" alt="">
                <h1><span  class="fw-bold" style="color:#002db3">Track</span> your work<br>
                and be <span  class="fw-bold" style="color:#002db3">productive</span></h1>
                <p class="pt-1 text-dark text-left">Self Activity Tracker helps you to plan the activites you want to do and assists to keep track of your tasks. Collaborate with your co-workers and do productive things together!
                </p>
                <a href="{{url('/Login')}}"><button class="btn btn-lg login-btn">Login</button></a>
                <p class="pt-3 text-dark">New in Accelerating Intelligence?&nbsp;&nbsp;<a href="{{url('Signup')}}" style="text-decoration: none; color:#002db3">Signup</a></p>
                </div>    
                   
            </div>
            <div class="col-lg-6 pt-5">
                <img src="image/landing1.svg" style="width:100%; display: block; margin-left: auto; margin-right: auto;" alt="">
            </div>
        </div>








    </div>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>