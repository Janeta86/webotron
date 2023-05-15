<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viemport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Car repair</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

    
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <div class="header__block"> 
                <a href="#" class="header__logo">
                    <img src="img/logo.png" alt="">               
                </a>
            </div>
            <!--/header__block-->
            <nav class="nav">
               <a href="#part1" class="nav__link">ПОЧЕМУ МЫ</a>
               <a href="#part2" class="nav__link">ЗАПИСАТЬСЯ</a>
               <a href="#part3" class="nav__link">РАССРОЧКА</a>
               <a href="#part4" class="nav__link">FAST &amp; EASY</a>
               <a href="#part5" class="nav__link">АДРЕС</a>
            </nav>
            
            <div class="header__block">
              <div class="iphone_header">
               <div class="header__block_img">
                 <img src="img/iphone.png" alt="телефон">  
               </div>
                <div class="header__lng">
                    <a href="tel:+79123456789" class="header__lng-link">+79123456789</a>
                </div>
                
               </div>
            </div>
        </div> 
        <!--/header__wrapper-->   
    </div>
    <a href="admin/admin.php" >
    <img src="img/meh.png" style="  opacity: .2; position: absolute;  top: 0px; right: 0px;">
    </a>
<!--/container-->
</header>

<section class="intro">
    <div class="container">
        <div class="intro__content">
            <div class="intro__block">
            <h1 class="intro__title">
                УСТАНОВКА ГБО НА АВТО + ТО В ПОДАРОК ОТ 28 000 РУБ
            </h1>
            <h2 class="intro__subtitle"> 
               Запишитесь на установку газового обрудования прямо сейчас и начните экономить! 
               Предоставляем гарантию на ГБО на 5 лет!
            </h2>
            
            <a href="#part2" class="btn">Записаться на установку</a>
            
            
            </div>
        </div>
    </div>
</section>
<!--Выбор-->
<section class="choice">
    <div class="container wrap" id="part1">
       <div class="title_choice">
           <h2>
               Нас выбирают тысячи клиентов 
           </h2>
       </div>
       <div class="choice__clearfix">
           <div class="choice__item">
               <img class="item" src="img/oil.png" alt="Услуга">
               <h3>Услуга в рассрочку</h3>
                  <p>
                     Мы предлагаем своим 
                     клиентам возможность
                     оплатить услуги в 
                     рассрочку 
                  </p>
                                              
           </div>
           <div class="choice__item">
              <img class="item" src="img/car.png" alt="Услуга">
              <h3>Гарантия на услугу 5 лет</h3>
              <p>
                 Цель нашей компании: 
                 качество устанавливаемого 
                 оборудования и предоставляемых услуг</p>
                             
           </div>
           <div class="choice__item">
              <img class="item" src="img/tools.png" alt="Услуга">
              <h3>Техобслуживание под ключ</h3>
              <p>
                  Мы занимается ТО под ключ, 
                  поэтому самостоятельно
                  приобретаем все 
                  необходимые расходники
              </p>
               
           </div>
       </div>
        
    </div>
</section>
<!--Выбор-->
<section class="vigoda" id="part2">
    <div class="title_vigoda">
           <h2>
                ОСТАВЬТЕ ЗАЯВКУ НА УСТАНОВКУ ГБО
           </h2>
       </div>
    <div class="container">
        <div class="wrapper_app">

                <ul class="rowq">
                    <li data-tab="tab-1" tabindex="0" class="title">Пропан</li>
                    <li data-tab="tab-2" tabindex="0" class="title">Метан</li>
                </ul>
<form action="bdpropan.php" method="POST">
                <div id="tab-1" class="content">
                        <div class="card-body">
                        <div class="row">
                            <table cellpadding=0 cellspacing=10>
                            <tr>
                            <td class="table1">
                                <div class="form-group">
                                    <label for="complects">Комплектация ГБО</label>
                                    <select class="form-control" id="complectsPropan" name="ComplectsP">
                                        <optgroup label="Эконом">
                                        <option value="Alaska">Alaska</option>
                                        <option value="Atiker">Atiker</option>
                                        <option value="Tamona">Tamona</option>
                                    <optgroup label="Стандарт">
                                        <option value="Poletron F-3,6">Poletron F-3,6</option>
                                        <option value="OMVL Saver">OMVL Saver</option>
                                        <option value="Alpfa">Alpfa</option>
                                        <option value="GFI">GFI</option>
                                    </optgroup>
                                    <optgroup label="Стандарт +">
                                        <option value="Poletron F-1,8">Poletron F-1,8</option>
                                        <option value="OMVL Dream">OMVL Dream</option>
                                        <option value="BRC Alba">BRC Alba</option>
                                        <option value="Lovato">Lovato</option>
                                        <option value="Landi">Landi</option>
                                    </optgroup>
                                    <optgroup label="Премиум">
                                        <option value="BRC SQ 32 MY-10">BRC SQ 32 MY-10</option>
                                        <option value="BRC Plug and Drive">BRC Plug and Drive</option>
                                        <option value="BRC Direct Injection">BRC Direct Injection</option>
                                    </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="engine">Двигатель</label>
                                    <select class="form-control" id="enginePropan"  name="EngineP">
                                        <option value="4 - цилиндра" >4 - цилиндра</option>
                                        <option value="6 - цилиндров">6 - цилиндров</option>
                                        <option value="8 - цилиндров">8 - цилиндров</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ballon">Баллон</label>
                                    <select class="form-control" id="ballonPropan" name="BallonP">
                                        <option value="Баллон тор внутренний 42 л [ 600 х 200 ] БАЖ">Баллон тор внутренний 42 л [ 600 х 200 ] БАЖ</option>
                                        <option value="Баллон тор внутренний 53 л [ 630 х 225 ] БАЖ">Баллон тор внутренний 53 л [ 630 х 225 ] БАЖ</option>
                                        <option value="Баллон тор внутренний 54 л [ 630 х 220 ] НЗГА">Баллон тор внутренний 54 л [ 630 х 220 ] НЗГА</option>
                                        <option value="Баллон тор внутренний 55 л [ 650 х 225 ] БАЖ">Баллон тор внутренний 55 л [ 650 х 225 ] БАЖ</option>
                                        <option value="Баллон 60 л [315 х 863] БАЖ">Баллон 60 л [315 х 863] БАЖ</option>
                                        <option value="Баллон тор внутренний 65 л [ 650 х 250 ] БАЖ">Баллон тор внутренний 65 л [ 650 х 250 ] БАЖ</option>
                                        <option value="Баллон тор внутренний 65 л [ 680 х 225 ] ATIKER">Баллон тор внутренний 65 л [ 680 х 225 ] ATIKER</option>
                                        <option value="Баллон тор внутренний 73 л [ 720 х 230 ] НЗГА">Баллон тор внутренний 73 л [ 720 х 230 ] НЗГА</option>
                                        <option value="Баллон 80 л [356 х 900] БАЖ">Баллон 80 л [356 х 900] БАЖ</option>
                                        <option value="Баллон 103 л [356 х 1110] БАЖ">Баллон 103 л [356 х 1110] БАЖ</option>
                                        <option value="Баллон 130 л [356 х 1400] БАЖ">Баллон 130 л [356 х 1400] БАЖ</option>
                                        <option value="Баллон 130 л [399 х 1144] БАЖ">Баллон 130 л [399 х 1144] БАЖ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ballonkrep">Крепление баллона</label>
                                    <select class="form-control" selected="selected" id="ballonPropanKrep" name="BallonKrepP">
                                        <option value="Под днище">Под днище</option>
                                        <option value="Под раму">Под раму</option>
                                        <option value="Под запаску">Под запаску</option>
                                    </select>
                                </div>
                            </td>

                            <td class="table2">
                                <div class="form-group">
                                    <label for="multiclapan">Мультиклапан</label>
                                    <select class="form-control" id="multiclapanPropan" name="MulticlapanP">
                                        <option value="Мультиклапан базовый без электроклапана Tomasetto" >Мультиклапан базовый без электроклапана Tomasetto</option>
                                        <option value="Мультиклапан EURO с электроклапаном">Мультиклапан EURO с электроклапаном</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="gazmagistral">Газовая магистраль</label>
                                    <select class="form-control" id="gazmagistralPropan" name="GazmagistralP">
                                        <option value="Термопласиковая (Италия)">Термопласиковая (Италия)</option>
                                        <option value="Медная">Медная</option>
                                        <option value="Стальная">Стальная</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="zapravustroistvo">Заправочное устройство</label>
                                    <select class="form-control" id="zapravustroistvoPropan" name="ZapravustrP">
                                        <option value="В бампер, подвесное" selected="selected">В бампер, подвесное</option>
                                        <option value="В лючок бензобак">В лючок бензобака</option>
                                    </select>
                                </div>
                            </td>
                            </tr>
                            </table>
                        </div>
                        </div>
                        <div class="input-textg">
                            <div class="input-box">
                                <input type="textg" name="nameP" placeholder="Ваше имя" required>
                            </div>
                            <div class="input-box">
                                <input type="textg" name="emailP" placeholder="Введите email" required>
                            </div>
                            <div class="input-box">
                                <input id="phone_propan" name="telP" type="textg" placeholder="Введите телефон" required>
                            </div>
                           <!--  </div>
                        <div class="input-btn"> -->
                                <input type="submit" class="btn1"  value="Отправить заявку">
                        </div>
                         
                              
                       
                </div>
</form>
<script>
      const phone_propan = document.querySelector('#phone_propan')
    
      phone_propan.onblur = (e) => {
        e.target.parentNode.classList.remove('active');
    }
    
    phone_propan.oninput = (e) => {
        const inp = e.target.value.replace('+7');
        const nums = inp.replace(/\D/g, '');
        const x = nums.match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    
        e.target.value = '+7' + (!x[2] ? x[1] : '(' + x[1] + ') ') + x[2] + (x[3] ? '-' + x[3] : '');
        //          e.target.parentNode.classList.add('active');
    
    }
    
    </script>
            <!-- МЕТАН -->
            <!-- КОЛОНКА ЛЕВАЯ -->
<form action="bdmetan.php" method="POST">
                <div id="tab-2" class="content"> 
                    <div class="card-body">
                        <div class="row">
                        <table cellpadding=0 cellspacing=10>
                        <tr>
                        <td class="table1">
                                <div class="form-group">
                                    <label for="complects">Комплектация ГБО</label>
                                    <select class="form-control" id="complectsMetan" name="ComplectsM">
                                    <optgroup label="Эконом">
                                        <option for="genre" value="Alaska">Alaska</option>
                                        <option value="Atiker">Atiker</option>
                                        <option value="Tamona">Tamona</option>
                                    <optgroup label="Стандарт">
                                        <option value="Poletron F-3,6">Poletron F-3,6</option>
                                        <option value="OMVL Saver">OMVL Saver</option>
                                        <option value="Alpfa">Alpfa</option>
                                        <option value="GFI">GFI</option>
                                    </optgroup>
                                    <optgroup label="Стандарт +">
                                        <option value="Poletron F-1,8">Poletron F-1,8</option>
                                        <option value="OMVL Dream">OMVL Dream</option>
                                        <option value="BRC Alba">BRC Alba</option>
                                        <option value="Lovato">Lovato</option>
                                        <option value="Landi">Landi</option>
                                    </optgroup>
                                    <optgroup label="Премиум">
                                        <option value="BRC SQ 32 MY-10">BRC SQ 32 MY-10</option>
                                        <option value="BRC Plug and Drive">BRC Plug and Drive</option>
                                        <option value="BRC Direct Injection">BRC Direct Injection</option>
                                    </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="engine">Двигатель</label>
                                    <select class="form-control" id="engineMetan" name="EngineM">
                                    <option value="4 - цилиндра" >4 - цилиндра</option>
                                    <option value="6 - цилиндров">6 - цилиндров</option>
                                    <option value="8 - цилиндров">8 - цилиндров</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ballon">Баллон</label>
                                    <select class="form-control" id="ballonMetan" name="BallonM">
                                    <option value="Баллон метан 50л 219х1620 60.0 кг">Баллон метан 50л 219х1620 60.0 кг</option>
                                    <option value="Баллон метан 50л 219х1620 60.0 кг (4 шт.)">Баллон метан 50л 219х1620 60.0 кг (4 шт.)</option>
                                    <option value="Баллон метан GRANT 80 л 406х810 88 кг">Баллон метан GRANT 80 л 406х810 88 кг</option>
                                    <option value="Баллон метан 90 л 406 х 905 70кг">Баллон метан 90 л 406 х 905 70кг</option>
                                    <option value="Баллон метан GRANT 90 л 406х900 96 кг">Баллон метан GRANT 90 л 406х900 96 кг</option>
                                    <option value="Баллон метан GOLDEN FIELD 100 л 406х990 102,6 кг">Баллон метан GOLDEN FIELD 100 л 406х990 102,6 кг</option>
                                    <option value="Баллон метан GRANT 120 л 406х1170 130 кг">Баллон метан GRANT 120 л 406х1170 130 кг</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ballonkrep">Крепление баллона</label>
                                    <select class="form-control" selected="selected" id="ballonMetanKrep" name="BallonKrepM">
                                    <option value="Под днище">Под днище</option>
                                    <option value="Под раму">Под раму</option>
                                    <option value="Под запаску">Под запаску</option>
                                    </select>
                                </div>
                        </td>
            <!-- КОЛОНКА ПРАВАЯ -->
                        <td class="table2">
                                    <div class="form-group">
                                    <label for="multiclapan">Вентель</label>
                                    <select class="form-control" id="multiclapanMetan" name="MulticlapanM">
                                        <option value="Вентель базовый без электромагнитного клапана OMB" selected="selected">Вентель базовый без электромагнитного клапана OMB</option>
                                        <option value="Вентель EURO с электромагнитным клапаном OMB">Вентель EURO с электромагнитным клапаном OMB</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="gazmagistral">Газовая магистраль стальная</label>
                                    <select class="form-control" id="gazmagistralMetan" name="GazmagistralM">
                                        <option value="Стальная" selected="selected">Стальная</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="zapravustroistvo">Внешний вариатор УОЗ</label>
                                    <select class="form-control" id="zapravustroistvoMetan" name="ZapravustrM">
                                        <option value="Без внешнего вариатора УОЗ" selected="selected">Без внешнего вариатора УОЗ</option>
                                        <option value="С внешним вариатором УОЗ" selected="selected">С внешним вариатором УОЗ </option>
                                    </select>
                                    </div>  
                        </td>
                        </tr>
                        </table>
                        </div>
                    </div>
                    
                    <div class="input-textg">
                            <div class="input-box">
                                <input type="textg" name="nameM" placeholder="Ваше имя" required>
                            </div>
                            <div class="input-box">
                                <input type="textg" name="emailM" placeholder="Введите email" required>
                            </div>
                            <div class="input-box">
                                <input id="phone_metan" name="telM" type="textg" placeholder="Введите телефон" required>
                            </div>
                           <!--  </div>
                        <div class="input-btn"> -->
                                <input type="submit" class="btn1"  value="Отправить заявку">
                        </div>
</form>
                
                
                
        </div>
    </div>
    <script>
      const phone_metan = document.querySelector('#phone_metan')
    
      phone_metan.onblur = (e) => {
        e.target.parentNode.classList.remove('active');
    }
    
    phone_metan.oninput = (e) => {
        const inp = e.target.value.replace('+7');
        const nums = inp.replace(/\D/g, '');
        const x = nums.match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    
        e.target.value = '+7' + (!x[2] ? x[1] : '(' + x[1] + ') ') + x[2] + (x[3] ? '-' + x[3] : '');
        //          e.target.parentNode.classList.add('active');
    
    }
    
    </script>
   
    <script src="./js/tabs.js"></script>
    <script src="./js/index.js"></script>
</section>
<!--Black block-->
<section class="section about" id="part3">
   <div class="container">
       <div class="about__wrapper">
           <div class="about__block">
               <h2 class="intro__title text-white">
                   ПРЕДЛАГАЕМ УСТАНОВИТЬ ГБО В РАССРОЧКУ
               </h2>
               <p class="about__text">
                 <li>Рассрочка от компании: 50 % первоначальный взнос, оставшаяся сумма в течении 2 месяцев равными долями.</li></p>
                <p class="about__text"> <li>Рассрочка от банка: до 10 месяцев, без первоначального взноса, без переплат. В обоих случаях нужен только паспорт.</li>
               </p>
               
           </div>
           <img src="img/about.jpg" alt="about" class="about__img">
        </div>
   </div>
    
</section>
<!--Black block-->
<section class="section process" id="part4">
    <div class="container">
        <h2 class="process__title">FAST &amp; EASY</h2>
        <h3 class="process__subtitle">НАШ РАБОЧИЙ ПРОЦЕСС</h3>
        <div class="wrapper">
            <div class="process__item">
               <div class="process__block">
                    <h4 class="info__title">01. Оформление заявки</h4>
                    <p class="info__text"><br>Клиент оставляет заявку на сайте либо звонит по номеру, после чего наш специалист связывается с клиентом для уточнения деталий по услуге </p>
                </div>
            </div>
                <div class="process__item">
                    <div class="process__block">
                    <h4 class="info__title">02. Подбор ГБО на автомобиль клиента</h4>
                    <p class="info__text">Наш специалист после выяснения всех необходимых деталей приступают к подбору соответствующего газооборудования на авто </p>
                    </div> 
                </div>  
                <div class="process__item">
                    <div class="process__block">
                    <h4 class="info__title">03. Установка ГБО на автомобиль клиента</h4>
                    <p class="info__text">После подбора  газообрудования на авто клиента наши квалифицированные мастера приступают к его  установке</p>
                    </div>
                </div> 
            
        </div>
    </div>
</section>

<section class="contacts" id="btn">
    <div class="container ">
       <div class="contacts__block">
        <div class="texxt">
        <h2 class="contacts__title text-white">
        НУЖНА ПОМОЩЬ В ВЫБОРЕ ОБОРУДОВАНИЯ?</h2>
        <p class="about__text1"> Оставьте заявку и наш менеджер подберет Вам оборудование по индивидуальным параметрам Вашего автомобиля</p>
        </div>
        <div class="rectangle">
        <h3 class="form">ПОДБОР ОБОРУДОВАНИЯ</h3>

        <form class="contacts__form" action="bd.php" method="POST">
      <!--   <form action="send.php" method="post"> -->
            <div class="form__group">
               <label for="" class="label"> 
                <span>Введите имя</span> 
               <input name="name_z" type="text" class="input" placeholder=""  required >
               </label>
            </div>
            <div class="form__group">
                <label class="label">
                    <span>Введите телефон</span> 
                    <input id='phone' name="phone_z" type="text" class="input" placeholder="" required>
                </label>
            </div>
            <button name="send">Отправить заявку</button>
         </form>
   <!--       </form> -->
        </div>
      </div>
    </div>
</section>

 <script>
      const phone = document.querySelector('#phone')
    
      phone.onblur = (e) => {
        e.target.parentNode.classList.remove('active');
    }
    
    phone.oninput = (e) => {
        const inp = e.target.value.replace('+7');
        const nums = inp.replace(/\D/g, '');
        const x = nums.match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    
        e.target.value = '+7' + (!x[2] ? x[1] : '(' + x[1] + ') ') + x[2] + (x[3] ? '-' + x[3] : '');
        //          e.target.parentNode.classList.add('active');
    
    }
    
    </script> 

    
<!--gbo-->
<section class="center__gbo" id="part5">
    <div class="container">
            <div class="gbo" >
            <h3>Центр газового оборудования «Goliketa»</h3>
            <div class="text-gbo">
            <p href="adress" class="address_link" >Адрес СТО в Сургуте: <span>Нефтеюганское шоссе, 7/1</span></p>
            <p href="timejob" class="time_link" >Режим работы: <span>09:00 - 18:00 (Пн.-Сб.)</span></p>
            <p href="email" class="email_link" >E-mail: <span>goliketa@mail.ru</span></p>
            </div>
        </div>
        <div class="ymaps">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aadd439bae4a5c832589ee72974185186a98c8a9387a3c52cc0931c25a79f9c5b&amp;lang=ru_RU&amp;"></script>
        </div>
    </div>
</section>
<!--gbo-->
<footer class="footer">
    <div class="container">
        <div class="footer-row">
            <div class="footer__colomn1">
                <h3 class="pay">Способы оплаты</h3>
                <p class="pay-text" >Оплатить услуги можно наличными,<br> банковской картой, оформить кредит или<br> 
                    рассрочку, выполнить банковский перевод<br> для юридических лиц</p>
                <img src="img/visa.png" alt="" class="visa">
                <img src="img/ms.png" alt="" class="ms">
                <img src="img/mir.png" alt="" class="mir">
            </div>
            <div class="footer_colomn2">
               <a href="#part1" class="nav_footer">ПОЧЕМУ МЫ</a>
               <a href="#part2" class="nav_footer">ЗАПИСАТЬСЯ</a>
               <a href="#part3" class="nav_footer">РАССРОЧКА</a>
               <a href="#part4" class="nav_footer">FAST &amp; EASY</a>
               <a href="#part5" class="nav_footer">АДРЕС</a>
            </div>
            <div class="footer_colomn3">
                <h3 class="see">Следите за нами</h3>
                <img src="img/vk.png" alt="" class="vk">
                <img src="img/youtube.png" alt="" class="youtube">
            </div>
        </div>
    </div>
</footer>
</body>
</html>