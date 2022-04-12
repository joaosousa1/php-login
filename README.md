Página PHP com sistema de login sem base de dados.

IMPORTANTE! Não é para ser utilizado em produção.
A página dashboard.php só é acessível com autenticação.
O nome e password (hash md5sum) fica no próprio ficheiro php.
Default: Nome: admin Password: admin.
A função "secure_input" previne ataques XSS (Cross site scripting).
É possível ver em "login-log.txt" os logins e tentativas de login falhadas.
O site está configurado para ser utilizado com o apache, por isso é importante que o "Allow override All" esteja ativo em apache.conf para que o ".htaccess" funcione. 
Embora não seja para usar em produção, a autenticação só faz sentido se usar https no apache, nem que seja através de um "self sign certificate". 
Edite /etc/apache2/mods-enable/dir.conf caso pretenda alterar a prioridade do index (index.html ou index.php).