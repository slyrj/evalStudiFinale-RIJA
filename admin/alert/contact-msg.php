<?php
if (isset($_SESSION['contact-success'])) :
    echo '<p class="text-center text-muted msg-alert"><font color="green">' . $_SESSION['contact-success'] . '</font></p>';
    unset($_SESSION['contact-success']);
    echo '<hr>';
elseif (isset($_SESSION['contact-error'])) :
    echo '<p class="text-center text-muted msg-alert"><font color="red">' . $_SESSION['contact-error'] . '</font></p>';
    unset($_SESSION['contact-error']);
    echo '<hr>';
endif;
