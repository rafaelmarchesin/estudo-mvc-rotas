# Arquivo README.md
## Anotações referentes aos primeiros passos do projeto

Objetivo: Desenvolver um portal para publicação de textos

Arquitetura: Será iniciado como monolito

Requisitos iniciais:
    linguagem: PHP 7.x
    db: MySQL >= 5.6

## Etapas de criação
 - Definir as funcionalidades básicas
 - Definir as rotas básicas da aplicação
 - 

### Definindo funcionalidades básicas:
- Página de exibição de todos os textos
    - Lista todos os textos e permite abri-los para leitura

- Página de insersão de texto
    - Espaço para escrita
    - Botão de publicação
    - Categorias de texto (implementação posterior)
    
- Dashboard de textos do usuário
    - Lista dos textos criados pelo usuário
    - Botões para edição e exclusão

- Página de edição de texto
    - Semelhante à página de criação do texto
    - Lembrar de acrescentar data de criação

### Bancos de dados necessários:
- Textos
    - Título
    - Texto
    - Data da publicação
    - Data da edição (posso atualizar a data de publicação e mudar o estado de publicação para edição)
    - Publicação exibe "Publicado em"
    - Edição exibe "Última edição em"
    - Ou poderia colocar os dois e aparecer "Publicado em xx/xx/xxxx, última edição em yy/xx/xxxx"

- Usuários

- Banco de dados para cada categoria