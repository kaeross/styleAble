@extends('base')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.steps.css')}}">
@endsection

@section('title')
    New Tutorial
@endsection


@section('subtitle')
    Submit a new tutorial
@endsection


@section('overview')
    <div class="col-md-12">
        <div class="card comp-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="f-w-700 text-c-blue">Tutorial form</h3>
                        <p class="mb">Thanks for helping others to learn CSS!</p>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('body')

    <div class="col-md-12">

        <!-- Verticle Wizard card start -->
        <div class="card">
            <div class="card-header">
                <h5>Tell us some more about the tutorial</h5>

            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-md-12">
                        <div id="wizard">
                            <section>
                                <tutorialform csrf="{{csrf_token()}}" />
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Verticle Wizard card end -->

    </div>
@endsection

@section('additionalScripts')

    <!-- UI elements scripts -->
    <script src="{{asset('js/bootstrap/maxlength.js')}}"></script>
    <script src="{{asset('js/UI/switches.js')}}"></script>


@endsection
