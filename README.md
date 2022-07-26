<p align="center"><img src="./readme_assets/favicon.svg" width="64" height="64"></p>
<h1 align="center">Мебельная Фабрика Слон | Дизайн кухни онлайн</h1>

## Расположение

Страница лендинга расположена на домене <a href="https://mf-slon.ru" target="_blank
">mf-slon.ru: <a href="https://mf-slon.ru/design-online" target="_blank
">орловская</a> и <a href="https://mf-slon.ru/design-online-msk" target="_blank
">московская</a> версии.

## Описание задачи

Необходимо по заданному дизайну, который можно найти в папке design в корне данного репозитория, создать лендинг и разместить его на домене. Эта посадочная страница посвящена, в основном, отдельной услуге компании - онлайн проектированию кухни и призвана собирать данные об заинтересовавшихся клиентах посредством контактных форм. Информация, которую оставляют на сайте потенциальные заказчики, передаётся в CRM Bitrix и в почтовые ящики компании.
Часть блоков и функционала напрямую заимствована с другого лендинга компании. Некоторые из них были выполнены другим разработчиком:
- блок с материалами. Адаптирован с учетом дизайна и замечаний заказчика;
- квиз. Перенесён без изменений;
- php-скрипт отправки писем. Рефакторизован с целью улучшения читаемости и поддержки;
- прикрепление файла к письму;
- ajax-отправка форм.

Поскольку компания содержит офисы в Орле и Москве, то следует предусмотреть две версии лендинга, отличающиеся контактами и названием города в отправляемых на почту и CRM Bitrix контактных формах. Сделать аналогично главному лендингу компании, то есть через отдельные страницы.
Допускаются незначительные отхождения от дизайна.

## Комментарии к лендингу

Выполнена адаптивная вёрстка с использованием <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" target="_blank
">Bootstrap 5.0</a> и, как правило, с соблюдением сетки данного фреймворка. Изображения сжаты до оптимального соотношения качество/вес. Файлы стилей и скриптов минифицированы. Добавлена маска для полей ввода телефона, а также js-валидация форм (нельзя отправить форму, пока не заполнены необходимые поля). Использован плагин <a href="https://github.com/aFarkas/lazysizes" target="_blank">lazysizes</a> для ленивой загрузки изображений. Подключена Яндекс-метрика. Было уделено внимание валидности и доступности вёрстки.
Слайдеры были выполнены с помощью плагина <a href="https://kenwheeler.github.io/slick/" target="_blank
">Slick Slider</a>.
Часть js-кода написана на <a href="https://jquery.com/" target="_blank
">JQuery</a>.
Отправка писем реализована средствами <a href="https://github.com/PHPMailer/PHPMailer" target="_blank
">PHPMailer</a>.

Некоторые изменение, требуемые заказчиком, не были отражены в дизайне. В частности, выбор города был убран, хотя на дизайне и в одной из версии страницы он присутствовал.

## Комментарии к развертыванию

Данный сайт можно развернуть на любом сервере, поддерживающим PhP 5.7 и выше. Особых настроек производить не нужно.
Вся конфиденциальная информация, в том числе идентификационные данные Bitrix, почтовые ящики, настройки метрики не присутствуют в репозитории. Они подключаются специальными файлами, которые игнорируются git. Поэтому после развертывания данного лендинга контактные формы работать не будут.

## Скриншоты

Открыта всплывающая панель справа (Desktop 1920x1080 px):
<img src="./readme_assets/screen_panel.png" width="100%">

Открыто меню (Mobile 360x740 px):
<p align="center"><img src="./readme_assets/screen_menu_mobile.png" width="360"></p>

Орловская и московская версии лендинга (Desktop 1920px):
<img src="./readme_assets/orel_screen_fullsize.png" width="100%">
<img src="./readme_assets/moscow_screen_fullsize.png" width="100%">

Орловская и московская версии лендинга (Mobile 360px):
<p align="center"><img src="./readme_assets/orel_screen_fullsize_mobile.png" width="360"></p>
<p align="center"><img src="./readme_assets/moscow_screen_fullsize_mobile.png" width="360"></p>
