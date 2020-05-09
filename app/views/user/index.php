<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h3>User List</h3>
            <?php foreach($data['auser'] as $user) : ?>
                <ul>
                    <li><?= $user['name']; ?></li>
                    <li><?= $user['email']; ?></li>
                    <li><?= $user['user_type']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>