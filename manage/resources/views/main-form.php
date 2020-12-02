<?php include('header.php') ?>
<style>
    body {
        overflow-y: auto;
    }
</style>
<main class="flex-1 d-flex">
    <div class="container">
        <div class="row form-group align-items-center">
            <div class="col-12">
                <div class="embed-code-widget mt-5 with-success">
                    <h4>Form created successfully!</h4>
                    <p>Click to copy the embed code</p>
                    <input type="text" id="copyfield" value="&#x3C;iframe src=&#x22;https://sicknwell.com/some-very-long-url-here&#x22;&#x3E;&#x3C;/iframe&#x3E;" readonly />
                </div>
            </div>
        </div>
        <div class="qcm-form-container">
            <iframe src="iframe.php" width="100%" frameborder="0" scrolling="no" onload="resizeIframe(this)"></iframe>
        </div>
    </div>
</main>
<?php include('footer.php') ?>