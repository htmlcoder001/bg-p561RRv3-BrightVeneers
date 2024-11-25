<!DOCTYPE html>
<html lang="bg">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  
  <title>Благодаря! Вашата поръчка е приета.</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/ths.css"/>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>


<body>

<main>
  
  <div class="ty-heading">
    <div class="ty-heading__icon">
      <img src="img/icon-check.png" alt="" class="ty-icon__image">
    </div>
    <p class="ty-heading__title">Благодаря!</p>
    <p class="ty-heading__subtitle">Вашата поръчка е приета</p>
    <p class="ty-heading__text">Операторът ще се свърже с вас скоро, за да потвърди поръчката</p>
  </div>
  
  <div class="ty-content">
    
    <div class="ty-content__col">
      <div id="entered_data" class="ty-form --entered-data">
        <div class="ty-col__box">
          <p class="ty-content__title">Моля, проверете дали информацията, която сте въвели, е правилна:</p>

          <div class="ty-form__row">
            <label for="name" class="ty-form__label">
              <span class="ty-label__text">Имe</span>
              <span class="ty-form__input"><?php echo ($data["name"])?></span>
            </label>

            <label for="phone" class="ty-form__label">
              <span class="ty-label__text">Телефон</span>
              <span class="ty-form__input"><?php echo ($data["phone"])?></span>
            </label>

            <button type="button" class="ty-form__edit" id="ty_form_edit">Редактиране на данни</button>
          </div>
  

        </div>
      </div>

      <form id="form" class="ty-form --form-hidden" geo="bg" action="api.php" method="post" 
	onsubmit="return validate_form(this, 'Моля, въведете коректен номер телефона');">
        
        <div class="ty-col__box">
          <p class="ty-content__title">Моля, проверете дали информацията, която сте въвели, е правилна:</p>
          
          <div class="ty-form__row">
            <label for="name" class="ty-form__label">
              <span class="ty-label__text">Имe</span>
              <input readonly type="text" id="name" class="ty-form__input" name="name" required="" placeholder=""/>
            </label>
    
            <label for="phone" class="ty-form__label">
              <span class="ty-label__text">Телефон</span>
              <input readonly type="tel" id="phone" class="ty-form__input" name="phone" required="" placeholder=""/>
            </label>

            <button type="submit" class="ty-form__submit">Запазване на данни</button>
			
        <input name="subid" type="hidden" value="<?php echo $data['data1']; ?>" />
        <input name="px" type="hidden" value="<?php echo $data['px']; ?>" />
        <input name="bayer" type="hidden" value="<?php echo $data['data2']; ?>" />
			
          </div>
  

        </div>
        
      </form>
    </div>
    
  </div>
  
</main>



<script>
  /* Edit form script */
  let ty_form = document.getElementById('form'),
    ty_button_edit = document.getElementById('ty_form_edit'),
    entered_data = document.getElementById('entered_data');

  ty_button_edit.addEventListener('click', () => {
    ty_form.classList.add('--form-edit');
    ty_form.classList.remove('--form-hidden');
    entered_data.classList.add('--form-hidden');


    ty_form.querySelectorAll('input').forEach((input) => {
      input.removeAttribute('readonly');
    })
  });
</script>

<script src="jquery.maskedinput.min.js"></script>
    <script>
        $(function()
        {
            $.mask.definitions['9'] = '';
            $.mask.definitions['d'] = '[0-9]';
            $.mask.definitions['f'] = '[1-9]';

            var theLanguage = $('html').attr('lang');

            if(theLanguage == 'ru')
            {
                $("input[type=tel]").mask("+7 (fdd) ddd-dd-dd");
            } else if (theLanguage == 'ua')
            {
                $("input[type=tel]").mask("+38-fdd-ddd-dd-dd");
            } else if (theLanguage == 'by')
            {
                $("input[type=tel]").mask("+375 fdd-ddd-ddd");
            } else if (theLanguage == 'kz')
            {
                $("input[type=tel]").mask("+7 fdd ddd dddd");
            } else if (theLanguage == 'kg')
            {
                $("input[type=tel]").mask("+fdd ddd dd-dd-dd");
            } else if (theLanguage == 'md')
            {
                $("input[type=tel]").mask("0 fdd ddddd");
            } else if (theLanguage == 'az')
            {
                $("input[type=tel]").mask("+fdd-dd-ddd-dd-dd");
            } else if (theLanguage == 'ge')
            {
                $("input[type=tel]").mask("+995 fdd dd-dd-dd");
            } else if (theLanguage == 'es')
            {
                $("input[type=tel]").mask("+34 fdd dd dd dd");
            } else if (theLanguage == 'pe')
            {
                $("input[type=tel]").mask("+51 fdd ddd ddd");
            } else if (theLanguage == 'cl')
            {
                $("input[type=tel]").mask("+56 f dddd dddd");
            } else if (theLanguage == 'ar')
            {
                $("input[type=tel]").mask("+54 fd dddd dddd");
            } else if (theLanguage == 'co')
            {
                $("input[type=tel]").mask("+57 fdd ddd dddd");
            } else if (theLanguage == 'mx')
            {
                $("input[type=tel]").mask("+52 fd dddd dddd");
            } else if (theLanguage == 'it')
            {
                $("input[type=tel]").mask("+39 fdd-ddd-dddd");
            } else if (theLanguage == 'esp')
            {
                $("input[type=tel]").mask("+34 fdd dd dd dd");
            } else if (theLanguage == 'pt')
            {
                $("input[type=tel]").mask("+351 fdd ddd ddd");
            } else if (theLanguage == 'prt')
            {
                $("input[type=tel]").mask("+351 fdd ddd ddd");
            } else if (theLanguage == 'id')
            {
                $("input[type=tel]").mask("+62 fdd ddd ddd");
            } else if (theLanguage == 'gr')
            {
                $("input[type=tel]").mask("+30 fdd ddddddd");
            } else if (theLanguage == 'cy')
            {
                $("input[type=tel]").mask("+357 fd dddddd");
            } else if (theLanguage == 'ro')
            {
                $("input[type=tel]").mask("+40 fdd ddd dd dd");
            } else if (theLanguage == 'bg')
            {
                $("input[type=tel]").mask("+359 fdd ddd ddd?d");
            } else if (theLanguage == 'fr')
            {
                $("input[type=tel]").mask("+33 f dd dd dd dd");
            } else if (theLanguage == 'cz')
            {
                $("input[type=tel]").mask("+420 fdd ddd ddd");
            } else if (theLanguage == 'sk')
            {
                $("input[type=tel]").mask("+421 fdd ddd ddd");
            } else if (theLanguage == 'si')
            {
                $("input[type=tel]").mask("+386 f ddd dd dd");
            } else if (theLanguage == 'pl')
            {
                $("input[type=tel]").mask("+48 fdd ddd ddd");
            } else if (theLanguage == 'al')
            {
                $("input[type=tel]").mask("+355 fd ddd dddd");
            } else if (theLanguage == 'rs')
            {
                $("input[type=tel]").mask("+381 fd ddddd-dd");
            } else if (theLanguage == 'ph')
            {
                $("input[type=tel]").mask("+63 f dddd dd-dd");
            } else if (theLanguage == 'hu')
            {
                $("input[type=tel]").mask("+36 f ddd dddd");
            } else if (theLanguage == 'hr')
            {
                $("input[type=tel]").mask("+385 f dddd dd-dd");
            } else if (theLanguage == 'ba')
            {
                $("input[type=tel]").mask("+387 fd dddddd");
            }
        });

    </script>

</body>

</html>