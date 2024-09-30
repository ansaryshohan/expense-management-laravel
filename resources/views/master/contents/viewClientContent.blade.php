       <!-- Header Start -->
       <div class="container-fluid" id="pigraHome">
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <div class="header-img d-flex h-100 pt-6 ps-6 pb-6">
                        <div class="row g-5">
                            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bg-light p-4" style="border-radius: 68% 32% 100% 0% / 0% 75% 25% 100%;">
                                    <img src="/clientImg/{{ $client->client_image }}" class="img-fluid w-100" style="border-radius: 68% 32% 100% 0% / 0% 75% 25% 100%;" alt="Image">
                                </div>
                            </div>
                            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                                <h1 class="display-6 mb-4">{{ $client->first_name ." ". $client->last_name }}</h1>
                                <p class="mb-4">
                                    As a highly skilled web developer with over 2 years of experience in React.js and JavaScript, I am seeking a position where I can apply my expertise in front-end development, responsive design, and optimization to deliver seamless user experiences. My goal is to work on innovative projects that challenge my skills and contribute to the growth of the company
                                </p>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-geo-alt"></i>
                                    <p class="text-dark mb-0 ms-2">{{ $client->address }}</p>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-envelope-at-fill"></i>
                                    <p class="text-dark mb-0 ms-2">{{ $client->email }}</p>
                                </div>
                                <div class="d-flex mt-3">
                                    <a class="btn btn-primary px-2 py-1 btn-sm-square me-3" href="#"><i class="bi bi-facebook"></i></a>
                                    <a class="btn btn-primary px-2 py-1 btn-sm-square me-3" href="#">
                                        <i class="bi bi-twitter-x"></i></a>
                                    <a class="btn btn-primary px-2 py-1 btn-sm-square me-3" href="#"><i class="bi bi-instagram"></i></a>
                                    <a class="btn btn-primary px-2 py-1 btn-sm-square me-0" href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Education Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row g-0">
                <h4 class="text-black text-center ">Education</h4>
                <div class="col-12">
                    <div class="education-content h-100 pt-6 ps-6 pb-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="fs-5 mb-0 me-4">{{ $client->postGraduation->institute }}</p>
                                        <div>
                                            <span class="fa fa-calendar me-1"></span>{{ $client->postGraduation->passing_year }}
                                        </div>
                                    </div>
                                    <h4 class="mb-3">{{ $client->postGraduation->degree_name }}</h4>
                                    <h6 class="mb-3">CGPA : {{ $client->postGraduation->result }}</h6>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, a quasi velit sint atque non saepe quaerat ducimus, nobis error cupiditate, nisi repudiandae dignissimos magnam? Dicta ab possimus tempora nobis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="education-content h-100 pt-6 ps-6 pb-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="fs-5 mb-0 me-4">{{ $client->graduation->institute }}</p>
                                        <div>
                                            <span class="fa fa-calendar me-1"></span>{{ $client->graduation->passing_year }}
                                        </div>
                                    </div>
                                    <h4 class="mb-3">{{ $client->graduation->degree_name }}</h4>
                                    <h6 class="mb-3">CGPA : {{ $client->graduation->result }}</h6>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, a quasi velit sint atque non saepe quaerat ducimus, nobis error cupiditate, nisi repudiandae dignissimos magnam? Dicta ab possimus tempora nobis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="education-content h-100 pt-6 ps-6 pb-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="fs-5 mb-0 me-4">{{ $client->hsc->institute }}</p>
                                        <div>
                                            <span class="fa fa-calendar me-1"></span>{{ $client->hsc->passing_year }}
                                        </div>
                                    </div>
                                    <h4 class="mb-3">{{ $client->hsc->degree_name }}</h4>
                                    <h6 class="mb-3">CGPA : {{ $client->hsc->result }}</h6>
                                    <p class="mb-3">Board : {{ $client->hsc->board }}</p>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, a quasi velit sint atque non saepe quaerat ducimus, nobis error cupiditate, nisi repudiandae dignissimos magnam? Dicta ab possimus tempora nobis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="education-content h-100 pt-6 ps-6 pb-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="fs-5 mb-0 me-4">{{ $client->ssc->institute }}</p>
                                        <div>
                                            <span class="fa fa-calendar me-1"></span>{{ $client->ssc->passing_year }}
                                        </div>
                                    </div>
                                    <h4 class="mb-3">{{ $client->ssc->degree_name }}</h4>
                                    <h6 class="mb-3">CGPA : {{ $client->ssc->result }}</h6>
                                    <p class="mb-3">Board : {{ $client->ssc->board }}</p>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, a quasi velit sint atque non saepe quaerat ducimus, nobis error cupiditate, nisi repudiandae dignissimos magnam? Dicta ab possimus tempora nobis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Education End -->