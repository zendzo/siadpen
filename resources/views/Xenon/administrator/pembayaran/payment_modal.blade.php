<div class="modal fade custom-width" id="modalPayment-{{ $payment->id}}">
		<div class="modal-dialog" style="width: 60%;">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Bukti Pembayaran : {{ $payment->siswa->user->fullName }}</h4>
				</div>
				
				<div class="modal-body">
          @if ($payment->getFirstMediaUrl('payment'))
					<div class="modal-galery-image">
						<img src="{{ asset($payment->getFirstMediaUrl('payment')) }}" class="img-responsive">
					</div>
					@else
					<h4 class="text-center">Siswa ({{ $payment->siswa->user->fullName}}) Belum Upload Bukti Pembayaran</h4>
					@endif
        </div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>