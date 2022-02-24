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
   
    <h1>Add a New Service</h1>
    <p>Please fill up the form and submit to add a new service</p>
    <form style="padding-top: 2rem; padding-bottom: 2rem;" method="post" action="{{url('service')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Enter Service Title</label>
            <input class="form-control" type="text" placeholder="Enter Title" name="title" id="title"
                required>
        </div>
        
        <div class="form-group">
            <label for="detail">Write Description:</label>
            <textarea rows="6" placeholder="Enter Detail" name="detail" id="detail"></textarea>
        </div>
        



        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" id="image" name="image" class="form-control-file">
            
        </div>
        <br>
        
        <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" style="width: 100%">
        </div>
    </form>





</div>




@endsection
