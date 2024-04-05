<!DOCTYPE html>
<html>
    <head>
        <title> PRIPREMA ZA KOLOKVIJUM </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            Class Auto
            {
                public $model,$godiste,$proizvodjac;
            }
        ?>
        <table border="1">
            <tr>
                <td colspan="2" align="center">I KOLOKVIJUM</td>
            </tr>
            <tr>
                <td><a href="prikaz.php">REFERENCA NA STRANICU PRIKAZ</a></td>
                <td><a href="tabela.php">REFERENCA NA STRANICU TABELA</a></td>
            </tr>
            <tr>
                <td colspan="2"  align="center">
                    <?php
                        $niz_automobila=array();
                        $file=fopen("Automobili.txt","r");
                        while(!feof($file))
                        {
                            $fileLine=fgets($file);
                            $izdeljeno=explode(",",$fileLine);
                            $auto = new Auto();
                            $auto->model=$izdeljeno[0];
                            $auto->godiste=$izdeljeno[1];
                            $auto->proizvodjac=$izdeljeno[2];
                            $niz_automobila[]=$auto;
                        }
                        var_dump($niz_automobila);
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">IME I PREZIME<br>BROJ INDEXA</td>
            </tr>
        </table>
    </body>
</html>