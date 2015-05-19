<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AccessCondition' => $baseDir . '/auth/accesscondition.php',
    'Fortress\\ClientSideValidator' => $vendorDir . '/alexweissman/fortress/fortress/ClientSideValidator.php',
    'Fortress\\DataSanitizer' => $vendorDir . '/alexweissman/fortress/fortress/DataSanitizer.php',
    'Fortress\\DataSanitizerInterface' => $vendorDir . '/alexweissman/fortress/fortress/DataSanitizer.php',
    'Fortress\\HTTPRequestFortress' => $vendorDir . '/alexweissman/fortress/fortress/HTTPRequestFortress.php',
    'Fortress\\MessageStream' => $vendorDir . '/alexweissman/fortress/fortress/MessageStream.php',
    'Fortress\\MessageTranslator' => $vendorDir . '/alexweissman/fortress/fortress/MessageTranslator.php',
    'Fortress\\RequestSchema' => $vendorDir . '/alexweissman/fortress/fortress/RequestSchema.php',
    'Fortress\\ServerSideValidator' => $vendorDir . '/alexweissman/fortress/fortress/ServerSideValidator.php',
    'Fortress\\ServerSideValidatorInterface' => $vendorDir . '/alexweissman/fortress/fortress/ServerSideValidator.php',
    'ParserNodeFunctionEvaluator' => $baseDir . '/auth/ParserNodeFunctionEvaluator.php',
    'Slim\\Extras\\Middleware\\CsrfGuard' => $baseDir . '/auth/csrfguard.php',
    'UserFrosting\\AccessConditionExpression' => $baseDir . '/auth/authorization.php',
    'UserFrosting\\AccountController' => $baseDir . '/controllers/accountcontroller.php',
    'UserFrosting\\Authentication' => $baseDir . '/auth/authentication.php',
    'UserFrosting\\Authorization' => $baseDir . '/auth/authorization.php',
    'UserFrosting\\BaseController' => $baseDir . '/controllers/controller.php',
    'UserFrosting\\DatabaseInterface' => $baseDir . '/models/DatabaseInterface.php',
    'UserFrosting\\DatabaseObjectInterface' => $baseDir . '/models/DatabaseInterface.php',
    'UserFrosting\\MySqlAuthLoader' => $baseDir . '/models/mysql/MySqlAuthLoader.php',
    'UserFrosting\\MySqlDatabase' => $baseDir . '/models/mysql/MySqlDatabase.php',
    'UserFrosting\\MySqlDatabaseObject' => $baseDir . '/models/mysql/MySqlDatabaseObject.php',
    'UserFrosting\\MySqlGroup' => $baseDir . '/models/mysql/MySqlGroup.php',
    'UserFrosting\\MySqlUser' => $baseDir . '/models/mysql/MySqlUser.php',
    'UserFrosting\\MySqlUserLoader' => $baseDir . '/models/mysql/MySqlUserLoader.php',
    'UserFrosting\\PageSchema' => $baseDir . '/controllers/pageschema.php',
    'UserFrosting\\TableInfoGroup' => $baseDir . '/models/TableInfo.php',
    'UserFrosting\\TableInfoUser' => $baseDir . '/models/TableInfo.php',
    'UserFrosting\\UserController' => $baseDir . '/controllers/usercontroller.php',
    'UserFrosting\\UserLoaderInterface' => $baseDir . '/models/DatabaseInterface.php',
    'UserFrosting\\UserObjectInterface' => $baseDir . '/models/DatabaseInterface.php',
);
