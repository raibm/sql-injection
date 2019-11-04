# SQL-INJECTION-PHP
Para conseguir compilar o código recomendo o uso do php na versão 7;
Basta configurar um banco de dados POSTGRES, alterar a porta, o nome da database e esta pronto!
Para executar use o comando:

      php -S localhost:9000
Para subir um container Postgres com imagem do Kartoza, use o comando:

      sudo docker run --name "postgis" -p 25432:5432 -d -t kartoza/postgis
      
Informações do container:
      user: docker
      password: docker
      database: postgres

É necessário criar uma tabela no banco chamada USUARIOS com duas colunas, SENHA E LOGIN 
