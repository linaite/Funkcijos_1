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


?>

