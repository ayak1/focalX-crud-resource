@extends('../layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
@endpush
@section('students')

@if (Session::has('message'))
    <div class="message">{{ Session::get('message') }}</div>
@endif
  <div class="tabel_container">
    <table class="tabel_content">
        <thead>
        <tr class="thead">
            <th>NAME</th>
            <th>PHONE</th>
            <th>AGE</th>
            <th>ADDRESS</th>
            <th>EDIT</th>
            <th>DELETE</th>
            <th>SHOW</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($students as $student)
            <tr class="student">
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->address}}</td>
                <td> 
                    <a class="edit" href={{route('student.edit',$student)}}>
                        <img src="img/pencil-line.svg" alt="">
                    </a>
                </td>
                <td>
                    <form action={{route('student.destroy',$student)}} method="POST">
                        @csrf
                        @method('DELETE')
                            <button class="delete" type="submit"><img src="img/delete-bin-line.svg" alt=""></button>
                    </form>  
                </td>
                <td>
                    <a class="show"  href={{route('student.show',$student)}}>
                        <img src="img/eye-line.svg" alt="">
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
  </div>
@endsection