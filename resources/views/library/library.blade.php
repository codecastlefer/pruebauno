@extends('dashboard')
@section('title', 'Biblioteca en linea')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Biblioteca en linea</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">Lee, aprende y crece sin límites</a>
                    </li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <div id="kt_app_content_container" class="app-container container-fluid">

        <div class="row gx-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::Chart widget 24-->
                <div class="card card-flush overflow-hidden h-xl-100">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Title-->
                        <h1 class="fw-bold fs-4 fs-lg-1  text-center mb-5 mb-lg-10">¿Como podemos ayudarte?</h1>
                        <!--end::Title-->
                        <!--begin::Input group-->
                        <!--begin::Input-->
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden">
                            <!--end::Hidden input-->

                            <!--begin::Icon-->
                            <i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Buscar por titulo, autor o editorial." data-kt-search-element="input" spellcheck="false" data-ms-editor="true">
                            <!--end::Input-->
                        </form> <!--end::Input-->
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Chart widget 24-->
            </div>
            <!--end::Col-->
        </div>
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-sm-6 col-xxl-3">
                <!--begin::Card widget 14-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body text-center pb-5">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-84.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('assets/media/stock/600x600/img-84.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-3x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Action-->
                        </a>
                        <!--end::Overlay-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-end flex-stack mb-1">
                            <!--begin::Title-->
                            <div class="text-start">
                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Nombre del libro</span>
                                <span class="text-gray-500 mt-1 fw-bold fs-6">Nombre del libro</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Total-->
                            <span class="text-gray-600 text-end fw-bold fs-6">Fecha del libro</span>
                            <!--end::Total-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex flex-stack pt-0">
                        <!--begin::Link-->

                        <a class="btn  btn-light-info flex-shrink-0 me-2"><i class="ki-duotone ki-eye fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>Ver libro</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <!--end::Link-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card widget 14-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 col-xxl-3">
                <!--begin::Card widget 14-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body text-center pb-5">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-83.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('assets/media/stock/600x600/img-83.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-3x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Action-->
                        </a>
                        <!--end::Overlay-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-end flex-stack mb-1">
                            <!--begin::Title-->
                            <div class="text-start">
                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Nombre del libro</span>
                                <span class="text-gray-500 mt-1 fw-bold fs-6">Nombre del libro</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Total-->
                            <span class="text-gray-600 text-end fw-bold fs-6">Fecha del libro</span>
                            <!--end::Total-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex flex-stack pt-0">
                        <!--begin::Link-->

                        <a class="btn  btn-light-info flex-shrink-0 me-2"><i class="ki-duotone ki-eye fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>Ver libro</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <!--end::Link-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card widget 14-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 col-xxl-3">
                <!--begin::Card widget 14-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body text-center pb-5">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-82.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('assets/media/stock/600x600/img-82.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-3x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Action-->
                        </a>
                        <!--end::Overlay-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-end flex-stack mb-1">
                            <!--begin::Title-->
                            <div class="text-start">
                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Nombre del libro</span>
                                <span class="text-gray-500 mt-1 fw-bold fs-6">Nombre del libro</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Total-->
                            <span class="text-gray-600 text-end fw-bold fs-6">Fecha del libro</span>
                            <!--end::Total-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex flex-stack pt-0">
                        <!--begin::Link-->

                        <a class="btn  btn-light-info flex-shrink-0 me-2"><i class="ki-duotone ki-eye fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>Ver libro</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <!--end::Link-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card widget 14-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 col-xxl-3">
                <!--begin::Card widget 14-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body text-center pb-5">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-81.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('assets/media/stock/600x600/img-81.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-3x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Action-->
                        </a>
                        <!--end::Overlay-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-end flex-stack mb-1">
                            <!--begin::Title-->
                            <div class="text-start">
                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Nombre del libro</span>
                                <span class="text-gray-500 mt-1 fw-bold fs-6">Nombre del libro</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Total-->
                            <span class="text-gray-600 text-end fw-bold fs-6">Fecha del libro</span>
                            <!--end::Total-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex flex-stack pt-0">
                        <!--begin::Link-->

                        <a class="btn  btn-light-info flex-shrink-0 me-2"><i class="ki-duotone ki-eye fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>Ver libro</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <!--end::Link-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card widget 14-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-sm-6 col-xxl-3">
                <!--begin::Card widget 14-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body text-center pb-5">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-84.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('assets/media/stock/600x600/img-84.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-3x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Action-->
                        </a>
                        <!--end::Overlay-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-end flex-stack mb-1">
                            <!--begin::Title-->
                            <div class="text-start">
                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Nombre del libro</span>
                                <span class="text-gray-500 mt-1 fw-bold fs-6">Nombre del libro</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Total-->
                            <span class="text-gray-600 text-end fw-bold fs-6">Fecha del libro</span>
                            <!--end::Total-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex flex-stack pt-0">
                        <!--begin::Link-->

                        <a class="btn  btn-light-info flex-shrink-0 me-2"><i class="ki-duotone ki-eye fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>Ver libro</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <!--end::Link-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card widget 14-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 col-xxl-3">
                <!--begin::Card widget 14-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body text-center pb-5">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-83.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('assets/media/stock/600x600/img-83.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-3x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Action-->
                        </a>
                        <!--end::Overlay-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-end flex-stack mb-1">
                            <!--begin::Title-->
                            <div class="text-start">
                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Nombre del libro</span>
                                <span class="text-gray-500 mt-1 fw-bold fs-6">Nombre del libro</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Total-->
                            <span class="text-gray-600 text-end fw-bold fs-6">Fecha del libro</span>
                            <!--end::Total-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex flex-stack pt-0">
                        <!--begin::Link-->

                        <a class="btn  btn-light-info flex-shrink-0 me-2"><i class="ki-duotone ki-eye fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>Ver libro</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <!--end::Link-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card widget 14-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 col-xxl-3">
                <!--begin::Card widget 14-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body text-center pb-5">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-82.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('assets/media/stock/600x600/img-82.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-3x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Action-->
                        </a>
                        <!--end::Overlay-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-end flex-stack mb-1">
                            <!--begin::Title-->
                            <div class="text-start">
                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Nombre del libro</span>
                                <span class="text-gray-500 mt-1 fw-bold fs-6">Nombre del libro</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Total-->
                            <span class="text-gray-600 text-end fw-bold fs-6">Fecha del libro</span>
                            <!--end::Total-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex flex-stack pt-0">
                        <!--begin::Link-->

                        <a class="btn  btn-light-info flex-shrink-0 me-2"><i class="ki-duotone ki-eye fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>Ver libro</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <!--end::Link-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card widget 14-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 col-xxl-3">
                <!--begin::Card widget 14-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body text-center pb-5">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-81.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('assets/media/stock/600x600/img-81.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-3x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Action-->
                        </a>
                        <!--end::Overlay-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-end flex-stack mb-1">
                            <!--begin::Title-->
                            <div class="text-start">
                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Nombre del libro</span>
                                <span class="text-gray-500 mt-1 fw-bold fs-6">Nombre del libro</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Total-->
                            <span class="text-gray-600 text-end fw-bold fs-6">Fecha del libro</span>
                            <!--end::Total-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex flex-stack pt-0">
                        <!--begin::Link-->

                        <a class="btn  btn-light-info flex-shrink-0 me-2"><i class="ki-duotone ki-eye fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>Ver libro</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <!--end::Link-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card widget 14-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>

</div>
@endsection

@push('js')
<script src="{{asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js')}}"></script>
@endpush
