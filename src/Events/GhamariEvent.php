<?php

namespace MLK9\Events;

use MLK9\PCalendar;

class GhamariEvent
{
    public static function boot()
    {
        /*

        PCalendar::GhamariEvent()->Add('', false, [0,0,0]);

        */
        PCalendar::GhamariEvent()->Add(' شهادت امام موسی کاظم علیه السلام ', false, [ 25 ,7 ,0]);
        PCalendar::GhamariEvent()->Add(' مبعث رسول اکرم ', true, [ 27 ,7 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت سالار شهیدان، امام حسین علیه السلام و روز پاسدار ', false, [ 3 ,8 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت ابوالفضل العباس علیه السلام و روز جانباز ', false, [ 4 ,8 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت امام زین العابدین علیه السلام ', false, [ 5 ,8 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت علی اکبر علیه السلام و روز جوان ', false, [ 11 ,8 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت حضرت قائم عجل الله تعالی فرجه و جشن نیمه شعبان ', true, [ 15 ,8 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت امام حسن مجتبی علیه السلام ', false, [ 15 ,9 ,0]);
        PCalendar::GhamariEvent()->Add(' شب قدر ', false, [ 18 ,9 ,0]);
        PCalendar::GhamariEvent()->Add(' ضربت خوردن حضرت علی علیه السلام ', false, [ 19 ,9 ,0]);
        PCalendar::GhamariEvent()->Add(' شهادت حضرت علی علیه السلام ', true, [ 21 ,9 ,0]);
        PCalendar::GhamariEvent()->Add(' شب قدر ', false, [ 22 ,9 ,0]);
        PCalendar::GhamariEvent()->Add(' عید سعید فطر ', true, [ 1 ,10 ,0]);
        PCalendar::GhamariEvent()->Add(' تعطیل به مناسبت عید سعید فطر ', true, [ 2 ,10 ,0]);
        PCalendar::GhamariEvent()->Add(' شهادت امام جعفر صادق علیه السلام ', true, [ 25 ,10 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت حضرت معصومه سلام الله علیها و روز دختران ', false, [ 1 ,11 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت امام رضا علیه السلام ', false, [ 11 ,11 ,0]);
        PCalendar::GhamariEvent()->Add(' شهادت امام محمد تقی علیه السلام ', false, [ 29 ,11 ,0]);
        PCalendar::GhamariEvent()->Add(' شهادت امام محمد باقر علیه السلام ', false, [ 7 ,12 ,0]);
        PCalendar::GhamariEvent()->Add(' روز عرفه ', false, [ 9 ,12 ,0]);
        PCalendar::GhamariEvent()->Add(' عید سعید قربان ', true, [ 10 ,12 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت امام علی النقی الهادی علیه السلام ', false, [ 15 ,12 ,0]);
        PCalendar::GhamariEvent()->Add(' عید سعید غدیر خم ', true, [ 18 ,12 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت امام موسی کاظم علیه السلام ', false, [ 20 ,12 ,0]);
        PCalendar::GhamariEvent()->Add(' تاسوعای حسینی ', true, [ 9 ,1 ,0]);
        PCalendar::GhamariEvent()->Add(' عاشورای حسینی ', true, [ 10 ,1 ,0]);
        PCalendar::GhamariEvent()->Add(' شهادت امام زین العابدین علیه السلام ', false, [ 12 ,1 ,0]);
        PCalendar::GhamariEvent()->Add(' اربعین حسینی ', true, [ 20 ,2 ,0]);
        PCalendar::GhamariEvent()->Add(' رحلت رسول اکرم؛شهادت امام حسن مجتبی علیه السلام ', true, [ 28 ,2 ,0]);
        PCalendar::GhamariEvent()->Add(' شهادت امام رضا علیه السلام ', true, [ 29 ,2 ,0]);
        PCalendar::GhamariEvent()->Add(' هجرت پیامبر اکرم از مکه به مدینه ', false, [ 1 ,3 ,0]);
        PCalendar::GhamariEvent()->Add(' شهادت امام حسن عسکری علیه السلام ', true, [ 8 ,3 ,0]);
        PCalendar::GhamariEvent()->Add(' میلاد رسول اکرم به روایت اهل سنت ', false, [ 12 ,3 ,0]);
        PCalendar::GhamariEvent()->Add(' میلاد رسول اکرم و امام جعفر صادق علیه السلام ', true, [ 17 ,3 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت امام حسن عسکری علیه السلام ', false, [ 8 ,4 ,0]);
        PCalendar::GhamariEvent()->Add(' وفات حضرت معصومه سلام الله علیها ', false, [ 10 ,4 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت حضرت زینب سلام الله علیها و روز پرستار و بهورز ', false, [ 5 ,5 ,0]);
        PCalendar::GhamariEvent()->Add(' شهادت حضرت فاطمه زهرا سلام الله علیها ', true, [ 3 ,6 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت حضرت فاطمه زهرا سلام الله علیها و روز مادر ', false, [ 20 ,6 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت امام محمد باقر علیه السلام ', false, [ 1 ,7 ,0]);
        PCalendar::GhamariEvent()->Add(' شهادت امام علی النقی الهادی علیه السلام ', false, [ 3 ,7 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت امام محمد تقی علیه السلام ', false, [ 10 ,7 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت امام علی علیه السلام و روز پدر ', true, [ 13 ,7 ,0]);
        PCalendar::GhamariEvent()->Add(' وفات حضرت زینب سلام الله علیها ', false, [ 15 ,7 ,0]);
        PCalendar::GhamariEvent()->Add(' شهادت امام موسی کاظم علیه السلام ', false, [ 25 ,7 ,0]);
        PCalendar::GhamariEvent()->Add(' مبعث رسول اکرم ', true, [ 27 ,7 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت سالار شهیدان، امام حسین علیه السلام و روز پاسدار ', false, [ 3 ,8 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت ابوالفضل العباس علیه السلام و روز جانباز ', false, [ 4 ,8 ,0]);
        PCalendar::GhamariEvent()->Add(' ولادت امام زین العابدین علیه السلام ', false, [ 5 ,8 ,0]);
    }
}
