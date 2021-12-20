<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class collections extends Controller
{
    //
        public function index() {
            $collections= collect([1, 2, 3,4,5,6,7,8,9,10]);
            echo "$collections<hr>";
            $average = $collections->avg();
            echo "$average<hr>";
            $chunks= $collections->chunk(2);
            echo "$chunks<hr>";
            $collection = collect([
                [1, 2, 3],
                [4, 5, 6],
                [7, 8, 9],
            ]);
            $collapsed = $collection->collapse();
            echo "$collapsed<hr>";
            $collectionsA= $collections->collect();
            echo "$collectionsA<hr>";
            $collection = collect(['Name', 'Branch',"Year","Regdno"]);
            $combined = $collection->combine(['Praneeth',"EEE","3rd","20k65a0241"]);
            echo "$combined<hr>";
            $collection = collect(['Praneeth']);
            $concatenated = $collection->concat(['Durgesh'])->concat(['name' => 'Kishore']);
            echo "$concatenated<hr>";
            $a=$collections->contains(function ($value, $key) {
                return $value > 9;
            });
            if($a == "") {
                echo "False<hr>";
            }
            else{
                echo  "True<hr>";
            }
            $b = collect(['name' => 'Desk', 'price' => 100]);

    $c=$b->contains('Desk');
    if($c == "") {
        echo "False<hr>";
    }
    else{
        echo  "True<hr>";
    }
    $d=$b->contains('New York');
    if($d == "") {
        echo "False<hr>";
    }
    else{
        echo  "True<hr>";
    }
    $check = collect([
        ['Name' => 'Praneeth', 'Branch' => 'EEE'],
        ['Name' => 'Durgesh', 'Branch' => 'EEE'],
    ]);

    $checks=$check->contains('Name', 'Durga');
    if($checks == "") {
        echo "False<hr>";
    }
    else{
        echo  "True<hr>";
    }
    $count=$collections->count();
    echo "$count<hr>";
    $counted = $collections->countBy();
    echo "$counted<hr>";
    $matrix = $collections->crossJoin(['a', 'b']);
    echo "$matrix<hr>";
    $matrix1 = $collections->crossJoin(['a', 'b'], ['I', 'II']);
        echo "$matrix1<hr>";
        $diff = $collections->diff([2, 4, 6, 8]);
        echo "$diff<hr>";
        $collection = collect([1, 2, 3, 4, 5]);

    $multiplied = $collection->map(function ($item, $key) {
        return $item * 2;
    });
    echo $multiplied;

        

    }
}
