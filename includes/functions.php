<?php 


function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Final_project',
        'root',
        '4JqGyoVdUoAAEJxU'
    );
}