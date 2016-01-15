<?php  return array (
  'config' => 
  array (
  ),
  'aliasMap' => 
  array (
    'home' => 1,
    'sitemap.xml' => 2,
    'blog.local/404' => 3,
    'blog' => 4,
    'blog/yota' => 5,
    'blog/game' => 6,
    'blog/apple' => 7,
    'blog/archeage' => 8,
    'blog/oct' => 9,
  ),
  'resourceMap' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 2,
      2 => 3,
      3 => 4,
    ),
    4 => 
    array (
      0 => 5,
      1 => 6,
      2 => 7,
      3 => 8,
      4 => 9,
    ),
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'OnBeforeCacheUpdate' => 
    array (
      3 => '3',
    ),
    'OnChunkFormPrerender' => 
    array (
      4 => '4',
    ),
    'OnDocFormPrerender' => 
    array (
      4 => '4',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      4 => '4',
    ),
    'OnFileEditFormPrerender' => 
    array (
      4 => '4',
    ),
    'OnHandleRequest' => 
    array (
      1 => '1',
      2 => '2',
    ),
    'OnPluginFormPrerender' => 
    array (
      4 => '4',
    ),
    'OnRichTextEditorRegister' => 
    array (
      4 => '4',
    ),
    'OnSiteRefresh' => 
    array (
      5 => '5',
    ),
    'OnSnipFormPrerender' => 
    array (
      4 => '4',
    ),
    'OnTempFormPrerender' => 
    array (
      4 => '4',
    ),
  ),
  'pluginCache' => 
  array (
    1 => 
    array (
      'id' => '1',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'lowercaseUrl',
      'description' => 'Плагин для переадресации с url с UpperCase на LoverCase',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Плагин для переадресации с url с UpperCase на LoverCase
 */
$eventName = $modx->event->name;

switch($eventName) {
    case \'OnHandleRequest\':
        if($modx->context->get(\'key\') != "mgr"){
            if(isset($_GET[\'rewrite-strtolower-url\'])) {
                $url = $_GET[\'rewrite-strtolower-url\'];
                unset($_GET[\'rewrite-strtolower-url\']);
                $params = http_build_query($_GET);
                if(strlen($params)) {
                    $params = \'?\' . $params;
                }
                $modx->sendRedirect(\'http://\' . $_SERVER[\'HTTP_HOST\'] . \'/\' . strtolower($url) . $params, array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'assets/basetheme-elements/plugins/lowerCaseUrl.php',
    ),
    2 => 
    array (
      'id' => '2',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'transferProtocol',
      'description' => 'Для передресации по нужному протоколу http или https исходя из настроек',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '$eventName = $modx->event->name;

switch($eventName) {
    case \'OnHandleRequest\':
        $isSecure = false;
        if (isset($_SERVER[\'HTTPS\']) && $_SERVER[\'HTTPS\'] == \'on\') {
            $isSecure = true;
        } elseif (!empty($_SERVER[\'HTTP_X_FORWARDED_PROTO\']) && $_SERVER[\'HTTP_X_FORWARDED_PROTO\'] == \'https\' || !empty($_SERVER[\'HTTP_X_FORWARDED_SSL\']) && $_SERVER[\'HTTP_X_FORWARDED_SSL\'] == \'on\') {
            $isSecure = true;
        }

        $REQUEST_PROTOCOL = $isSecure ? \'https\' : \'http\';
        $SYSTEM_PROTOCOL = $modx->getOption(\'server_protocol\');
        if($SYSTEM_PROTOCOL != $REQUEST_PROTOCOL) {
            $url =  str_replace(array("http://","https://"), "", $_SERVER[\'HTTP_HOST\'] . $_SERVER[\'REQUEST_URI\']);
            if($SYSTEM_PROTOCOL == "https")
                $modx->sendRedirect(\'https://\' . $_SERVER[\'HTTP_HOST\'] . $_SERVER[\'REQUEST_URI\'], array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
            else
                $modx->sendRedirect(\'http://\' . $_SERVER[\'HTTP_HOST\'] . $_SERVER[\'REQUEST_URI\'], array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
            header("Location:$redirect");
        }
        break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'assets/basetheme-elements/plugins/transferProtocol.php',
    ),
    3 => 
    array (
      'id' => '3',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'clearCache',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '$eventName = $modx->event->name;
switch($eventName) {
    case \'OnBeforeCacheUpdate\':
        $options = array(\'objects\' => null, \'extensions\' => array(\'.php\', \'.log\'));
        $modx->cacheManager->clearCache(array(\'baseThemeCache/\'),$options);

        break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'assets/basetheme-elements/plugins/clearCache.php',
    ),
    4 => 
    array (
      'id' => '4',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 *
 * @var array $scriptProperties
 * @var Ace $ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$ace = $modx->getService(\'ace\', \'Ace\', $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\').\'model/ace/\');
$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/x-smarty\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'md\'    => \'text/x-markdown\',
    \'txt\'   => \'text/plain\',
    \'twig\'  => \'text/x-twig\'
);

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = \'text/html\';
        }
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_default\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension])
            ? $extensionMap[$extension]
            : \'text/plain\';
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');

        switch (true) {
            case $mimeType == \'text/html\' && $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $mimeType == \'text/html\' && $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
        }

        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }
        $modxTags = true;
        break;
    default:
        return;
}

$modxTags = (int) $modxTags;
$script = \'\';
if ($field) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'phpThumbOfCacheManager',
      'description' => 'Handles cache cleaning when clearing the Site Cache.',
      'editor_type' => '0',
      'category' => '10',
      'cache_type' => '0',
      'plugincode' => '/*
 * Handles cache cleanup
 * pThumb
 * Copyright 2013 Jason Grant
 *
 * Please see the GitHub page for documentation or to report bugs:
 * https://github.com/oo12/phpThumbOf
 *
 * pThumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * pThumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

if ($modx->event->name === \'OnSiteRefresh\') {
	if (!$modx->loadClass(\'pThumbCacheCleaner\', MODX_CORE_PATH . \'components/phpthumbof/model/\', true, true)) {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pThumb] Could not load pThumbCacheCleaner class.\');
		return;
	}
	static $pt_settings = array();
	$pThumb = new pThumbCacheCleaner($modx, $pt_settings, array(), true);
	$pThumb->cleanCache();
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'web' => 
      array (
        0 => 
        array (
          'principal' => 0,
          'authority' => 9999,
          'policy' => 
          array (
            'load' => true,
          ),
        ),
        1 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'settings' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
        2 => 
        array (
          'principal' => 2,
          'authority' => 9999,
          'policy' => 
          array (
            'load' => true,
            'list' => true,
            'view' => true,
            'save' => true,
            'remove' => true,
            'copy' => true,
            'view_unpublished' => true,
          ),
        ),
      ),
    ),
  ),
);