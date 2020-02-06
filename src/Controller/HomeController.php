<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /**
     * @Route("/hello/{prenom}/age/{age}", name="hello")
     * @Route("/hello", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * 
     * Montre la page qui dit bonjour 
     * 
     * @return void
     */
    public function hello($prenom = "anonyme", $age = 0) {
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
        );
    }

    /**
     * @Route("/", name="homepage") 
     */
    public function home() {
        $prenoms = ["Bryan" => 27, "Jessy" => 28, "Igal" => 26];

       return $this->render(
           'home.html.twig',
           [
               'Title' => 'Bonjour à tous',
                'age' => '',
                'tableau' => $prenoms    
           ]
       );
    }
}

?>
