<?php

class Celular {
    private $nome;
    private $marca;
    private $tam_tela;
    private $memo_arm;
    private $memo_ram;
    private $preço;
    
    function __construct($nome, $marca, $tam_tela, $memo_arm, $memo_ram, $preço) {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->tam_tela = $tam_tela;
        $this->memo_arm = $memo_arm;
        $this->memo_ram = $memo_ram;
        $this->preço = $preço;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getMarca() {
        return $this->marca;
    }

    function getTam_tela() {
        return $this->tam_tela;
    }

    function getMemo_arm() {
        return $this->memo_arm;
    }

    function getMemo_ram() {
        return $this->memo_ram;
    }

    function getPreço() {
        return $this->preço;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setTam_tela($tam_tela) {
        $this->tam_tela = $tam_tela;
    }

    function setMemo_arm($memo_arm) {
        $this->memo_arm = $memo_arm;
    }

    function setMemo_ram($memo_ram) {
        $this->memo_ram = $memo_ram;
    }

    function setPreço($preço) {
        $this->preço = $preço;
    }
}
?>
