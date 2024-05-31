
<?php require('partials/head.view.php') ?>
    <h2>Completadas</h2>
    <ul>
        <?php foreach ($completedTasks as $task): ?>
            <li style="color: <?= $task->color ?>;" class="pt-3">
                <?= $task->title ?>
                <form style="display: inline" action="tasks/toggle" method="POST">
                    <input type="hidden" name="completed" value="0">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button
                        class="middle none relative h-8 max-h-[40px] w-8 max-w-[40px] rounded-lg bg-gray-500 text-center font-sans text-xs font-medium uppercase text-white shadow-md shadow-gray-500/20 transition-all hover:shadow-lg hover:shadow-gray-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="submit"
                        data-ripple-light="true"
                    >
                        <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
                        <i class="fas fa-minus text-lg leading-none" aria-hidden="true"></i>
                        </span>
                    </button>
                </form>

                <form onsubmit="return confirm('Desea eliminar el registro?');" style="display: inline" action="tasks/delete" method="POST">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button
                        class="middle none relative h-8 max-h-[40px] w-8 max-w-[40px] rounded-lg bg-red-500 text-center font-sans text-xs font-medium uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="submit"
                        data-ripple-light="true"
                    >
                        <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
                        <i class="fas fa-trash text-lg leading-none" aria-hidden="true"></i>
                        </span>
                    </button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>

    <h2>Pendientes</h2>
    <ul>
        <?php foreach ($pendingTasks as $task): ?>
            <li style="color: <?= $task->color ?>;" class="px-4 flex flex-shrink-0 pt-3">
                <?= $task->title ?>
                <form style="display: inline" action="tasks/toggle" method="POST">
                    <input type="hidden" name="completed" value="1">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button
                        class="middle none relative ml-2 h-8 max-h-[40px] w-8 max-w-[40px] rounded-lg bg-green-500 text-center font-sans text-xs font-medium uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="submit"
                        data-ripple-light="true"
                    >
                        <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
                        <i class="fas fa-check text-lg leading-none" aria-hidden="true"></i>
                        </span>
                    </button>
                </form>

                <form onsubmit="return confirm('Desea eliminar el registro?');" style="display: inline" action="tasks/delete" method="POST">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button
                        class="middle none relative ml-2 h-8 max-h-[40px] w-8 max-w-[40px] rounded-lg bg-red-500 text-center font-sans text-xs font-medium uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="submit"
                        data-ripple-light="true"
                    >
                        <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
                        <i class="fas fa-trash text-lg leading-none" aria-hidden="true"></i>
                        </span>
                    </button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>

    <form action="tasks/create" method="POST">
        <input type="text" name="title">
        <input type="color" name="color">
        <button class="btn-action" type="submit">Guardar</button>
    </form>


<!-- Font Awesome Link -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
  integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
  crossorigin="anonymous"
/>

<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script><?php require('partials/footer.view.php') ?>