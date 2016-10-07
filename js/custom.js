$(document).ready(function () {

    $("#getParamsFromStr").click(function () {
        var ymStr = $("#ymStr").val();
        $.post("ajax/yandex.php", {str: ymStr}, function (result) {
            $("#confirmCode").html(result.confirmCode);
            $("#sum").html(result.sum + "руб.");
            $("#keeper").html(result.keeper);
        }, 'json')
            .fail(function () {
                alert("Что-то пошло не так");
            });
    });

    $("#handleUrl").click(function () {
        var url = $("#url").val();
        $("#urlHandlerModal").modal();

        $.ajax(url, {
            success:function (result) {
                $("#urlData").html(result);
            },
            crossDomain: true,
            method: 'GET'
        })
            .fail(function () {
                $("#urlData").html(" Что-то пошло не так,<br> вероятнее всего URL не доступен<br> или Вы пытаетесь выполнить кроссдоменный запрос,<br> который по умолчанию запрещен");
            });
    });
});