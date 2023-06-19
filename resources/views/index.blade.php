@extends('partials.layout')


@section('content')
    <div id="carouselExample" class="carousel slide home-carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/slider-2.jpg') }}" class="d-block w-100" alt="Slider two">
                <div class="text-area">
                    <span>TIPS FOR LIFE WITH CATS</span>
                    <h1>CAT STORIES,<br> NEWS, TIPS & <br> TRICKS</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slider-2.jpg') }}" class="d-block w-100" alt="Slider two">
                <div class="text-area">
                    <span>TIPS FOR LIFE WITH CATS</span>
                    <h1>CAT STORIES,<br> NEWS, TIPS & <br> TRICKS</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <section class="about-us">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center mt-3">
                    <h2>Bir Adım Bir Pati</h2>
                    <p>Küçük dostlarımız için başlatacağımız proje çok yakında sizlerle...</p>
                </div>

            </div>

            <div class="row pt-4 pb-4">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://images01.nicepagecdn.com/c461c07a441a5d220e8feb1a/f5dbeb699ff157baadbb046f/jhhj.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Hayvan Sahiplenme</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://images01.nicepagecdn.com/c461c07a441a5d220e8feb1a/4c356185208f56d0bab86365/hjhj.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gönüllü Yardımcılık</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://images01.nicepagecdn.com/c461c07a441a5d220e8feb1a/3ee24c83ac765c9fbfa6be44/2323.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sponsorluk ya da Bağış</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <section class="love-animals pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://images01.nicepagecdn.com/c461c07a441a5d220e8feb1a/466949e5f6e453698d309e6c/ffff-min1.jpg"
                        alt="">
                </div>
                <div class="col-md-6 mb-4">
                    <img src="https://images01.nicepagecdn.com/c461c07a441a5d220e8feb1a/5ff9d05cf88a597f96683602/831d810a-e45d-11cb-5a85-58903c69faba.jpg"
                        alt="">
                </div>
                <div class="col-md-6">
                    <img src="https://images01.nicepagecdn.com/c461c07a441a5d220e8feb1a/c26073e93c6952f9a97bb570/16d17f42-5ef1-0abe-4606-2340daa35226.jpg"
                        alt="">
                </div>
                <div class="col-md-6">
                    <div class="custom-card">
                        <h2>Why do we love animals?</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                            Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



 
@endsection
