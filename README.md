<h4> Projeto criação CRUD PHP </h4>

<hr>

<h3 align="center">
    Projeto PHP
    <br>
    Criando uma aplicação usando PHP
    <br><br>
    <p align="center">
      <a href="#-sobre">Sobre</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-professor-responsável">Professor responsável</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-tecnologias">Tecnologias</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-antes-de-começar">Antes de começar</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-execução">Execução do projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#entre-em-contato">Contato</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  </p>
</h3>

<hr>

[https://github.com/AugustoMello09/php-crud/assets/101072311/f6644086-8636-450a-9083-ebca59ff40ac](https://github.com/AugustoMello09/Help-Desk/assets/101072311/73e08b6c-8fb1-4ebe-b5ff-d090661b393f)

<hr>

## 🔖 Sobre

Este projeto é um sistema simples de CRUD (Create, Read, Update, Delete) para gerenciamento de usuários. Ele permite que você crie, visualize, edite e exclua registros de usuários em um banco de dados. Este projeto foi desenvolvido para a matéria Projeto Integrador Extensionista - ADS 3

---

## 👨‍💻 Estudante

* José Augusto

---

## 👩‍🏫 Professor responsável

* Prof. Douglas Rodrigues

---

## 🚀 Tecnologias
 - [Bootstrap 5](https://getbootstrap.com/)
 - [Xampp](https://www.apachefriends.org/pt_br/download.html)
- Database:
  - [MySQL Server](https://dev.mysql.com/downloads/mysql/)
- Ferramenta
  - [PHP](https://www.php.net/)
  - [Git](https://git-scm.com/downloads)
  - [vsCode](https://code.visualstudio.com/)
---

## ⤵ antes de começar

<br>

- Passo 1: Navegue até a pasta xampp\htdocs onde os projetos web devem ser colocados.

- Passo 1.2: Abra o terminal ou prompt de comando e execute o seguinte comando para clonar o repositório do projeto:
 
  ```bash
  $ git clone https://github.com/AugustoMello09/php-crud.git
  ```

<br>

- Passo 2: Configurar o Xamp

  - Passo 2.1: Certifique-se de ter o XAMPP instalado em sua máquina.

  - Passo 2.2: XAMPP é um pacote de software livre que inclui o Apache, MySQL, PHP e Perl. É utilizado para criar um servidor web local

  ![Screenshot_38](https://github.com/AugustoMello09/php-crud/assets/101072311/4a63a057-dd69-442d-acd3-bf30d4b99b7d)


<br>

  - Passo 3: Configuração do Banco de Dados.

  - Passo 3.1: Acesse o phpMyAdmin através do navegador indo para http://localhost/phpmyadmin

  - Passo 3.2: Crie um novo banco de dados. Para este exemplo, vamos chamá-lo de crud_db.

  - Passo 3.3: Dentro do banco de dados crud_db, crie uma nova tabela chamada `php` com a seguinte estrutura:

  ```bash
 CREATE TABLE `php` ( `id` int(100) NOT NULL AUTO_INCREMENT, `ﬁrst_name` varchar(100) NOT NULL, `last_name` varchar(100) NOT NULL, `email` varchar(100) NOT NULL, `gender` varchar(100) NOT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
  ```
  Ou Crie manualmente
  
  ![Screenshot_40](https://github.com/AugustoMello09/php-crud/assets/101072311/c99722df-a6a0-4644-9d97-bc91a99fe269)

  ![Screenshot_43](https://github.com/AugustoMello09/php-crud/assets/101072311/95b47cb1-be8d-4edc-a303-689ccf9bd46a)

  ![Screenshot_42](https://github.com/AugustoMello09/php-crud/assets/101072311/13cd5b0d-13c9-4e37-a412-6c88ba54924d)
  
<br>

 - Passo 4: Configuração do Projeto.

 - Passo 4.1: Após clonar o repositório, navegue até o diretório do projeto:
  
  ```bash
  cd xampp\htdocs\php-crud
  ```
 - Passo 4.2: Verifique o arquivo de configuração do banco de dados db_conexao.php e atualize-o com as credenciais do banco de dados, se necessário:

 ![Screenshot_44](https://github.com/AugustoMello09/php-crud/assets/101072311/7948e445-bc73-4b6f-8317-6ae2dae9c353)

<br>

 - Passo 5: Executar o Projeto.

 - Passo 5.1: Abra o navegador e acesse o projeto através do URL:

  `http://localhost/php-crud/index.php`

 - Passo 5.2: A partir daqui, você deve ver a interface do seu CRUD de usuários:

 ![Screenshot_45](https://github.com/AugustoMello09/php-crud/assets/101072311/b8a509d4-a96f-475f-b710-51312f865289)


 ## ⤵ execução


  Passo 1: Criar usuário.

  Ao clicar em Adicionar novo usuário você terá acesso a criação de usuário.

  ![Screenshot_48](https://github.com/AugustoMello09/php-crud/assets/101072311/26168140-151d-4db8-9983-fd423f2d2ab2)

  Preencha o formulário para adicionar um novo usuário.

  ![Screenshot_46](https://github.com/AugustoMello09/php-crud/assets/101072311/6d59dc02-c00e-43a1-903a-358e9f2c4df5)

  Passo 2: Visualizar os usuários

  Ao clicar em "Salvar", você será direcionado para index.php, agora com as novas informações.

  ![Screenshot_47](https://github.com/AugustoMello09/php-crud/assets/101072311/d3154735-69ba-4b59-a996-9542f478ee45)

  Passo 3: Atualizar os usuários.

  Ao clicar no lápis que está em na coluna Ação você terá acesso a editar o usuário selecionado.

  ![Screenshot_49](https://github.com/AugustoMello09/php-crud/assets/101072311/5d8d42e6-2291-4cfc-ad48-c72f07b8e4ac)

  ![Screenshot_50](https://github.com/AugustoMello09/php-crud/assets/101072311/dfd5a773-7ad2-47bc-aad1-5f10bc44c0ff)

  Passo 4: Deletar um usuário.

  Ao clicar na lixeira que está em na coluna Ação você terá como deletar o usuário escolhido. 

  ![Screenshot_51](https://github.com/AugustoMello09/php-crud/assets/101072311/1dffe79e-4a99-4018-88d4-5b62f30ab905)

  ### Entre em contato  

Para mais informações sobre o projeto ou para entrar em contato, você pode me encontrar através dos canais abaixo:

<div style="display: inline_block">

  <a href="https://www.linkedin.com/in/jos%C3%A9-augusto-mello-794a94234" target="_blank"><img src="https://img.shields.io/badge/-LinkedIn-%230077B5?style=for-the-badge&logo=linkedin&logoColor=white" target="_blank"></a>
 <a href="mailto:joseaugusto.Mello01@gmail.com" target="_blank"><img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white" target="_blank"></a>   

</div>
