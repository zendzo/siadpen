@extends('layouts.Xenon.master')

@section('content')
<div class="col-md-12">
				
  <div class="panel panel-default">
    <d iv class="panel-heading">
      <h3 class="panel-title">{{ config('app.name') }} - Ruang</h3>
      
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
          <th>Nama Ruangan</th>
          <th>Action</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($ruangs as $ruang)
            <tr>
              <td>{{ $ruang->id }}</td>
              <td>{{ $ruang->name }}</td>
              <td>
                <a href="#" onclick="jQuery('#modalEdit-{{ $ruang->id }}').modal('show');" class="btn btn-icon btn-blue btn-xs"><i class="fa fa-edit"></i></a>
                @include('Xenon.administrator.ruang.edit_modal')
                <form method="POST" action="{{ route('admin.role.destroy',$ruang->id) }}" accept-charset="UTF-8" style="display:inline">
                    @method('DELETE')
                    @csrf
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
      <i class="fa fa-plus"></i><span> Add User</span>
    </a>
    @include('Xenon.administrator.ruang.create_modal')
  </div>
  
</div>
@endsection