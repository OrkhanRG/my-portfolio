@extends('layouts.admin')
@section('title', 'Servislər')

@push('css')
@endpush

@section('content')
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Bacarıqlar</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col"><b>Şəkil</b></th>
                        <th scope="col"><b>Şirkət Adı</b></th>
                        <th class="text-center" scope="col"><b>Status</b></th>
                        <th class="text-center" scope="col"><b>Action</b></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($companies as $company)
                        <tr id="row-{{ $company->id }}">
                            <td width="10">
                                <div class="media">
                                    <div class="avatar me-2">
                                        <img alt="avatar-{{ $company->name }}" src="{{ asset($company->image) }}" class="rounded-circle">
                                    </div>
                                </div>
                            </td>
                            <td>{{ $company->name }}</td>
                            <td class="text-center">
                                <span class="badge badge-light-{{ $company->status ? 'success' : 'danger' }} btn-change-status" data-id="{{ $company->id }}">
                                   {{ $company->status ? 'Aktiv' : 'Passiv' }}
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="action-btns">
                                    <a href="{{ route('admin.company.edit', $company->id) }}" class="action-btn btn-edit bs-tooltip me-2"
                                       data-toggle="tooltip" data-placement="top" aria-label="Edit"
                                       data-bs-original-title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-edit-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0);" data-id="{{ $company->id }}" data-name="{{ $company->name }}" class="action-btn btn-delete bs-tooltip"
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
                <div class="d-flex justify-content-center">
                    {{ $companies->links() }}
                </div>
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
                    url: "{{ route('admin.company.change-status') }}",
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

            $('.btn-delete').on('click', function () {
                let self = $(this);
                let id = self.data('id');
                let name = self.data('name');
                let route = "{{ route('admin.company.destroy', 'test') }}"
                route = route.replace('test', id);

                Swal.fire({
                    title: name,
                    text:  "Şirkətini silmək istədiyinizə əminsiz?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Bəli!',
                    cancelButtonText: 'Xeyr!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            url: route,
                            type: 'POST',
                            data: {
                                _method: 'DELETE',
                            },
                            success : (data) => {
                                if(data.status)
                                {
                                    $('#row-'+id).remove();
                                }
                            },
                            error: () => {
                                console.log('Ajax Error!')
                            }
                        });

                        Swal.fire(
                            'Uğurlu!',
                            `Şirkət uğurla silindi!`,
                            'success',
                        )
                    }
                })

            })
        })
    </script>
@endpush
