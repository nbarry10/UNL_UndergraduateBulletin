<?php
$colleges = array();

foreach ($context as $abbreviation => $college) {
    $colleges[] = array(
        'abbreviation'  => $abbreviation,
        'name'          => $college->name,
        'uri'           => $college->getURL()
        );
}
echo json_encode($colleges);