@extends('layout.layout')

@section('content')
<style>
.container {
    height: 90vh;
}

.card {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    overflow: hidden;
    color: white;
}

.form-control {
    width: 15rem;
}

.imag {
    margin: auto;

}

.imageko {
    display: block;
    height: 100%;
}
</style>

<div class="container d-flex justify-content-center align-items-center">

    <div class="card w-100" style="max-width: 600px;">
        @if(Session::has('fail'))
        <div class="alert alert-danger m-0" role="alert">
            {{Session::get('fail')}}
        </div>
        @endif
        <div class="row g-0">
            <div class="imag col-md-6 p-5">
                <img class="imageko img-fluid" src="/images/cat1.svg">
            </div>
            <div class="col-md-6 bg-dark">
                <div class=" card-body">
                    <div class="text-center mt-2">
                        <h3 class="card-title ">Login Form</h3>
                        <form class="mt-5 p-2" action="{{ route('loginUser') }}" method="post">
                            @csrf
                            <div class="mb-3 p-0">
                                <!-- <label for="username" class="form-label">Username </label> -->
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    placeholder="Username" name="username" aria-describedby="usernameHelp">
                                <div class="form-text">@error('username') {{$message}} @enderror <br>
                                </div>
                            </div>

                            <div class="mb-3 p-0">
                                <!-- <label for="password" class="form-label">Password</label> -->
                                <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                    placeholder="Password" name="password">
                                <div class="form-text">@error('password') {{$message}} @enderror <br>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection