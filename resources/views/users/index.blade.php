@extends('layouts.backend.master')
@section('header')
  
@endsection
@section('title')
  Users
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                   
                    <div class="actions">
                        <div class="btn-group btn-group-devided">
                            <a href="{{route('user.add')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add User</a>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">                    
                    <div class="table-scrollable table-scrollable-borderless">
                        <table class="table table-hover table-light">
                            <thead>
                                <tr class="uppercase">
                                    <th colspan="2"> USER </th>
                                    <th> ROLE </th>                                   
                                    <th> ACTIONS </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="{{$user->getAvatarUrl()}}"> </td>
                                    <td>
                                        <a href="{{route('user.profile',$user->username)}}" class="primary-link">{{$user->getNameOrEmail(true)}}</a>
                                    </td>
                                    <td> {{$user->role->name}} </td>                                    
                                    <td>                                                                                
                                        <a  class="btn btn-danger btn-xs hapus" user-id="{{$user->id}}" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{$users->links()}}
   
@stop

@section('footer')
<script>
    $('body').on('click','.hapus',function(){
                //alert('test');
                var id = $(this).attr('user-id');
                swal({
                  title:'SURE ?',
                   text: "Want to delete this user ?",
                   type: "warning",
                   showCancelButton: true,
                   confirmButtonColor: "#DD6B55",
                   confirmButtonText: "Yes, delete it!",
                   closeOnConfirm: true,
                },function(isConfirm){
                  if (isConfirm) {
                    window.location = "user/"+id+"/delete";
                  }
                });
              });   
</script>
@endsection
