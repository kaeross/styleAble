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
                                <form class="wizard-form" id="verticle-wizard" action="#">
                                    <h3> Basic information </h3>
                                    <fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="topic" class="block">Topic</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="topic" name="topic" type="text" class="form-control" placeholder="This will be displayed in the navigation so make it short and snappy!">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="subtitle" class="block">Subtitle</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input maxlength="25" id="subtitle" name="subtitle" type="text" class="form-control threshold-1" placeholder="A short taster of what's to come...">
                                            </div>
                                        </div>

                                    </fieldset>
                                    <h3> Overview </h3>
                                    <fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="Overview" class="block">Overview</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <textarea name="overview" id="overview" class="form-control" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Verticle Wizard card end -->

    </div>
@endsection

@section('scripts')

    <!-- Form wizard scripts -->
    <script src="{{asset('js/forms/jquery.steps.js')}}"></script>
    <script src="{{asset('js/forms/form-wizard.js')}}"></script>
    <script src="{{asset('js/forms/validate.js')}}"></script>

    <!-- UI elements scripts -->
    <script src="{{asset('js/bootstrap/maxlength.js')}}"></script>
    <script src="{{asset('js/UI/switches.js')}}"></script>
@endsection

