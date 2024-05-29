<?php

// session_start();
// dd($_SESSION['foo']);
// dd(session_id());
// session_destroy();

// $2y$10$pMf9EAiEmHZm8P/IctheUe0/o5odn5QTpMebHvVUVxE9T3yVod6sa
dd(password_verify('secret', '$2y$10$pMf9EAiEmHZm8P/IctheUe0/o5odn5QTpMebHvVUVxE9T3yVod6sa'));


require 'Views/about.view.php';