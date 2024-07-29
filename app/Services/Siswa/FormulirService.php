<?php

namespace App\Services\Siswa;
use App\Core\BaseService;
use App\Dto\FormulirDto;
use App\Models\Formulir;
use App\Models\Siswa;

class FormulirService extends BaseService
{
    public Siswa $siswa;
    public function __construct(Formulir $formulir, Siswa $siswa){
        $this->model = $formulir;
        $this->siswa = $siswa;
    }

    public function saveFormulir(FormulirDto $formulirDto){
            
    }   

    public function printFormulir( string $fomulir_id ) {

    }
 

}
