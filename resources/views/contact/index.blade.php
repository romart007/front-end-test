@extends('layout')

@section('content')

<section id="contact-us" class="row justify-content-lg-between align-items-lg-center">
    <div class="col-lg-5 mb-7">
        <!-- Title -->
        <span class="d-block text-white text-uppercase mb-2">Join the change</span>
        <h3 class="display-4 font-size-48--md-down text-white mb-0">Lorem ipsum</h3>
        <!-- End Title -->
    </div>

    <div class="col-lg-5 mr-2">
        <!-- Signup Form -->
        <div class="bg-white shadow-sm rounded p-6">
            <form class="js-validate" novalidate="novalidate">
                <div class="mb-4">
                    <h2 class="h4 text-primary pt-5 pt-2">Get started for free</h2>
                </div>

                <!-- Input -->
                <div class="js-form-message mb-3">
                    <div class="js-focus-state input-group input-group form">
                        <input required="" type="text" class="form-control form__input" name="username" required=""
                            placeholder="Enter your username" aria-label="Enter your username">
                    </div>
                </div>
                <!-- End Input -->

                <!-- Input -->
                <div class="js-form-message mb-3">
                    <div class="js-focus-state input-group input-group form">
                        <input required  type="email" class="form-control form__input" name="email" required=""
                            placeholder="Enter your email address" aria-label="Enter your email address">
                    </div>
                </div>

                <!-- End Input -->

                <button type="submit" class="btn btn-block btn-primary">Get Started</button>
            </form>
        </div>
        <!-- End Signup Form -->
    </div>
</section>

<section class="container-fluid pt-5" id="info">
        <div class="row justify-content-between pt-5 pb-5">
            
            <div class="col-md-7">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, ea natus porro,
                    laboriosam explicabo aut esse. Labore dolorem a suscipit repellendus repellat minus, quaerat nihil
                    exercitationem, accusamus illo aut nulla?</p>
            </div>
        </div>
    </section>
@endsection