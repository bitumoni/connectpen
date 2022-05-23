@extends('layouts.userlayout')
@section('title','Create a new account')
@section('menu')
@endsection

@section('reg')
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                      

                        <aside class="bg-grey bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                            
                                <h1 class="display-5 fw-bolder text-white mb-2">CONNECT PEN</h1>
                           
                                <div class="fs-3 fw-bold text-white">Largest Author Community</div>
                                <p class="lead fw-normal text-white-50 mb-4">Connect Pen helps you connect and share your thoughts with the people and earn money in your life.</p>
                                
                            </div>
                        </div>
                        
                        
                            
                        <div class="ms-xl-4">
                            <div class="mb-4 mb-xl-0">
                                <div class="input-group mb-2">
                                    <input class="form-control " type="text" placeholder="First name" aria-label="First name" aria-describedby="button-newsletter" />
                                    
                                    <input class="form-control" type="text" placeholder="Surname" aria-label="Surname" aria-describedby="button-newsletter" />

                                </div>
                                
                                    <input class="form-control mb-2" type="text" placeholder="Email address or phone number" aria-label="Email address or phone number" aria-describedby="button-newsletter" />
                                
                                    <input class="form-control mb-2" type="password" placeholder="New password" aria-label="New password" aria-describedby="button-newsletter" />
                                        <select class="form-select mb-2" aria-label="Default select example">
                                            <option selected>Select Role</option>
                                            <option value="author">Author</option>
                                            <option value="publisher">Publisher</option>
                                            <option value="investor">Investor</option>
                                            <option value="admin">Admin</option>

                                        </select>
                                        <div class="input-group mb-2">
                                            
                                            <div class="input-group mb-2">
                                            
                                                <input class="form-control mb-2" type="date"  aria-label="date" aria-describedby="button-newsletter" />
                                                
                                            </div>

                                                


                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male">
                                                        <label class="form-check-label text-white" for="inlineRadio1">Male</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
                                                        <label class="form-check-label text-white" for="inlineRadio2">Female</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="other">
                                                        <label class="form-check-label text-white" for="inlineRadio3">Other</label>
                                                    </div>
                                    </div>
                                            <a class="btn  btn-success btn-lg px-4" href="#!">Sign Up</a>
                               
                                </div>
                            
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <div class="small text-white-50">By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</div>
                                    
                                
                                </div>
                                <a class="text-decoration-none" id="forgot_password" type="text" href="/login">Already have an account?</a>
                            </div>
                        </div>
                    </aside>
                            
                        
                    </div>
                </div>
            </header>
           
                
            @endsection