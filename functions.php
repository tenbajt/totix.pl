<?php

namespace Tenbajt;

spl_autoload_register( function( $class_name ) {
  // Check if class belongs to our namespace.
  if ( strpos( $class_name, __NAMESPACE__ ) === false ) return;
  
  $class_name_parts = explode( '\\', $class_name );

  require_once __DIR__ . '/' . strtolower( $class_name_parts[1] ) . '/' . $class_name_parts[2] . '.php';
});

?>