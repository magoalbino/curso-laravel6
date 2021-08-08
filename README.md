
## 💻 Projeto (em construção)
- Implementação do app Marketplace do curso "Laravel 6 na Prática"

## ✨ Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

 - PHP 8
 - Laravel 6
 - Bootstrap 4
 - Docker
 
## Implementações próprias

O projeto foi todo construído em cima de uma imagem docker, não sendo necessário instalar qualquer configuração na máquina. 
O banco de dados foi modificado de MySQL para PostgreSQL, também dentro da imagem docker.

## Links úteis

Regras de validação do blade:
https://laravel.com/docs/6.x/validation#available-validation-rules

Mensagens de validação:
https://laravel.com/docs/6.x/validation#working-with-error-messages

Criação automática de slugs:
https://github.com/spatie/laravel-sluggable

### Comandos aprendidos:

Criando controllers:
- php artisan make:controller pasta/nomearquivo --resource
- - o artributo 'resource' cria as rotas de todos os métodos rest, e já deixa a estrutura da controller pronta para eles.

Artisan UI
- composer require laravel/ui (php artisan ui --help)
- - cria automaticamente as views relacionadas a autenticação: php artisan ui:auth;
    
Utiliando o elloquent para criar registros no banco:
- Cria um produto contendo o id (FK) de uma loja:
- - $store->products()->create($data)
    
- Cria um produto com ligação de N para N com categorias
- - $product = $store->products()->create($data); //produto criado
- - $product->categories()->sync($data['categories']); //sync sincroniza os IDs na tabela associativa
    
### Outros

- Validando request com outros tipos de campos. Exemplos:
- - Array nomeado  
- - HTML: input type="text" name="profile[name]" | 
    input type="text" name="profile[email]"
- - Request: 'profile.name' => 'required' | 'profile.email' => 'required|email'
    
- - Array numerado (input file múltiplo)
- - HTML: input type="file" name="arquivos[]"
- - Request: 'arquivos.*' => 'image'    