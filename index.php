<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Ovo je aplikacija za Analizu riječi.<br>";
        echo "Aplikacija je kod pokretanja uzela riječi iz datoteke \n
        rijeci.json i ispisala ih u tablicu dolje: <br><br>";

        // Pročitaj JSON file, i taj string stavi u varijablu $ucitano
        $ucitano = file_get_contents(__DIR__ . '/rijeci.json');

        // Sada string iz varijable $ucitano stavi u indeksirani $array 
        $array = json_decode($ucitano, true);
        ?>
        <table border="1" cellpadding="10">
            <tr>
                <th>Riječ</th>  
            </tr>

            <?php
            foreach ($array as $key => $value) {
                echo '<tr>';
                echo '<td>' . $value . '</td>';

                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>

<form action="save_json.php" method="post"> 
    <label><br>Na ovom mjestu je kreirana forma u koju je potrebno unijeti novu riječ:</label> 
    <input type="text" name="nova" />
    <input type="submit" value="Submit" /> 
</form>

<?php
//$duljina = $array
echo "<br>Duljina unesene riječi iznosi: ";
echo strlen($value);

//The preg_match_all() function returns the number of matches of a pattern 
//that were found in a string and populates a variable with the 
//matches that were found.

function izbrojiSamoglasnike($string) {
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}

echo "<br>Duljina samoglasnika unesene riječi iznosi: ";
print_r(izbrojiSamoglasnike($value));

function izbrojiSuglasnike($string) {
    preg_match_all('/[bcčćdđfghjklmnprsštvzž]/i', $string, $matches);
    return count($matches[0]);
}

echo "<br> Duljina suglasnika unesene riječi iznosi: ";
print_r(izbrojiSuglasnike($value));
?>

