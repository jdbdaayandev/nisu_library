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
                    <h1>Authors</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#addAuthorModal">
                        <i class="fas fa-plus"></i> Add Author
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Manage Authors</h3>
                </div>

                <div class="card-body">
                    <table id="authorTable" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th style="width: 250px;">Author Name</th>
                                <th>Bio</th>
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
                $('#authorTable').DataTable({
                    "processing": true,     // Shows a "Processing..." spinner while fetching data
                    "serverSide": true,     // Tells DataTables to use the server
                    "ajax": "/authors",     // The URL that hits your Controller's index method
                    "responsive": true,
                    "autoWidth": false,
                    // Map the JSON data to the correct table columns
                    "columns": [
                        { "data": "id", "name": "id" },
                        { "data": "author_name", "name": "author_name" },
                        { "data": "bio", "name": "bio" },
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
        </script>

       <script>
$(document).ready(function () {

    // 1. BUTTON LOADING EFFECT ON SUBMIT
    $('#addAuthorForm').on('submit', function () {
        let btn = $('#btnSaveAuthor');

        btn.prop('disabled', true);
        $('#btnSpinner').removeClass('d-none');
        $('#btnIcon').addClass('d-none');
        $('#btnText').text('Saving...');
    });

    // 2. SWEETALERT SUCCESS
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}"
        });
    @endif

    // 3. REOPEN MODAL AFTER VALIDATION ERROR
    @if(session('modal') == 'add')
        $('#addAuthorModal').modal('show');
    @endif

    @if(session('modal') == 'edit')

        let id = "{{ session('edit_id') }}";

        $.get('/authors/' + id, function (response) {

            $('#edit_author_name').val("{{ old('author_name') }}" || response.author_name);
            $('#edit_bio').val("{{ old('bio') }}" || response.bio);

            $('#editAuthorForm').attr('action', '/authors/' + id);

            $('#editAuthorModal').modal('show');
        });

    @endif

    // 4. FETCH AND SHOW EDIT MODAL
    $(document).on('click', '.btn-edit', function () {

        let id = $(this).data('id');
        let url = `/authors/${id}`;

        $.ajax({
            url: url,
            type: 'GET',
            success: function (response) {

                $('#edit_author_name').val(response.author_name);
                $('#edit_bio').val(response.bio);

                $('#editAuthorForm').attr('action', url);

                $('#editAuthorModal').modal('show');
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Unable to retrieve author details.'
                });
            }
        });

    });

    // 5. DELETE AUTHOR
    $(document).on('click', '.btn-delete', function () {

        let id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: 'This record will be deleted!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {

            if (result.isConfirmed) {

                $.ajax({
                    url: '/authors/' + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function () {
                        Swal.fire('Deleted!', 'Author has been deleted.', 'success');
                        $('#authorTable').DataTable().ajax.reload(null, false);
                    },
                    error: function () {
                        Swal.fire('Error!', 'Something went wrong.', 'error');
                    }
                });

            }

        });

    });

});
</script>
    @endpush

    @include('libraries.authors.authorAddModal')
    @include('libraries.authors.authorEditModal')

</x-layouts.app>