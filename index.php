<!DOCTYPE html>
<html lang="en">
<head>
    <title>Тестовое задание для funpay.ru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
</head>
<body>

<div class="container">
    <h3>Обработка строки с данными от Яндекс Кошелька</h3>
    <textarea id="ymStr" cols="86" rows="5"></textarea><br>
    <button id="getParamsFromStr" class="btn btn-success">Получить значения</button>
    <p>Код подтверждения: <span id="confirmCode"></span></p>
    <p>Сумма: <span id="sum"></span></p>
    <p>Номер кошелька: <span id="keeper"></span></p>
    <hr>
</div>

<div class="container">
    <h3>Обработка URL с выводом в модальном окне</h3>
    <input type="url" id="url">
    <button id="handleUrl" class="btn btn-success">Обработать URL</button>
</div>
<!-- Modal -->
<div id="urlHandlerModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Содержимое запрошенного адреса</h4>
            </div>
            <div class="modal-body">
                <pre id="urlData"></pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- End Modal -->
</body>
</html>