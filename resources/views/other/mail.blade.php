<!DOCTYPE html>
<html>
<head>
    <title>Письмо от пользователя</title>
</head>
<body>

<h2>Имя пользователя: {!! $dataMail['name'] !!} </h2> <br>
Email: {{$dataMail['email']}} <br>
Телефон: {{$dataMail['phone']}} <br>
Кол-во человек: {{$dataMail['count']}} <br>
Месяц отдыха: {{$dataMail['month']}} <br>
Текст сообщения: {{$dataMail['comment']}}

</body>
</html>