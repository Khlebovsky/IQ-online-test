# IQ-online-test

Примечания: <br>
1) Верстал при помощи Flexbox, калькулятор сделан при помощи таблицы. <br>
2) Для телефонов в шапке точного шрифта не нашел, поэтому использовал похожий. <br>
3) Не нашел хорошего способа разбивать числа в input[type=number] по разрядам (1 234 456). <br>
4) Добавил своебразный валидатор для даты и числовых полей. <br>
5) Стили бегунков не точь-в-точь как в макете, но старался сделать похожими. <br>
6) Тестировал в Chrome (Yandex Browser, Opera, Edge), Firefox. IE не определяет oninput у кнопок и отличаются стили бегунков (он ведь уже мертв, поэтому искать обходной путь не стал).
7) Логика рассчета итоговой суммы вклада такая: создаю массив с номерами месяцев (12, 24, 36, 48, 60 элементов), прохожу по этому массиву и каждый раз изменяю сумму по формуле summn = (summn-1 + summadd) + (summn-1 + summadd)daysn(percent / daysy).
8) Смешал нейминг. Не знаю, как принято в PHP и JS. Раньше использовал camelCase (Python, Java).

Буду рад любой обратной связи по заданию!
