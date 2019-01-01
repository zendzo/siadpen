@extends('layouts.Xenon.horizontal_menu')

@section('content')
<div class="panel panel-color panel-success">
  <div class="panel-heading">
    <h4>Edit Profile {{ auth()->user()->fullName }}</h4>
  </div>
  <div class="panel-body">
    <form class="form-horizontal"  action="{{ route('siswa.profile.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PATCH')

      <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
          <label for="first_name" class="col-sm-2 control-label"> Nama Depan</label>

          <div class="col-sm-10">
            <input id="first_name" name="first_name" type="text" class="form-control" placeholder="Nama Depan" value="{{ $siswa->first_name }}" required>

            @if ($errors->has('first_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
          </div>
        </div><!--form group-->

        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
          <label for="last_name" class="col-sm-2 control-label"> Nama Belakang</label>

          <div class="col-sm-10">
            <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Nama Belakang" value="{{ $siswa->last_name }}" required>

            @if ($errors->has('last_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
          </div>
        </div><!--form group-->
        
        <div class="form-group{{ $errors->has('gender_id') ? ' has-error' : '' }}">
          <label for="gender_id" class="col-sm-2 control-label"> Jenis Kelamin</label>

          <div class="col-sm-10">
            <select class="form-control" name="gender_id" id="gender_id">
              @foreach ($genders as $item)
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>

            @if ($errors->has('gender_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('gender_id') }}</strong>
                </span>
            @endif
          </div>
        </div><!--form group-->

        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
          <label for="address" class="col-sm-2 control-label"> Alamat</label>

          <div class="col-sm-10">
            <input id="address" name="address" type="text" class="form-control" placeholder="Alamat Siswa" value="{{ $siswa->address }}" required>

            @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
          </div>
        </div><!--form group-->

        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
          <label for="phone" class="col-sm-2 control-label"> Hp</label>

          <div class="col-sm-10">
            <input id="phone" name="phone" type="text" class="form-control" placeholder="No handphone Siswa" value="{{ $siswa->phone }}" required>

            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
          </div>
        </div><!--form group-->
        
        <div class="form-group{{ $errors->has('tingkat_id') ? ' has-error' : '' }}">
          <label for="tingkat_id" class="col-sm-2 control-label"> Tingkat</label>

          <div class="col-sm-10">
            <select class="form-control" name="tingkat_id" id="tingkat_id">
              @foreach ($tingkat as $item)
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>

            @if ($errors->has('tingkat_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('tingkat_id') }}</strong>
                </span>
            @endif
          </div>
        </div><!--form group-->
        <div class="form-group{{ $errors->has('kelas_id') ? ' has-error' : '' }}">
          <label for="kelas_id" class="col-sm-2 control-label"> Kelas</label>

          <div class="col-sm-10">
            <select class="form-control" name="kelas_id" id="tingkat_id">
              @foreach ($kelas as $item)
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>

            @if ($errors->has('kelas_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('kelas_id') }}</strong>
                </span>
            @endif
          </div>
        </div><!--form group-->
        <div class="form-group{{ $errors->has('ruang_id') ? ' has-error' : '' }}">
          <label for="ruang_id" class="col-sm-2 control-label"> Ruang</label>

          <div class="col-sm-10">
            <select class="form-control" name="ruang_id" id="tingkat_id">
              @foreach ($ruang as $item)
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>

            @if ($errors->has('ruang_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('ruang_id') }}</strong>
                </span>
            @endif
          </div>
        </div><!--form group-->
        <div class="panel-footer">
          <button type="submit" class="btn btn-info">Save changes</button>
        </div>
  </div>
</div>
</form>
@endsection