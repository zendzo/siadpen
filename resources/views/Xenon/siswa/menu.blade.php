<li class="{{ active(['search.form','search.siswa','siswa.show'],'active','opened') }}">
  <a href="layout-variants.html">
    <i class="linecons-graduation-cap"></i>
    <span class="title">Siswa Bimbel</span>
  </a>
  <ul>
    <li class="">
        <a href="{{ route('search.form') }}">
            <i class="linecons-search"></i>
          <span class="title">Pencarian Siswa</span>
        </a>
      </li>
  </ul>
</li>

@if (auth()->check())
<li class="{{ active(['siswa.profile','siswa.profile.edit'],'active','opened') }}">
    <a href="#">
      <i class="linecons-wallet"></i>
      <span class="title">User Area</span>
      {{-- <span class="badge badge-green">1</span> --}}
    </a>
    <ul>
        @if (!auth()->user()->profile)
        <li class="{{ active('siswa.profile') }}">
          <a href="{{ route('siswa.profile') }}">
            <i class="fa fa-users"></i>
            <span class="title">Lengkapi Profile</span>
          </a>
        </li>
        @else
        <li class="{{ active('siswa.show') }}">
          <a href="{{ route('siswa.show', auth()->user()->profile->nis) }}">
            <i class="fa fa-users"></i>
            <span class="title">Profile</span>
          </a>
        </li>
        <li class="{{ active('siswa.profile.edit') }}">
          <a href="{{ route('siswa.profile.edit', auth()->user()->profile->nis) }}">
            <i class="fa fa-users"></i>
            <span class="title">Edit Profile</span>
          </a>
        </li>
        @endif
          <li class="{{ active('siswa.pembayaran') }}">
            <a href="{{ route('siswa.pembayaran') }}">
              <i class="fa fa-money"></i>
              <span class="title">Upload Pembayaran</span>
            </a>
          </li>
    </ul>
  </li>
@endif

@if (auth()->guest())
<li>
    <a href="">
      <i class="linecons-user"></i>
      <span class="title">User Area</span>
    </a>
    <ul>
      <li>
        <a href="{{ route('login') }}">
          <i class="linecons-key"></i>
          <span class="title">Login</span>
        </a>
      </li>
      <li>
          <a href="{{ route('register') }}">
            <i class="linecons-key"></i>
            <span class="title">Register</span>
          </a>
        </li>

    </ul>
  </li>
@endif