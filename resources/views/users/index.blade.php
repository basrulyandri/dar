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

                <div class="row">                    
                   @foreach($users as $user)
                    <div class="col-md-2">
                        <!--begin: widget 1-3 -->
                        <div class="mt-widget-1">                            
                            <div class="mt-img">
                                <a href="{{route('user.profile',$user->username)}}"><img src="{{$user->getAvatarUrl()}}" class="img-circle" style="width:80px;"> </a>
                            </div>
                            <div class="mt-body">
                                <a href="{{route('user.profile',$user->username)}}"><h3 class="mt-username">{{$user->getNameOrEmail(true)}}</h3></a>
                                <p class="mt-user-title"> {{$user->role->name}} </p>                                
                            </div>
                        </div>
                        <!--end: widget 1-3 -->
                    </div>
                    @endforeach
                </div>                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {{$users->links()}}            
        </div>
    </div>
   
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
