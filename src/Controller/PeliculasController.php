<?php

namespace App\Controller;

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
class PeliculasController extends AbstractController
{
    /**
     * @Route("/peliculas", name="peliculas")
     */
    public function getAll()
    {   $client = HttpClient::create();
        $url="http://labs.iam.cat/~a18lairodval/APIRest-Parte1/public/api/peliculas";
        
        $response = $client->request('GET', $url);
        $peliculas=$response->toArray();
        return $this->render('peliculas/index.html.twig',['peliculas'=>$peliculas]);
    }

    /**
     * @Route("/pelicula/{id}", name="pelicula")
     */
    public function getOne($id)
    {   $client = HttpClient::create();
        $url="http://labs.iam.cat/~a18lairodval/APIRest-Parte1/public/api/pelicula/$id";
        
        $response = $client->request('GET', $url);
        $pelicula=$response->toArray();
        return $this->render('peliculas/index2.html.twig',['pelicula'=>$pelicula]);
    }
}
