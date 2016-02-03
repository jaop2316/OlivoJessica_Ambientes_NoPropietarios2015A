<?php
session_start();
define('DOCUMENT_ROOT_RELATIVA', '/examen2/');
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once( 'utils.php' );
if( !preg_match( "/" . urlencode(DOCUMENT_ROOT_RELATIVA) . 'index.php[\?\w*]?/', urlencode($_SERVER['REQUEST_URI']))  &&
 $_SERVER['REQUEST_URI'] != DOCUMENT_ROOT_RELATIVA . 'registro.php' ){
  if( !isset( $_SESSION['email'] ) ) {
    http_redirect( 'index.php' );
  }
}
