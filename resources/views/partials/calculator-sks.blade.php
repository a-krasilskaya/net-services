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