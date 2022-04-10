@extends('layouts.appmaster')
@section('content')
    <section class="clean-block clean-hero" style=" color:rgba(9, 162, 255, 0.85); background-image:url('{{ asset('assets/img/tech/highschool.jpg') }}');">
        <div class="text">
            <h2>Welcome to the Test School Database</h2>
            <p></p>
            <div class="card-body info"><a class="btn btn-primary btn-lg" role="button" href="/adminHome" style = "border: 3px groove var(--bs-danger)";><strong>Administration</strong><br><strong>Portal</strong></a></div>
        </div>
    </section>
@stop
