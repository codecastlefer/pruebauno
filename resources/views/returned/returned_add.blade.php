@extends('dashboard')
@section('title', 'Agregar devolucion')


@section('content')

<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Agregar devolucion</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">Informes</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Devoluciones</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Agregar devolucion</li>
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
                            <!--begin::Input group--->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="required form-label fs-6 mb-2">Seleccionar prestamo</label>
                                <!--end::Label-->

                                <!--begin::Select2-->
                                <select class="form-select  form-control-solid mb-3 mb-lg-0" name="select2_input" data-control="select2" data-placeholder="Seleccione una opción">
                                    <option></option>
                                    <option value="1">Prestamo 1</option>
                                    <option value="2">Prestamo 2</option>
                                    <option value="3">Prestamo 3</option>
                                    <option value="4">Prestamo 4</option>
                                </select>
                                <!--begin::Select2-->
                            </div>
                            <!--end::Input group--->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Fecha de devolucion</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input class="form-control" name="flatpickr_input" placeholder="Elija una fecha" id="kt_flatpickr" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Observaciones</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <textarea name="textarea_input" class="form-control form-control-solid"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{route('returned.index')}}" id="kt_ecommerce_add_product_cancel" class="btn btn-light-primary me-5"><i class="ki-duotone ki-cross-square fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Cancelar</a>
                        <!--end::Button-->
                        <!--begin::Actions-->
                        <a id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-light-success">
                            <i class="ki-duotone ki-add-item fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i> <span class="indicator-label">
                                Agregar devolucion
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

    $("#kt_flatpickr").flatpickr();

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
                'select2_input': {
                    validators: {
                        notEmpty: {
                            message: 'Se requiere la entrada de texto'
                        }
                    }
                },
                'flatpickr_input': {
                    validators: {
                        date: {
                            format: 'YYYY-MM-DD',
                            message: 'El valor no es una fecha válida',
                        },
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
                                window.location.href = "{{ route('returned.index') }}";
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
