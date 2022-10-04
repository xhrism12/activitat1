<?php
    //render template home

    require 'src/render.php';
    $title='Spiderman';
    $alumnes=[
        'Perico Palotes',
        'Elva Ginaso',
        'Maria Teta'
    ];
    echo render('home',['title'=>$title, 
                    'alumnes'=>$alumnes]);