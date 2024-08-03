@extends('layouts.admin')
@section('title', 'Bloq'.(isset($blog) ? ' Güncəllə' : ' Yarat'))

@push('css')
    <style>
        .ck-editor__editable_inline {
            min-height: 180px;
        }
    </style>
    <link href="{{ asset('assets/src/plugins/src/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('/assets/src/plugins/src/filepond/filepond.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/src/tagify/tagify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/css/light/tagify/custom-tagify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/css/dark/tagify/custom-tagify.css') }}">
@endpush

@section('content')
    <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>{{ isset($blog) ? '' : 'Yeni' }} Bloq {{ isset($blog) ? 'Güncəllə' : 'Əlavə Et' }}</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <form action="{{ isset($blog) ? route('admin.blog.update', $blog->id) : route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($blog)
                        @method('PUT')
                    @endisset
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Başlıq</label>
                                <input type="text" class="form-control mb-2"
                                       name='title' id="title" placeholder="Başlıq"
                                       value="{{ $blog->title ?? old('title') }}">
                            </div>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Slug</label>
                                <input type="text" class="form-control mb-2"
                                       name='slug' id="slug" placeholder="Slug"
                                       value="{{ $blog->slug ?? old('slug') }}">
                            </div>
                            @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="start_date">Kateqoriya</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="">Kateqoriya seç</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ isset($blog) && $category->id === $blog->category_id ? 'selected' : (old('category_id') ? 'selected' : '') }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="publish_date">Yayınlama vaxtı</label>
                                <input type="datetime-local" class="form-control mb-2"
                                       name='publish_date' id="publish_date" placeholder="Yayınlama vaxtı"
                                       value="{{ $blog->publish_date ?? old('publish_date') }}">
                            </div>
                            @error('publish_date')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="expire_date">Bitmə vaxtı</label>
                                <input type="datetime-local" class="form-control mb-2"
                                       name='expire_date' id="expire_date" placeholder="Bitmə vaxtı"
                                       value="{{ $blog->expire_date ?? old('expire_date') }}">
                            </div>
                            @error('expire_date')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Açığlama</label>
                                <textarea
                                    class="form-control ck-editor__editable ck-editor__editable_inline"
                                    name="description" id="description"
                                    placeholder="Təsvir">{{ $blog->description ?? old('description') }}</textarea>
                            </div>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Qısa Təsvir</label>
                                <textarea
                                    class="form-control ck-editor__editable ck-editor__editable_inline"
                                    name="short_description" id="short_description"
                                    placeholder="Qısa Təsvir">{{ $blog->short_description ?? old('short_description') }}</textarea>
                            </div>
                            @error('short_description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label for="client">#Teq</label>
                                <input type="text" class="form-control mb-2"
                                       name='tags' id="tags" placeholder="#Teq"
                                       value="{{ $tags ?? '' }}">
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="profile-image">
                                <div class="img-uploader-content">
                                    <label for="client">Əsas şəkil</label>
                                    <input type="file" class="filepond1"
                                           name="main_image" id="main_image" accept="image/png, image/jpeg, image/gif"/>
                                </div>
                            </div>
                            @error('main_image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name='status' id="status"
                                        {{ isset($blog) ? ($blog->status ? 'checked' : '') : (old('status') ? 'checked' : '') }}>
                                    <label class="form-check-label" for="status">
                                        Aktiv olsun?
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="profile-image">
                                <div class="multiple-file-upload">
                                    <label for="client">Kontent şəkillər</label>
                                    <input type="file"
                                           class="filepond-m file-upload-multiple"
                                           name="images[]"
                                           id="images"
                                           multiple
                                           data-allow-reorder="true">
                                </div>
                            </div>
                            @error('images')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary _effect--ripple waves-effect waves-light">{{ isset($blog) ? 'Güncəllə' : 'Yarat' }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
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
    </script>
    <script src="{{ asset('assets/src/plugins/src/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageCrop.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageResize.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageTransform.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/tagify/tagify.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/tagify/custom-tagify.js') }}"></script>
    <script>
        var f1 = flatpickr(document.getElementById('publish_date'), {
            enableTime: true,
            dateFormat: "Y-m-d",
            defaultDate: "{{ $blog->publish_date ?? '' }}"
        });

        var f2 = flatpickr(document.getElementById('expire_date'), {
            enableTime: true,
            dateFormat: "Y-m-d",
            defaultDate: "{{ $blog->expire_date ?? '' }}"
        });

        FilePond.setOptions({
            storeAsFile: true
        });

        FilePond.registerPlugin(
            FilePondPluginFileValidateType,
            FilePondPluginImageExifOrientation,
            FilePondPluginImagePreview,
            FilePondPluginImageCrop,
            FilePondPluginImageResize,
            FilePondPluginImageTransform,
            FilePondPluginFileValidateSize,
        );

        const pondMImage = FilePond.create(
            document.querySelector('.filepond1'),
            {
                imagePreviewHeight: 170,
                imageResizeTargetWidth: 200,
                imageResizeTargetHeight: 200,
                styleLoadIndicatorPosition: 'center bottom',
                styleProgressIndicatorPosition: 'right bottom',
                styleButtonRemoveItemPosition: 'left bottom',
                styleButtonProcessItemPosition: 'right bottom',
            }
        );

        @isset($blog->main_image)
            pondMImage.addFile("{{ asset($blog->main_image) }}");
        @endisset

        const pondImages = FilePond.create(
            document.querySelector('.file-upload-multiple')
        );

        @if(isset($images) && count($images))
            @foreach($images as $image)
                pondImages.addFile("{{ asset($image) }}");
            @endforeach
        @endif

        var tags = document.querySelector('#tags');
        new Tagify(tags);
    </script>

@endpush
