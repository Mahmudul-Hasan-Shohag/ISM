 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-light sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    
    </div>
    <div class="" style="color:crimson">Sanitary Product Inventory </div>
</a>



<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('home')}}">
    <i class='fas fa-align-justify' style='color:black;font-size:20px'></i>
        <span style="color:black;font-size:16px">Dashboard</span></a>
</li>



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item active">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="false" aria-controls="collapseTwo">
        <i class="fas fa-cart-plus" style="color:black;font-size:20px"></i>
        <span style="color:black;font-size:16px">Product details</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('category.show')}}">Categories</a>
            <a class="collapse-item" href="{{route('product.show')}}">Products</a>
          
        </div>
    </div>
</li>
<li class="nav-item active">
    <a class="nav-link" href="{{route('purchase')}}">
    <i class="fas fa-cart-arrow-down" style="color:black;font-size:20px"></i>
        <span style="color:black;font-size:16px">Purchase Items</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="{{route('order.show')}}">
    <i class="fas fa-hiking" style="color:black;font-size:20px"></i>
        <span style="color:black;font-size:16px">Orders</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="{{route('sales')}}">
    <i class="fas fa-truck" style="color:black;font-size:20px"></i>
        <span style="color:black;font-size:16px">Sales</span></a>
</li>




<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user-friends" style="color:black;font-size:20px"></i>
                    <span style="color:black;font-size:16px">Employee</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="{{route('salary.view')}}">Salary</a>
                        <a class="collapse-item" href="{{route('employeeinfo')}}">info</a>
                    </div>
                </div>
            </li>

<li class="nav-item active">
    <a class="nav-link" href="{{route('customer')}}">
    <i class="fas fa-users" style="color:black;font-size:20px"></i>
        <span style="color:black;font-size:16px">Customers</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="{{route('supplier.show')}}">
    <i class="fas fa-truck-pickup" style="color:black;font-size:20px"></i>
        <span style="color:black;font-size:16px">Suppliers</span></a>
</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-book" style="color:black;font-size:20px"></i>
                    <span style="color:black;font-size:16px">Registrations</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{route('customerregistration')}}">Customer</a>
                        <a class="collapse-item" href="{{route('employeeregistration')}}">Employee</a>
                        
                    </div>
                </div>
            </li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->