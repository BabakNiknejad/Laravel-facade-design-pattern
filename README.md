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

الگوی طراحی Facade ها می توانند به شما کمک کنند تا کد خود را خواناتر و قابل نگهداری تر کنید.
آنها جزئیات پیچیده مربوط به استفاده از مجموعه ای از کلاس ها را پنهان می کنند و یک رابط ساده برای استفاده از آنها ارائه می دهند.
دیزاین پترن فساد (Facade Pattern) یک الگوی طراحی ساختاری (Structural) است که یک رابط ساده را برای
یک مجموعه پیچیده از کلاس ها یا توابع فراهم می کند.
هدف از این الگو این است که استفاده از سیستم پیچیده را آسان تر کند
و در عین حال پیچیدگی داخلی سیستم را پنهان کند.
دیزاین پترن Facade مزایای زیادی دارد، از جمله:
- استفاده از Facade می تواند استفاده از سیستم پیچیده را آسان تر کند.
- الگوی طراحی Facade می تواند پیچیدگی سیستم پیچیده را پنهان کند و آن را قابل درک تر کند.
- الگوی طراحی Facade می تواند استفاده از سیستم پیچیده را ایمن تر کند.

- الگوی طراحی Facade اجازه می دهد تا از سیستم بدون نیاز به دانستن جزئیات داخلی آن استفاده کنید.
