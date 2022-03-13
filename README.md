# login.php

![](https://raw.githubusercontent.com/sebastianjn007/host/main/imagens/login321.png)

**What is a login system?**

login (derived from the English log in) or logon or signin, is the process to access a restricted computer system made through authentication or user identification, using previous credentials.

# 📝 installation:

downloading php 8

```
apt-get install software-properties-common && add-apt-repository ppa:ondrej/php && apt update && apt install php8.0 php8.0-intl php8.0-mysql php8.0-sqlite3 php8.0-gd
```

clone our repository in your development environment!

```
git clone https://github.com/sebastianjn007/login.php
```


**You need database in this case we use mysql to store the username and password**


# 🗒 settings:

1 - first you will create the tables in mysql where users and passwords will be stored!

```js
USE DATABASE;

CREATE TABLE `usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));
  
INSERT INTO `usuario` (`usuario`,`senha`) VALUES ('sebastianjn','senha123');
```

2 - second you edit the ```.env``` file and put the correct information! 

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

4 - quarto passo entre no navegador neste link logo apos e vera a tela de login: http://0.0.0.0:8080/


ฅ^•ﻌ•^ฅ este repositório tem licenca: https://apache.org/licenses/LICENSE-2.0
