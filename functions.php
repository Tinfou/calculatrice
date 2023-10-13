<?php

    declare(strict_types=1);

    function verifieNombre($nombre): bool
    {
        if($nombre && preg_match('/^-?\d+(\.\d+)?$/',$nombre)){
            return true;
        }
        else{
            return false;
        }
    }

    function verifieOperateur($signe):bool
    {   
        if($signe && preg_match("/[+\-\*\/]/",$signe)){
            return true;
        }
        else{
            return false;
        }
    }

    function calcul (?string $nombre1 , ?string $nombre2, string $operateur) : string
    {
        if (verifieNombre($nombre1) && verifieNombre($nombre2) && verifieOperateur($operateur)){
            $resultat =0;
            eval(" \$resultat = $nombre1 $operateur $nombre2;");
            return "valiny : $resultat";
        }
        elseif(verifieNombre($nombre1)==0 || verifieNombre($nombre2)==0){
            return "un des nombres est 0";
        }
        else{
            return "erreur";
        }
    }

?>