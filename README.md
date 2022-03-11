# login.php

![](https://raw.githubusercontent.com/sebastianjn007/host/main/imagens/login321.png)

**O que é um sistema de login?**

login (derivado do inglês log in) ou logon ou signin, é o processo para acessar um sistema informático restrito feita através da autenticação ou identificação do utilizador, usando credenciais previamente cadastradas no sistema por esse utilizador.

# 📝 instalação 

baixando php 8

```
apt-get install software-properties-common && add-apt-repository ppa:ondrej/php && apt update && apt install php8.0 php8.0-intl php8.0-mysql php8.0-sqlite3 php8.0-gd
```

clone o nosso repositório no seu ambiente de desenvolvimento!

```
git clone https://github.com/sebastianjn007/login.php
```


**Você precisa de database nesse caso usamos o mysql para armazenar o usuário e a senha**


# 🗒️ configurações 

1 - primeiro você ira criar as tabelas no mysql onde será armazenado usuários e senhas!

```js
USE DATABASE;

CREATE TABLE `usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));
  
INSERT INTO `usuario` (`usuario`,`senha`) VALUES ('sebastianjn','senha123');
```

2 - segundo você editar o arquivo ```.env``` e coloque as informações correta!

```js
host=host
user=user
senha=senha
database=database
```

3 - terceiro passo é so executar e abrir o navegador e testar se estar tudo funcionando!

```
php -S 0.0.0.0:8080
```

ra no navegado em: http://0.0.0.0:8080/



✒️ ฅ^•ﻌ•^ฅ este repositório tem licença: 
