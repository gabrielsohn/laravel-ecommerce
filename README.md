# 🏎️ Sistema de Classificados de Veículos – Laravel

Aplicação desenvolvida em Laravel para gerenciamento completo de veículos, marcas, modelos e cores, além de autenticação, cadastro, login, dark mode e detalhes de anúncio.

---

## 📌 Requisitos

- PHP >= 8.1  
- Composer  
- MySQL ou MariaDB  
- Extensões PHP comuns habilitadas

---

## 📦 1. Clonar o projeto

git clone https://github.com/gabrielsohn/laravel-ecommerce
cd laravel-ecommerce

---

## 🧩 2. Instalar dependências PHP

composer install

---

## 🎨 3. Instalar dependências frontend (se necessário)

npm install
npm run dev
# ou produção:
# npm run build

---

## ⚙️ 4. Criar e configurar o .env

cp .env.example .env

Edite o .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

Gerar chave:

php artisan key:generate

---

## 🗄️ 5. Executar migrations

php artisan migrate

---

## 🚀 6. Executar o servidor

php artisan serve

A aplicação estará disponível em:
http://127.0.0.1:8000

---

## 🔐 7. Acesso

- Criar conta pela própria aplicação  
- Ou recuperar senha pela tela de "Esqueceu a Senha"

---

# 🖼️ Prints da Aplicação

## 🏠 Telas principais

### Home
![Home](prints/home.png)

### Home logada
![Home Logada](prints/home-logada.png)

### Login
![Login](prints/login.png)

### Criar Conta
![Criar Conta](prints/criar-conta.png)

### Esqueceu a Senha
![Esqueceu a Senha](prints/esqueceu-senha.png)

### Dark Mode
![Dark Mode](prints/dark-mode.png)

---

## 🚗 Veículos (CRUD)

### Lista de Veículos
![Lista de Veículos](prints/veiculos.png)

### Adicionar Veículo
![Adicionar Veículo](prints/veiculos-adicionar.png)

### Editar Veículo
![Editar Veículo](prints/veiculos-editar.png)

### Detalhes do Anúncio
![Detalhes](prints/detalhes-anuncio.png)

---

## 🏷️ Marcas

### Lista de Marcas
![Marcas](prints/marcas.png)

### Adicionar Marca
![Adicionar Marca](prints/marcas-adicionar.png)

### Editar Marca
![Editar Marca](prints/marcas-editar.png)

---

## 🚘 Modelos

### Lista de Modelos
![Modelos](prints/modelos.png)

### Adicionar Modelo
![Adicionar Modelo](prints/modelos-adicionar.png)

### Editar Modelo
![Editar Modelo](prints/modelos-editar.png)

---

## 🎨 Cores

### Lista de Cores
![Cores](prints/cores.png)

### Adicionar Cor
![Adicionar Cor](prints/cores-adicionar.png)

### Editar Cor
![Editar Cor](prints/cores-editar.png)

---

## 📄 Licença

Projeto destinado a estudo e demonstração (trabalho final).
