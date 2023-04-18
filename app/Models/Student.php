<?php

namespace App\Models;


class Student {

    public static function all() {

      $students =
        [
        [
            'id' => 1,
            'name' => 'Zeyad Medhat',

           
           ],
           [
            'id' => 2,
            'name' => 'Ahmed Ganzory',


           ],
           [
            'id' => 3,
            'name' => 'Ahmed Attia',


           ],
           [
            'id' => 4,
            'name' => 'Amgad Mahomoud',


           ],
           [
            'id' => 5,
            'name' => 'Youssef wael',


           ],
           [
            'id' => 6,
            'name' => 'Salah Ayman',


           ],
           [
            'id' => 7,
            'name' => 'Adham Mohamed',


           ],
           [
            'id' => 8,
            'name' => 'Eman Sedky',


           ],
           [
            'id' => 9,
            'name' => 'Mostafa Mahmoud',


           ],
           [
            'id' => 10,
            'name' => 'Abdallah Ahmed',

 

           ]
           ];

   return $students;

    }

}
