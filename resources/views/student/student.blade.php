@extends('../layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/show.css') }}">
@endpush
@section('student')
<div class="card">
    <h1>{{$student->name}}</h1>
    <h3>{{$student->phone}}</h3>
    <h3>{{$student->age}}</h3>
    <p>{{$student->address}}</p>
</div>    
@endsection