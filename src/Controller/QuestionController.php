<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController {
    /**
     * @Route("/")
     */
    public function homepage() {
        return new Response('What a bewitching controller we have conjured!');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug) {
        $answers = [
            'Make sure your cat is sitting purrrrfectly still',
            'Honestly I like furry shoes better than my cat',
            'Maybe... try saying the spell backwards?'
        ];
        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', '', $slug)),
            'answers' => $answers
        ]);
        // return new Response(sprintf(
        //     'Future page to show the question "%s"!',
        //     ucwords(str_replace('-', ' ', $slug))
        // ));
    }
}