<?php

namespace App\Controller\Admin;

use App\Entity\Stats;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class StatsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Stats::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id'),
            IntegerField::new('victoire'),
            IntegerField::new('defaite'),
            IntegerField::new('parties'),
            IntegerField::new('parties_en_cours'),
            IntegerField::new('parties_terminees'),




        ];
    }
}
