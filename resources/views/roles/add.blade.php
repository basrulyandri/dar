@extends('layouts.backend.master')
@section('header')
  
@endsection
@section('title')
  Add Role
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
                    {!!Form::open(['route' => 'role.create'])!!}                    
                    <div class="col-md-4">
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" class="form-control" id="name" name="name">
                            <label for="name">Role Name</label>
                        </div>
                        
                    </div>
                    <div class="col-md-8">
                        <div class="form-group form-md-checkboxes">
                            <label>Permissions</label>
                            @foreach($allpermissions as $permission)
                                <div class="md-checkbox-list">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox{{$permission->id}}" name="perms[]" class="md-check" value="{{$permission->id}}"> 
                                        <label for="checkbox{{$permission->id}}">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> {{$permission->name_permission}} {{$permission->label}})
                                        </label>
                                    </div>                                
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary pull-right" value="Save">
                        {!!Form::close()!!}   
                    </div>
                </div>                  
            </div>
        </div>
    </div>
</div>
    
@stop

@section('footer')
 
@endsection
