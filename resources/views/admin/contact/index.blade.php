@extends('layouts.admin')
@section('title', 'Əlaqə | Mesajlar')

@push('css')
    <link href="{{ asset('assets/src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Əlaqə | Mesajlar</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col"><b>Ad Soyad</b></th>
                        <th scope="col"><b>Başlıq</b></th>
                        <th scope="col"><b>Email</b></th>
                        <th scope="col"><b>Telefon</b></th>
                        <th scope="col"><b>Mesaj</b></th>
                        <th class="text-center" scope="col"><b>Action</b></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr id="row-{{ $contact->id }}">
                            <td><b class="text-danger">{{ $contact->name }}</b></td>
                            <td>{{ $contact->title }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td><b class="text-warning">{{ substr($contact->message, 0, 20) }}...</b></td>

                            <td class="text-center">
                                <div class="action-btns">
                                    <span data-bs-toggle="modal" data-bs-target="#modal-{{$contact->id}}">
                                        <a href="javascript:void(0)" class="action-btn btn-view bs-tooltip me-2"
                                           data-placement="top" aria-label="Ətraflı"
                                           data-bs-original-title="Ətraflı">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-eye text-primary">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                        </span>
                                    <a href="javascript:void(0);" data-id="{{ $contact->id }}"
                                       data-name="{{ $contact->name }}" class="action-btn btn-delete bs-tooltip"
                                       data-toggle="tooltip" data-placement="top" aria-label="Sil"
                                       data-bs-original-title="Sil">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
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

                        <!-- Modal -->
                        <div class="modal fade" id="modal-{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Mesaj - </b><b class="text-warning">{{ $contact->name }}</b></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 mt-2">
                                                <h5 class="mb-1">Ad Soyad</h5>
                                                <span class="text-black">{{ $contact->name }}</span>
                                            </div>

                                            <div class="col-md-6 mt-2">
                                                <h5 class="mb-1">Başlıq</h5>
                                                <span class="{{ $contact->title ? 'text-black' : 'text-danger' }}">{{ $contact->title ?? 'Qeyd olunmayıb' }}</span>
                                            </div>

                                            <div class="col-md-6 mt-2">
                                                <h5 class="mb-1">Email</h5>
                                                <span class="text-black">{{ $contact->email }}</span>
                                            </div>

                                            <div class="col-md-6 mt-2">
                                                <h5 class="mb-1">Telefon</h5>
                                                <span class="{{ $contact->phone ? 'text-black' : 'text-danger' }}">{{ $contact->phone ?? 'Qeyd olunmayıb' }}</span>
                                            </div>

                                            <div class="col-md-12 mt-2">
                                                <h5 class="mb-1">Mesaj</h5>
                                                <span class="{{ $contact->message ? 'text-black' : 'text-danger' }}">{{ $contact->message ?? 'Qeyd olunmayıb' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn btn-light-dark" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Çıxış</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('document').ready(() => {
            $('.btn-delete').on('click', function () {
                let self = $(this);
                let id = self.data('id');
                let name = self.data('name');
                let route = "{{ route('admin.contact.destroy', 'test') }}"
                route = route.replace('test', id);

                Swal.fire({
                    title: name,
                    text: "Mesajı silmək istədiyinizə əminsiz?",
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
                            success: (data) => {
                                if (data.status) {
                                    $('#row-' + id).remove();
                                }
                            },
                            error: () => {
                                console.log('Ajax Error!')
                            }
                        });

                        Swal.fire(
                            'Uğurlu!',
                            `Mesaj uğurla silindi!`,
                            'success',
                        )
                    }
                })

            })
        })
    </script>
@endpush
