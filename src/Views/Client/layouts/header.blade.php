<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/MVCOOP" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>ZenBlog</h1>
        </a>
        @php
            $categories = (new \Vietanh\Mvcoop\Models\Categories())->getAllCategories();
        @endphp
        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown">
                    <a href="category.html"><span>Categories</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        @foreach ($categories as $item)
                            <li>
                                <a href="#">{{ $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <!-- .navbar -->

        <div class="position-relative">
            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.html" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control" />
                    <button class="btn js-search-close">
                        <span class="bi-x"></span>
                    </button>
                </form>
            </div>
            <!-- End Search Form -->
        </div>
    </div>
</header>
<!-- End Header -->
