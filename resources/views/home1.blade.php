@extends('index')

@section('content')
    <!-- Reservation Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">Online Registration</h1>
                                <h1 class="text-white">What are you waiting for?
                                     sign up and study english with us!</h1>
                            </div>
                          
                        
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                           
                            <form method="post" action='/prosestambahdaftar'>
                            @csrf
                            
                                <div class="form-group">
                                    <input class="form-control @error('nama') is-invalid @enderror bg-transparent border-primary p-4" id="Name" placeholder="Name" name="Name" require>
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('nama') is-invalid @enderror bg-transparent border-primary p-4" id="Phone" placeholder="Phone" name="Phone" require>
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('nama') is-invalid @enderror bg-transparent border-primary p-4" id="Email" placeholder="Email" name="Email" require>
                                </div>
                               
                                <div class="form-group">
            
                                        <input class="form-control @error('nama') is-invalid @enderror bg-transparent border-primary p-4"  id="Date"  placeholder="Date" name="Date" require>
                                    </div>
                                </div>
                        
                              
                                
                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->

@endsection