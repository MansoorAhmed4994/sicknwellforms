@extends('layouts.app')

@section('content')
 
        <h2 class="main-heading">All Forms</h2>
        <div class="flex-1">
            <div class="scrollbar-fancy h-100">
                <div class="forms-items">
                    <div class="form-item d-flex align-items-center">
                        <i class="fas fa-file-alt"></i>
                        <div class="name-and-details flex-1">
                            <h4><a href="form-details.php">Product Form</a></h4>
                            <h6><a href="form-submissions.php">0 Submissions</a></h6>
                        </div>
                        <div class="actions-list align-self-stretch">
                            <ul class="h-100">
                                <li class="dropdown  h-100 d-flex align-items-center">
                                    <span data-toggle="dropdown" data-display="static" data-position="right">More <i class="fas fa-caret-down"></i></span>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li>
                                                <a href="form-details.php" class="d-flex align-items-center">
                                                    <i class="fas fa-eye"></i><span>View form</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="form-submissions.php" class="d-flex align-items-center">
                                                    <i class="fad fa-inbox"></i><span>View submissions</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex align-items-center">
                                                    <i class="fas fa-trash"></i><span>Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-item d-flex align-items-center">
                        <i class="fas fa-file-alt"></i>
                        <div class="name-and-details flex-1">
                            <h4><a href="form-details.php">Product Form</a></h4>
                            <h6><a href="form-submissions.php">0 Submissions</a></h6>
                        </div>
                        <div class="actions-list align-self-stretch">
                            <ul class="h-100">
                                <li class="dropdown  h-100 d-flex align-items-center">
                                    <span data-toggle="dropdown" data-display="static" data-position="right">More <i class="fas fa-caret-down"></i></span>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li>
                                                <a href="form-details.php" class="d-flex align-items-center">
                                                    <i class="fas fa-eye"></i><span>View form</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="form-submissions.php" class="d-flex align-items-center">
                                                    <i class="fad fa-inbox"></i><span>View submissions</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex align-items-center">
                                                    <i class="fas fa-trash"></i><span>Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-item d-flex align-items-center">
                        <i class="fas fa-file-alt"></i>
                        <div class="name-and-details flex-1">
                            <h4><a href="form-details.php">Product Form</a></h4>
                            <h6><a href="form-submissions.php">0 Submissions</a></h6>
                        </div>
                        <div class="actions-list align-self-stretch">
                            <ul class="h-100">
                                <li class="dropdown  h-100 d-flex align-items-center">
                                    <span data-toggle="dropdown" data-display="static" data-position="right">More <i class="fas fa-caret-down"></i></span>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li>
                                                <a href="form-details.php" class="d-flex align-items-center">
                                                    <i class="fas fa-eye"></i><span>View form</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="form-submissions.php" class="d-flex align-items-center">
                                                    <i class="fad fa-inbox"></i><span>View submissions</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex align-items-center">
                                                    <i class="fas fa-trash"></i><span>Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection