# Projeto Amazon Clone com Laravel Sail, Inertia Vue3 e Stripe
 Este é um projeto de clone da Amazon, desenvolvido com Laravel Sail, Inertia Vue3 e Stripe. O objetivo deste projeto é apresentar um site de e-commerce completo, com todas as funcionalidades básicas, incluindo caadstro de usuários e endereços, adição e remoção de itens no carrinho de compras e pagamento com Stripe.
 
 ## Screenshots
![Página Inicial](https://github.com/felipe-silveira-alpaclass/amazon-clone/blob/main/public/screenshots/Screenshot%20from%202023-02-10%2006-57-05.png)
![Sidebar](https://github.com/felipe-silveira-alpaclass/amazon-clone/blob/main/public/screenshots/Screenshot%20from%202023-02-10%2006-58-16.png)
![Categorias](https://github.com/felipe-silveira-alpaclass/amazon-clone/blob/main/public/screenshots/Screenshot%20from%202023-02-10%2006-58-29.png)
![Carrinho de Compras](https://github.com/felipe-silveira-alpaclass/amazon-clone/blob/main/public/screenshots/Screenshot%20from%202023-02-10%2006-59-30.png)
![Checkout](https://github.com/felipe-silveira-alpaclass/amazon-clone/blob/main/public/screenshots/Screenshot%20from%202023-02-10%2006-59-42.png)
![Email de confirmação de compra](https://github.com/felipe-silveira-alpaclass/amazon-clone/blob/main/public/screenshots/Screenshot%20from%202023-02-10%2007-00-21.png)

### Requisitos
<!-- - [Docker](https://docs.docker.com/get-docker/) ?
- [Docker Compose](https://docs.docker.com/compose/install/) ? -->
- [PHP 7.4 ou superior](https://www.php.net/downloads.php)
- [Node.js](https://nodejs.org/en/download/)
- [Composer](https://getcomposer.org/download/)
- [Laravel Sail](https://laravel.com/docs/8.x/sail) 
- [Stripe](https://stripe.com/br)
- [MySQL ou PostgreSQL](https://www.postgresql.org/download/)
- [Git](https://git-scm.com/downloads)
- [NPM](https://www.npmjs.com/get-npm)

## Instalação
Para instalar e testar este projeto em seu computador, você precisará ter o Composer e o Node.js instalados. Além disso, você precisará criar uma conta no Stripe para testar as compras.
### Clone o repositório deste projeto em seu computador.

```bash
git clone git@github.com:felipe-silveira-alpaclass/amazon-clone.git
```

### Entre na pasta do projeto e execute o seguinte comando para instalar as dependências do Laravel.

```bash
composer install
```

### Renomeie o arquivo .env.example para .env e adicione suas informações de banco de dados e chave do Stripe.

### Execute o seguinte comando para gerar uma chave secreta para sua aplicação.

```bash
php artisan key:generate
```

### Execute o seguinte comando para instalar as dependências do Node.js.

```bash
npm install
```

### Rode as migrations do projeto com o seguinte comando

```bash
php artisan migrate
```

### Execute o seguinte comando para iniciar o servidor de desenvolvimento.

```bash
php sail up
```

### Execute o seguinte comando para compilar os arquivos CSS e JS.

```bash
npm run dev
```

### Acesse o endereço http://localhost para ver o projeto em execução.


## Dependências de Desenvolvimento

- @inertiajs/vue3: 1.0.0
- @tailwindcss/forms: 0.5.3
- @vitejs/plugin-vue: 4.0.0
- Autoprefixer: 10.4.12
- Axios: 1.1.2
- Laravel-vite-plugin: 0.7.2
- Lodash: 4.17.19
- PostCSS: 8.4.18
- TailwindCSS: 3.2.1
- Vite: 4.0.0
- Vue: 3.2.41

## Dependências

- Animate.css: 4.1.1
- Pinia: 2.0.30
- Pinia-plugin-persistedstate: 3.0.0

## Licença

[MIT](https://choosealicense.com/licenses/mit/)
