<?php 


function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Final_project',
        'root',
        'kxwGCh40Sn6AvFJB'
    );
}



