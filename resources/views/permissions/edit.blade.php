@extends('layouts.backend.master')
@section('header')
  
@endsection
@section('title')
  Edit Permission 
@stop

@section('content')

<div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                   
                    <div class="actions">
                        <div class="btn-group btn-group-devided">
                            
                        </div>
                    </div>
                </div>
                <div class="portlet-body"> 
                  {!!Form::open(['route' =>['permission.update',$permission]])!!}
                  <div class="form-group form-md-line-input form-md-floating-label has-success">
                    <input type="text" class="form-control" id="label" name="label" value="{{$permission->label}}">
                      <label for="label">Label</label>
                  </div>

                  <div class="form-group form-md-line-input form-md-floating-label has-success">
                    <input type="text" class="form-control" id="name_permission" name="name_permission" value="{{$permission->name_permission}}">
                      <label for="name_permission">Name</label>
                  </div>
                  <div class="row">
                    <input type="submit" class="btn btn-primary pull-right" value="Update">                    
                  </div>
                  {!!Form::close()!!}   
                                     
            </div>
        </div>
    </div>
</div>
    
@stop

@section('footer')
 
@endsection
