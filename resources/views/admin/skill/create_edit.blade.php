@extends('layouts.admin')
@section('title', 'Bacarıq'.(isset($skill) ? ' Güncəllə' : ' Yarat'))

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
                        <h4>{{ isset($skill) ? '' : 'Yeni' }} Bacarıq {{ isset($skill) ? 'Güncəllə' : 'Əlavə Et' }}</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <form action="{{ isset($skill) ? route('admin.skill.update', $skill->id) : route('admin.skill.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($skill)
                        @method('PUT')
                    @endisset
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Ad</label>
                                <input type="text" class="form-control mb-2"
                                       name='name' id="name" placeholder="Ad"
                                       value="{{ $skill->name ?? old('name') }}">
                            </div>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start_date">Bacarıq Səviyyəsi</label>
                                <input type="number" class="form-control mb-2"
                                       name='proficiency' id="proficiency" placeholder="Bacarıq Səviyyəsi"
                                       value="{{ $skill->proficiency ?? old('proficiency') }}">
                            </div>
                            @error('proficiency')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-12 mt-2">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="image">Şəkil</label>
                                        <input
                                            class="form-control file-upload-input"
                                            type="file" name="image"
                                            id="image">
                                    </div>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-6 mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name='status' id="status"
                                                {{ isset($skill) ? ($skill->status ? 'checked' : '') : (old('status') ? 'checked' : '') }}>
                                            <label class="form-check-label" for="status">
                                                Aktiv olsun?
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    @if(isset($skill) && $skill->image)
                                        <img width="150" id="imgHeroPreview" src="{{ asset($skill->image) }}" alt="">
                                    @else
                                        <img width="150" src="{{ asset('/assets/img/default/img/hero.png') }}" alt="">
                                    @endif
                                </div>
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
        let image = document.querySelector('#image');

        image.addEventListener('change', function (event) {
            let element = event.target;
            previewImage(element, 'imgAboutPreview')
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
