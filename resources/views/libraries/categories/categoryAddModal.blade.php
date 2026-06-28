{{-- ADD --}}
    <div class="modal fade" id="addCatalogModal" tabindex="-1" role="dialog" aria-labelledby="addCatalogModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCatalogModalLabel">Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="addCategoryForm" action="{{ route('categories.store') }}" method="POST">
                    @csrf

                    <div class="modal-body">

                        <div class="form-group">
                            <label for="category_name">
                                Category Name <span class="text-danger">*</span>
                            </label>

                            <input type="text" class="form-control @error('category_name') is-invalid @enderror"
                                id="category_name" name="category_name" value="{{ old('category_name') }}"
                                placeholder="e.g. Fiction, Non-Fiction" required>

                            @error('category_name')
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

                        <button type="submit" id="btnSaveCategory" class="btn btn-primary">
                            <i id="btnSpinner" class="fas fa-spinner fa-spin d-none"></i>
                            <i id="btnIcon" class="fas fa-save"></i>
                            <span id="btnText">Save Category</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
