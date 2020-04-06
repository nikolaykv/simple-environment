<!-- caption page START -->
<h1 class="text-center mt-5 mb-5">
    Страница для названия департамента
</h1>
<!-- caption page END -->

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
            <a class="nav-link active" href="department">Отделы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="phone-directory">Телефоный справочник</a>
        </li>
    </ul>
</div>
<!-- Навигация END -->

<div class="container">
    <h2 class="mt-5 text-center mb-5">
        Запрос на вывод названия департамента, в котором работает пять и более сотрудников
    </h2>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th class="text-center">Департамент:</th>
            <th class="text-center">Количество сотрудников:</th>
        </tr>
        </thead>
        <?php if ($vars): ?>
        <?php foreach ($vars as $item): ?>
        <tbody class="custom-tbody">
        <tr>
            <td class="text-center">
                <?=$item['name']; ?>
            </td>
            <td class="text-center">
                <?=$item['count-workers']; ?>
            </td>
        </tr>
        </tbody>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>