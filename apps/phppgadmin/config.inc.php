<?php
$conf['servers'][0]['desc'] = 'PostgreSQL';
$conf['servers'][0]['host'] = 'postgresql';
$conf['servers'][0]['port'] = 5432;
$conf['servers'][0]['sslmode'] = 'allow';
$conf['servers'][0]['defaultdb'] = 'postgres';
$conf['servers'][0]['pg_dumpall_path'] = '/usr/bin/pg_dumpall';
$conf['servers'][0]['pg_dump_path'] = '/usr/bin/pg_dump';
$conf['ajax_refresh'] = 3;
$conf['autocomplete'] = 'default on';
$conf['extra_login_security'] = true;
$conf['help_base'] = 'http://www.postgresql.org/docs/%s/interactive/';
$conf['left_width'] = 200;
$conf['max_chars'] = 50;
$conf['max_rows'] = 30;
$conf['min_password_length'] = 1;
$conf['owned_only'] = false;
$conf['plugins'] = array();
$conf['show_advanced'] = false;
$conf['show_comments'] = true;
$conf['show_oids'] = false;
$conf['show_system'] = false;
$conf['theme'] = 'default';
$conf['use_xhtml_strict'] = false;
$conf['version'] = 19;
?>
