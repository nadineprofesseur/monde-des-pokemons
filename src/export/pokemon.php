<?php 

$idPokemon = filter_var($_GET['pokemon'], FILTER_VALIDATE_INT);

require('../accesseur/PokemonDAO.php');
$dao = new PokemonDAO();

$pokemon = $dao->lirePokemon($idPokemon);
//print_r($pokemon);

require('../lib/fpdf/fpdf.php');

$document = new FPDF();
$document->AddPage();
$document->SetFont('Arial','B',16);
$document->Write(10, 'Pokemon ' . $pokemon['nom']);
$document->Ln();
$document->Ln();
$document->Write(10, 'Pokemon ' . utf8_decode($pokemon['resume']));
$document->Ln();
 
$document->Output();
