<div class="calculator" data-calculator="vols">
    <h3 class="calculator__title">Калькулятор ВОЛС</h3>

    <div class="calculator__fields-grid calculator__fields-grid--single">
        <div class="calculator__field">
            <label>Длина кабельной трассы (м)</label>
            <input type="number" name="cable_length" min="0" value="0" class="calculator__input">
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>Общая протяжённость маршрута прокладки оптического кабеля — от этого напрямую зависит цена материала.</p>
            </details>
        </div>

        <div class="calculator__field">
            <label>Количество точек сварки</label>
            <input type="number" name="splice_count" min="0" value="0" class="calculator__input">
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>Сварка нужна в местах соединения отрезков кабеля или подключения оборудования.</p>
            </details>
        </div>

        <div class="calculator__field">
            <label>Количество волокон</label>
            <select name="fiber_count" class="calculator__input">
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="16">16</option>
                <option value="24">24</option>
                <option value="48">48</option>
            </select>
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>Больше волокон — выше пропускная способность и запас на будущее, но дороже сам кабель.</p>
            </details>
        </div>

        <div class="calculator__field">
            <label>Тип волокна</label>
            <select name="fiber_type" class="calculator__input">
                <option value="singlemode">Одномод</option>
                <option value="multimode">Многомод</option>
            </select>
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>Одномод — для больших расстояний между зданиями. Многомод — для коротких линий внутри одного здания.</p>
            </details>
        </div>

        <div class="calculator__field">
            <label>Тип кабеля</label>
            <select name="cable_type" class="calculator__input">
                <option value="outdoor">Внешний</option>
                <option value="indoor">Внутренний</option>
            </select>
            <details class="calculator__hint">
                <summary>Как определить?</summary>
                <p>Внешний кабель прокладывается на улице и устойчив к погоде. Внутренний — только для помещений.</p>
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