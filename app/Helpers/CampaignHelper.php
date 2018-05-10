<?php

namespace App\Helper;

use App\Model\Variation;
use \Config;

class CampaignHelper
{

    public static function getCampaign(Variation $c)
    {
        return $c->url->campaign_name;
    }

    public static function getEvent(Variation $c)
    {
        return $c->url->event;
    }

    public static function getHome(Variation $c)
    {
        return $c->url->home_school;
    }

    public static function getAway(Variation $c)
    {
        return $c->url->away_school;
    }

    public static function getSource(Variation $c)
    {
        return $c->source;
    }

    public static function getTerm(Variation $c)
    {
        return $c->term;
    }

    public static function getMedium(Variation $c)
    {
        return $c->medium;
    }

    public static function getName(Variation $c)
    {
        return $c->name;
    }

    public static function getContent(Variation $c)
    {
        return $c->url->home_school . 'Vs' . $c->url->away_school;
    }

    public static function getShort(Variation $c)
    {
        return Config::get('short.short_url') . 's/' . $c->short;
    }

    public static function getLong(Variation $c)
    {
        return Config::get('short.long_url') . $c->url->event . '?' . self::buildParams($c);
    }

    public static function buildParams(Variation $c)
    {
        $params = [
            'utm_source' => $c->source,
            'utm_medium' => $c->medium,
            'utm_campaign' => $c->url->campaign_name,
            'utm_term' => $c->term,
            'utm_content' => self::getContent($c),
        ];

        return http_build_query($params);
    }

    public static function shorten($text, $max = 50, $append = '&hellip;')
    {
        $text = str_replace(Config::get('short.long_url'), '/', $text);
        if (strlen($text) <= $max)
            return $text;
        $out = substr($text, 0, $max);
        if (strpos($text, ' ') === FALSE)
            return $out . $append;
        return preg_replace('/\w+$/', '', $out) . $append;
    }

}
