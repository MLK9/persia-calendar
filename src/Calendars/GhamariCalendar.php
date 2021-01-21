<?php

namespace MLK9\Calendars;

use MLK9\Calendars\Calendar;

class GhamariCalendar extends Calendar
{
    private function JDToHijri($jd)
    {
        $jd = $jd - 1948440 + 10632;
        $n  = (int)(($jd - 1) / 10631);
        $jd = $jd - 10631 * $n + 354;
        $j  = ((int)((10985 - $jd) / 5316)) *
            ((int)(50 * $jd / 17719)) +
            ((int)($jd / 5670)) *
            ((int)(43 * $jd / 15238));
        $jd = $jd - ((int)((30 - $j) / 15)) *
            ((int)((17719 * $j) / 50)) -
            ((int)($j / 16)) *
            ((int)((15238 * $j) / 43)) + 29;
        $m  = (int)(24 * $jd / 709);
        $d  = $jd - (int)(709 * $m / 24);
        $y  = 30*$n + $j - 30;
    
        return array($d, $m, $y);
    }
    
    public function boot()
    {
        $m = date('m', Self::getTime());
        $d = date('d', Self::getTime());
        $y = date('Y', Self::getTime());

        return $this->JDToHijri(cal_to_jd(CAL_GREGORIAN, $m, $d, $y));
    }
}
