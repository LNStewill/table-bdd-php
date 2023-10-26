<?php

/* $_topTenLang = array(
            array("Python" => "Web & application"),
            array("C++" => "Application"),
            array("Node js" => "Application"),
            array("PHP" => "Web & application")
     );
     
     //print_r($_topTenLang);
    foreach ($_topTenLang as $_index => $_key) {
    print '<tr>'.'<td>'.$_index.'</td>';
    foreach ($_key as $_new_index => $_valeur) {
        print '<td>'.$_new_index.'</td>'.'<td>'.$_valeur.'</td>'.'</tr>'."\n";
    }
}; */


class Table {

    const topTenLang = array(
        array("Python" => "Web & application"),
        array("C++" => "Application"),
        array("Node js" => "Application"),
        array("PHP" => "Web & application")
 );
    static function affichertable() {
        foreach (Table::topTenLang as $_index => $_key) {
            print '<tr>'.'<td>'.$_index.'</td>';
            foreach ($_key as $_new_index => $_valeur) {
                print '<td>'.$_new_index.'</td>'.'<td>'.$_valeur.'</td>'.'</tr>'."\n";
            }
        }
    }
}