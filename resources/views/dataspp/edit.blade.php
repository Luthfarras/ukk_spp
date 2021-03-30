@extends('template')

@section('title', 'Edit SPP')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Edit SPP</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
		@if($errors->any())
			<div class="alert alert-danger">
					@foreach($errors->all() as $error)
					<strong>{{$error}}</strong><br>
					@endforeach
			</div>
		@endif
        <form action="{{ url('spp/'.$spp->id.'/update') }}" method="post">
            @csrf
            <div class="form-group">
			<h4>Tahun</h4>
				<input name="tahun" type="number"  class="form-control" value="{{$spp->tahun}}" required>
            </div>
			<h4>Nominal</h4>
				<input name="nominal" type="number"  class="form-control" value="{{$spp->nominal}}" required>
            </div>
            <div class="text-center">
				<button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
</div>

@endsection
