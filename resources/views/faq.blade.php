@extends('master')

@section('content')

<!-- FAQ -->
<div class="container" style="margin-top: 120px;">
        <h1 class="text-center mb-4">Frequently Asked Questions</h1>
    </div>

    <section class="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="accordion" id="accordionExample">
                        <div class="card shadow-lg">
                            <!-- <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            apakah pembayaran sudah termasuk akomodasi penunjang seperti makan dan lain-lain
                                            ?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        pembayaran yang anda lakukan sudah termasuk akomodari penunjang seperti transport,
                                        makan, hotel dan tempat wisata.
                                    </div>
                                </div>
                            </div> -->
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Bagaimana cara menulis resep ?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    untuk menulis resep anda harus terlebih dahulu login menggunakan akun yang telah terdaftar
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Bagaimana cara memberikan komentar ?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    untuk menulis komentar anda terlebih dahulu harus login, kemudian klik detail dari resep kemudian dibagian bawah terdapat bagian komentar, tulis komentar dan klik send.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir FAQ -->

    @endsection