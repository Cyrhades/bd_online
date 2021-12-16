<?php

if(isset($_GET['f'])) {
    highlight_file($_GET['f']);
} elseif(isset($_GET['d'])) {
    echo '<pre>'.print_r(glob($_GET['d']),true).'</pre>';
}
