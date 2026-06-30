{{-- EDIT --}}
    <div class="modal fade" id="editAuthorModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Edit Author</h5>

                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <form id="editAuthorForm" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="form-group">
                            <label>Author Name <span class="text-danger">*</span></label>

                            <input type="text" class="form-control" id="edit_author_name" name="author_name" required>
                            @error('author_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Biography</label>

                            <textarea class="form-control" id="edit_bio" name="bio" rows="3"></textarea>
                            @error('bio')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn btn-warning" id="btnUpdateCategory">

                            <i id="btnUpdateSpinner" class="fas fa-spinner fa-spin d-none"></i>
                            <i id="btnUpdateIcon" class="fas fa-save"></i>

                            <span id="btnUpdateText">
                                Update Author
                            </span>

                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>