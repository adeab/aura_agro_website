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
            <div class="card-body">
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
                      <span class="badge {{$cattle->bookingStatus?'badge-danger':'badge-success'}}">{{$cattle->bookingStatus?'Booked':'Available'}}</span>
                      
                    </td>
                    <td>Action Buttons</td>
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


@endsection

