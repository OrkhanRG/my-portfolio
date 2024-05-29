@extends('layouts.admin')
@section('title', 'Dashboard Page')

@push('css')
@endpush

@section('content')
    <div class="alert alert-arrow-right alert-icon-right alert-light-success alert-dismissible fade show mb-4"
         role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-alert-circle">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" y1="8" x2="12" y2="12"></line>
            <line x1="12" y1="16" x2="12" y2="16"></line>
        </svg>
        <strong>Admin panelə xoş gəldin!</strong> <strong
            class="text-danger">{{ auth()->user()->name.' '.auth()->user()->surname }}</strong>
    </div>

    <div class="col-lg-6 col-6  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>CV Yüklə</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form action="{{ route('admin.cv-upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md">
                        <label class="text-primary" for="cv">CV</label>
                        <input class="form-control file-upload-input" name="cv" type="file" id="cv">
                    </div>
                    <div class="col-md mb-3">
                        <input class="form-control btn btn-success mt-4" type="submit" value="Yüklə">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('js')
@endpush
