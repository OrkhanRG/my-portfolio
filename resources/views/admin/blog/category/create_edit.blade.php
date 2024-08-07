@extends('layouts.admin')
@section('title', 'Kateqoriya'.(isset($blog_category) ? ' Güncəllə' : ' Yarat'))

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
                        <h4>{{ isset($blog_category) ? '' : 'Yeni' }} Servis {{ isset($blog_category) ? 'Güncəllə' : 'Əlavə Et' }}</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <form action="{{ isset($blog_category) ? route('admin.blog-category.update', $blog_category->id) : route('admin.blog-category.store') }}" method="POST">
                    @csrf
                    @isset($blog_category)
                        @method('PUT')
                    @endisset
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="name">Kateqoriya Adı</label>
                            <input type="text" class="form-control"  name='name' id="name" placeholder="Kateqoriya Adı" value="{{ isset($blog_category) ? $blog_category->name : old('name') }}">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control"  name='slug' id="slug" placeholder="Slug" value="{{ isset($blog_category) ? $blog_category->slug : old('slug') }}">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="description">Açığlama</label>
                            <textarea class="form-control ck-editor__editable ck-editor__editable_inline" name="description" id="description" placeholder="Servis Açığlaması">{{ isset($blog_category) ? $blog_category->description : old('description') }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input class="form-check-input" type="checkbox" name='status' id="status"
                                {{ isset($blog_category) ? ($blog_category->status ? 'checked' : '') : (old('status') ? 'checked' : '') }}>
                            <label class="form-check-label" for="status">
                                Aktiv olsun?
                            </label>
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
