<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-02 19:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-02 19:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-02 19:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-02 19:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-02 19:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-02 19:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-02 19:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 19:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-02 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-02 19:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-02 19:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-02 19:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 19:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 20:30:31 --- ERROR: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-02-02 20:30:31 --- STRACE: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename('welcome')
#1 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct('welcome', NULL)
#2 D:\wamp\www\mint\application\classes\controller\welcome.php(8): Kohana_View::factory('welcome')
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-02 20:38:48 --- ERROR: View_Exception [ 0 ]: The requested view welcome.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-02-02 20:38:48 --- STRACE: View_Exception [ 0 ]: The requested view welcome.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename('welcome.php')
#1 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct('welcome.php', NULL)
#2 D:\wamp\www\mint\application\classes\controller\welcome.php(8): Kohana_View::factory('welcome.php')
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-02 20:39:01 --- ERROR: View_Exception [ 0 ]: The requested view welcom could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-02-02 20:39:01 --- STRACE: View_Exception [ 0 ]: The requested view welcom could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename('welcom')
#1 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct('welcom', NULL)
#2 D:\wamp\www\mint\application\classes\controller\welcome.php(8): Kohana_View::factory('welcom')
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-02 20:39:10 --- ERROR: View_Exception [ 0 ]: The requested view welcome.phpS could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-02-02 20:39:10 --- STRACE: View_Exception [ 0 ]: The requested view welcome.phpS could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename('welcome.phpS')
#1 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct('welcome.phpS', NULL)
#2 D:\wamp\www\mint\application\classes\controller\welcome.php(8): Kohana_View::factory('welcome.phpS')
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-02 20:39:18 --- ERROR: View_Exception [ 0 ]: The requested view welcome.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-02-02 20:39:18 --- STRACE: View_Exception [ 0 ]: The requested view welcome.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename('welcome.php')
#1 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct('welcome.php', NULL)
#2 D:\wamp\www\mint\application\classes\controller\welcome.php(8): Kohana_View::factory('welcome.php')
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-02 21:11:57 --- ERROR: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-02-02 21:11:57 --- STRACE: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\mint\system\classes\kohana\view.php(137): Kohana_View->set_filename('welcome')
#1 D:\wamp\www\mint\system\classes\kohana\view.php(30): Kohana_View->__construct('welcome', NULL)
#2 D:\wamp\www\mint\application\classes\controller\welcome.php(8): Kohana_View::factory('welcome')
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-02 21:12:51 --- ERROR: ErrorException [ 1 ]: Class 'mint' not found ~ APPPATH\views\welcome.php [ 9 ]
2012-02-02 21:12:51 --- STRACE: ErrorException [ 1 ]: Class 'mint' not found ~ APPPATH\views\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\wamp\www\min...', Array)
#1 {main}
2012-02-02 21:13:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
2012-02-02 21:13:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\wamp\www\min...', Array)
#1 {main}
2012-02-02 21:14:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
2012-02-02 21:14:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\wamp\www\min...', Array)
#1 {main}
2012-02-02 21:14:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
2012-02-02 21:14:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\wamp\www\min...', Array)
#1 {main}
2012-02-02 21:20:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
2012-02-02 21:20:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\wamp\www\min...', Array)
#1 {main}
2012-02-02 21:23:24 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-02-02 21:23:24 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 D:\wamp\www\mint\application\classes\controller\welcome.php(7): Kohana_Core::error_handler()
#1 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#2 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-02 21:25:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
2012-02-02 21:25:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\wamp\www\min...', Array)
#1 {main}
2012-02-02 21:26:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
2012-02-02 21:26:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\wamp\www\min...', Array)
#1 {main}
2012-02-02 21:26:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
2012-02-02 21:26:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\wamp\www\min...', Array)
#1 {main}
2012-02-02 21:27:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
2012-02-02 21:27:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\wamp\www\min...', Array)
#1 {main}
2012-02-02 21:28:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_config ~ APPPATH\views\welcome.php [ 10 ]
2012-02-02 21:28:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_config ~ APPPATH\views\welcome.php [ 10 ]
--
#0 D:\wamp\www\mint\application\views\welcome.php(10): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 D:\wamp\www\mint\application\classes\controller\welcome.php(7): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#7 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 21:30:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-02-02 21:30:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-02 21:30:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-02-02 21:30:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-02 21:38:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_confg ~ APPPATH\views\welcome.php [ 4 ]
2012-02-02 21:38:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_confg ~ APPPATH\views\welcome.php [ 4 ]
--
#0 D:\wamp\www\mint\application\views\welcome.php(4): Kohana_Core::error_handler('D:\wamp\www\min...', Array)
#1 D:\wamp\www\mint\system\classes\kohana\view.php(61): include('D:\wamp\www\min...')
#2 D:\wamp\www\mint\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\wamp\www\mint\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\mint\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 D:\wamp\www\mint\application\classes\controller\welcome.php(12): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#7 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 21:41:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_config ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-02-02 21:41:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_config ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 D:\wamp\www\mint\application\classes\controller\welcome.php(7): Kohana_Core::error_handler()
#1 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#2 D:\wamp\www\mint\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\wamp\www\mint\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\mint\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\wamp\www\mint\index.php(109): Kohana_Request->execute()
#6 {main}