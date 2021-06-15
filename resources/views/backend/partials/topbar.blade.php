 <!-- Topbar -->
 <nav  class="navbar navbar-light bg-secondary  topbar mb-12 ">

 



<h5 style="color:yellow;"><b> Date: {{date("l, jS \of  F, Y")}}</b></h5>

<hr>
<h5 style="color:yellow;"><b> Time: {{date(" h:i:s A")}}</b></h5>
<ul class="navbar-nav ml-auto">

    

   
        

   

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="btn btn-primary" href="{{route('admin.logout')}}" 
        id="userDropdown" role="button" 
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Logout
        </a>
       
           

            
           
            
    
</nav>
<!-- End of Topbar -->