<!-- caption page START -->
<h1 class="text-center mt-5 mb-5">
    Страница для валидации разметки
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
            <a class="nav-link" href="department">Отделы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="phone-directory">Телефоный справочник</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="parse-html">Валидация разметки</a>
        </li>
    </ul>
</div>
<!-- Навигация END -->


<div class="container">
    <?php if (isset($vars['success'])): ?>
        <div class="alert alert-success">
            <?=$vars['success']; ?>
        </div>
    <?php elseif (isset($vars['unsuccess'])): ?>
        <div class="alert alert-danger">
            <?=$vars['unsuccess']; ?>
        </div>
    <?php elseif (isset($vars['other'])): ?>
        <div class="alert alert-warning">
            <?=$vars['other']; ?>
        </div>
    <?php endif; ?>

    <h4 class="mt-3 mb-3">
        Проверить разметку
    </h4>

    <form class="check-html" action="parse-html" method="POST" class="mb-5 mb-5">
        <div class="form-group">
            <input class="form-control" name="validator">
        </div>
        <button type="submit" class="btn btn-primary" name="check">Отправить</button>
    </form>
</div>

