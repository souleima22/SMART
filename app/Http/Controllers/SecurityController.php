<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, ObjectManager $manager,UserPasswordEncoderInterface $encoder)
    {
        $user =new User(); 
       $form = $this->createForm(RegistrationType::class,$user); 
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()){
        $password = $encoder->encodePassword($user, $user->getPassword());
        $user->setPassword($password);
        $manager->persist($user);
        $manager->flush();
        return $this->redirectToRoute('security_login');
       }
       return $this->render('security/security.html',['form' => $form->createView()]);
    }


    /**
     * @Route("/", name="security_login")
     */
    public function login()
    {
        
       return $this->render('security/login.html');
    }

     /**
     * @Route("/logout", name="security_logout")
     */
    public function logout()
    {
        
    }


    /**
     * @Route("/blog", name="blog")
     */
    public function blog(){
        return $this->render('security/blog.html');
    }


     /**
     * @Route("/index", name="index")
     */
    public function index(){
        return $this->render('security/index.html');
    }
}