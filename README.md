# Api Cidades

O intuito deste projeto é solucionar o desafio da TruckPag.
Nesta Api é feita a importação de alguns dados de uma API do IBGE e realizando um CRUD em laravel.

## Aplicação

Nesta Api é feita a importação de alguns dados de uma API do IBGE e realizando um CRUD em laravel.

## Funcionalidades

Abaixo estão os recursos adicionados ao aplicativo:

- [x] Importa cidades através da API do IBGE
- [x] Lista Cidades
- [x] Cadastra Endereços 
- [x] Atualiza Endereços
- [x] Deleta Endereços
- [ ] testes automatizados

## Como Configurar

- abra o projeto
- no MYSQL crie o banco api_cidades
- rode as migrations

* execute o endpoint de importação de dados:

```
http://localhost/laravel/api-cidades/public/api/importar
```
-resultado esperado:
```json
{
    "satus": true,
    "response": "Importação Realizada!"
}
```


## Como usar:

### Endpoint's do tipo GET:

* Lista todas as Cidades importadas:
```
http://localhost/laravel/api-cidades/public/api/lista-cidades
```

* Lista todos os endereços cadastrados:
```
http://localhost/laravel/api-cidades/public/api/lista-enderecos
```

### Endpoint's do tipo POST:
* Insira no header da requisição:
```json
{
    "Accept": "application/json"
}    
```

* Cadastra um novo endereco 
```
http://localhost/laravel/api-cidades/public/api/cadastra-endereco?logradouro={logradouro}&numero={numero}&bairro={bairro}&id_cidade={idCidade}
```

* Atualiza um cadastro pré existente
```
http://localhost/laravel/api-cidades/public/api/atualiza-endereco?id={idEndereco}&logradouro={logradouro}&bairro={bairro}&numero={numero}&id_cidade={idCidade}
```

### Endpoint do tipo DELETE:
* Deleta um endereço
```
http://localhost/laravel/api-cidades/public/api/deleta-endereco?id={idEndereco}
```





