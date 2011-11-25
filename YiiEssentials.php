<?php

/**
 * Description of YiiEssentials
 *
 * @author Joshua Schmidtke
 * @version 2011-11-24
 * @link https://github.com/jumanet/Yii-Essentials
 */
class YiiEssentials {
	public static function getBaseTag() {
		return CHtml::tag('base', array('href' => Yii::app()->getBaseUrl(true).'/'));
	}

	public static function powerdBy() {
		echo '<!-- powered by YiiEssentials - https://github.com/jumanet/Yii-Essentials -->'."\n";
	}

	/**
	 * Generate full HTML head
	 * @param type $settings
	 * @return type
	 */
	public static function generateHeader($settings = array()) {
		$header = self::powerdBy();

		if ($settings['base']) {
			$header .= self::getBaseTag();
		}

		return $header;
	}
}

?>
