@extends('layouts.Xenon.master')

@section('content')
<div class="col-md-12">
				
  <div class="panel panel-default">
    <d iv class="panel-heading">
      <h3 class="panel-title">{{ config('app.name') }} - Data Siswa</h3>
      
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
          <th>Nama</th>
          <th>Tingkat</th>
          <th>Kelas</th>
          <th>Ruang</th>
          <th>Tahun Ajaran</th>
          <th>Biaya</th>
          <th>Aksi</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($siswas as $siswa)
            <tr>
              <td>{{ $siswa->id }}</td>
              <td>{{ $siswa->nis }}</td>
              <td>{{ $siswa->name }}</td>
              <td>{{ $siswa->tingkat->name }}</td>
              <td>{{ $siswa->kelas->name }}</td>
              <td>{{ $siswa->ruang->name }}</td>
              <td>{{ $siswa->registered_at }}</td>
              <td>{{ $siswa->biaya }}</td>
              <td>
                <a href="#" onclick="jQuery('#modalEdit-{{ $siswa->id }}').modal('show');" class="btn btn-icon btn-blue btn-xs"><i class="fa fa-edit"></i></a>
                @include('Xenon.administrator.siswa.edit_modal')
                <form method="POST" action="{{ route('admin.user.destroy',$siswa->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-icon btn-red btn-xs">
                       <i class="fa fa-remove"></i>
                    </button>
                 </form>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <div class="vspacer v3"></div>
    <a href="#" onclick="jQuery('#modal-2').modal('show');" class="btn btn-info icon">
      <i class="fa fa-plus"></i><span> Input Data</span>
    </a>
    @include('Xenon.administrator.siswa.create_modal')
  </div>
  
</div>
@endsection