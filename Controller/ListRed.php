<?php
namespace Facturascripts\Plugins\CatastroAgua\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListRed extends ListController{
    public function getPageData(): array {
        $data = parent::getPageData();
        $data['menu'] = 'Catastro Agua';
        $data['submenu'] = 'Accesorios';
        $data['title'] = 'Redes';
        $data['icon'] = 'fas fa-network-wired';
        return $data;
    }
    
    protected function createViews() {
        $this->addView('ListRed', 'Red');
        $this->addSearchFields('ListRed', ['num_red']);
        $this->addOrderBy('ListRed', ['num_red'], 'num_red');
    }
    
}
