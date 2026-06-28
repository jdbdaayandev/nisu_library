<x-layouts.app>

    @push('styles')
        <link rel="stylesheet"
            href="{{ asset('template/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('template/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    @endpush

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#addCatalogModal">
                        <i class="fas fa-plus"></i> Add Category
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Manage Material Types</h3>
                </div>

                <div class="card-body">
                    <table id="categoryTable" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th style="width: 250px;">Category Name</th>
                                <th>Description</th>
                                <th style="width: 100px;" class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    @push('scripts')
        <script src="{{ asset('template/adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('template/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script
            src="{{ asset('template/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script
            src="{{ asset('template/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

        <script>
            $(function () {
                $('#categoryTable').DataTable({
                    "processing": true,     // Shows a "Processing..." spinner while fetching data
                    "serverSide": true,     // Tells DataTables to use the server
                    "ajax": "/categories", // The URL that hits your Controller's index method
                    "responsive": true,
                    "autoWidth": false,
                    // Map the JSON data to the correct table columns
                    "columns": [
                        { "data": "id", "name": "id" },
                        { "data": "category_name", "name": "category_name" },
                        { "data": "description", "name": "description" },
                        {
                            "data": "actions",
                            "name": "actions",
                            "orderable": false,  // Don't allow sorting by the action buttons
                            "searchable": false, // Don't search the HTML code of the buttons
                            "className": "text-right" // Align buttons to the right
                        }
                    ]
                });
            });

            @if ($errors->any())
                $(document).ready(function () {
                    $('#addCatalogModal').modal('show');
                });
            @endif
        </script>

        <script>
            $(document).ready(function () {

                // 1. BUTTON LOADING EFFECT ON SUBMIT
                $('#addCategoryForm').on('submit', function () {
                    let btn = $('#btnSaveCategory');

                    // Disable the button so they can't click it again
                    btn.prop('disabled', true);

                    // Show spinner, hide the static save icon, change text
                    $('#btnSpinner').removeClass('d-none');
                    $('#btnIcon').addClass('d-none');
                    $('#btnText').text('Saving...');
                });

                // 2. SWEETALERT FOR SUCCESS NOTIFICATION
                @if(session('success'))
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: "{{ session('success') }}",
                        /*timer: 3000,
                        showConfirmButton: false,
                        position: 'top-end',
                        timerProgressBar: true*/
                    });
                @endif

                // 3. REOPEN MODAL WITH SWAL ALERT IF VALIDATION FAILS
                @if ($errors->any())
                    $('#addCategoryForm').modal('show');

                @endif

                $(document).on('click', '.btn-edit', function () {

                    let id = $(this).data('id');

                    let url = `/categories/${id}`;

                    $.ajax({
                        url: url,
                        type: 'GET',
                        success: function (response) {

                            $('#edit_category_name').val(response.category_name);
                            $('#edit_description').val(response.description);

                            $('#editCategoryForm').attr('action', url);

                            console.log('UPDATE URL:', url); // ✅ FIXED

                            $('#editCategoryModal').modal('show');
                        },

                        error: function () {

                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Unable to retrieve category.'
                            });

                        }

                    });

                });

                $(document).on('click', '.btn-delete', function () {

                    let id = $(this).data('id');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "This record will be deleted!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#6c757d',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {

                        if (result.isConfirmed) {

                            $.ajax({
                                url: '/categories/' + id,   // ✅ FIXED
                                type: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function () {

                                    Swal.fire('Deleted!', 'Catalog type has been deleted.', 'success');

                                    $('#categoryTable').DataTable().ajax.reload(null, false);
                                },
                                error: function (xhr) {

                                    console.log(xhr.responseText);

                                    Swal.fire('Error!', 'Something went wrong.', 'error');
                                }
                            });

                        }

                    });

                });
            });
        </script>
    @endpush

    @include('libraries.categories.categoryAddModal');

    @include('libraries.categories.categoryEditModal');

</x-layouts.app>