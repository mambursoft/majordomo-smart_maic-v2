<?php
$dictionary=array(
'SMART_MAIC_ENDPOINT'=>'Адрес API',
'SMART_MAIC_METHOD'=>'HTTP-метод',
'SMART_MAIC_TOKEN'=>'Токен доступа',
'SMART_MAIC_REGION'=>'Регион / маршрут',
'SMART_MAIC_TRACKING'=>'Номер отправления',
'SMART_MAIC_PAYLOAD'=>'Шаблон POST-запроса',
'SMART_MAIC_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'SMART_MAIC_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}