<?php

namespace Facturascripts\Plugins\CatastroAgua\Model;

use FacturaScripts\Core\Model\Base;

class Medidor extends Base\ModelClass {

    use Base\ModelTrait;

    public $activomedidor;
    public $codcliente;
    public $cuenta;
    public $diametromedidor;
    public $idinstaladormedidor;
    public $idmedidor;
    public $idusuario;
    public $fechafabricacionmedidor;
    public $fechainstalacionmedidor;
    public $fecharegistromedidor;
    public $marcamedidor;
    public $modelomedidor;
    public $numeroesferas;
    public $numeromedidor;
    public $numerosellomedidor;
    public $sellomedidor;
    public $ubicacionmedidor;
    
    
     public function clear() {
       parent::clear();
       $this->fecharegistromedidor = date('d-m-Y');
       $this->activomedidor = false;
   }
   
   // devuelve el nombre de la columna primaria de la tabla
   public static function primaryColumn(): string {
       return 'idmedidor';
   }
   
   // nombre de la tabla en la base de datos
   public static function tableName(): string {
       return 'medidores';
   }

}
