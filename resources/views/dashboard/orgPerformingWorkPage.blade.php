@extends('layouts.app')
@include('sidebar')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- Create/Upcode Modal content-->
<div class="modal fade" id="form-modal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="modal_title"></h4>
        </div>
        <div class="modal-body">
            <form id="form">

                <div class="col-md-6">
                    <input id="id" type="hidden" class="form-control" name="id">
                </div>

                <!-- <div class="row mb-3">
                    <label for="code" class="col-md-4 col-form-label text-md-end">{{ __('Code') }}</label>
                    <div class="col-md-6">
                        <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" >
                        <span class="text-danger small" id="codeError"></span>
                    </div>
                </div> -->

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" >
                        <span class="text-danger small" id="nameError"></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                    <div class="col-md-6">
                        <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" ></textarea>
                        <span class="text-danger small" id="descriptionError"></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="typeoflocation" class="col-md-4 col-form-label text-md-end">{{ __('Type Of Location') }}</label>
                    <div class="col-md-6">
                        <input id="typeoflocation" type="text" class="form-control @error('typeoflocation') is-invalid @enderror" name="typeoflocation" value="{{ old('typeoflocation') }}" >
                        <span class="text-danger small" id="typeoflocationError"></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="id_type" class="col-md-4 col-form-label text-md-end">{{ __('Type') }}</label>
                    <div class="col-md-6">
                        <select id="id_type" type="text" class="form-control @error('id_type') is-invalid @enderror" name="id_type" value="{{ old('id_type') }}">
                            <option selected value="">SELECT</option>
                            @foreach ($orgs as $org)
                            <option value="{{$org ->id}}">{{$org->type}} </option>
                            @endforeach
                        </select>
                        <span class="text-danger small" id="id_typeError"></span>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="id_humanentity" class="col-md-4 col-form-label text-md-end">{{ __('Humanentity') }}</label>
                    <div class="col-md-6">
                        <select id="id_humanentity" type="text" class="form-control @error('id_humanentity') is-invalid @enderror" name="id_humanentity" value= "{{ old ('id_humanentity') }}" autocomplete="id_humanentity" autofocus>
                            <option selected value="">SELECT</option>
                            @foreach ($humans as $human)
                            <option value="{{$human ->id}}">{{$human ->name}} </option>
                            @endforeach
                        </select>
                            <span class="text-danger small" id="id_humanentityError"></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="id_location" class="col-md-4 col-form-label text-md-end">{{ __('Location') }}</label>
                    <div class="col-md-6">
                        <select id="id_location" type="text" class="form-control @error('id_location') is-invalid @enderror" name="id_location" value= "{{ old ('id_location') }}" autocomplete="id_location" autofocus>
                            <option selected value="">SELECT</option>
                            @foreach ($locations as $location)
                            <option value="{{$location ->id}}">{{$location ->city}} </option>
                            @endforeach
                        </select>
                            <span class="text-danger small" id="id_locationError"></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="note" class="col-md-4 col-form-label text-md-end">{{ __('Note') }}</label>
                    <div class="col-md-6">
                        <input id="note" type="text" class="form-control @error('note') is-invalid @enderror" name="note" value="{{ old('note') }}" >
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
          <h4 class="modal-title">Working Organization Details</h4>
        </div>
        <div class="modal-body" id="details">
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="container" >
    <div class="row justify-content-center">
        <div id="first_column" class="col-md-10 offset-3 my-3">
            <div class="card">
                <div class="card-header">
                    <b>{{ __('Working Organization') }}</b>
                    <div class="float-right">
                        <button type="button" class="btn btn-success btn-sm"  id="add-btn" >Add Working Orgaization</button>
                    </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                            <!-- <th class="py-1">Code</th> -->
                            <th class="py-1">Name</th>
                            <th class="py-1">Type Of Location</th>
                            <th class="py-1">Type</th>
                            <th class="py-1">Human Entity</th>
                            <th class="py-1">Location</th>
                            <th class="py-1">Note</th>
                            <th class="py-1">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($organizations as $organization )
                            <tr id="row_{{$organization-> id}}">
                                <!-- <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$organization -> code}}</td> -->
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$organization -> name}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$organization -> typeoflocation}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$organization -> type}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$organization -> humanName}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$organization -> city}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$organization -> note}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 90px; ">
                                    <i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745;  " data-id="{{$organization-> id}}"> <span style="color:black;">|</span> </i>
                                    <i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="{{$organization-> id}}"> <span style="color:black;">|</span> </i> 
                                    <i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="{{$organization-> id}}"></i>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
</div>
                    <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:40px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function()
    {
        $(window).on('load', function() {
        // Check if the element with ID "menu_techreferred" exists.
            $('#menu_workingOrganizations').addClass('bg-primary');
            $('#menu_workingOrganizations').parent().parent().children('a:first-child').addClass('bg-primary');
    });
        $.ajaxSetup({
                headers: { 
                    'x-csrf-token' : $('meta[name="csrf-token"]').attr('content')
                 }
            });
    });

    $('#add-btn').click(function(){

        $('#form-modal').modal('show');
        $('#form').trigger('reset');
        $('#modal_title').html('Add Working Organization');
        // $("#codeError").text('');
        $("#nameError").text('');
        $("#descriptionError").text('');
        $("#typeoflocationError").text('');
        $("#id_typeError").text('');
        $("#id_humanentityError").text('');
        $("#id_locationError").text('');
        $("#noteError").text('');
    });// create click event end

    $('body').on('click' , '#update-btn' , function(){
    $('#form').trigger('reset');
    $('#form-modal').modal('show');
    $('#modal_title').html('Update Working Organization');
        // $("#codeError").text('');
        $("#nameError").text('');
        $("#descriptionError").text('');
        $("#typeoflocationError").text('');
        $("#id_typeError").text('');
        $("#id_humanentityError").text('');
        $("#id_locationError").text('');
        $("#noteError").text('');
    var rowID = $(this).data('id');
    var url = 'orgPerformingWorkUpdatePage/'+rowID;
            $.ajax({
                type: 'GET',
                url: url,
                success: function(response) {
                    $.each(response.row , function(index , item){
                        $('#id').val(item.id);
                        // $('#code').val(item.code);
                        $('#name').val(item.name);
                        $('#description').val(item.description);
                        $('#typeoflocation').val(item.typeoflocation);
                        $('#id_type').val(item.id_type);
                        $('#id_humanentity').val(item.id_humanentity);
                        $('#id_location').val(item.id_location);
                        $('#note').val(item.note );
                    });
                },
            });
}); // update click event end

$('#form').submit(function(){
          
          event.preventDefault();
          var formData = $(this).serialize();
          var inpID = $('#id').val();
        // $("#codeError").text('');
        $("#nameError").text('');
        $("#descriptionError").text('');
        $("#typeoflocationError").text('');
        $("#id_typeError").text('');
        $("#id_humanentityError").text('');
        $("#id_locationError").text('');
        $("#noteError").text('');
          if(inpID)
          {
              $.ajax({
                  type: 'POST',
                  url: '{{ route("orgPerformingWorkUpdate") }}',
                  data: formData,

                  success: function(response)
                  {

                      if(response.errors)
                      {
                        $.each(response.errors , function(key , value){
                            $('#'+key+'Error').text(value);
                        });

                        //   $("#code").val(response.oldInput.code);
                          $("#name").val(response.oldInput.name);
                          $("#description").val(response.oldInput.description);
                          $("#typeoflocation").val(response.oldInput.typeoflocation);
                          $("#id_type").val(response.oldInput.id_type);
                          $("#id_humanentity").val(response.oldInput.id_humanentity);
                          $("#id_location").val(response.oldInput.id_location);
                          $("#note").val(response.oldInput.note);

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
                      }, 2000);

                      var data = $('#data-table tbody');
                      $.each(response.updateEQ , function(index , item){
                          var row1 = 
                          '<tr id="row_'+item.id+'">'+
                            //   '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.code + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.name + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.typeoflocation + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.type + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.humanName + item.humanSurName + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.city + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.note + '</td>' +
                              '<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 90px; padding-top:15px;">'+
                                  '<i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745; " data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+
                                  '<i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+ 
                                  '<i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="'+item.id+'"></i>'+
                              '</td>'+
                          '</tr>';
                          var row_id = $('#row_'+item.id).replaceWith(row1);
                      });
                          $('#form-modal').modal('hide');
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
                  url: '{{ route("orgPerformingWorkCreate") }}',
                  data: formData,

                  success: function(response)
                  {
                    console.log(response.eqRow);
                      if(response.errors)
                      {
                        $.each(response.errors , function(key , value){
                            $('#'+key+'Error').text(value);
                        });

                        //   $("#code").val(response.oldInput.code);
                          $("#name").val(response.oldInput.name);
                          $("#description").val(response.oldInput.description);
                          $("#typeoflocation").val(response.oldInput.typeoflocation);
                          $("#id_type").val(response.oldInput.id_type);
                          $("#id_humanentity").val(response.oldInput.id_humanentity);
                          $("#id_location").val(response.oldInput.id_location);
                          $("#note").val(response.oldInput.note);

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
               $.each(response.eqRow , function(index , item){
                   var row = '<tr id="row_'+item.id+'">'+
                    // '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.code + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.name + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.typeoflocation + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.type + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.humanName + item.humanSurName + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.city + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.note + '</td>' +
                              '<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 90px; padding-top:15px;">'+
                                  '<i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745; " data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+
                                  '<i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+ 
                                  '<i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="'+item.id+'"></i>'+
                              '</td>'+
                             '</tr>';
                                  data1.append(row);
                   });
                   $('#form-modal').modal('hide');
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
            var url = 'orgPerformingWorkRead/' + id;
             $.ajax({
                type: 'GET',
                url: url,

                success: function(response) {

                    $.each(response.data , function(index , item){
                        var descp ='<p>'+ 
                '<span style="font-weight:700;">Code: </span>'
                +item.code+ '</p>'+
                '<span style="font-weight:700;">Name: </span>'
                +item.name+ '</p>'+
                '<span style="font-weight:700;">Description: </span>'
                +item.description+ '</p>'+
                '<span style="font-weight:700;">Type Of Location: </span>'
                +item.typeoflocation+ '</p>'+
                '<p>'+ '<span  style="font-weight:700;">Type : </span>'
                +item.type+'</p>'+
                '<p>'+ '<span  style="font-weight:700;">Human Entity : </span>'
                +item.humanName+'</p>'+
                '<p>'+ '<span  style="font-weight:700;">Location : </span>'
                +item.city+'</p>'+
                '<p>'+ '<span  style="font-weight:700;">Note : </span>'
                +item.note+'</p>';
                data.append(descp);
                });

                }
             });
        });

        $('body').on('click' , '#delete-btn' , function(){
    var id = $(this).data('id');
    var url = 'orgPerformingWorkDelete/' + id;
    $.ajax({
                type: 'GET',
                url: url,

                success: function(response) {
                    $('#row_'+id).remove();
                    
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
                        }, 2000);
            }
    });
});
</script>

@endsection
