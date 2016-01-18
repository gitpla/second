<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Post;
use AppBundle\Form\CommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Intl\Intl;

/**
 * Controller used to manage blog contents in the public part of the site.
 *
 * @Route("/blog")
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class BlogController extends Controller
{
    /**
     * @Route("/", name="blog_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Post')->findLatest();
        
        
        /*
        //print_r($posts);
        $post = new Post();
        $post->setAuthorEmail("aaa@aaa.pl");
        $post->setContent("komentarz");
        $post->setSlug('jakis-adres');
        $post->setTitle("Tytuł postu");
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();
        
        */
        
        //$repository = $this->getDoctrine()->getRepository('AppBundle:Post');
        /*
        $query = $repository->createQueryBuilder('p')
        		->where("p.id > :id")
        		->setParameter("id", 1)
        		->getQuery();
        
        $posty = $query->getResult();
        print_r($posty);
		*/
        
        
        $comment = $this->getDoctrine()
        			->getRepository('AppBundle:Comment')
        			->find(1);
        
        $post = $comment->getPost();
        
        var_dump($post);
        
        
        /*
        $em = $this->getDoctrine()->getManager();
        
        //print_r($posts);
        $post = new Post();
        $post->setAuthorEmail("qqqq");
        $post->setContent("qqqq");
        $post->setSlug('qqqq');
        $post->setTitle("qqqq");
        
        $em->persist($post);
        
        $comment = new Comment();
        $comment->setAuthorEmail("xxxx");
        $comment->setContent("xxxxx");
        $comment->setPost($post);
        $em->persist($comment);
        
        $comment = new Comment();
        
        $comment->setAuthorEmail("yyyy");
        $comment->setContent("yyyy");
        $comment->setPost($post);
        $em->persist($comment);
        
        $em->flush();
        */
        
        return $this->render('blog/index.html.twig', array('posts' => $posts));
    }

    /**
     * @Route("/posts/{slug}", name="blog_post")
     *
     * NOTE: The $post controller argument is automatically injected by Symfony
     * after performing a database query looking for a Post with the 'slug'
     * value given in the route.
     * See http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/converters.html
     */
    public function postShowAction(Post $post)
    {
        return $this->render('blog/post_show.html.twig', array('post' => $post));
    }

    /**
     * @Route("/comment/{postSlug}/new", name = "comment_new")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     *
     * @Method("POST")
     * @ParamConverter("post", options={"mapping": {"postSlug": "slug"}})
     *
     * NOTE: The ParamConverter mapping is required because the route parameter
     * (postSlug) doesn't match any of the Doctrine entity properties (slug).
     * See http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/converters.html#doctrine-converter
     */
    public function commentNewAction(Request $request, Post $post)
    {
        $form = $this->createCommentForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Comment $comment */
            $comment = $form->getData();
            $comment->setAuthorEmail($this->getUser()->getEmail());
            $comment->setPost($post);
            $comment->setPublishedAt(new \DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute('blog_post', array('slug' => $post->getSlug()));
        }

        return $this->render('blog/comment_form_error.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
        ));
    }

    /**
     * This controller is called directly via the render() function in the
     * blog/post_show.html.twig template. That's why it's not needed to define
     * a route name for it.
     *
     * The "id" of the Post is passed in and then turned into a Post object
     * automatically by the ParamConverter.
     *
     * @param Post $post
     *
     * @return Response
     */
    public function commentFormAction(Post $post)
    {
        $form = $this->createCommentForm();

        return $this->render('blog/comment_form.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
        ));
    }

    /**
     * This is a utility method used to create comment forms. It's recommended
     * to not define this kind of methods in a controller class, but sometimes
     * is convenient for defining small methods.
     */
    private function createCommentForm()
    {
        $form = $this->createForm(new CommentType());
        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
}
