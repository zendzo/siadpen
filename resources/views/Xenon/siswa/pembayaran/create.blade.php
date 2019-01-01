@extends('layouts.Xenon.horizontal_menu')

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
      <form class="form-horizontal"  action="{{ route('siswa.pembayaran.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input type="hidden" name="siswa_id" value="{{ auth()->user()->profile->id }}">
        <div class="form-group{{ $errors->has('pay_date') ? ' has-error' : '' }}">
          <label for="pay_date" class="col-sm-2 control-label">Bulan</label>

          <div class="col-sm-10">
            <input class="form-control" type="text" name="pay_date" id="pay_date" value="{{ date('d-m-Y') }}">

            @if ($errors->has('pay_date'))
                <span class="help-block">
                    <strong>{{ $errors->first('pay_date') }}</strong>
                </span>
            @endif
          </div>
        </div><!-- form-group -->
        <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
          <label for="total" class="col-sm-2 control-label">Jumlah</label>

          <div class="col-sm-10">
            <input class="form-control" type="text" name="total" id="total" placeholder="Rp. 120,000">

            @if ($errors->has('total'))
                <span class="help-block">
                    <strong>{{ $errors->first('total') }}</strong>
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