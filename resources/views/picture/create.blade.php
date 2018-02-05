@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter une photo</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('picture.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="title" type="title" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('path') ? ' has-error' : '' }}">
                            <label for="path" class="col-md-4 control-label">Votre image</label>

                            <div class="col-md-6">
                                <input id="path" type="file" class="form-control" name="path" value="{{ old('path') }}" required>

                                @if ($errors->has('path'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('path') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
