<?php
// src/Filme.php

class Filme 
{
    // Propriedades: características 
    private string $titulo;
    private string $genero;
    private int $ano;

    // Métodos: comportamentos (funções)
    public function ehClassico(): bool
    {
        // É clássico SE ano for menor que 2000
        // detalhe, condicional que n use if
        return $this->ano < 2000;
    }

    /* Métodos getters: permitem ACESSO/LEITURA (ler dados) */
    /* Getters só retornam os dados de cada propriedade. */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getGenero(): string 
    {
        return $this->genero;
    }

      public function getAno(): string 
    {
        return $this->ano;
    }
    /* Métodos setters: permitem ACESSO/ESCRITA (colocar dados) */
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function setGenero(string $genero): void
    {
        $this->genero = $genero;
    }

      public function setAno(int $ano): void
    {
        // Podemos usar os setters para validações/verificações
        if($ano > 0){
        $this->ano = $ano;
        }
    }
}
