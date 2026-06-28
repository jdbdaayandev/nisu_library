<x-layouts.app>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Book Catalog</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="/admin/books/add" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add New Book
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-filter"></i> Filter & Search</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="#" method="GET">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Search Query</label>
                                    <input type="text" class="form-control" placeholder="Title, ISBN, or Author...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control">
                                        <option value="">All Categories</option>
                                        <option>Fiction</option>
                                        <option>Non-Fiction</option>
                                        <option>Science & Technology</option>
                                        <option>History</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control">
                                        <option value="">All Statuses</option>
                                        <option>Available</option>
                                        <option>Borrowed</option>
                                        <option>Lost/Damaged</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex align-items-end">
                                <div class="form-group w-100">
                                    <button type="submit" class="btn btn-info w-100">
                                        <i class="fas fa-search"></i> Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Library Inventory</h3>
                    
                    <div class="card-tools">
                        <ul class="pagination pagination-sm float-right m-0">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 50px;">Cover</th>
                                    <th>ISBN</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="bg-secondary text-center rounded" style="width: 40px; height: 50px; line-height: 50px;">
                                            <i class="fas fa-book text-white"></i>
                                        </div>
                                    </td>
                                    <td>978-3-16-148410-0</td>
                                    <td><strong>The Great Gatsby</strong></td>
                                    <td>F. Scott Fitzgerald</td>
                                    <td>Fiction</td>
                                    <td><span class="badge badge-success">Available</span></td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-info" title="Checkout"><i class="fas fa-exchange-alt"></i></a>
                                        <a href="#" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <div class="bg-secondary text-center rounded" style="width: 40px; height: 50px; line-height: 50px;">
                                            <i class="fas fa-book text-white"></i>
                                        </div>
                                    </td>
                                    <td>978-0-12-345678-9</td>
                                    <td><strong>A Brief History of Time</strong></td>
                                    <td>Stephen Hawking</td>
                                    <td>Science & Tech</td>
                                    <td><span class="badge badge-warning">Borrowed</span></td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-info disabled" title="Checkout"><i class="fas fa-exchange-alt"></i></a>
                                        <a href="#" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="bg-secondary text-center rounded" style="width: 40px; height: 50px; line-height: 50px;">
                                            <i class="fas fa-book text-white"></i>
                                        </div>
                                    </td>
                                    <td>978-1-56-619909-4</td>
                                    <td><strong>1984</strong></td>
                                    <td>George Orwell</td>
                                    <td>Fiction</td>
                                    <td><span class="badge badge-danger">Lost</span></td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-info disabled" title="Checkout"><i class="fas fa-exchange-alt"></i></a>
                                        <a href="#" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    Showing 1 to 3 of 150 books
                </div>
            </div>

        </div>
    </section>

</x-layouts.app>