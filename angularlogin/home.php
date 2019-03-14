<div class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" style="background-color: black;" role="navigation">


    <div class="container">
        <div class="navbar-header">
<img src="img/softaox_logo.png" width="150px" >
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
             <li class="nav-item active">
        <a class="nav-link" href="#" style="color:#fd7e14;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:#dee2e6;">Experties</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:#dee2e6;">Consulting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:#dee2e6;">Solution</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color:#dee2e6;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Story</a>
          <a class="dropdown-item" href="#">Culture</a>
          <a class="dropdown-item" href="#">Corporate Information</a>
          <a class="dropdown-item" href="#">breakthrough77</a>
      </li>
                <li><a href="" ng-click="logout();" target="_blank">Logout</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

 <h1>Welcome, <span style="color:#f5a521;">{{user_name}}.</span></h1>
 <br/>
 <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="img/user.png" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h5><span class="glyphicon glyphicon-user"></span>&nbsp;User Name: {{user_name}}</h5>
                        <h5><span class="glyphicon glyphicon-user"></span>&nbsp;User ID: {{user_id}}</h5>
                        <h5><span class="glyphicon glyphicon-envelope"></span>&nbsp;Email ID: {{user_email}}</h5>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" ng-click="logout();" class="btn btn-primary">Logout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    
<div class="navbar navbar-default navbar-fixed-bottom">
    <footer style="background-color:black; color:#dee2e6;" class="page-footer font-small blue pt-4">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
      
        <div class="col-md-12 mt-md-0 mt-3">
      
          <h5 class="text-uppercase">Footer Content</h5>
          <p class="text-center">Footer Area </p>
        </div>
      </div>
    </div>
    
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
    </div>
    

  </footer>
</div>
    
    
    
    
    
    
    
