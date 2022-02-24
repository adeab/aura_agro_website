@extends('layouts.admin')
@section('content')
<section class="content-header">
  <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <div class="row">
            <div class="span d-flex align-items-center">
              <h1>Cattle Services</h1>
            </div>
            </div>
          </div>
      </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="container service-message">
      <div class="row">
        <div class="col-12">
          <form style="padding-top: 2rem; padding-bottom: 2rem;" method="post" action="{{url('appearance')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="service">Service Page Header Message:</label>
                <textarea class="form-control" rows="3" placeholder="Service Message" name="service" id="service">{{$appearance?$appearance->service_text:''}}</textarea>
            </div>
    
    
            
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" style="width: 100%" value="Update">
            </div>
        </form>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-12">
          
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <a class="btn btn-primary float-right" href="{{ route('service.create') }}"><i class="fas fa-plus" style="margin-right: .5rem;"></i>New</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-container"> 
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                 
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($services as $service)
                  <tr>
                    <td>
                      <img src="{{asset('upload').'/'.$service->image}}"
                                        alt="service_image" style="height: 7rem;">
                    </td>
                    <td>{{ $service->title }}</td>
                    
                    
                    <td>
                      <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Detail"><i class="fas fa-edit"></i></button>
                      <a href="{{ route('service-detail', $service->slug) }}" target="_blank" type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="View As Guest"><i class="far fa-eye"></i></a>
                      <meta name="csrf-token" content="{{ csrf_token() }}">
                      <button type="button" class="btn btn-link" style="color: red" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="deleteService({{$service->id}}, this)"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>    
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Image</th>
                    <th>Title</th>
                   
                    <th>Actions</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>

  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
         

          function deleteService(cattleid, thisBtn){
            var token = $("meta[name='csrf-token']").attr("content");
            let url = "{{ route('cattle.destroy', ['id' => ":cattleid"]) }}";
            url = url.replace(":cattleid", cattleid);
            // var cattle_id = cattleid;
            // console.log(cattle_id);
            
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: {
                  // id: cattleid,
                  _token: token,
                  _method: 'DELETE'
                },
                url: url,
                success: function (data) {
                    //
                } 
            });
          }
       </script>
@endsection

