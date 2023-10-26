<!--head-->
<?php 
//include_once("./includes/table.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="classement des langages web">
    <title>Spécial arrow</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/arrow.css">
</head><body>
    <header>
        <h1>Spécial arrow <i aria-hidden="true" class="arrow-left"></i></h1>
    </header>
    <main>
        <div class="section" role="table" aria-label="table-info">
            <table>
                <caption>Le top 10 des langages</caption>
                <thead>
                    <tr>
                        <th role="columnheader">Classement</th>
                        <th>Langage</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <!--affichage des données-->

                
                <tbody>
                    <?php    
                    
                    include_once("./includes/table.inc.php");

                    print Table::affichertable();
                    ?>                                
                </tbody>
                <!--partie footer-->
                <tfoot>
                    <tr>
                        <th>Classement</th>
                        <th>Langage</th>
                        <th>Type</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    <footer>
        <p>&copy; - LNStewill&nbsp;  <time datetime="10-18-2023">2023</time>  </p>
    </footer>    
</main>
  
</body>
</html>