@extends('layouts.default')
@section('content')
  <div class = "jumbotron">
    <h3>Create a new kit by filling out the data below</h3>
    <h5>All fields are required.</h5>
    <div>
      {{Form::open(['url' => 'kitmanage/create2add']) }}
      Creating Kit of Class:
      {{Form::label('kitType', 'Kit Type: ') }}
      {{Form::select('kitType', $kits, $kitInput, ['readonly'],['class' => 'form-control']) }}
      with this many
      {{Form::label('assets', 'Assets (Eg. 7 ipads in kit): ') }}
      {{Form::number('assets', $assets,['readonly'],['class' => 'form-control']) }}
    </div>
  </div> <!--End of jumbotron -->

  @if(isset($error))
  <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span>
    {{$error;}}
  </div> <!--end of error message -->
  @endif

  <!-- DISPLAY ERROR IF ONE HERE -->
  <div class ="row">
  <div class="col-md-4">
    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
      {{Form::label('barcode', 'Kit Barcode') }}
      {{Form::text('barcode',null, ['class' => 'form-control']) }}
      {{$errors->first('status', '<p class="help-block">:message</p>') }}
    </div>
  </div>
  </div> <!--end row1 -->

  <div class ="row">
      @for($i = 0; $i < $assets; $i++)
      <div class="col-sm-3">
        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
          {{Form::label($i, 'Asset Tag  ')}}
          {{Form::text(($i), null, ['class' => 'form-control'])}}
          {{$errors->first('status', '<p class="help-block">:message</p>') }}
        </div>
      </div>
      @endfor
  </div> <!-- end row two -->

  <div class ="row">
    <div class="col-md-6">
    <input type="submit" name="add"  value="Add Asset">
    <input type="submit" name="sub"  value="Remove Last Asset">
  </div>
  </div>

  <div class ="row">
    <div class="col-md-4">
      <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
      {{Form::label('notes', 'Notes')}}
      {{Form::textarea('notes',null, ['class' => 'form-control', 'rows' => 2])}}
      {{$errors->first('status', '<p class="help-block">:message</p>') }}
    </div>
  </div>
  </div>

  <div>
    {{Form::submit('Create Kit') }}
    {{Form::close()}}
  </div>

@stop
