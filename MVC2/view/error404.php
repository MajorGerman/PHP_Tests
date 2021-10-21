<?php

    ob_start();

?>

<h2> ERROR 404 </h2>

<article> 
    <p>
        Not found
    </p>
</article>

<?php

    $content = ob_get_clean();
    include 'view/templates/layout.php';

?>