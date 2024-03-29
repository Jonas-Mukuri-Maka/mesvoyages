<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controller;

use App\Entity\Visite;
use App\Repository\VisiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Description of AccueilController
 *
 * @author zmuku
 */
class AccueilController extends AbstractController{
    
    /**
     *
     * @var VisiteRepository
     */
    private $repository;

    /**
     * 
     * @param VisiteRepository $repository
     */
    public function __construct(VisiteRepository $repository) {
        $this->repository = $repository;
    }
    
    /**
     * @Route("/", name="accueil")
     * @return Response
     */
    public function index():Response{
        $visites = $this->repository->findAllLasted(2);
        return $this->render("pages/accueil.html.twig", [
            'visites' => $visites
        ]); 
    }
}
