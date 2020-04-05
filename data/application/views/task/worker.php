<h1 class="text-center mt-5 mb-5">
    Страница для вывода идентификаторов сотрудников по отделу
</h1>

<!-- Навигация START -->
<div class="container-fluid mb-5">
    <ul class="nav nav justify-content-center nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="/">Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="worker">Сотрудники</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="department">Отделы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="phone-directory">Телефонная книга</a>
        </li>
    </ul>
</div>
<!-- Навигация END -->

<div class="container">
    <h2 class="mt-5 text-center mb-5">
        Запрос на вывод название отдела и id сотрудников, работающих в данном отделе
    </h2>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th class="text-center">Департамент:</th>
            <th class="text-center">Идентификатор сотрудников:</th>
            <th class="text-center">Итого:</th>
        </tr>
        </thead>
       <tbody class="custom-tbody">
        <?php if ($vars): ?>
        <?php foreach ($vars as $key => $value): ?>
        <tr>
            <td class="text-center">
                <?=$key; ?>
            </td>
            <td class="text-center">
               <?=implode(", ", $value); ?>
            </td>
            <td class="text-center">
                <?=count($value); ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>