<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/usuarios")
 * Class UsuarioController
 * @package AppBundle\Controller
 */
class UsuarioController extends Controller
{
    /**
     * @Route("/{id}", name="homepage")
     */
    public function indexAction(Request $request,$id )
    {
        
        $nombreUsuario="JMLUNA";
        $nombreUsuario2='JoseMiguel';
        $idUsuario=$id;
        // replace this example code with whatever you need
        return $this->render('AppBundle::usuarios.html.twig', array(
            'id' => $id,
            'nombreUsuario' => $nombreUsuario2,
            'nombreUsuario2' => $nombreUsuario,
        ));
    }


    /**
     * @Route("/", name="addUsuario")
     * @Method("POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function addUsuario(Request $request){


      // dump($request->getContent());
      // die;
        $data=json_decode($request->getContent(),true);
        //dump($data);
       // die;
        $usuario=new Usuario();
        $form =$this->createForm(UsuarioType::class, $usuario);
        $form->submit($data);

        if($form->isValid()){
            dump($usuario);
//            die;
  //           echo "siiiiiiiiiiii";
            $em=$this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
        }else{
            echo $form->getErrorsAsString();
             // echo "nooooooooo";
            dump($data);
            die;


        }
        //para mostrar el objeto estudiante en la respuesta, como un Objeto del tipo Estudiante
       // dump($usuario);
        //die;
        //para devolverlo como un JSON//
        $data= $this->get("serializer")->serialize($usuario,'json');

        $newUsuario=json_decode($data,true);
        return new JsonResponse($newUsuario);

    }



}
