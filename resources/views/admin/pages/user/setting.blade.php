@extends('admin.main')
@section('title', 'User Setting')
@section('content')
<h1>USER</h1>
<hr>
	<div class="row">
		<div class="col-md-6">
			<form method="post" action="{{ route('admin.user.setting') }}">
				<div class="card mb-3">
					<div class="card-header"><h5>Setting</h5></div>
					<div class="card-body">
						{{ csrf_field() }}

						<div class="form-group form-label-group">
							<input type="text" name="name"
							class="form-control {{$errors->has('name')?'is-invalid':''}}" value="{{ old('name', $dt->name)}}"
							id="iName" placeholder="Name" required>
							<label for="iName">Nama</label>
							@if($errors->has('name'))
							<div class="invalid-feedback">{{$errors->first('name')}}</div>
							@endif
							
						</div>

							<div class="form-group form-label-group">
							<input type="text" name="email"
							class="form-control {{$errors->has('email')?'is-invalid':''}}" value="{{ old('email', $dt->email)}}"
							id="iEmail" placeholder="Email" required>
							<label for="iEmail">Email</label>
							@if($errors->has('email'))
							<div class="invalid-feedback">{{$errors->first('email')}}</div>
							@endif
							
							</div>

							<div class="form-group form-label-group">
							<input type="password" name="password"
							class="form-control {{$errors->has('password')?'is-invalid':''}}"
							id="iPas" placeholder="Password">
							<label for="iPas">Password</label>
							@if($errors->has('password'))
							<div class="invalid-feedback">{{$errors->first('password')}}</div>
							@endif
								<div class="form-text text-muted">
									<small>Kossongkan Password Anda jika tidak ingin mengubahnya!</small>
								</div>
							</div>

							<div class="form-group form-label-group ">
							<input type="password" name="repassword"
							class="form-control {{$errors->has('repassword')?'is-invalid':''}}"
							id="iRePas" placeholder="Re Password">
							<label for="iRePas"> Re Password</label>
							@if($errors->has('repassword'))
							<div class="invalid-feedback">{{$errors->first('repassword')}}</div>
							@endif
							</div>

					</div>

					<div class="card-footer">
						<button type="submit" class="btn btn-primary shadow-sm">Up Date</button>
					</div>

				</div>
			</form>
		</div>
	</div>
@endsection