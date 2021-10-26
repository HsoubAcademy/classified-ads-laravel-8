<div dir="rtl">
    <h1>تطوير موقع إعلانات مبوبة</h1>
    <p>الشيفرة المصدرية لتطبيق موقع إعلانات مبوبة إصدار لارافل 8 من دورة "تطوير تطبيقات الويب باستخدام PHP" المقدمة من أكاديمية حسوب</p>

<a href="https://academy.hsoub.com/learn/php-web-application-development/">دورة تطوير تطبيقات الويب باستخدام  PHP</a>
</div>

 
<h1 dir="rtl"> خطوات تثبيت وتشغيل المشروع: </h1>

 <ul dir="rtl">
<li>تنفيذ الأمر composer install  لتنزيل الحزم الخاصة بالمشروع</li>

<li>إنشاء الملف .env  وتعيين قيم الإتصال بقاعدة البيانات</li>

<li>php artisan migrate --seed</li>

<li>php artisan storage:link</li>

<li>php artisan key:generate</li>

<li>php artisan serve</li>
</ul>



<h2 dir="rtl"> ضبط الإعدادات لتجربة خاصية التواصل مع المعلن </h2>
 

<h3 dir="rtl"> قم بضبط الإعدادات في ملفenv بالشكل التالي:</h3>

  <ul dir="rtl">

<li> سجل في الموقع https://mailtrap.io لمحاكاة إرسال البريد</li>

<li> انتقل إلى https://mailtrap.io/inboxes/ ثم Demo inbox</li>

<li> انسخ اسم المستخدم وكلمة المرور إلى ملف .env ، لتصبح الإعدادات كالتالي:</li>

MAIL_USERNAME=اسم المستخدم

MAIL_PASSWORD=كلمة المرور

</ul>
