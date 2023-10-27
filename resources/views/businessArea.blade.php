@extends('layouts.app')
@include('sidebar')
@section('content')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">
    <div id="result"></div>
    <div class="row justify-content-center">
        <div class="col-md-10 offset-3 my-3">
            <div class="card">
                <div class="card-header">
                    <b>{{ __('Business Area') }}</b>
                    <div class="float-right">
                        <a href="{{route('dashboard')}}" class="btn btn-sm btn-primary">Back To Dashboard </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th class="py-1">Business Area</th>
                            <th class="py-1">Description</th>
                            <th class="py-1">Note</th>
                            <th class="py-1">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $id=>$business )
                            <tr id="business-list-{{$business-> id }}">
                                <td class="py-1">{{$business -> businessarea}}</td>
                                <td class="py-1">{{$business -> description}}</td>
                                <td class="py-1">{{$business -> note}}</td>
                                <td class="py-1" style="width: 230px;">
                                     {{-- <button type="button" id="view-btn" class="btn btn-success btn-sm py-0" >View</button>  <span>|</span>   --}}
                                     {{-- <button type="button" id="update-btn" class="btn btn-warning btn-sm py-0" data-toggle="modal" data-target="#business-modal">Update</button>  <span>|</span>  
                                     <button type="button" id="delete-btn" class="btn btn-danger btn-sm py-0">Delete</button>  <span>|</span>   --}}
                                     <a href=" {{route('businessAreaRead' , $business-> id)}} " class="btn btn-success btn-sm py-0">View</a>  <span>|</span>  
                                     <a href=" {{route('updateBusiness' , $business-> id)}} " class="btn btn-warning btn-sm py-0">Update</a>  <span>|</span>  
                                    <a href="{{route('businessAreaDelete', $business -> id)}}" class="btn btn-danger btn-sm py-0">Delete</a> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:40px;">
                            {{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#business-modal" id="add-btn" >Add Business Area</button> --}}
                            <a href="{{route('addBusiness')}}" class="btn btn-sm btn-primary">Add Business Area</a>
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

    // $(document).ready(function(){
        
    //     $.ajaxSetup({
    //             headers: { 
    //                 'x-csrf-token' : $('meta[name="csrf-token"]').attr('content')
    //              }
    //         });

        // $('#submit').click(function(){
        //     $.ajax({
        //         type: 'POST',
        //         url: '{{ route("businessAreaCreate") }}',
        //         data: 

        //         success: function(){

        //         }
        //     })
        // })
    // })


//     $('#add-btn').click(function(){
//         $('#form').trigger('reset');
//     $('#modal-title').html('Add Business Area');
//     $('#form').submit(function(){
//         event.preventDefault();
//         var formData = $(this).serialize();

//         $.ajax({
//                 type: 'POST',
//                 url: '{{ route("businessAreaCreate") }}',
//                 data: formData,

//                 success: function(response) {
//                     $('#result').html(response.message);
//                 }
//                 // error: function(){

//                 // }
//             });
//     })
 
// })

// $('#update-btn').click(function(){

//     $('#modal-title').html('Update Business Area');

    

// })

// $(document).ready(function() {
//         $('#submit').click(function() {
//             $.ajax({
//                 type: 'GET',
//                 url: '{{ route("businessArea") }}',

//                 success: function(data) {
//                 }
//             })
//         })
//     })
</script>
@endsection
