<?php

/**
 * This file is automatically generated. Use 'phutil_mapper.php' to rebuild it.
 * @generated
 */

phutil_register_library_map(array(
  'class' =>
  array(
    'AphrontApplicationConfiguration' => 'aphront/applicationconfiguration',
    'AphrontController' => 'aphront/controller',
    'AphrontDefaultApplicationConfiguration' => 'aphront/default/configuration',
    'AphrontDefaultApplicationController' => 'aphront/default/controller',
    'AphrontRequest' => 'aphront/request',
    'AphrontResponse' => 'aphront/response',
    'AphrontURIMapper' => 'aphront/mapper',
    'AphrontWebpageResponse' => 'aphront/response/webpage',
    'CommandException' => 'future/exec',
    'ConduitClient' => 'conduit/client',
    'ConduitClientException' => 'conduit/client',
    'ConduitFuture' => 'conduit/client',
    'ExecFuture' => 'future/exec',
    'FileFinder' => 'filesystem/filefinder',
    'FileList' => 'filesystem/filelist',
    'Filesystem' => 'filesystem',
    'FilesystemException' => 'filesystem',
    'Future' => 'future',
    'FutureIterator' => 'future',
    'HTTPFuture' => 'future/http',
    'LiskDAO' => 'lisk/dao',
    'PhutilConsoleFormatter' => 'console',
    'PhutilDatabaseConnection' => 'storage/connection/base',
    'PhutilDefaultSyntaxHighlighterEngine' => 'markup/syntax/engine/default',
    'PhutilInteractiveEditor' => 'console/editor',
    'PhutilMarkupEngine' => 'markup/engine',
    'PhutilMissingSymbolException' => 'symbols/exception/missing',
    'PhutilMySQLDatabaseConnection' => 'storage/connection/mysql',
    'PhutilQueryConnectionException' => 'storage/exception/connection',
    'PhutilQueryConnectionLostException' => 'storage/exception/connectionlost',
    'PhutilQueryCountException' => 'storage/exception/count',
    'PhutilQueryException' => 'storage/exception/base',
    'PhutilQueryObjectMissingException' => 'storage/exception/objectmissing',
    'PhutilQueryParameterException' => 'storage/exception/parameter',
    'PhutilQueryRecoverableException' => 'storage/exception/recoverable',
    'PhutilRemarkupBlockStorage' => 'markup/engine/remarkup/blockstorage',
    'PhutilRemarkupEngine' => 'markup/engine/remarkup',
    'PhutilRemarkupEngineBlockRule' => 'markup/engine/remarkup/blockrule/base',
    'PhutilRemarkupEngineRemarkupCodeBlockRule' => 'markup/engine/remarkup/blockrule/remarkupcode',
    'PhutilRemarkupEngineRemarkupCounterExampleBlockRule' => 'markup/engine/remarkup/blockrule/remarkupcounterexample',
    'PhutilRemarkupEngineRemarkupDefaultBlockRule' => 'markup/engine/remarkup/blockrule/remarkupdefault',
    'PhutilRemarkupEngineRemarkupHeaderBlockRule' => 'markup/engine/remarkup/blockrule/remarkupheader',
    'PhutilRemarkupEngineRemarkupInlineBlockRule' => 'markup/engine/remarkup/blockrule/remarkupinline',
    'PhutilRemarkupEngineRemarkupListBlockRule' => 'markup/engine/remarkup/blockrule/remarkuplist',
    'PhutilRemarkupRule' => 'markup/engine/remarkup/markuprule/base',
    'PhutilRemarkupRuleBold' => 'markup/engine/remarkup/markuprule/bold',
    'PhutilRemarkupRuleEscapeHTML' => 'markup/engine/remarkup/markuprule/escapehtml',
    'PhutilRemarkupRuleEscapeRemarkup' => 'markup/engine/remarkup/markuprule/escaperemarkup',
    'PhutilRemarkupRuleHyperlink' => 'markup/engine/remarkup/markuprule/hyperlink',
    'PhutilRemarkupRuleItalic' => 'markup/engine/remarkup/markuprule/italics',
    'PhutilRemarkupRuleLinebreaks' => 'markup/engine/remarkup/markuprule/linebreaks',
    'PhutilRemarkupRuleMonospace' => 'markup/engine/remarkup/markuprule/monospace',
    'PhutilSymbolLoader' => 'symbols',
    'PhutilSyntaxHighlighter' => 'markup/syntax/highlighter/base',
    'PhutilSyntaxHighlighterEngine' => 'markup/syntax/engine/base',
    'PhutilXHPASTSyntaxHighlighter' => 'markup/syntax/highlighter/xhpast',
    'TempFile' => 'filesystem/tempfile',
    'XHPASTNode' => 'parser/xhpast/api/node',
    'XHPASTNodeList' => 'parser/xhpast/api/list',
    'XHPASTSyntaxErrorException' => 'parser/xhpast/api/exception',
    'XHPASTToken' => 'parser/xhpast/api/token',
    'XHPASTTree' => 'parser/xhpast/api/tree',
  ),
  'function' =>
  array(
    'Futures' => 'future',
    '_qsprintf_check_scalar_type' => 'xsprintf/qsprintf',
    '_qsprintf_check_type' => 'xsprintf/qsprintf',
    'array_select_keys' => 'utils',
    'coalesce' => 'utils',
    'csprintf' => 'xsprintf/csprintf',
    'exec_manual' => 'future/exec',
    'execx' => 'future/exec',
    'id' => 'utils',
    'idx' => 'utils',
    'ipull' => 'utils',
    'jsprintf' => 'xsprintf/jsprintf',
    'mgroup' => 'utils',
    'mpull' => 'utils',
    'msort' => 'utils',
    'newv' => 'utils',
    'nonempty' => 'utils',
    'phutil_console_confirm' => 'console',
    'phutil_console_format' => 'console',
    'phutil_console_prompt' => 'console',
    'phutil_console_wrap' => 'console',
    'phutil_escape_html' => 'markup',
    'phutil_get_library_name_for_root' => 'moduleutils',
    'phutil_get_library_root' => 'moduleutils',
    'phutil_get_library_root_for_path' => 'moduleutils',
    'phutil_render_tag' => 'markup',
    'qsprintf' => 'xsprintf/qsprintf',
    'queryfx' => 'storage/queryfx',
    'queryfx_all' => 'storage/queryfx',
    'queryfx_one' => 'storage/queryfx',
    'vcsprintf' => 'xsprintf/csprintf',
    'vjsprintf' => 'xsprintf/jsprintf',
    'vqsprintf' => 'xsprintf/qsprintf',
    'vqueryfx' => 'storage/queryfx',
    'xhp_parser_node_constants' => 'parser/xhpast/constants',
    'xhpast_get_binary_path' => 'parser/xhpast/bin',
    'xhpast_get_build_instructions' => 'parser/xhpast/bin',
    'xhpast_get_parser_future' => 'parser/xhpast/bin',
    'xhpast_is_available' => 'parser/xhpast/bin',
    'xhpast_parser_token_constants' => 'parser/xhpast/constants',
    'xsprintf' => 'xsprintf',
    'xsprintf_command' => 'xsprintf/csprintf',
    'xsprintf_javascript' => 'xsprintf/jsprintf',
    'xsprintf_query' => 'xsprintf/qsprintf',
  ),
  'requires_class' =>
  array(
    'AphrontDefaultApplicationConfiguration' => 'AphrontApplicationConfiguration',
    'AphrontDefaultApplicationController' => 'AphrontController',
    'ConduitFuture' => 'HTTPFuture',
    'ExecFuture' => 'Future',
    'HTTPFuture' => 'Future',
    'PhutilDefaultSyntaxHighlighterEngine' => 'PhutilSyntaxHighlighterEngine',
    'PhutilMySQLDatabaseConnection' => 'PhutilDatabaseConnection',
    'PhutilQueryConnectionException' => 'PhutilQueryException',
    'PhutilQueryConnectionLostException' => 'PhutilQueryRecoverableException',
    'PhutilQueryCountException' => 'PhutilQueryException',
    'PhutilQueryObjectMissingException' => 'PhutilQueryException',
    'PhutilQueryParameterException' => 'PhutilQueryException',
    'PhutilQueryRecoverableException' => 'PhutilQueryException',
    'PhutilRemarkupEngine' => 'PhutilMarkupEngine',
    'PhutilRemarkupEngineRemarkupCodeBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupCounterExampleBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupDefaultBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupHeaderBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupInlineBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupListBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupRuleBold' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleEscapeHTML' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleEscapeRemarkup' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleHyperlink' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleItalic' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleLinebreaks' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleMonospace' => 'PhutilRemarkupRule',
  ),
  'requires_interface' =>
  array(
  ),
));
