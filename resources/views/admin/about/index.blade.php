@extends('layouts.admin')
@section('title', 'Haqında')

@push('css')
    <style>
        .ck-editor__editable_inline {
            min-height: 180px;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/src/plugins/src/filepond/filepond.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.css') }}">
    <link href="{{ asset('assets/src/plugins/src/notification/snackbar/snackbar.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/src/plugins/src/sweetalerts2/sweetalerts2.css') }}">

    <link href="{{ asset('assets/src/plugins/css/light/filepond/custom-filepond.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/assets/css/light/elements/alert.css') }}">

    <link href="{{ asset('assets/src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/src/plugins/css/light/notification/snackbar/custom-snackbar.css') }}" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/assets/css/light/forms/switches.css') }}">
    <link href="{{ asset('assets/src/assets/css/light/components/list-group.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/src/assets/css/light/users/account-setting.css') }}" rel="stylesheet" type="text/css"/>



    <link href="{{ asset('assets/src/plugins/css/dark/filepond/custom-filepond.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/src/assets/css/dark/components/tabs.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/assets/css/dark/elements/alert.css') }}">

    <link href="{{ asset('assets/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/src/plugins/css/dark/notification/snackbar/custom-snackbar.css') }}" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/assets/css/dark/forms/switches.css') }}">
    <link href="{{ asset('assets/src/assets/css/dark/components/list-group.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/src/assets/css/dark/users/account-setting.css') }}" rel="stylesheet" type="text/css"/>
@endpush

@section('content')
    <div class="account-settings-container layout-top-spacing">

        <div class="account-content">
            <div class="tab-content" id="animateLineContent-4">
                <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                     aria-labelledby="animated-underline-home-tab">
                    <div class="row">
                        <form action="{{ route('admin.about.index') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing section general-info">
                                <div class="info">
                                    <h6 class="">Ümumi Məlumat</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="name">Ad</label>
                                                                    <input type="text" class="form-control mb-2 @error('name') is-invalid @enderror"
                                                                           name='name' id="name" placeholder="Adınız"
                                                                           value="{{ auth()->user()->name ?? old('name') }}">
                                                                </div>
                                                                @error('name')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="surname">Soyad</label>
                                                                    <input type="text" class="form-control mb-2 @error('surname') is-invalid @enderror"
                                                                           name='surname' id="surname"
                                                                           placeholder="Soyadınız" value="{{ auth()->user()->surname ?? old('surname') }}">
                                                                </div>
                                                                @error('surname')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title">Başlıq</label>
                                                                    <input type="text" class="form-control mb-2"
                                                                           name='title' id="title" placeholder="Başlıq"
                                                                           value="{{ $about->title ?? old('title') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title">Sahə</label>
                                                                    <input type="text" class="form-control mb-2 @error('specialty') is-invalid @enderror"
                                                                           name='specialty' id="specialty"
                                                                           placeholder="Sahə" value="{{ $about->specialty ?? old('specialty') }}">
                                                                </div>
                                                                @error('specialty')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="title">Ünvan</label>
                                                                    <input type="text" class="form-control mb-2"
                                                                           name='address' id="address"
                                                                           placeholder="Ünvan" value="{{ $about->address ?? old('address') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="email">E-mail</label>
                                                                    <input type="email" readonly class="form-control mb-2 @error('email') is-invalid @enderror"
                                                                            id="email" placeholder="E-mail"
                                                                           value="{{ auth()->user()->email ?? old('email') }}">
                                                                </div>
                                                                @error('email')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="phone">Telefon</label>
                                                                    <input type="text" class="form-control mb-2 @error('phone') is-invalid @enderror"
                                                                           name='phone' id="phone" placeholder="Telefon"
                                                                           value="{{ $about->phone ?? old('phone') }}">
                                                                </div>
                                                                @error('phone')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="short_description">Qısa Açığlama</label>
                                                                    <textarea
                                                                        class="form-control ck-editor__editable ck-editor__editable_inline"
                                                                        name="short_description" id="short_description"
                                                                        placeholder="Servis Açığlaması">{{ $about->short_description ?? old('description') }}</textarea>
                                                                </div>
                                                                @error('short_description')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="description">Açığlama</label>
                                                                    <textarea
                                                                        class="form-control ck-editor__editable ck-editor__editable_inline"
                                                                        name="description" id="description"
                                                                        placeholder="Servis Açığlaması">{{ $about->description ?? old('description') }}</textarea>
                                                                </div>
                                                                @error('description')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-6 mt-2">
                                                                <div class="row">
                                                                    <div class="col-md-9">
                                                                        <div class="form-group">
                                                                            <label for="img_hero">Şəkil (Hero)</label>
                                                                            <input
                                                                                class="form-control file-upload-input"
                                                                                type="file" name="img_hero"
                                                                                id="img_hero">
                                                                        </div>
                                                                        @error('img_hero')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        @if($about->img_hero)
                                                                            <img width="80" id="imgHeroPreview" src="{{ asset($about->img_hero) }}" alt="">
                                                                        @else
                                                                            <img width="100" src="{{ asset('/assets/img/default/img/hero.png') }}" alt="">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mt-2">
                                                                <div class="row">
                                                                    <div class="col-md-9">
                                                                        <div class="form-group">
                                                                            <label for="img_about">Şəkil
                                                                                (Haqqında)</label>
                                                                            <input
                                                                                class="form-control file-upload-input"
                                                                                type="file" name="img_about"
                                                                                id="img_about">
                                                                        </div>
                                                                        @error('img_about')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        @if($about->img_about)
                                                                            <img width="80" id="imgAboutPreview" src="{{ asset($about->img_about) }}" alt="">
                                                                        @else
                                                                            <img width="100" src="{{ asset('/assets/img/default/img/hero.png') }}" alt="">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-12 mt-3">
                                                                <div class="form-group text-end">
                                                                    <button
                                                                        class="btn btn-secondary _effect--ripple waves-effect waves-light">
                                                                        Saxla
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

                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing section social mt-4" id="social">
                                <div class="info">
                                    <h5 class="">Sosial Şəbəkələr</h5>
                                    <div class="row">

                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group social-linkedin mb-2">
                                                    <span class="input-group-text me-3"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-linkedin"><path
                                                                d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect
                                                                x="2" y="9" width="4" height="12"></rect><circle cx="4"
                                                                                                                 cy="4"
                                                                                                                 r="2"></circle></svg></span>
                                                        <input type="text" class="form-control" name="linkedin"
                                                               id="linkedin" placeholder="Linkedin istifadəçi adınız"
                                                               aria-label="Username" aria-describedby="linkedin"
                                                               value="{{ $about->linkedin ?? old('linkedin') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-group social-github mb-2">
                                                    <span class="input-group-text me-3"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-github"><path
                                                                d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></span>
                                                        <input type="text" class="form-control" name="github"
                                                               id="github"
                                                               placeholder="Github istifadəçi adınız"
                                                               aria-label="Username"
                                                               aria-describedby="github" value="{{ $about->github ?? old('github') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group social-fb mb-2">
                                                    <span class="input-group-text me-3"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-facebook"><path
                                                                d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                                        <input type="text" class="form-control" name="facebook"
                                                               id="facebook" placeholder="Facebook istifadəçi adınız"
                                                               aria-label="Username" aria-describedby="fb" value="{{ $about->facebook ?? old('facebook') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-group social-tweet mb-2">
                                                    <span class="input-group-text me-3"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-instagram"><path
                                                                d="M7 2 H17 A5 5 0 0 1 22 7 V17 A5 5 0 0 1 17 22 H7 A5 5 0 0 1 2 17 V7 A5 5 0 0 1 7 2 z"/><path
                                                                d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><path
                                                                d="M17.5 6.5 L17.51 6.5"/></svg></span>
                                                        <input type="text" class="form-control" name="instagram" id="x"
                                                               placeholder="X istifadəçi adınız" aria-label="Username"
                                                               aria-describedby="tweet" value="{{ $about->instagram ?? old('instagram') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-1">
                                                <div class="form-group text-end">
                                                    <button
                                                        class="btn btn-secondary _effect--ripple waves-effect waves-light">
                                                        Saxla
                                                    </button>
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
    <script>
        let img_about = document.querySelector('#img_about');
        let img_hero = document.querySelector('#img_hero');

        img_hero.addEventListener('change', function (event) {
            let element = event.target;
            previewImage(element, 'imgHeroPreview')
        });

        img_about.addEventListener('change', function (event) {
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
    <script src="{{ asset('assets/src/plugins/src/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageCrop.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageResize.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageTransform.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/notification/snackbar/snackbar.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/sweetalerts2/sweetalerts2.min.js') }}"></script>
    <script src="{{ asset('assets/src/assets/js/users/account-settings.js') }}"></script>
@endpush
