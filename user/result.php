<div class="col">
    <div class="card">
        <div class="card-body bg-secondary text-white text-center">
            <p class="card-text"><?php echo $_SESSION['result']; ?></p>
        </div>
    </div>
</div>
<?php
$_SESSION = [];
unset($_COOKIE[session_name()]);
session_destroy();
die();
