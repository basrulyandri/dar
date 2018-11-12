@extends('layouts.backend.master')
@section('header')
  
@endsection
@section('title')
  Roles List
@stop

@section('content')

<div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                   
                    <div class="actions">
                        <div class="btn-group btn-group-devided">
                            <a href="{{route('role.add')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add Role</a>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">                    
                    <div class="table-scrollable table-scrollable-borderless">
                        <table class="table table-hover table-light">
                            <thead>
                                <tr class="uppercase">
                                    <th> Role </th>                                    
                                    <th> ACTIONS </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td><a href="{{route('role.edit',$role)}}">{{$role->name}}</a></td>
                                    <td>                                                                     
                                        <a  class="btn btn-danger btn-xs hapus" id="{{$role->id}}" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-md-12">
            {{$roles->links()}}            
        </div>
    </div>
@stop

@section('footer')
 <script>
        $(document).ready(function() {            
            $('body').on('click','.btn-danger',function(){
                //alert('test');
                var id = $(this).attr('id');
                swal({
                  title:'SURE ?',
                   text: "Want to delete this permission ?",
                   type: "warning",
                   showCancelButton: true,
                   confirmButtonColor: "#DD6B55",
                   confirmButtonText: "Yes, delete it!",
                   closeOnConfirm: true,
                },function(isConfirm){
                  if (isConfirm) {
                    window.location = "role/"+id+"/delete";
                  }
                });
              });   
        });        
    </script>
@endsection
