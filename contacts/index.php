<?php

// Importa o arquivo de configuração:
require($_SERVER['DOCUMENT_ROOT'] . '/inc/_config.php');

/***********************************************
 * Todo o código PHP desta página começa aqui! *
 ***********************************************/

// Define o título da página:
$page_title = 'Faça contato';

/**************************************************************
 * Define o conteúdo "visual" da página:                      *
 * Observe que temos, por padrão, um design com duas colunas. *
 * A coluna "aside", porém, será opcional para cada página.   *
 **************************************************************/
$page_content = <<<HTML

<article>
    <h2>{$page_title}</h2>
      
    <a href="LINK">Instagram</a>
    <a href="LINK">Facebook</a>
    <a href="LINK">WhatsApp</a>
</article>

HTML;

/************************************************
 * Todo o código PHP desta página termina aqui! *
 ************************************************/

// Importa template da página:
require($_SERVER['DOCUMENT_ROOT'] . '/inc/_template.php');
?>