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
            <li style="color: <?= $task->color ?>;">
                <?= $task->title ?>
                <form style="display: inline" action="toggle-task.php" method="POST">
                    <input type="hidden" name="completed" value="0">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button type="submit">➖</button>
                </form>

                <form onsubmit="return confirm('Desea eliminar el registro?');" style="display: inline" action="delete-task.php" method="POST">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button type="submit">🗑️</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>

    <h2>Pendientes</h2>
    <ul>
        <?php foreach ($pendingTasks as $task): ?>
            <li style="color: <?= $task->color ?>;">
                <?= $task->title ?>
                <form style="display: inline" action="toggle-task.php" method="POST">
                    <input type="hidden" name="completed" value="1">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button type="submit">✅</button>
                </form>

                <form onsubmit="return confirm('Desea eliminar el registro?');" style="display: inline" action="delete-task.php" method="POST">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button type="submit">🗑️</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>

    <form action="create-task.php" method="POST">
        <input type="text" name="title">
        <input type="color" name="color">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>