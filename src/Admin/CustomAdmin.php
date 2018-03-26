<?php
/**
 * Created by PhpStorm.
 * User: gilso_nb9zlec
 * Date: 25/03/2018
 * Time: 18:15
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Route\RouteCollection;

class CustomAdmin extends AbstractAdmin
{
    protected $baseRoutePattern = "custom";
    protected $baseRouteName = "custom";

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->clear();
        $collection->add("exibir");
    }
}