@extends('app')

@section('content')
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div>
                        <div>
                            <h1>Name: {{ $contact->first_name.' '.$contact->last_name }}</h1>
                            <h1>Date of birth: {{$contact->date_of_birth}}</h1>
                            <h1>Email: {{$contact->email}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
