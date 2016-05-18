<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    /**
     * @Route("/Form/")
     */
     public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    /**
     * @Route("/Create/Product/")
     */
    public function createAction()
    {
            $product = new Product();
            $product->setName('Keyboard');
            $product->setPrice(19.99);
            $product->setDescription('Ergonomic and stylish!');

            $em = $this->getDoctrine()->getManager();

            // tells Doctrine you want to (eventually) save the Product (no queries yet)
            $em->persist($product);

            // actually executes the queries (i.e. the INSERT query)
            $em->flush();

            return new Response('Saved new product with id '.$product->getId());
            
    }
    /**
     * @Route("/Show/{productId}")
     */
    public function showAction($productId)
    {
        $product = $this->getDoctrine()
        ->getRepository('AppBundle:Product')
        ->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
            'No product found for id '.$productId);
        }
        else {
               return new Response(
                     '<html><body>'
                     . '<table border="1">'
                     . '<tr>'
                     . '<td>Product Name:</td>'.'<td> '.$product->getName().'</td>'
                     . '</tr>'
                     . '<tr>'
                     . '<td>Product Price:</td>'.'<td> '.$product->getPrice().'</td>'
                     . '</tr>'
                     . '<tr>'
                     . '<td>Product Description:</td>'.'<td> '.$product->getDescription().'</td>'
                     . '</tr>'
                     . '</table>'
                     . '</body></html>');
        }
    }
    
    /**
     * @Route("/Update/{productId}")
     */
    public function updateAction($productId)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        $product->setName('New product name 3!');
        $product->setPrice(25.50);
        $product->setDescription('This is my seconde Update!');
        $em->flush();

        //return $this->redirectToRoute('homepage');
         return new Response('Product with id '.$product->getId().' was Successfully Updated !');
        
    }
    /**
     * @Route("/Delete/{productId}")
     */
    public function DeleteAction($productId)
    {
        $em = $this->getDoctrine()->getManager();
        /* @var $product type */
        $product = $em->getRepository('AppBundle:Product')->find($productId);
        if($product){
            $em->remove($product);
            $em->flush();
        }  else {
            return new Response(
            '<html><body>Thre is no Product with this ID: '.$productId.
                    '</body></html>');
        }
        
        //return $this->redirectToRoute('homepage');
        return new Response('Product with id '.$product->getId().' was Successfully Deleted !');
    }
}
