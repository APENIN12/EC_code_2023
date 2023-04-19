<?php ob_start(); ?> 

<!-- login page -->
<div class="container-fluid d-flex h-100 characterBackground">
    <div class="row align-self-center w-100">
        <div class="col-4 mx-auto auth-container">
            <h3> Hello 👋
            </h3>
            <p class="text-muted"> Please sign in to join us! </p> 
            <form action="/index.php?action=registration" method="post">
                <div class="mb-3">
                    <label for="pseudo" class="form-label text-muted small text-uppercase">Your handle ?</label>
                    <input type="text" class="form-control" id="email" name="pseudo" placeholder="naruto" required />
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label text-muted small text-uppercase">Your email ?</label>
                    <input type="email" class="form-control" id="password" name="email" placeholder="naruto@gmail.com" required />
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-muted small text-uppercase">Your password ?</label>
                    <input type="password" class="form-control" id="password" name="password" required />
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-warning btn-lg btn-block w-100 mt-2">Create 🚀</button>

                </div>
                <div class="mb-3">
                    <a href="loginView.php">Previous page</a>
                </div>

            </form>
            
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?> 

<?php require( __DIR__ . '/base.php'); ?>
