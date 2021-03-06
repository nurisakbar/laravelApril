@extends('layout')
@section('title','Form todo')
@section('content')
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Bordered Table</h3>
        </div>
        <div class="box-body">

                        @include('share.validation_error')

    {{ Form::open(['url'=>'user','class'=>'form-horizontal'])}}

    @include('user.form')


    <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                    {{ Form::submit('Save User',['class'=>'btn btn-success'])}}
                    {{ link_to('/todo','Back',['class'=>'btn btn-info'])}}

            </div>
    </div>  
    
    

    {{ Form::close() }}
        </div>
</div>
@endsection()