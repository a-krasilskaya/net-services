<div class="calculator" data-calculator="sks">
    <div class="calculator__field">
        <label>Количество рабочих мест</label>
        <input type="number" name="workstations" min="1" value="1" class="calculator__input">
    </div>

    <div class="calculator__field">
        <label>Розеток на одно рабочее место</label>
        <input type="number" name="outlets_per_workstation" min="1" value="1" class="calculator__input">
    </div>

    <div class="calculator__field">
        <label>Категория сети</label>
        <select name="category" class="calculator__input">
            <option value="5e">Категория 5E</option>
            <option value="6">Категория 6</option>
        </select>
    </div>

    <div class="calculator__field">
        <label>Силовых розеток на рабочее место</label>
        <input type="number" name="power_outlets_per_workstation" min="0" value="2" class="calculator__input">
    </div>

    <div class="calculator__field">
        <label>Площадь помещения (м²)</label>
        <input type="number" name="room_area" min="0" value="50" class="calculator__input">
    </div>

    <div class="calculator__field">
        <label>Количество комнат</label>
        <input type="number" name="rooms_count" min="1" value="1" class="calculator__input">
    </div>

    <div class="calculator__field">
        <label>Размер коммуникационной стойки</label>
        <select name="rack_size" class="calculator__input">
            <option value="none">Не нужна</option>
            <option value="4_18u">4-18U</option>
            <option value="22_32u">22-32U</option>
            <option value="32_42u">32-42U</option>
        </select>
    </div>

    <div class="calculator__field">
        <label>Разборные потолки</label>
        <select name="drop_ceiling" class="calculator__input">
            <option value="no">Нет</option>
            <option value="yes">Да</option>
        </select>
    </div>

    <div class="calculator__field">
        <label>Тип короба</label>
        <select name="conduit_type" class="calculator__input">
            <option value="105x50">Короб 105×50</option>
            <option value="32x16">Короб 32×16</option>
            <option value="hidden">Скрытый монтаж</option>
        </select>
    </div>

    <div class="calculator__result">
        Примерная стоимость: <strong class="calculator__price">—</strong> ₽
    </div>

    <div class="calculator__contacts" style="display: none;">
        <input type="text" name="name" placeholder="Ваше имя" class="calculator__input">
        <input type="tel" name="phone" placeholder="Телефон" class="calculator__input">
        <button type="button" class="btn btn-primary calculator__submit">Отправить заявку</button>
    </div>

    <button type="button" class="btn btn-primary calculator__show-contacts">Оставить заявку</button>

    <div class="calculator__success" style="display: none;">
        Спасибо! Заявка отправлена, мы скоро свяжемся с вами.
    </div>
</div>