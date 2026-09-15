document.addEventListener('DOMContentLoaded', function () {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
    const calculators = document.querySelectorAll('.calculator');

    calculators.forEach(function (calc) {
        const type = calc.dataset.calculator;
        const priceEl = calc.querySelector('.calculator__price');
        const inputs = calc.querySelectorAll('.calculator__input');
        const showContactsBtn = calc.querySelector('.calculator__show-contacts');
        const contactsBlock = calc.querySelector('.calculator__contacts');
        const submitBtn = calc.querySelector('.calculator__submit');
        const successBlock = calc.querySelector('.calculator__success');

        let debounceTimer;

        function collectData() {
            const data = { calculator: type };
            inputs.forEach(function (input) {
                data[input.name] = input.value;
            });
            return data;
        }

        function estimate() {
            fetch('/calculator/estimate', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify(collectData()),
            })
                .then(function (response) { return response.json(); })
                .then(function (result) {
                    priceEl.textContent = new Intl.NumberFormat('ru-RU').format(result.price);
                });
        }

        inputs.forEach(function (input) {
            input.addEventListener('input', function () {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(estimate, 400);
            });
            input.addEventListener('change', estimate);
        });

        estimate();

        showContactsBtn.addEventListener('click', function () {
            contactsBlock.style.display = 'block';
            showContactsBtn.style.display = 'none';
        });

        submitBtn.addEventListener('click', function () {
            const data = collectData();
            data.name = calc.querySelector('input[name="name"]').value;
            data.phone = calc.querySelector('input[name="phone"]').value;

            fetch('/calculator/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify(data),
            })
                .then(function (response) { return response.json(); })
                .then(function () {
                    contactsBlock.style.display = 'none';
                    successBlock.style.display = 'block';
                });
        });
    });
});