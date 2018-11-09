@extends('layouts.backend.master')
@section('header')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/metronic/pages/css/profile.min.css')}}">
@endsection
@section('title')
  User Profile
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet bordered">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="{{$user->getAvatarUrl()}}" class="img-responsive" alt=""> </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"> {{$user->getNameOrEmail()}} </div>
                    <div class="profile-usertitle-job"> {{$user->role->name}} </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">                                        
                    <button type="button" class="btn btn-circle green btn-sm">Send Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">                       
                        <li class="active">
                            <a href="{{route('user.profile',$user->username)}}">
                                <i class="icon-settings"></i> Account Settings </a>
                        </li>                        
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
            
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('change-password-error'))
                        <div class="alert alert-danger">
                            <strong>Error!</strong> {{Session::get('change-password-error')}} 
                        </div>                        
                    @endif
                    <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                </li>
                                <li>
                                    <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                </li>
                                <li>
                                    <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                </li>                               
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    {!!Form::open(['route' => ['user.update', $user],'method' => 'POST'])!!}
                                        <div class='form-group{{$errors->has('first_name') ? ' has-error' : ''}}'>
                                          {!!Form::label('first_name','First Name',['class' => 'control-label'])!!}
                                            {!!Form::text('first_name',$user->first_name,['class' => 'form-control','placeholder' => 'First Name'])!!}
                                            @if($errors->has('first_name'))
                                              <span class="help-block">{{$errors->first('first_name')}}</span>
                                            @endif                                          
                                        </div>

                                         <div class='form-group{{$errors->has('last_name') ? ' has-error' : ''}}'>
                                          {!!Form::label('last_name','Last Name',['class' => 'control-label'])!!}
                                            {!!Form::text('last_name',$user->last_name,['class' => 'form-control','placeholder' => 'Last Name'])!!}
                                            @if($errors->has('last_name'))
                                              <span class="help-block">{{$errors->first('last_name')}}</span>
                                            @endif                                          
                                        </div>

                                        <div class='form-group{{$errors->has('phone') ? ' has-error' : ''}}'>
                                          {!!Form::label('phone','Phone Number',['class' => 'control-label'])!!}
                                            {!!Form::text('phone',$user->phone,['class' => 'form-control','placeholder' => 'Phone Number'])!!}
                                            @if($errors->has('phone'))
                                              <span class="help-block">{{$errors->first('phone')}}</span>
                                            @endif                                          
                                        </div>

                                        <div class='form-group{{$errors->has('address') ? ' has-error' : ''}}'>
                                          {!!Form::label('address','Address',['class' => 'control-label'])!!}
                                            {!!Form::textarea('address',$user->address,['class' => 'form-control','placeholder' => 'Address','rows' => '3'])!!}
                                            @if($errors->has('address'))
                                              <span class="help-block">{{$errors->first('address')}}</span>
                                            @endif                                          
                                        </div>
                                       
                                        <div class='form-group{{$errors->has('about') ? ' has-error' : ''}}'>
                                          {!!Form::label('about','About',['class' => 'control-label'])!!}
                                            {!!Form::textarea('about',$user->about,['class' => 'form-control','placeholder' => 'Address','rows' => '3'])!!}
                                            @if($errors->has('about'))
                                              <span class="help-block">{{$errors->first('about')}}</span>
                                            @endif                                          
                                        </div>

                                         <div class='form-group{{$errors->has('facebook_url') ? ' has-error' : ''}}'>
                                          {!!Form::label('facebook_url','Facebook',['class' => 'control-label'])!!}
                                            {!!Form::text('facebook_url',$user->facebook_url,['class' => 'form-control','placeholder' => 'Phone Number'])!!}
                                            @if($errors->has('facebook_url'))
                                              <span class="help-block">{{$errors->first('facebook_url')}}</span>
                                            @endif                                          
                                        </div>

                                        <div class='form-group{{$errors->has('twitter') ? ' has-error' : ''}}'>
                                          {!!Form::label('twitter','Twitter',['class' => 'control-label'])!!}
                                            {!!Form::text('twitter',$user->twitter,['class' => 'form-control','placeholder' => 'Twitter'])!!}
                                            @if($errors->has('twitter'))
                                              <span class="help-block">{{$errors->first('twitter')}}</span>
                                            @endif                                          
                                        </div>

                                        <div class='form-group{{$errors->has('google_plus_url') ? ' has-error' : ''}}'>
                                          {!!Form::label('google_plus_url','Google+',['class' => 'control-label'])!!}
                                            {!!Form::text('google_plus_url',$user->google_plus_url,['class' => 'form-control','placeholder' => 'Phone Number'])!!}
                                            @if($errors->has('google_plus_url'))
                                              <span class="help-block">{{$errors->first('google_plus_url')}}</span>
                                            @endif                                          
                                        </div>
                                         <div class="margin-top-10">
                                            <input type="submit" class="btn green" value="Update">
                                        </div>                                     
                                       
                                    </form>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                                <!-- CHANGE AVATAR TAB -->
                                <div class="tab-pane" id="tab_1_2">
                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. </p>
                                    {!!Form::open(['route' => ['user.update', $user],'method' => 'POST'])!!}

                                    <div class="input-group">
                                       <span class="input-group-btn">
                                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                           <i class="fa fa-picture-o"></i> Choose
                                         </a>
                                       </span>
                                       <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$user->photo}}">
                                     </div>
                                     <img id="holder" src="{{$user->getAvatarUrl()}}" style="margin-top:15px;max-height:100px;">                                       
                                    <div class="margin-top-10">
                                        <input type="submit" class="btn green" value="Update">
                                    </div>
                                    </form>
                                </div>
                                <!-- END CHANGE AVATAR TAB -->
                                <!-- CHANGE PASSWORD TAB -->
                                <div class="tab-pane" id="tab_1_3">   
                                    <div class="note note-warning">
                                        <h4 class="block"><i class="fa fa-exclamation-circle"></i> Instruction</h4>
                                        <ul>
                                            <li>Input the correct data to current password field</li>
                                            <li>Password and Password Confirmation field must be match.</li>
                                        </ul>
                                    </div>                                 
                                    {!!Form::open(['route' => ['user.update', $user],'method' => 'POST'])!!}
                                        <div class="form-group">
                                            <label class="control-label">Current Password</label>
                                            <input type="password" class="form-control" name="current_password"> 
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">New Password</label>
                                            <input type="password" class="form-control" name="password"> 
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Re-type New Password</label>
                                            <input type="password" class="form-control" name="password_confirmation">
                                        </div>
                                        <div class="margin-top-10">
                                           <input type="submit" class="btn green" value="Update">
                                        </div>
                                    </form>
                                </div>
                                <!-- END CHANGE PASSWORD TAB -->                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>
@stop

@section('footer')
<script type="text/javascript" src="{{asset('assets/metronic/pages/scripts/profile.min.js')}}"></script>
<script src="{{asset('assets/metronic/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script>
$(document).ready(function(){
    var domain = "{{url('/')}}/admin/rollo-filemanager";
    $('#lfm').filemanager('image', {prefix: domain});
    $('body').on('click','.hapus',function(){
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
            // window.location = ""+id+"/delete";
          }
        });
      });   
})

</script>
@endsection
