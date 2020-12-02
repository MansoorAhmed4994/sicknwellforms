<?php include('header.php') ?>
<main class="flex-1 d-flex">
    <?php include('sidebar.php') ?>
    <div class="main-content  flex-1 d-flex flex-column">
        <h2 class="main-heading d-flex w-100 align-items-center justify-content-between">
            <span>Form Details</span>
            <a href="create-form-2.php">Edit</a>
        </h2>
        <div class="flex-1">
            <div class="scrollbar-fancy h-100">
                <div class="form-type-1">
                    <div class="container-fluid">
                        <div class="row form-group align-items-center">
                            <div class="col-12 col-md-4 col-lg-2">
                                <label>Select client</label>
                            </div>
                            <div class="col-12 col-md-8 col-lg-10">
                                <div class="form-val">
                                    <p>QCM</p>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group align-items-center">
                            <div class="col-12 col-md-4 col-lg-2">
                                <label>Client logo</label>
                            </div>
                            <div class="col-12 col-md-8 col-lg-10">
                                <img src="images/qcm.png" id="fp-display show" />
                            </div>
                        </div>
                        <div class="row form-group align-items-center">
                            <div class="col-12 col-md-4 col-lg-2">
                                <label>Client name <small>(on form)</small></label>
                            </div>
                            <div class="col-12 col-md-8 col-lg-10">
                                <div class="form-val">
                                    <p>QCM</p>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group align-items-center">
                            <div class="col-12 col-md-4 col-lg-2">
                                <label>Client color theme</label>
                            </div>
                            <div class="col-12 col-md-8 col-lg-10">
                                <div class="form-val color" style="background-color: #013e77;">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group align-items-center">
                            <div class="col-12">
                                <div class="embed-code-widget">
                                    <p>Click to copy the embed code</p>
                                    <input type="text" id="copyfield" value="&#x3C;iframe src=&#x22;https://sicknwell.com/some-very-long-url-here&#x22;&#x3E;&#x3C;/iframe&#x3E;" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('footer.php') ?>