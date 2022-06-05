<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

/**
 * Index du projet Radio MODUL
 * 
 * PHP Version 7
 * 
 * @category Stage
 * @package Radio MODUL
 * @author Jamil
 */
$racine = dirname(__FILE__);
require_once 'modeles/fct.inc.php';
require_once 'modeles/PdoRadioModul.inc.php';




$pdo = PdoRadioModul::getPdoRadioModul();


require 'vues/v_entete.php';

//uc est la page qui sera présentée
$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_STRING);

if (!$uc) { //si l'utilisateur n'est pas connecté
    $uc = 'test';
} elseif (empty($uc)) {
    $uc = 'test';
}

        
switch (true) {
    
    
    case ($uc == 'test'):
        include $racine . '/controleurs/c_test.php';
        break;
    
}

require 'vues/v_pied.php';


