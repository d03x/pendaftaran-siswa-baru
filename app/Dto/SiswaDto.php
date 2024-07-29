<?php

namespace App\Dto;

class SiswaDto
{
    public function __construct(
        public ?string $id = null,
        public string $nisn,
        public string $no_whatsapp,
        public string $jenis_kelamin,
        public bool $aktif = false,
    ) {

    }
}
