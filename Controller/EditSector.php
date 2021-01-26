<?php
namespace Facturascripts\Plugins\CatastroAgua\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditSector extends EditController
{
    public function getModelClassName()
    {
        return 'Sector';
    }

    public function getPageData()
    {
        $pagedata = parent::getPageData();
        $pagedata['menu'] = 'Catastro Agua';
        $pagedata['title'] = 'Catastro Sectores';
        $pagedata['icon'] = 'fas fa-network-wired';

        return $pagedata;
    }
}