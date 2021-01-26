<?php
namespace Facturascripts\Plugins\CatastroAgua\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListSector extends ListController{
    public function getPageData(): array {
        $data = parent::getPageData();
        $data['menu'] = 'Catastro Agua';
        $data['submenu'] = 'Accesorios';
        $data['title'] = 'Sectores';
        $data['icon'] = 'fas fa-network-wired';
        return $data;
    }
    
    protected function createViews() {
        $this->addView('ListSector', 'Sector');
        $this->addSearchFields('ListSector', ['num_sector']);
        $this->addOrderBy('ListSector', ['num_sector'], 'num_sector');
    }
    
}
