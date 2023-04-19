<?php ob_start(); ?>

<div class="container-fluid d-flex h-100 characterBackground">
    <div class="row align-self-center w-100">
        <div class="col-4 mx-auto auth-container">
            <h3>You can send us a mail, we'll be happy to help!</h3>

                <form method="post" action="/index.php?action=contact">
                    <div class="mb-3">
                        <label for="name">Name :</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small text-uppercase" for="email">E-mail :</label>
                        <input class="form-control" type="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small text-uppercase" for="subject">Subjet :</label>
                        <input class="form-control" type="text" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small text-uppercase" for="message">Your message :</label>
                        <textarea class="form-control" name="message" rows="8" cols="80" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Send</button>
                </form>
         </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require( __DIR__ . '/base.php'); ?>