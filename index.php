<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="favicon.png" type="image/png">

    <title>WORLD BANK</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

    <script src="script/script.js"></script>

</head>

<body>

    <div class="wrapper">

        <div class="header">
            <a href="/" class="logo-link"><img src="img/header.png" alt="WORLD BANK"></a>
            <div class="phone-numbers">
                <a href="tel:88001005005">8-800-100-5005</a>
                <a href="tel:+73452522000">+7 (3452) 522-000</a>
            </div>
        </div>

        <div class="menu">
            <a href="#">
                <div class="link">Кредитные карты</div>
            </a>
            <a href="/" class="active">
                <div class="link">Вклады</div>
            </a>
            <a href="#">
                <div class="link">Дебетовая карта</div>
            </a>
            <a href="#">
                <div class="link">Страхование</div>
            </a>
            <a href="#">
                <div class="link">Друзья</div>
            </a>
            <a href="#">
                <div class="link">Интернет-банк</div>
            </a>
        </div>

        <div class="navigation">
            <a href="#">Главная</a> - <a href="/">Вклады</a> - Калькулятор
        </div>

        <div class="calc">
            <h1>Калькулятор</h1>

            <div class="calc-form">
                <form action="" method="POST" id="calc-form">
                    <table>

                        <tr>
                            <td>Дата оформления вклада</td>
                            <td><input type="text" name="date" id="date" value="дд.мм.гггг" required></td>
                            <td><strong id="valid-date" class="valid-date"></strong></td>
                        </tr>

                        <tr>
                            <td>Сумма вклада</td>
                            <td><input type="number" name="sum" id="sum" min="1000" max="3000000" value="10000" oninput="changeSumRange(); checkVal(this)" required></td>
                            <td>
                                <input type="range" class="range" name="sum_range" id="sum_range" value="1000000" min="1000" max="3000000" oninput="changeSum()">
                                <span>
                                    <small>1 тыс. руб.</small>
                                    <small>3 000 000</small>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>Срок вклада</td>
                            <td>
                                <select name="time" id="time" required>
                                    <option>1 год</option>
                                    <option>2 года</option>
                                    <option>3 года</option>
                                    <option>4 года</option>
                                    <option>5 лет</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Пополнение вклада</td>
                            <td>
                                <label><input type="radio" name="add_money" id="add_money_0" value="0" oninput="lockAddFields(this.value)" checked>Нет</label>
                                <label><input type="radio" name="add_money" id="add_money_1" value="1" oninput="lockAddFields(this.value)">Да</label>
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Сумма пополнения вклада</td>
                            <td><input type="number" name="sum_add" class="disabled" id="sum_add" min="1000" max="3000000" value="10000" oninput="changeSumAddRange(); checkVal(this)" disabled></td>
                            <td>
                                <input type="range" class="range disabled" name="sum_add_range" id="sum_add_range" value="1000000" min="1000" max="3000000" oninput="changeSumAdd()" disabled>
                                <span>
                                    <small>1 тыс. руб.</small>
                                    <small>3 000 000</small>
                                </span>
                            </td>
                        </tr>

                    </table>

                    <div class="result">
                        <input type="submit" value="Рассчитать" id="submit">
                        <span>Результат: <strong id="calc-result"></strong></span>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <div class="footer">
        <a href="#">Кредитные карты</a>
        <a href="/" class="active">Вклады</a>
        <a href="#">Дебетовая карта</a>
        <a href="#">Страхование</a>
        <a href="#">Друзья</a>
        <a href="#">Интернет-банк</a>
    </div>

    <script>
        function lockAddFields(value) {
            var addSumField = document.getElementById('sum_add');
            var addSumRange = document.getElementById('sum_add_range');
            if (value == 0) {
                addSumField.setAttribute("disabled", "disabled");
                addSumField.classList.add("disabled");
                addSumRange.setAttribute("disabled", "disabled");
                addSumRange.classList.add("disabled");
            }
            if (value == 1) {
                addSumField.removeAttribute("disabled");
                addSumField.classList.remove("disabled");
                addSumRange.removeAttribute("disabled");
                addSumRange.classList.remove("disabled");
            }
        }

        function checkVal(elem) {
            var value = elem.value;
        }

        function changeSum() {
            var range = document.getElementById('sum_range');
            var sum = document.getElementById('sum');
            sum.value = range.value;
        }

        function changeSumRange() {
            var range = document.getElementById('sum_range');
            var sum = document.getElementById('sum');
            range.value = sum.value;
        }

        function changeSumAdd() {
            var range = document.getElementById('sum_add_range');
            var sum = document.getElementById('sum_add');
            sum.value = range.value;
        }

        function changeSumAddRange() {
            var range = document.getElementById('sum_add_range');
            var sum = document.getElementById('sum_add');
            range.value = sum.value;
        }
    </script>

</body>

</html>