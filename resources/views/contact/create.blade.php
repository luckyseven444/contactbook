@extends('app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Contact</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('contacts.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <div class="row">
                                <label for="first_name" class="col-form-label col-md-2">First Name :</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="last_name" class="col-form-label col-md-2">Last Name :</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label for="email" class="col-form-label col-md-2">Email :</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="email" placeholder="Email" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label for="date_of_birth" class="col-form-label col-md-2">Email :</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="date_of_birth" placeholder="Date of birth" value="">
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
