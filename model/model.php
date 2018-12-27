<?php

// Connexion Base de données
function getDb() 
{
	$bdd = new PDO('mysql:host=localhost;dbname=tp_blog_mvc_2;charset=utf8','root', '');
	return $bdd;
}

function getBillets()
{
	$bdd = new PDO('mysql:host=localhost;dbname=tp_blog_mvc_2;charset=utf8','root', '');
	$billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
          . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
          . ' order by BIL_ID desc');
	return $billets;
}

