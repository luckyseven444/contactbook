@extends('app')

@section('content')
    <h1>Addresses of {{$contact->first_name.' '.$contact->last_name }} </h1>
    <table class="table table-bordered table-hover dataTables_wrapper dt-bootstrap4">
      <thead>
      <tr>
          <td>#</td>
          <td> <h1>Address</h1> </td>
      </tr>
      </thead>
      <tbody>
       @foreach($addresses as $key=>$address )
        <tr>
            <td>{{$key++}}</td>
            <td> <h1>{{$address->street}}</h1> </td>
        </tr>
       @endforeach
      </tbody>
    </table>
@endsection