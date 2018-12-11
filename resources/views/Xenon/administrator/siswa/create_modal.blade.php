<div class="modal fade custom-width" id="modal-2">
		<div class="modal-dialog" style="width: 60%;">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Input Data Siswa</h4>
				</div>
				
				<div class="modal-body">
					<form class="form-horizontal"  action="{{ route('admin.siswa.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('POST')

						<div class="form-group{{ $errors->has('nis') ? ' has-error' : '' }}">
							<label for="nis" class="col-sm-2 control-label">NIS</label>

							<div class="col-sm-10">
								<input id="name" name="nis" type="text" class="form-control" placeholder="Nomor Induk Siswa" value="{{ old('nis') }}" required>

								@if ($errors->has('nis'))
										<span class="help-block">
												<strong>{{ $errors->first('nis') }}</strong>
										</span>
								@endif
							</div>
						</div><!--form group-->

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								<label for="name" class="col-sm-2 control-label"> Nama</label>

								<div class="col-sm-10">
									<input id="name" name="name" type="text" class="form-control" placeholder="Nama Siswa" value="{{ old('name') }}" required>

									@if ($errors->has('name'))
											<span class="help-block">
													<strong>{{ $errors->first('name') }}</strong>
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
							<div class="form-group{{ $errors->has('biaya') ? ' has-error' : '' }}">
								<label for="biaya" class="col-sm-2 control-label"> Biaya</label>

								<div class="col-sm-10">
									<input id="biaya" name="biaya" type="text" class="form-control" placeholder="biaya" value="{{ old('biaya') }}" required>

									@if ($errors->has('biaya'))
											<span class="help-block">
													<strong>{{ $errors->first('biaya') }}</strong>
											</span>
									@endif
								</div>
							</div><!--form group-->
							<div class="form-group{{ $errors->has('registered_at') ? ' has-error' : '' }}">
								<label for="registered_at" class="col-sm-2 control-label"> Tahun Masuk</label>

								<div class="col-sm-10">
									<input id="registered_at" name="registered_at" type="text" class="form-control" placeholder="registered_at" value="{{ old('registered_at') }}" required>

									@if ($errors->has('registered_at'))
											<span class="help-block">
													<strong>{{ $errors->first('registered_at') }}</strong>
											</span>
									@endif
								</div>
							</div><!--form group-->
				</div><!--modal body-->
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-info">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	</form>