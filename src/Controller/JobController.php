<?php

namespace App\Controller;

use App\Entity\Job;
use App\Form\JobType;
use App\Repository\JobRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/jobs")
 */
class JobController extends AbstractController
{
    /**
     * @Route("/", name="list_jobs", methods={"GET"})
     */
    public function index(JobRepository $jobRepository): Response
    {

        return $this->render('job/index.html.twig', [
            'jobs' => $jobRepository->findAll(),
        ]);
    }

    /**
     * @Route("/all_jobs", name="all_jobs", methods={"GET"})
     */
    public function all_jobs(JobRepository $jobRepository): Response
    {

        return $this->render('job/all_jobs.html.twig', [
            'jobs' => $jobRepository->findAll(),
        ]);
    }


    /**
     * @Route("/{slug}", name="job_show", methods={"GET"})
     */
    public function show(Job $job): Response
    {
        return $this->render('job/show.html.twig', [
            'job' => $job,
        ]);
    }

    
}
