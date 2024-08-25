<!DOCTYPE html>
<html lang="en">
<head>
    <title>My MVC Application</title>
</head>
<body>
    <?php require '..app/views/' . $view . '.php'; ?>
</body>
</html>

<!-- app/views/home.php -->
<h1>Wlcome to the home Page</h1>
<h2>Users:</h2>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo $user['name']; ?></li>
    <?php endforeach; ?>
</ul>