<?php

namespace App\Controller;
use App\Entity\Partenaire;
use App\Entity\Depot;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TransactionController extends AbstractController
{
    /**
     * @Route("/transaction", name="transaction")
     */
    public function index()
    {
        return $this->render('transaction/index.html.twig', [
            'controller_name' => 'TransactionController',
        ]);
    }

     /**
     * @Route("/depots", name="add_depot", methods={"POST"})
     */
    public function addDepot (Request $request,  EntityManagerInterface $entityManager)
    {
        $values = json_decode($request->getContent());
        if(isset($values->montant)) {
            $depot = new Depot();
            $depot->setMontant($values->montant);
            $depot->setDateDepot(new \DateTime());
            //recuperation de l'id du partenaire
            $repo=$this->getDoctrine()->getRepository(Partenaire::class);
            $partenaires=$repo->find($values->idPartenaire);
            $depot->setIdPartenaire($partenaires);

            //incrementant du solde du partenaire du montant du depot
            $partenaires->setSolde($partenaires->getSolde()+$values->montant);


            //enregistrement au niveau du partenaire
            $entityManager->persist($partenaires);

            //enregistrement au niveau du depot
            $entityManager->persist($depot);
            $entityManager->flush();

            $data = [
                'status' => 201,
                'message' => 'Le depot  a été enregistré'
            ];

            return new JsonResponse($data, 201);
        }
        $data = [
            'status' => 500,
            'message' => 'Vous devez renseigner les champs montants et idPartenaire'
        ];
        return new JsonResponse($data, 500);

    }
     

}
