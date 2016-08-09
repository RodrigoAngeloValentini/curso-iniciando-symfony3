<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    /**
     * @Route("/task/show", name="taskshow")
     */
    public function showAction()
    {
        return $this->render('task/show.html.twig');
    }

    /**
     * @Route("/task/{name}")
     */
    public function indexAction($name)
    {
//        $tpl = $this->container->get('templating');
//        $html = $tpl->render('task/index.html.twig',[
//            'name'=>$name
//        ]);
//        return new Response($html);
        $tasks = [
            'Call Mari',
            'Follow up Mathew',
            'Pay Amazon Bill'
        ];

        return $this->render('task/index.html.twig',[
            'name' => $name,
            'tasks' => $tasks
        ]);
    }

    /**
     * @Route("/task")
     * @Method("GET")
     */
    public function apiAction()
    {
        $tasks = [
            'Call Mari',
            'Follow up Mathew',
            'Pay Amazon Bill'
        ];

        //return new Response(json_encode($tasks));
        return new JsonResponse($tasks);
    }
}