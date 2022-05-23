@extends('layouts.userlayout')
@section('title','Log In')
@section('menu')
@endsection

@section('login')
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        
                        <aside class="bg-grey bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                            <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">

                                

                                <div class="mb-4 mb-xl-0">
                                        <div class="my-5 text-center text-xl-start">
                                            
                                            <h1 class="display-5 fw-bolder text-white mb-2">CONNECT PEN</h1>
                                    
                                            <div class="fs-3 fw-bold text-white">Largest Author Community</div>
                                            
                                            
                                        </div>
                                        
                                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">

                                        
                                        
                                             <a class="btn  btn-success btn-lg px-4" href="/reg">Create New Account</a>
                                        </div>
                                            <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                                </div>
                                
                                <div class="ms-xl-4 ">
                                                        
                                
                                            <input class="form-control mb-2 " type="text" placeholder="Email address or phone number" aria-label="Email address or phone number" aria-describedby="button-newsletter" />

                                            
                                                
                                                <input class="form-control mb-2" type="password" placeholder="Password" aria-label="Password" aria-describedby="button-newsletter" />

                                            
                                            <a class="text-decoration-none" id="forgot_password" type="text">Forgotten password?</a>
                                            <a class="btn btn-primary " href="#features">Log In</a>


                                       
                                        
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </header>
           
                
            @endsection
        