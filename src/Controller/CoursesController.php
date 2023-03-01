<?php

namespace App\Controller;

use App\Entity\Courses;
use App\Form\CourseType;
use App\Repository\CoursesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CoursesController extends AbstractController
{
/*     #[Route('/particulier/courses', name: 'app_courses')]
    public function index(): Response
    {
        return $this->render('home/courses/liste.html.twig', [
            'controller_name' => 'CoursesController',
            'liste'  => [0=>["libelle"=>"Course1","date"=>"10/10/2015"]]

        ]);
    } */

    #[Route('/particulier/courses', name: 'app_courses', methods: ['GET'])]
    public function index(CoursesRepository $courseRepository): Response
    {
        return $this->render('home/courses/liste.html.twig', [
            'courses' => $courseRepository->findAll(),
        ]);
    }

/*     #[Route('/particulier/courses-formulaire', name: 'app_form')]
    public function form(): Response
    {
      $course = new Courses;
      $form= $this->createForm(CourseType::class, $course);
        return $this->render('home/courses/formulaire.html.twig', [
            'controller_name' => 'CoursesController',
        ]);

    } */

    #[Route('/particulier/courses-formulaire', name: 'app_form', methods: ['GET', 'POST'])]
    public function new(Request $request, CoursesRepository $coursesRepository): Response
    {
        $course = new Courses();
        $form = $this->createForm(CourseType::class, $course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $coursesRepository->save($course, true);

            return $this->redirectToRoute('app_courses', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('home/courses/formulaire.html.twig', [
            'course' => $course,
            'form' => $form,
        ]);
    }

}
