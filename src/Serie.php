<?php
// src/Serie.php

// Serie é uma subclasse que HERDA da superclasse Conteudo
class Serie extends Conteudo
{

  /* Mini-exercícios */

  // 1) Adicione uma propriedade específica da Série: temporadas
  // 2) Programe o uso dos construtores considerando superclasse e subclasse
  // 3) Faça getter/setter para esta propriedade
  // 4) (na index.php) Crie dois objetos do tipo Serie
  // 5) (na index.php) Mostre estes dois objetos usando var_dump

  private int $temporada;

   public function __construct(string $titulo, string $genero, int $ano, int $temporada)

   {
        /* Chamamos o construtor da superclasse (classe pai) usando parent::__construct(). Isso é necessário pois estes valores pertecem ás propriedades da classe pai. */
        parent::__construct($titulo, $genero, $ano);

        // Já quanto á duração, fazemos a atribuição aqui mesmo (afinal, $duração é de Filme)
        $this->temporada = $temporada;
    }

    /* Anotação */

    // Este getter e setter são uma propriedade específica da classe Serie

    // Getter da temporada
        public function getTemporada(): int
    {
        return $this->temporada;
    }
    // Setter da temporada
     public function setTemporada(string $temporada): void
    {
        $this->temporada = $temporada;
    }

}