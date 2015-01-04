<?php
class Sedo_ExtraHanzi_Listeners
{
	public static function initListeners(CMF_Core_Listener $events)
	{
		$events->addProxyExtenders(
			array(
				'XenForo_Input' => 'Sedo_ExtraHanzi_XenForo_Input'
			)
		);
	}
}