<?php
/*************************************************************************************
 * ecpg.php
 * -----
 * Author: Nigel McNie (nigel@geshi.org)
 * Contributors:
 *  - Jack Lloyd (lloyd@randombit.net)
 *  - Christophe Chauvet (christophe_at_kryskool.org)
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.7.19
 * Date Started: 2004/06/04
 *
 * ECPG language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2007/07/23 (1.0.4-1)
 *   -  Added support for ECPG (Embedded SQL in C)
 * 2004/XX/XX (1.0.4)
 *   -  Added a couple of new keywords (Jack Lloyd)
 * 2004/11/27 (1.0.3)
 *   -  Added support for multiple object splitters
 * 2004/10/27 (1.0.2)
 *   -  Added support for URLs
 * 2004/08/05 (1.0.1)
 *   -  Added support for symbols
 * 2004/07/14 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2004/11/27)
 * -------------------------
 *  -  Get a list of inbuilt functions to add (and explore C more
 *     to complete this rather bare language file
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
	'LANG_NAME' => 'C',
	'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
	'COMMENT_MULTI' => array('/*' => '*/'),
	'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
	'QUOTEMARKS' => array("'", '"'),
	'ESCAPE_CHAR' => '\\',
	'KEYWORDS' => array(
		1 => array(
			'if', 'return', 'while', 'case', 'continue', 'default',
			'do', 'else', 'for', 'switch', 'goto'
			),
		2 => array(
			'null', 'false', 'break', 'true', 'function', 'enum', 'extern', 'inline'
			),
		3 => array(
			'printf', 'cout'
			),
		4 => array(
			'auto', 'char', 'const', 'double',  'float', 'int', 'long',
			'register', 'short', 'signed', 'sizeof', 'static', 'string', 'struct',
			'typedef', 'union', 'unsigned', 'void', 'volatile', 'wchar_t'
			),
		5 => array(
		  'ALLOCATE DESCRIPTOR',
		  'DEALLOCATE DESCRIPTOR',
		  'AND',
		  'AS',
		  'AUTOCOMMIT',
		  'BEGIN DECLARE SECTION',
		  'END DECLARE SECTION',
		  'CLOSE',
		  'COMMIT;',
		  'CONNECT TO',
		  'CONNECTION',
		  'CREATE TABLE',
		  'CREATE UNIQUE INDEX',
		  'CURSOR FOR',
		  'DECLARE',
		  'DELETE FROM',
		  'DEALLOCATE PREPARE',
		  'DISCONNECT',
		  'EXEC SQL',
		  'EXECUTE IMMEDIATE',
		  'EXECUTE',
		  'FETCH NEXT FROM',
		  'FETCH',
		  'FROM',
		  'GET DESCRIPTOR',
		  'INCLUDE',
		  'INSERT INTO',
		  'INTO DESCRIPTOR',
		  'INTO',
		  'ON',
		  'OPEN',
		  'ORDER BY',
		  'PREPARE',
		  'SELECT',
		  'SET',
		  'TO',
		  'UPDATE',
		  'USER',
		  'USING',
		  'VALUE',
		  'VALUES',
		  'WHENEVER',
		  'WHERE'
		  ),
		6 => array(
		  'char',
		  'integer',
		  ),
		7 => array(
		  'BREAK',
		  'CALL',
		  'CONTINUE',
		  'DO',
		  'GOTO',
		  'NOT FOUND',
		  'SQLERROR',
		  'SQLPRINT',
		  'SQLWARNING',
		  'STOP'
		  ),
		),
	'SYMBOLS' => array(
		'(', ')', '{', '}', '[', ']', '=', '+', '-', '*', '/', '!', '%', '^', '&', ':'
		),
	'CASE_SENSITIVE' => array(
		GESHI_COMMENTS => true,
		1 => false,
		2 => false,
		3 => false,
		4 => false,
		5 => false,
		6 => false,
		7 => false,
		),
	'STYLES' => array(
		'KEYWORDS' => array(
			1 => 'color: #b1b100;',
			2 => 'color: #000000; font-weight: bold;',
			3 => 'color: #000066;',
			4 => 'color: #993333;',
			5 => 'color: #000000; font-weight: bold; text-transform: uppercase;',
			6 => 'color: #993333; font-weight: bold; text-transform: lowercase;',
			7 => 'color: #006600; font-weight: bold; text-transform: uppercase;',
			),
		'COMMENTS' => array(
			1 => 'color: #808080; font-style: italic;',
			2 => 'color: #339933;',
			'MULTI' => 'color: #808080; font-style: italic;'
			),
		'ESCAPE_CHAR' => array(
			0 => 'color: #000099; font-weight: bold;'
			),
		'BRACKETS' => array(
			0 => 'color: #66cc66;'
			),
		'STRINGS' => array(
			0 => 'color: #ff0000;'
			),
		'NUMBERS' => array(
			0 => 'color: #cc66cc;'
			),
		'METHODS' => array(
			1 => 'color: #202020;',
			2 => 'color: #202020;'
			),
		'SYMBOLS' => array(
			0 => 'color: #66cc66;'
			),
		'REGEXPS' => array(
			),
		'SCRIPT' => array(
			)
		),
	'URLS' => array(
		1 => '',
		2 => '',
		3 => 'http://www.opengroup.org/onlinepubs/009695399/functions/{FNAME}.html',
		4 => '',
		5 => '',
		6 => '',
		7 => ''
		),
	'OOLANG' => true,
	'OBJECT_SPLITTERS' => array(
		1 => '.',
		2 => '::'
		),
	'REGEXPS' => array(
		),
	'STRICT_MODE_APPLIES' => GESHI_NEVER,
	'SCRIPT_DELIMITERS' => array(
		),
	'HIGHLIGHT_STRICT_BLOCK' => array(
		)
);

?>
