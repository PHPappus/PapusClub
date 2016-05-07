<?php

namespace papusclub;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
	protected $fillable = ['nombre', 'apellido','tipoDoc','docId','fechaNac','estadoCiv','lugarNac','nacionalidad','direccion',
							'telefono','celular','correo','nivelIns','colegio','carrera','centroTrabajo',
							'dirTrab','telfTrab','cargo','nombCon','apCon','tDocCon','docCon','fechaNacCon','estCivCon','nombP',
							'apP','tDocP','docP','fechaNacP','estCivP','nombM','apM','tDocM','docM','fechaNacM','estCivM'];
}

?>