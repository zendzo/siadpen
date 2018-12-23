<div class="modal fade custom-width" id="modalSiswa">
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
						<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
							<label for="username" class="col-sm-2 control-label">Username</label>

							<div class="col-sm-10">
								<input id="name" name="username" type="text" class="form-control" placeholder="Username" value="{{ old('username') }}" required>

								@if ($errors->has('username'))
										<span class="help-block">
												<strong>{{ $errors->first('username') }}</strong>
										</span>
								@endif
							</div>
						</div><!--form group-->

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-sm-2 control-label">Email</label>

							<div class="col-sm-10">
								<input id="name" name="email" type="text" class="form-control" placeholder="Email Siswa" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
										<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
										</span>
								@endif
							</div>
						</div><!--form group-->

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="col-sm-2 control-label">Password</label>

							<div class="col-sm-10">
								<input id="name" name="password" type="password" class="form-control" placeholder="Password" value="{{ old('password') }}" required>

								@if ($errors->has('password'))
										<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
										</span>
								@endif
							</div>
						</div><!--form group-->

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

						<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
								<label for="first_name" class="col-sm-2 control-label"> Nama Depan</label>

								<div class="col-sm-10">
									<input id="first_name" name="first_name" type="text" class="form-control" placeholder="Nama Depan" value="{{ old('first_name') }}" required>

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
									<input id="last_name" name="last_name" type="text" class="form-control" placeholder="Nama Belakang" value="{{ old('last_name') }}" required>

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
									<input id="address" name="address" type="text" class="form-control" placeholder="Alamat Siswa" value="{{ old('address') }}" required>

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
									<input id="phone" name="phone" type="text" class="form-control" placeholder="No handphone Siswa" value="{{ old('phone') }}" required>

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