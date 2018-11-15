@extends('layouts.backend.master')
@section('header')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/metronic/global/plugins/image-picker/image-picker.css')}}">
@endsection
@section('title')
  {{$division->name}} Division
@stop

@section('toolbar')

<a class="btn btn-success" data-toggle="modal" href="#basic"><i class="fa fa-plus"></i> Add Members </a>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="portlet light bordered">
      <div class="portlet-body">
        <div class="members-nav">
          <div class="members-nav-title">
            <h4>Members</h4>
          </div>
          <div class="members-nav-list">

            @foreach($division->members as $member)
              <a class="popovers" href="#" data-container="body" data-trigger="hover" data-placement="top" data-content="{{$member->role->name}}" data-original-title="{{$member->getNameOrEmail(true)}}"><img src="{{$member->getAvatarUrl()}}" class="img-circle" style="width:50px;"></a>
            @endforeach
          </div>
        </div>      
      </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-lg-6 col-xs-12 col-sm-12">
      <div class="portlet light bordered">
          <div class="portlet-title">
              <div class="caption">
                  <i class="icon-share font-dark hide"></i>
                  <span class="caption-subject font-dark bold uppercase">Recent Activities</span>
              </div>
              <div class="actions">
                  <div class="btn-group">
                      <a class="btn btn-sm blue btn-outline btn-circle" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter By
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                          <label class="mt-checkbox mt-checkbox-outline">
                              <input type="checkbox" /> Finance
                              <span></span>
                          </label>
                          <label class="mt-checkbox mt-checkbox-outline">
                              <input type="checkbox" checked="" /> Membership
                              <span></span>
                          </label>
                          <label class="mt-checkbox mt-checkbox-outline">
                              <input type="checkbox" /> Customer Support
                              <span></span>
                          </label>
                          <label class="mt-checkbox mt-checkbox-outline">
                              <input type="checkbox" checked="" /> HR
                              <span></span>
                          </label>
                          <label class="mt-checkbox mt-checkbox-outline">
                              <input type="checkbox" /> System
                              <span></span>
                          </label>
                      </div>
                  </div>
              </div>
          </div>
          <div class="portlet-body">
              <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                  <ul class="feeds">
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-info">
                                          <i class="fa fa-check"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> You have 4 pending tasks.
                                          <span class="label label-sm label-warning "> Take action
                                              <i class="fa fa-share"></i>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> Just now </div>
                          </div>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-success">
                                              <i class="fa fa-bar-chart-o"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc"> Finance Report for year 2013 has been released. </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date"> 20 mins </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-danger">
                                          <i class="fa fa-user"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 24 mins </div>
                          </div>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-info">
                                          <i class="fa fa-shopping-cart"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> New order received with
                                          <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 30 mins </div>
                          </div>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-success">
                                          <i class="fa fa-user"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 24 mins </div>
                          </div>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-default">
                                          <i class="fa fa-bell-o"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> Web server hardware needs to be upgraded.
                                          <span class="label label-sm label-default "> Overdue </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 2 hours </div>
                          </div>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-default">
                                              <i class="fa fa-briefcase"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc"> IPO Report for year 2013 has been released. </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date"> 20 mins </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-info">
                                          <i class="fa fa-check"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> You have 4 pending tasks.
                                          <span class="label label-sm label-warning "> Take action
                                              <i class="fa fa-share"></i>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> Just now </div>
                          </div>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-danger">
                                              <i class="fa fa-bar-chart-o"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc"> Finance Report for year 2013 has been released. </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date"> 20 mins </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-default">
                                          <i class="fa fa-user"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 24 mins </div>
                          </div>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-info">
                                          <i class="fa fa-shopping-cart"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> New order received with
                                          <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 30 mins </div>
                          </div>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-success">
                                          <i class="fa fa-user"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 24 mins </div>
                          </div>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-warning">
                                          <i class="fa fa-bell-o"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> Web server hardware needs to be upgraded.
                                          <span class="label label-sm label-default "> Overdue </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 2 hours </div>
                          </div>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-info">
                                              <i class="fa fa-briefcase"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc"> IPO Report for year 2013 has been released. </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date"> 20 mins </div>
                              </div>
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="scroller-footer">
                  <div class="btn-arrow-link pull-right">
                      <a href="javascript:;">See All Activities</a>
                      <i class="icon-arrow-right"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>         
</div>

<!-- Modal add Anggota -->
 <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Members to {{$division->name}} division</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit">                               
                                <div class="portlet-body">
                                    <div class="mt-element-card mt-element-overlay">
                                        <div class="row">                     
                                        {!!Form::open(['route' =>['division.add.members',$division]])!!}                       
                                          <select name="members[]" multiple="multiple" id="chooseMembers" class="image-picker show-html">
                                              @foreach($division->notMembers() as $notMember)
                                                <option data-img-src="{{$notMember->getAvatarUrl()}}" value="{{$notMember->id}}" data-img-label="{{$notMember->getNameOrEmail(true)}}" data-img-class="custom-image-picker"> {{$notMember->getNameOrEmail(true)}}</option>
                                              @endforeach                                              
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <input type="submit" class="btn green" value="Add">
                                          {!!Form::close()!!}
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- End of Modal add anggota -->
@stop

@section('footer')
<script type="text/javascript" src="{{asset('assets/metronic/global/plugins/image-picker/image-picker.min.js')}}"></script>
 <script>
        $(document).ready(function() {            
           $("#chooseMembers").imagepicker({show_label:true});
        });        
    </script>
@endsection
