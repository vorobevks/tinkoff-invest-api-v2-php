###Для чего используется параметр order_id метода [PostOrder](/investAPI/orders#postorder)?

Данный параметр используется в качестве ключа идемпотентности. Это значит, что многократный вызов метода
[PostOrder](/investAPI/orders#postorder) с одинаковым order_id не приведёт к выставлению более одного
торгового поручения. 
При вызове метода происходит проверка уникальности связки order_id и account_id, если указанная пара не найдена,
то создаётся новое торговое поручение, а если указанная связка уже существует (поручение с данным order_id по
данному номеру счёта было выставлено раньше), то метод [PostOrder](/investAPI/orders#postorder) вернёт статус
уже выставленного торгового поручения, т.е. отработает согласно логике метода [GetOrderState](/investAPI/orders#getorderstate).

###Можно ли увидеть ключ идемпотентности ([order_id](/investAPI/orders#postorderrequest)) в операциях, выставленных поручениях и т.п.?

В данный момент order_id используется исключительно как ключ идемпотентности и не "прокидывается" в другие сущности системы.
Есть планы в будущем отображать переданный ключ в операциях.

###Как долго хранится ключ идемпотентности (order_id) на стороне брокера?

Ключ хранится год, но пока никаких гарантий его сохранности дать не можем (механизм вероятно будет 
пересматриваться). Пока подразумевается полная уникальность переданного order_id в разрезе номера счёта (account_id).

###Что передавать в параметр quantity метода [PostOrder](/investAPI/orders#postorder)? Количество бумаг или количество лотов?

Метод [PostOrder](/investAPI/orders#postorder) принимает в качестве параметра quantity требуемое количество **лотов**.
Многие инструменты имеют [лотность](/investAPI/glossary#lot) отличную от единицы, это следует обязательно учитывать
при выставлении торговых поручений. 

###Как рассчитать полную стоимость сделки? 

Полная стоимость сделки включает в себя не только сумму операции покупки или продажи биржевого инструмента,
но и комиссии брокера, сервисные комиссии, гарантийное обеспечение для операций с фьючерсами и т.п. 
Рассчитать размеры комиссий можно из описания вашего тарифа, но нужно учитывать, что комиссии берутся за
сделки, а не за поручение, т.е. одно торговое поручение может рождать несколько сделок. Размер начальной
комиссии и фактической можно узнать в деталях торгового поручения (методом [GetOrderState](/investAPI/orders#getorderstate)).

Подробнее про расчёт стоимости сделок с фьючерсами и облигациями: 
[Цены облигаций и фьючерсов](/investAPI/faq#_5).

###Можно ли получить список уже исполненных торговых поручений? 

В данный момент метод [GetOrders](/investAPI/orders#getorders) возвращает только список активных торговых
поручений, т.е. поручений, которые ещё не исполнены и не отменены. Получить полный список уже исполненных
торговых поручений в данный момент невозможно. 

###Какие статусы торговых поручений бывают и что они значат? 

Описание статусной модели торговых поручений: [Статусная модель торговых поручений](/investAPI/head-orders#_2).

Некоторые нюансы исполнения поручений: [Алгоритм и особенности исполнения торговых поручений](/investAPI/orders_details/).

###Почему лимитная заявка исполнилась по другой цене? 

Лимитное торговое поручение исполняется либо по указанной при её выставлении цене, либо по цене "лучше"
для определённого направления сделки. Этот механизм на бирже называется Best Execution и подразумевает
исполнение торгового поручения по цене выгоднее, указанной в поручении. 

###Как перевести цену поручения в тип Quotation? 

Подробнее о работе с нестандартными типами данных: [Нестандартные типы данных TINKOFF INVEST API](/investAPI/faq_custom_types/)


###Как изменить выставленную заявку?

Для изменения выставленного торгового поручения в TINKOFF INVEST API добавлен метод [replaceOrder](/investAPI/orders#replaceorder).

Данный метод позволяет изменить существующую выставленную заявку, путем ее отмены и выставления новой заявки с измененными параметрами.

###Можно ли выставлять поручения по счету инвест копилки?    

Нет, при попытке выставления поручений по счету инвест копилки в методе [PostOrder](/investAPI/orders#postorder) в ответ
будет возвращена ошибка с "code":"40004" и "message": "Working with orders is not available with this account". 

###Необходимо ли включение маржинальной торговли для торгов на срочном рынке?

Да, для выставления поручений на срочном рынке, необходимо включить маржинальную торговлю в приложении и терминале.
Иначе будет возвращена ошибка 30051 из [Списка кодов ошибок](https://tinkoff.github.io/investAPI/errors/)
