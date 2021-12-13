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

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


      <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
      </script>

    
    <style>
        .gol-img
        {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }

        .card-img
        {
            width: 300px;
            display: block;
            margin-left: auto;
            margin-right: auto;

        }

        .wht-btn{
            border: 1px solid;
            border-color: grey;
            background: white;
        }

        .wht-btn:hover
        {
            background: #3333ff;
            color: white;
            
        }
    </style>

    <!-- <script src="./css/home.css" defer> </script> -->

</head>
<body>

    <div class="container">
        <div class="row pt-4">
            <div class="col-lg-4">
                <div class="card">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> --}} -->
                    <div class="card-header text-center"><h5>User Details</h5></div>
                    <div class="card-body text-center">
                        <img  class="card-img-top gol-img" src="https://icon-library.com/images/default-profile-icon/default-profile-icon-1.jpg" alt="Avatar"><br>
                        <a href="#"><button type="button" class="mt-2 btn btn-light btn-sm">Edit Profile</button></a>
                      <h4 class="pt-2">Mashrur Jamil Rafin</h4>
                      <h5>Web Developer</h5>

                      <div class="p-2">
                        <a href=""><button type="button" class="btn wht-btn btn-sm">Start New Project</button></a>
                        <a href=""><button type="button" class="btn wht-btn btn-sm">Set Weekly Target</button></a>
                        <a href=""><button type="button" class="btn wht-btn btn-sm mt-1">Daily Progress</button></a>
                        </div>
                    </div>
                </div> 

                <div class="card mt-3">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> --}} -->
                    <div class="card-header text-center"><h5>Achievements 🏆</h5></div>
                    <div class="card-body">
                        <img title="Achievements Badges" class="card-img" src="trophies.jpg" alt="">
                        <!-- <h6>• Sample Tasks lorem ipsum </h6>
                            <h6>• Random Tasks lorem ipsum </h6>
                            <h6>• Sample Tasks lorem ipsum </h6> -->
                    </div>
                </div>       
        </div>

                <div class="col-lg-6">
                    <div class="card">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> --}} -->
                        <div class="card-header text-center"><h5>Today's Tasks</h5></div>
                        <div class="card-body">
                            <h6 class="text-danger">• Sample Tasks lorem ipsum </h6>
                            <h6 class="text-danger">• Random Tasks lorem ipsum </h6>
                            <h6 class="text-success">• Sample Tasks lorem ipsum </h6>

                            <div class="d-flex flex-row-reverse">
                               <small>
                                   <span class="text-danger">🟥 Incomplete</span>&nbsp;
                                   <span class="text-success">🟩 Complete</span>
                               </small>
                            </div>
                        </div>
                    </div>
                   
                   <div class="pt-4">   
                    <h5>Projects</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <a href=""><h6 class="text-dark">Self Activity Tracker</h6></a>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore veniam beatae quod delectus voluptates corrupti</p>
                                        <small><p class="text-muted">5 days Ago</p></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <a href=""><h6 class="text-dark">ToDo App</h6></a>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore veniam beatae quod delectus voluptates corrupti</p>
                                        <small><p class="text-muted">5 days Ago</p></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-2">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <a href=""><h6 class="text-dark">TicTacToe</h6></a>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore veniam beatae quod delectus voluptates corrupti</p>
                                        <small><p class="text-muted">5 days Ago</p></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <a href=""><h6 class="text-dark">Medical App</h6></a>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore veniam beatae quod delectus voluptates corrupti</p>
                                        <small><p class="text-muted">5 days Ago</p></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="card mt-5 mb-5">
                        <div class="card-header text-center">
                          <h5><a style="text-decoration:none;" class="card-link text-dark" data-toggle="collapse" href="#collapseOne">
                            Incomplete Pending Tasks</a></h5> 
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="">
                          <div class="card-body">
                            <h6 class="text-danger">• Sample Tasks lorem ipsum <small>1 day Ago</small></h6>
                            <h6 class="text-danger">• Random Tasks lorem ipsum <small>3 days Ago</small></h6>
                            <h6 class="text-danger">• Sample Tasks lorem ipsum <small>5 days Ago</small></h6>
                          </div>
                        </div>
                      </div>

                       
                </div>
        
        </div>
        








    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>