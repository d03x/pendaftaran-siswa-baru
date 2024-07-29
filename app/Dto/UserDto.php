<?php

namespace App\Dto;

use Illuminate\Http\Request;

class UserDto
{
    public function __construct(
        public ?string $name = null,
        public ?string $email = null,
        public ?string $password = null,
        public ?string $foto = null,
        public ?string $token = null,
        public ?bool $remember_me = false,
    ) {

    }
    public static function fromRequest(Request $request){
        return new self(
            $request->get('name'),
            $request->get('email'),
            $request->get('password'),
            $request->boolean('remember_me'),
        );
    }
}
