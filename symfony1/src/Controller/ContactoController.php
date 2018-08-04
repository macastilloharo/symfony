<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Contacto;

class ContactoController extends Controller
{
    /**
     * @Route("/contacto", name="contacto")
     */
    public function index()
    {

        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $contacto = new Contacto();
        $contacto->setNombre('MIGUEL');
        $contacto->setApellido1('CASTILLO');
       // $product->setDescription('Ergonomic and stylish!');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($contacto);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$contacto->getId());


        // return $this->render('product/index.html.twig', [
        //     'controller_name' => 'ProductController',
        // ]);
    }

/**
 * @Route("/contacto/{id}", name="contacto_show")
 */
public function show($id)
{
    $contacto = $this->getDoctrine()
        ->getRepository(Contacto::class)
        ->find($id);

    if (!$contacto) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
        );
    }

    return new Response('Check out this great product: '.$contacto->getNombre());

}
}