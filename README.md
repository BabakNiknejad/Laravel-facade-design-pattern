<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Facade Design Pattern Tutorial
## آموزش الگوی طراحی Facade با پیاده سازی در لاراول

فساد یک کلاس مجزا است که وظایف همه کلاس های دیگر را پنهان می کند و یک رابط ساده برای استفاده از آنها ارائه می دهد.

الگوی طراحی Facade می توانند به شما کمک کنند تا کد خود را خواناتر و قابل نگهداری تر کنید،
آنها جزئیات پیچیده مربوط به استفاده از 
مجموعه ای از کلاس ها را پنهان می کنند و یک رابط ساده برای استفاده از آنها ارائه می دهند.

دیزاین پترن فساد (Facade Pattern) یک الگوی طراحی ساختاری (Structural) است که یک رابط ساده را برای
یک مجموعه پیچیده از کلاس ها یا توابع فراهم می کند.
هدف از این الگو این است که استفاده از سیستم پیچیده را آسان تر کند
و در عین حال پیچیدگی داخلی سیستم را پنهان کند.

## دیزاین پترن Facade مزایای زیادی دارد، از جمله:
- استفاده از Facade می تواند استفاده از سیستم پیچیده را آسان تر کند.
- الگوی طراحی Facade می تواند پیچیدگی سیستم پیچیده را پنهان کند و آن را قابل درک تر کند.
- الگوی طراحی Facade می تواند استفاده از سیستم پیچیده را ایمن تر کند.

الگوی طراحی Facade اجازه می دهد تا از سیستم بدون نیاز به دانستن جزئیات داخلی آن استفاده کنید.

### برای مثال
1. یک پوشه جدید به نام `Services` در پوشه پروژه خود ایجاد کنید.
2. یک کلاس جدید به نام `UserService` در پوشه `Services` ایجاد کنید.
3. در پوشه `provider` کلاس `AppServiceProvider` مند `()register` سرویس user-facade به کلاس UserService متصل می کنیم.
این بدان معناست که هر بار که کد لاراولی به user-facade اشاره
می کند، Laravel به طور خودکار سرویس UserService را بارگذاری و تزریق می کند.
```
  $this->app->bind('user-facade' , function () {
            return new UserService();
        });
```
4. یک پوشه جدید به نام `Facades` در پوشه پروژه خود ایجاد کنید.
5. یک کلاس جدید به نام `.UserFacade` در پوشه `Facades` ایجاد کنید.
```
<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class UserFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'user-facade';
    }
}
```
متد `()getFacadeAccessor` در کلاس `UserFacade` نام مستعار سرویسی را که `UserFacade` به آن اشاره می کند، برمی گرداند.
  در این مورد، نام مستعار سرویس `user-facade` است.

6. یک کنترلر به نام `UsersController` ایجاد کنید
7. یک مسیر جدید به نام `/users` به فایل `api.php` اضافه کنید.


حتما. در اینجا متن در قالب Markdown آورده شده است:


## استفاده از الگوی طراحی فساد

* یک برنامه وب می‌تواند از الگوی Facade برای ارائه رابط کاربری ساده‌ای برای یک پایگاه داده پیچیده استفاده کند.
* یک برنامه دسکتاپ می‌تواند از الگوی Facade برای ارائه رابط کاربری ساده‌ای برای یک سیستم فایل پیچیده استفاده کند.
* یک برنامه موبایل می‌تواند از الگوی Facade برای ارائه رابط کاربری ساده‌ای برای یک سرویس وب پیچیده استفاده کند.
* یک برنامه اداری می‌تواند از الگوی Facade برای ارائه رابط کاربری ساده‌ای برای یک سیستم حسابداری پیچیده استفاده کند.
* یک برنامه پزشکی می‌تواند از الگوی Facade برای ارائه رابط کاربری ساده‌ای برای یک سیستم پرونده بیمار پیچیده استفاده کند.
* یک برنامه مالی می‌تواند از الگوی Facade برای ارائه رابط کاربری ساده‌ای برای یک سیستم معاملات پیچیده استفاده کند.
* یک برنامه آموزشی می‌تواند از الگوی Facade برای ارائه رابط کاربری ساده‌ای برای یک سیستم مدیریت یادگیری پیچیده استفاده کند.
* یک برنامه بازاریابی می‌تواند از الگوی Facade برای ارائه رابط کاربری ساده‌ای برای یک سیستم اتوماسیون بازاریابی پیچیده استفاده کند.
* یک برنامه تجارت الکترونیک می‌تواند از الگوی Facade برای ارائه رابط کاربری ساده‌ای برای یک سیستم مدیریت سفارش پیچیده استفاده کند.





