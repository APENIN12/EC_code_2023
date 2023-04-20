<?php ob_start(); ?>

<!-- /*************************************
 * ----- form to create a server -----
 **************************************/ -->

<div class="container-fluid">
    <div class="row">
        <div class="d-flex  justify-content-center col-sm-6 col-md-9 mt-2">
            <div>
                <div class="row">
                    <div class="col-10">
                        <h2><i class="bi-people-fill mx-2"></i>Server</h2>
                    </div> 
                </div>
                <form method="post" action="/index.php?action=?">
                    <div class="mb-3">
                        <label class="form-label small text-uppercase" for="name">Name of your server </label>
                        <input class="form-control" type="name" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Create</button>
                </form>
                <!-- <a class="text-white mt-3" href="/index.php?action=previous"> ⬅️ Previous page</a>  -->
            </div>
        </div>

<?php $content = ob_get_clean(); ?>
<?php require('logout.php'); ?>
<?php require('base.php'); ?>