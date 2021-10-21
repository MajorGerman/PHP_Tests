<?php

    ob_start();

?>

<h2> MVC Project. Books </h2>

<article>
    <p>
        Book list and detail info overview
    </p>
</article>

<?php

    $content = ob_get_clean();
    include 'view/templates/layout.php';

?>