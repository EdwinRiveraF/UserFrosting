<?php
    require_once "../userfrosting/config-userfrosting.php";
    

    use UserFrosting as UF;
   
    // Front page
    $app->get('/', function () use ($app) {
        $controller = new UF\AccountController($app);
        $controller->pageHome();
    });

    // Dashboard
    $app->get('/account(/)', function () use ($app) {
        // Forward to the user's landing page (if logged in), otherwise take them to the login page
        
        $controller = new UF\UserController($app);
        $controller->pageDashboard();
    });
    
    // User account pages
    $app->get('/account/zerg', function () use ($app) {    
        $controller = new UF\UserController($app);
        $controller->pageZerg();
    });
    
    // Alert stream
    $app->get('/alerts', function () use ($app) {
        $controller = new UF\BaseController($app);
        $controller->alerts();
    });
    
    // JS Config
    $app->get('/js/config.js', function () use ($app) {
        $controller = new UF\BaseController($app);
        $controller->configJS();
    });
    
    // Theme CSS
    $app->get('/css/theme.css', function () use ($app) {
        $controller = new UF\BaseController($app);
        $controller->themeCSS();
    });
        
    
    // Account management pages
    $app->get('/account/:action', function ($action) use ($app) {    
        $controller = new UF\AccountController($app);
    
        switch ($action) {
            case "login":               return $controller->pageLogin();
            case "logout":              return $controller->logout();        
            case "register":            return $controller->pageRegister();
            case "resend-activation":   return $controller->pageResendActivation();
            case "forgot-password":     return $controller->pageForgotPassword($app->request()->get('token'));    
            default:                    return $controller->page404();   
        }
    });

    $app->post('/account/:action', function ($action) use ($app) {    
        $controller = new UF\AccountController($app);
    
        switch ($action) {
            case "login":               return $controller->login();     
            case "register":            return $controller->pageRegister();
            case "resend-activation":   return $controller->pageResendActivation();
            case "forgot-password":     return $controller->pageForgotPassword($app->request()->get('token'));    
            default:                    return $controller->page404();   
        }
    });    
    
    // Not found page (404)
    $app->notFound(function () use ($app) {
        $controller = new UF\BaseController($app);
        $controller->page404();
    });

    
    // Slim info page (debug mode only)
    $app->get('/sliminfo', function () use ($app) {
        echo "<pre>";
        print_r($app->environment());
        echo "</pre>";
    });

    // PHP info page (debug mode only)
    $app->get('/phpinfo', function () use ($app) {
        echo "<pre>";
        print_r(phpinfo());
        echo "</pre>";
    });
    
    // Query logs (debug mode only)
    $app->get('/queries', function () use ($app) {    
        $logs = R::getDatabaseAdapter()
            ->getDatabase()
            ->getLogger();

        print_r( $logs);
    });
    
    
    $app->get('/test', function () use ($app){
        // Check permissions to view this page
        if (!UF\Authorization::checkAccess("uri_test", [])){
            $app->alerts->addMessage("danger", "Sorry, you do not have access to that page.");
            $app->redirect($app->userfrosting['uri']['public'] . "/account");
        } else {
            echo "Passed action uri_test";
        }
    });
    
    $app->get('/test/auth', function() use ($app){
        $params = [
            "user" => [
                "id" => 1
            ],
            "post" => [
                "id" => 7
            ]
        ];
        
        $conditions = "(equals(self.id,user.id)||hasPost(self.id,post.id))&&subset(post, [\"id\", \"title\", \"content\", \"subject\", 3])";
        
        $ace = new UF\AccessConditionExpression($app);
        $result = $ace->evaluateCondition($conditions, $params);
        
        if ($result){
            echo "Passed $conditions";
        } else {
            echo "Failed $conditions";
        }
    });
    
    $app->run();
?>
