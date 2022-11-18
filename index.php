<?php
$bindKeys = [
    '1' => [
        'label' => 'Вверх',
        'name' => 'up',
        'class' => 'bind-control',
        'color' => '#04A08B',
        'value' => '87',
        'default' => '87',
    ],
    '2' => [
        'label' => 'Вниз',
        'name' => 'down',
        'class' => 'bind-control',
        'color' => '#FF9920',
        'value' => '83',
        'default' => '83',
    ],
    '3' => [
        'label' => 'Налево',
        'name' => 'left',
        'class' => 'bind-control',
        'color' => '#00BAFF',
        'value' => '65',
        'default' => '65',
    ],
    '4' => [
        'label' => 'Направо',
        'name' => 'right',
        'class' => 'bind-control',
        'color' => '#FF562F',
        'value' => '68',
        'default' => '68',
    ],
    '5' => [
        'label' => 'Прыжок',
        'name' => 'jump',
        'class' => 'bind-control',
        'color' => '#6e6e70',
        'value' => '32',
        'default' => '32',
    ],
    '6' => [
        'label' => 'Присесть',
        'name' => 'sit',
        'class' => 'bind-control',
        'color' => '#b944e9',
        'value' => '17',
        'default' => '17',
    ],
    '7' => [
        'label' => 'Пауза',
        'name' => 'pause',
        'class' => 'bind-control',
        'color' => '#31249f',
        'value' => '80',
        'default' => '80',
    ],
];
CONST CSS_URL = '/style/main.css';
?>
<link rel="stylesheet" href="<?= CSS_URL ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="row container-bind">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="box-title">Настройка горячих клавиш для сортировки фраз</h4>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST">
                            <input type="hidden" name="actionBinds" value="saveBinds">
                            <?php foreach($bindKeys as $bind) { ?>
                                <div class="form-group form-bind-key my-3">
                                    <input type="text" class="<?= $bind['class'] ?> my-3" name="<?= $bind['name'] ?>" value="<?= $bind['value'] ?>" style="background-color: <?= $bind['color'] ?>">
                                    <div class="div-<?= $bind['class'] ?>" style="background-color: <?= $bind['color'] ?>"></div>
                                    <label class="bind-label"><?= $bind['label'] ?></label>
                                </div>
                            <?php } ?>
                            <div class="form-group form-button-group my-3">
                                <input type="submit" class="btn btn-success" value="Сохранить">
                                <div>
                                    <div id="btn-default" class="btn btn-dark">По умолчанию</div>
                                    <div id="btn-reset" class="btn btn-secondary">Сбросить всё</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="keyboard-bg">
                <div class="keyboard-title"></div>
                <div class="keyboard">
                    <ul class="keyboard-row keyboard-row-0">
                        <li class="keyboard-li pinky" id="key-223" style="font-family: cursive;">~</li>
                        <li class="keyboard-li pinky" id="key-49">1</li>
                        <li class="keyboard-li ring" id="key-50">2</li>
                        <li class="keyboard-li middle" id="key-51">3</li>
                        <li class="keyboard-li pointer1st" id="key-52">4</li>
                        <li class="keyboard-li pointer2nd" id="key-53">5</li>
                        <li class="keyboard-li pointer2nd" id="key-54">6</li>
                        <li class="keyboard-li pointer1st" id="key-55">7</li>
                        <li class="keyboard-li middle" id="key-56">8</li>
                        <li class="keyboard-li ring" id="key-57">9</li>
                        <li class="keyboard-li pinky" id="key-48">0</li>
                        <li class="keyboard-li pinky" id="key-189">-</li>
                        <li class="keyboard-li pinky" id="key-187">+</li>
                        <li class="keyboard-li pinky back" id="key-8">BACK</li>
                    </ul>
                    <ul class="keyboard-row keyboard-row-1">
                        <li class="keyboard-li pinky tab" id="key-9">TAB</li>
                        <li class="keyboard-li pinky" id="key-81">Q</li>
                        <li class="keyboard-li ring" id="key-87">W</li>
                        <li class="keyboard-li middle" id="key-69">E</li>
                        <li class="keyboard-li pointer1st" id="key-82">R</li>
                        <li class="keyboard-li pointer2nd" id="key-84">T</li>
                        <li class="keyboard-li pointer2nd" id="key-89">Y</li>
                        <li class="keyboard-li pointer1st" id="key-85">U</li>
                        <li class="keyboard-li middle" id="key-73">I</li>
                        <li class="keyboard-li ring" id="key-79">O</li>
                        <li class="keyboard-li pinky" id="key-80">P</li>
                        <li class="keyboard-li pinky" id="key-219">[</li>
                        <li class="keyboard-li pinky" id="key-221">]</li>
                        <li class="keyboard-li pinky" id="key-220">\</li>
                    </ul>
                    <ul class="keyboard-row keyboard-row-2">
                        <li class="keyboard-li pinky caps" id="key-20">CAPS</li>
                        <li class="keyboard-li pinky" id="key-65">A</li>
                        <li class="keyboard-li ring" id="key-83">S</li>
                        <li class="keyboard-li middle" id="key-68">D</li>
                        <li class="keyboard-li pointer1st" id="key-70">F</li>
                        <li class="keyboard-li pointer2nd" id="key-71">G</li>
                        <li class="keyboard-li pointer2nd" id="key-72">H</li>
                        <li class="keyboard-li pointer1st" id="key-74">J</li>
                        <li class="keyboard-li middle" id="key-75">K</li>
                        <li class="keyboard-li ring" id="key-76">L</li>
                        <li class="keyboard-li pinky" id="key-186">:</li>
                        <li class="keyboard-li pinky" id="key-222">''</li>
                        <li class="keyboard-li pinky enter" id="key-13">ENTER</li>
                    </ul>
                    <ul class="keyboard-row keyboard-row-3">
                        <li class="keyboard-li pinky left-shift" id="key-16">SHIFT</li>
                        <li class="keyboard-li pinky" id="key-90">Z</li>
                        <li class="keyboard-li ring" id="key-88">X</li>
                        <li class="keyboard-li middle" id="key-67">C</li>
                        <li class="keyboard-li pointer1st" id="key-86">V</li>
                        <li class="keyboard-li pointer2nd" id="key-66">B</li>
                        <li class="keyboard-li pointer2nd" id="key-78">N</li>
                        <li class="keyboard-li pointer1st" id="key-77">M</li>
                        <li class="keyboard-li middle" id="key-188">,</li>
                        <li class="keyboard-li ring" id="key-190">.</li>
                        <li class="keyboard-li pinky" id="key-191">;</li>
                        <li class="keyboard-li pinky right-shift" id="key-16">SHIFT</li>
                    </ul>
                    <ul class="keyboard-row keyboard-row-4">
                        <li class="keyboard-li pinky left-ctrl" id="key-17">Ctrl</li>
                        <li class="keyboard-li pinky win" id="key-91">Win</li>
                        <li class="keyboard-li ring" id="key-18">Alt</li>
                        <li class="keyboard-li middle space" id="key-32">Space</li>
                        <li class="keyboard-li ring alt" id="key-18">Alt</li>
                        <li class="keyboard-li pinky win" id="key-91">Win</li>
                        <li class="keyboard-li pinky right-click-key" id="key-93">≡</li>
                        <li class="keyboard-li pinky right-control" id="key-17">Ctrl</li>
                    </ul>
                </div>
                <div class="keyboard-buttons">
                    <button class="keyboard-button-submit">Сохранить</button>
                    <button class="keyboard-button-cancel">Назад</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let keyboard = document.getElementById('keyboard-bg');
    let keyboardTitle = document.querySelector('#keyboard-bg .keyboard-title');
    let board = document.querySelector('#keyboard-bg .keyboard');
    let bindInput = document.querySelectorAll('.form-bind-key .bind-control');
    let bindDivInput = document.querySelectorAll('.form-bind-key .div-bind-control');
    let bindLabel = document.querySelectorAll('.form-bind-key .bind-label');
    let btnDefault = document.getElementById('btn-default');
    let btnReset = document.getElementById('btn-reset');
    let fromPhp = <?= json_encode($bindKeys) ?>;
    let input = '';
    let div = '';
    let firstValueInput = '';
    let firstValueDiv = '';
    let firstNonSelected = '';
    // заполняю div данными из input
    if (bindDivInput.length > 0)
    {
        // обработка кнопок "По умолчанию" и "Сбросить всё"
        btnDefault.onclick = function ()
        {
            let i = 0;
            for (let el in fromPhp)
            {
                bindInput[i].setAttribute('value', fromPhp[el]['default']);
                bindDivInput[i].textContent = (document.querySelector('#key-'+fromPhp[el]['default'])).textContent;
                i++;
            }
        }
        for (let i = 0; i < bindDivInput.length; i++)
        {
            if (bindInput[i].value !== '')
            {
                bindDivInput[i].textContent = (document.querySelector('#key-'+bindInput[i].value)).textContent;
            }
        }
        btnReset.onclick = function ()
        {
            for (let i = 0; i < bindDivInput.length; i++)
            {
                bindInput[i].setAttribute('value', '');
                bindDivInput[i].textContent = '';
            }
        }
    }
    // Открытие клавиатуры + кнопки "Сохранить" / "Назад" + title
    for(let i = 0; i < bindDivInput.length; i++)
    {
        bindDivInput[i].onclick = function ()
        {
            keyboard.style.visibility = 'visible';
            keyboard.style.opacity = '1';
            keyboardTitle.textContent = 'Выберите клавишу для быстрого использования кнопки "' + bindLabel[i].textContent + '"';
            board.style.display = 'flex';
            // выделяем уже выбранные клавиши
            if (bindDivInput.length > 0)
            {
                for (let el = 0; el < bindDivInput.length; el++)
                {
                    if (bindInput[el].value !== '')
                    {
                        let selectKeys = document.querySelectorAll('#key-' + bindInput[el].value);
                        if (selectKeys.length > 0)
                        {
                            for (let key = 0; key < selectKeys.length; key++)
                            {
                                selectKeys[key].classList.remove('selected');
                                selectKeys[key].classList.add('selected-other');
                            }
                        }
                    }
                }
            }
            let inputValue = bindInput[i].value;
            let selectKeys = document.querySelectorAll('#key-' + inputValue);
            if (selectKeys.length > 0)
            {
                for (let key = 0; key < selectKeys.length; key++)
                {
                    selectKeys[key].classList.remove('selected-other');
                    selectKeys[key].classList.add('selected');
                }
            }
            input = bindInput[i];
            div = bindDivInput[i];
            firstValueInput = bindInput[i].value;
            firstValueDiv = bindDivInput[i].textContent;
        }
    }
    // Получаем и записываем выбранную кнопку в input
    let keys = document.querySelectorAll('.keyboard .keyboard-row .keyboard-li');
    for (let i = 0; i < keys.length; i++)
    {
        keys[i].onclick = function ()
        {
            let selectedKeys = document.querySelectorAll('.keyboard .keyboard-row .selected');
            if (selectedKeys.length > 0)
            {
                for (let key = 0; key < selectedKeys.length; key++)
                {
                    selectedKeys[key].classList.remove('selected');
                }
            }
            let idKey = keys[i].id;
            let select = document.querySelectorAll('#'+idKey);
            if (select.length > 0)
            {
                for (let key = 0; key < select.length; key++)
                {
                    if (!select[key].classList.contains('selected-other'))
                    {
                        select[key].classList.add('selected');
                        input.setAttribute('value', idKey.split('-')[1]);
                        div.textContent = keys[i].textContent;
                        firstNonSelected = select;
                    }
                }
            }
        }
    }
    // Нажатие на кнопки "Сохранить" и "Назад"
    let saveKeyboard = document.querySelector('.keyboard-buttons .keyboard-button-submit');
    let backKeyboard = document.querySelector('.keyboard-buttons .keyboard-button-cancel');
    saveKeyboard.onclick = function ()
    {
        keyboard.style.visibility = 'hidden';
        keyboard.style.opacity = '0';
        board.style.display = 'none';
    }
    backKeyboard.onclick = function ()
    {
        input.setAttribute('value', firstValueInput);
        div.textContent = firstValueDiv;
        if (firstNonSelected.length > 0)
        {
            for (let i = 0; i < firstNonSelected.length; i++)
            {
                firstNonSelected[i].classList.remove('selected');
            }
        }

        keyboard.style.visibility = 'hidden';
        keyboard.style.opacity = '0';
        board.style.display = 'none';
    }
    // Обработка клика по клавиатуре + запись выбранной клавиши в input

</script>


