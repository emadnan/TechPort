@extends('layouts.app')
@include('sidebar')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Create/Update Modal content-->
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
                    <label for="techarea" class="col-md-4 col-form-label text-md-end">{{ __('Technology Area') }}</label>
                    <div class="col-md-6">
                        <input id="techarea" type="text" class="form-control @error('techarea') is-invalid @enderror" name="techarea" value= "{{ old ('techarea') }}" autocomplete="techarea" autofocus>
                        <span class="text-danger small" id="techareaError"></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="techareadescription" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                    <div class="col-md-6">
                        <textarea id="techareadescription" type="text" class="form-control @error('techareadescription') is-invalid @enderror" name="techareadescription" value="{{ old('techareadescription') }}"></textarea>
                        <span class="text-danger small" id="techareadescriptionError"></span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="id_dm" class="col-md-4 col-form-label text-md-end">{{ __('ID_DM') }}</label>
                    <div class="col-md-6">
                        <input id="id_dm" type="text" class=" form-control @error('id_dm') is-invalid @enderror" name="id_dm" value="{{ old('id_dm') }}" >
                            <div id="dm_dropdown" style="display:none; overflow-y: auto; overflow-x:hidden; max-height:100px; min-width: 218px; border:1px solid #CED4DA; border-bottom:none;"></div>
                        <span class="text-danger small" id="id_dmError"></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="otme" class="col-md-4 col-form-label text-md-end">{{ __('OTME') }}</label>
                    <div class="col-md-6">
                        <input id="otme" type="text" class="form-control @error('otme') is-invalid @enderror" name="otme" value="{{ old('otme') }}" >
                        <span class="text-danger small" id="otmeError"></span>
                    </div>
                </div>

                 <div class="row mb-3">
                    <label for="code" class="col-md-4 col-form-label text-md-end">{{ __('CODE') }}</label>
                    <div class="col-md-6">
                        <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" >
                        <span class="text-danger small" id="codeError"></span>
                    </div>
                </div>

                <!-- <div  class="row mb-3">
                    <label for="id_techsector" class="col-md-4 col-form-label text-md-end">{{ __('Technolgy Sector') }}</label>
                    <div id="techSectorDropDown" class="col-md-6">
                        <select id="id_techsector" type="text" class="form-control @error('id_techsector') is-invalid @enderror" name="id_techsector" value="{{ old('id_techsector') }}" autocomplete="id_techsector" autofocus required>
                            <option selected value="">SELECT</option>
                            @foreach ($sectors as $sector )
                            <option value="{{$sector-> id}}">{{$sector->techsector}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 pt-1">
                       <button  class="btn btn-primary btn-sm addMoreSector">Add</button>
                    </div>
                </div> -->

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
          <h4 class="modal-title">Technology Area Details</h4>
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
                    <b>{{ __('Technology Areas') }}</b>
                    <div class="float-right">
                        <button type="button" class="btn btn-success btn-sm"  id="add-btn" >Add Technology Area</button>
                    </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                            <th class="py-1">Technology Area</th>
                            <th class="py-1">Description</th>
                            <!-- <th class="py-1">Id_dm</th> -->
                            <th class="py-1">Otme</th>
                            <th class="py-1">Note</th>
                            <th class="py-1">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($areas as $area )
                            <tr id="row_{{$area-> id}}">
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$area -> techarea}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$area -> techareadescription}}</td>
                                <!-- <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$area -> id_dm}}</td> -->
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$area -> otme}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$area -> code}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$area -> note}}</td>
                                <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 90px; ">
                                    <i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745;  " data-id="{{$area-> id}}"> <span style="color:black;">|</span> </i>
                                    <i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="{{$area-> id}}"> <span style="color:black;">|</span> </i> 
                                    <i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="{{$area-> id}}"></i>
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
   $(document).ready(function(){
    $(window).on('load', function() {
        // Check if the element with ID "menu_techreferred" exists.
            $('#menu_techarea').addClass('bg-primary');
            $('#menu_techarea').parent().parent().children('a:first-child').addClass('bg-primary');
            $('#menu_techarea').parent().parent().addClass('menu-is-opening menu-open');
    });
        $.ajaxSetup({
                headers: { 
                    'x-csrf-token' : $('meta[name="csrf-token"]').attr('content')
                 }
            });
    
    var newSector ='<select id="id_techsector" type="text" class="mt-2 form-control @error('id_techsector') is-invalid @enderror" name="id_techsector" value="{{ old('id_techsector') }}" autocomplete="id_techsector" autofocus required>'+
                    '<option selected value="">SELECT</option>'+
                    ' @foreach ($sectors as $sector )'+
                    '<option value="{{$sector-> id}}">{{$sector->techsector}}</option>'+
                    '@endforeach'+
                '</select>';
    
    $('.addMoreSector').click(function(){
        $('#techSectorDropDown').append(newSector);
    });        

    $('#add-btn').click(function(){
        $('#form-modal').modal('show');
        $('#form').trigger('reset');
    $('#modal_title').html('Add Technology Area');
    $("#techareaError").text('');
    $("#techareadescriptionError").text('');
    $("#id_dmError").text('');
    $("#otmeError").text('');
    $("#codeError").text('');
    $("#noteError").text('');
    $("#id_techsector").val('');
    $('#techSectorDropDown').empty();
    $('#techSectorDropDown').append(newSector);
    $("input[name='selected_techsector']").remove();
    }) // create click event end


$('body').on('click' , '#update-btn' , function(){
    $('#form').trigger('reset');
    $('#form-modal').modal('show');
    $('#modal_title').html('Update Technology Area');
    $("#techareaError").text('');
    $("#techareadescriptionError").text('');
    $("#id_dmError").text('');
    $("#otmeError").text('');
    $("#codeError").text('');
    $("#noteError").text('');
    $("#id_techsector").val('');
    $('#techSectorDropDown').empty();
    $('#techSectorDropDown').append(newSector);
    $("input[name='selected_techsector']").remove();

    var rowID = $(this).data('id');
    var url = 'techAreaUpdatePage/'+rowID;
            $.ajax({
                type: 'GET',
                url: url,
                success: function(response) {
                    $.each(response.row , function(index , item){
                        $('#id').val(item.id);
                        $('#techarea').val(item.techarea);
                        $('#techareadescription').val(item.techareadescription);
                        $('#id_dm').val(item.id_dm);
                        $('#otme').val(item.otme);
                        $('#code').val(item.code);
                        $('#note').val(item.note);
                    });
                },
            });
}); // update click event end

$('#form').submit(function(){
          
            event.preventDefault();
            var selectedValues = [];
            $('select[name="id_techsector"] option:selected').each(function() {
                selectedValues.push($(this).val());
            });

            // Append the array of selected values to a hidden input field
            $('<input>').attr({
                type: 'hidden',
                name: 'selected_techsector',
                value: selectedValues
            }).appendTo('#form');
            var formData = $(this).serialize();
            var inpID = $('#id').val();
            $("#techareaError").text('');
            $("#techareadescriptionError").text('');
            $("#id_techsectorError").text('');
            $("#id_techsectorError").text('');
            $("#id_dmError").text('');
            $("#otmeError").text('');
            $("#codeError").text('');
            $("#noteError").text('');
            if(inpID)
            {
                $.ajax({
                    type: 'POST',
                    url: '{{ route("techAreaUpdate") }}',
                    data: formData,

                    success: function(response)
                    {

                        if(response.errors)
                        {
                               var errorMessages = {
                                 'otme': 'The Otme field is required.',
                                 'code': 'The Code field is required.',
                                 'techarea': 'The Technology Area field is required.',
                                 'techareadescription': 'The Description field is required.',
                                };
                            $.each(response.errors, function (key, value) {
                            var customErrorMessage = errorMessages[key] || value;
                            $('#' + key + 'Error').text(customErrorMessage);
                             });
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

                        $.each(response.update , function(index , item){
                            var row1 = 
                            '<tr id="row_'+item.id+'">'+
                                '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.techarea + '</td>' +
                                '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.techareadescription + '</td>'+ 
                                // '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.id_dm+'</td>'+
                                '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.otme+'</td>'+
                                '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.code+'</td>'+
                                '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.note+'</td>'+
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
                    url: '{{ route("techAreaCreate") }}',
                    data: formData,

                    success: function(response)
                    {
                        if(response.errors)
                        {
                               var errorMessages = {
                                  'otme': 'The Otme field is required.',
                                  'code': 'The Code field is required.',
                                  'techarea': 'The Technology Area field is required.',
                                  'techareadescription': 'The Description field is required.',
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
                        var data = $('#data-table tbody');
                 $.each(response.newRow , function(index , item){
                    console.log(item.techarea);
                     var row = '<tr id="row_'+item.id+'">'+
                                 '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.techarea + '</td>' +
                                 '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.techareadescription + '</td>'+ 
                                //  '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.id_dm+'</td>'+
                                 '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.otme+'</td>'+
                                 '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.code+'</td>'+
                                 '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.note+'</td>'+
                                 '<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 90px; padding-top:15px;">'+
                                    '<i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745; " data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+
                                    '<i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="'+item.id+'"> <span style="color:black; padding-right:4px;">|</span> </i>'+ 
                                    '<i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="'+item.id+'"></i>'+
                                '</td>'+
                               '</tr>';
                                    data.append(row);
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
            var url = 'techAreaRead/' + id;
             $.ajax({
                type: 'GET',
                url: url,

                success: function(response) {
                   
                    $.each(response.data , function(index , item){
                        var descp ='<p>'+ 
                '<span style="font-weight:700;">Technology Area : </span>'
                +item.techarea+ '</p>'+
                '<p>'+ '<span  style="font-weight:700;">Description : </span>'
                +item.techareadescription+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> ID_DM : </span>'+item.id_dm+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> OTME : </span>'+item.otme+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> CODE : </span>'+item.code+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> Note : </span>'+item.note+'</p>';
                data.append(descp);
                });

                }
             });
        });


$('body').on('click' , '#delete-btn' , function(){
    var id = $(this).data('id');
    var url = 'techAreaDelete/' + id;
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

$('body').on('keyup' , '#id_dm' , function(){
    let dm_input = $(this).val();
    let tk = 'pky8SjkAVP6!UfTYMWY2--thnO8WKukhOkQGTzf4JVh!EvKN6jpSd7?Iqeln7lof';
    let data = {
        'dm' : dm_input,
        'tk' : tk,
    } 
    $.ajax({
                type: 'POST',
                url: '/fetchDataFromApi',
                data: data,
                success: function(response){
                    
                    var dropdown = $('#dm_dropdown');
                    dropdown.empty();
                    dropdown.show();
                    var array = response.data.records;
                    if(array)
                    {
                        $.each(array , function(index , item){
                        var row = '<a style="border-bottom:1px solid #CED4DA" class="dropdown-item p-2" >'+item.DM+'</a>'
                        // console.log(dropdown);
                       
                        dropdown.append(row);
                        // var $row = $(row);
                      

                    });
                    }
                }
            });
 
});

$('#dm_dropdown').on('click', 'a' ,  function() {
   var list =  $(this).html();
   $("#id_dm").val(list);
   console.log(list);
    $('#dm_dropdown').hide();
});
  

}); // document.ready end
  </script>
@endsection
