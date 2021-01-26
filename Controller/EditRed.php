<?php
namespace Facturascripts\Plugins\CatastroAgua\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditRed extends EditController
{
    public function getModelClassName()
    {
        return 'Red';
    }

    public function getPageData()
    {
        $pagedata = parent::getPageData();
        $pagedata['menu'] = 'Catastro Agua';
        $pagedata['title'] = 'Catastro Redes';
        $pagedata['icon'] = 'fas fa-network-wired';

        return $pagedata;
    }
}