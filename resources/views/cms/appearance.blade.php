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
    
    <h2>Change Appearance of Landing Page</h2>
    <form style="padding-top: 2rem; padding-bottom: 2rem;" method="post" action="{{url('appearance')}}" enctype="multipart/form-data">
        @csrf
        {{-- <br><br> --}}
        <div class="form-group">
            <div class="row">
                <div class="col-md-5">
                    <i class="fab fa-facebook"></i>
                    <label for="youtube">Enter Facebook Page Link</label>
                </div>
                <div class="col-md-7">
                    <input class="form-control" type="text" placeholder="Facebook Page Link" name="facebook" id="facebook" value="{{$appearance?$appearance->facebook:''}}"
                required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-5">
                    <i class="fab fa-youtube"></i>
                    <label for="youtube">Enter Youtube Channel Link</label>
                </div>
                <div class="col-md-7">
                    <input class="form-control" type="text" placeholder="Youtube Channel Link" name="youtube" id="youtube" value="{{$appearance?$appearance->youtube:''}}"
                required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-5">
                    <i class="fas fa-mobile-alt"></i>
                    <label for="mobile">Enter Mobile Number</label>
                </div>
                <div class="col-md-7">
                    <input class="form-control" type="text" placeholder="Mobile Number" name="mobile" id="mobile" value="{{$appearance?$appearance->phone_number:''}}"
                required>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label for="about_us">Write About Us:</label>
            <textarea rows="6" placeholder="About Us" name="about_us" id="about_us">{{$appearance?$appearance->about_us:''}}</textarea>
        </div>
        <div class="form-group">
            <label for="address">Write Address:</label>
            <textarea rows="6" placeholder="Address" name="address" id="address">{{$appearance?$appearance->address:''}}</textarea>
        </div>
        <hr>
        <div class="form-group">
            
                    <label for="welcome_title">Enter Welcome Section Title</label>
               
                    <input class="form-control" type="text" placeholder="Welcome Title" name="welcome_title" id="welcome_title" value="{{$appearance?$appearance->welcome_header:''}}"
                required>
               
        </div>

        <div class="form-group">
            <label for="welcome">Welcome Message:</label>
            <textarea rows="3" placeholder="Welcome Message" name="welcome" id="welcome">{{$appearance?$appearance->welcome_message:''}}</textarea>
        </div>
        <hr>
        <div class="form-group">
            
                    <label for="team_title">Enter Team Section Title</label>
                
                    <input class="form-control" type="text" placeholder="Team Title" name="team_title" id="team_title" value="{{$appearance?$appearance->team_header:''}}"
                required>
                
        </div>

        <div class="form-group">
            <label for="team">Team Message:</label>
            <textarea rows="3" placeholder="Team Message" name="team" id="team">{{$appearance?$appearance->team_message:''}}</textarea>
        </div>






        



        
        <div class="form-group" style="margin-bottom: 1rem;">
            @if($appearance)
            <small>Current Logo: </small>
            <img src="{{asset('images/logo.png')}}"
                                        alt="aura-agro-logo">
            @endif
            @include('includes.cropprev', ['label'=>'Change current logo', 'ratio'=>1, 'prev_height'=>300, 'prev_width'=>300])
        </div>
        
        
        <div class="form-group">
            <input type="submit" class="form-control">
        </div>
    </form>




</div>




@endsection
