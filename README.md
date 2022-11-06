<center>
<center>
<h1>Usuario</h1>
Requisitos:
    
        #1 mysql
        #2 PHP 8+
        #3 Composer

Iniciar Sistema:
    
        php artisan serve - Iniciar o Servidor do Laravel

        php artisan migrate - Criar o banco de dados

Recurso Produto (product)

Endpoint: /produtos

Endpoints:
    
		GET /products - Recuperar os produtos;
		
		GET /products/{id} - Recuperar um produto em especifico;
		
		POST /products - Criar um novo produto;
		
		PUT /products - Atualizar um produto especifico;
		
		DELETE /products/(id) - Remover um produto específico;
		
		PATCH /products - Atualizar parte de um protudo em especifico;
		
		OPTIONS /products - Quais verbos eu posso utilizar em produtos;

Filtros & Busca:
    
        http://127.0.0.1:8000/api/products?fields=name,price - Filtrar oque seja recebido;

        http://127.0.0.1:8000/api/products?coditions=price:>:0 - Condições para ser recebido

        http://127.0.0.1:8000/api/products?fields=name,price&coditions=price:<:0&page=2 - Junção dos dois paramentros + paginação

</center>
<center>

<h1>Desevolvedor</h1>
Criação das dependecias do Laravel:
    
        php artisan make:model Exemplo-singular --migration --controller --factory --seed - Gera Migrates Controller e varios outros de uma vez só 

        php artisan make:controller api/UserController --resource --api - Cria Controller de API usando o resource na pasta api/

        php artisan make:resource ProductResouce - Cria resource de Product [Retorna um 1 unico dado]

        php artisan make:resource ProductCollection - Cria Collection de Product [Retorna varios dados]

</center>
</center>
</center>
