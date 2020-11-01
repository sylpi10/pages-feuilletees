<?php

namespace App\Controller\Admin;

use App\Entity\PoemCategory;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PoemCategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PoemCategory::class;
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
