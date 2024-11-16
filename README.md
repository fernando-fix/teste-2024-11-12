# Guia de configuração do Projeto

## Passo 1: Verificar os Pré-requisitos

Certifique-se de que seu ambiente tem os seguintes pré-requisitos instalados:

- **PHP**: 8.1 ou superior.
- **Composer**: Para gerenciar dependências do Laravel.
- **MySQL** ou outro banco de dados compatível.
- **Servidor Web**: Como Apache ou Nginx.
- **Docker** (Opcional): Se quiser um ambiente isolado.

## Passo 2: Configurar o Banco de Dados

### Criar um Banco de Dados

Use MySQL (ou o banco da sua preferência) e crie um banco de dados para o projeto Laravel. Exemplo com MySQL:

```sql
CREATE DATABASE teste_emprego;
```

### Configurar as Credenciais no Laravel

No arquivo `.env` na raiz do projeto Laravel, configure as credenciais do banco:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=teste_emprego
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

## Passo 3: Instalar Dependências

### Instalar as Dependências do Composer

No terminal, vá até a pasta do seu projeto e execute:

```bash
composer install
```

## Passo 4: Configurar o Laravel

### Gerar a Chave da Aplicação

Garante a segurança das sessões e outros recursos:

```bash
php artisan key:generate
```

## Passo 5: Subir o banco de dados com migrations e seeder (opção 1)

### Rodar Migrações

Crie as tabelas no banco de dados:

```bash
php artisan migrate
```

### Popular o Banco de Dados com Dados de Teste

Use seeders para adicionar dados iniciais:

```bash
php artisan db:seed
```

## Passo 5: Subir o banco de dados com o dump.sql (opção 2)

### Usar o Arquivo `dump.sql` para Subir o Banco de Dados

Na raiz do projeto, há um arquivo `dump.sql` disponível que pode ser usado para fazer o upload da base de dados. Use o seguinte comando para importar o arquivo `dump.sql` para o seu banco de dados MySQL:

```bash
mysql -u seu_usuario -p sua_senha teste_emprego < dump.sql
```

Certifique-se de substituir `seu_usuario`, `sua_senha`, e `teste_emprego` pelas suas credenciais e nome do banco de dados.


## Passo 6: Servir o Projeto

### Usando o Servidor Embutido do Laravel

Para testes rápidos, use o comando:

```bash
php artisan serve
```

O Laravel ficará disponível em [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Passo 7: Acessar a Aplicação

### Acessar a Página de Login

Para acessar a página de login da aplicação, visite:

[http://127.0.0.1:8000/login](http://127.0.0.1:8000/login)

Utilize suas credenciais para fazer login e acessar o painel de administração.

- Login: 'teste@teste.com'
- Senha: '123123123'

## Detalhes do Projeto

- Há dois banners fixos na página inicial, porém quando se cadastro a partir de dois banners, os banners cadastrados aparecem na tela.
