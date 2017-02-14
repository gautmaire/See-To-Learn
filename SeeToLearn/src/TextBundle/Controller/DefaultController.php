<?php

namespace TextBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/textes")
     */
    public function texteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('TextBundle:Text');
        $langue = $request->request->get('langue');
        return $this->render('TextBundle:Default:textes.html.twig',
            array('texts' => $repo->findAll(), 'langue' => $langue)
        );
    }

    /**
     * @Route("/updateTexte/{id}", name="updateTexte")
     */
    public function updateTexteAction($id, Request $request)
    {
        $user = $this->getUser();
        $user->setNombretextelu($user->getNombretextelu() + 1);
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('TextBundle:Text');
        $note = $request->request->get('note');
        $texte = $repo->find($id);
        $texte->setNombrelu($texte->getNombrelu() + 1);
        $texte->setNote(($texte->getNote() + $note) / $texte->getNombrelu());
        $texte->addUser($user);
        $em->persist($texte);
        $em->flush();
        return $this->render('TextBundle:Default:updateTexte.html.twig');
    }
}