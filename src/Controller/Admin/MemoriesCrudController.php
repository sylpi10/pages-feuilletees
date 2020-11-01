<?php

namespace App\Controller\Admin;

use App\Entity\Memories;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class MemoriesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Memories::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            IntegerField::new('chapter'),
            TextEditorField::new('content'),
        ];
    }

}
