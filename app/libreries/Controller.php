<?php

/**
 * Class Controller
 * Cargara vistas y modelos
 *
 */

class Controller{

    /**
     * Cargara Modelo
     */
    public function model($model){
        if( file_exists ( "../app/model/".$model.".php" ) ){
            require_once "../app/model/".$model.".php";
            return new $model();
        }
    }

    public function view( $view, $data = [] ){
        if( file_exists( "../app/views/".$view.".php") ){
            require_once "../app/views/".$view.".php";
        }else{
            die("No existe la vista");
        }
    }

}
