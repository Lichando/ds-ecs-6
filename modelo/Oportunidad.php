<?php 

class Oportunidad {

   public $Persona;
   public $DatosOperacion;
   public $SmsConsultaId;
   public $IdValidatorId;
   public $MotorSolaFirmaId;
  }


class Persona{ 

    public $Nombres;
    public $Sexo;
    public $Documento;
    public $Email;
    public $Celular;
    public $TelefonoAlternativo;

}

class DatosOperacion {
    public $MontoSolicitado;
    public $Linea;
    public $CantidadCuotas;
    public $TasaEfectivaMensual;
    public $CuotaPromedio;
    public $TasaNominalAnual;
    public $CostoFinancieroTotal;
  }

?>