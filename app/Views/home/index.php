<h1>Available Properties</h1>
<?php foreach ($properties as $property): ?>
    <div>
        <h3><?= esc($property['title']) ?></h3>
        <p><?= esc($property['description']) ?></p>
        <p>Price: $<?= esc($property['price']) ?></p>
        <a href="/home/detail/<?= $property['id'] ?>">View Details</a>
    </div>
<?php endforeach; ?>