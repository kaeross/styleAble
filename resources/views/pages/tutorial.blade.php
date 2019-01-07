@extends('base')

@section('title')
    {{ $tutorialbytopic->Topic }}
@endsection


@section('subtitle')
    {{ $tutorialbytopic->Subtitle }}
@endsection


@section('overview')
    <div class="col-md-12">
        {{--<div class="text-right p-b-5 text-c-blue">--}}
            {{--<a><span class="pcoded-micon"><i class="feather icon-edit-1"></i></span> Edit tutorial</a>--}}
        {{--</div>--}}

        <div class="card comp-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="f-w-700 text-c-blue">Overview</h3>
                        <p class="mb">{!! $tutorialbytopic->Overview !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('body')
    <div class="col-md-12">
        <div class="card comp-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="m-b-25 text-c-blue">Example</h3>

                        {!! $tutorialbytopic->Example !!}
                        {{--<h6 class="f-w-700">Overview</h6>--}}
                        {{--<p class="">Mizzen handsomely long boat bilged on her anchor no prey, no pay fluke prow gangway avast Admiral of the Black bowsprit Jolly Roger bilge water hail-shot poop deck. Barque no prey, no pay yo-ho-ho scuttle swab booty blow the man down ballast knave cog yawl quarter pinnace belay coxswain. American Main lugsail lugger main sheet hulk provost topmast man-of-war belaying pin bilged on her anchor coxswain execution dock aft Shiver me timbers spike.</p>--}}
                        <pre class="prettyprint linenums mt-5 lang-css col-md-8"><code>
.class {
    color: #ddd;
}

#id {
    margin: 0 auto 1em;
}

element {
    border-radius: 100%;
}
                            </code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mb-4">
    <button class="btn waves-effect waves-light btn-primary"><i class="icofont icofont-check-circled"></i>Test your knowledge</button>
    </div>

@endsection

