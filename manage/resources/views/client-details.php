<?php include('header.php') ?>
<main class="flex-1 d-flex">
    <?php include('sidebar.php') ?>
    <div class="main-content flex-1 d-flex flex-column">
    <h2 class="main-heading d-flex w-100 align-items-center justify-content-between">
            <span>Add Client</span>
            <a href="add-client.php">Edit</a>
        </h2>
        <div class="flex-1">
            <div class="scrollbar-fancy h-100">
                <div class="form-type-1">
                    <form action="clients.php">
                        <div class="container-fluid">
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Full Name</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <div class="form-val">
                                        <p>John Doe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Company Name</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <div class="form-val">
                                        <p>Google</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Job Title</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <div class="form-val">
                                        <p>Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Industry</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <div class="form-val">
                                        <p>IT</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Username</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <div class="form-val">
                                        <p>johndoe5222</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Email Address</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <div class="form-val">
                                        <p>johndoe@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</main>
<?php include('footer.php') ?>