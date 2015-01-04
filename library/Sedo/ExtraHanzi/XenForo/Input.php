<?php
class Sedo_ExtraHanzi_XenForo_Input extends XFCP_Sedo_ExtraHanzi_XenForo_Input
{
	public static function cleanString($string)
	{
		$extraHanzi = new Sedo_ExtraHanzi_Helper_Characters();

		$string = $extraHanzi->encodeExtraHanzi($string);
		$string = parent::cleanString($string); //$string = XFProxy_XenForo_Input::cleanString($string);
		$string = $extraHanzi->decodeExtraHanzi($string);

		return $string;
	}
}