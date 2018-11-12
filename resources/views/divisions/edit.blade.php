@extends('layouts.backend.master')

@section('title')
  Division
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
                <div class="row">
                    {!!Form::open(['route' => ['divisions.update',$division->id],'method' => 'PATCH'])!!}                    
                    <div class="col-md-4">
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" class="form-control" id="name" name="name" value="{{$division->name}}">
                            <label for="name">Name</label>
                        </div>                        
                    </div>

                    <div class="col-md-8">
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" class="form-control" id="description" name="description" value="{{$division->description}}">
                            <label for="description">Description</label>
                        </div>                        
                    </div>                    
                </div> 

                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary pull-right" value="Update">
                        {!!Form::close()!!}   
                    </div>
                </div>                  
            </div>
        </div>
    </div>
    

@stop