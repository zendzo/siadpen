<li class="treeview {{ active(['admin.user.*']) }}">
  <a href="#">
    <i class="fa fa-list-alt"></i><span>Menu Utama</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li class="{{ active(['admin.user.*']) }}">
        <a href="#"><i class="fa fa-users"></i> USER
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ active('admin.user.index') }}">
              <a href="{{ route('admin.user.index') }}"><i class="fa fa-user"></i> Daftar</a>
            </li>
        </ul>
    </li>
    {{-- <li class="{{ active('admin.perumahan.*') }}">
      <a href="#"><i class="fa fa-building"></i> Data Perumahan
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
          <li class="{{ active(['admin.perumahan.create']) }}">
            <a href="{{ route('admin.perumahan.create') }}""><i class="fa  fa-home"></i> Input Data</a>
          </li>
          <li class="{{ active(['admin.perumahan.index','admin.perumahan.show']) }}">
            <a href="{{ route('admin.perumahan.index') }}""><i class="fa  fa-home"></i> List Data</a>
          </li>
      </ul>
  </li> --}}
  {{-- <li class="{{ active('admin.rumah.*') }}">
      <a href="#"><i class="fa  fa-home"></i> Data Rumah
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
          <li class="{{ active(['admin.rumah.create']) }}">
            <a href="{{ route('admin.rumah.create') }}""><i class="fa  fa-home"></i> Input Data</a>
          </li>
          <li class="{{ active(['admin.rumah.index','admin.rumah.show']) }}">
            <a href="{{ route('admin.rumah.index') }}""><i class="fa  fa-home"></i> List Data</a>
          </li>
      </ul>
  </li> --}}
  {{-- <li class="{{ active('angsuran.*') }}">
      <a href="#"><i class="fa  fa-money"></i> Data Angsuran
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
          <li class="{{ active(['angsuran.index']) }}">
            <a href="{{ route('angsuran.index') }}""><i class="fa fa-home"></i> List Data</a>
          </li>
      </ul>
  </li> --}}
  {{-- <li class="{{ active('document.*') }}">
      <a href="#"><i class="fa fa-files-o"></i> Data Dokumen
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
          <li class="{{ active(['document.index']) }}">
            <a href="{{ route('document.index') }}""><i class="fa  fa-home"></i> List Data</a>
          </li>
      </ul>
  </li> --}}
  {{-- <li class="{{ active(['admin.type-rumah.*','admin.role.*','admin.type-document.*']) }}">
      <a href="#"><i class="fa fa-database"></i> Data System
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
          <li class="{{ active('admin.type-rumah.index') }}">
            <a href="{{ route('admin.type-rumah.index') }}">
              <i class="fa fa-database"></i> Type Rumah
            </a>
          </li>
          <li class="{{ active('admin.role.index') }}">
            <a href="{{ route('admin.role.index') }}">
              <i class="fa fa-users"></i> Type User
            </a>
          </li>
          <li class="{{ active('admin.type-document.index') }}">
            <a href="{{ route('admin.type-document.index') }}">
              <i class="fa fa-users"></i> Type Document
            </a>
          </li>
      </ul>
  </li>
</li> --}}
  </ul>
</li>