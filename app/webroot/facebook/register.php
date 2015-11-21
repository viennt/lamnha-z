<?php
session_start();
require_once 'autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;

FacebookSession::setDefaultApplication( '1074978269188474','9921058d3b6ecc0f188096ec845583de' );
$helper = new FacebookRedirectLoginHelper('http://www.lamnha-z.com/facebook/login.php' );

try {
    $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
    // When Facebook returns an error
} catch(\Exception $ex) {
    // When validation fails or other local issues
}

if ($session) {

    $request = new FacebookRequest( $session, 'GET', '/me' );
    $response = $request->execute();

    $graphObject = $response->getGraphObject();
    $fbid = $graphObject->getProperty('id');
    $fbname = $graphObject->getProperty('name');
    $fbemail = $graphObject->getProperty('email');

    /* ---- header location after session ----*/
    header("Location: ../users/loginfacebook/{$fbid}/{$fbname}/{$fbemail}");
} else {
    $loginUrl = $helper->getLoginUrl();
    header("Location: ".$loginUrl);
}
?>