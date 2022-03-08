@extends('layouts.admin')

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- @endsection --}}

@section('content')

<section class="content-header">
  <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <div class="row">
            {{-- <div class="span d-flex align-items-center">
              @include('includes.logo', ['height'=> '7rem'])
            </div> --}}
            <div class="span d-flex align-items-center">
              <h1>Cattle List</h1>
            </div>
            </div>
          </div>
          {{-- <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">DataTables</li>


              </ol>


          </div> --}}

      </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <a class="btn btn-primary float-right" href="{{ route('cattle.create') }}"><i class="fas fa-plus" style="margin-right: .5rem;"></i>Add New Cattle</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-container">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Cattle ID</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cattles as $cattle)
                  <tr>
                    <td>
                      <img src="{{asset('upload').'/'.$cattle->coverPhoto}}"
                                        alt="aura-agro-logo" style="height: 7rem;">
                    </td>
                    <td>{{ $cattle->name }}</td>
                    <td>{{ $cattle->price }}</td>
                    <td>
                      <button type="button" class="btn {{$cattle->bookingStatus?'btn-danger':'btn-primary'}} btn-sm" onclick="changeBookingStatus({{$cattle->id}}, this)" data-toggle="tooltip" data-placement="bottom" title="Click to change status"> {{$cattle->bookingStatus?'Booked':'Available'}}</button>
                    </td>
                    <td>
                        <a href="{{ route('cattle.edit', $cattle->id) }}" type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Detail"><i class="fas fa-edit"></i></a>
                      <a href="{{ route('cattle-detail', $cattle->slug) }}" target="_blank" type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="View As Guest"><i class="far fa-eye"></i></a>
                      <meta name="csrf-token" content="{{ csrf_token() }}">
                      <button type="button" class="btn btn-link" style="color: red" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="deleteRecord({{$cattle->id}}, this)"><i class="fas fa-trash-alt"></i></button>


                    </td>
                  </tr>
                @endforeach








                </tbody>
                <tfoot>
                  <tr>
                    <th>Image</th>
                    <th>Cattle ID</th>
                    <th>Price</th>
                    <th>Status</th>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
          function changeBookingStatus(cattleid, thisBtn) {
              $.ajax({
                type:'get',
                url:'/toggleStatus/'+cattleid,
                success:function() {
                  $(thisBtn).text(function(i, text){
                      return text === "Booked" ? "Available" : "Booked";
                  })
                  $(thisBtn).toggleClass('btn-primary');
                  $(thisBtn).toggleClass('btn-danger');
                }
             });
          }

          function deleteRecord(deleteid, thisBtn){
            swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {

                var token = $("meta[name='csrf-token']").attr("content");
                let url = "{{ route('cattle.destroy', ['id' => ":deleteid"]) }}";
                url = url.replace(":deleteid", deleteid);

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    data: {
                    // id: deleteid,
                    _token: token,
                    _method: 'DELETE'
                    },
                    url: url,
                    success:
                        //
                        $(thisBtn).parents('tr').remove()

                });
            }

          });

            // $(thisBtn).parents('tr').remove();


          }
       </script>
@endsection

