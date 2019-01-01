@extends('layouts.Xenon.master')

@section('content')
<div class="col-md-12">
  <div class="page-title">
			
    <div class="title-env">
      <h1 class="title">Profile Siswa</h1>
      <p class="description">Halaman Siswa {{ $siswa->user->fullName }}.</p>
    </div>
    
  </div>
</div>
<section class="profile-env">
      
  <div class="row">
  
    <div class="col-sm-3">
      
      <!-- User Info Sidebar -->
      <div class="user-info-sidebar">
        
        <a href="#" class="user-img">
          <img src="{{ $siswa->user->avatar }}" alt="user-img" class="img-cirlce img-responsive img-thumbnail" />
        </a>
        
        <a href="#" class="user-name">
          {{ $siswa->user->fullName }}
          <span class="user-status is-online"></span>
        </a>
        
        <span class="user-title">
          Siswa <strong>{{$siswa->kelas->name}}</strong>
        </span>
        
        <hr />
        
        <ul class="list-unstyled user-info-list">
        <li>
          <i class="fa-home"></i>
          {{$siswa->kelas->name}}
        </li>
        <li>
          <i class="fa-briefcase"></i>
          <a href="#">{{$siswa->tingkat->name}}</a>
        </li>
        <li>
          <i class="fa-home"></i>
          <a href="#">{{$siswa->address}}</a>
        </li>
        <li>
          <i class="fa-phone"></i>
          <a href="#">{{$siswa->phone}}</a>
        </li>
        <li>
            <i class="fa-slideshare"></i> Wali Kelas 
            <a href="#">{{ $siswa->kelas->guru->first()->user->fullName }}</a>
          </li>
        {{-- <li>
          <i class="fa-graduation-cap"></i>
          University of Bologna
        </li> --}}
      </ul>	
          
        <hr />
        
        {{-- <ul class="list-unstyled user-friends-count">
          <li>
            <span>643</span>
            followers
          </li>
          <li>
            <span>108</span>
            following
          </li>
        </ul> --}}
        
        <button type="button" class="btn btn-success btn-block text-left">
          Aktif
          <i class="fa-check pull-right"></i>
        </button>
      </div>
      
    </div>
    
    <div class="col-sm-9">

      @include('Xenon.siswa.payment_table')
      
      @include('Xenon.siswa.penilaian_table')
    </div>
    
  </div>
  
@endsection