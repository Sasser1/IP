<!DOCTYPE html>
<html>
    <head>
        <title> PRIPREMA ZA KOLOKVIJUM </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
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
                    <table>
                        <?php
                            for($i=0;$i<10;$i++)
                            {
                                ?>
                                <tr>
                                    <td><?= $i+1 ?></td>
                                    <td>Ime</td>
                                    <td>Prezime</td>
                                </tr>
                                <?php
                            }
                        ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">IME I PREZIME<br>BROJ INDEXA</td>
            </tr>
        </table>
    </body>
</html>