@extends('layout')

@section('content')

<section id="who-we-are" class="d-flex align-items-center justify-content-end">
    <div class="container">
        <h1>Who We Are</h1>
    </div>
</section>

<section id="values" class="text-center">
    <div class="row mr-1 ml-1">
        <div class="col-lg-4 col-sm-12 mb-4 mb-sm-12">
            <!-- Icon Block -->
            <div class="pr-lg-4">
                <img class="max-width-9 mb-2" src="/img/consult-icon.svg" alt="Image Description">
                <h3>We Plan</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis sem, feugiat non accumsan
                    et, laoreet sed leo. Proin velit augue, tempor in est eu, tristique convallis neque.</p>

            </div>
            <!-- End Icon Block -->
        </div>

        <div class="col-lg-4 col-sm-12 mb-4 mb-sm-12">
            <!-- Icon Block -->
            <div class="pr-lg-4">
                <img class="max-width-9 mb-2" src="/img/plan-icon.svg" alt="Image Description">
                <h3>We Develop</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis sem, feugiat non accumsan
                    et, laoreet sed leo. Proin velit augue, tempor in est eu, tristique convallis neque.</p>
            </div>
            <!-- End Icon Block -->
        </div>

        <div class="col-lg-4 col-sm-12 mb-4 mb-sm-12">
            <!-- Icon Block -->
            <div class="pr-lg-4">
                <img class="max-width-9 mb-2" src="/img/colab-icon.svg" alt="Image Description">
                <h3>We Produce</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis sem, feugiat non accumsan
                    et, laoreet sed leo. Proin velit augue, tempor in est eu, tristique convallis neque.</p>
            </div>
            <!-- End Icon Block -->
        </div>
    </div>
</section>

<section id="site-newsletter">
    <div class="container">
        <div class="text-center">
            <h3 class="h4 mb-5">Get started with us now</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

            <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-7 col-lg-5 ml-auto mr-auto">
                    <button class="btn btn-primary mt-2" type="button">Join now</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection