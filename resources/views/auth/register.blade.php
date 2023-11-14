@extends('layouts.frontend')
@section('title', 'S\'inscrire')
@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Acceuil</a>
                <span></span> S'inscrire
            </div>
        </div>
    </div>
    <section class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Creer votre compte</h3>
                                    </div>
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="text" required="" name="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" name="password"
                                                placeholder="Confirm password">
                                        </div>
                                        <div class="login_footer form-group">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="exampleCheckbox12" value="">
                                                    <label class="form-check-label" for="exampleCheckbox12"><span>J'accepte les
                                                            termes &amp; conditions.</span></label>
                                                </div>
                                            </div>
                                            <a href="{{ route('privacy-policy') }}"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean
                                                more</a>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up"
                                                name="login">Submit &amp; S'inscrire</button>
                                        </div>
                                    </form>
                                    <div class="text-muted text-center">Already have an account? <a href="{{ route('login') }}">Sign in
                                            now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('frontend/assets/imgs/login.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
