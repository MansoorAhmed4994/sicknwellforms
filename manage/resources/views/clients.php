<?php include('header.php') ?>
<main class="flex-1 d-flex">
    <?php include('sidebar.php') ?>
    <div class="main-content flex-1 d-flex flex-column">
        <h2 class="main-heading d-flex w-100 align-items-center justify-content-between">
            <span>Clients</span>
            <a href="add-client.php">Add Client</a>
        </h2>
        <div class="flex-1">
            <div class="scrollbar-fancy h-100">
                <div class="forms-items">
                    <div class="form-item d-flex align-items-center">
                        <i class="fas fa-user"></i>
                        <div class="name-and-details flex-1">
                            <h4><a href="client-details.php">Client name here</a></h4>
                        </div>
                        <div class="actions-list align-self-stretch">
                            <ul class="h-100">
                                <li class="dropdown  h-100 d-flex align-items-center">
                                    <span class="h-100 d-flex align-items-center justify-content-center" data-toggle="dropdown" data-display="static" data-position="right"><span>More <i class="fas fa-caret-down"></i></span> </span>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li>
                                                <a href="client-details.php" class="d-flex align-items-center">
                                                    <i class="fas fa-eye"></i><span>View Client</span>
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
<?php include('footer.php') ?>