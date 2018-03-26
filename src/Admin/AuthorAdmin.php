<?php
/**
 * Created by PhpStorm.
 * User: gilso_nb9zlec
 * Date: 17/03/2018
 * Time: 17:16
 */

namespace App\Admin;


use App\Entity\Author;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AuthorAdmin extends AbstractAdmin
{
    protected function configureListFields(ListMapper $list)
    {
        $list->addIdentifier('name');
    }

    protected function configureFormFields(FormMapper $form)
    {
        $form->add('name', TextType::class, [
            'label' => "Nome",
            'attr' => [
                'placeholder' => "Informe a Autor"
            ]
        ]);
    }



    public function toString($object)
    {
        return $object instanceof Author ? $object->getName() : "Categoria";
    }
}