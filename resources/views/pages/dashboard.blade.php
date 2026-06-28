<x-layouts.app>
    
    <div class="content-header mb-3 pb-0">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Overview & Statistics</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>1,250</h3>
                    <p>Total Students</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <a href="#" class="small-box-footer">Manage Students <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>24</h3>
                    <p>Active Courses</p>
                </div>
                <div class="icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <a href="#" class="small-box-footer">View Courses <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>48</h3>
                    <p>Pending Assignments</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <a href="#" class="small-box-footer">Grade Now <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>342</h3>
                    <p>Certificates Issued</p>
                </div>
                <div class="icon">
                    <i class="fas fa-award"></i>
                </div>
                <a href="#" class="small-box-footer">View Reports <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-8">
            <div class="card card-primary card-outline">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Recent Course Enrollments</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0 table-hover">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Course</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">STU-9842</a></td>
                                    <td>Jane Doe</td>
                                    <td>Introduction to Laravel</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>Today</td>
                                </tr>
                                <tr>
                                    <td><a href="#">STU-9841</a></td>
                                    <td>John Smith</td>
                                    <td>Advanced JavaScript</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>Today</td>
                                </tr>
                                <tr>
                                    <td><a href="#">STU-9840</a></td>
                                    <td>Maria Garcia</td>
                                    <td>UI/UX Principles</td>
                                    <td><span class="badge badge-warning">Pending Payment</span></td>
                                    <td>Yesterday</td>
                                </tr>
                                <tr>
                                    <td><a href="#">STU-9839</a></td>
                                    <td>David Lee</td>
                                    <td>Introduction to Laravel</td>
                                    <td><span class="badge badge-danger">Dropped</span></td>
                                    <td>Yesterday</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Enroll New Student</a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Enrollments</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-warning card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Instructor Tasks
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="todo-list" data-widget="todo-list">
                        <li>
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                <label for="todoCheck1"></label>
                            </div>
                            <span class="text">Grade Web Dev midterms</span>
                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2 hours</small>
                        </li>
                        <li>
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                <label for="todoCheck2"></label>
                            </div>
                            <span class="text">Upload Week 4 materials</span>
                            <small class="badge badge-info"><i class="far fa-clock"></i> Today</small>
                        </li>
                        <li>
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                <label for="todoCheck3"></label>
                            </div>
                            <span class="text">Respond to student forum</span>
                            <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                        </li>
                        <li>
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                <label for="todoCheck4"></label>
                            </div>
                            <span class="text">Review new course syllabus</span>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                        </li>
                    </ul>
                </div>
                <div class="card-footer clearfix">
                    <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add task</button>
                </div>
            </div>
        </div>

    </div>
</x-layouts.app>