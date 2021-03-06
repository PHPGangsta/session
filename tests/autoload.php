<?php // @codeCoverageIgnoreStart
spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'spriebsch\\session\\tests\\abstractsessiontest' => '/AbstractSessionTest.php',
            'spriebsch\\session\\tests\\phpsessionbackendtest' => '/PhpSessionBackendTest.php',
            'spriebsch\\session\\tests\\stubs\\concretesession' => '/stubs/ConcreteSession.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
