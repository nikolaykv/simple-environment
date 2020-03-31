$(document).ready(function () {

    var inProgress = false;
    var start = 3;

    $('.ajax-btn').click(function () {
        $.ajax({
            url: 'api/index',
            method: 'POST',
            data: {'start': start},
            cache: false,
            beforeSend: function () {
                inProgress = true;
            }
        }).done(function (data) {
            data = JSON.parse(data);
            //console.log(data);
            if (data.length > 0) {
                $.each(data, function (index, data) {
                    $('.custom-tbody').append(
                        '<tr>' +
                        '<td>' + data.category_id + '</td>' +
                        '<td>' + data.name + '</td>' +
                        '<td>' + data.description + '</td>' +
                        '</tr>'
                    );
                });
                inProgress = false;
                start += 3;
            };
        });
    });

//====================================================//
    $('.form').submit(function(event) {
        var json;
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(result) {
                // console.log(result)
                // Парсим пришедший массив в JSON
                json = JSON.parse(result);
                // Проверим не пустая ли выборка
                if (json.hasOwnProperty('status') == true) {
                    alert('Категории с указанным идентификатором не существует!!!');
                } else {
                    $.each(json, function (index, data) {
                        $('.custom-tbody-result').append(
                            '<tr>' +
                            '<td>' + data.category_id + '</td>' +
                            '<td>' + data.name + '</td>' +
                            '<td>' + data.description + '</td>' +
                            '</tr>'
                        );
                    });
                }
            },
        });
    });
});