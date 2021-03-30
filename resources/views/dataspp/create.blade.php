@extends('template')

@section('title', 'Tambah SPP')

@section('content')
<div class="panel">
<div class="panel-heading">
		<h3 class="panel-title">Tambah SPP</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
		@if($errors->any())
			<div class="alert alert-warning">
					@foreach($errors->all() as $error)
					<strong>{{$error}}</strong><br>
					@endforeach
			</div>
		@endif
        <form action="{{ url('spp/store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="tahun" class="controllabel">Tahun</label>
                <input name="tahun" type="number" class="form-control">
            </div>
            <div class="form-group">
                <label for="nominal" class="controllabel">Nominal</label>
                <input name="nominal" type="number" class="form-control">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
        </form>
    </div>
</div>

@endsection
