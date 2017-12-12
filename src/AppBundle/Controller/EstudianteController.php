<?php
/**
 * Created by PhpStorm.
 * User: ltejada
 * Date: 08/12/2017
 * Time: 6:23 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Estudiante;
use AppBundle\Form\EstudianteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


/**
 * Class EstudianteController
 * @package AppBundle\Controller
 * @Route("/estudiante")
 */
class EstudianteController extends Controller
{
    /**
     * @Route("/lista", name="listar_estudiante")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ListarEstudiant(Request $request)
    {
        //TODO:buscar lista de estudiante en la base de datos.
        $estudiantes = $this ->getDoctrine()->getRepository(Estudiante::class)->findAll();

        return $this->render('AppBundle:Estudiante:estudiante_lista.html.twig',array('estudiantes'
        => $estudiantes,));
    }


    /**
     * @Route("/{id}", name="get_estudiante", requirements={"id"="\d+"})
     * @Method("GET")
     * @param Request $request
     * @param Estudiante $estudiante
     * @return JsonResponse
     */
    public function getEstudiante(Request $request, Estudiante $estudiante)
    {
        $estudiantej=json_decode($this->get('serializer')->serialize($estudiante,'json'),true);
        return new JsonResponse($estudiantej);

    }

    /**
     * @Route("/{id}/edit", name="edit_estudiante", requirements={"id"="\d+"})
     * @Method("GET")
     * @param Request $request
     * @param Estudiante $estudiante
     * @return JsonResponse
     */
    public function editEstudiante(Request $request, Estudiante $estudiante)
    {
        return $this->render('AppBundle:Estudiante:edit_estudiante.html.twig',array("estudiante"=>$estudiante));

    }

    /**
     * @Route("/", name="crear_estudiante")
     * @Method("POST")
     * @param Request $request
     */
    public function createEstudiante(Request $request){
        //dump($request->getContent());
        //die;
        $data=json_decode($request->getContent(),true);
        $estudiante=new Estudiante();

        $form =$this->createForm(EstudianteType::class, $estudiante);

        $form->submit($data);
        if($form->isValid()){
            //echo "siiiiiiiiiiii";
            $em=$this->getDoctrine()->getManager();
            $em->persist($estudiante);
            $em->flush();
        }else{
           // echo "nooooooooo";

        }
        //para mostrar el objeto estudiante en la respuesta, como un Objeto del tipo Estudiante
        // dump($estudiante);
        //para devolverlo como un JSON

        $data=json_decode( $this->get("serializer")->serialize($estudiante,'json'),true);
        return new JsonResponse($data);



    }

    /**
     * @Route("/",name="todosLosEstudiantes")
     * @Method("GET")
     * @param Request $request
     * @return JsonResponse
     */


    public function getEstudiantes(Request $request){
        $estudiantes=$this->getDoctrine()->getRepository(Estudiante::class )->findAll();
        $data= $this->get("serializer")->serialize($estudiantes,'json');

        $listaEstudiantes=json_decode($data,true);
        return new JsonResponse($listaEstudiantes);


    }


}