@extends('layouts.backend.master')
@section('header')

@endsection
@section('title')
  Edit User
@stop

@section('content')


  <div class="row">
    <div class="col-lg-6">
      <div class="portlet light bordered">        
        <div class="portlet-body form">
            {!!Form::open(['route' =>['user.update',$user],'enctype' => 'multipart/form-data'])!!}
                <div class="form-body">
                    <div class='form-group form-md-line-input form-md-floating-label{{$errors->has('username') ? ' has-error' : ''}}'>                      
                        {!!Form::text('username',$user->username,['class' => 'form-control'])!!}
                        {!!Form::label('username','Username')!!}                       
                        @if($errors->has('username'))
                          <span class="help-block">{{$errors->first('username')}}</span>
                        @endif                                           
                    </div>

                    <div class='form-group form-md-line-input form-md-floating-label{{$errors->has('first_name') ? ' has-error' : ''}}'>                      
                        {!!Form::text('first_name',$user->first_name,['class' => 'form-control'])!!}
                        {!!Form::label('first_name','First Name')!!}                       
                        @if($errors->has('first_name'))
                          <span class="help-block">{{$errors->first('first_name')}}</span>
                        @endif                                           
                    </div>

                    <div class='form-group form-md-line-input form-md-floating-label{{$errors->has('last_name') ? ' has-error' : ''}}'>                      
                        {!!Form::text('last_name',$user->last_name,['class' => 'form-control'])!!}
                        {!!Form::label('first_name','Last Name')!!}                       
                        @if($errors->has('last_name'))
                          <span class="help-block">{{$errors->first('last_name')}}</span>
                        @endif                                           
                    </div>
                    <div class='form-group form-md-line-input form-md-floating-label{{$errors->has('email') ? ' has-error' : ''}}'>                      
                        {!!Form::email('email',$user->email,['class' => 'form-control'])!!}
                        {!!Form::label('email','Email')!!}                       
                        @if($errors->has('email'))
                          <span class="help-block">{{$errors->first('email')}}</span>
                        @endif                                           
                    </div>

                    <div class='form-group form-md-line-input form-md-floating-label has-info{{$errors->has('role_id') ? ' has-error' : ''}}'>                       
                          {!!Form::select('role_id',$roles,$user->role_id,['class' => 'form-control'])!!}
                          @if($errors->has('role_id'))
                          <span class="help-block">{{$errors->first('role_id')}}</span>
                          @endif                       
                        {!!Form::label('role_id','Role')!!}
                    </div>

                     <div class='form-group form-md-line-input form-md-floating-label{{$errors->has('password') ? ' has-error' : ''}}'>                      
                        {!!Form::input('password','password',old('password'),['class' => 'form-control'])!!}
                        {!!Form::label('password','Password')!!}                       
                        @if($errors->has('password'))
                          <span class="help-block">{{$errors->first('password')}}</span>
                        @endif                                           
                    </div>

                    <div class='form-group form-md-line-input form-md-floating-label{{$errors->has('password_confirmation') ? ' has-error' : ''}}'>                      
                        {!!Form::input('password','password_confirmation',old('password_confirmation'),['class' => 'form-control'])!!}
                        {!!Form::label('password_confirmation','Password Confirmation')!!}                       
                        @if($errors->has('password_confirmation'))
                          <span class="help-block">{{$errors->first('password_confirmation')}}</span>
                        @endif                                           
                    </div>
                </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="portlet light bordered">        
        <div class="portlet-body form">
                <div class="form-body">                    
                    <div class='form-group form-md-line-input form-md-floating-label{{$errors->has('phone') ? ' has-error' : ''}}'>                      
                        {!!Form::text('phone',$user->phone,['class' => 'form-control'])!!}
                        {!!Form::label('phone','Phone')!!}                       
                        @if($errors->has('phone'))
                          <span class="help-block">{{$errors->first('phone')}}</span>
                        @endif                                           
                    </div>

                    <div class='form-group form-md-line-input form-md-floating-label{{$errors->has('facebook_url') ? ' has-error' : ''}}'>                      
                        {!!Form::text('facebook_url',$user->facebook_url,['class' => 'form-control'])!!}
                        {!!Form::label('facebook_url','Facebook')!!}                       
                        @if($errors->has('facebook_url'))
                          <span class="help-block">{{$errors->first('facebook_url')}}</span>
                        @endif                                           
                    </div>

                    <div class='form-group form-md-line-input form-md-floating-label{{$errors->has('twitter_url') ? ' has-error' : ''}}'>                      
                        {!!Form::text('twitter_url',$user->twitter_url,['class' => 'form-control'])!!}
                        {!!Form::label('twitter_url','Twitter')!!}                       
                        @if($errors->has('twitter_url'))
                          <span class="help-block">{{$errors->first('twitter_url')}}</span>
                        @endif                                           
                    </div>

                    <div class='form-group form-md-line-input form-md-floating-label{{$errors->has('google_plus_url') ? ' has-error' : ''}}'>                      
                        {!!Form::text('google_plus_url',$user->google_plus_url,['class' => 'form-control'])!!}
                        {!!Form::label('google_plus_url','Google +')!!}                       
                        @if($errors->has('google_plus_url'))
                          <span class="help-block">{{$errors->first('google_plus_url')}}</span>
                        @endif                                           
                    </div>

                    <div class='form-group form-md-line-input form-md-floating-label{{$errors->has('instagram_url') ? ' has-error' : ''}}'>                      
                        {!!Form::text('instagram_url',$user->instagram_url,['class' => 'form-control'])!!}
                        {!!Form::label('instagram_url','Instagram')!!}                       
                        @if($errors->has('instagram_url'))
                          <span class="help-block">{{$errors->first('instagram_url')}}</span>
                        @endif                                           
                    </div>                   
                </div>
                <div class="form-actions noborder">
                    <input type="submit" class="btn blue pull-right" value="Save">
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@stop

@section('footer')

@endsection
