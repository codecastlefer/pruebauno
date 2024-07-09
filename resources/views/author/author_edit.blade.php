@extends('dashboard')
@section('title', 'Editar autor')


@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Editar autor</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">Gestion</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Autores</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Editar autor</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <form id="kt_docs_formvalidation_text" class="form d-flex flex-column flex-lg-row" data-kt-redirect="apps/ecommerce/catalog/categories.html">
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Nombres del autor</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="text_input" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Ingresar nombres" value="Juan Pablo" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Se requiere un nombre de autor y se recomienda ser único.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Apellidos del autor</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="text_input" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Ingresar apellidos" value="Gonzales Paredes" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Biografia del autor</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <textarea name="textarea_input" valu class="form-control form-control-solid">Juan Pablo Gonzales Paredes es un escritor peruano, nacido en Lima en 1980. Estudió literatura en la Universidad Nacional Mayor de San Marcos y ha publicado varios libros de cuentos y novelas. Sus obras han sido traducidas a varios idiomas y ha recibido varios premios literarios.
                                </textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{route('author.index')}}" id="kt_ecommerce_add_product_cancel" class="btn btn-light-primary me-5"><i class="ki-duotone ki-cross-square fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Cancelar</a>
                        <!--end::Button-->
                        <!--begin::Actions-->
                        <a id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-light-warning">
                            <i class="ki-duotone ki-notepad-edit fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i><span class="indicator-label">
                                Editar autor
                            </span>
                            <span class="indicator-progress">
                                Espere por favor... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </a>
                        <!--end::Actions-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@endsection
@push('js')
<script>
    // Define form element
    const form = document.getElementById('kt_docs_formvalidation_text');

    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var validator = FormValidation.formValidation(
        form, {
            fields: {
                'text_input': {
                    validators: {
                        notEmpty: {
                            message: 'Se requiere la entrada de texto'
                        }
                    }
                },
                'textarea_input': {
                    validators: {
                        notEmpty: {
                            message: 'Se requiere la entrada de texto'
                        }
                    }
                },
            },

            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: '.fv-row',
                    eleInvalidClass: '',
                    eleValidClass: ''
                })
            }
        }
    );

    // Submit button handler
    const submitButton = document.getElementById('kt_docs_formvalidation_text_submit');
    submitButton.addEventListener('click', function(e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (validator) {
            validator.validate().then(function(status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function() {
                        // Remove loading indication
                        submitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        submitButton.disabled = false;

                        // Show popup confirmation
                        Swal.fire({
                            text: "¡El formulario se ha presentado con éxito!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "¡Ok lo tengo!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "{{ route('author.index') }}";
                            }
                        });

                        //form.submit(); // Submit form
                    }, 2000);
                }
            });
        }
    });
</script>
@endpush
