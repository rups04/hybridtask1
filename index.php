<html> 
    <head> 
        <title>My website</title> 
    </head> 
    <body> 
        <pre>
        <?php
        $filename = "/var/www/html/domain_name.txt" ;
        $file = fopen( $filename , "r");
        $domain_name = fread($file ,29);
        fclose( $file );
        echo   "<h1>WELCOME !!</h1>";
        echo   "<h2>This is Rupali Gurjar</h2>";
        echo   "<img src='http://{$domain_name}/rups.jpg'   width='390'   height='712'     />";
        ?>
        </pre>
    </body> 
</html>                     
