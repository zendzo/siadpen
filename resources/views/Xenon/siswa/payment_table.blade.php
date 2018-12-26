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
        <th>Bulan</th>
        <th>Total</th>
        <th>Status</th>
      </tr>
    </thead>
    
    <tbody>
      @forelse ($siswa->payments as $payment)
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
          </tr>
      @empty
      <tr>
        <td colspan="6"><h5 class="text-center">Belum Ada Data Pembayaran</h5></td>
      </tr>
      @endforelse
    </tbody>
  </table>
  <div class="vspacer v3"></div>
</div>