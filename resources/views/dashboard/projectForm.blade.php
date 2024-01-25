@extends('layouts.app')
@include('sidebar')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Create/Update Modal content-->
<div class="modal fade" id="business-modal" role="dialog">
    <div class="modal-dialog" style="left: -100px;">
    <div class="modal-content" style="width: 160%;">
        <div class="modal-header">
          <h4 class="modal-title" id="modal_title"></h4>
        </div>
        <div class="modal-body">
            <form id="form" enctype="multipart/form-data">

                <div class="col-md-6">
                    <input id="id" type="hidden" class="form-control" name="id">
                </div>
                
                <div class="row mb-2">
                    <label for="code" class="col-md-1 col-form-label text-md-end">{{ __('Code') }}</label>
                    <div class="col-md-5">
                        <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value= "{{ old ('code') }}" autocomplete="code" autofocus>
                        <span class="text-danger small" id="codeError"></span>
                    </div>


                    <label for="name" class=" col-md-1 col-form-label text-md-end">{{ __('Name') }}</label>
                    <div class="col-md-5">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value= "{{ old ('name') }}" autocomplete="name" autofocus>
                        <span class="text-danger small" id="nameError"></span>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="description" class="col-md-2 col-form-label text-md-end">{{ __('Description') }}</label>
                    <div class="col-md-10">
                        <textarea id="description" type="text" style="height: 100px;" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"></textarea>
                        <span class="text-danger small" id="descriptionError"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="benifit" class="col-md-2 col-form-label text-md-end">{{ __('Benifit') }}</label>
                    <div class="col-md-10">
                        <input id="benifit" type="text" class="form-control @error('benifit') is-invalid @enderror" name="benifit" value= "{{ old ('benifit') }}" autocomplete="benifit" autofocus>
                        <span class="text-danger small" id="benifitError"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="image" class="col-md-2 col-form-label text-md-end">{{ __('Image') }}</label>
                    <div class="col-md-4">
                        <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value= "{{ old ('image') }}" autocomplete="image" autofocus>
                        <div id="old-image"></div>
                        <span class="text-danger small" id="imageError"></span>
                    </div>

                    <label for="id_doc" class="col-md-2 col-form-label text-md-end">{{ __('ID_DOC') }}</label>
                    <div class="col-md-4">
                        <input id="id_doc" type="text" class="form-control @error('id_doc') is-invalid @enderror" name="id_doc" value= "{{ old ('id_doc') }}" autocomplete="id_doc" autofocus>
                        <span class="text-danger small" id="id_docError"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="startdate" class="col-md-2 col-form-label text-md-end">{{ __('Start Date ') }}</label>
                    <div class="col-md-4">
                        <input id="startdate" type="date" class="form-control @error('startdate') is-invalid @enderror" name="startdate" value= "{{ old ('startdate') }}" autocomplete="startdate" autofocus>
                        <span class="text-danger small" id="startdateError"></span>
                    </div>

                    <label for="enddate" class="col-md-2 col-form-label text-md-end">{{ __('End Date') }}</label>
                    <div class="col-md-4">
                        <input id="enddate" type="date" class="form-control @error('enddate') is-invalid @enderror" name="enddate" value= "{{ old ('enddate') }}" autocomplete="enddate" autofocus>
                        <span class="text-danger small" id="enddateError"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="projecttarget" class="col-md-2 col-form-label text-md-end">{{ __('Project Target') }}</label>
                    <div class="col-md-4">
                        <select id="projecttarget" type="text" class="form-control @error('projecttarget') is-invalid @enderror" name="projecttarget" value= "{{ old ('projecttarget') }}" autocomplete="projecttarget" autofocus>
                            <option selected value="" >Project Targets</option>
                            @foreach ($targets as $target )
                            <option value="{{$target-> id}}"> {{$target->name }} </option>
                            @endforeach
                        </select>
                        <span class="text-danger small" id="projecttargetError"></span>
                    </div>

                    <label for="techreferred" class="col-md-2 col-form-label text-md-end">{{ __('Technology Ref') }}</label>
                    <div class="col-md-4">
                        <select id="techreferred" type="text" class="form-control @error('techreferred') is-invalid @enderror" name="techreferred" value= "{{ old ('techreferred') }}" autocomplete="techreferred" autofocus>
                            <option selected value="" >REF</option>
                            @foreach ($techRefs as $techRef )
                            <option value="{{$techRef-> id}}"> {{$techRef->techarea }} ( {{$techRef->techsector }} ) ( {{$techRef->techniche }} ) </option>
                            @endforeach
                        </select>
                        <span class="text-danger small" id="id_techreferredError"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="missiontype" class="col-md-2 col-form-label text-md-end">{{ __('Mission Type') }}</label>
                    <div class="col-md-4">
                        <select id="missiontype" type="text" class="form-control @error('missiontype') is-invalid @enderror" name="missiontype" value= "{{ old ('missiontype') }}" autocomplete="missiontype" autofocus>
                            <option selected value="" >Mission Type</option>
                            @foreach ($missions as $mission )
                            <option value="{{$mission-> id}}">{{$mission-> type}} </option>
                            @endforeach
                        </select>
                            <span class="text-danger small" id="id_missiontypeError"></span>
                    </div>

                    <label for="trlstart" class="col-md-2 col-form-label text-md-end">{{ __('TRL Start') }}</label>
                    <div class="col-md-4">
                        <select id="trlstart" type="text" class="form-control @error('trlstart') is-invalid @enderror" name="trlstart" value= "{{ old ('trlstart') }}" autocomplete="trlstart" autofocus>
                            <option selected value="" >TRL Start</option>
                            @foreach ($trls as $trl)
                            <option value="{{$trl-> id}}">{{$trl-> trllevel}} </option>
                            @endforeach
                        </select>
                            <span class="text-danger small" id="id_trlstartError"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="trlactual" class="col-md-2 col-form-label text-md-end">{{ __('TRL Actual') }}</label>
                    <div class="col-md-4">
                        <select id="trlactual" type="text" class="form-control @error('trlactual') is-invalid @enderror" name="trlactual" value= "{{ old ('trlactual') }}" autocomplete="trlactual" autofocus>
                            <option selected value="" >TRL Actual</option>
                            @foreach ($trls as $trl)
                            <option value="{{$trl-> id}}">{{$trl-> trllevel}} </option>
                            @endforeach
                        </select>
                            <span class="text-danger small" id="id_trlactualError"></span>
                    </div>
            
                    <label for="trlfinal" class="col-md-2 col-form-label text-md-end">{{ __('TRL Final') }}</label>
                    <div class="col-md-4">
                        <select id="trlfinal" type="text" class="form-control @error('trlfinal') is-invalid @enderror" name="trlfinal" value= "{{ old ('trlfinal') }}" autocomplete="trlfinal" autofocus>
                            <option selected value="" >TRL Final</option>
                            @foreach ($trls as $trl)
                            <option value="{{$trl-> id}}">{{$trl-> trllevel}} </option>
                            @endforeach
                        </select>
                            <span class="text-danger small" id="id_trlfinalError"></span>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="foundsource" class="col-md-2 col-form-label text-md-end">{{ __('Found Source') }}</label>
                    <div class="col-md-4">
                        <select id="foundsource" type="text" class="form-control @error('foundsource') is-invalid @enderror" name="foundsource" value= "{{ old ('foundsource') }}" autocomplete="foundsource" autofocus>
                            <option selected value="" >Found Sources</option>
                            @foreach ($sources as $source)
                            <option value="{{$source-> id}}">{{$source-> name}} </option>
                            @endforeach
                        </select>
                            <span class="text-danger small" id="id_foundsourceError"></span>
                    </div>
            
                    <label for="status" class="col-md-2 col-form-label text-md-end">{{ __('Status') }}</label>
                    <div class="col-md-4">
                        <select id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value= "{{ old ('status') }}" autocomplete="status" autofocus>
                            <option selected value="" >Status</option>
                            @foreach ($statuses as $status )
                            <option value="{{$status-> id}}">{{$status-> status}} </option>
                            @endforeach
                        </select>
                            <span class="text-danger small" id="id_statusError"></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="note" class="col-md-2 col-form-label text-md-end">{{ __('Note') }}</label>
                    <div class="col-md-6">
                        <textarea id="note" type="text" class="form-control @error('note') is-invalid @enderror" name="note" value="{{ old('note') }}" ></textarea>
                        <span class="text-danger small" id="noteError"></span>
                    </div>
                </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-sm">Submit</button>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
      
    </div>
  </div>

 <!--View Modal content-->

 <div class="modal fade " id="view-modal" role="dialog">
    <div class="modal-dialog" style="left: -100px;">
      <div class="modal-content" style="width: 160%;">
        <div class="card-header">
          <h4 class="modal-title">Project Details</h4>
        </div>
        <div class="modal-body" id="details">
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


  <div class="container">
    <div class="row justify-content-center">
        <div id="first_column" class="col-md-12 offset-3 my-3">
            <div class="card">
                <div class="card-header">
                    <b>{{ __('Projects') }}</b>
                    <div class="float-right">
                        <button type="button" class="btn btn-success btn-sm"  id="add-btn" >Add Project</button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="data-table">
                        <thead>
                            <!-- <th class="py-1">Code</th> -->
                            <th class="py-1">Name</th>
                            <th class="py-1">Description</th>
                            {{-- <th class="py-1">Benifit</th> --}}
                            {{-- <th class="py-1">ID_DOC</th> --}}
                            {{-- <th class="py-1">Image</th> --}}
                            <th class="py-1">Start Date</th>
                            <th class="py-1">End Date </th>
                            {{-- <th class="py-1">Technology Ref</th>
                            <th class="py-1">Project Target</th>
                            <th class="py-1">Mission Type</th>
                            <th class="py-1">TRL Start</th>
                            <th class="py-1">TRL Actual</th>
                            <th class="py-1">TRL End</th>
                            <th class="py-1">Found Sources</th> --}}
                            <th class="py-1">Status</th>
                            <th class="py-1">Note</th>
                            <th class="py-1">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project )
                            <tr id="row_{{$project-> id}}">
                                <!-- <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$project -> code}}</td> -->
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$project -> name}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">{{$project -> description}}</td>
                                {{-- <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">{{$project -> benifit}}</td> --}}
                                {{-- <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">{{$project -> id_doc}}</td> --}}
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">{{$project -> startdate}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">{{$project -> enddate}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">{{$project -> status}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">{{$project -> note}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 90px; ">
                                    <i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745;  " data-id="{{$project-> id}}"> <span style="color:black;">|</span> </i>
                                    <i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="{{$project-> id}}"> <span style="color:black;">|</span> </i> 
                                    <i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="{{$project-> id}}"></i>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center py-3">
                        <div class="col-3" style="padding-left:40px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  </div>
</div>

<script type="text/javascript">
// function getRows ()
//     {
//         var projects = @json( $projects );
//         $.each(projects , function(index , item){
//         var row = 
//                           '<tr id="row_'+item.id+'">'+
//                             //   '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.code + '</td>' +
//                               '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.name + '</td>'+ 
//                               '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.description + '</td>'+ 
//                             //   '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.benifit + '</td>'+ 
//                             //   '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.id_doc + '</td>'+ 
//                               '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.startdate + '</td>'+  
//                               '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.enddate + '</td>'+ 
//                               '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.status + '</td>'+ 
//                               '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">'+item.note+'</td>'+
//                               '<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 90px; padding-top:15px;">'+
//                                   '<i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745; " data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+
//                                   '<i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+ 
//                                   '<i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="'+item.id+'"></i>'+
//                               '</td>'+
//                           '</tr>'; 

//                           $('#data-table tbody').append(row);

//                         });
//                     }

$(document).ready(function(){
    $(window).on('load', function() {
        // Check if the element with ID "menu_techreferred" exists.
            $('#menu_projects').addClass('bg-primary');
    });
        $.ajaxSetup({
                headers: { 
                    'x-csrf-token' : $('meta[name="csrf-token"]').attr('content')
                 }
            });
        });
        


    $('#add-btn').click(function(){
        $('#business-modal').modal('show');
        $('#form').trigger('reset');
        $('#old-image').text('');
    $('#modal_title').html('Add Project');
    $('.text-danger').text('');
    }) // create click event end

    $('body').on('click' , '#update-btn' , function(){
    $('#form').trigger('reset');
    $('#business-modal').modal('show');
    $('#modal_title').html('Update Project');
   $('.text-danger').text('');
    var rowID = $(this).data('id');
    var url = 'projectUpdatePage/'+rowID;
            $.ajax({
                type: 'GET',
                url: url,
                success: function(response) {
                   var item = response.row;
                   $('#id').val(item.id);
                   $('#code').val(item.code);
                   $('#name').val(item.name);
                   $('#description').val(item.description);
                   $('#benifit').val(item.benifit);
                   $('#id_doc').val(item.id_doc);
                   $('#startdate').val(item.startdate);
                   $('#enddate').val(item.enddate);
                   $('#projecttarget').val(item.id_project_target);
                   $('#techreferred').val(item.id_techreferred);
                   $('#missiontype').val(item.id_missiontype);
                   $('#trlstart').val(item.id_trlstart);
                   $('#trlactual').val(item.id_trlactual);
                   $('#trlfinal').val(item.id_trlfinal);
                   $('#foundsource').val(item.id_foundsource);
                   $('#status').val(item.id_status);
                   $('#note').val(item.note);
                   $('#old-image').text('old image : '+ item.image);

                },
            });
}); // update click event end



    $('#form').submit(function(){
          
          event.preventDefault();
        //   var form = $('#form')[0];
        //   var formData = $(this).serialize();
        var formData = new FormData(this);
          var inpID = $('#id').val();
       
          if(inpID)
          {
              $.ajax({
                  type: 'POST',
                  url: '{{ route("projectUpdate") }}',
                  data: formData,
                  contentType:false,
                  processData:false,
                  success: function(response)
                  {

                      if(response.errors)
                      {
                        $.each(response.errors , function(key , value){
                            $('#'+key+'Error').text(value);
                        });
                        //   $("#areaError").text(response.errors.businessArea);
                        //   $("#descriptionError").text(response.errors.description);
                        //   $("#noteError").text(response.errors.note);

                        //   $("#businessArea").val(response.oldInput.businessArea);
                        //   $("#description").val(response.oldInput.description);
                        //   $("#note").val(response.oldInput.note);

                      }
                      else
                      {                         
                          var b_alert = 
                      '<div id="alert" class="alert alert-warning alert-dismissible" >'+
                          '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">'+
                              '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>'+
                          '</svg>'+
                         ' <span></span><span id="result"></span>'+
                      '</div>';
                      var column = $('#first_column');
                      column.prepend(b_alert);
                          $('#result').html(response.message);
                          $('#alert').show();
                          var alert = $('.alert')
                      setTimeout(function() {
                         alert.alert("close");
                      }, 5000);

                      var data = $('#data-table tbody');
                      $.each(response.data , function(index , item){
                          var row1 = 
                          '<tr id="row_'+item.id+'">'+
                            //   '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.code + '</td>' +
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.name + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.description + '</td>'+ 
                            //   '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.benifit + '</td>'+ 
                            //   '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.id_doc + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.startdate + '</td>'+  
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.enddate + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.status + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">'+item.note+'</td>'+
                              '<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 90px; padding-top:15px;">'+
                                  '<i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745; " data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+
                                  '<i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+ 
                                  '<i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="'+item.id+'"></i>'+
                              '</td>'+
                          '</tr>';
                          var row_id = $('#row_'+item.id).replaceWith(row1);
                          });
                      $('#business-modal').modal('hide');
                     $('#form').trigger('reset');
                     $('#id').val(null);
                  }
                  },
              });
      
          }
          else
          {
              $.ajax({
                  type: 'POST',
                  url: '{{ route("projectCreate") }}',
                  data: formData,
                  contentType:false,
                  processData:false,

                  success: function(response)
                  {
                      if(response.errors)
                      {

                        var errorMessages = {
                        'startdate': 'The Start Date field is required.',
                        'enddate': 'The End Date field is required.',
                        'id_techreferred': 'The Technology Ref field is required.',
                        'projecttarget': 'Project Target field is required',
                        'id_missiontype': 'Mission Type field is required',
                        'id_trlstart': 'TRL Start field is required',
                        'id_trlactual': 'TRL Actual field is required',
                        'id_trlfinal': 'TRL Final field is required',
                        'id_foundsource': 'Found Source field is required',
                        'id_status': 'Status field is required',
            };
                    $.each(response.errors, function (key, value) {
                        var customErrorMessage = errorMessages[key] || value;
                        $('#' + key + 'Error').text(customErrorMessage);
                    });
                      }
                      else
                      {
                          var b_alert = 
                             '<div id="alert" class="alert alert-success alert-dismissible" >'+
                                  '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">'+
                                     '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>'+
                                  '</svg>'+
                                  '<span></span><span id="result"></span>'+
                               '</div>';
                      var column = $('#first_column');
                      column.prepend(b_alert);
                          $('#result').html(response.message);
                          $('#alert').show();
                          var alert = $('.alert')
                      setTimeout(function() {
                         alert.alert("close");
                      }, 2000);
                      var data1 = $('#data-table tbody');

                // var item = response.project;
                $.each(response.project , function(index , item){

                   var row = 
                   '<tr id="row_'+item.id+'">'+
                            //   '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.code + '</td>' +
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.name + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.description + '</td>'+ 
                            //   '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.benifit + '</td>'+ 
                            //   '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.id_doc + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.startdate + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.enddate + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">' + item.status + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px; ">'+item.note+'</td>'+
                              '<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 90px; padding-top:15px;">'+
                                  '<i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745; " data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+
                                  '<i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+ 
                                  '<i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="'+item.id+'"></i>'+
                              '</td>'+
                          '</tr>';
                                  data1.append(row);

                     });
                     $('#business-modal').modal('hide');
                     $('#form').trigger('reset');
                     $('#id').val(null);
                  }
              }
              });
          }
          
      }); 

      $('body').on('click' , '#view-btn' , function(){
             $('#view-modal').modal('show');
             var id = $(this).data('id');
            var data = $('#details');
            data.empty(); 
            var url = 'projectRead/' + id;
             $.ajax({
                type: 'GET',
                url: url,

                success: function(response) {
                   
                    $.each(response.data , function(index , item){
                        var descp ='<p>'+ 
                '<span style="font-weight:700;">Code : </span>'
                +item.code+ '</p>'+
                '<p>'+ '<span style="font-weight:700;"> Name : </span>'+item.name+'</p>'+
                '<p>'+ '<span  style="font-weight:700;">Description : </span>'
                +item.description+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> Benifit : </span>'+item.benifit+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> Image : </span>'+'<img src="public/images/'+item.image+'" width="300px">'+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> ID_DOC : </span>'+item.id_doc+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> Start Date : </span>'+item.startdate+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> End Date : </span>'+item.enddate+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> Project Target : </span>'+item.target+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> Technology Ref : </span>'+item.techarea+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> Mission Type : </span>'+item.type+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> TRL Start : </span>'+item.trlstartlevel+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> TRL Actual : </span>'+item.trlactuallevel+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> TRL Final : </span>'+item.trlfinallevel+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> Found Sources : </span>'+item.sourceName+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> Status : </span>'+item.status+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> Note : </span>'+item.note+'</p>';
                data.append(descp);
                });

                }
             });
        });
       $('body').on('click' , '#delete-btn' , function(){
        var id = $(this).data('id');
            var url = 'projectDelete/' + id;

            $.ajax({
                type: 'GET',
                url: url,
                success: function(response){
                    $('#row_'+ id).remove();
                    var b_alert = 
                        '<div id="alert" class="alert alert-danger alert-dismissible" >'+
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">'+
                                '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>'+
                            '</svg>'+
                           '<span></span><span id="result"></span>'+
                        '</div>';
                        var column = $('#first_column');
                        column.prepend(b_alert);
                            $('#result').html(response.message);
                            $('#alert').show();
                            var alert = $('.alert')
                        setTimeout(function() {
                           alert.alert("close");
                        }, 5000);
                }
            });
       });

</script>
  @endsection