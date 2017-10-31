<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Component;
use AppBundle\Entity\Part;
use AppBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class ProjectController extends Controller
{

    public function showProjectsAction()
    {
        $repository = $this->getDoctrine()->getRepository(Project::class);

        $projects = $repository->findAll();

        return $this->render('AppBundle:ProjectController:show_projects.html.twig', array(
            'projects'=>$projects
        ));
    }


    public function addProjectFormAction()
    {

        $project = new Project();

        $project->setStarted(new \DateTime('today') );

        $form = $this->createFormBuilder($project)
            ->add('name', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Dodaj Projekt'))
            ->setMethod('POST')
            ->getForm();
        return $this->render('AppBundle:ProjectController:add_project.html.twig', array(
            // ...
            'form' => $form->createView(),
        ));
    }



    public function addProjectAction(Request $request)
    {

        $project = new Project();

        $project->setStarted(new \DateTime('today'));
        $form = $this->createFormBuilder($project)
            ->add('name', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Dodaj Projekt'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $form->getData();

            $project = $form->getData();


            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();

            return $this->redirectToRoute('project_show_all');

        }
    }
    public function modifyProjectFormAction($id)
    {

        $repository = $this->getDoctrine()->getRepository(Project::class);

        $project = $repository->findOneById($id);



        $form = $this->createFormBuilder($project)
            ->add('name', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Dodaj Projekt'))
            ->setMethod('POST')
            ->getForm();
        return $this->render('AppBundle:ProjectController:add_project.html.twig', array(
            // ...
            'form' => $form->createView(),
        ));
    }



    public function modifyProjectAction(Request $request, $id)
    {

        $repository = $this->getDoctrine()->getRepository(Project::class);

        $project = $repository->findOneById($id);


        $form = $this->createFormBuilder($project)
            ->add('name', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Dodaj Projekt'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $form->getData();

            $project = $form->getData();


            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();

            return $this->redirectToRoute('project_show_all');

        }
    }

    public function showProjectAction($id)
    {
        $pro_repo = $this->getDoctrine()->getRepository(Project::class);
        $project = $pro_repo->findOneById($id);
        $com_repo = $this->getDoctrine()->getRepository(Component::class);
        $componets = $com_repo->findById($id);


        return $this->render('AppBundle:ProjectController:show_project.html.twig', array(
            'project'=>$project
        ));
    }

    public function addComponentFormAction($id, $comp_id)
    {

        $component = new Component();




        $form = $this->createFormBuilder($component)
            ->add('name', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Dodaj Projekt'))
            ->setMethod('POST')
            ->getForm();
        return $this->render('AppBundle:ProjectController:add_project.html.twig', array(
            // ...
            'form' => $form->createView(),
        ));
    }



    public function addComponentAction(Request $request, $id, $comp_id)
    {

        $component = new Component();
if ($comp_id==0){
    $component->setParentComponent(null);
}else{
    $com_repo = $this->getDoctrine()->getRepository(Component::class);
    $component->setParentComponent($com_repo->findOneById($comp_id));
}

        $form = $this->createFormBuilder($component)
            ->add('name', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Dodaj Projekt'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $form->getData();

            $pro_repo = $this->getDoctrine()->getRepository(Project::class);
            $project = $pro_repo->findOneById($id);


            $component = $form->getData();
            $component->setProject($project);
            if ($comp_id==0){
                $component->setParentComponent(null);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($component);
            $em->flush();

            return $this->redirectToRoute('project_show_all');

        }
    }

    public function addPartFormAction($comp_id)
    {

        $part = new Part();




        $form = $this->createFormBuilder($part)
            ->add('name', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Dodaj część'))
            ->setMethod('POST')
            ->getForm();
        return $this->render('AppBundle:ProjectController:add_project.html.twig', array(
            // ...
            'form' => $form->createView(),
        ));
    }



    public function addPartAction(Request $request, $comp_id)
    {

        $part = new Part();

            $com_repo = $this->getDoctrine()->getRepository(Component::class);
            $part->setComponent($com_repo->findOneById($comp_id));


        $form = $this->createFormBuilder($part)
            ->add('name', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Dodaj Projekt'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $form->getData();




            $part = $form->getData();
            $com_repo = $this->getDoctrine()->getRepository(Component::class);
            $part->setComponent($com_repo->findOneById($comp_id));

            $em = $this->getDoctrine()->getManager();
            $em->persist($part);
            $em->flush();

            return $this->redirectToRoute('project_show_all');

        }
    }

}
