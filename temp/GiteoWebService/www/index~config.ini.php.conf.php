<?php $config = array (
  'startModule' => 'GiteoWebService',
  'startAction' => 'default:index',
  'locale' => 'en_US',
  'availableLocales' => 
  array (
    0 => 'en_US',
  ),
  'charset' => 'UTF-8',
  'theme' => 'default',
  'httpVersion' => '',
  'timeZone' => 'Europe/Paris',
  'pluginsPath' => 'app:plugins/,lib:jelix-plugins/',
  'modulesPath' => 'lib:jelix-modules/,app:modules/',
  'domainName' => 'localhost',
  'fallbackLocale' => '',
  'forceHTTPPort' => '',
  'forceHTTPSPort' => '',
  'disableInstallers' => '',
  'enableAllModules' => '',
  'modules' => 
  array (
    'jelix.access' => 2,
    'jacldb.access' => '0',
    'jacl2db.access' => '0',
    'jauth.access' => '0',
    'jauthdb.access' => '0',
    'junittests.access' => '0',
    'jWSDL.access' => '0',
    'GiteoWebService.access' => '2',
    'jelix.dbprofile' => 'default',
    'jacl.access' => 0,
    'jacl.dbprofile' => 'default',
    'jacl2db.dbprofile' => 'default',
    'jacldb.dbprofile' => 'default',
    'jauth.dbprofile' => 'default',
    'jauthdb.dbprofile' => 'default',
    'junittests.dbprofile' => 'default',
    'jWSDL.dbprofile' => 'default',
    'GiteoWebService.dbprofile' => 'default',
  ),
  'coordplugins' => 
  array (
  ),
  'tplplugins' => 
  array (
    'defaultJformsBuilder' => 'html',
  ),
  'responses' => 
  array (
    'html' => 'myHtmlResponse',
    'basichtml' => 'jResponseBasicHtml',
    'redirect' => 'jResponseRedirect',
    'redirectUrl' => 'jResponseRedirectUrl',
    'binary' => 'jResponseBinary',
    'text' => 'jResponseText',
    'cmdline' => 'jResponseCmdline',
    'jsonrpc' => 'jResponseJsonrpc',
    'json' => 'jResponseJson',
    'xmlrpc' => 'jResponseXmlrpc',
    'xul' => 'jResponseXul',
    'xuloverlay' => 'jResponseXulOverlay',
    'xuldialog' => 'jResponseXulDialog',
    'xulpage' => 'jResponseXulPage',
    'rdf' => 'jResponseRdf',
    'xml' => 'jResponseXml',
    'zip' => 'jResponseZip',
    'rss2.0' => 'jResponseRss20',
    'atom1.0' => 'jResponseAtom10',
    'css' => 'jResponseCss',
    'ltx2pdf' => 'jResponseLatexToPdf',
    'tcpdf' => 'jResponseTcpdf',
    'soap' => 'jResponseSoap',
    'htmlfragment' => 'jResponseHtmlFragment',
    'htmlauth' => 'jResponseHtml',
    'sitemap' => 'jResponseSitemap',
    'html.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/GiteoWebService/responses/myHtmlResponse.class.php',
    'basichtml.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseBasicHtml.class.php',
    'redirect.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseRedirect.class.php',
    'redirectUrl.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseRedirectUrl.class.php',
    'binary.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseBinary.class.php',
    'text.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseText.class.php',
    'cmdline.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseCmdline.class.php',
    'jsonrpc.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseJsonrpc.class.php',
    'json.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseJson.class.php',
    'xmlrpc.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseXmlrpc.class.php',
    'xul.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseXul.class.php',
    'xuloverlay.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseXulOverlay.class.php',
    'xuldialog.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseXulDialog.class.php',
    'xulpage.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseXulPage.class.php',
    'rdf.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseRdf.class.php',
    'xml.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseXml.class.php',
    'zip.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseZip.class.php',
    'rss2.0.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseRss20.class.php',
    'atom1.0.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseAtom10.class.php',
    'css.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseCss.class.php',
    'ltx2pdf.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseLatexToPdf.class.php',
    'tcpdf.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseTcpdf.class.php',
    'soap.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseSoap.class.php',
    'htmlfragment.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseHtmlFragment.class.php',
    'htmlauth.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseHtml.class.php',
    'sitemap.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseSitemap.class.php',
  ),
  '_coreResponses' => 
  array (
    'html' => 'jResponseHtml',
    'basichtml' => 'jResponseBasicHtml',
    'redirect' => 'jResponseRedirect',
    'redirectUrl' => 'jResponseRedirectUrl',
    'binary' => 'jResponseBinary',
    'text' => 'jResponseText',
    'cmdline' => 'jResponseCmdline',
    'jsonrpc' => 'jResponseJsonrpc',
    'json' => 'jResponseJson',
    'xmlrpc' => 'jResponseXmlrpc',
    'xul' => 'jResponseXul',
    'xuloverlay' => 'jResponseXulOverlay',
    'xuldialog' => 'jResponseXulDialog',
    'xulpage' => 'jResponseXulPage',
    'rdf' => 'jResponseRdf',
    'xml' => 'jResponseXml',
    'zip' => 'jResponseZip',
    'rss2.0' => 'jResponseRss20',
    'atom1.0' => 'jResponseAtom10',
    'css' => 'jResponseCss',
    'ltx2pdf' => 'jResponseLatexToPdf',
    'tcpdf' => 'jResponseTcpdf',
    'soap' => 'jResponseSoap',
    'htmlfragment' => 'jResponseHtmlFragment',
    'htmlauth' => 'jResponseHtml',
    'sitemap' => 'jResponseSitemap',
    'html.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseHtml.class.php',
    'basichtml.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseBasicHtml.class.php',
    'redirect.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseRedirect.class.php',
    'redirectUrl.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseRedirectUrl.class.php',
    'binary.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseBinary.class.php',
    'text.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseText.class.php',
    'cmdline.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseCmdline.class.php',
    'jsonrpc.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseJsonrpc.class.php',
    'json.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseJson.class.php',
    'xmlrpc.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseXmlrpc.class.php',
    'xul.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseXul.class.php',
    'xuloverlay.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseXulOverlay.class.php',
    'xuldialog.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseXulDialog.class.php',
    'xulpage.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseXulPage.class.php',
    'rdf.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseRdf.class.php',
    'xml.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseXml.class.php',
    'zip.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseZip.class.php',
    'rss2.0.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseRss20.class.php',
    'atom1.0.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseAtom10.class.php',
    'css.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseCss.class.php',
    'ltx2pdf.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseLatexToPdf.class.php',
    'tcpdf.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseTcpdf.class.php',
    'soap.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseSoap.class.php',
    'htmlfragment.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseHtmlFragment.class.php',
    'htmlauth.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseHtml.class.php',
    'sitemap.path' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core/response/jResponseSitemap.class.php',
  ),
  'jResponseHtml' => 
  array (
    'plugins' => 'debugbar',
    'minifyEntryPoint' => 'minify.php',
    'minifyCSS' => '',
    'minifyJS' => '',
    'minifyExcludeCSS' => '',
    'minifyExcludeJS' => 'jquery.wymeditor.js',
  ),
  'debugbar' => 
  array (
    'plugins' => 'sqllog,sessiondata,defaultlog',
  ),
  'error_handling' => 
  array (
    'messageLogFormat' => '%date%\\t%ip%\\t[%code%]\\t%msg%\\t%file%\\t%line%\\n\\t%url%\\n%params%\\n%trace%\\n\\n',
    'errorMessage' => 'A technical error has occured (code: %code%). Sorry for this inconvenience.',
  ),
  'compilation' => 
  array (
    'checkCacheFiletime' => '1',
    'force' => '',
  ),
  'urlengine' => 
  array (
    'engine' => 'basic_significant',
    'enableParser' => '1',
    'multiview' => '',
    'scriptNameServerVariable' => 'SCRIPT_NAME',
    'pathInfoInQueryParameter' => '',
    'basePath' => '/GiteoWebService/www/',
    'backendBasePath' => '',
    'checkHttpsOnParsing' => '1',
    'jelixWWWPath' => '/GiteoWebService/www/../../jelix/lib/jelix-www/',
    'jqueryPath' => '/GiteoWebService/www/../../jelix/lib/jelix-www/jquery/',
    'defaultEntrypoint' => 'index',
    'entrypointExtension' => '.php',
    'notfoundAct' => 'jelix~error:notfound',
    'simple_urlengine_https' => '',
    'significantFile' => 'urls.xml',
    'urlScript' => '/GiteoWebService/www/index.php',
    'urlScriptPath' => '/GiteoWebService/www/',
    'urlScriptName' => 'index.php',
    'urlScriptId' => 'index',
    'urlScriptIdenc' => 'index',
    'documentRoot' => '/Users/sarahdelespinay/Documents/Projet Giteo',
  ),
  'simple_urlengine_entrypoints' => 
  array (
    'index' => '@classic',
    'xmlrpc' => '@xmlrpc',
    'jsonrpc' => '@jsonrpc',
    'rdf' => '@rdf',
  ),
  'basic_significant_urlengine_entrypoints' => 
  array (
    'index' => '1',
    'xmlrpc' => '1',
    'jsonrpc' => '1',
    'rdf' => '1',
  ),
  'logger' => 
  array (
    '_all' => 'memory',
    'default' => 'file',
    'error' => 'file',
    'warning' => 'file',
    'notice' => 'file',
    'deprecated' => '',
    'strict' => '',
    'debug' => '',
    'sql' => '',
    'soap' => '',
  ),
  'fileLogger' => 
  array (
    'default' => 'messages.log',
    'error' => 'errors.log',
    'warning' => 'errors.log',
    'notice' => 'errors.log',
    'deprecated' => 'errors.log',
    'strict' => 'errors.log',
    'debug' => 'debug.log',
  ),
  'memorylogger' => 
  array (
    'default' => '20',
    'error' => '10',
    'warning' => '10',
    'notice' => '10',
    'deprecated' => '10',
    'strict' => '10',
    'debug' => '20',
    'sql' => '20',
    'soap' => '20',
  ),
  'mailLogger' => 
  array (
    'email' => 'root@localhost',
    'emailHeaders' => 'Content-Type: text/plain; charset=UTF-8\\nFrom: webmaster@yoursite.com\\nX-Mailer: Jelix\\nX-Priority: 1 (Highest)\\n',
  ),
  'mailer' => 
  array (
    'webmasterEmail' => 'root@localhost',
    'webmasterName' => '',
    'mailerType' => 'mail',
    'hostname' => '',
    'sendmailPath' => '/usr/sbin/sendmail',
    'filesDir' => 'mails/',
    'smtpHost' => 'localhost',
    'smtpPort' => '25',
    'smtpSecure' => '',
    'smtpHelo' => '',
    'smtpAuth' => '',
    'smtpUsername' => '',
    'smtpPassword' => '',
    'smtpTimeout' => '10',
    'copyToFiles' => '',
  ),
  'acl' => 
  array (
    'driver' => '',
  ),
  'acl2' => 
  array (
    'driver' => '',
  ),
  'sessions' => 
  array (
    'start' => '1',
    'shared_session' => '',
    'name' => '',
    'storage' => '',
    'loadClasses' => '',
    '_class_to_load' => 
    array (
    ),
  ),
  'forms' => 
  array (
    'controls.datetime.input' => 'menulists',
    'controls.datetime.months.labels' => 'names',
    'datepicker' => 'default',
  ),
  'datepickers' => 
  array (
    'default' => 'jelix/js/jforms/datepickers/default/init.js',
  ),
  'htmleditors' => 
  array (
    'default.engine.name' => 'wymeditor',
    'default.engine.file' => 
    array (
      0 => 'jelix/jquery/jquery.js',
      1 => 'jelix/wymeditor/jquery.wymeditor.js',
    ),
    'default.config' => 'jelix/js/jforms/htmleditors/wymeditor_default.js',
    'wymbasic.engine.name' => 'wymeditor',
    'wymbasic.engine.file' => 
    array (
      0 => 'jelix/jquery/jquery.js',
      1 => 'jelix/wymeditor/jquery.wymeditor.js',
    ),
    'wymbasic.config' => 'jelix/js/jforms/htmleditors/wymeditor_basic.js',
    'ckdefault.engine.name' => 'ckeditor',
    'ckdefault.engine.file' => 
    array (
      0 => 'jelix/ckeditor/ckeditor.js',
    ),
    'ckdefault.config' => 'jelix/js/jforms/htmleditors/ckeditor_default.js',
    'ckfull.engine.name' => 'ckeditor',
    'ckfull.engine.file' => 
    array (
      0 => 'jelix/ckeditor/ckeditor.js',
    ),
    'ckfull.config' => 'jelix/js/jforms/htmleditors/ckeditor_full.js',
    'ckbasic.engine.name' => 'ckeditor',
    'ckbasic.engine.file' => 
    array (
      0 => 'jelix/ckeditor/ckeditor.js',
    ),
    'ckbasic.config' => 'jelix/js/jforms/htmleditors/ckeditor_basic.js',
  ),
  'wikieditors' => 
  array (
    'default.engine.name' => 'wr3',
    'default.wiki.rules' => 'wr3_to_xhtml',
    'default.engine.file' => 'jelix/markitup/jquery.markitup.js',
    'default.config.path' => 'jelix/markitup/sets/wr3/',
    'default.image.path' => 'jelix/markitup/sets/wr3/images/',
    'default.skin' => 'jelix/markitup/skins/simple/style.css',
  ),
  'zones' => 
  array (
    'disableCache' => '',
  ),
  'classbindings' => 
  array (
  ),
  'imagemodifier' => 
  array (
    'src_url' => '',
    'src_path' => '',
    'cache_url' => '',
    'cache_path' => '',
  ),
  'rootUrls' => 
  array (
    'jelix.cache' => 'cache/',
  ),
  'langToLocale' => 
  array (
    'en' => 'en_US',
  ),
  'isWindows' => false,
  '_allBasePath' => 
  array (
    0 => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix-modules/',
    1 => '/Users/sarahdelespinay/Documents/Projet Giteo/GiteoWebService/modules/',
    2 => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix-plugins/cache/',
    3 => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix-plugins/kvdb/',
  ),
  '_autoload_class' => 
  array (
  ),
  '_autoload_namespace' => 
  array (
  ),
  '_autoload_classpattern' => 
  array (
  ),
  '_autoload_includepathmap' => 
  array (
  ),
  '_autoload_includepath' => 
  array (
  ),
  '_autoload_namespacepathmap' => 
  array (
  ),
  '_autoload_autoloader' => 
  array (
  ),
  '_modulesPathList' => 
  array (
    'jelix' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/core-modules/jelix/',
    'GiteoWebService' => '/Users/sarahdelespinay/Documents/Projet Giteo/GiteoWebService/modules/GiteoWebService/',
  ),
  '_pluginsPathList_auth' => 
  array (
    'class' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/auth/class/',
    'db' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/auth/db/',
    'ldap' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/auth/ldap/',
    'lds' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/auth/lds/',
  ),
  '_pluginsPathList_cache' => 
  array (
    'db' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/cache/db/',
    'memcache' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/cache/memcache/',
    'memcache22' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/cache/memcache22/',
    'file' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix-plugins/cache/file/',
  ),
  '_pluginsPathList_coord' => 
  array (
    'auth' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/coord/auth/',
    'autolocale' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/coord/autolocale/',
    'history' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/coord/history/',
    'jacl' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/coord/jacl/',
    'jacl2' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/coord/jacl2/',
    'magicquotes' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/coord/magicquotes/',
    'traceexec' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/coord/traceexec/',
    'zendframework' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/coord/zendframework/',
  ),
  '_pluginsPathList_db' => 
  array (
    'mssql' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/db/mssql/',
    'mysql' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/db/mysql/',
    'mysqli' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/db/mysqli/',
    'oci' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/db/oci/',
    'pgsql' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/db/pgsql/',
    'sqlite' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/db/sqlite/',
    'sqlite3' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/db/sqlite3/',
  ),
  '_pluginsPathList_debugbar' => 
  array (
    'defaultlog' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/debugbar/defaultlog/',
    'sessiondata' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/debugbar/sessiondata/',
    'soaplog' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/debugbar/soaplog/',
    'sqllog' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/debugbar/sqllog/',
  ),
  '_pluginsPathList_htmlresponse' => 
  array (
    'debugbar' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/htmlresponse/debugbar/',
    'minify' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/htmlresponse/minify/',
  ),
  '_pluginsPathList_jforms' => 
  array (
    'html' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/jforms/html/',
    'htmllight' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/jforms/htmllight/',
  ),
  '_pluginsPathList_kvdb' => 
  array (
    'db' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/kvdb/db/',
    'file2' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/kvdb/file2/',
    'memcache' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/kvdb/memcache/',
    'redis' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/kvdb/redis/',
    'file' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix-plugins/kvdb/file/',
  ),
  '_pluginsPathList_logger' => 
  array (
    'firebug' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/logger/firebug/',
  ),
  '_tplpluginsPathList_common' => 
  array (
    0 => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/tpl/common/',
  ),
  '_tplpluginsPathList_html' => 
  array (
    0 => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/tpl/html/',
  ),
  '_tplpluginsPathList_ltx2pdf' => 
  array (
    0 => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/tpl/ltx2pdf/',
  ),
  '_tplpluginsPathList_text' => 
  array (
    0 => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/tpl/text/',
  ),
  '_tplpluginsPathList_xml' => 
  array (
    0 => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/tpl/xml/',
  ),
  '_tplpluginsPathList_xul' => 
  array (
    0 => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/tpl/xul/',
  ),
  '_pluginsPathList_urls' => 
  array (
    'basic_significant' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/urls/basic_significant/',
    'significant' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/urls/significant/',
    'simple' => '/Users/sarahdelespinay/Documents/Projet Giteo/jelix/lib/jelix/plugins/urls/simple/',
  ),
);
?>