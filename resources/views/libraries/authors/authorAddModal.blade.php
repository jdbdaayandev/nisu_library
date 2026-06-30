{{-- ADD AUTHOR MODAL --}}
<div class="modal fade" id="addAuthorModal" tabindex="-1" role="dialog" aria-labelledby="addAuthorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title" id="addAuthorModalLabel">Add New Author</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="addAuthorForm" action="{{ route('authors.store') }}" method="POST">
                @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <label for="author_name">
                            Author Name <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control @error('author_name') is-invalid @enderror"
                            id="author_name" name="author_name" value="{{ old('author_name') }}"
                            placeholder="e.g. Jose Rizal, J.K. Rowling" required>

                        @error('author_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="bio">Bio</label>

                        <textarea class="form-control @error('bio') is-invalid @enderror" id="bio"
                            name="bio" rows="4"
                            placeholder="Brief biography of the author...">{{ old('bio') }}</textarea>

                        @error('bio')
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

                    <button type="submit" id="btnSaveAuthor" class="btn btn-primary">
                        <i id="btnSpinner" class="fas fa-spinner fa-spin d-none"></i>
                        <i id="btnIcon" class="fas fa-save"></i>
                        <span id="btnText">Save Author</span>
                    </button>
                </div>
                
            </form>

        </div>
    </div>
</div>