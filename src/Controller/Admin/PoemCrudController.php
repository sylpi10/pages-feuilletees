<?php

namespace App\Controller\Admin;

use App\Entity\Poem;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class PoemCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Poem::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TextEditorField::new('content'),
            AssociationField::new('category'),
            TextField::new('publicationDate')

        ];
    }
    
}
