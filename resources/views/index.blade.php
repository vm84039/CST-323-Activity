@extends('layouts.appmaster')
@section('content')

    <main class="page landing-page">
        <section class="clean-block clean-form dark" >
            <div style="position: relative; color:rgb(9, 162, 255, 1);">
                <img id="background"  src="{{ asset('assets/img/tech/highschool.jpg') }}" alt="High School"
                style=" opacity: 0.2; position: absolute; height: 800px; width: 100%;" >
                <div style="text-align: center; padding-top:200px">
                <h2 style="display: inline;">Welcome to the Test School Database</h2>
                <p></p>
                <div class="card-body info"><a class="btn btn-primary btn-lg" role="button" href="/adminHome" style = "margin-top:50px; border: 3px groove var(--bs-danger)"><strong>Administration</strong><br><strong>Portal</strong></a></div>
            </div></div>
        </section>
    </main>
@stop
