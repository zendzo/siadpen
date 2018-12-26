<div class="panel panel-default">
    <d iv class="panel-heading">
      <h3 class="panel-title">Data Pembayaran {{ $siswa->user->fullName }}</h3>
      
      <div class="panel-options">
        <a href="#">
          <i class="linecons-cog"></i>
        </a>
        
        <a href="#" data-toggle="panel">
          <span class="collapse-icon">&ndash;</span>
          <span class="expand-icon">+</span>
        </a>
        
        <a href="#" data-toggle="reload">
          <i class="fa-rotate-right"></i>
        </a>
        
        <a href="#" data-toggle="remove">
          &times;
        </a>
      </div>
    </d>
    
    <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Absensi</th>
            <th>Quiz</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tanngal Penilaian</th>
            <th>Nilai Akhir</th>
          </tr>
        </thead>
        
        <tbody>
          @forelse ($siswa->penilaian as $penilaian)
              <tr>
                <td>{{ $penilaian->id }}</td>
                <td>
                <a href="#" onclick="jQuery('#modalpenilaian-{{ $penilaian->id }}').modal('show');" class="btn btn-icon btn-blue btn-xs">{{ $penilaian->siswa->nis }}</a>
                    @include('Xenon.administrator.penilaian.penilaian_modal')
                </td>
                <td>{{ $penilaian->siswa->user->fullName }}</td>
                <td>{{ $penilaian->absensi }}</td>
                <td>{{ $penilaian->quiz }}</td>
                <td>{{ $penilaian->uts }}</td>
                <td>{{ $penilaian->uas }}</td>
                <td>{{ $penilaian->penilaian_date }}</td>
                <td>
                  @php
                      $avg = $penilaian->absensi + $penilaian->quiz + $penilaian->uts + $penilaian->uas
                  @endphp
                  <a type="submit" class="btn btn-icon btn-success btn-xs">
                    {{ $avg / 4}}
                  </a>
                </td>
              </tr>
          @empty
          <tr>
            <td colspan="9"><h5 class="text-center">Belum Ada Data Penilaian</h5></td>
          </tr>
          @endforelse
        </tbody>
      </table>
    <div class="vspacer v3"></div>
  </div>