<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/book", name="book")
     */
    public function index(): Response
    {
        return $this->render('book/index.html.twig');
    }

    // Creation d'un livre dans la bdd
    // Create
    // ...


    // Affiche le détail d'un livre
    // Read / Retrieve
    // ... 


    // Modifier un livre
    // Update
    // ... 


    // Supprimer un livre
    // Delete
    // ...
}
