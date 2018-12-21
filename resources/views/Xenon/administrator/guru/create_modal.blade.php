<div class="modal fade custom-width" id="modal-2">
		<div class="modal-dialog" style="width: 60%;">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Input Data Guru</h4>
				</div>
				
				<div class="modal-body">
					<form class="form-horizontal"  action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('POST')

						<div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
							<label for="code" class="col-sm-2 control-label">Kode Guru</label>

							<div class="col-sm-10">
								<input id="name" name="code" type="text" class="form-control" placeholder="Kode Guru" value="{{ old('code') }}" required>

								@if ($errors->has('code'))
										<span class="help-block">
												<strong>{{ $errors->first('code') }}</strong>
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

							<div class="form-group{{ $errors->has('ruang_id') ? ' has-error' : '' }}">
								<label for="ruang_id" class="col-sm-2 control-label"> Ruang</label>
								
								<div class="col-sm-10">
									<select  name="ruang_id[]" class="form-control" id="select2-ruang" multiple>
										<option></option>
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

							<div class="form-group{{ $errors->has('kelas_id') ? ' has-error' : '' }}">
								<label for="kelas_id" class="col-sm-2 control-label"> Kelas</label>
								
								<div class="col-sm-10">
									<select name="kelas_id[]" class="form-control" id="select2-kelas" multiple>
										<option></option>
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

				</div><!--modal body-->
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-info">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	</form>