<?php

namespace Facturascripts\Plugins\CatastroAgua\Model;

use FacturaScripts\Core\Model\Base;

class Red extends Base\ModelClass {

    use Base\ModelTrait;

    public $activored;
    public $estado_proceso;
    public $fechafacturacion;
    public $id_red;
    public $proceso_anio;
    public $proceso_mes;
    public $nombre_red;
    public $num_red;
    public $red_urbana;
    
    
     public function clear() {
       parent::clear();
       $this->red_urbana = true;
       $this->activored = true;
   }
   
   // devuelve el nombre de la columna primaria de la tabla
   public static function primaryColumn(): string {
       return 'id_red';
   }
   
   // nombre de la tabla en la base de datos
   public static function tableName(): string {
       return 'redes';
   }

}
