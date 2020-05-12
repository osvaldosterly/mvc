<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h3>User List</h3>
            <?php foreach($data['auser'] as $user) : ?>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $user['name']; ?>
                    <a href="<?= BASEURL; ?>/user/detail/<?= $user['id']; ?>" class="badge badge-primary">detail</a>
                </li>
            </ul>
            <?php endforeach; ?>
            
        </div>
    </div>
</div>