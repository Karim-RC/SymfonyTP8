<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\TableChoiceType;
use Symfony\Component\HttpFoundation\Request;


class TableController extends AbstractController
{
    #[Route('/table', name: 'app_table')]
    public function index(): Response
    {
        return $this->render('table/index.html.twig', [
            'controller_name' => 'TableController',
        ]);
    }
    #[Route('/table/print/{nombre}', name: 'table_print')]
    public function print($nombre)
    {
        // Calculer les valeurs pour la table
        $valeursCalculees = [];
        for ($i = 1; $i <= 10; $i++) {
            $valeursCalculees[] = $nombre * $i;
        }

        return $this->render('table/print.html.twig', [
            'nombre' => $nombre,
            'valeursCalculees' => $valeursCalculees,
        ]);
    }
    #[Route('/table/select')]
    public function select(Request $req) {

		$form = $this->createForm(TableChoiceType::class);
		$form->handleRequest($req);

		
		if ($form->isSubmitted()) {

			$data = $form->getData();
            $ret['nombre'] = $data['table_number'];
            $response = $this->redirectToRoute('table_print',$ret);

		}else {

			$response = $this->render('table/select.html.twig', [
					'form' => $form->createView(),
			]);
		}

		return $response;
	}
    
}

#commentaire






