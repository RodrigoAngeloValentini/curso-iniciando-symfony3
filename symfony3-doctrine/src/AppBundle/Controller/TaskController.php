<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    /**
     * @Route("/task/new", name="tasknew")
     */
    public function newAction()
    {
        $task = new Task();
        $task->setName('My first Task');
        $task->setFinished(true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($task);
        $em->flush();

        return new Response("<html><body>Task has been created</body></html>");
    }
    /**
     * @Route("/task/show/{id}", name="taskshow")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('AppBundle\Entity\Task')->find($id);

        if(!$task){
            throw $this->createNotFoundException("Task not found");
        }

        return $this->render('task/show.html.twig',[
            'task' => $task
        ]);
    }

    /**
     * @Route("/task/{name}")
     */
    public function indexAction($name)
    {

        $em = $this->getDoctrine()->getManager();
        $tasks = $em->getRepository('AppBundle\Entity\Task')->findAll();

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