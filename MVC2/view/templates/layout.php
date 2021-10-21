
<html>

    <head>
        <link href = 'public/css/bootstrap.min.css' rel = 'stylesheet'>
        <link href = 'public/css/mystyle.css' rel = 'stylesheet'>
    </head>

    <body>
        
        <div class = 'container'>
            <div class = 'header clearfix'>
                <h2> - Book Store - </h2>
                <h4 class = 'text-muted'>
                    <?php
                        echo '<a href="./"> Main </a> &#187';
                        echo '<a href="books"> Books </a>';
                        if (!empty($book['bookname'])) echo ' &#187'.$book['bookname'];
                    ?>
                </h4>
            </div>

            <div id='content' style='padding-top: 20px;'>

                <?php
                    echo $content;
                ?>
        
            </div>  

            <footer class = 'footer'>
                <p>&copy; 2021 <i class = 'fa fa-child'></i></p>
            </footer>

        </div>

    </body>

</html>