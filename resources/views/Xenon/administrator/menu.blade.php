<li class="{{ active(['admin.user.*','admin.role.*','admin.siswa.*','admin.ruang.*','admin.kelas.*','admin.tingkat.*','admin.guru.*'],'opened active') }}">
    <a href="dashboard-1.html">
      <i class="linecons-doc"></i>
      <span class="title">Master Data</span>
    </a>
    <ul>
      <li class="{{ active('admin.user.index') }}">
        <a href="{{ route('admin.user.index') }}">
          <i class="linecons-user"></i><span class="title"> All User</span>
        </a>
      </li>
      <li class="{{ active('admin.role.index') }}">
        <a href="{{ route('admin.role.index') }}">
          <i class="linecons-key"></i><span class="title"> All Role</span>
        </a>
      </li>
      <li class="{{ active('admin.siswa.*') }}">
        <a href="{{ route('admin.siswa.index') }}">
          <i class="linecons-graduation-cap"></i><span class="title"> Siswa</span>
        </a>
      </li>
      <li class="{{ active('admin.guru.index') }}">
        <a href="{{ route('admin.guru.index') }}">
          <i class="linecons-pencil"></i><span class="title"> Guru</span>
        </a>
      </li>
      <li class="{{ active('admin.ruang.index') }}">
        <a href="{{ route('admin.ruang.index') }}">
          <i class="linecons-shop"></i><span class="title"> Ruang</span>
        </a>
      </li>
      <li class="{{ active('admin.kelas.index') }}">
        <a href="{{ route('admin.kelas.index') }}">
          <i class="linecons-tag"></i><span class="title"> Kelas</span>
        </a>
      </li>
      <li class="{{ active('admin.tingkat.index') }}">
        <a href="{{ route('admin.tingkat.index') }}">
          <i class="linecons-photo"></i><span class="title"> Tingkat</span>
        </a>
      </li>
    </ul>
</li>
<li class="{{ active(['admin.pembayaran.create','admin.penilaian.create'],'opened active') }}">
  <a href="#">
    <i class="linecons-params"></i>
    <span class="title">Entry Data</span>
  </a>
  <ul>
    <li class="{{ active('admin.pembayaran.create') }}">
      <a href="{{ route('admin.pembayaran.create') }}">
        <i class="linecons-money"></i><span class="title"> Pembayaran</span>
      </a>
    </li>
    <li class="{{ active('admin.penilaian.create') }}">
      <a href="{{ route('admin.penilaian.create') }}">
        <i class="linecons-note"></i><span class="title"> Penilaian</span>
      </a>
    </li>
  </ul>
</li>
<li class="{{ active(['admin.pembayaran.index','admin.laporan.*','admin.penilaian.index'],'opened active') }}">
  <a href="dashboard-1.html">
    <i class="linecons-note"></i>
    <span class="title">Laporan</span>
  </a>
  <ul>
    <li class="{{ active('admin.pembayaran.index') }}">
      <a href="{{ route('admin.pembayaran.index') }}">
        <i class="fa fa-money"></i><span class="title"> Pembayaran</span>
      </a>
    </li>
    <li class="{{ active('admin.penilaian.index') }}">
      <a href="{{ route('admin.penilaian.index') }}">
        <i class="linecons-note"></i><span class="title"> Penilaian</span>
      </a>
    </li>
    <li class="{{ active('admin.laporan.siswa') }}">
      <a href="{{ route('admin.laporan.siswa') }}">
        <i class="linecons-graduation-cap"></i><span class="title"> Siswa</span>
      </a>
    </li>
    <li class="{{ active('admin.laporan.guru') }}">
      <a href="{{ route('admin.laporan.guru') }}">
        <i class="linecons-pencil"></i><span class="title"> Guru</span>
      </a>
    </li>
  </ul>
</li>