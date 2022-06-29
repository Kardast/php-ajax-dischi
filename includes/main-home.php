<main><?php

foreach ($arr_disks as $n_disk) { ?>
    <img src="<?php $n_disk['poster'] ?>" alt="<?php $n_disk['title'] ?>"> <?php
    echo $n_disk['year'];
} ?>

</main>