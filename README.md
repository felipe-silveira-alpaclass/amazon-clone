<!-- Projeto Amazon Clone com Laravel Sail, Inertia Vue3 e Stripe
Este é um projeto de clone da Amazon, desenvolvido com Laravel Sail, Inertia Vue3 e Stripe. O objetivo deste projeto é apresentar um site de e-commerce completo, com todas as funcionalidades básicas, incluindo adição eremoção de usuários e endereços, adição e remoção de itens no carrinho de compras e pagamento com Stripe.

Instalação
Para instalar e testar este projeto em seu computador, você precisará ter o Composer e o Node.js instalados. Além disso, você precisará criar uma conta no Stripe para testar as compras.

Requisitos
PHP 7.4 ou superior
Node.js e npm
Banco de dados MySQL ou PostgreSQL
Uma conta ativa no Stripe

Clone o repositório deste projeto em seu computador.
bash
Copy code
git clone https://github.com/seu-usuario/seu-repositorio
Entre na pasta do projeto e execute o seguinte comando para instalar as dependências do Laravel.
Copy code
composer install
Renomeie o arquivo .env.example para .env e adicione suas informações de banco de dados e chave do Stripe.

Execute o seguinte comando para gerar uma chave secreta para sua aplicação.


Copy code
php artisan key:generate
Execute o seguinte comando para instalar as dependências do Node.js.
Copy code
npm install

Configure as informações do banco de dados e da conta do Stripe no arquivo .env
Rode as migrations do projeto com o seguinte comando
Copy code
php sail migrate
Inicie o servidor de desenvolvimento com o seguinte comando
Copy code
php sail lift

Dependências de Desenvolvimento
@inertiajs/vue3: 1.0.0
@tailwindcss/forms: 0.5.3
@vitejs/plugin-vue: 4.0.0
Autoprefixer: 10.4.12
Axios: 1.1.2
Laravel-vite-plugin: 0.7.2
Lodash: 4.17.19
PostCSS: 8.4.18
TailwindCSS: 3.2.1
Vite: 4.0.0
Vue: 3.2.41
Dependências
Animate.css: 4.1.1
Pinia: 2.0.30
Pinia-plugin-persistedstate: 3.0. -->

<!-- Melhore a apresentação do readme usando como base o texto acima -->

# Projeto Amazon Clone com Laravel Sail, Inertia Vue3 e Stripe
## Este é um projeto de clone da Amazon, desenvolvido com Laravel Sail, Inertia Vue3 e Stripe. O objetivo deste projeto é apresentar um site de e-commerce completo, com todas as funcionalidades básicas, incluindo adição eremoção de usuários e endereços, adição e remoção de itens no carrinho de compras e pagamento com Stripe.

## Instalação

Para instalar e testar este projeto em seu computador, você precisará ter o Composer e o Node.js instalados. Além disso, você precisará criar uma conta no Stripe para testar as compras.

### Requisitos

- PHP 7.4 ou superior
- Node.js e npm
- Banco de dados MySQL ou PostgreSQL
- Uma conta ativa no Stripe

### Clone o repositório deste projeto em seu computador.

```bash
git clone
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

### Configure as informações do banco de dados e da conta do Stripe no arquivo .env

### Rode as migrations do projeto com o seguinte comando

```bash
php sail migrate
```

### Inicie o servidor de desenvolvimento com o seguinte comando

```bash
php sail lift
```

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

