<?php

namespace MLK9\Events;

use MLK9\PCalendar;

class MiladiEvent
{
    public static function boot()
    {
        /*

        PCalendar::MiladiEvent()->Add('', false, [0,0,0]);

        */

        PCalendar::MiladiEvent()->Add(' روز جهانی شادی ', false, [ 20 ,3 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی تئاتر ', false, [ 27 ,3 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی بهداشت ', false, [ 7 ,4 ,0]);
        PCalendar::MiladiEvent()->Add(' جشن گیاه آوری؛ روز زمین ', false, [ 22 ,4 ,0]);
        PCalendar::MiladiEvent()->Add(' روزجهانی کارگر ', false, [ 1 ,5 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی ماما ', false, [ 5 ,5 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی صلیب سرخ و هلال احمر ', false, [ 8 ,5 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی موزه و میراث فرهنگی ', false, [ 18 ,5 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی محیط زیست ', false, [ 5 ,6 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی صنایع دستی ', false, [ 10 ,6 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی مبارزه با کار کودکان ', false, [ 12 ,6 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی اهدای خون ', false, [ 14 ,6 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی بیابان زدایی ', false, [ 17 ,6 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی مبارزه با مواد مخدر ', false, [ 26 ,6 ,0]);
        PCalendar::MiladiEvent()->Add(' آغاز هفته جهانی شیردهی ', false, [ 1 ,8 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی چپ دست ها ', false, [ 13 ,8 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی عکاسی ', false, [ 19 ,8 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی پیشگیری از خودکشی ', false, [ 10 ,9 ,0]);
        PCalendar::MiladiEvent()->Add(' حمله به برج‌های دوقلوی مرکز تجارت جهانی ', false, [ 11 ,9 ,0]);
        PCalendar::MiladiEvent()->Add(' روز گرامیداشت برنامه نویسان ', false, [ 12 ,9 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی صلح ', false, [ 21 ,9 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی جهانگردی ', false, [ 27 ,9 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی ناشنوایان ', false, [ 30 ,9 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی ترجمه و مترجم ', false, [ 30 ,9 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی سالمندان ', false, [ 1 ,10 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی معلم ', false, [ 5 ,10 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی پست ', false, [ 9 ,10 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی مبارزه با حکم اعدام ', false, [ 10 ,10 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی دختر ', false, [ 11 ,10 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی استاندارد ', false, [ 14 ,10 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی عصای سفید ', false, [ 15 ,10 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی غذا ', false, [ 16 ,10 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی ریشه کنی فقر ', false, [ 17 ,10 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی دیابت ', false, [ 14 ,11 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی فلسفه ', false, [ 19 ,11 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی آقایان ', false, [ 19 ,11 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی کودک ', false, [ 20 ,11 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی مبارزه با خشونت علیه زنان ', false, [ 25 ,11 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی ایدز ', false, [ 1 ,12 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی معلولان ', false, [ 3 ,12 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی کوه نوردی ', false, [ 11 ,12 ,0]);
        PCalendar::MiladiEvent()->Add(' جشن کریسمس ', false, [ 25 ,12 ,0]);
        PCalendar::MiladiEvent()->Add(' جشن آغاز سال نو میلادی ', false, [ 1 ,1 ,0]);
        PCalendar::MiladiEvent()->Add(' حمله به سفارت روسیه و قتل گریبایدوف سفیر روسیه تزاری در ایران ', false, [ 11 ,2 ,0]);
        PCalendar::MiladiEvent()->Add(' زادروز چارلز داروین بنیانگذار نظریه‌ی فرگشت از طریق انتخاب طبیعی ', false, [ 12 ,2 ,0]);
        PCalendar::MiladiEvent()->Add(' روز ولنتاین ', false, [ 14 ,2 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی زبان مادری ', false, [ 21 ,2 ,0]);
        PCalendar::MiladiEvent()->Add(' روزجهانی زنان ', false, [ 8 ,3 ,0]);
        PCalendar::MiladiEvent()->Add(' روز جهانی شادی ', false, [ 20 ,3 ,0]);
    }
}
