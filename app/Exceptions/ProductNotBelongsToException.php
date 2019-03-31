<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUserException extends Exception
{
    //
    public function render(){
        return [
            'data' => 'Product not belongs to user'
        ];
    }
}
