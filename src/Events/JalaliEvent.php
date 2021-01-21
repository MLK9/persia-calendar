<?php

namespace MLK9\Events;

use MLK9\PCalendar;

class JalaliEvent
{
    public static function boot()
    {
        /*

        PCalendar::JalaliEvent()->Add('', false, [0,0,0]);

        */

        PCalendar::JalaliEvent()->Add(' جشن نوروز/جشن سال نو ', true, [1 ,1,0]);
        PCalendar::JalaliEvent()->Add(' عیدنوروز ', true, [2 ,1,0]);
        PCalendar::JalaliEvent()->Add(' عیدنوروز ', true, [3 ,1,0]);
        PCalendar::JalaliEvent()->Add(' عیدنوروز ', true, [4 ,1,0]);
        PCalendar::JalaliEvent()->Add(' روز امید، روز شادباش نویسی ', false, [6 ,1,0]);
        PCalendar::JalaliEvent()->Add(' زادروز آشو زرتشت، اَبَراِنسان بزرگ تاریخ ', false, [6 ,1,0]);
        PCalendar::JalaliEvent()->Add(' جشن آبانگاه ', false, [10 ,1,0]);
        PCalendar::JalaliEvent()->Add(' روز جمهوری اسلامی ', true, [12 ,1,0]);
        PCalendar::JalaliEvent()->Add(' جشن سیزده به در ', true, [13 ,1,0]);
        PCalendar::JalaliEvent()->Add(' سروش روز،جشن سروشگان ', false, [17 ,1,0]);
        PCalendar::JalaliEvent()->Add(' فروردین روز،جشن فروردینگان ', false, [19 ,1,0]);
        PCalendar::JalaliEvent()->Add(' روز دندانپزشک ', false, [23 ,1,0]);
        PCalendar::JalaliEvent()->Add(' روز بزرگداشت عطار نیشابوری ', false, [25 ,1,0]);
        PCalendar::JalaliEvent()->Add(' روز ارتش جمهوری اسلامی ایران ', false, [29 ,1,0]);
        PCalendar::JalaliEvent()->Add(' روز علوم آزمایشگاهی، زاد روز حکیم سید اسماعیل جرجانی ', false, [30 ,1,0]);
        PCalendar::JalaliEvent()->Add(' روز بزرگداشت سعدی ', false, [1 ,2,0]);
        PCalendar::JalaliEvent()->Add(' روزبزرگداشت شیخ بهایی؛ روزملی کارآفرینی ', false, [3 ,2,0]);
        PCalendar::JalaliEvent()->Add(' روزشوراها ', false, [9 ,2,0]);
        PCalendar::JalaliEvent()->Add(' روز جهانی روانشناس و مشاور ', false, [9 ,2,0]);
        PCalendar::JalaliEvent()->Add(' جشن چهلم نوروز؛ روز ملی خلیج فارس ', false, [10 ,2,0]);
        PCalendar::JalaliEvent()->Add(' شهادت استاد مرتضی مطهری، روزمعلم ', false, [12 ,2,0]);
        PCalendar::JalaliEvent()->Add(' جشن میانه بهار/جشن بهاربد؛ روز شیراز ', false, [15 ,2,0]);
        PCalendar::JalaliEvent()->Add(' روز اسناد ملی و میراث مکتوب ', false, [17 ,2,0]);
        PCalendar::JalaliEvent()->Add(' روز بزرگداشت فردوسی ', false, [25 ,2,0]);
        PCalendar::JalaliEvent()->Add(' روز ارتباطات و روابط عمومی ', false, [27 ,2,0]);
        PCalendar::JalaliEvent()->Add(' روز بزرگداشت حکیم عمر خیام ', false, [28 ,2,0]);
        PCalendar::JalaliEvent()->Add(' روز بهره وری و بهینه سازی مصرف ', false, [1 ,3,0]);
        PCalendar::JalaliEvent()->Add(' روز بزرگداشت ملاصدرا ', false, [1 ,3,0]);
        PCalendar::JalaliEvent()->Add(' فتح خرمشهر در عملیات بیت المقدس و روز مقاومت، ایثار و پیروزی ', false, [3 ,3,0]);
        PCalendar::JalaliEvent()->Add(' روز دزفول، روز مقاومت و پایداری ', false, [4 ,3,0]);
        PCalendar::JalaliEvent()->Add(' خرداد روز،جشن خردادگان ', false, [6 ,3,0]);
        PCalendar::JalaliEvent()->Add(' رحلت حضرت امام خمینی ', true, [14 ,3,0]);
        PCalendar::JalaliEvent()->Add(' قیام 15 خرداد ', true, [15 ,3,0]);
        PCalendar::JalaliEvent()->Add(' روز ملی گل وگیاه ', false, [25 ,3,0]);
        PCalendar::JalaliEvent()->Add(' روز جهاد کشاورزی ', false, [27 ,3,0]);
        PCalendar::JalaliEvent()->Add(' جشن آب پاشونک، جشن آغاز تابستان ', false, [1 ,4,0]);
        PCalendar::JalaliEvent()->Add(' روز اصناف ', false, [1 ,4,0]);
        PCalendar::JalaliEvent()->Add(' انفجار دفتر حزب جمهوری اسلامی و شهادت دکتر بهشتی و 72 نفر از اعضای حزب؛ روز قوه قضاییه ', false, [7 ,4,0]);
        PCalendar::JalaliEvent()->Add(' روز مبارزه با سلاح های شیمیایی و میکروبی ', false, [8 ,4,0]);
        PCalendar::JalaliEvent()->Add(' روز صنعت و معدن ', false, [10 ,4,0]);
        PCalendar::JalaliEvent()->Add(' شلیک به پرواز 655 ایران ایر توسط ناو وینسنس ', false, [12 ,4,0]);
        PCalendar::JalaliEvent()->Add(' تیر روز،جشن تیرگان ', false, [13 ,4,0]);
        PCalendar::JalaliEvent()->Add(' روز قلم ', false, [14 ,4,0]);
        PCalendar::JalaliEvent()->Add(' جشن خام خواری ', false, [15 ,4,0]);
        PCalendar::JalaliEvent()->Add(' روز بهزیستی و تامین اجتماعی ', false, [25 ,4,0]);
        PCalendar::JalaliEvent()->Add(' اعلام پذیرش قطعنامه 598 شورای امنیت از سوی ایران ', false, [27 ,4,0]);
        PCalendar::JalaliEvent()->Add(' روز ترویج آموزش های فنی و حرفه ای ', false, [6 ,5,0]);
        PCalendar::JalaliEvent()->Add(' مرداد روز،جشن مردادگان ', false, [7 ,5,0]);
        PCalendar::JalaliEvent()->Add(' روز بزرگداشت شیخ شهاب الدین سهروردی ', false, [8 ,5,0]);
        PCalendar::JalaliEvent()->Add(' جشن چله تابستان ', false, [10 ,5,0]);
        PCalendar::JalaliEvent()->Add(' صدور فرمان مشروطیت ', false, [14 ,5,0]);
        PCalendar::JalaliEvent()->Add(' روز خبرنگار ', false, [17 ,5,0]);
        PCalendar::JalaliEvent()->Add(' سالروز ورود آزادگانِ سرافراز به وطن ', false, [26 ,5,0]);
        PCalendar::JalaliEvent()->Add(' سالروز وقایع 28 مرداد و برکناری دکتر محمد مصدق ', false, [28 ,5,0]);
        PCalendar::JalaliEvent()->Add(' سالروز فاجعه آتش زدن سینما رکس آبادان ', false, [28 ,5,0]);
        PCalendar::JalaliEvent()->Add(' روز بزرگداشت ابوعلی سینا و روز پزشک ', false, [1 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' آغاز هفته دولت ', false, [2 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' زادروز داراب (کوروش) ', false, [4 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' شهریور روز،جشن شهریورگان ', false, [4 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' روز کارمند ', false, [4 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' روز بزرگداشت محمدبن زکریای رازی و روز داروساز ', false, [5 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' انفجار در دفتر نخست‌وزیری جمهوری اسلامی ایران، روز مبارزه با تروریسم ', false, [8 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' روزصنعت چاپ ', false, [11 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' روز بزرگداشت ابوریحان بیرونی ', false, [13 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' روز تعاون ', false, [13 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' قیام 17 شهریور ', false, [17 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' درگذشت آیت الله سید محمود طالقانی ', false, [19 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' روز سینما ', false, [21 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' روز شعر و ادب پارسی و روز بزرگداشت استاد شهریار ', false, [27 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' روز گفتگوی تمدنها ', false, [30 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' آغاز هفته دفاع مقدس ', false, [31 ,6 ,0]);
        PCalendar::JalaliEvent()->Add(' آغاز حمله مغول به ایران در پاییز 598 خورشیدی ', false, [1 ,7,0]);
        PCalendar::JalaliEvent()->Add(' روز آتش نشانی و ایمنی ', false, [7 ,7,0]);
        PCalendar::JalaliEvent()->Add(' سقوط هواپیمای حامل جمعی از فرماندهان جنگ (کلاهدوز، نامجو، فلاحی، فکوری، جهان آرا) در سال 1360 ', false, [7 ,7,0]);
        PCalendar::JalaliEvent()->Add(' روزبزرگداشت مولوی ', false, [8 ,7,0]);
        PCalendar::JalaliEvent()->Add(' مهر روز،جشن مهرگان ', false, [10 ,7,0]);
        PCalendar::JalaliEvent()->Add(' روز نیروی انتظامی ', false, [13 ,7,0]);
        PCalendar::JalaliEvent()->Add(' روز دامپزشکی ', false, [14 ,7,0]);
        PCalendar::JalaliEvent()->Add(' روز ملی کودک ', false, [16 ,7,0]);
        PCalendar::JalaliEvent()->Add(' روز بزرگداشت حافظ ', false, [20 ,7,0]);
        PCalendar::JalaliEvent()->Add(' جشن پیروزی کاوه و فریدون ', false, [21 ,7,0]);
        PCalendar::JalaliEvent()->Add(' روز تربیت بدنی و ورزش ', false, [26 ,7,0]);
        PCalendar::JalaliEvent()->Add(' روز ملی کوهنورد ', false, [29 ,7,0]);
        PCalendar::JalaliEvent()->Add(' روز آمار و برنامه ریزی ', false, [1 ,8,0]);
        PCalendar::JalaliEvent()->Add(' سالروز ورود کوروش بزرگ به بابل در سال 539 پیش از میلاد ', false, [7 ,8,0]);
        PCalendar::JalaliEvent()->Add(' روز نوجوان ', false, [8 ,8,0]);
        PCalendar::JalaliEvent()->Add(' آبان روز، جشن آبانگان ', false, [10 ,8,0]);
        PCalendar::JalaliEvent()->Add(' روز دانش آموز ', false, [13 ,8,0]);
        PCalendar::JalaliEvent()->Add(' روز فرهنگ عمومی ', false, [14 ,8,0]);
        PCalendar::JalaliEvent()->Add(' جشن میانه پاییز ', false, [15 ,8,0]);
        PCalendar::JalaliEvent()->Add(' روز ملی کیفیت ', false, [18 ,8,0]);
        PCalendar::JalaliEvent()->Add(' روز کتاب و کتابخوانی ', false, [24 ,8,0]);
        PCalendar::JalaliEvent()->Add(' آذر جشن ', false, [1 ,9,0]);
        PCalendar::JalaliEvent()->Add(' روز بسیج مستضعفان ', false, [5 ,9,0]);
        PCalendar::JalaliEvent()->Add(' روز نیروی دریایی ', false, [7 ,9,0]);
        PCalendar::JalaliEvent()->Add(' جشن آذرگان ،آذر روز ', false, [9 ,9,0]);
        PCalendar::JalaliEvent()->Add(' روز مجلس ', false, [10 ,9,0]);
        PCalendar::JalaliEvent()->Add(' روز بیمه ', false, [13 ,9,0]);
        PCalendar::JalaliEvent()->Add(' روز حسابدار ', false, [15 ,9,0]);
        PCalendar::JalaliEvent()->Add(' روز دانشجو ', false, [16 ,9,0]);
        PCalendar::JalaliEvent()->Add(' روز پژوهش ', false, [25 ,9,0]);
        PCalendar::JalaliEvent()->Add(' روز حمل و نقل ', false, [26 ,9,0]);
        PCalendar::JalaliEvent()->Add(' جشن شب یلدا ', false, [30 ,9,0]);
        PCalendar::JalaliEvent()->Add(' روز میلاد خورشید؛ جشن خرم روز، نخستین جشن دیگان ', false, [1 ,10,0]);
        PCalendar::JalaliEvent()->Add(' زمین لرزه ی بم [1382 خورشیدی] ', false, [5 ,10,0]);
        PCalendar::JalaliEvent()->Add(' سالروز شهادت آشو زرتشت، اَبَراِنسان بزرگ تاریخ ', false, [5 ,10,0]);
        PCalendar::JalaliEvent()->Add(' دی به آذر روز، دومین جشن دیگان ', false, [8 ,10,0]);
        PCalendar::JalaliEvent()->Add(' شهادت سردار حاج قاسم سلیمانی [1398 خورشیدی] ', false, [13 ,10,0]);
        PCalendar::JalaliEvent()->Add(' دی به مهر روز، سومین جشن دیگان ', false, [15 ,10,0]);
        PCalendar::JalaliEvent()->Add(' غرق شدن کشتی سانچی [1396 خورشیدی] ', false, [16 ,10,0]);
        PCalendar::JalaliEvent()->Add(' حادثه پرواز 752 هواپیمایی اوکراین [1398 خورشیدی] ', false, [18 ,10,0]);
        PCalendar::JalaliEvent()->Add(' درگذشت اکبر هاشمی رفسنجانی [1395 خورشیدی] ', false, [19 ,10,0]);
        PCalendar::JalaliEvent()->Add(' قتل امیرکبیر به دستور ناصرالدین شاه قاجار [1230 خورشیدی] ', false, [20 ,10,0]);
        PCalendar::JalaliEvent()->Add(' دی به دین روز، چهارمین جشن دیگان ', false, [23 ,10,0]);
        PCalendar::JalaliEvent()->Add(' آتش‌سوزی و فروریختن ساختمان پلاسکو [1395 خورشیدی] ', false, [30 ,10,0]);
        PCalendar::JalaliEvent()->Add(' زادروز فردوسی ', false, [1 ,11,0]);
        PCalendar::JalaliEvent()->Add(' بهمن روز، جشن بهمنگان ', false, [2 ,11,0]);
        PCalendar::JalaliEvent()->Add(' جشن نوسره ', false, [5 ,11,0]);
        PCalendar::JalaliEvent()->Add(' جشن سده ', false, [10 ,11,0]);
        PCalendar::JalaliEvent()->Add(' بازگشت امام خمینی (ره) به ایران ', false, [12 ,11,0]);
        PCalendar::JalaliEvent()->Add(' جشن میانه زمستان ', false, [15 ,11,0]);
        PCalendar::JalaliEvent()->Add(' روز نیروی هوایی ', false, [19 ,11,0]);
        PCalendar::JalaliEvent()->Add(' پیروزی انقلاب اسلامی ', true, [22 ,11,0]);
        PCalendar::JalaliEvent()->Add(' جشن سپندارمذگان و روز عشق ', false, [29 ,11,0]);
        PCalendar::JalaliEvent()->Add(' روز بزرگداشت زمین و بانوان ', false, [5 ,12,0]);
        PCalendar::JalaliEvent()->Add(' روز بزرگداشت خواجه نصیر الدین طوسی و روز مهندس ', false, [5 ,12,0]);
        PCalendar::JalaliEvent()->Add(' سالروز استقلال کانون وکلای دادگستری و روز وکیل مدافع ', false, [7 ,12,0]);
        PCalendar::JalaliEvent()->Add(' سالروز درگذشت علی اکبر دهخدا ', false, [7 ,12,0]);
        PCalendar::JalaliEvent()->Add(' روز درختکاری ', false, [15 ,12,0]);
        PCalendar::JalaliEvent()->Add(' پایان سرایش شاهنامه ', false, [25 ,12,0]);
        PCalendar::JalaliEvent()->Add(' روز ملی شدن صنعت نفت ایران ', true, [29 ,12,0]);
        PCalendar::JalaliEvent()->Add(' آخرین روز سال ', true, [30 ,12,0]);
    }
}
