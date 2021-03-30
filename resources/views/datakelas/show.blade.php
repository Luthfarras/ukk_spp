@extends('template')

@section('title', 'Rincian data kelas')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Rincian data petugas</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('kelas/update') }}" method="post">
            @csrf
<table class="table">

<tr>
<th>Nama kelas</th>
<td>{{ $kelas->nama_kelas }}</td>
</tr>

</table>
        </form>
    </div>
</div>

@endsection