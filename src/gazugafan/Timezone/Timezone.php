<?php namespace Gazugafan\Timezone;

use DateTime;
use DateTimeZone;

class Timezone
{
	/**
	 * @param integer $timestamp
	 * @param string $timezone
	 * @param string $format
	 *
	 * @return string
     */
	public function convertFromUTC($timestamp, $timezone, $format = 'Y-m-d H:i:s')
	{
        $date = new DateTime($timestamp, new DateTimeZone('UTC'));

        $date->setTimezone(new DateTimeZone($timezone));

        return $date->format($format);
    }

	/**
	 * @param integer $timestamp
	 * @param string $timezone
	 * @param string $format
	 *
	 * @return string
     */
	public function convertToUTC($timestamp, $timezone, $format = 'Y-m-d H:i:s')
    {
    	$date = new DateTime($timestamp, new DateTimeZone($timezone));

        $date->setTimezone(new DateTimeZone('UTC'));

        return $date->format($format);
    }
}