<?php

$head1 = 'главная страница';
$head2 = 'каталог';
$head3 = 'поддержка';
$head4 = 'отзывы';

$side1 = 'кафедра';
$side2 = 'кфдра';
$side3 = 'кфдр';
$side4 = 'кф';

$cont1 = 'Добро пожаловать на мой сайт';
$cont2 = 'здесь вы найдете много полезной информации';
$cont3 = 'очень';
$cont4 = 'много информации';

$foot1 = 'Телефон: 89234152081';
$foot2 = 'Email: support@project.ru';
$foot3 = 'Адрес: г. Томск, ул. Гоголя, 1';
$foot4 = 'Все права защищены 2026';

require __DIR__ . '/header.php';
require __DIR__ . '/sidebar.php';
require __DIR__ . '/content.php';
require __DIR__ . '/footer.php';


$result = include __DIR__ . '/test-return.php';

echo '<div style="text-align: center; margin-top: 20px; font-weight: bold; color: green;">';
echo 'include: ' . $result;
echo '</div>';