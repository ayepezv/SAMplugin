<?php
namespace Facturascripts\Plugins\CatastroAgua\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditMedidor extends EditController
{
    public function getModelClassName()
    {
        return 'Medidor';
    }

    public function getPageData()
    {
        $pagedata = parent::getPageData();
        $pagedata['menu'] = 'Catastro Agua';
        $pagedata['title'] = 'Catastro Medidores';
        $pagedata['icon'] = 'fas fa-stopwatch';

        return $pagedata;
    }
}