@extends('app')

@section('content')
    <h1>Phone list of {{$contact->first_name.' '.$contact->last_name }} </h1>
    <table class="table table-bordered table-hover dataTables_wrapper dt-bootstrap4">
        <thead>
        <tr>
            <td>#</td>
            <td> <h1>Phone</h1> </td>
        </tr>
        </thead>
        <tbody>
        @foreach($phones as $phone )
            <tr>
                <td>{{$key++}}</td>
                <td> <h1>{{$phone->number}}</h1> </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection