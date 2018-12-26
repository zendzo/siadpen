@extends('layouts.Xenon.master')

@section('content')
<div class="col-md-12">
				
  <div class="panel panel-default">
    <d iv class="panel-heading">
      <h3 class="panel-title">{{ config('app.name') }} - Form Pembayaran Siswa</h3>
      
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
    <div class="panel-body">
      <form class="form-horizontal"  action="{{ route('admin.penilaian.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('siswa_id') ? ' has-error' : '' }}">
          <label for="siswa_id" class="col-sm-2 control-label">Nama Siswa</label>

          <div class="col-sm-10">
            <select class="form-control" name="siswa_id" id="siswa_id">
              @foreach ($siswa as $item)
                  <option value="{{ $item->id }}">{{ $item->nis }} - {{ $item->user->fullName }}</option>
              @endforeach
            </select>

            @if ($errors->has('siswa_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('siswa_id') }}</strong>
                </span>
            @endif
          </div>
        </div><!-- form-group -->
        <div class="form-group{{ $errors->has('penilaian_date') ? ' has-error' : '' }}">
          <label for="penilaian_date" class="col-sm-2 control-label">Bulan</label>

          <div class="col-sm-10">
            <input class="form-control" type="text" name="penilaian_date" id="penilaian_date" value="{{ date('d-m-Y') }}">

            @if ($errors->has('penilaian_date'))
                <span class="help-block">
                    <strong>{{ $errors->first('penilaian_date') }}</strong>
                </span>
            @endif
          </div>
        </div><!-- form-group -->
        <div class="form-group{{ $errors->has('absensi') ? ' has-error' : '' }}">
          <label for="absensi" class="col-sm-2 control-label">Absensi</label>

          <div class="col-sm-10">
            <input class="form-control" type="text" name="absensi" id="absensi" placeholder="Absensi">

            @if ($errors->has('absensi'))
                <span class="help-block">
                    <strong>{{ $errors->first('absensi') }}</strong>
                </span>
            @endif
          </div>
        </div><!-- form-group -->
        <div class="form-group{{ $errors->has('quiz') ? ' has-error' : '' }}">
          <label for="quiz" class="col-sm-2 control-label">Quiz</label>

          <div class="col-sm-10">
            <input class="form-control" type="text" name="quiz" id="quiz" placeholder="Quiz">

            @if ($errors->has('quiz'))
                <span class="help-block">
                    <strong>{{ $errors->first('quiz') }}</strong>
                </span>
            @endif
          </div>
        </div><!-- form-group -->
        <div class="form-group{{ $errors->has('uts') ? ' has-error' : '' }}">
          <label for="uts" class="col-sm-2 control-label">UTS</label>

          <div class="col-sm-10">
            <input class="form-control" type="text" name="uts" id="uts" placeholder="UTS">

            @if ($errors->has('uts'))
                <span class="help-block">
                    <strong>{{ $errors->first('uts') }}</strong>
                </span>
            @endif
          </div>
        </div><!-- form-group -->
        <div class="form-group{{ $errors->has('uas') ? ' has-error' : '' }}">
          <label for="uas" class="col-sm-2 control-label">UAS</label>

          <div class="col-sm-10">
            <input class="form-control" type="text" name="uas" id="uas" placeholder="UAS">

            @if ($errors->has('uas'))
                <span class="help-block">
                    <strong>{{ $errors->first('uas') }}</strong>
                </span>
            @endif
          </div>
        </div><!-- form-group -->
        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
            <label for="file" class="col-sm-2 control-label">Lampiran</label>
  
            <div class="col-sm-10">
              <input class="form-control" type="file" name="file" id="file">
  
              @if ($errors->has('file'))
                  <span class="help-block">
                      <strong>{{ $errors->first('file') }}</strong>
                  </span>
              @endif
            </div>
          </div><!-- form-group -->
    </div>
    <div class="vspacer v3"></div>
		<button type="submit" class="btn btn-info">Save</button>
  </div>
  
</div>
</form>
@endsection