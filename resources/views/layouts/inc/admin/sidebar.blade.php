<div class="page-sidebar">
    <a class="logo-box" href="index.html">
        <img src="{{ asset('admin/img/logos/logo-footer.png') }}" alt="...">
        <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
        <i class="icon-close" id="sidebar-toggle-button-close"></i>
    </a>
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <ul class="accordion-menu">
                <li>
                    <a href="{{ route('dashboard') }}"> <i class="menu-icon fas fa-dashboard"></i><span>Dashboard</span> </a>
                </li>
                <li>
                    <a href="{{ route('marque') }}"> <i class="menu-icon fa-brands fa-bandcamp"></i><span>Marques</span> </a>
                </li>
                <li>
                    <a href="{{ route('couleur') }}"> <i class="menu-icon fas fa-droplet"></i><span>Couleurs</span> </a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}"> <i class="menu-icon fa-solid fa-list"></i><span>Categories</span> </a>
                </li>
                <li>
                    <a href=""> <i class="menu-icon fa-solid fa-list"></i><span>Produits</span> </a>
                </li>
                <li>
                    <a href=""> <i class="menu-icon fa-solid fa-list"></i><span>Commandes</span> </a>
                </li>
                <li>
                    <a href=""> <i class="menu-icon fa-solid fa-users"></i><span>Clients</span> </a>
                </li>
                {{-- <li>
                            <a href="#">
                                <i class="menu-icon icon-inbox"></i><span>Categories</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul>
                                <li><a href="">Category</a></li>
                                <li><a href="add-categories.html">Add Categories</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="menu-icon icon-layers"></i><span>Products</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="product-cart.html">Product Cart</a></li>
                                <li><a href="add-products.html">Add Products</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="menu-icon icon-flash_on"></i><span>Orders</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul>
                                <li><a href="orders.html">Orders</a></li>
                                <li><a href="order-details.html">Order Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="customers.html"> <i class="menu-icon icon-code"></i><span>Customers</span> </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="menu-icon icon-format_list_bulleted"></i><span>Coupons</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul>
                                <li><a href="coupons.html">Coupons</a></li>
                                <li><a href="create-coupons.html">Create Coupons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="menu-icon icon-settings"></i><span>Settings</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul>
                                <li><a href="staff-members.html">Staff Members</a></li>
                                <li><a href="add-staff-member.html">Add Staff Members</a></li>
                                <li><a href="site-settings.html">Site Settings</a></li>
                            </ul>
                        </li>
                        <li class="menu-divider"></li>
                        <li>
                            <a href="#"> <i class="menu-icon icon-public"></i><span>Logout</span> </a>
                        </li> --}}
            </ul>
        </div>
    </div>
</div>
