<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2016-01-06 02:13:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 02:16:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 02:16:08 --> Fatal Error - Call to undefined function jp\boi\kenshuu\dao\NOW() in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 28
WARNING - 2016-01-06 02:17:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 02:17:46 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':17:46.000000Z , "long" , 1 , 2016-01-06T01:17:46.000000Z , "long" , 1 , "" , ""' at line 1 with query: "INSERT INTO members(namefull , email , point , making , objectmaking , typemaking , modifying , objectmodifying , typemodifying , removing , objectremoving , typeremoving , removed) VALUE ("long" , "long@boi.jp" , 100 , 2016-01-06T01:17:46.000000Z , "long" , 1 , 2016-01-06T01:17:46.000000Z , "long" , 1 , "" , "" , "" , 0 );" in C:\xampp\htdocs\kenshuu\fuel\core\classes\database\pdo\connection.php on line 237
WARNING - 2016-01-06 02:24:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 03:12:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 04:24:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 04:24:52 --> Compile Error - Declaration of jp\boi\kenshuu\dao\MemberDao::runByAspect() must be compatible with jp\boi\kenshuu\dao\Dao::runByAspect(array $args) in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 14
WARNING - 2016-01-06 04:27:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 04:27:04 --> Compile Error - Declaration of jp\boi\kenshuu\dao\MemberDao::runByAspect() must be compatible with jp\boi\kenshuu\dao\Dao::runByAspect(array $args) in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 14
WARNING - 2016-01-06 04:28:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 04:28:02 --> Fatal Error - Class 'jp\boi\kenshuu\aspect\Aspect' not found in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 19
WARNING - 2016-01-06 04:29:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 04:29:14 --> Fatal Error - Class 'jp\boi\kenshuu\aspect\InsertInterceptor' not found in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 21
WARNING - 2016-01-06 04:30:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 04:30:15 --> Compile Error - main(): Failed opening required 'C:\xampp\htdocs\kenshuu\fuel\app\classes\aspect/../entity/Contact.php' (include_path='.;C:\xampp\php\PEAR') in C:\xampp\htdocs\kenshuu\fuel\app\classes\aspect\InsertInterceptor.php on line 5
WARNING - 2016-01-06 04:31:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 04:31:23 --> Runtime Recoverable error - Argument 1 passed to jp\boi\kenshuu\dao\MemberDao::runByAspect() must be of the type array, object given, called in C:\xampp\htdocs\kenshuu\fuel\app\classes\controller\member.php on line 35 and defined in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 25
WARNING - 2016-01-06 04:33:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 04:33:09 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 with query: "INSERT INTO members(namefull , email , point , making , objectmaking , typemaking , modifying , objectmodifying , typemodifying , removing , objectremoving , typeremoving , removed) VALUE ("kato" , "kato@kato.com" , 100 , NOW() , "InsertInterceptor.invoke()" , 3 , NOW() , "InsertInterceptor.invoke()" , 3 , NULL , NULL , NULL ,  );" in C:\xampp\htdocs\kenshuu\fuel\core\classes\database\pdo\connection.php on line 237
WARNING - 2016-01-06 04:35:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 04:35:41 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':35:41.000000Z , "InsertInterceptor.invoke()" , 3 , 2016-01-06T03:35:41.000000Z ' at line 1 with query: "INSERT INTO members(namefull , email , point , making , objectmaking , typemaking , modifying , objectmodifying , typemodifying , removing , objectremoving , typeremoving , removed) VALUE ("kato" , "kato@kato.com" , 100 , 2016-01-06T03:35:41.000000Z , "InsertInterceptor.invoke()" , 3 , 2016-01-06T03:35:41.000000Z , "InsertInterceptor.invoke()" , 3 , NULL , NULL , NULL ,  );" in C:\xampp\htdocs\kenshuu\fuel\core\classes\database\pdo\connection.php on line 237
WARNING - 2016-01-06 04:36:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 04:36:10 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '03:36:10 , "InsertInterceptor.invoke()" , 3 , 2016-01-06 03:36:10 , "InsertInter' at line 1 with query: "INSERT INTO members(namefull , email , point , making , objectmaking , typemaking , modifying , objectmodifying , typemodifying , removing , objectremoving , typeremoving , removed) VALUE ("kato" , "kato@kato.com" , 100 , 2016-01-06 03:36:10 , "InsertInterceptor.invoke()" , 3 , 2016-01-06 03:36:10 , "InsertInterceptor.invoke()" , 3 , NULL , NULL , NULL ,  );" in C:\xampp\htdocs\kenshuu\fuel\core\classes\database\pdo\connection.php on line 237
WARNING - 2016-01-06 05:53:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:02:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 06:02:29 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '05:02:29 , "InsertInterceptor.invoke()" , 3 , 2016-01-06 05:02:29 , "InsertInter' at line 1 with query: "INSERT INTO members(namefull , email , point , making , objectmaking , typemaking , modifying , objectmodifying , typemodifying , removing , objectremoving , typeremoving , removed) VALUE ("1" , "1" , 100 , 2016-01-06 05:02:29 , "InsertInterceptor.invoke()" , 3 , 2016-01-06 05:02:29 , "InsertInterceptor.invoke()" , 3 , NULL , NULL , NULL ,  );" in C:\xampp\htdocs\kenshuu\fuel\core\classes\database\pdo\connection.php on line 237
WARNING - 2016-01-06 06:02:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:03:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:03:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 06:03:03 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '05:03:03 , "InsertInterceptor.invoke()" , 3 , 2016-01-06 05:03:03 , "InsertInter' at line 1 with query: "INSERT INTO members(namefull , email , point , making , objectmaking , typemaking , modifying , objectmodifying , typemodifying , removing , objectremoving , typeremoving , removed) VALUE ("1" , "1" , 100 , 2016-01-06 05:03:03 , "InsertInterceptor.invoke()" , 3 , 2016-01-06 05:03:03 , "InsertInterceptor.invoke()" , 3 , NULL , NULL , NULL , false );" in C:\xampp\htdocs\kenshuu\fuel\core\classes\database\pdo\connection.php on line 237
WARNING - 2016-01-06 06:03:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:04:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:04:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:04:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:05:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:05:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:05:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:16:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:16:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:16:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:16:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:25:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:25:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:28:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:28:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:28:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:31:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:31:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:32:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:32:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:34:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:34:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:34:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 06:34:21 --> Error - Database results are read-only in C:\xampp\htdocs\kenshuu\fuel\core\classes\database\result.php on line 272
WARNING - 2016-01-06 06:34:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:35:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:35:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:36:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:36:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:36:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 06:36:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:35:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 07:35:32 --> Compile Error - main(): Failed opening required 'C:\xampp\htdocs\kenshuu\fuel\app\classes\dao/../aspect/InsertInterceptor' (include_path='.;C:\xampp\php\PEAR') in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 5
WARNING - 2016-01-06 07:35:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:36:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 07:36:40 --> Compile Error - main(): Failed opening required 'C:\xampp\htdocs\kenshuu\fuel\app\classes\dao/../aspect/InsertInterceptor' (include_path='.;C:\xampp\php\PEAR') in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 5
WARNING - 2016-01-06 07:36:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:36:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 07:36:43 --> Compile Error - main(): Failed opening required 'C:\xampp\htdocs\kenshuu\fuel\app\classes\dao/../aspect/InsertInterceptor' (include_path='.;C:\xampp\php\PEAR') in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 5
WARNING - 2016-01-06 07:36:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:36:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 07:36:49 --> Compile Error - main(): Failed opening required 'C:\xampp\htdocs\kenshuu\fuel\app\classes\dao/../aspect/InsertInterceptor' (include_path='.;C:\xampp\php\PEAR') in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 5
WARNING - 2016-01-06 07:36:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:36:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 07:36:52 --> Compile Error - main(): Failed opening required 'C:\xampp\htdocs\kenshuu\fuel\app\classes\dao/../aspect/InsertInterceptor' (include_path='.;C:\xampp\php\PEAR') in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 5
WARNING - 2016-01-06 07:36:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:38:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:38:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:39:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 07:39:03 --> Compile Error - main(): Failed opening required 'C:\xampp\htdocs\kenshuu\fuel\app\classes\dao/../aspect/InsertInterceptor' (include_path='.;C:\xampp\php\PEAR') in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 5
WARNING - 2016-01-06 07:39:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:39:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 07:39:23 --> Compile Error - main(): Failed opening required 'C:\xampp\htdocs\kenshuu\fuel\app\classes\dao/../aspect/InsertInterceptor' (include_path='.;C:\xampp\php\PEAR') in C:\xampp\htdocs\kenshuu\fuel\app\classes\dao\MemberDao.php on line 5
WARNING - 2016-01-06 07:39:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:41:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:41:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:41:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:41:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:41:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 07:41:27 --> Notice - Undefined index: namefull in C:\xampp\htdocs\kenshuu\fuel\app\classes\controller\member.php on line 24
WARNING - 2016-01-06 07:41:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:44:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:44:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:44:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:44:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:44:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:44:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:44:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:44:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:44:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:44:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:44:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:46:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 07:46:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:13:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:13:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:14:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:14:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:34:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 08:34:19 --> Fatal Error - Class 'jp\boi\kenshuu\validator\MemberValidator' not found in C:\xampp\htdocs\kenshuu\fuel\app\classes\controller\member.php on line 24
WARNING - 2016-01-06 08:34:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:35:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:36:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:42:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:42:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:42:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 08:42:41 --> Undefined property: Fuel\Core\Validation::$error - Controller.action_register() Error :
WARNING - 2016-01-06 08:42:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:43:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:43:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:43:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 08:43:28 --> Undefined property: Fuel\Core\Validation::$error - Controller.action_register() Error :
WARNING - 2016-01-06 08:43:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:49:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:49:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 08:49:49 --> Error - Object class "Fuel\Core\Validation" could not be converted to string or sanitized as ArrayAccess. Whitelist it in security.whitelisted_classes in app/config/config.php to allow it to be passed unchecked. in C:\xampp\htdocs\kenshuu\fuel\core\classes\security.php on line 249
WARNING - 2016-01-06 08:49:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:51:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:51:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2016-01-06 08:51:18 --> Error - Object class "Fuel\Core\Validation" could not be converted to string or sanitized as ArrayAccess. Whitelist it in security.whitelisted_classes in app/config/config.php to allow it to be passed unchecked. in C:\xampp\htdocs\kenshuu\fuel\core\classes\security.php on line 249
WARNING - 2016-01-06 08:51:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:53:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:54:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:54:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:54:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:56:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:57:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:57:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 08:57:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:07:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:07:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:07:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:07:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:07:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:07:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:07:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:07:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:07:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:46:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:46:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:52:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:52:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:52:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:52:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:52:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 09:52:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2016-01-06 17:56:02 --> Fuel\Core\Fuel::init - The configured locale ja_JP.UTF-8 is not installed on your system.
INFO - 2016-01-06 17:56:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "member/register"
INFO - 2016-01-06 17:56:02 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-06 17:56:02 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2016-01-06 17:56:02 --> Fuel\Core\Fuel::init - The configured locale ja_JP.UTF-8 is not installed on your system.
INFO - 2016-01-06 17:56:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "member"
INFO - 2016-01-06 17:56:02 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-06 17:56:02 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2016-01-06 17:56:02 --> Fuel\Core\Fuel::init - The configured locale ja_JP.UTF-8 is not installed on your system.
INFO - 2016-01-06 17:56:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "favicon"
INFO - 2016-01-06 17:56:02 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-06 17:56:02 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-06 17:56:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-06 17:56:02 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-06 17:56:02 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2016-01-06 17:56:03 --> Fuel\Core\Fuel::init - The configured locale ja_JP.UTF-8 is not installed on your system.
INFO - 2016-01-06 17:56:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "member/register"
INFO - 2016-01-06 17:56:03 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-06 17:56:03 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2016-01-06 17:56:03 --> Fuel\Core\Fuel::init - The configured locale ja_JP.UTF-8 is not installed on your system.
INFO - 2016-01-06 17:56:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "member"
INFO - 2016-01-06 17:56:03 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-06 17:56:03 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2016-01-06 17:56:03 --> Fuel\Core\Fuel::init - The configured locale ja_JP.UTF-8 is not installed on your system.
INFO - 2016-01-06 17:56:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "favicon"
INFO - 2016-01-06 17:56:03 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-06 17:56:03 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-06 17:56:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-06 17:56:03 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-06 17:56:03 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2016-01-06 17:56:04 --> Fuel\Core\Fuel::init - The configured locale ja_JP.UTF-8 is not installed on your system.
INFO - 2016-01-06 17:56:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "member/register"
INFO - 2016-01-06 17:56:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-06 17:56:04 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2016-01-06 17:56:04 --> Fuel\Core\Fuel::init - The configured locale ja_JP.UTF-8 is not installed on your system.
INFO - 2016-01-06 17:56:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "member"
INFO - 2016-01-06 17:56:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-06 17:56:04 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2016-01-06 17:56:04 --> Fuel\Core\Fuel::init - The configured locale ja_JP.UTF-8 is not installed on your system.
INFO - 2016-01-06 17:56:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "favicon"
INFO - 2016-01-06 17:56:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-06 17:56:04 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-06 17:56:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-06 17:56:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-06 17:56:04 --> Fuel\Core\Request::execute - Setting main Request
