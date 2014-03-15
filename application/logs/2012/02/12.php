<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-12 09:09:30 --- ERROR: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-02-12 09:09:30 --- STRACE: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename('welcome')
#1 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct('welcome', NULL)
#2 D:\wamp\www\mint\application\classes\controller\welcome.php(7): Kohana_View::factory('welcome')
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-12 09:13:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-12 09:13:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 09:14:41 --- ERROR: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-02-12 09:14:41 --- STRACE: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename('home')
#1 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct('home', NULL)
#2 D:\wamp\www\mint\application\classes\controller\welcome.php(7): Kohana_View::factory('home')
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-12 09:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-12 09:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 09:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-12 09:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 09:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-12 09:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 09:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-12 09:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 09:17:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-12 09:17:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 09:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-12 09:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 09:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-12 09:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 09:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-12 09:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 09:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-12 09:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 09:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-12 09:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 09:42:24 --- ERROR: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\classes\controller\home.php [ 9 ]
2012-02-12 09:42:24 --- STRACE: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\classes\controller\home.php [ 9 ]
--
#0 D:\wamp\www\mint\application\classes\controller\home.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 09:42:43 --- ERROR: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\classes\controller\home.php [ 9 ]
2012-02-12 09:42:43 --- STRACE: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\classes\controller\home.php [ 9 ]
--
#0 D:\wamp\www\mint\application\classes\controller\home.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 09:44:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\home.php [ 22 ]
2012-02-12 09:44:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View), Array)
#5 D:\wamp\www\mint\application\classes\controller\home.php(10): Kohana_Response->body()
#6 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#7 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-12 09:45:08 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Mint - assumed 'Mint' ~ APPPATH\classes\controller\home.php [ 9 ]
2012-02-12 09:45:08 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Mint - assumed 'Mint' ~ APPPATH\classes\controller\home.php [ 9 ]
--
#0 D:\wamp\www\mint\application\classes\controller\home.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 09:46:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\home.php [ 22 ]
2012-02-12 09:46:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View), Array)
#5 D:\wamp\www\mint\application\classes\controller\home.php(10): Kohana_Response->body()
#6 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#7 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-12 09:48:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\home.php [ 22 ]
2012-02-12 09:48:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View), Array)
#5 D:\wamp\www\mint\application\classes\controller\home.php(10): Kohana_Response->body()
#6 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#7 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-12 09:49:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\home.php [ 22 ]
2012-02-12 09:49:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View), Array)
#5 D:\wamp\www\mint\application\classes\controller\home.php(10): Kohana_Response->body()
#6 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#7 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-12 09:49:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\home.php [ 22 ]
2012-02-12 09:49:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View), Array)
#5 D:\wamp\www\mint\application\classes\controller\home.php(10): Kohana_Response->body()
#6 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#7 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-12 09:52:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant home - assumed 'home' ~ APPPATH\classes\controller\home.php [ 11 ]
2012-02-12 09:52:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant home - assumed 'home' ~ APPPATH\classes\controller\home.php [ 11 ]
--
#0 D:\wamp\www\mint\application\classes\controller\home.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 09:55:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\home.php [ 22 ]
2012-02-12 09:55:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 D:\wamp\www\mint\application\classes\controller\home.php(13): Kohana_Response->body()
#6 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#7 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-12 10:00:44 --- ERROR: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
2012-02-12 10:00:44 --- STRACE: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 D:\wamp\www\mint\application\classes\controller\home.php(13): Kohana_Response->body()
#6 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#7 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-12 10:02:55 --- ERROR: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
2012-02-12 10:02:55 --- STRACE: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\core.php(631): Kohana_View->__toString('views', Object(View))
#5 D:\wamp\www\mint\system\classes\kohana\view.php(250): Kohana_Core::find_file(Object(View))
#6 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename(Object(View), NULL)
#7 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct(Object(View))
#8 D:\wamp\www\mint\application\classes\controller\home.php(12): Kohana_View::factory()
#9 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#10 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#14 {main}
2012-02-12 10:03:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
2012-02-12 10:03:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\core.php(631): Kohana_View->__toString('views', Object(View))
#5 D:\wamp\www\mint\system\classes\kohana\view.php(250): Kohana_Core::find_file(Object(View))
#6 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename(Object(View), NULL)
#7 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct(Object(View))
#8 D:\wamp\www\mint\application\classes\controller\home.php(12): Kohana_View::factory()
#9 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#10 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#14 {main}
2012-02-12 10:03:27 --- ERROR: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
2012-02-12 10:03:27 --- STRACE: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\core.php(631): Kohana_View->__toString('views', Object(View))
#5 D:\wamp\www\mint\system\classes\kohana\view.php(250): Kohana_Core::find_file(Object(View))
#6 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename(Object(View), NULL)
#7 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct(Object(View))
#8 D:\wamp\www\mint\application\classes\controller\home.php(12): Kohana_View::factory()
#9 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#10 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#14 {main}
2012-02-12 10:04:21 --- ERROR: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
2012-02-12 10:04:21 --- STRACE: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 D:\wamp\www\mint\application\classes\controller\home.php(13): Kohana_Response->body()
#6 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#7 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-12 10:05:04 --- ERROR: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
2012-02-12 10:05:04 --- STRACE: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 D:\wamp\www\mint\application\classes\controller\home.php(13): Kohana_Response->body()
#6 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#7 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-12 10:05:26 --- ERROR: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\classes\controller\home.php [ 12 ]
2012-02-12 10:05:26 --- STRACE: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\classes\controller\home.php [ 12 ]
--
#0 D:\wamp\www\mint\application\classes\controller\home.php(12): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 10:06:04 --- ERROR: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
2012-02-12 10:06:04 --- STRACE: ErrorException [ 8 ]: Use of undefined constant site_name - assumed 'site_name' ~ APPPATH\views\home.php [ 22 ]
--
#0 D:\wamp\www\mint\application\views\home.php(22): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 D:\wamp\www\mint\application\classes\controller\home.php(13): Kohana_Response->body()
#6 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#7 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-12 10:08:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\classes\controller\home.php [ 12 ]
2012-02-12 10:08:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\classes\controller\home.php [ 12 ]
--
#0 D:\wamp\www\mint\application\classes\controller\home.php(12): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 10:08:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\classes\controller\home.php [ 12 ]
2012-02-12 10:08:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\classes\controller\home.php [ 12 ]
--
#0 D:\wamp\www\mint\application\classes\controller\home.php(12): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 10:09:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\classes\controller\home.php [ 12 ]
2012-02-12 10:09:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\classes\controller\home.php [ 12 ]
--
#0 D:\wamp\www\mint\application\classes\controller\home.php(12): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 10:10:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\classes\controller\home.php [ 13 ]
2012-02-12 10:10:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\classes\controller\home.php [ 13 ]
--
#0 D:\wamp\www\mint\application\classes\controller\home.php(13): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 10:12:19 --- ERROR: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\controller\home.php [ 14 ]
2012-02-12 10:12:19 --- STRACE: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\controller\home.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 10:19:27 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\home.php [ 18 ]
2012-02-12 10:19:27 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\home.php [ 18 ]
--
#0 D:\wamp\www\mint\application\classes\controller\home.php(18): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 10:20:51 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-02-12 10:20:51 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 D:\wamp\www\mint\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-12 10:22:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\template.php [ 2 ]
2012-02-12 10:22:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\template.php [ 2 ]
--
#0 D:\wamp\www\mint\application\views\template.php(2): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Home))
#5 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#9 {main}
2012-02-12 10:34:10 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\wamp\www\mint\application\classes\controller\home.php on line 13 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-02-12 10:34:10 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\wamp\www\mint\application\classes\controller\home.php on line 13 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\view.php(28): Kohana_Core::error_handler('client_pages/he...', 'client_pages/co...', 'client_pages/fo...')
#1 D:\wamp\www\mint\application\classes\controller\home.php(13): Kohana_View::factory()
#2 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#3 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-12 11:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/firefox-gray.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-12 11:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/firefox-gray.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 11:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-12 11:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 11:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/search.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-12 11:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/image.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-12 11:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/search.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 11:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/image.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 11:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-12 11:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/gravatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-12 11:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/gravatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 11:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 11:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-12 11:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 11:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/search.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-12 11:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/search.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 11:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/gravatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-12 11:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/gravatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 11:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/image.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-12 11:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/image.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 11:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-12 11:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/thumb.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 23:10:06 --- ERROR: View_Exception [ 0 ]: The requested view default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-02-12 23:10:06 --- STRACE: View_Exception [ 0 ]: The requested view default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename('default')
#1 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct('default', NULL)
#2 D:\wamp\www\mint\system\classes\kohana\controller\template.php(33): Kohana_View::factory('default')
#3 [internal function]: Kohana_Controller_Template->before()
#4 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-12 23:10:33 --- ERROR: View_Exception [ 0 ]: The requested view default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-02-12 23:10:33 --- STRACE: View_Exception [ 0 ]: The requested view default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename('default')
#1 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct('default', NULL)
#2 D:\wamp\www\mint\system\classes\kohana\controller\template.php(33): Kohana_View::factory('default')
#3 [internal function]: Kohana_Controller_Template->before()
#4 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#8 {main}