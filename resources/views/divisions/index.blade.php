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
                            <button href="#" class="btn btn-primary" data-toggle="modal" data-target="#divisionModal">Add division</button>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">                    
                    <div class="table-scrollable table-scrollable-borderless">
                        <table class="table table-light">
                          <thead>
                              <tr>
                                <th><input type="checkbox" id="checkAll"></th>
                                <th>NAME</th>
                                <th>DESCRIPTION</th>
                                <th colspan="2">MANAGER</th>
                                <th>Actions</th>                  
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($divisions as $division)
                            <tr>                          
                              <td>{{$division->id}}</td>
                              <td>{{$division->name}}</td>
                              <td>{{$division->description}}</td> 
                              <td class="fit">
                                <a href="{{route('user.profile',$division->manager->username)}}">
                                <img class="user-pic rounded" src="{{$division->manager->getAvatarUrl()}}" style="width:30px;"> 
                                </a>
                              </td>                   
                              <td><a href="{{route('user.profile',$division->manager->username)}}">{{$division->manager->getNameOrEmail(true)}}</a></td>
                              <td>                              
                                <form action="{{route('divisions.destroy',$division)}}" method="post">
                                    <a class="btn btn-xs btn-white" href="{{route("divisions.show",$division)}}" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i>
                                </a>

                                <a class="btn btn-xs btn-warning" href="{{route("divisions.edit",$division)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>
                                </a>
                                    {!! method_field('delete') !!}                    
                                    {!! csrf_field() !!}
                                    <button type="submit" value="Delete" class="btn btn-xs btn-danger" id="divisionDelete"><i class="fa fa-trash"></i></button>
                                    
                                </form>                
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                      </table>
                        {{ $divisions->links() }}
                    </div>
                </div>
            </div>
        </div>
         <div class="col-md-12">
            {{$divisions->links()}}            
        </div>
    </div>


<div class="modal fade" id="divisionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Division</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         {!!Form::open(['route' =>'divisions.store'])!!}
          <div class="form-group form-md-line-input form-md-floating-label has-success">
              <input type="text" class="form-control" id="name" name="name">
              <label for="name">Name</label>
          </div>
          <div class="form-group form-md-line-input form-md-floating-label has-success">
              <input type="text" class="form-control" id="description" name="description">
              <label for="description">Description</label>
          </div>
          <div class="form-group form-md-line-input form-md-floating-label has-info">                     
                {!!Form::select('manager',\App\User::pluck('username','id')->prepend('Choose manager for this division',''),old('manager'),['class' => 'form-control edited','id' => 'manager'])!!}
                {!!Form::label('manager','Manager')!!}                        
          </div>             
      </div>
      <div class="modal-footer">        
        <input type="submit" class="btn btn-primary" value="Save">
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>
@stop

@section('footer')
 <script>
        $(document).ready(function() {            
            $('body').on('click','#divisionDelete',function(e){
              e.preventDefault();
              var formElement = $(this).parent();
                swal({
                  title:'SURE ?',
                   text: "Want to delete ?",
                   type: "warning",
                   showCancelButton: true,
                   confirmButtonColor: "#DD6B55",
                   confirmButtonText: "Yes, delete it!",
                   closeOnConfirm: true,
                },function(isConfirm){
                  if (isConfirm) {
                    formElement.submit();
                  }
                });
              });   

              $('#checkAll').on('click', function(e) {
               if($(this).is(':checked',true))  
               {
                  $(".sub_chk").prop('checked', true);  
               } else {  
                  $(".sub_chk").prop('checked',false);  
               }  
              });
              $('#deleteAll').click(function(){
                var allVals = [];  
                  $(".sub_chk:checked").each(function() {  
                      allVals.push($(this).attr('data-id'));
                  });  


                  if(allVals.length <=0)  
                  {  
                    swal({
                      title:'Ooops !',
                       text: "Select row/s to delete.",
                       type: "info",                       
                       });

                  }  else {
                    swal({
                      title:'SURE ?',
                       text: "Want to delete ?",
                       type: "warning",
                       showCancelButton: true,
                       confirmButtonColor: "#DD6B55",
                       confirmButtonText: "Yes, delete it!",
                       closeOnConfirm: true,
                    },function(isConfirm){
                      if (isConfirm) {
                        var join_selected_values = allVals.join(",");
                        var _token = '{{\Session::token()}}';
                        $.ajax({
                            url: '{{route('divisions.deleteAll')}}',
                            type: 'DELETE',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: {ids:join_selected_values,_token:_token},
                            success: function (data) {
                                if (data['success']) {
                                    $(".sub_chk:checked").each(function() {  
                                        $(this).parents("tr").remove();
                                    });
                                    toastr.success('Success', 'Data has been deleted.');                                    
                                } else if (data['error']) {
                                    console.log(data['error']);
                                } else {
                                    console.log('Whoops Something went wrong!!');
                                }
                            },
                            error: function (data) {
                                console.log(data.responseText);
                            }
                        });


                        $.each(allVals, function( index, value ) {
                            $('table tr').filter("[data-row-id='" + value + "']").remove();
                        });
                      }
                    });
                  }
              });
        });

    </script>
@endsection