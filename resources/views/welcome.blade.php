@extends('layouts.userlayout')
@section('title','CONNECT PEN - Largest Author Community')
@section('menu')
@endsection

@section('entry')
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                            
                                <h1 class="display-5 fw-bolder text-white mb-2">CONNECT PEN</h1>
                           
                                <div class="fs-3 fw-bold text-white">Largest Author Community</div>
                                <p class="lead fw-normal text-white-50 mb-4">Connect Pen helps you connect and share your thoughts with the people and earn money in your life.</p>
                                
                            </div>
                        </div>
                            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://i.guim.co.uk/img/media/cfa9d5667ecc480edae5622a8e36d51c665150aa/0_121_7123_4275/master/7123.jpg?width=1200&quality=85&auto=format&fit=max&s=d7d2d858686eaa50a439b9d71b2e092d" alt="..." />
                            </div>
                        <aside class="bg-grey bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <input class="form-control mb-2" type="text" placeholder="Email address or phone number" aria-label="Email address or phone number" aria-describedby="button-newsletter" />

                                <div class="input-group mb-2">
                                    
                                    <input class="form-control" type="text" placeholder="Password" aria-label="Password" aria-describedby="button-newsletter" />
                                   
                                </div>
                                <a class="text-decoration-none" id="forgot_password" type="text">Forgotten password?</a>
                                <a class="btn btn-primary " href="#features">Log In</a>
                            </div>
                            
                            <div class="ms-xl-4">
                                
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    
                                    <a class="btn  btn-success btn-lg px-4" href="/reg">Create New Account</a>
                                </div>
                                <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                            </div>
                        </div>
                    </aside>
                    </div>
                </div>
            </header>
           
                
                </div>
            </section>
       @endsection