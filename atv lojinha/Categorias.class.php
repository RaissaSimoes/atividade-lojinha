<?php

class Categorias{
    
    private $idCategoria;
    private $descricao;
    

    function __construct($idCategoria, $descricao) {
        $this->setIdCatergoria($idCategoria);
        $this->setDescricao($descricao);
    }
    
    
    public function getIdCategoria(){
        return $this->idCategoria;
    }
    
    public function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
        return $this;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
        return $this;
    }

}

?>