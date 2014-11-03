<?php
return array (
  '<strong>Authentication</strong> - LDAP' => '<strong>Идентификация</strong> - LDAP',
  'A TLS/SSL is strongly favored in production environments to prevent passwords from be transmitted in clear text.' => '',
  'Basic' => 'Основная',
  'Defines the filter to apply, when login is attempted. %uid replaces the username in the login action. Example: &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;' => '',
  'LDAP' => 'LDAP',
  'LDAP Attribute for Username. Example: &quotuid&quot; or &quot;sAMAccountName&quot;' => 'LDAP Атрибут для Логина. Пример: & quotuid & Quot; или & Quot; sAMAccountName&quot;',
  'Limit access to users meeting this criteria. Example: &quot(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;' => 'Ограничить доступ к пользователям с указанными критериями. Example: &quot(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;',
  'Save' => 'Сохранить',
  'Status: Error! (Message: {message})' => 'Статус: Ошибка! (Текст ошибки: {message})',
  'Status: OK! ({userCount} Users)' => 'Статус: OK! ({userCount} Пользователей)',
  'The default base DN used for searching for accounts.' => 'База по умолчанию DN используется для поиска аккаунтов.',
  'The default credentials password (used only with username above).' => '',
  'The default credentials username. Some servers require that this be in DN form. This must be given in DN form if the LDAP server requires a DN to bind and binding should be possible with simple usernames.' => '',
);
