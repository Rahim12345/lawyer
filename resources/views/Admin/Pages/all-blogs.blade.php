@extends('Admin.Layout.master')

@section('title')
Bütün bloglar
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">

    <style>
        table.theme-dark tr td{
            color: #656d77;
            background-color: #232e3c;
        }

        table tr td {
            width: max-content !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            background-color: #232e3c;
            color: #FFFFFF !important;
            border: 3px solid #206bc4;
        }
        div#mehsullar_length, div#mehsullar_filter, div#mehsullar_info, span.ellipsis{
            color: #656d77 !important;
        }

        table.dataTable {
            margin: 0 0 !important;
        }
        .card {
            word-wrap: normal;
        }

        .table-mobile-md td {
            color: #656d77 !important;
        }
    </style>
@endsection

@section('content')
    <div class="mb-auto">
        <div class="container-xl shadow p-3 mb-5 bg-white rounded col-11">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">
                            Bloglar
                        </div>
                        <h2 class="page-title">
                            Bütün bloglar
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <a href="{{ route('blog.create') }}" class="btn btn-primary">{{ __('admin_master.add') }}</a>
                    <div class="table-responsive">
                        <table class="table table-vcenter table-mobile-md card-table" id="blog-table">
                            <thead>
                            <tr>
                                <th scope="col">Photo</th>
                                <th scope="col">Title(AZ)</th>
                                <th scope="col">Title(EN)</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>

    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('#blog-table');

            table.DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('blog.index') }}",
                },
                columns: [
                    {data: 'photo', name: 'photo',searchable:false,orderable: false},
                    {data: 'title_az', name: 'title_az'},
                    {data: 'title_en', name: 'title_en'},
                    {data: 'status', name: 'status',searchable:false,orderable: false},
                    {data: 'action', name: 'action',searchable:false,orderable: false},
                ],
                createdRow: function( row, data, dataIndex ) {
                    $( row ).find('td:eq(0)').attr('data-label', 'photo');
                    $( row ).find('td:eq(1)').attr('data-label', 'Title(AZ)');
                    $( row ).find('td:eq(2)').attr('data-label', 'Title(EN)');
                    $( row ).find('td:eq(3)').attr('data-label', 'Status');
                    $( row ).find('td:eq(4)').attr('data-label', 'Action');
                },
                "language": {
                    "sEmptyTable": "Cədvəldə heç bir məlumat yoxdur",
                    "sInfo": " _TOTAL_ Nəticədən _START_ - _END_ Arası Nəticələr",
                    "sInfoEmpty": "Nəticə Yoxdur",
                    "sInfoFiltered": "( _MAX_ Nəticə İçindən Tapılanlar)",
                    "sInfoThousands": ",",
                    "sLengthMenu": "Səhifədə _MENU_ Nəticə Göstər",
                    "sLoadingRecords": "Yüklənir...",
                    "sProcessing": "Gözləyin...",
                    "sSearch": "Axtarış:",
                    "sZeroRecords": "Nəticə Tapılmadı.",
                    "oPaginate": {
                        "sFirst": "İlk",
                        "sLast": "Axırıncı",
                        "sNext": "Sonraki",
                        "sPrevious": "Öncəki"
                    },
                    "oAria": {
                        "sSortAscending": ": sütunu artma sırası üzərə aktiv etmək",
                        "sSortDescending": ": sütunu azalma sırası üzərə aktiv etmək"
                    }
                },
                stateSave: true,
            });
        });
    </script>

    <script>
        $(document).on('click','.switcher',function () {
            let id = $(this).attr('data-id');
            $.ajax({
                data : {id},
                url  : '{!! route('admin.blog.switcher') !!}',
                type : 'POST',
                success : function (response) {
                    $('#blog-table').DataTable().ajax.reload( null, false );
                },
                error : function (myErrors) {
                    $.each(myErrors.responseJSON.errors, function (key, value) {
                       alert(value);
                    });
                }
            });
        });
    </script>

@endsection
