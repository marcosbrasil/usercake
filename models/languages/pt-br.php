<?php
/*
UserCake Version: 2.0.x
http://usercake.com

Created: Marcos Brasil <markus.prologic@gmail.com>
*/

/*
%m1% - Dymamic markers which are replaced at run time by the relevant index.
*/

$lang = array(); 

//Account
$lang = array_merge($lang,array(
	'ACCOUNT_SPECIFY_USERNAME' 				=> 'Por favor, insira seu nome de usuário',
	'ACCOUNT_SPECIFY_PASSWORD' 				=> 'Por favor, insira sua senha',
	'ACCOUNT_SPECIFY_EMAIL'					=> 'Por favor, insira seu email',
	'ACCOUNT_INVALID_EMAIL'					=> 'Endereço de email inválido',
	'ACCOUNT_USER_OR_EMAIL_INVALID'			=> 'Nome de usuário ou endereço de email é inválido',
	'ACCOUNT_USER_OR_PASS_INVALID'			=> 'Nome de usuário ou a senha é inválida',
	'ACCOUNT_ALREADY_ACTIVE'				=> 'Sua conta já está ativado',
	'ACCOUNT_INACTIVE'						=> 'Sua conta está inativa. Verifique seus e-mails / pasta de spam para contas instruções de ativação',
	'ACCOUNT_USER_CHAR_LIMIT'				=> 'Seu nome de usuário deve ter entre %m1% and %m2% caracteres em comprimento',
	'ACCOUNT_DISPLAY_CHAR_LIMIT'			=> 'Seu nome de exibição deve estar entre %m1% and %m2% caracteres de comprimento',
	'ACCOUNT_PASS_CHAR_LIMIT'				=> 'Sua senha deve ter entre %m1% and %m2% caracteres de comprimento',
	'ACCOUNT_TITLE_CHAR_LIMIT'				=> 'Títulos deve situar-se entre %m1% and %m2% caracteres de comprimento',
	'ACCOUNT_PASS_MISMATCH'					=> 'Sua senha e confirmação de senha devem corresponder',
	'ACCOUNT_DISPLAY_INVALID_CHARACTERS'	=> 'Nome de exibição só pode incluir caracteres alfanuméricos',
	'ACCOUNT_USERNAME_IN_USE'				=> 'Username %m1% já está em uso',
	'ACCOUNT_DISPLAYNAME_IN_USE'			=> 'Nome %m1% já está em uso',
	'ACCOUNT_EMAIL_IN_USE'					=> 'Email %m1% já está em uso',
	'ACCOUNT_LINK_ALREADY_SENT'				=> 'Um e-mail de ativação já foi enviado para esse endereço de e-mail na última %m1% hora (s)',
	'ACCOUNT_NEW_ACTIVATION_SENT'			=> 'Nós lhe enviamos um novo link de ativação, por favor, verifique seu e-mail',
	'ACCOUNT_SPECIFY_NEW_PASSWORD'			=> 'Por favor insira sua nova senha',	
	'ACCOUNT_SPECIFY_CONFIRM_PASSWORD'		=> 'Por favor, confirme sua nova senha',
	'ACCOUNT_NEW_PASSWORD_LENGTH'			=> 'Nova senha deve ter entre %m1% e %m2% caracteres de comprimento',	
	'ACCOUNT_PASSWORD_INVALID'				=> 'Senha atual não corresponde ao que temos no registro',	
	'ACCOUNT_DETAILS_UPDATED'				=> 'Detalhes da conta atualizados',
	'ACCOUNT_ACTIVATION_MESSAGE'			=> "Você terá que ativar sua conta antes que você possa fazer o login. Por favor, siga o link abaixo para ativar sua conta. \n\n %m1%activate-account.php?token=%m2%",							
	'ACCOUNT_ACTIVATION_COMPLETE'			=> 'Você ativou com sucesso a sua conta. Agora você pode acessar <a href="login.php">here</a>.',
	'ACCOUNT_REGISTRATION_COMPLETE_TYPE1'	=> 'Você registrou com sucesso. Agora você pode acessar <a href="login.php">here</a>.',
	'ACCOUNT_REGISTRATION_COMPLETE_TYPE2'	=> 'Você registrou com sucesso. Em breve, você receberá um e-mail de ativação. Você deve ativar sua conta antes de entrar.',
	'ACCOUNT_PASSWORD_NOTHING_TO_UPDATE'	=> 'Você não pode atualizar com a mesma senha',
	'ACCOUNT_PASSWORD_UPDATED'				=> 'Senha da conta atualizada',
	'ACCOUNT_EMAIL_UPDATED'					=> 'Conta de e-mail atualizada',
	'ACCOUNT_TOKEN_NOT_FOUND'				=> 'Token não existe / conta já está ativado',
	'ACCOUNT_USER_INVALID_CHARACTERS'		=> 'Username pode incluir apenas caracteres alfanuméricos',
	'ACCOUNT_DELETIONS_SUCCESSFUL'			=> 'Você foi removido com sucesso %m1% users',
	'ACCOUNT_MANUALLY_ACTIVATED'			=> '%m1%\'s conta foi ativada manualmente',
	'ACCOUNT_DISPLAYNAME_UPDATED'			=> 'Nome alterado para %m1%',
	'ACCOUNT_TITLE_UPDATED'					=> '%m1%\'s título alterado para %m2%',
	'ACCOUNT_PERMISSION_ADDED'				=> 'Acesso adicionado ao %m1% níveis de permissão',
	'ACCOUNT_PERMISSION_REMOVED'			=> 'Acesso removido de %m1% níveis de permissão',
	'ACCOUNT_INVALID_USERNAME'				=> 'Username inválido'
));

//Configuration
$lang = array_merge($lang,array(
	'CONFIG_NAME_CHAR_LIMIT'		=> 'Nome do site deve estar entre %m1% and %m2% caracteres de comprimento',
	'CONFIG_URL_CHAR_LIMIT'			=> 'URL deve estar entre %m1% and %m2% caracteres de comprimento',
	'CONFIG_EMAIL_CHAR_LIMIT'		=> 'Email deve estar entre %m1% and %m2% caracteres de comprimento',
	'CONFIG_ACTIVATION_TRUE_FALSE'	=> 'Ativação por E-mail deve ser `true` ou `false`',
	'CONFIG_ACTIVATION_RESEND_RANGE'=> 'Limite de ativação deve estar entre %m1% and %m2% horas',
	'CONFIG_LANGUAGE_CHAR_LIMIT'	=> 'Caminho linguagem deve estar entre %m1% and %m2% caracteres de comprimento',
	'CONFIG_LANGUAGE_INVALID'		=> 'Não há nenhum arquivo para a chave de linguagem `%m1%`',
	'CONFIG_TEMPLATE_CHAR_LIMIT'	=> 'Caminho do modelo deve estar entre %m1% and %m2% caracteres de comprimento',
	'CONFIG_TEMPLATE_INVALID'		=> 'Não há nenhum arquivo para a chave template `%m1%`',
	'CONFIG_EMAIL_INVALID'			=> 'O e-mail que você digitou não é válido',
	'CONFIG_INVALID_URL_END'		=> 'Por favor inclua o fim / de URL do seu site',
	'CONFIG_UPDATE_SUCCESSFUL'		=> 'A Configuração do seu site foi atualizada. Você pode precisar recarregar uma nova página para que todas as configurações entrem em vigor'
));

//Forgot Password
$lang = array_merge($lang,array(
	'FORGOTPASS_INVALID_TOKEN'		=> 'Seu token de ativação não é válido',
	'FORGOTPASS_NEW_PASS_EMAIL'		=> 'Uma nova senha lhe foi enviada',
	'FORGOTPASS_REQUEST_CANNED'		=> 'Solicitação de senha perdida cancelada',
	'FORGOTPASS_REQUEST_EXISTS'		=> 'Já existe uma solicitação de senha perdida nessa conta',
	'FORGOTPASS_REQUEST_SUCCESS'	=> 'Nós lhe enviamos, por email, instruções sobre como recuperar o acesso à sua conta'
));

//Mail
$lang = array_merge($lang,array(
	'MAIL_ERROR'					=> 'Erro fatal na tentativa de enviar email, contacte o administrador do servidor',
	'MAIL_TEMPLATE_BUILD_ERROR'		=> 'Erro na montagem do template de email',
	'MAIL_TEMPLATE_DIRECTORY_ERROR'	=> 'Não é possível abrir o diretório de modelos de email. Tente definir o diretório de e-mail para %m1%',
	'MAIL_TEMPLATE_FILE_EMPTY'		=> 'Arquivo de modelo está vazio ... nada para enviar'
));

//Miscellaneous
$lang = array_merge($lang,array(
	'CAPTCHA_FAIL'			=> 'Código de segurança falhou',
	'CONFIRM'				=> 'Confirmar',
	'DENY'					=> 'Negar',
	'SUCCESS'				=> 'Sucesso',
	'ERROR'					=> 'Erro',
	'NOTHING_TO_UPDATE'		=> 'Nada para atualizar',
	'SQL_ERROR'				=> 'Erro SQL Fatal',
	'FEATURE_DISABLED'		=> 'Este recurso está desativado',
	'PAGE_PRIVATE_TOGGLED'	=> 'Esta página é agora %m1%',
	'PAGE_ACCESS_REMOVED'	=> 'Acesso à página removido para %m1% Níveis de Permissão',
	'PAGE_ACCESS_ADDED'		=> 'Acesso à página adicionado para %m1% Níveis de Permissão'
));

//Permissions
$lang = array_merge($lang,array(
	'PERMISSION_CHAR_LIMIT'				=> 'Os nomes das permissões deve estar entre %m1% e %m2% caracteres de comprimento',
	'PERMISSION_NAME_IN_USE'			=> 'Nome da permissão %m1% já está em uso',
	'PERMISSION_DELETIONS_SUCCESSFUL'	=> 'Excluído com sucesso %m1% Níveis de Permissão',
	'PERMISSION_CREATION_SUCCESSFUL'	=> 'Criado com sucesso o nível de permissão `%m1%`',
	'PERMISSION_NAME_UPDATE'			=> 'Nome do nível de permissão alterado para `%m1%`',
	'PERMISSION_REMOVE_PAGES'			=> 'Removida com sucesso o acesso a %m1% página(s)',
	'PERMISSION_ADD_PAGES'				=> 'Acesso adicionado com sucesso à %m1% página(s)',
	'PERMISSION_REMOVE_USERS'			=> 'Usuário %m1% removido com sucesso',
	'PERMISSION_ADD_USERS'				=> 'Usuário %m1% adicionado com sucesso',
	'CANNOT_DELETE_NEWUSERS'			=> 'Você não pode excluir o grupo padrão "novo usuário"',
	'CANNOT_DELETE_ADMIN'				=> 'Você não pode excluir o grupo padrão "admin"'
));
?>