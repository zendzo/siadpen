@extends('layouts.Xenon.master')

@section('content')
<div class="col-md-12">
				
  <div class="panel panel-default">
    <d iv class="panel-heading">
      <h3 class="panel-title">{{ config('app.name') }} - Data Pembayran</h3>
      
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
          <th>Bulan</th>
          <th>Total</th>
          <th>Status</th>
          <th>Konfirmasi</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($payments as $payment)
            <tr>
              <td>{{ $payment->id }}</td>
              <td>
              <a href="#" onclick="jQuery('#modalPayment-{{ $payment->id }}').modal('show');" class="btn btn-icon btn-blue btn-xs">{{ $payment->siswa->nis }}</a>
                    @include('Xenon.administrator.pembayaran.payment_modal')
              </td>
              <td>{{ $payment->siswa->user->fullName }}</td>
              <td>{{ $payment->pay_date }}</td>
              <td>{{ $payment->total }}</td>
              <td>
                <p class="btn btn-xs btn-{{ $payment->confirmed ? 'success' : 'danger' }}"><i class="fa fa-info"></i> {{ $payment->confirmed ? 'success' : 'pending' }}</p>
              </td>
              <td>
                <form method="POST" action="{{ route('admin.pembayaran.update',$payment->id) }}" accept-charset="UTF-8" style="display:inline">
                    @method('PATCH')
                    @csrf
                    <button type="submit" class="btn btn-icon btn-success btn-xs">
                       <i class="fa fa-check"></i> Konfirmasi
                    </button>
                 </form>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <div class="vspacer v3"></div>
    <a href="#" onclick="jQuery('#modal-2').modal('show');" class="btn btn-info icon">
      <i class="fa fa-print"></i><span> Print</span>
    </a>
    {{-- @include('Xenon.administrator.role.create_modal') --}}
  </div>
  
</div>
@endsection