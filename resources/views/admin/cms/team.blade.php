@extends('layouts.admin')
@section('content')
<div class="container" style="padding-top: 2rem;">
    
    <h2>Team Members</h2>

    <div class="row">
        <div class="col-12">
            <button class="btn btn-primary form-btn float-right">Add Member</button>    
        </div>
    </div>
    <br>
    
    
    <div class="card card-body form-area">
        <h4>Add New Member</h4>
        <hr>
        <form method="post" action="{{url('cms/team')}}" enctype="multipart/form-data">
            @csrf
            
            @include('includes.cropprev', ['label'=>'Team Member Image', 'ratio'=>1, 'prev_height'=>200, 'prev_width'=>200])
            <br>
            <div class="form-group">
                <label for="name">Enter Name</label>
                <input class="form-control" type="text" placeholder="Name" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="designation">Enter Designation</label>
                <input class="form-control" type="text" placeholder="Enter Designation" name="designation" id="designation" required>
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
            <th>Display Picture</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($team_members as $member)
            <tr>
              <td>
                <img src="{{asset('images/team').'/'.$member->image}}"
                                  alt="member-image" style="height: 7rem;">
              </td>
              <td>{{ $member->name }}</td>
              <td>{{ $member->designation }}</td>
             
              <td>
                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Member"><i class="fas fa-edit"></i></button>
                
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <button type="button" class="btn btn-link" style="color: red" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="deleteMember({{$member->id}}, this)"><i class="fas fa-trash-alt"></i></button>
               

              </td>
            </tr>    
          @endforeach
         
        
          
         
       
      
         
         
          </tbody>
          <tfoot>
            <tr>
                <th>Display Picture</th>
                <th>Name</th>
                <th>Designation</th>
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
            return text === "Add Member" ? "Cancel" : "Add Member";
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
