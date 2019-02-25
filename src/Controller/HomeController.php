<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-25
 * Time: 14:05
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     *@Route("/", name="homepage")
     */
    public function home(){
        return new response("
<!doctype html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
             <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
                         <meta http-equiv='X-UA-Compatible' content='ie=edge'>
             <title>Document</title>
</head>
<body>
<h3>Bienvenue sur le site</h3></br>
<p>Ceci est la première page du site du long métrage </p></br>
<h2>SUR LA PEAU</h2></br>  
</body>
</html>
");
    }

}