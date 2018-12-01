@extends('base')

@section('overview')

@section('title')
    Topics
@endsection


@section('subtitle')
    What would you like to learn?
@endsection

  <div class="col-sm-12">
      <!-- List type card start -->
      <div class="card">
          <div class="card-header">
              <h5>List Type</h5>
          </div>
          <div class="row card-block">
              <div class="col-md-12 col-lg-4">
                  <h6 class="sub-title">Text list</h6>
                  <ul class="basic-list">
                      @foreach ($tutorials as $tutorial)
                          <li class="" >
                              <a href="{{ url('/') }}/{{ $tutorial->Topic }}">
                              <h6>{{ $tutorial->Topic }}</h6>
                              <p>{{ $tutorial->Subtitle }}</p></a>
                          </li>
                      @endforeach
                  </ul>
              </div>
              {{--<div class="col-md-12 col-lg-4">--}}
                  {{--<h6 class="sub-title">Text with icon lists</h6>--}}
                  {{--<ul class="basic-list list-icons">--}}
                      {{--<li>--}}
                          {{--<i class="icofont icofont-speech-comments text-primary p-absolute text-center d-block f-30"></i>--}}
                          {{--<h6>Heading</h6>--}}
                          {{--<p>Laborum nihil aliquam nulla praesentium illo libero--}}
                              {{--nihil at odio maxime.</p>--}}
                      {{--</li>--}}
                      {{--<li>--}}
                          {{--<h6>Heading</h6>--}}
                          {{--<i class="icofont icofont-warning  text-primary p-absolute text-center d-block f-30"></i>--}}
                          {{--<p>Laborum nihil aliquam nulla praesentium illo libero--}}
                              {{--nihil at odio maxime.</p>--}}
                      {{--</li>--}}
                      {{--<li>--}}
                          {{--<h6>Heading</h6>--}}
                          {{--<i class="icofont icofont-bell-alt text-primary p-absolute text-center d-block f-30"></i>--}}
                          {{--<p>Laborum nihil aliquam nulla praesentium illo libero--}}
                              {{--nihil at odio maxime.</p>--}}
                      {{--</li>--}}
                  {{--</ul>--}}
              {{--</div>--}}
              {{--<div class="col-md-12 col-lg-4">--}}
                  {{--<h6 class="sub-title">Text with images lists</h6>--}}
                  {{--<ul class="basic-list list-icons-img">--}}
                      {{--<li>--}}
                          {{--<img src="../files/assets/images/avatar-2.jpg" class="img-fluid p-absolute d-block text-center" alt="">--}}
                          {{--<h6>Heading</h6>--}}
                          {{--<p>Laborum nihil aliquam nulla praesentium illo libero--}}
                              {{--nihil at odio maxime.</p>--}}
                      {{--</li>--}}
                      {{--<li>--}}
                          {{--<h6>Heading</h6>--}}
                          {{--<img src="../files/assets/images/avatar-2.jpg" class="img-fluid p-absolute d-block text-center" alt="">--}}
                          {{--<p>Laborum nihil aliquam nulla praesentium illo libero--}}
                              {{--nihil at odio maxime.</p>--}}
                      {{--</li>--}}
                      {{--<li>--}}
                          {{--<h6>Heading</h6>--}}
                          {{--<img src="../files/assets/images/avatar-3.jpg" class="img-fluid p-absolute d-block text-center" alt="">--}}
                          {{--<p>Laborum nihil aliquam nulla praesentium illo libero--}}
                              {{--nihil at odio maxime.</p>--}}
                      {{--</li>--}}
                  {{--</ul>--}}
              {{--</div>--}}
          </div>
      </div>
      <!-- List type card end -->
  </div>


@endsection    
