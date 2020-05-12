<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['auser']['name']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['auser']['user_type']; ?></h6>
            <p class="card-text"><?= $data['auser']['email']; ?></p>
            <a href="<?= BASEURL; ?>/user" class="card-link">Return</a>
        </div>
    </div>
</div>