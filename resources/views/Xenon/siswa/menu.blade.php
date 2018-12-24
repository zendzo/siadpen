<li class="{{ active([],'active','opened') }}">
  <a href="layout-variants.html">
    <i class="linecons-graduation-cap"></i>
    <span class="title">Siswa Bimbel</span>
  </a>
  <ul>
    <li class="">
        <a href="#">
            <i class="linecons-search"></i>
          <span class="title">Pencarian Siswa</span>
        </a>
      </li>
  </ul>
</li>

@if (auth()->check())
<li class="{{ active([],'active','opened') }}">
    <a href="#">
      <i class="linecons-wallet"></i>
      <span class="title">Pembayaran</span>
      <span class="badge badge-green">1</span>
    </a>
    <ul>
        <li class="{{ active('') }}">
            <a href="#">
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