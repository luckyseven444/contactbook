@extends('app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All phones</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <a href="{{route('phones.create')}}" class="btn btn-info fa-pull-right"><i class="fa fa-plus"></i> Add new phone</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover dataTables_wrapper dt-bootstrap4">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Number</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($phones))
                    @foreach($phones as $key => $phone)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $phone->number }}</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" href="{{route('phones.edit', $phone->id)}}"><i class="fa fa-edit"></i> Edit</a>
                                <a class="btn btn-sm btn-danger"
                                   href="{{route('phones.destroy', $phone->id)}}"
                                   onclick="return confirm('Are you sure you want to delete this course?');
                                               ">
                                    <i class="fa fa-trash"></i>
                                    Delete
                                </a>
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
