$(document).ready(function () {

    var inProgress = false;
    var start = 4;

    $('.ajax-btn').click(function () {
        $.ajax({
            url: 'live-reload',
            method: 'POST',
            data: {'start': start},
            beforeSend: function () {
                inProgress = true;
            }
        }).done(function (data) {
            //console.log(data)
            data = jQuery.parseJSON(data);
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

    /*$('.form').submit(function(event) {
        var json;

        console.log(json)
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(result) {
                json = jQuery.parseJSON(result);
                if (json.url) {
                    window.location.href = json.url;
                } else {
                    alert(json.status + ' - ' + json.message);
                }
            },
        });
    });*/
});