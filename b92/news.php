<?php


define('SITEURL','http://localhost:3000/index2.php');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');   
define('DB_NAME','b92vesti');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());//Database connection
$db_select= mysqli_select_db($conn,DB_NAME) or die(mysqli_error());//selecting database

mysqli_query($conn, "SET NAMES utf8");



//Generate a timestamp using mt_rand.
$timestamp = mt_rand(1, time());

//Format that timestamp into a readable date string.
$randomDate = date("d M Y", $timestamp);


$mainNews=array(
    array("newsText"=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia natus nihil non? ', "newsNumber"=>mt_rand(0,10)),
    array("newsText"=>'Lorem ipsum dolor sit amet.', "newsNumber"=>mt_rand(0,10)),
    array("newsText"=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. ', "newsNumber"=>mt_rand(0,10)),
    array("newsText"=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, possimus? ', "newsNumber"=>mt_rand(0,10))
);

$leftNews=array(
    array("leftNewsText"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus.", "leftNewsImg"=>"img1.jpg", "leftNewsAuthor"=>"Pera Perić", "leftNewsDate"=>$randomDate ),
    array("leftNewsText"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mi.", "leftNewsImg"=>"img2.jpg", "leftNewsAuthor"=>"Mika Mikić", "leftNewsDate"=>$randomDate),
    array("leftNewsText"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget.", "leftNewsImg"=>"img3.jpg", "leftNewsAuthor"=>"Todor Todorović", "leftNewsDate"=>$randomDate ),
    array("leftNewsText"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae.", "leftNewsImg"=>"img4.jpg", "leftNewsAuthor"=>"Žika Žikić", "leftNewsDate"=>$randomDate ),
    array("leftNewsText"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi malesuada.", "leftNewsImg"=>"img5.jpg", "leftNewsAuthor"=>"Isidora Milivojević", "leftNewsDate"=>$randomDate ),
    array("leftNewsText"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam libero.", "leftNewsImg"=>"img6.jpg", "leftNewsAuthor"=>"Žaklina Smiljanić", "leftNewsDate"=>$randomDate ),
    array("leftNewsText"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tristique.", "leftNewsImg"=>"img7.jpg", "leftNewsAuthor"=>"Sara Vranotić", "leftNewsDate"=>$randomDate ),
    array("leftNewsText"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu.", "leftNewsImg"=>"img8.jpg", "leftNewsAuthor"=>"Marko Marković", "leftNewsDate"=>$randomDate ),
    array("leftNewsText"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit.", "leftNewsImg"=>"img9.jpg", "leftNewsAuthor"=>"Slobodan Milošević", "leftNewsDate"=>$randomDate ),
    array("leftNewsText"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce maximus.", "leftNewsImg"=>"img10.jpg", "leftNewsAuthor"=>"Boris Tadić", "leftNewsDate"=>$randomDate )
)









?>