<?php

namespace App\Controller\Admin;

use App\Entity\Cgv;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CgvCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cgv::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
