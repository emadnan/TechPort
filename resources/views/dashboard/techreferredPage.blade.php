@extends('layouts.app')
@include('sidebar')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="modal fade" id="form-modal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="modal_title">{{ __('Create Technology Referred') }}</h4>
        </div>
        <div class="modal-body">
                <form id="form">
                        <div class="col-md-6">
                            <input id="id" type="hidden" class="form-control" name="id">
                        </div>
                        <div class="row mb-3">
                            <label for="techarea" class="col-md-4 col-form-label text-md-end">{{ __('Technolgy Area') }}</label>

                            <div class="col-md-6">
                                <select id="techarea" type="text" class="form-control @error('techarea') is-invalid @enderror" name="techarea" value="{{ old('techarea') }}" autocomplete="techarea" autofocus required>
                                    <option selected value="">SELECT</option>
                                    @foreach ($areas as $id=>$area )
                                    <option value="{{$area-> id}}">{{$area-> techarea}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger small" id="techareaError"></span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="techsector" class="col-md-4 col-form-label text-md-end">{{ __('Technolgy Sector') }}</label>

                            <div class="col-md-6">
                                <select id="techsector" class="form-control @error('techsector') is-invalid @enderror" name="techsector" value="{{ old('techsector') }}" autocomplete="techsector" autofocus required>
                                    <option selected value="">SELECT</option>
                                    @foreach ($sectors as $id=>$sector )
                                    <option value="{{$sector-> id}}">{{$sector-> techsector}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger small" id="techsectorError"></span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="techniche" class="col-md-4 col-form-label text-md-end">{{ __('Technolgy Niche') }}</label>

                            <div class="col-md-6">
                                <select id="techniche" class="form-control @error('techniche') is-invalid @enderror" name="techniche" value="{{ old('techniche') }}" autocomplete="techniche" autofocus required>
                                    <option selected value="">SELECT</option>
                                    @foreach ($niches as $id=>$niche )
                                    <option value="{{$niche-> id}}">{{$niche-> techniche}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger small" id="technicheError"></span>
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
        </div>
<!-- Add techreferred Model -->

<!--View Modal content-->

<div class="modal fade " id="view-modal" role="dialog">
    <div class="modal-dialog" style="left: -100px;">
      <div class="modal-content" style="width: 160%;">
        <div class="card-header">
          <h4 class="modal-title">Technology Sector Details</h4>
        </div>
        <div class="modal-body" id="details">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- View Model End -->


<div class="container" >
    <div class="row justify-content-center">
        <div id="first_column" class="col-md-10 offset-3 my-3">
            <div class="card">
                <div class="card-header">
                    <b>{{ __('Technology Referred') }}</b>
                    <div class="float-right">
                        <button type="button" class="btn btn-success btn-sm"  id="add-btn" > Add Technology Referred</button>
                    </div>
                </div>
                <div class="card-body">
                  <table id="data-table" class="table table-bordered table-striped">
                    <thead>
                        <th class="py-1">Technology Area</th>
                        <th class="py-1">Technology Sector</th>
                        <th class="py-1">Technolgy Niche</th>
                        <th class="py-1">Actions</th>
                    </thead>
                    <tbody>
                        @foreach ($techrefs as $id=>$techref)
                        <tr id="row_{{$techref-> id}}">
                            <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$techref->area}}</td>
                            <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$techref->sector}}</td>
                            <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">{{$techref->niche}}</td>
                            <td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 90px;">
                                <i id="view-btn" class="fa-solid fa-eye fa-lg" style="color:#28A745;  " data-id="{{$techref-> id}}"> <span style="color:black;">|</span> </i>
                                <i id="update-btn" class="fa-solid fa-pen-to-square fa-lg" style="color:#E0A800;" data-id="{{$techref-> id}}"> <span style="color:black;">|</span> </i> 
                                <i id="delete-btn" class="fa-regular fa-trash-can fa-lg" style="color:#C82333;"  data-id="{{$techref-> id}}"></i>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript'>
     $(document).ready(function(){

        $(window).on('load', function() {
        // Check if the element with ID "menu_techreferred" exists.
        var $menuTechReferred = $('#menu_techreferred');
        if ($menuTechReferred.length) {
            // Add the 'bg-primary' class to the element.
            $menuTechReferred.addClass('bg-primary');

            // Scroll to the top offset of the element with a smooth animation.
            $('aside').animate(
                {
                    scrollTop: $menuTechReferred.offset().top
                },
                800, 
                function() {
                    console.log('error');
                }
            );
        }
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
           $('#modal_title').html('Add Technology Referred');
           $("#techareaError").text('');
           $("#techsectorError").text('');
           $("#technicheError").text('');
        });

        $('body').on('click' , '#update-btn' , function(){
    $('#form').trigger('reset');
    $('#form-modal').modal('show');
    $('#modal_title').html('Update Technology Sector');
    $("#techareaError").text('');
    $("#techsectorError").text('');
    $("#technicheError").text('');
    var rowID = $(this).data('id');
    var url = 'techReferredUpdatePage/'+rowID;
            $.ajax({
                type: 'GET',
                url: url,
                success: function(response) {
                    $.each(response.row , function(index , item){
                        $('#id').val(item.id);
                        $('#techarea').val(item.id_techarea);
                        $('#techsector').val(item.id_techsector);
                        $('#techniche').val(item.id_techniche);
                    });
                },
            });
}); // update click event end


        $('#form').submit(function(){
            event.preventDefault();
            var formData = $(this).serialize();
            var inpID = $('#id').val();    
            $("#techareaError").text('');
           $("#techsectorError").text('');
           $("#technicheError").text('');
           if(inpID)
            {
                $.ajax({
                    type: 'POST',
                    url: '{{ route("techReferredUpdate") }}',
                    data: formData,

                    success: function(response)
                    {

                        if(response.errors)
                        {   
                            $("#techareaError").text(response.errors.techarea);
                            $("#techsectorError").text(response.errors.techsector);
                            $("#technicheError").text(response.errors.techniche);

                            $("#techarea").val(response.oldInput.techarea);
                            $("#techsector").val(response.oldInput.techsector);
                            $("#techniche").val(response.oldInput.techniche);
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
                                '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.area + '</td>' +
                                '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.sector + '</td>'+ 
                                '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.niche+'</td>'+
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
                    url: '{{ route("techreferredCreate") }}',
                    data: formData,

                    success: function(response)
                    {
                        if(response.errors)
                        {
                            $("#techareaError").text(response.errors.techarea);
                            $("#techsectorError").text(response.errors.techsector);
                            $("#technicheError").text(response.errors.techniche);

                            $("#techarea").val(response.oldInput.techarea);
                            $("#techsector").val(response.oldInput.techsector);
                            $("#techniche").val(response.oldInput.techniche);
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
                     var row = '<tr id="row_'+item.id+'">'+
                                '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.area + '</td>' +
                                '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">' + item.sector + '</td>'+ 
                                '<td class="py-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px; ">'+item.niche+'</td>'+
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
            var url = 'techReferredRead/' + id;
             $.ajax({
                type: 'GET',
                url: url,

                success: function(response) {
                   
                    $.each(response.data , function(index , item){
                        var descp ='<p>'+ 
                '<span style="font-weight:700;">Technology Area : </span>'
                +item.area+ '</p>'+
                '<p>'+ '<span  style="font-weight:700;">Technology Sector : </span>'
                +item.sector+'</p>'+
                '<p>'+ '<span style="font-weight:700;"> Technology Niche : </span>'+item.niche+'</p>';
                data.append(descp);
                });

                }
             });
        });


        $('body').on('click' , '#delete-btn' , function(){
    var id = $(this).data('id');
    var url = 'techReferredDelete/' + id;
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
