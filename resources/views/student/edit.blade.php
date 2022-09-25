@extends('../layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/create.css') }}">
@endpush
@section('edit')
<div class="container">
    
@if (Session::has('message'))
<p class="message">{{ Session::get('message') }}</p>
@endif
    <form action={{route('student.update',$student)}} method="POST">
        @csrf
        @method('PATCH')
        <h1>edit {{$student->name}} info</h1>
<div>
    <label for="name">name</label>
    <input type="text" name="student_name" required value={{$student->name}}>
   
    <label for="phone">phone</label>
    <input type="text" name="student_phone" required  value={{$student->phone}}>
   
    <label for="age">age</label>
    <input type="number" name="student_age" required value={{$student->age}}>
   
    <label for="address">address</label>
    <input type="text" name="student_address" required value={{$student->address}}>
   
    <button type="submit">submit</button>
</div>
    </form>
</div>
@endsection