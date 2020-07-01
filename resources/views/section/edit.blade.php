@extends('dashboard.index')

@section('title')
Create Section
@endsection

@section('content')
<div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Fill The Section Form</h6>
    </div>
  <div class="card-body">
		<form action="{{route('section.update', ['section' => $section->id])}}" method="POST">
			@csrf
			@method('PUT')
			<div class="row" >
				<div class="form-group col-lg-4">
					<label for="name">Name</label> 
				<input id="name" name="name" placeholder="Name" type="text" value="{{$section->name}}" required="required" class="form-control @error('name') is-invalid @enderror">
					@error('name')
					<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group col-lg-4">
					<label for="between">Between</label> 
					<input id="between" name="between" placeholder="Between" type="text" value="{{$section->between}}" class="form-control @error('between') is-invalid @enderror" required="required">
					@error('between')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group col-lg-4">
					<label for="kilometers">Kilometers</label> 
					<input id="kilometers" name="ext_no" placeholder="Kilometers" value="{{$section->kilometers}}" type="text" class="form-control @error('kilometers') is-invalid @enderror" required="required">
					@error('kilometers')
					<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-4">
					<label for="rail_size">Rail Size</label> 
					<input id="rail_size" name="rail_size" placeholder="Rail Size" value="{{$section->rail_size}}" type="text" class="form-control @error('rail_size') is-invalid @enderror" required="required">
					@error('rail_size')
					<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group col-lg-4">
					<label for="code_name">Code Name</label> 
					<input id="code_name" name="ext_no" placeholder="Code Name" value="{{$section->code_name}}" type="text" class="form-control @error('code_name') is-invalid @enderror" required="required">
					@error('code_name')
					<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
			</div>
				
				<div class="form-group">
					<button name="submit" type="submit" class="btn btn-success">Save Changes</button>
				</div>
			</form>
	</div>
</div>

@endsection