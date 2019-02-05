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
							class="form-control" value="{{ old('name', $dt->name)}}"
							id="iName" placeholder="Name" required>
							<label for="iName">Nama</label>
							
						</div>

							<div class="form-group form-label-group">
							<input type="text" name="email"
							class="form-control" value="{{ old('email', $dt->email)}}"
							id="iEmail" placeholder="Email" required>
							<label for="iEmail">Email</label>
							
							</div>

							<div class="form-group form-label-group">
							<input type="password" name="pas"
							class="form-control"
							id="iPas" placeholder="Password">
							<label for="iPas">Password</label>
								<div class="form-text text-muted">
									<small>Kossongkan Password Anda jika tidak ingin mengubahnya!</small>
								</div>
							</div>

							<div class="form-group form-label-group ">
							<input type="password" name="repas"
							class="form-control"
							id="iRePas" placeholder="Re Password">
							<label for="iRePas"> Re Password</label>
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