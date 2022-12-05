@extends('dashboard.layouts.main')

@section('container')
    <section id="hero-slider" class="hero-slider" style="background-color: #B6E3CE">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-5">
                    <div class="card mb-4">
                        <div class="card-header h5 arial text-center bg-dark">
                            <strong class="text-white">Profill Saya</strong>
                        </div>
                        <div class="card-body">
                            <br>
                            <div class=" mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4 mb-3">
                                        @if ($user->image)
                                            <img src="{{ asset('storage/' . $user->image) }}" alt="profil"
                                                class="img-fluid" height="100%">
                                        @else
                                            <img src="https://source.unsplash.com/500x400?user" class="card-img-top"
                                                alt="profil" height="100%">
                                        @endif

                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Email :<font color="blue"> <?= $user['email'] ?></font>
                                            </h5>
                                            <h5 class="card-text">Name :<font color="blue"> <?= $user['name'] ?></font>
                                            </h5>
                                            <h5 class="card-text">register pada : <font color="red">
                                                    <?= $user['created_at'] ?></font>
                                            </h5>
                                            <div class="btn btn-dark ml-3 my-3">
                                                <a href="/profil/edit" class="text text-white"><i
                                                        class="fas fa-user-edit"></i>
                                                    UbahProfil</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection