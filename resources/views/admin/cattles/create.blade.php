@extends('layouts.admin')
@section('custom_headers')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        height: "300",
        selector: 'textarea'
    });

</script>
@endsection
@section('content')
<div class="container" style="padding-top: 2rem;">
   
    <h1>Add a New Cattle</h1>
    <p>Please fill up the form and submit to add a new cattle</p>
    <form style="padding-top: 2rem; padding-bottom: 2rem;" method="post" action="{{url('cattle')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="cattle_title">Enter Cattle ID</label>
            <input class="form-control" type="text" placeholder="Enter Title" name="cattle_title" id="cattle_title"
                required>
        </div>
        {{-- <div class="form-group">
            <a class="float-right" href="{{ route('cattle.create') }}"><i class="fas fa-plus"
                    style="margin-right: .5rem;"></i>Create New Category</a>
            <label for="category">Select Category:</label>

            <select class="form-control" id="category" name="category">
                <option value="1">Category One</option>
                <option value="2">Category Two</option>
                <option value="3">Category Three</option>
            </select>
        </div> --}}
        <div class="form-group">
            <label for="cattle_detail">Write Description:</label>
            <textarea rows="6" placeholder="Enter Cattle Detail" name="cattle_detail" id="cattle_detail"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">BDT</span>
              </div>
              <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price" aria-describedby="basic-addon1" autocomplete="off">
            </div>
        </div>



        <div class="form-group">
            <label for="cattle_video">Enter YouTube link of the Cattle (Optional)</label>
            <input class="form-control" type="url" placeholder="Enter YouTube Link" name="cattle_video"
                id="cattle_video">
        </div>
        <div class="form-group">
            @include('includes.cropprev', ['label'=>'Please Select Cover Photo', 'ratio'=>4/3, 'prev_height'=>240, 'prev_width'=>320])
        </div>
        <br>
        @include('includes.multipleprev')
        <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" style="width: 100%">
        </div>
    </form>



    {{-- for future iframe --}}

    {{-- @php
        $newUrl="";
        $myurl="https://www.youtube.com/watch?v=RTEr_HpBf3o";
        $newUrl=preg_replace(
        "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
        "<iframe src=\"//www.youtube.com/embed/$2\" width='100%' height='100%' allowfullscreen></iframe>",
        $myurl
    ); 
    @endphp

<p>test link here:</p>
{!! $newUrl !!} --}}

</div>




@endsection
