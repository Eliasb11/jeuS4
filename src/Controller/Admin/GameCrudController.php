<?php

namespace App\Controller\Admin;

use App\Entity\Game;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class GameCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
{
    return Game::class;
}



    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            IdField::new('user1_id'),
            IdField::new('user2_id'),
            IdField::new('winner_id'),
            DateTimeField::new('created'),
            DateTimeField::new('ended'),
        ];
    }
}
