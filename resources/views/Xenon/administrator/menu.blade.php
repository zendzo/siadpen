<li class="{{ active(['admin.user.*'],'opened active') }}">
    <a href="dashboard-1.html">
      <i class="linecons-user"></i>
      <span class="title">User</span>
    </a>
    <ul>
      <li class="{{ active('admin.user.index') }}">
        <a href="{{ route('admin.user.index') }}">
          <span class="title">All User</span>
        </a>
      </li>
    </ul>
</li>