
<?php
/*
*Template Name: Sidebar
*/
?><?php if (is_active_sidebar('sidebar-2')) : ?>  
    <?php dynamic_sidebar('sidebar-2'); ?>
<?php else: ?>
    <div class="">
        <h2>Pracujemy nad częścią tej strony.</h2>
        <p>Ta część strony jest nadal w budowie. Jednak bez problemu możesz dalej korzystać z pozostałej części serwisu.</p>
    </div>
<?php endif; ?>