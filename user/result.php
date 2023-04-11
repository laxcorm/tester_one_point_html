<div class="col">
    <div class="card">
        <div class="card-body bg-secondary text-white text-center">
            <p class="card-text"><?php echo $_SESSION['result']; ?></p>
        </div>
    </div>
</div>
<?php
require_once(dirname(__DIR__) . '/session/destroy.php');
die();