@extends('master')

@section('title')
Home Page
@endsection
@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body bg-info">
                    <img src="{{ asset('/') }}image/img.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body text-dark bg-warning">
                    <h1>Rajat Saha</h1>
                    <h5>Laravel Developer</h5>
                    <hr />
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime iste quidem ab minus
                        delectus corporis deserunt incidunt eius ut minima cum, id officiis, omnis sed inventore,
                        molestias eos sit debitis?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime iste quidem ab minus
                        delectus corporis deserunt incidunt eius ut minima cum, id officiis, omnis sed inventore,
                        molestias eos sit debitis?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime iste quidem ab minus
                        delectus corporis deserunt incidunt eius ut minima cum, id officiis, omnis sed inventore,
                        molestias eos sit debitis?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime iste quidem ab minus
                        delectus corporis deserunt incidunt eius ut minima cum, id officiis, omnis sed inventore,
                        molestias eos sit debitis?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime iste quidem ab minus
                        delectus corporis deserunt incidunt eius ut minima cum, id officiis, omnis sed inventore,
                        molestias eos sit debitis?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime iste quidem ab minus
                        delectus corporis deserunt incidunt eius ut minima cum, id officiis, omnis sed inventore,
                        molestias eos sit debitis?
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-success">
                    <div class="card-header p-3 text-center">My Honesty</div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam fugit
                            perspiciatis voluptate saepe reprehenderit molestias sit cupiditate molestiae! Porro
                            asperiores quos cupiditate veritatis veniam earum eum, assumenda blanditiis nisi.
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam fugit
                            perspiciatis voluptate saepe reprehenderit molestias sit cupiditate molestiae! Porro
                            asperiores quos cupiditate veritatis veniam earum eum, assumenda blanditiis nisi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-dark bg-info">
                    <div class="card-header p-3 text-center">My Loyalty</div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam fugit
                            perspiciatis voluptate saepe reprehenderit molestias sit cupiditate molestiae! Porro
                            asperiores quos cupiditate veritatis veniam earum eum, assumenda blanditiis nisi.
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam fugit
                            perspiciatis voluptate saepe reprehenderit molestias sit cupiditate molestiae! Porro
                            asperiores quos cupiditate veritatis veniam earum eum, assumenda blanditiis nisi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger">
                    <div class="card-header p-3 text-center">My Skill</div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam fugit
                            perspiciatis voluptate saepe reprehenderit molestias sit cupiditate molestiae! Porro
                            asperiores quos cupiditate veritatis veniam earum eum, assumenda blanditiis nisi.
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam fugit
                            perspiciatis voluptate saepe reprehenderit molestias sit cupiditate molestiae! Porro
                            asperiores quos cupiditate veritatis veniam earum eum, assumenda blanditiis nisi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-danger p-5">
                    <h1>Web Development</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-danger p-5">
                    <h1>Software Development</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-danger p-5">
                    <h1>Android Development</h1>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card bg-danger p-5">
                    <h1>Game Development</h1>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card bg-danger p-5">
                    <h1>Software Development</h1>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card bg-danger p-5">
                    <h1>Web Development</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
