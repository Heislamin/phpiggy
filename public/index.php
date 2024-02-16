<?php
echo 'hello wrld';
# phpinfo();
$app = include __DIR__ . '/../src/App/bootstrap.php';

$app->Run();