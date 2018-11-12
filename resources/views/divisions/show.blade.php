@extends('layouts.backend.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>{{$division->name}}</h2>
         <ol class="breadcrumb">
            <li>
                <a href="{{route('divisions.index')}}">Divisions</a>
            </li>          
            <li>
                <a href="{{route('divisions.show',$division)}}">Edit</a>
            </li>          
        </ol>
    </div>
    <div class="col-sm-8">
      <div class="title-action">
        <a href="{{route('divisions.edit',$division)}}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
      </div>
    </div>
</div>
<div class="wrapper wrapper-content">
	<div class="ibox float-e-margins">
      <div class="ibox-title">
          <h5>Detail Division</h5>          
      </div>
      <div class="ibox-content no-padding">
          <table class="table table-striped">
                    <tr>                        
                        <td>id</td>
                        <td>{{$division->id}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>name</td>
                        <td>{{$division->name}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>description</td>
                        <td>{{$division->description}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>is_active</td>
                        <td>{{$division->is_active}}</td>
                        </tr>
                    </table>
      </div>
  </div>   
</div>

@stop