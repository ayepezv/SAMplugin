<?php
namespace Facturascripts\Plugins\CatastroAgua\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListMedidor extends ListController{
    public function getPageData(): array {
        $data = parent::getPageData();
        $data['menu'] = 'Catastro Agua';
        $data['submenu'] = 'Accesorios';
        $data['title'] = 'Medidores';
        $data['icon'] = 'fas fa-stopwatch';
        return $data;
    }
    
    protected function createViews() {
        $this->addView('ListMedidor', 'Medidor');
        $this->addSearchFields('ListMedidor', ['numeromedidor']);
        $this->addOrderBy('ListMedidor', ['numeromedidor'], 'numeromedidor');
    }
    
}
