<?php

include __DIR__ . '/database/data.php';

header('Content-Type: application/json');

echo json_encode($arr_disks);
// includo il file contentente il mio array, specifico il tipo di header necessario, faccio l'echo dell'array trasformato in json tramite la funzione json-encode