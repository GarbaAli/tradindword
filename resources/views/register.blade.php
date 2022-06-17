@extends('layout.header_footer')

@section('content')   
   
   <!-- end header -->
   <div class="contact" style="margin-top: 10%">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Register Now</h2>
                </div>
            </div>
                 <!-- Message derreurs -->
                 @if ($errors->any())
                 <div class="col-md-10 offset-md-1 alert alert-light alert-dismissible fade show" role="alert">
                         <ul>
                             @foreach ($errors->all() as $error)
                                 <li style="color: red">{{ $error }}</li>
                             @endforeach
                         </ul>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 @endif
                 <!-- Fin message errreurs -->
            <div class=" col-md-10 offset-md-1">
                <form id="request" action="{{ route('sendMail') }}" method="POST" class="main_form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 ">
                            <input  placeholder="Full Name" type="type" value="{{ old('username') }}" class="contactus @error('username') is-invalid @enderror" name="username" >
                        </div>
                        
                        <div class="col-md-6">
                            <input class="contactus" placeholder="Amount" type="text" id="amount" value="{{ old('amount') }}" name="amount" placeholder="Amount">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" type="email" id="email" value="{{ old('email') }}" name="email" placeholder="Email Adress">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="send_btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

@endsection