@extends('layouts.app')
@include('sidebar')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Create/Update Modal content-->
<div class="modal fade" id="definition-modal" role="dialog">
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
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value= "{{ old ('name') }}" autocomplete="name" autofocus>
                        <span class="text-danger small" id="nameError"></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="definition" class="col-md-4 col-form-label text-md-end">{{ __('Definition') }}</label>
                    <div class="col-md-6">
                        <input id="definition" type="text" class="form-control @error('definition') is-invalid @enderror" name="definition" value= "{{ old ('definition') }}" autocomplete="definition" autofocus>
                        <span class="text-danger small" id="definitionError"></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="report" class="col-md-4 col-form-label text-md-end">{{ __('Report') }}</label>
                    <div class="col-md-6">
                        <input id="report" type="text" class="form-control @error('report') is-invalid @enderror" name="report" value="{{ old('report') }}">
                        <span class="text-danger small" id="reportError"></span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="note" class="col-md-4 col-form-label text-md-end">{{ __('Note') }}</label>
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
          <h4 class="modal-title">Definition Details</h4>
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
        <div id="first_column" class="col-md-10 offset-3 my-3 ">
            <div class="card">
                <div class="card-header">
                    <b>{{ __('Definitions') }}</b>
                    <div class="float-right">
                        <button type="button" class="btn btn-success btn-sm"  id="add-btn" >Add Definition </button>
                    </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                            <th class="py-1">Name</th>
                            <th class="py-1">Definition</th>
                            <th class="py-1">Report</th>
                            <th class="py-1">Note</th>
                            <th class="py-1">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $id=>$definitions )
                            <tr id="row_{{$definitions-> id}}" >
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 130px; ">{{$definitions -> name}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 130px; ">{{$definitions -> definition}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 130px; ">{{$definitions -> report}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 130px; ">{{$definitions -> note}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 80px; ">
                                    <i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745;  " data-id="{{$definitions-> id}}"> <span style="color:black;">|</span> </i>
                                    <i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="{{$definitions-> id}}"> <span style="color:black;">|</span> </i> 
                                    <i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="{{$definitions-> id}}"></i>
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

<script  type="text/javascript">

$(document).ready(function(){
    $(window).on('load', function() {
        // Check if the element with ID "menu_techreferred" exists.
            $('#menu_definitions').addClass('bg-primary');
    });
        $.ajaxSetup({
                headers: { 
                    'x-csrf-token' : $('meta[name="csrf-token"]').attr('content')
                 }
        });

//Add button click event
        $('#add-btn').click(function(){
        $('#definition-modal').modal('show');
        $('#form').trigger('reset');
    $('#modal_title').html('Add Definition');
    $("#nameError").text('');
    $("#definitionError").text('');
    $("#reportError").text('');
    $("#noteError").text('');
    }); // create click event end

    //Update button click event
    $('body').on('click' , '#update-btn' , function(){
    $('#form').trigger('reset');
    $('#definition-modal').modal('show');
    $('#modal_title').html('Update Definition');
    $("#nameError").text('');
    $("#definitionError").text('');
    $("#reportError").text('');
    $("#noteError").text('');
    var rowID = $(this).data('id');
    var url = 'definitionUpdatePage/'+rowID;
            $.ajax({
                type: 'GET',
                url: url,
                success: function(response) {
                    $.each(response.row , function(index , item){
                        $('#id').val(item.id);
                        $('#name').val(item.name);
                        $('#definition').val(item.definition);
                        $('#report').val(item.report);
                        $('#note').val(item.note);
                    });
                },
            });
}); // update click event end

//Form Submit event
$('#form').submit(function(){
          
          event.preventDefault();
          var formData = $(this).serialize();
          var inpID = $('#id').val();
          $("#nameError").text('');
          $("#definitionError").text('');
          $("#reportError").text('');
          $("#noteError").text('');
          if(inpID)
          {
              $.ajax({
                  type: 'POST',
                  url: '{{ route("definitionUpdate") }}',
                  data: formData,

                  success: function(response)
                  {

                      if(response.errors)
                      {
                          $("#nameError").text(response.errors.name);
                          $("#definitionError").text(response.errors.definition);
                          $("#reportError").text(response.errors.report);
                          $("#noteError").text(response.errors.note);

                          $("#name").val(response.oldInput.name);
                          $("#definition").val(response.oldInput.definition);
                          $("#report").val(response.oldInput.report);
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
                      }, 5000);

                      var data = $('#data-table tbody');
                      $.each(response.updateDEF , function(index , item){
                          var row1 = 
                          '<tr id="row_'+item.id+'">'+
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.name + '</td>' +
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.definition + '</td>'+ 
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.report+'</td>'+
                              '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.note+'</td>'+
                              '<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 80px; padding-top:15px;">'+
                                  '<i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745; " data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+
                                  '<i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+ 
                                  '<i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="'+item.id+'"></i>'+
                              '</td>'+
                          '</tr>';
                          var row_id = $('#row_'+item.id).replaceWith(row1);
                      });
                      $('#definition-modal').modal('hide');
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
                    url: '{{ route("definitionCreate") }}',
                    data: formData,

                    success: function(response)
                    {
                        if(response.errors)
                        {
                            $("#nameError").text(response.errors.name);
                          $("#definitionError").text(response.errors.definition);
                          $("#reportError").text(response.errors.report);
                          $("#noteError").text(response.errors.note);

                          $("#name").val(response.oldInput.name);
                          $("#definition").val(response.oldInput.definition);
                          $("#report").val(response.oldInput.report);
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
                        }, 5000);
                        var data1 = $('#data-table tbody');
                 $.each(response.addRow , function(index , item){
                    console.log(item.definition);
                     var row = '<tr id="row_'+item.id+'">'+
                                 '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.name + '</td>' +
                                 '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.definition + '</td>'+ 
                                 '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.report+'</td>'+
                                 '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.note+'</td>'+
                                 '<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 80px; padding-top:15px;">'+
                                    '<i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745; " data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+
                                    '<i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+ 
                                    '<i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="'+item.id+'"></i>'+
                                '</td>'+
                               '</tr>';
                                    data1.append(row);
                     });
                     $('#definition-modal').modal('hide');
                     $('#form').trigger('reset');
                     $('#id').val(null);
    }
                    }
                });
            }
        
});//form submit event end here

 $('body').on('click' , '#view-btn' , function(){
             $('#view-modal').modal('show');
             var id = $(this).data('id');
            var data = $('#details');
            data.empty(); 
            var url = 'definitionRead/' + id;
             $.ajax({
                type: 'GET',
                url: url,

                success: function(response) {
                   
                    $.each(response.data , function(index , item){
                        var descp ='<p>'+ 
                '<span style="font-weight:700;">Name : </span>'
                +item.name+ '</p>'+
                '<p>'+ '<span  style="font-weight:700;">Definition : </span>'
                +item.definition+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> Report : </span>'+item.report+'</p>';
                '<p>'+ '<span style="font-weight:700;"> Note : </span>'+item.note+'</p>';
                
                data.append(descp);
                });
                }
             });
        });

        $('body').on('click' , '#delete-btn' , function(){
    var id = $(this).data('id');
    var url = 'definitionDelete/' + id;
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
                        }, 5000);
            }
    });
});

    });
</script>
@endsection