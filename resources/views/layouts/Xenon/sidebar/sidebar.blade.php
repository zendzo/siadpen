<div class="sidebar-menu toggle-others fixed">
		
  <div class="sidebar-menu-inner">
    
    @include('layouts.Xenon.sidebar.header')
    
    <ul id="main-menu" class="main-menu">
      <!-- add class "multiple-expanded" to allow multiple submenus to open -->
      <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
      @if (auth()->user()->role_id === 1)
          @include('Xenon.administrator.menu')
      @endif
    </ul>
    
  </div>

</div>