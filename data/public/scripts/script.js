$(document).ready(function () {

    var inProgress = false;
    var start = 4;

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
            console.log(data);
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
                start += 4;
            };
        });
    });
});