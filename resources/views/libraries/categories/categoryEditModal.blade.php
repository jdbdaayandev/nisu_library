{{-- EDIT --}}
    <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Edit Category</h5>

                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <form id="editCategoryForm" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="form-group">
                            <label>Category Name <span class="text-danger">*</span></label>

                            <input type="text" class="form-control" id="edit_category_name" name="category_name" required>
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

                        <button type="submit" class="btn btn-warning" id="btnUpdateCategory">

                            <i id="btnUpdateSpinner" class="fas fa-spinner fa-spin d-none"></i>
                            <i id="btnUpdateIcon" class="fas fa-save"></i>

                            <span id="btnUpdateText">
                                Update Category
                            </span>

                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>