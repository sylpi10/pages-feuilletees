<?php

namespace App\Controller\Admin;

use App\Entity\Poem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PoemCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Poem::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Poèmes')
            ->setPageTitle('edit', 'Modifier Un Poème')
            ->setPageTitle('new', 'Créer Un Poème')

        ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Titre'),
            TextEditorField::new('content')->setLabel('Contenu'),
            AssociationField::new('category')->setLabel('Catégorie'),
            TextField::new('publicationDate')->setLabel("Date de publication")
        ];
    }

    public function configureActions(Actions $actions): Actions
{
    return $actions
        // ...
        ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $action) {
            return $action->setIcon('fa fa-plus')->setLabel('Ajouter un Poème');
        })
        ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $action) {
            return $action->setIcon('fa fa-pencil-alt')->setLabel('Modifier');
        })
        ->update(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE, function (Action $action) {
            return $action->setIcon('fa fa-pencil-alt')->setLabel('Sauver et continuer l\'édition');
        })
        ->update(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN, function (Action $action) {
            return $action->setIcon('fa fa-check')->setLabel('Enregister');
        })
        ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action) {
            return $action->setIcon('fa fa-times')->setLabel('Supprimer');
        })
        ->update(Crud::PAGE_NEW, Action::SAVE_AND_ADD_ANOTHER, function (Action $action) {
            return $action->setIcon('fa fa-plus')->setLabel('Sauver et Créer un autre');
        })
        ->update(Crud::PAGE_NEW, Action::SAVE_AND_RETURN, function (Action $action) {
            return $action->setIcon('fa fa-plus')->setLabel('Valider');
        })

        // in PHP 7.4 and newer you can use arrow functions
        // ->update(Crud::PAGE_INDEX, Action::NEW,
        //     fn (Action $action) => $action->setIcon('fa fa-file-alt')->setLabel(false))
    ;
}
    
}
