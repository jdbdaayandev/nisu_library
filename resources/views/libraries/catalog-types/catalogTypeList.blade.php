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
                    <h1>Catalog Types</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#addCatalogModal">
                        <i class="fas fa-plus"></i> Add Catalog Type
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
                    <table id="catalogTypesTable" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th style="width: 250px;">Catalog Name</th>
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
                $('#catalogTypesTable').DataTable({
                    "processing": true,     // Shows a "Processing..." spinner while fetching data
                    "serverSide": true,     // Tells DataTables to use the server
                    "ajax": "/catalog-types", // The URL that hits your Controller's index method
                    "responsive": true,
                    "autoWidth": false,
                    // Map the JSON data to the correct table columns
                    "columns": [
                        { "data": "id", "name": "id" },
                        { "data": "catalog_name", "name": "catalog_name" },
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
                $('#addCatalogForm').on('submit', function () {
                    let btn = $('#btnSaveCatalog');

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
                    $('#addCatalogModal').modal('show');

                @endif

                $(document).on('click', '.btn-edit', function () {

                    let id = $(this).data('id');

                    $.ajax({
                        url: '/catalog-types/' + id,
                        type: 'GET',
                        success: function (response) {

                            $('#edit_catalog_name').val(response.catalog_name);
                            $('#edit_description').val(response.description);

                            $('#editCatalogForm').attr(
                                'action',
                                '/catalog-types/' + response.id
                            );

                            $('#editCatalogModal').modal('show');
                        },

                        error: function () {

                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Unable to retrieve catalog type.'
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
                url: '/catalog-types/' + id,   // ✅ FIXED
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function () {

                    Swal.fire('Deleted!', 'Catalog type has been deleted.', 'success');

                    $('#catalogTypesTable').DataTable().ajax.reload(null, false);
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

    {{-- ADD --}}
    <div class="modal fade" id="addCatalogModal" tabindex="-1" role="dialog" aria-labelledby="addCatalogModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCatalogModalLabel">Add New Catalog Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="addCatalogForm" action="{{ route('catalog-types.store') }}" method="POST">
                    @csrf

                    <div class="modal-body">

                        <div class="form-group">
                            <label for="catalog_name">
                                Catalog Name <span class="text-danger">*</span>
                            </label>

                            <input type="text" class="form-control @error('catalog_name') is-invalid @enderror"
                                id="catalog_name" name="catalog_name" value="{{ old('catalog_name') }}"
                                placeholder="e.g. Book, Magazine" required>

                            @error('catalog_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>

                            <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                name="description" rows="3"
                                placeholder="Brief description...">{{ old('description') }}</textarea>

                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" id="btnSaveCatalog" class="btn btn-primary">
                            <i id="btnSpinner" class="fas fa-spinner fa-spin d-none"></i>
                            <i id="btnIcon" class="fas fa-save"></i>
                            <span id="btnText">Save Catalog</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    {{-- EDIT --}}
    <div class="modal fade" id="editCatalogModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Edit Catalog Type</h5>

                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <form id="editCatalogForm" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="form-group">
                            <label>Catalog Name <span class="text-danger">*</span></label>

                            <input type="text" class="form-control" id="edit_catalog_name" name="catalog_name" required>
                        </div>

                        <div class="form-group">
                            <label>Description</label>

                            <textarea class="form-control" id="edit_description" name="description" rows="3"></textarea>
                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn btn-warning" id="btnUpdateCatalog">

                            <i id="btnUpdateSpinner" class="fas fa-spinner fa-spin d-none"></i>
                            <i id="btnUpdateIcon" class="fas fa-save"></i>

                            <span id="btnUpdateText">
                                Update Catalog
                            </span>

                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>

</x-layouts.app>