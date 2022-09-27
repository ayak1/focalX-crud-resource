@extends('../layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/create.css') }}">
@endpush
@section('create')

   <div class="container">
    @if (Session::has('message'))
        <p class="message">{{ Session::get('message') }}</p>
    @endif
    <form action={{route('student.store')}} method="POST">
        @csrf
        @method('POST')
        <h1>add new student</h1>
        <div>
            <label for="student_name">name</label>
            <input type="text" name="name" id="student_name">
            <label for="student_phone">phone</label>
            <input type="text" name="phone" id="student_phone">
            <label for="student_age">age</label>
            <input type="text" name="age" id="student_age">
            <label for="student_address">address</label>
            <input type="text" name="address" id="student_address">
            <button type="submit">submit</button>
           
        </div>
    </form>
   </div>
@endsection