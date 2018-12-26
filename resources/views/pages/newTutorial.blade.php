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
                <h5>Verticle Wizard</h5>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-md-12">
                        <div id="wizard">
                            <section>
                                <form class="wizard-form" id="verticle-wizard" action="#">
                                    <h3> Registration </h3>
                                    <fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="userName-2" class="block">User name *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="userName-2b" name="userName" type="text" class=" form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="email-2" class="block">Email *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="email-2b" name="email" type="email" class=" form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="password-2" class="block">Password *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="password-2b" name="password" type="password" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="confirm-2" class="block">Confirm Password *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="confirm-2b" name="confirm" type="password" class="form-control ">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <h3> General information </h3>
                                    <fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="name-2" class="block">First name *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="name-2b" name="name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="surname-2" class="block">Last name *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="surname-2b" name="surname" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="phone-2" class="block">Phone #</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="phone-2b" name="phone" type="number" class="form-control phone">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="date" class="block">Date Of Birth</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="dateb" name="Date Of Birth" type="text" class="form-control date-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">Select Country</div>
                                            <div class="col-sm-12">
                                                <select class="form-control required">
                                                    <option>Select State</option>
                                                    <option>Gujarat</option>
                                                    <option>Kerala</option>
                                                    <option>Manipur</option>
                                                    <option>Tripura</option>
                                                    <option>Sikkim</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <h3> Education </h3>
                                    <fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="University-2" class="block">University</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="University-2b" name="University" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="Country-2" class="block">Country</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="Country-2b" name="Country" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="Degreelevel-2" class="block">Degree level #</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="Degreelevel-2b" name="Degree level" type="text" class="form-control required phone">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="datejoin" class="block">Date Join</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="datejoinb" name="Date Of Birth" type="text" class="form-control required">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <h3> Work experience </h3>
                                    <fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="Company-2" class="block">Company:</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="Company-2b" name="Company:" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="CountryW-2" class="block">Country</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="CountryW-2b" name="Country" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="Position-2" class="block">Position</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="Position-2b" name="Position" type="text" class="form-control required">
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

            <!-- Verticle Wizard card end -->

        {{--<div class="card">--}}
            {{--<div class="card-header">--}}
                {{--<h5>Tell us some more about the tutorial</h5>--}}
            {{--</div>--}}
            {{--<div class="card-block">--}}
                {{--<form>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label" for="topic">Topic</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="text" class="form-control" name="topic" id="topic" placeholder="This will show up in the navigation so make it short and snappy!">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label" for="subtitle">Tagline</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="A short taster of what's to come...">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label" for="Overview">Overview</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<textarea rows="5" cols="5" class="form-control" placeholder="Tell us all about you"></textarea>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Placeholder</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="text" class="form-control" placeholder="Type your title in Placeholder">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Password</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="password" class="form-control" placeholder="Password input" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAABKRJREFUWAnNl0tsVGUUxzvTTlslZUaCloZHY6BRFkp9sDBuqgINpaBp02dIDImwKDG6ICQ8jBYlhg0rxUBYEALTpulMgBlqOqHRDSikJkZdGG0CRqAGUuwDovQ1/s7NPTffnTu3zMxGvuT2vP7n8Z3vu+dOi4r+5xUoJH8sFquamZmpTqfTVeIfCARGQ6HQH83NzaP5xsu5gL6+vuVzc3NdJN1Kkhd8Ev1MMYni4uJjra2tt3wwLvUjCxgYGFg8Pj7+MV5dPOUub3/hX0zHIpFId0NDw6Q/jO4tZOzv76+Znp6+AOb5TBw7/YduWC2Hr4J/IhOD/GswGHy7vb39tyw2S+VbAC1/ZXZ29hKoiOE8RrIvaPE5WvyjoS8CX8sRvYPufYpZYtjGS0pKNoD/wdA5bNYCCLaMYMMEWq5IEn8ZDof3P6ql9pF9jp8cma6bFLGeIv5ShdISZUzKzqPIVnISp3l20caTJsaPtwvc3dPTIx06ziZkkyvY0FnoW5l+ng7guAWnpAI5w4MkP6yy0GQy+dTU1JToGm19sqKi4kBjY+PftmwRYn1ErEOq4+i2tLW1DagsNGgKNv+p6tj595nJxUbyOIF38AwipoSfnJyMqZ9SfD8jxlWV5+fnu5VX6iqgt7d3NcFeUiN0n8FbLEOoGkwdgY90dnbu7OjoeE94jG9wd1aZePRp5AOqw+9VMM+qLNRVABXKkLEWzn8S/FtbdAhnuVQE7LdVafBPq04pMYawO0OJ+6XHZkFcBQA0J1xKgyhlB0EChEWGX8RulsgjvOjEBu+5V+icWOSoFawuVwEordluG28oSCmXSs55SGSCHiXhmDzC25ghMHGbdwhJr6sAdpnyQl0FYIyoEX5CeYOuNHg/NhvGiUUxVgfV2VUAxjtqgPecp9oKoE4sNnbX9HcVgMH8nD5nAoWnKM/5ZmKyySRdq3pCmDncR4DxOwVC64eHh0OGLOcur1Vey46xUZ3IcVl5oa4OlJaWXgQwJwZyhUdGRjqE14VtSnk/mokhxnawiwUvsZmsX5u+rgKamprGMDoA5sKhRCLxpDowSpsJ8vpCj2AUPzg4uIiNfKIyNMkH6Z4hF3k+RgTYz6vVAEiKq2bsniZIC0nTtvMVMwBzoBT9tKkTHp8Ak1V8dTrOE+NgJs7VATESTH5WnVAgfHUqlXK6oHpJEI1G9zEZH/Du16leqHyS0UXBNKmeOMf5NvyislJPB8RAFz4g8IuwofLy8k319fUP1EEouw7L7mC3kUTO1nn3sb02MTFxFpsz87FfJuaH4pu5fF+reDz+DEfxkI44Q0ScSbyOpDGe1RqMBN08o+ha0L0JdeKi/6msrGwj98uZMeon1AGaSj+elr9LwK9IkO33n8cN7Hl2vp1N3PcYbUXOBbDz9bwV1/wCmXoS3+B128OPD/l2LLg8l9APXVlZKZfzfDY7ehlQv0PPQDez6zW5JJdYOXdAwHK2dGIv7GH4YtHJIvEOvvunLCHPPzl3QOLKTkl0hPbKaDUvlTU988xtwfMqQBPQ3m/4mf0yBVlDCSr/CRW0CipAMnGzb9XU1NSRvIX7kSgo++Pg9B8wltxxbHKPZgAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Read only</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="text" class="form-control" placeholder="You can't change me" readonly="">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Disable Input</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="text" class="form-control" placeholder="Disabled text" disabled="">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Predefine--}}
                            {{--Input</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="text" class="form-control" value="Enter yout content after me">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Select Box</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<select name="select" class="form-control">--}}
                                {{--<option value="opt1">Select One Value Only</option>--}}
                                {{--<option value="opt2">Type 2</option>--}}
                                {{--<option value="opt3">Type 3</option>--}}
                                {{--<option value="opt4">Type 4</option>--}}
                                {{--<option value="opt5">Type 5</option>--}}
                                {{--<option value="opt6">Type 6</option>--}}
                                {{--<option value="opt7">Type 7</option>--}}
                                {{--<option value="opt8">Type 8</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Round Input</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="text" class="form-control form-control-round" placeholder=".form-control-round">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Maximum--}}
                            {{--Length</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="text" class="form-control" placeholder="Content must be in 6 characters" maxlength="6">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Disable--}}
                            {{--Autocomplete</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="text" class="form-control" placeholder="Autocomplete Off" autocomplete="off">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Static Text</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<div class="form-control-static">Hello !... This is--}}
                                {{--static text--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Color</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="color" class="form-control">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Upload File</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="file" class="form-control">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 col-form-label">Textarea</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-6">--}}
                        {{--<h4 class="sub-title">Input Sizes</h4>--}}
                        {{--<form>--}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-sm-12">--}}
                                    {{--<input type="text" class="form-control form-control-lg" placeholder=".form-control-lg">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-sm-10">--}}
                                    {{--<input type="text" class="form-control" placeholder=".form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-sm-8">--}}
                                    {{--<input type="text" class="form-control form-control-sm" placeholder=".form-control-sm">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 mobile-inputs">--}}
                        {{--<h4 class="sub-title">Color Inputs</h4>--}}
                        {{--<form>--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control form-control-primary" placeholder=".form-control-primary">--}}
                            {{--</div>--}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-control-warning" placeholder=".form-control-warning">--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-control-default" placeholder=".form-control-default">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-control-danger" placeholder=".form-control-danger">--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-control-success" placeholder=".form-control-success">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-control-inverse" placeholder=".form-control-inverse">--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-control-info" placeholder=".form-control-info">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-6 mobile-inputs">--}}
                        {{--<h4 class="sub-title">Text-color</h4>--}}
                        {{--<form>--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control form-txt-primary" placeholder=".form-txt-primary">--}}
                            {{--</div>--}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-txt-warning" placeholder=".form-txt-warning">--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-txt-default" placeholder=".form-txt-default">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-txt-danger" placeholder=".form-txt-danger">--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-txt-success" placeholder=".form-txt-success">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-txt-inverse" placeholder=".form-txt-inverse">--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-txt-info" placeholder=".form-txt-info">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 mobile-inputs">--}}
                        {{--<h4 class="sub-title">Background-color</h4>--}}
                        {{--<form>--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control form-bg-primary" placeholder=".form-bg-primary">--}}
                            {{--</div>--}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-bg-warning" placeholder=".form-bg-warning">--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-bg-default" placeholder=".form-bg-default">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-bg-danger" placeholder=".form-bg-danger">--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-bg-success" placeholder=".form-bg-success">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-bg-inverse" placeholder=".form-bg-inverse">--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-bg-info" placeholder=".form-bg-info">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- Basic Form Inputs card end -->

@endsection

@section('scripts')
    <script src="{{asset('js/jquery.steps.js')}}"></script>
    <script src="{{asset('js/form-wizard.js')}}"></script>
@endsection

