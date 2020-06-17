<?php
//1. Sumuoja kintamuosius
function sum($skaicius1, $skaicius2)
{
    print $skaicius1 + $skaicius2;
}
sum(2, 8);
print '<br><br>';

//2. Funkcija is galo prideda stringa
//I budas
function plus_string($kintamasis1, $kintamasis2)
{
    print $kintamasis1 .= $kintamasis2 . ' ';
}
plus_string('Labas, ', 'Giedriau!');
print '<br><br>    ';

//II budas
function plus_stringx($string1, $string2)
{
    print $string1 . ' ' . $string2;
}
$kintamasis1 = 'Labas';
$kintamasis2 = 'Sveiki';
plus_stringx('Labas', 'Sveiki');
print '<br><br>    ';

//3. Funkcija parasius varda, ismeta sakini
function welcome_name($name)
{
    print 'Sveiki atvykę,' . ' ' . $name;
}
welcome_name('Dariau!');
print '<br><br>';

//4. Sukurti registracijos forma su POSt metodu, sukurti funkcija kuri paimtu $_POST masyva ir is
// jo grazintu string pavidalo rezultata 'Jus prisijungete, Dainius Dainiauskas'

var_dump($_POST);
////1 variantas
function get_data($array)
{
    print 'Jus prisijungete, ' . $array['user_name'] . ' ' . $array['user_surname'];
}
get_data($_POST);
print '<br><br>';

//2 variantas-sukurkite dar du kintamuosius STRING kurie
////nurodytu kokius KEY reikes paimti is masyvo
function get($array, $key1, $key2)
{
    print 'Jus prisijungete, ' . $array[$key1] . ' ' . $array[$key2];
}
get($_POST, 'user_name', 'user_surname');
print '<br><br><br>';
//5.  Sukurkite funkcija kuri sugeneruotu mums lentele pagal masyva.
$users = [
    [
        'id' => 1,
        'user_name' => 'Jonas',
        'user_surname' => 'Jonaitis',
        'user_age' => 18,
        'phone' => 'Apple'
    ],
    [
        'id' => 2,
        'user_name' => 'Petras',
        'user_surname' => 'Petraitis',
        'user_age' => 20,
        'phone' => 'Nokia',
    ],
];

////5.1 budas-statinis
function data_in_table($masyvas)
{
    print '<table align="left" border="1" cellpadding="3" cellspacing="0">';
    foreach ($masyvas as $user) {
        print '<tr><td>' . $user['id'] . '</td>' . '<td>' . $user['user_name'] . '</td>' . '<td>' . $user['user_surname'] . '</td>' . '<td>' . $user['age'] . '</td></tr>';
    }
    print '</table>';
}
data_in_table($users);
print '<br><br>';
print '<br><br>';

//5.2 budas-dinaminis!!! Pagrinde sita naudojame!!!!!!
function data_in_table_one($array)
{
    print '<table align="left" border="1" cellpadding="3" cellspacing="0">';
    foreach ($array as $user) {
        print '<tr>';
        foreach ($user as $user_data) {
            print "<td>$user_data</td>";
        }
        print '</tr>';
    }
    print '</table>';
}
data_in_table_one($users);
print '<br><br>';
print '<br><br>';


?>

