 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    
    </div>
    <div class="sidebar-brand-text mx-3">Agro Farm Inventory </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('home')}}">
    <i class='fas fa-align-justify' style='font-size:24px'></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="false" aria-controls="collapseTwo">
        <i class="fa fa-shopping-basket" style="font-size:24px"></i>
        <span>Product details</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('category.show')}}">Categories</a>
            <a class="collapse-item" href="{{route('product.show')}}">Products</a>
            <a class="collapse-item" href="{{route('stock.show')}}">Stock</a>
        </div>
    </div>
</li>
<li class="nav-item active">
    <a class="nav-link" href="{{route('purchase')}}">
    <i class="fa fa-shopping-cart" style="font-size:24px"></i>
        <span>Purchase Items</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="">
    <i class="fa fa-shopping-cart" style="font-size:24px"></i>
        <span>Orders</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="index.html">
    <i class="fa fa-briefcase" style="font-size:24px"></i>
        <span>Sales</span></a>
</li>


<li class="nav-item active">
    <a class="nav-link" href="{{route('cashmemo.form')}}">
    <i class="fa fa-briefcase" style="font-size:24px"></i>
        <span>Cashmemo</span></a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Employee</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="{{route('attendance.submit')}}">attendnce</a>
                        <a class="collapse-item" href="{{route('employeeinfo')}}">info</a>
                    </div>
                </div>
            </li>

<li class="nav-item active">
    <a class="nav-link" href="{{route('customer')}}">
    <i class="fa fa-briefcase" style="font-size:24px"></i>
        <span>Customers</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="">
    <i class="fa fa-briefcase" style="font-size:24px"></i>
        <span>Report Genertion</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Registrations</span>
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