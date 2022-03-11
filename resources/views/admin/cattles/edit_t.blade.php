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

    <h1>Update Cattle</h1>
    <p>Please fill up the form and submit to update the cattle data</p>
    <form style="padding-top: 2rem; padding-bottom: 2rem;" method="post" action="{{url('cattle')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="cattle_title">Enter Cattle ID</label>
            <input class="form-control" type="text" placeholder="Enter Title" name="cattle_title" id="cattle_title" value="{{$cattle->name}}"
                required>
        </div>

        <div class="form-group">
            <label for="cattle_detail">Write Description:</label>
            <textarea rows="6" placeholder="Enter Cattle Detail" name="cattle_detail" id="cattle_detail">{{$cattle->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">BDT</span>
              </div>
              <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price" aria-describedby="basic-addon1" autocomplete="off" value="{{$cattle->price}}">
            </div>
        </div>



        <div class="form-group">
            <label for="cattle_video">Enter YouTube link of the Cattle (Optional)</label>
            <input class="form-control" type="url" placeholder="Enter YouTube Link" name="cattle_video"
                id="cattle_video" value="{{$cattle->videoLink}}">
        </div>
        {{-- <div class="form-group">
            <label>Current Cover Photo:</label>
            <div class="image">
               <img src="{{asset('upload').'/'.$cattle->coverPhoto}}"
                        alt="cattle-image">

            </div>
        </div> --}}
        <div class="form-group">
            @include('includes.cropprev', ['label'=>'Please Select Cover Photo', 'ratio'=>4/3, 'prev_height'=>240, 'prev_width'=>320])
        </div>
        <br>
        <div class="form-group">

            @if($cattle->photos->count())

            <label>Current Photo Album (Uploading new will replace these):</label>
            @include('includes.media_gallery', ['images' => $cattle->photos])
            @endif
        </div>
        @include('includes.multipleprev')
        <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" style="width: 100%">
        </div>
    </form>


</div>




@endsection
