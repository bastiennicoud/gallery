@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading"><h1>{{ $gallery->title }}</h1></div>

              <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif

                  <p>My gallery pictures</p>

                  @foreach ($gallery->pictures as $image)

                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="{{ Storage::url($image->path) }}" alt="{{ $image->title }}">
                          <div class="caption">
                            <h3>{{ $image->title }}</h3>
                          </div>
                        </div>
                      </div>

                  @endforeach
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
