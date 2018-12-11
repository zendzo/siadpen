<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ Auth::user()->profile ? asset(Auth::user()->avatar) : Auth::user()->avatar }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>{{ title_case(Auth::user()->fullName) }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> {{ title_case(Auth::user()->role->name) }}</a>
    </div>
</div>