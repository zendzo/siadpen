<header class="main-header">
<!-- Logo -->
<a href="/" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>{{ str_limit(config('app.name'), 3) }}</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>{{ config('app.name') }}</b></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </a>

    <!-- User Account Menu -->
    @include('layouts.AdminLTE.header.navbar_custom_menu')
</nav>
</header>