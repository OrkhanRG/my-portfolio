@extends('layouts.admin')
@section('title', 'Şirkət'.(isset($company) ? ' Güncəllə' : ' Yarat'))

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
                        <h4>{{ isset($company) ? '' : 'Yeni' }} Şirkət {{ isset($company) ? 'Güncəllə' : 'Əlavə Et' }}</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <form action="{{ isset($company) ? route('admin.company.update', $company->id) : route('admin.company.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($company)
                        @method('PUT')
                    @endisset
                    <div class="row">
                        <div  @class([
                                            'col-md-9' => isset($company),
                                            'col-md-12' => !isset($company),
                                            ])>
                            <div class="form-group">
                                <label for="name">Ad</label>
                                <input type="text" class="form-control mb-2"
                                       name='name' id="name" placeholder="Ad"
                                       value="{{ $company->name ?? old('name') }}" >
                            </div>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="row">
                                <div @class([
                                                        'col-md-9' => isset($company),
                                                        'col-md-12' => !isset($company),
]                                                       )>
                                    <div class="form-group">
                                        <label for="logo">Şəkil</label>
                                        <input
                                            class="form-control file-upload-input"
                                            type="file" name="logo"
                                            id="logo">
                                    </div>
                                    @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-6 mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name='status' id="status"
                                                {{ isset($company) ? ($company->status ? 'checked' : '') : (old('status') ? 'checked' : '') }}>
                                            <label class="form-check-label" for="status">
                                                Aktiv olsun?
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                @isset($company)
                                    <div class="col-md-3">
                                        @if(isset($company) && $company->logo)
                                            <img width="150" id="imgPreview" src="{{ asset($company->logo) }}" alt="">
                                        @else
                                            <img width="150" src="{{ asset('/assets/img/default/img/hero.png') }}" alt="">
                                        @endif
                                    </div>
                                @endisset
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
        let image = document.querySelector('#logo');

        image.addEventListener('change', function (event) {
            let element = event.target;
            previewImage(element, 'imgPreview')
        });

        function previewImage(element, imgSrc) {
            var reader = new FileReader();
            reader.onload = function(){
                var img = document.getElementById(imgSrc);
                img.src = reader.result;
                img.style.display = 'block';
            };
            reader.readAsDataURL(element.files[0]);
        }
    </script>
@endpush
