@extends('layouts.admin')
@section('title', 'Servislər')

@push('css')
@endpush

@section('content')
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Servislər</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col"><b>Servis Adı</b></th>
                        <th scope="col"><b>Açığlama</b></th>
                        <th class="text-center" scope="col"><b>Status</b></th>
                        <th class="text-center" scope="col"><b>Önə Çıxarılsın?</b></th>
                        <th class="text-center" scope="col"><b>Action</b></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{{ $service->name }}</td>
                            <td>{!! $service->description !!}</td>
                            <td class="text-center">
                                <span class="badge badge-light-{{ $service->status ? 'success' : 'danger' }} btn-change-status" data-id="{{ $service->id }}">
                                   {{ $service->status ? 'Aktiv' : 'Passiv' }}
                                </span>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-light-{{ $service->is_featured ? 'success' : 'danger' }} btn-change-is-featured" data-id="{{ $service->id }}">
                                    {{ $service->is_featured ? 'Hə' : 'Yox' }}
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="action-btns">
                                    <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2"
                                       data-toggle="tooltip" data-placement="top" aria-label="Edit"
                                       data-bs-original-title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-edit-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip"
                                       data-toggle="tooltip" data-placement="top" aria-label="Delete"
                                       data-bs-original-title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('document').ready(() => {
            $('.btn-change-status').on('click', function () {
                let self = $(this);
                let id = self.data('id');

                $.ajax({
                    url: "{{ route('admin.service.change-status') }}",
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success : (data) => {
                        self.text(data.data.status ? 'Aktiv' : 'Passiv');
                        if (data.data.status){
                            self.removeClass('badge-light-danger');
                            self.addClass('badge-light-success');
                        }
                        else {
                            self.removeClass('badge-light-success');
                            self.addClass('badge-light-danger');
                        }

                        Toast.fire({
                            icon: 'success',
                            title: 'Status ' + (data.data.status ? 'Aktiv' : 'Passiv') + ' Olaraq Dəyişdirildi!'
                        })
                    },
                    error: () => {
                        console.log('Ajax Error!')
                    }
                });
            })

            $('.btn-change-is-featured').on('click', function () {
                let self = $(this);
                let id = self.data('id');

                $.ajax({
                    url: "{{ route('admin.service.change-is-featured') }}",
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success : (data) => {
                        self.text(data.data.is_featured ? 'Hə' : 'Yox');
                        if (data.data.is_featured){
                            self.removeClass('badge-light-danger');
                            self.addClass('badge-light-success');
                        }
                        else {
                            self.removeClass('badge-light-success');
                            self.addClass('badge-light-danger');
                        }

                        Toast.fire({
                            icon: 'success',
                            title: 'Önə Çıxarılmas Status ' + (data.data.is_featured ? 'Hə' : 'Yox') + ' Olaraq Dəyişdirildi!'
                        })
                    },
                    error: () => {
                        console.log('Ajax Error!')
                    }
                });
            })
        })
    </script>
@endpush
