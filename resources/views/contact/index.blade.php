@extends('app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Contacts</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <a href="{{route('contacts.create')}}" class="btn btn-info fa-pull-right"><i class="fa fa-plus"></i> Add new contact</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover dataTables_wrapper dt-bootstrap4">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($contacts))
                    @foreach($contacts as $key => $contact)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $contact->first_name }}</td>
                            <td>{{ $contact->last_name }}</td>
                            <td>{{ $contact->email }} </td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-secondary" href="{{route('contacts.show', $contact->id)}}"><i class="fa fa-eye"></i> view</a>
                                <a class="btn btn-sm btn-info" href="{{route('contacts.edit', $contact->id)}}"><i class="fa fa-edit"></i> Edit</a>
                                <a class="btn btn-sm btn-danger"
                                   href="{{route('contacts.destroy', $contact->id)}}"
                                   onclick="return confirm('Are you sure you want to delete this course?');
                                               ">
                                    <i class="fa fa-trash"></i>
                                    Delete
                                </a>

                                <a class="btn btn-sm btn-secondary" href="{{route('contacts.phones', $contact->id)}}"><i class="fa fa-eye"></i> Phones</a>
                                <a class="btn btn-sm btn-secondary" href="{{route('contacts.addresses', $contact->id)}}"><i class="fa fa-eye"></i> Addresses</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
