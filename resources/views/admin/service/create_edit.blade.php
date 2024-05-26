@extends('layouts.admin')
@section('title', 'Servis'.(isset($service) ? ' Güncəllə' : ' Yarat'))

@push('css')
    <style>
        .ck-editor__editable_inline {
            min-height: 180px;
        }
    </style>
@endpush
``
@section('content')
    <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>{{ isset($service) ? '' : 'Yeni' }} Servis {{ isset($service) ? 'Güncəllə' : 'Əlavə Et' }}</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <form action="{{ isset($service) ? route('admin.service.update', $service->id) : route('admin.service.store') }}" method="POST">
                    @csrf
                    @isset($service)
                        @method('PUT')
                    @endisset
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="name">Servis Adı</label>
                            <input type="text" class="form-control"  name='name' id="name" placeholder="Servis Adı" value="{{ isset($service) ? $service->name : old('name') }}">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="description">Açığlama</label>
                            <textarea class="form-control ck-editor__editable ck-editor__editable_inline" name="description" id="description" placeholder="Servis Açığlaması">{{ isset($service) ? $service->description : old('description') }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name='is_featured' id="is_featured"
                                    {{ isset($service) ? ($service->is_featured ? 'checked' : '') : (old('checkbox') ? 'checked' : '') }}>
                                <label class="form-check-label" for="is_featured">
                                    Önə çıxarılsın?
                                </label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary _effect--ripple waves-effect waves-light">Yarat</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush
