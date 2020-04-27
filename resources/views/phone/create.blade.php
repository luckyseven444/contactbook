@extends('app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Phone</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('phones.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <label for="name_id" class="col-form-label col-md-2">Name :</label>
                                <div class="col-md-10">
                                    <select name="name_id">
                                        @foreach($names as $name)
                                            <option>select a value</option>
                                            <option value="{{$name->id}}">{{$name->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="number" class="col-form-label col-md-2">Number :</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="number" placeholder="Number" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label for="contact_id" class="col-form-label col-md-2">Contact:</label>
                            <div class="col-md-10">
                                <select name="contact_id">
                                    @foreach($contacts as $contact)
                                        <option>select a value</option>
                                        <option value="{{$contact->id}}">{{$contact->first_name.' '.$contact->last_name }}</option>
                                    @endforeach
                                </select>
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
