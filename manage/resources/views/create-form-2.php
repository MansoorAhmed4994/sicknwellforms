<?php include('header.php') ?>
<main class="flex-1 d-flex">
    <?php include('sidebar.php') ?>
    <div class="main-content flex-1 d-flex flex-column">
        <h2 class="main-heading">Form Details</h2>
        <div class="flex-1">
            <div class="scrollbar-fancy h-100">
                <div class="form-type-1">
                    <form action="main-form.php">
                        <div class="container-fluid">
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Select client</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <select class="form-control custominput">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Client logo</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <input type="file" id="fakefilepicker" />
                                    <img src="" id="fp-display" />
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Client name <small>(on form)</small></label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <input type="text" class="form-control custominput" placeholder="Type here" />
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Client color theme</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <input type="color" class="form-control custominput" placeholder="Type here" />
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                </div>
                                <div class="col-12 col-md-10">
                                    <input type="submit" value="Submit" />
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