@extends('layouts.admin')
@section('title', ' Təhsil '.(isset($education) ? 'Güncəllə' : 'Əlavə ET'))

@push('css')
    <style>
        .ck-editor__editable_inline {
            min-height: 180px;
        }
    </style>

    <link href="{{ asset('assets/src/plugins/src/notification/snackbar/snackbar.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/assets/css/light/elements/alert.css') }}">
    <link href="{{ asset('assets/src/plugins/css/light/notification/snackbar/custom-snackbar.css') }}" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/assets/css/light/forms/switches.css') }}">
    <link href="{{ asset('assets/src/assets/css/light/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/src/assets/css/light/users/account-setting.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/src/assets/css/dark/components/tabs.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/assets/css/dark/elements/alert.css') }}">
    <link href="{{ asset('assets/src/plugins/css/dark/notification/snackbar/custom-snackbar.css') }}" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/assets/css/dark/forms/switches.css') }}">
    <link href="{{ asset('assets/src/assets/css/dark/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/src/assets/css/dark/users/account-setting.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('assets/src/plugins/src/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/src/plugins/css/light/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/src/plugins/css/dark/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <div class="account-settings-container layout-top-spacing">

        <div class="account-content">
            <div class="tab-content" id="animateLineContent-4">
                <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                     aria-labelledby="animated-underline-home-tab">
                    <div class="row">
                        <form action="{{ isset($education) ? route('admin.education.update', $education->id) : route('admin.education.store') }}" method="POST">
                            @csrf
                            @isset($education)
                                @method('PUT')
                            @endisset
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing section general-info">
                                <div class="info">
                                    <h6 class="">Təhsil {{ isset($education) ? 'Güncəllə' : 'Əlavə ET' }}</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="institution">Təhsil Müəssisə Adı</label>
                                                                    <input type="text"
                                                                           class="form-control mb-2 @error('institution') is-invalid @enderror"
                                                                           name='institution' id="institution" placeholder="Təhsil Müəssisə Adı"
                                                                           value="{{ $education->institution ?? old('institution') }}">
                                                                </div>
                                                                @error('institution')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="field_of_study">Təhsil Sahəsi</label>
                                                                    <input type="text" class="form-control mb-2"
                                                                           name='field_of_study' id="field_of_study" placeholder="Təhsil Sahəsi"
                                                                           value="{{ $education->field_of_study ?? old('field_of_study') }}">
                                                                </div>
                                                                @error('field_of_study')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="degree">Dərəcə</label>
                                                                    <select class="form-select" name="degree" id="degree" aria-label="Default select example">
                                                                        <option value="{{ null }}" selected>Elmi dərəcə</option>
                                                                        <option {{ isset($education) ? ($education->degree == 'Ali' ? 'selected' : '') : '' }} value="Ali">Ali</option>
                                                                        <option {{ isset($education) ? ($education->degree == 'Natamam Ali' ? 'selected' : '') : '' }} value="Natamam Ali">Natamam Ali</option>
                                                                        <option {{ isset($education) ? ($education->degree == 'Orta Texniki' ? 'selected' : '') : '' }} value="Orta Texniki">Orta Texniki</option>
                                                                        <option {{ isset($education) ? ($education->degree == 'Orta Xüsusi' ? 'selected' : '') : '' }} value="Orta Xüsusi">Orta Xüsusi</option>
                                                                        <option {{ isset($education) ? ($education->degree == 'Orta' ? 'selected' : '') : '' }} value="Orta">Orta</option>
                                                                    </select>
                                                                </div>
                                                                @error('degree')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="end_date">Başlama Vaxtı</label>
                                                                    <input type="text" class="form-control mb-2"
                                                                           name='start_date' id="start_date" placeholder="Başlama Vaxtı"
                                                                           value="{{ $education->start_date ?? old('start_date') }}">
                                                                </div>
                                                                @error('start_date')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="end_date">Bitmə Vaxtı</label>
                                                                    <input type="text" class="form-control mb-2"
                                                                           name='end_date' id="end_date" placeholder="Bitmə Vaxtı"
                                                                           value="{{ $education->end_date ?? old('end_date') }}">
                                                                </div>
                                                                @error('end_date')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="description">Açığlama</label>
                                                                    <textarea
                                                                        class="form-control ck-editor__editable ck-editor__editable_inline"
                                                                        name="description" id="description"
                                                                        placeholder="Açığlama">{{ $education->description ?? old('description') }}</textarea>
                                                                </div>
                                                                @error('description')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-6 mt-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name='status' id="status"
                                                                        {{ isset($education) ? ($education->status ? 'checked' : '') : (old('status') ? 'checked' : '') }}>
                                                                    <label class="form-check-label" for="status">
                                                                        Aktiv olsun?
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <div class="form-group text-end">
                                                                    <button
                                                                        class="btn btn-secondary _effect--ripple waves-effect waves-light">
                                                                        Qeyd Et
                                                                    </button>
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
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/src/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/flatpickr/flatpickr.js') }}"></script>

    <script src="{{ asset('assets/src/plugins/src/flatpickr/custom-flatpickr.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#short_description'))
            .catch(error => {
                console.error(error);
            });

        var f1 = flatpickr(document.getElementById('start_date'));
        var f2 = flatpickr(document.getElementById('end_date'));
    </script>
@endpush

