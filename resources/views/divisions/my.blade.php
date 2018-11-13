@extends('layouts.backend.master')
@section('header')
  
@endsection
@section('title')
  My Divisions
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">            
            <div class="portlet-body">                    
                <div class="row">
                  @foreach($divisions as $division)
                  <div class="col-md-4">
                      <div class="mt-widget-2">
                          <div class="mt-head" style="background-image: url({{url('/')}}/assets/metronic/pages/img/background/32.jpg);">
                              <div class="mt-head-label">
                                  <a href="{{route('my.division.detail',$division)}}" class="btn btn-success">{{$division->name}}</a>
                              </div>
                              <div class="mt-head-user">
                                  <div class="mt-head-user-img">
                                      <img src="{{$division->manager->getAvatarUrl()}}"> </div>
                                  <div class="mt-head-user-info">
                                      <span class="mt-user-name">{{$division->manager->getNameorEmail(true)}}</span>
                                      <span class="mt-user-time">
                                          <i class="icon-emoticon-smile"></i> Manager</span>
                                  </div>
                              </div>
                          </div>
                          <div class="mt-body">
                              <h3 class="mt-body-title"></h3>
                              <p class="mt-body-description"> {{$division->description}}</p>
                              <ul class="mt-body-stats">
                                  <li class="font-green">
                                      <i class="icon-emoticon-smile"></i> 3,7k</li>
                                  <li class="font-yellow">
                                      <i class=" icon-social-twitter"></i> 3,7k</li>
                                  <li class="font-red">
                                      <i class="  icon-bubbles"></i> 3,7k</li>
                              </ul>
                              <div class="mt-body-actions">
                                  <div class="btn-group btn-group btn-group-justified">
                                      <a href="javascript:;" class="btn">
                                          <i class="icon-bubbles"></i> Bookmark </a>
                                      <a href="javascript:;" class="btn ">
                                          <i class="icon-social-twitter"></i> Share </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>  
                  @endforeach                                      
              </div>
            </div>
        </div>
    </div>         
</div>
@stop

@section('footer')
 <script>
        $(document).ready(function() {            
           
        });        
    </script>
@endsection
