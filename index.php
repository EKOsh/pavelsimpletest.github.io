<html xmlns="http://www.w3.org/1999/html" lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="description " content="Персональный сайт популярного фотографа Еремея Семенова созданный для людей нуждающихся в фотографиях с мероприятий">
    <meta name="keywords" content="фотограф Москва Moscow свадебная съемка детская съемка love story photo, фото студийная съемка, art photo ">

    <title>Фотограф Еремей Семенов</title>
    <link rel="stylesheet" href="/css/Top.css">
    <link rel="stylesheet" href="/css/Aboutme.css">
    <link rel="stylesheet" href="/slider/slider.css" type="text/css"/>
    <script src='ajax.js'></script>
</head>

<body onload="update('main.php')">

<div id="Main">

    <div id = "Top">
        <div id="LogoTop">
            <img src="/foto.png" style="margin-top: 15px;margin-left: 15px;float: left;">
            <span id="LeftTextTop">Фотограф</span>
            <span id="LeftTextTop1">Еремей Семенов</span>
        </div>
        <div id="InfaTop">
            <div id="Phonenumber">
                    8 (913) 431 26 02
            </div>
            <div id ="socceti">

                <a href="https://vk.com/bezneimatc"><img src="fb.png" width="47px" height="47px"></a>
                <a href="https://vk.com/bezneimatc"><img src="vklogo.png" width="47px" height="47px" ></a>
                <a href="https://vk.com/bezneimatc"><img src="twitter.png" width="47px" height="47px"></a>
            </div>
        </div>
    </div>

    <div id="Menu">
        <div id="MenuButtons" name="About" onclick="alert('Тут будет вылезать окно с инпутами для того чтобы написать на емаил')">Связаться</div>
        <div id="MenuButtons1" name="Services" value="window.scrollBy(0,900)" onclick="window.scrollBy(0,900)">Услуги</div>
        <div id="MenuButtons2" name="Portfolio" value="window.scrollBy(0,1700)" onclick="window.scrollBy(0,1700)">Портфолио</div>
        <div id="MenuButtons3" name="Contacts" value="window.scrollBy(0,1920)" onclick="window.scrollBy(0,1920)">Контакты</div>
    </div>

    <div id="Undermenu">

    </div>
<div style="float: right; margin-right: 1%;">
    <img src="Up.png" width="64" height="64"  onclick="up();" style="float: right">
</div>



</div>
<script>
    var t;
    function up()
    {
        var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
        if(top > 0)
        {
            window.scrollBy(0,-100);
            t = setTimeout('up()',20);
        }
        else
            clearTimeout(t);
        return false;
    }
</script>
</body>

</html>