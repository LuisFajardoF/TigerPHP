<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Completadas</h2>
    <ul>
        <?php foreach ($completedTasks as $task): ?>
            <li><?= $task->title ?></li>
        <?php endforeach ?>
    </ul>

    <h2>Pendientes</h2>
    <ul>
        <?php foreach ($pendingTasks as $task): ?>
            <li><?= $task->title ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>