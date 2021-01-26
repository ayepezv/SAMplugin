<?php

namespace Facturascripts\Plugins\CatastroAgua\Model;

use FacturaScripts\Core\Model\Base;

class Sector extends Base\ModelClass {

    use Base\ModelTrait;

    public $activosector;
    public $id_red;
    public $id_sector;
    public $fecharegistrosector;
    public $nombre_sector;
    public $num_sector;
    public $user;
    
    
     public function clear() {
       parent::clear();
       $this->fecharegistrosector = date('d-m-Y');
       $this->activosector = true;
   }
   
   // devuelve el nombre de la columna primaria de la tabla
   public static function primaryColumn(): string {
       return 'idsector';
   }
   
   // nombre de la tabla en la base de datos
   public static function tableName(): string {
       return 'sectores';
   }

}
