<div class="calculator" data-calculator="sks">
    <h3 class="calculator__title">Калькулятор СКС</h3>

    <div class="calculator__fields-grid">
        <div class="calculator__field">
            <label>Количество рабочих мест</label>
            <input type="number" name="workstations" min="0" value="0" class="calculator__input">
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>Считайте как сумму сотрудников, плюс отдельно стоящая техника вроде принтеров и факсов, плюс небольшой запас на случай роста штата.</p>
            </details>
        </div>

        <div class="calculator__field">
            <label>Розеток на одно рабочее место</label>
            <input type="number" name="outlets_per_workstation" min="0" value="0" class="calculator__input">
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>Одна розетка — одно подключение компьютера или телефона (разъём RJ45). Обычно на рабочее место закладывают от 2 до 4 розеток.</p>
            </details>
        </div>

        <div class="calculator__field">
            <label>Категория сети</label>
            <select name="category" class="calculator__input">
                <option value="5e">Категория 5E</option>
                <option value="6">Категория 6</option>
            </select>
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>5E подходит для большинства офисов и даёт скорость до 100 Мбит/с. Категория 6 — до 1000 Мбит/с, вариант с запасом на будущее.</p>
            </details>
        </div>

        <div class="calculator__field">
            <label>Силовых розеток на рабочее место</label>
            <input type="number" name="power_outlets_per_workstation" min="0" value="0" class="calculator__input">
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>Питание для системного блока, монитора и другой техники — обычно от 2 до 4 розеток на место.</p>
            </details>
        </div>

        <div class="calculator__field">
            <label>Площадь помещения (м²)</label>
            <input type="number" name="room_area" min="0" value="0" class="calculator__input">
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>Общая площадь всех помещений офиса, где будет прокладываться сеть.</p>
            </details>
        </div>

        <div class="calculator__field">
            <label>Количество комнат</label>
            <input type="number" name="rooms_count" min="0" value="0" class="calculator__input">
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>Число отдельных помещений — чем их больше, тем сложнее и дольше разводка кабеля между ними.</p>
            </details>
        </div>

        <div class="calculator__field">
            <label>Размер коммуникационной стойки</label>
            <select name="rack_size" class="calculator__input">
                <option value="none">Не нужна</option>
                <option value="4_18u">4-18U</option>
                <option value="22_32u">22-32U</option>
                <option value="32_42u">32-42U</option>
            </select>
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>Стойка или шкаф нужны для размещения коммутатора и патч-панелей — единой точки, куда сходится вся сеть.</p>
            </details>
        </div>

        <div class="calculator__field">
            <label>Разборные потолки</label>
            <select name="drop_ceiling" class="calculator__input">
                <option value="no">Нет</option>
                <option value="yes">Да</option>
            </select>
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>Разборные потолки позволяют прокладывать кабель скрыто над ними, заметно снижая расход короба.</p>
            </details>
        </div>

        <div class="calculator__field">
            <label>Тип короба</label>
            <select name="conduit_type" class="calculator__input">
                <option value="105x50">Короб 105×50</option>
                <option value="32x16">Короб 32×16</option>
                <option value="hidden">Скрытый монтаж</option>
            </select>
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>105×50 — самый универсальный вариант, розетки крепятся прямо в короб. 32×16 — розетки на стене, кабель заходит сверху или снизу. Скрытый монтаж — кабель прячется в стены, часто самый бюджетный вариант при ремонте.</p>
            </details>
        </div>
    </div>

    <div class="calculator__result">
        Примерная стоимость: <strong class="calculator__price">—</strong> ₽
    </div>

    <p class="calculator__note">
        Оставьте заявку — при большом объёме работ рассчитаем индивидуальные условия.
    </p>

    <div class="calculator__contacts" style="display: none;">
        <input type="text" name="name" placeholder="Ваше имя" class="calculator__input">
        <input type="tel" name="phone" placeholder="Телефон" class="calculator__input">

        <label class="calculator__consent">
            <input type="checkbox" name="consent" class="calculator__consent-checkbox" required>
            Отправляя данные, вы соглашаетесь с <a href="{{ route('privacy-policy') }}" target="_blank">политикой обработки персональных данных</a>
        </label>

        <button type="button" class="btn btn-primary calculator__submit">Отправить заявку</button>
        <p class="calculator__error" style="display: none;">Пожалуйста, согласитесь с политикой обработки данных</p>
    </div>

    <div class="calculator__actions">
        <button type="button" class="btn btn-primary calculator__show-contacts">Оставить заявку</button>
        <button type="button" class="btn btn-secondary calculator__reset">Сбросить и посчитать заново</button>
    </div>

    <div class="calculator__success" style="display: none;">
        Спасибо! Заявка отправлена, мы скоро свяжемся с вами.
    </div>
</div>