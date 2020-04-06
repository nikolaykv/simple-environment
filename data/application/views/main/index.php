
<!-- caption page START -->
<h1 class="text-center mt-5 mb-5">
    Главная страница
</h1>
<!-- caption page END -->

<!-- Навигация START -->
<div class="container-fluid mb-5">
    <ul class="nav nav justify-content-center nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="/">Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="task/worker">Сотрудники</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="task/department">Сотрудники по отделам</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="task/phone-directory">Телефоный справочник</a>
        </li>
    </ul>
</div>
<!-- Навигация END -->

<!-- Форма и вывод категорий START -->
<div class="ml-5 mr-5">
    <h2>
        Получить катекорию по идентификатору:
    </h2>

    <form class="form" action="api/get-ajax-category-by-id" method="POST" class="mb-5">
        <div class="form-group">
            <label for="category">Введите имя категории:</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
        <button type="submit" class="btn btn-primary" name="enter">Отправить</button>
    </form>

    <div class="mt-5 mb-5 result">
        <h2>
            Ваш результат:
        </h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Идентификатор категории: </th>
                <th>Имя: </th>
                <th>Описание: </th>
            </tr>
            </thead>
            <tbody class="custom-tbody-result">
            </tbody>
        </table>
    </div>

   <h2 class="mt-5">
        Все существующие категории
    </h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Идентификатор категории: </th>
            <th>Имя: </th>
            <th>Описание: </th>
        </tr>
        </thead>
        <tbody class="custom-tbody">
        <?php if ($categories): ?>
        <?php foreach ($categories as $item): ?>
        <tr>
            <td>
                <?=$item['category-id']; ?>
            </td>
            <td>
                <?=$item['name']; ?>
            </td>
            <td>
                <?=$item['description']; ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
   <button type="button" class="mb-5 btn btn-primary ajax-btn">Показать еще</button>
</div>
<!-- Форма и вывод категорий END -->
