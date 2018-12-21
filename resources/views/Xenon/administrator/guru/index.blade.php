@extends('layouts.Xenon.master')

@section('css')
<link rel="stylesheet" href="{{ asset('Xenon/assets/js/select2/select2.css') }}">
<link rel="stylesheet" href="{{ asset('Xenon/assets/js/select2/select2-bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('Xenon/assets/js/multiselect/css/multi-select.css') }}">
@endsection

@section('script')
<script src="{{ asset('Xenon/assets/js/select2/select2.min.js') }}"></script>
<script src="{{ asset('Xenon/assets/js/multiselect/js/jquery.multi-select.js') }}"></script>

<script type="text/javascript">
  jQuery(document).ready(function($)
  {
    $("#select2-ruang,#select2-kelas").select2({
      placeholder: 'Pilihan Ganda',
      allowClear: true
    }).on('select2-open', function()
    {
      // Adding Custom Scrollbar
      $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
    });
    
  });
</script>
@endsection

@section('content')
<div class="col-md-12">
				
  <div class="panel panel-default">
    <d iv class="panel-heading">
      <h3 class="panel-title">{{ config('app.name') }} - Data Guru</h3>
      
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
          <th>Kode</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Telp</th>
          <th>Aksi</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($gurus as $guru)
            <tr>
              <td>{{ $guru->id }}</td>
              <td>{{ $guru->code }}</td>
              <td>{{ $guru->name }}</td>
              <td>{{ $guru->address }}</td>
              <td>
                <a href="#" onclick="jQuery('#modalEdit-{{ $guru->id }}').modal('show');" class="btn btn-icon btn-blue btn-xs"><i class="fa fa-edit"></i></a>
                {{-- @include('Xenon.administrator.guru.edit_modal') --}}
                <form method="POST" action="{{ route('admin.user.destroy',$guru->id) }}" accept-charset="UTF-8" style="display:inline">
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
    @include('Xenon.administrator.guru.create_modal')
  </div>
  
</div>
@endsection