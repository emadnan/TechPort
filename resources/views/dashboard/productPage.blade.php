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

                <div class="row mb-3">
                    <label for="businessarea" class="col-md-4 col-form-label text-md-end">{{ __('Business Area') }}</label>
                    <div class="col-md-6">
                        <select id="businessarea" type="text" class="form-control @error('businessarea') is-invalid @enderror" name="businessarea" value="{{ old('businessarea') }}">
                            <option selected value="">SELECT</option>
                            @foreach ($areas as $area)
                            <option value="{{$area ->id}}">{{$area->businessarea}} </option>
                            @endforeach
                        </select>
                        <span class="text-danger small" id="businessareaError"></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                    <div class="col-md-6">
                        <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" ></textarea>
                        <span class="text-danger small" id="descriptionError"></span>
                    </div>
                </div>

                <!-- <div class="row mb-3">
                    <label for="id_pnc" class="col-md-4 col-form-label text-md-end">{{ __('Id_pnc') }}</label>
                    <div class="col-md-6">
                        <input id="id_pnc" type="text" class="form-control @error('id_pnc') is-invalid @enderror" name="id_pnc" value="{{ old('id_pnc') }}" >
                        <span class="text-danger small" id="id_pncError"></span>
                    </div>
                </div> -->

                <div class="row mb-3">
                    <label for="priority" class="col-md-4 col-form-label text-md-end">{{ __('Priority') }}</label>
                    <div class="col-md-6">
                        <select id="priority" type="text" class="form-control @error('priority') is-invalid @enderror" name="priority" value="{{ old('priority') }}">
                            <option selected value="">SELECT</option>
                            @foreach ($priorities as $priority)
                            <option value="{{$priority ->id}}">{{$priority->priority}} </option>
                            @endforeach
                        </select>
                        <span class="text-danger small" id="priorityError"></span>
                    </div>
                </div>

                
                <div class="row mb-3">
                    <label for="note" class="col-md-4 col-form-label text-md-end">{{ __('Note') }}</label>
                    <div class="col-md-6">
                        <textarea id="note" type="text" class="form-control @error('note') is-invalid @enderror" name="note" value="{{ old('note') }}" ></textarea>
                        <span class="text-danger small" id="noteError"></span>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="techreferred" class="col-md-4 col-form-label text-md-end">{{ __('Ref Tech') }}</label>
                    <div class="col-md-6">
                        <select id="techreferred" type="text" class="form-control @error('techreferred') is-invalid @enderror" name="techreferred" value= "{{ old ('techreferred') }}" autocomplete="techreferred" autofocus>
                            <option selected value="">SELECT</option>
                            @foreach ($techs as $tech)
                            <option value="{{$tech ->id}}">{{$tech ->techarea}} </option>
                            @endforeach
                        </select>
                            <span class="text-danger small" id="techreferredError"></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="requirement" class="col-md-4 col-form-label text-md-end">{{ __('Requirement') }}</label>
                    <div class="col-md-6">
                        <select id="requirement" type="text" class="form-control @error('requirement') is-invalid @enderror" name="requirement" value= "{{ old ('requirement') }}" autocomplete="requirement" autofocus>
                            <option selected value="">SELECT</option>
                            @foreach ($requirements as $requirement)
                            <option value="{{$requirement ->id}}">{{$requirement ->description}} </option>
                            @endforeach
                        </select>
                            <span class="text-danger small" id="requirementError"></span>
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
          <h4 class="modal-title">Product Details</h4>
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
    <div class="row justify-content-center"  style="width:120%;">
        <div id="first_column" class="col-md-10 offset-1 my-3" >
            <div class="card">
                <div class="card-header">
                    <b>{{ __('Products') }}</b>
                    <div class="float-right">
                        <button type="button" class="btn btn-success btn-sm"  id="add-btn" >Add Product</button>
                    </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                            <th class="py-1">Business Area</th>
                            <th class="py-1">Description</th>
                            <!-- <th class="py-1">ID_PNC</th> -->
                            <th class="py-1">Priority</th>
                            <th class="py-1">Note</th>
                            <th class="py-1">Ref Tech</th>
                            <th class="py-1">Requirement</th>
                            <th class="py-1">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($products as $product )
                            <tr id="row_{{$product-> id}}">
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$product -> businessarea}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$product -> description}}</td>
                                <!-- <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$product -> id_pnc}}</td> -->
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$product -> priority}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$product -> note}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$product -> techarea}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$product -> requirement}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 90px; ">
                                    <i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745;  " data-id="{{$product-> id}}"> <span style="color:black;">|</span> </i>
                                    <i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="{{$product-> id}}"> <span style="color:black;">|</span> </i> 
                                    <i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="{{$product-> id}}"></i>
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
            $('#menu_products').addClass('bg-primary');
            $('#menu_products').parent().parent().children('a:first-child').addClass('bg-primary');
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
        $('#modal_title').html('Add Product');
        $("#businessareaError").text('');
        $("#descriptionError").text('');
        // $("#id_pncError").text('');
        $("#priorityError").text('');
        $("#noteError").text('');
        $("#techreferredError").text('');
        $("#requirementError").text('');
    });// create click event end

    $('body').on('click' , '#update-btn' , function(){
    $('#form').trigger('reset');
    $('#form-modal').modal('show');
    $('#modal_title').html('Update Product');
    $("#businessareaError").text('');
        $("#descriptionError").text('');
        // $("#id_pncError").text('');
        $("#priorityError").text('');
        $("#noteError").text('');
        $("#techreferredError").text('');
        $("#requirementError").text('');
    var rowID = $(this).data('id');
    var url = 'productUpdatePage/'+rowID;
            $.ajax({
                type: 'GET',
                url: url,
                success: function(response) {
                    $.each(response.row , function(index , item){
                        $('#id').val(item.id);
                        $('#businessarea').val(item.id_businessarea);
                        $('#description').val(item.description);
                        // $('#id_pnc').val(item.id_pnc);
                        $('#priority').val(item.id_priority);
                        $('#note').val(item.note);
                        $('#techreferred').val(item.id_techreferred);
                        $('#requirement').val(item.id_requirement );
                    });
                },
            });
}); // update click event end

$('#form').submit(function(){
          
          event.preventDefault();
          var formData = $(this).serialize();
          var inpID = $('#id').val();
        $("#businessareaError").text('');
        $("#descriptionError").text('');
        // $("#id_pncError").text('');
        $("#priorityError").text('');
        $("#noteError").text('');
        $("#techreferredError").text('');
        $("#requirementError").text('');
          if(inpID)
          {
              $.ajax({
                  type: 'POST',
                  url: '{{ route("productUpdate") }}',
                  data: formData,

                  success: function(response)
                  {

                      if(response.errors)
                      {
                        $.each(response.errors , function(key , value){
                            $('#'+key+'Error').text(value);
                        });

                          $("#business").val(response.oldInput.id_businessarea);
                          $("#description").val(response.oldInput.description);
                        //   $("#id_pnc").val(response.oldInput.id_pnc);
                          $("#priority").val(response.oldInput.id_priority);
                          $("#note").val(response.oldInput.note);
                          $("#techreferred").val(response.oldInput.id_techreferred);
                          $("#requirement").val(response.oldInput.id_requirement);

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
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.businessarea + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.description + '</td>'+ 
                            //   '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.id_pnc + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.priority + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.note + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.techarea + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.requirement + '</td>' +
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
                  url: '{{ route("productCreate") }}',
                  data: formData,

                  success: function(response)
                  {
                    console.log(response.eqRow);
                      if(response.errors)
                      {
                        $.each(response.errors , function(key , value){
                            $('#'+key+'Error').text(value);
                        });

                          $("#businessarea").val(response.oldInput.id_businessarea);
                          $("#description").val(response.oldInput.description);
                          $("#id_pnc").val(response.oldInput.id_pnc);
                          $("#priority").val(response.oldInput.id_priority);
                          $("#note").val(response.oldInput.note);
                          $("#techreferred").val(response.oldInput.id_techreferred);
                          $("#requirement").val(response.oldInput.id_requirement);

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
                    '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.businessarea + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.description + '</td>'+ 
                            //   '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.id_pnc + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.priority + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.note + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.techarea + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.requirement + '</td>' +
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
            var url = 'productRead/' + id;
             $.ajax({
                type: 'GET',
                url: url,

                success: function(response) {

                    $.each(response.data , function(index , item){
                        var descp ='<p>'+ 
                '<span style="font-weight:700;">Business Area: </span>'
                +item.businessarea+ '</p>'+
                '<span style="font-weight:700;">Description: </span>'
                +item.description+ '</p>'+
                '<span style="font-weight:700;">ID_PNC: </span>'
                +item.id_pnc+ '</p>'+
                '<p>'+ '<span  style="font-weight:700;">Priority : </span>'
                +item.priority+'</p>'+
                '<p>'+ '<span  style="font-weight:700;">Note : </span>'
                +item.note+'</p>'+
                '<p>'+ '<span  style="font-weight:700;">Ref Tech : </span>'
                +item.techreferred+'</p>'+
                '<p>'+ '<span  style="font-weight:700;">Requirement : </span>'
                +item.requirement+'</p>';
                data.append(descp);
                });

                }
             });
        });

        $('body').on('click' , '#delete-btn' , function(){
    var id = $(this).data('id');
    var url = 'productDelete/' + id;
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
