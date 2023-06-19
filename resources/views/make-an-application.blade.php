@extends('partials.layout')
@section('content')
    <div class="row no-gutter">
        <div class="col-md-12 breadcrumb-image-area no-gutter">
            <h2>Başvuru Yap</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <img src="{{ asset('assets/images/contact-banner.jpg') }}" alt="">
        </div>
    </div>

    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h2>Başvuru Yap</h2>
            </div>
            <div class="col-md-12">
                <form action="#" class="make-application-form">
                    @csrf


                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Adınız ve Soyadınız</label>
                            <input type="text" class="form-control" placeholder="Adınız ve Soyadınız">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>E-posta Adresiniz</label>
                            <input type="text" class="form-control" placeholder="E-posta Adresiniz">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Telefon Numaranız</label>
                            <input type="text" class="form-control" placeholder="Telefon Numaranız">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Adresiniz</label>
                            <textarea class="form-control" id="" cols="30" rows="3" placeholder="Adresiniz"></textarea>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Daha önce hiç hayvan sahiplendin mi?</label>
                            <select class="form-control">
                                <option value="NULL" selected disabled>Daha önce hiç hayvan sahiplendin mi?</option>
                                <option value="1">Evet</option>
                                <option value="2">Hayır</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Sahiplenmeye nasıl karar verdin?</label>
                            <input type="text" class="form-control"
                                placeholder="Sahiplenmeye karar vermen konusunda seni ne tetikledi?">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Ev Tipi</label>
                            <select class="form-control">
                                <option value="NULL" selected disabled>Ev Tipi</option>
                                <option value="1">Müstakil Ev</option>
                                <option value="2">Apartman Dairesi</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button type="submit">Gönder</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
