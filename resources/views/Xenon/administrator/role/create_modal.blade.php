<div class="modal fade custom-width" id="modal-2">
		<div class="modal-dialog" style="width: 60%;">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Create New Role</h4>
				</div>
				
				<div class="modal-body">
					<form class="form-horizontal"  action="{{ route('admin.role.store') }}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="col-sm-2 control-label">@lang('application.role name')</label>

							<div class="col-sm-10">
								<input id="name" name="name" type="text" class="form-control" placeholder="@lang('application.role name')" value="{{ old('name') }}" required>

								@if ($errors->has('name'))
										<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
										</span>
								@endif
							</div>
						</div>

				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-info">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	</form>