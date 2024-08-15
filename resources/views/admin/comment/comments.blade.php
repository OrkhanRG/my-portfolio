@extends('layouts.admin')
@section('title', 'Komentlər')

@push('css')
@endpush

@section('content')
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Komentlər</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col"><b>Ad Soyad</b></th>
                        <th scope="col"><b>Email</b></th>
                        <th scope="col"><b>Koment</b></th>
                        <th scope="col"><b>IP</b></th>
                        <th scope="col"><b>Üst Koment</b></th>
                        <th scope="col"><b>Bloq</b></th>
                        <th class="text-center" scope="col"><b>Status</b></th>
                        <th class="text-center" scope="col"><b>Action</b></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr id="row-{{ $comment->id }}">
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td >
                                <i data-bs-toggle="tooltip" data-bs-placement="top" data-feather="message-square" title="{{ strip_tags($comment->comment) }}"></i>
                            </td>
                            <td>{{ $comment->ip }}</td>
                            <td>{{ $comment->parentComment->name ?? '-' }}</td>
                            <td>{{ $comment->blog->title ?? '-' }}</td>
                            <td class="text-center">
                                <span class="badge badge-light-{{ $comment->is_active ? 'success' : 'danger' }} btn-change-status" data-id="{{ $comment->id }}">
                                   {{ $comment->status ? 'Aktiv' : 'Passiv' }}
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="action-btns">
                                    <a href="javascript:void(0);" data-id="{{ $comment->id }}" data-name="{{ $comment->name }}" class="action-btn btn-delete bs-tooltip"
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
                    {{ $comments->links() }}
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
                    url: "{{ route('admin.comment.change-status') }}",
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
                let route = "{{ route('admin.comment.destroy', 'test') }}"
                route = route.replace('test', id);

                Swal.fire({
                    title: name,
                    text:  "Kateqoriyasını silmək istədiyinizə əminsiz?",
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
                            `Kateqoriya uğurla silindi!`,
                            'success',
                        )
                    }
                })

            })
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        });
    </script>

@endpush
