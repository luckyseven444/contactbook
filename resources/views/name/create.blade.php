@extends('app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Name</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('names.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-form-label col-md-2">Name :</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="name" placeholder="Enter a name" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="button" class="btn btn-info" value="Back" onclick="window.history.go(-1);">
                                    <input type="submit" class="btn btn-info" value="Create">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
