<h1 class="text-center mt-5 mb-5">
    Телефоный справочник
</h1>

<!-- Навигация START -->
<div class="container-fluid mb-5">
    <ul class="nav nav justify-content-center nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="/">Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="worker">Сотрудники</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="department">Сотрудники по отделам</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="phone-directory">Телефоный справочник</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="parse-html">Валидация разметки</a>
        </li>
    </ul>
</div>
<!-- Навигация END -->

<div class="container">
    <h2 class="mt-5 text-center mb-5">
        Предлагаемая стурктура таблиц (связь многоие ко многим)
    </h2>
    <p>
        С предлагаемой структурой таблиц можно озакомиться по пути:
        data/application/migrations, где миграция <span class="font-weight-bold">create_phone_table.php - создаёт таблицу "phone", у которой два поля:</span>
    </p>
    <ul>
        <li>
            id - int(10) unsigned autoincrement primary key
        </li>
        <li>
            phone_number - varchar(100)
        </li>
    </ul>
    <p>
        Миграция <span class="font-weight-bold">create_address_data.php - создаст таблицу, у которой поля</span>:</p>
    </p>
    <ul>
        <li>
            id - int(10) unsigned autoincrement primary key
        </li>
        <li>
            Остальные поля для ФИО varchar(100)
        </li>
    </ul>
    <p>
        Для этих двух миграций создана: <span
                class="font-weight-bold">create_link_phone_and_address_data_table.php</span> миграция, которая
        сгенерирует свзяующую таблицу для
        таблиц:
    </p>
    <ol>
        <li>
            phone
        </li>
        <li>
            address_data
        </li>
    </ol>
    <p>
        Структура таблицы <span class="font-weight-bold font-italic">link_phone_and_address_data</span>, следующая:
    </p>
    <ul>
        <li>
            PRIMARY address_data_id, phone_id - первичный ключ соединительной таблицы
        </li>
        <li>
            Два внешних ключа address_data_id и phone_id
        </li>
    </ul>
</div>

<div class="container">
    <h3 class="mt-5 text-center mb-5">
        В итоге:
    </h3>
    <p>
        Я реализую между этими двумя таблицами связь многие ко многом, при которой множественным записям из одной
        таблицы (A) могут соответствовать множественные записи из другой (B)
    </p>
    <p>
        Связь многие-ко-многим создается с помощью трех таблиц. Две таблицы – “источника” и одна соединительная таблица.
        Первичный ключ соединительной таблицы A_B – составной. Она состоит из двух полей, двух внешних ключей, которые
        ссылаются на первичные ключи таблиц A и B.
    </p>
</div>
