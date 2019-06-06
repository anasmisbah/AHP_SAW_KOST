@extends('layouts.app')
@section('content')
<section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>User Profile</h2>
      </div>
    </div>

    <div class="container">
        <form action="{{ route('user.updateprofile') }}" method="post" role="form" class="contactForm" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4">
                    <img id="preview-img" src="{{ asset('storage/'.Auth::user()->avatar) }}" height="200px" width="200px" alt="" class="mb-4">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="avatar" name="avatar" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="avatar">Choose Picture</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-8">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <div class="form-group">
                        <input type="text" value="{{ Auth::user()->name }}" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" value="{{ Auth::user()->email }}" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" id="password" placeholder="password (Opsional)" />
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Update Profile</button></div>
                </div>
                </div>
            </div>
        </form>
    </div>
  </section><!-- #contact -->

@endsection
@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(function(){
            $('#avatar').on('change', function() {
                        readURL(this);
                    });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview-img').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
            
            var status = '{{ session("status") }}'
            if (status) {
                swal('Update Berhasil',status,'success')
            }

        })
    </script>
@endsection