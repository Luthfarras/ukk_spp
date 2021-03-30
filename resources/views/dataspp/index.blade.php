@extends('template')

@section('title', 'SPP Database')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Database SPP</h3>
		<div class="right">
		<a class=" btn btn-primary" href="{{url ('spp/create')}}" role="button"> Tambah Data SPP</a>
		</div>
	</div>
	<div class="panel-body">
		@if($message = Session::get('message'))
    <div class="alert alert-success martop-sm">
      <p>{{ $message }}</p>
    </div>
  @endif
	@if (!empty($spp_list))
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Tahun</th>
					<th>Nominal</th>
					<th class="center">Action</th>
				</tr>
			</thead>
			<tbody>
			@php $i=1 @endphp
			@foreach($spp_list as $spp)
				<tr>
				<th>{{ $i++ }}</th>
				<td>{{ $spp->tahun }}</td>
				<td>{{ $spp->nominal }}</td>
        <td><a class="lnr lnr-pencil btn btn-success btn-md" href="{{ url('spp/' . $spp->id . '/edit') }}"> Edit</a>
          <a class="lnr lnr-trash btn btn-danger btn-md" href="{{ url('spp/' . $spp->id . '/delete') }}"> Delete</a>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
</div>
@endsection
