# Exemplos de POO no PHP

Neste repositório utilizaremos o PHP com **Programação Orientada a Objetos**.

Os assuntos e exemplos estão divididos por `branches`, acessíveis pelo menu de branches no GitHub. 

---


## Branch 10: Composer e Autoload
 - Composer: gerenciador de dependências para PHP; aqui utilizamos apenas o recurso de autoload
 - Configuração do autoload no composer.json
 - PSR-4: diretriz que determina a relação entre namespaces e diretórios para o autoload
 - Mapeamento do namespace App para a pasta src
 - Geração do autoload com composer dump-autoload
 - Carregamento do autoload na index.php usando um único require_once apontando para vendor/autoload.php
 - Teste: criação da classe Saudacao com carregamento automático via autoload
 - composer install: instala dependências e gera arquivos do autoload (desde que você tenha o composer.json)
 - Lembrete: a pasta vendor não precisa ser versionada pelo Git. Por isso, a colocamos no .gitignore

---


## Branch 09: Namespaces
 - Reorganização dos arquivos em pastas dentro de src
 - Declaração do namespace e do subnamespace em cada arquivo
 - Utilização do nome completo de um recurso: App/Pedidos/pedido
 - Importação do namespace com use para utilizar nomes simples
 - Criação de apelidos com as para solucionar conflitos de nomes
 - lembrete: use importa namespaces; require_once carrega arquivos


---


## Branch 08: Enumerações
 - Enumerações com um conjunto definido de opções usando case
 - Caso associados a valores do tipo string
 - Acessao a um caso com StatusPedido::NomeDoCaso
 - Acesso ao valor/texto do caso com value


---


## Branch 07: Recursos Estáticos
 - propriedades estáticas usando static
 - Métodos estáticos usando static
 - Acesso a recursos estáticos com ::
 - Acesso a recursos estáticos da própria classe usando self
 - Diferença entre usar recursos estáticos de classe e recursos de objeto



---


## Branch 05: Abstratas e Polimorfismo
 - Classe abstrata: Conteudo
 - Impossibilidade de instanciar diretamente uma classe abstrata
 - Método abstrato: getDescricao()
 - Obriga a Implementação do método abstrato pelas classes filhas Filme e Serie
 - Polimorfismo: a mesma chamada a getDescricao utiliza a implementação de cada classe


---


## Branch 04: Herança
 - Classe-pai (superclasse): Conteudo
 - Classe-filha (subclasse): Filme e Serie
 - Herança utilizando extends
 - Herança com propriedades e métodos
 - Visibilidade protected na superclasse permitindo o acesso atraés das subclasses.
 - Construtor da superclasse parent::__construct()
 - Propriedades específicas das subclasses


---


## Branch 03: Método Construtor
 - Finalidade do construtor
 - Implementação do método __construct
 - Parâmetros/argumentos do construtor
 - Passagem de dados/valores ao criar objetos
 - Atribuição de valores para as propriedades usando o construtor
 - Uso de setter a partir do construtor


---


## Branch 02: Visibilidade e Encapsulamento
- Visibilidade de propriedades: publice private
- Encapsulamento
- Métodos Getters para leitura
- Métodos Setters para escrita

---


## Branch 01: Classes, Objetos, Propriedades e Métodos

 - Classes e Objetos
 - Propriedades e métodos
 - Tipos de dados
 - Uso do $this para acessar recursos dentro da própria classe