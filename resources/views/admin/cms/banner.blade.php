@extends('layouts.admin')
@section('content')
<div class="container" style="padding-top: 2rem;">
    
    <h2>Banners</h2>

    <div class="row">
        <div class="col-12">
            <button class="btn btn-primary form-btn float-right">Add New</button>    
        </div>
    </div>
    <br>
    
    
    <div class="card card-body form-area">
        <h4>Add New Banner</h4>
        <hr>
        <form method="post" action="{{url('cms/banner')}}" enctype="multipart/form-data">
            @csrf
            
            @include('includes.cropprev', ['label'=>'Banner Image', 'ratio'=>1920/739, 'prev_height'=>300, 'prev_width'=>500])
            <br>
            <div class="form-group">
                <label for="title">Enter Banner Title (Optional)</label>
                <input class="form-control" type="text" placeholder="Enter Title" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="subtitle">Enter Banner Subtitle (Optional)</label>
                <input class="form-control" type="text" placeholder="Enter Subtitle" name="subtitle" id="subtitle">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" style="width: 100%" class="form-control">
            </div>

        </form>
    </div>


    <div class="card-body table-container"> 
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($banners as $banner)
            <tr>
              <td>
                <img src="{{asset('upload').'/'.$banner->image}}"
                                  alt="aura-agro-logo" style="height: 7rem;">
              </td>
              <td>{{ $banner->title }}</td>
              <td>{{ $banner->subtitle }}</td>
             
              <td>
                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Banner"><i class="fas fa-edit"></i></button>
                
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <button type="button" class="btn btn-link" style="color: red" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="deleteBanner({{$banner->id}}, this)"><i class="fas fa-trash-alt"></i></button>
               

              </td>
            </tr>    
          @endforeach
         
        
          
         
       
      
         
         
          </tbody>
          <tfoot>
            <tr>
              <th>Image</th>
              <th>Title</th>
              <th>Subtitle</th>
              <th>Actions</th>
            </tr>
          </tfoot>
        </table>
      </div>
    

     




</div>

<script>
    $(".form-area").hide();
    $(".form-btn").click(function(){
        $(this).text(function(i, text){
            return text === "Add New" ? "Cancel" : "Add New";
        })
        $(".form-area").toggle();
        $(this).toggleClass('btn-primary');
        $(this).toggleClass('btn-danger');
    });

    function deleteCattle(cattleid, thisBtn){
        // var token = $("meta[name='csrf-token']").attr("content");
        // let url = "{{ route('cattle.destroy', ['id' => ":cattleid"]) }}";
        // url = url.replace(":cattleid", cattleid);
        // // var cattle_id = cattleid;
        // // console.log(cattle_id);
        
        // $.ajax({
        //     type: 'POST',
        //     dataType: 'json',
        //     data: {
        //         // id: cattleid,
        //         _token: token,
        //         _method: 'DELETE'
        //     },
        //     url: url,
        //     success: function (data) {
        //         //
        //     } 
        // });
    }
</script>



@endsection
