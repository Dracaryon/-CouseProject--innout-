<html>
<meta charset="utf-8">

</html>
<?php

session_start();
requireValidSession();


$date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y');


loadTemplateView('day_records', ['today' => $today]);

