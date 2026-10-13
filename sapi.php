<?php
// sapi.php · ¿cómo está ejecutando PHP este servidor?
$sapi = php_sapi_name();

$explicacion = [
    'cli'            => 'aaaanea de órdenes: lo has lanzado tú desde la terminal.',
    'cli-server'     => 'Servidor de pruebas integrado en PHP (php -S).',
    'cgi-fcgi'       => 'CGI o FastCGI: PHP es un programa aparte al que el servidor web pasa la petición.',
    'fpm-fcgi'       => 'PHP-FPM: un grupo de procesos PHP siempre encendidos, comunicados por FastCGI.',
    'apache2handler' => 'Módulo de Apache: PHP vive dentro del propio proceso de Apache.',
];

echo "<h1>Mecanismo de ejecución</h1>\n";
echo "<p>SAPI: <strong>$sapi</strong></p>\n";
echo '<p>' . ($explicacion[$sapi] ?? 'Mecanismo no reconocido.') . "</p>\n";
echo '<p>Servidor web: ' . ($_SERVER['SERVER_SOFTWARE'] ?? 'ninguno') . "</p>\n";
echo '<p>Proceso (PID): ' . getmypid() . "</p>\n";
fdsffasd
opcache_compile_filefdfsd
fds
fclose
fdfdfsd
sdffsdsdfsdf
fdssfdfsd