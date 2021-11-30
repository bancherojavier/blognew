<?php

namespace App\Traits;

trait ApiResponse
{

   

    public function successResponse($data, $code = 200, $msj='')
    {
        return response()->json(array('$data'=>$data, 'code' => $code, 'msj' => $msj),$code); 
    }

    
    public function errorResponse($message, $code = 500, $msj='')
    {
        return response()->json(array('message'=>$message, 'code' => $code, 'msj' => $msj),$code); 
    }
   
}