<center>
<center>
<h1>Usuario</h1>
Requisitos[
#1 mysql
#2 PHP 8
#3 Composer
]

#Iniciar o Servidor do Laravel
php artisan serve

#Criar o banco de dados
php artisan migrate

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

#filtrar oque seja recebido
http://127.0.0.1:8000/api/products?fields=name,price

#condições para ser recebido
​http://127.0.0.1:8000/api/products?coditions=price:>:0

#junção dos dois paramentros + paginação
http://127.0.0.1:8000/api/products?fields=name,price&coditions=price:<:0&page=2

#caso deseje colocar a paginação
&page=2

</center>
<center>

<h1>Desevolvedor</h1>

php artisan make:model Exemplo-singular --migration --controller --factory --seed

#Criar Controller de API usando o resource na pasta api/
php artisan make:controller api/UserController --resource --api

#Criando resource de Product [Retorna um 1 unico dado]
php artisan make:resource ProductResouce

#Criando Collection de Product [Retorna varios dados]
php artisan make:resource ProductCollection

</center>
</center>
</center>
