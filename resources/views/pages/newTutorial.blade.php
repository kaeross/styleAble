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
                                                <input id="topic"  maxlength="20" name="topic" type="text" class="form-control" placeholder="This will be displayed in the navigation so make it snappy!">
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
                                                <label for="" class="block">Overview</label>
                                            </div>
                                            <editor id="overview" editor-style="min">
                                                <p>Dragée pastry pudding chocolate bar. Wafer marzipan cupcake caramels gingerbread apple pie caramels. Apple pie ice cream brownie.</p>
                                            </editor>
                                        </div>
                                    </fieldset>
                                    <h3> Example </h3>
                                    <fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="" class="block">Example</label>
                                            </div>
                                            <editor id="example" editor-style="comp">
                                                <p>Mizzen handsomely long boat bilged on her anchor no prey, no pay fluke prow gangway avast Admiral of the Black bowsprit Jolly Roger bilge water hail-shot poop deck. Barque no prey, no pay yo-ho-ho scuttle swab booty blow the man down ballast knave cog yawl quarter pinnace belay coxswain. American Main lugsail lugger main sheet hulk provost topmast man-of-war belaying pin bilged on her anchor coxswain execution dock aft Shiver me timbers spike.</p> <pre class="prettyprint linenums mt-5 lang-css col-md-8 prettyprinted" style=""><ol class="linenums"><li class="L0"><code></code></li><li class="L1"><code><span class="pun">.</span><span class="kwd">class</span><span class="pln"> </span><span class="pun">{</span></code></li><li class="L2"><code><span class="pln">    color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#ddd;</span></code></li><li class="L3"><code><span class="pun">}</span></code></li><li class="L4"><code></code></li><li class="L5"><code><span class="com">#id {</span></code></li><li class="L6"><code><span class="pln">    margin</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="kwd">auto</span><span class="pln"> </span><span class="lit">1em</span><span class="pun">;</span></code></li><li class="L7"><code><span class="pun">}</span></code></li><li class="L8"><code></code></li><li class="L9"><code><span class="pln">element </span><span class="pun">{</span></code></li><li class="L0"><code><span class="pln">    border</span><span class="pun">-</span><span class="pln">radius</span><span class="pun">:</span><span class="pln"> </span><span class="lit">100</span><span class="pun">%;</span></code></li><li class="L1"><code><span class="pun">}</span></code></li><li class="L2"><code><span class="pln">                            </span></code></li></ol></pre>
                                            </editor>
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

@section('additionalScripts')

    <!-- Form wizard scripts -->
    {{--<script src="{{asset('js/forms/jquery.steps.js')}}"></script>--}}
    {{--<script src="{{asset('js/forms/form-wizard.js')}}"></script>--}}
    {{--<script src="{{asset('js/forms/validate.js')}}"></script>--}}

    <!-- UI elements scripts -->
    <script src="{{asset('js/bootstrap/maxlength.js')}}"></script>
    <script src="{{asset('js/UI/switches.js')}}"></script>


@endsection

@section('customScripts')

    <script>




        // $("#verticle-wizard").steps({
        //     headerTag: "h3",
        //     bodyTag: "fieldset",
        //     transitionEffect: "slide",
        //     stepsOrientation: "vertical",
        //     autoFocus: true
        // });




    </script>

@endsection

<script>
    import Editor from "../../js/components/Quill";
    export default {
        components: {Editor}
    }
</script>
<script>
    import Editor from "../../js/components/Quill";
    export default {
        components: {Editor}
    }
</script>
