<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="<?= site_url('/login/auth');?>"> Logo </a>
    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" onclick="window.location.href='<?php echo base_url().'index.php/login/logout'?>'"> Logout </button>
</nav>