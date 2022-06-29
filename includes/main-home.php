<main>
    
    <div class="disks-wrapper">

        <?php

        foreach ($arr_disks as $n_disk) { ?>
            <!-- poster -->
            <div class="disk-card">
                <img 
                    src="<?= $n_disk['poster'] ?>" 
                    alt="<?php echo $n_disk['title'] ?>"
                >
                <!-- title -->
                <h2>
                    <?php echo $n_disk['title'] ?>
                </h2>
            
                <!-- author -->
                <p>
                    <?php echo $n_disk['author'] ?>
                </p>
            
                <!-- year -->
                <p>
                    <?php echo $n_disk['year'] ?>
                </p>
            </div> 

            <?php
        } ?>

    </div>
    
</main>