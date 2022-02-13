@extends('layouts.admin')
@section('content')
<div class="container" style="padding-top: 2rem;">
    
    <h2>Add Banners</h2>

    <p>        
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Button with data-target
    </button>
    </p>
    <div class="collapse" id="collapseExample">
    <div class="card card-body">
        <form style="padding-top: 2rem; padding-bottom: 2rem;" method="post" action="{{url('appearance')}}" enctype="multipart/form-data">
            @csrf
            @include('includes.cropprev', ['label'=>'Banner Image', 'ratio'=>1920/739, 'prev_height'=>300, 'prev_width'=>500])
        </form>
    </div>
    </div>

     




</div>




@endsection
