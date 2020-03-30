<h1 class="text-center mt-5 mb-5">
    Главная страница
</h1>

<div class="container-fluid mb-5">
    <ul class="nav nav justify-content-center nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="/">Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tasks/one-task">Первый таск</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tasks/two-task">Второй таск</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="telephone-directory">Задача с телефонным справочником</a>
        </li>
    </ul>
</div>






<div class="w-75 m-auto">
    <h2>
        Получить катекорию по идентификатору:
    </h2>
    <form action="#" class="mb-5">
        <div class="form-group">
            <label for="category">Введите имя категории:</label>
            <input type="text" class="form-control" id="category">
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    <h2>
        Все существующие категории
    </h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Идентификатор категории: </th>
            <th>Имя: </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $item): ?>
        <tr>
            <td>
                <?=$item['category_id']; ?>
            </td>
            <td>
                <?=$item['name']; ?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

