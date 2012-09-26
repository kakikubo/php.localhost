<?php

$period = new DatePeriod(
    new DateTime('first day of 2010-05'),
    new DateInterval('P1D'),
    new DateTime('last day of 2010-05 +1sec') // デフォルトでは最終日 0:00が含まれないため、1秒後を指定する 
                                              // https://bugs.php.net/bug.php?id=52015 2012/09/26現在でもFixされてないな…
);

foreach ($period as $day){
    echo $day->format('Y-m-d'), PHP_EOL;
}
