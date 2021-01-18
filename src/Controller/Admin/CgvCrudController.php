<?php

namespace App\Controller\Admin;

use App\Entity\Cgv;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CgvCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cgv::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre'),
            TextEditorField::new('description'),
        ];
    }
    
}
