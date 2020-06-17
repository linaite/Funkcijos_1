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



?>

