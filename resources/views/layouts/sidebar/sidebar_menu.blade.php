<ul class="sidebar-menu">
<li class="header">MAIN NAVIGATION</li>
@if (auth()->user()->role_id === 1)
    @include('administrator.menu')
@endif
</ul>
