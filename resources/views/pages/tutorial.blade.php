@extends('home')

@section('title')
    Page title
@endsection


@section('subtitle')
    Sub title
@endsection


@section('overview')
    <div class="col-md-12">
        <div class="card comp-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-b-25">Lorem Ipsum</h6>
                        <h3 class="f-w-700 text-c-blue">Overview</h3>
                        <p class="">Mizzen handsomely long boat bilged on her anchor no prey, no pay fluke prow gangway avast Admiral of the Black bowsprit Jolly Roger bilge water hail-shot poop deck. Barque no prey, no pay yo-ho-ho scuttle swab booty blow the man down ballast knave cog yawl quarter pinnace belay coxswain. American Main lugsail lugger main sheet hulk provost topmast man-of-war belaying pin bilged on her anchor coxswain execution dock aft Shiver me timbers spike.</p>
                        <p class="m-b-0">Snow Privateer aft sloop gangplank careen gabion handsomely avast cable Cat o'nine tails boom draught ho lateen sail. Dead men tell no tales aft flogging nipperkin hempen halter swab grapple six pounders cable wench maroon aye come about league scurvy. Sink me yo-ho-ho ye nipperkin deadlights six pounders log plunder belay gibbet gun lad Arr knave warp.</p>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-eye bg-c-blue waves-effect md-trigger" data-modal="modal-2" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);"></i>
                    </div>
                    <div class="md-modal md-effect-2" id="modal-2">
                        <div class="md-content">
                            <h3>Modal Dialog</h3>
                            <div>
                                <p>This is a modal window. You can do the following things with it:</p>
                                <ul>
                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                </ul>
                                <button type="button" class="btn btn-primary waves-effect md-close">Close</button>
                            </div>
                        </div>
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
                        <h6 class="f-w-700">Overview</h6>
                        <p class="">Mizzen handsomely long boat bilged on her anchor no prey, no pay fluke prow gangway avast Admiral of the Black bowsprit Jolly Roger bilge water hail-shot poop deck. Barque no prey, no pay yo-ho-ho scuttle swab booty blow the man down ballast knave cog yawl quarter pinnace belay coxswain. American Main lugsail lugger main sheet hulk provost topmast man-of-war belaying pin bilged on her anchor coxswain execution dock aft Shiver me timbers spike.</p>
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

