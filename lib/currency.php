<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 25.10.2016
 * Time: 20:35
 *
 * @author Pavel Shulaev (http://rover-it.me)
 */

namespace Rover\Params;

use Rover\Params\Engine\Core;

/**
 * Class Main
 *
 * @package Rover\Params
 * @author  Pavel Shulaev (http://rover-it.me)
 */
class Currency extends Core
{
	/**
	 * @var
	 */
	protected static $moduleName = 'currency';

	/**
	 * @param array $params
	 * @return array|null
	 * @author Pavel Shulaev (http://rover-it.me)
	 */
	public static function getCurrencies(array $params = [])
	{
		self::checkModule();

		if (!isset($params['select']))
			$params['select'] = ['CURRENCY', 'NAME' => 'LANG_FORMAT.FULL_NAME'];

		if (!isset($params['template']))
			$params['template'] = ['{CURRENCY}' => '[{CURRENCY}] {NAME}'];

		if (!isset($params['filter']))
			$params['filter'] = ['=LANG_FORMAT.LID' => LANGUAGE_ID];

		$params['class']    = '\Bitrix\Currency\CurrencyTable';
		$params['method']   = 'getList';

		return self::prepare($params);
	}
}