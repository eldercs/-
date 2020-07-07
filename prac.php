<!DOCTYPE html>
<html lang = "ru">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "style.css">
    </head>
    <body>
        <header class = "page-header">
            <div class = "menu">
                <div class = "menu__tab">
                    <button class = "tablinks menu__page menu__page1" onclick="openMenu(event, '1')"><h1>Книга замечаний</h1></button>
                    <button class = "tablinks menu__page menu__page2" onclick="openMenu(event, '2')"><h1>Нормативная БАЗА</h1></button>
                    <button class = "tablinks menu__page menu__page3" onclick="openMenu(event, '3')"><h1>Настройка APMy</h1></button>
                    <!--<?php
                      if($_COOKIE['user'] == ''):
                    ?>-->
                    <button class = "tablinks3" onclick="openRegistr(event, '4')"><img src = "img/login.svg" width = "80px"></button>
                    <!--<?php else: ?>-->
                    <button class = "tablinks3 svg__exit"><img src = "img/exit.png" width = "130px"></button>
                     <!-- svg__out <?php endif;?>-->
                </div>
                <div id = "4" class = "tabcontent3 registr">
                <form action="validation-form/auth.php" method="POST">
                    <nav class = "registr__el">
                        <ul class = "register__ul">
                            <li class = "auth"><h2 class = "registr__auth">Авторизация</h2></li>
                            <li class = "auth2"><h3>Логин</h3><input type ="text" name = "login" id = "login" class = "auth__pole"></li>
                            <li class = "auth2"><h3>Пароль</h3><input type = "password" name = "password" id = "password" class = "auth__pole"></li>
                        </ul>
                    </nav>
                    <div class = "authflex">
                    <a class = "authflex__a " href = "#"><input type = "submit" class = "authflex__button authflex__height" value = "Войти"></a>
                    <a class = "authflex__a" href = "#openModal"><input type = "button" class = "authflex__button authflex__height" value = "Регистрация"></a>
                    </div>
                </form> 
                </div>
                <div id="1" class="tabcontent menu__tab2">
                   <!-- <button class = "tablinks2 menu__page menu__page11" onclick="openMenu2(event, '11')"><h2>Замечание</h2></button>-->
                    <button class = "tablinks2 menu__page menu__page11" onclick="openMenu2(event, '11'); openRemarkList()"><h2>Замечание</h2></button>
                    <button class = "tablinks2 menu__page menu__page12" onclick="openMenu2(event, '12')"><h2 class = "tab__2">Машинисты</h2></button>
                  </div>
                  <div id="2" class="tabcontent menu__tab2">
                    <button class = "tablinks2 menu__page menu__page13" onclick="openMenu2(event, '13')"><h2 class = "tab__2">Структура железнйо дороги</h2></button>
                    <button class = "tablinks2 menu__page menu__page14" onclick="openMenu2(event, '14')"><h2 class = "tab__2">Нормативные категории</h2></button>
                    <button class = "tablinks2 menu__page menu__page15" onclick="openMenu2(event, '15')"><h2 class = "tab__2">Локомотив</h2></button>
                    <button class = "tablinks2 menu__page menu__page16" onclick="openMenu2(event, '16')"><h2 class = "tab__2">Локомотивное депо</h2></button>
                  </div>
                  <div id="3" class="tabcontent menu__tab2">
                    <button class = "tablinks2 menu__page menu__page17" onclick="openMenu2(event, '17')"><h2 class = "tab__2">Пользователи</h2></button>
                    <button class = "tablinks2 menu__page menu__page18" onclick="openMenu2(event, '18')"><h2 class = "tab__2">Группы</h2></button>
                  </div>
            </div>
            <div id = "openModal" class = "modal">
                <form action="validation-form/check.php" method = "POST">
                <div class = "modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title">Регистрация</h3>
                          <a href="#close" text="Close" class="close">×</a>
                        </div>
                        <div class="modal-body">
                          <h4 class="modal-text">Группа<select id = "modal__group" class = "modal__pole2"></select></h4>
                          <h4 class="modal-text">Подраздел<select id = "modal__podr" class = "modal__pole2"></select></h4>
                          <h4 class="modal-text">Логин<input type = "text"  name = "modal__login" id = "modal__login" class = "modal__pole"></h4>
                          <h4 class="modal-text">Фамилия<input type = "text"  name = "modal__surname" id = "modal__surname" class = "modal__pole"></h4>
                          <h4 class="modal-text">Имя<input type = "text"  name = "modal__name" id = "modal__name" class = "modal__pole"></h4>
                          <h4 class="modal-text">Отчество<input type = "text" name = "modal__patronymic" id = "modal__patronymic" class = "modal__pole"></h4>
                          <h4 class="modal-text">Телефон<input type = "text" name = "modal__telephone" id = "modal__telephone"class = "modal__pole"></h4>
                          <h4 class="modal-text" >Должность<select id = "modal__position" class = "modal__pole2"></select></h4>
                          <h4 class="modal-text">Пароль<input type = "password" name = "modal__password" id = "modal__password"class = "modal__pole"></h4>
                          <h4 class="modal-text">Табельный<input type = "text" name = "modal__tabel" id = "modal__tabel"class = "modal__pole"></h4> 
                        </div>
                        <button class = "modal__register"><p>Отправить</p></button>
                      </div>
                </div>
                </form>
            </div>
        </header>
        <main class = "page-main">
            <div id = "11" class = "tabcontent2 menu__tab3">
            <div class="remarks">
                    <div class="remarks_list">
                        <!--<div class="remarks-status_bar">непонятно</div> -->
                        <div class="remarks-title">Создание, осмотр и обнаружение замечаний</div>
                        <div class="remarks_listlist-buttons">
                            <div class="button">Добавить</div>
                            <select class="select" name="Добавление" id="">
                                <option selected value="1">Добавление</option>
                                <option value="2">Исправление</option>
                                <option value="3">Ответ</option>
                            </select>
                            <div class="button">Без ответа</div>
                            <div class="button">С ответом</div>
                            <div class="button">Удалить</div>
                        </div>
                        <div class="remarks_list-search">
                            <div class="search-found">
                                <div class="search-text">Найдено</div>
                                <div class="search-count">1</div>
                            </div>
                            <div class="search-settings">
                                <div class="settings-involved">
                                    Причастные
                                    <select class="select1" name="Добавление" id="">
                                        <option selected disabled>Выбрать что-то</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <select class="select2" name="Добавление" id="">
                                        <option selected disabled>Выбрать что-то</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="settings-search">
                                    Поиск
                                    <select class="select1" name="Добавление" id="">
                                        <option selected disabled>Выбрать что-то</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <input type="text" style="margin-left:15px; font-size: 14pt;">
                                    <select class="select3" name="Добавление" id="">
                                        <option selected disabled>Выбрать что-то</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <select class="select4" name="Добавление" id="">
                                        <option selected disabled>Выбрать что-то</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>                                      
                                </div>                                
                            </div>
                            <div class="search-data">
                                <div class="data-from">C: 
                                    <select class="day" name="Добавление" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <select class="mounth" name="Добавление" id="">
                                        <option value="1">Январь</option>
                                        <option value="2">Феараль</option>
                                        <option value="3">Март</option>
                                        <option value="4">Апрель</option>
                                        <option value="5">Май</option>
                                        <option value="6">Июнь</option>
                                        <option value="7">Июль</option>
                                        <option value="8">Август</option>
                                        <option value="9">Сентябрь</option>
                                        <option value="10">Октябрь</option>
                                        <option value="11">Ноябрь</option>
                                        <option value="12">Декабрь</option>
                                    </select>     
                                    <select class="year" name="Добавление" id="">
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                    </select>        
                                </div>
                                <div class="data-to">По:
                                    <select class="day" name="Добавление" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>    
                                    <select class="mounth" name="Добавление" id="">
                                        <option value="1">Январь</option>
                                        <option value="2">Феараль</option>
                                        <option value="3">Март</option>
                                        <option value="4">Апрель</option>
                                        <option value="5">Май</option>
                                        <option value="6">Июнь</option>
                                        <option value="7">Июль</option>
                                        <option value="8">Август</option>
                                        <option value="9">Сентябрь</option>
                                        <option value="10">Октябрь</option>
                                        <option value="11">Ноябрь</option>
                                        <option value="12">Декабрь</option>
                                    </select>    
                                    <select class="year" name="Добавление" id="">
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                    </select>    
                                </div>
                            </div>
                        </div>
                        <div class="remarks_list-list">
                            <div class="list-header">
                                <div class="first-column">Номер</div>
                                <div class="second-column"><input type="checkbox" disabled style="transform:scale(2.0);"></div>
                                <div class="third-column">Машинист</div>
                                <div class="fourth-column">Поезд</div>
                                <div class="fifth-column">
                                    <div>Локомотив</div> 
                                    <div>серия и номер</div> 
                                </div>
                                <div class="sixth-column">Замечание</div>
                                <div class="seventh-column">Причастные</div>
                                <div class="eighth-column">Дата</div>
                                <div class="nineth-column">ТЧ</div>
                                <div class="tenth-column">Действие</div>
                            </div>
                            <div class="list-item">
                                <div class="first-column">1234</div>
                                <div class="second-column"><input type="checkbox" style="transform:scale(2.0);"></div>
                                <div class="third-column">Пупкин В.С.</div>
                                <div class="fourth-column">Союз-М</div>
                                <div class="fifth-column">
                                    <div class="serial">1337</div>
                                    <div class="number">228</div>
                                </div>
                                <div class="sixth-column">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo aliquid expedita incidunt doloribus vero ullam suscipit eius, culpa quibusdam fuga. </div>
                                <div class="seventh-column">Земля-Марс</div>
                                <div class="eighth-column">2020-03-09</div>
                                <div class="nineth-column">ТЧ-1</div>
                                <div class="tenth-column">
                                    <div class="ic-edit"><img src="img\edit.svg" onclick="openRemarkEdit()" alt=""></div>
                                    <div class="ic-print"><img src="img\print.svg" alt=""></div>
                                    <div class="ic-delete"><img src="img\delete.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="first-column">1234</div>
                                <div class="second-column"><input type="checkbox" style="transform:scale(2.0);"></div>
                                <div class="third-column">Пупкин В.С.</div>
                                <div class="fourth-column">Союз-М</div>
                                <div class="fifth-column">
                                    <div class="serial">1337</div>
                                    <div class="number">228</div>
                                </div>
                                <div class="sixth-column">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo aliquid expedita incidunt doloribus vero ullam suscipit eius, culpa quibusdam fuga. </div>
                                <div class="seventh-column">Земля-Марс</div>
                                <div class="eighth-column">2020-03-09</div>
                                <div class="nineth-column">ТЧ-1</div>
                                <div class="tenth-column">
                                    <div class="ic-edit"><img src="img\edit.svg" onclick="openRemarkEdit()" alt=""></div>
                                    <div class="ic-print"><img src="img\print.svg" alt=""></div>
                                    <div class="ic-delete"><img src="img\delete.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="remarks-footer">тут должен быть футер</div>
                    </div> 
                    <div class="remarks-edit d-none">
                        <div class="remarks-title">Исправление замечаний</div>
                        <div class="remarks_listlist-buttons">
                            <div class="button">Исправить</div>
                            <select class="select" name="Ответ" id="">
                                <option selected value="1">Исправление</option>
                                <option value="2">Добавление</option>
                                <option value="3">Ответить</option>
                            </select>
                        </div>
                        <div class="remarks-remark_field">
                            <div class="remark_field-remark">
                                <div class="remark-title title">
                                    Замечание машиниста
                                </div>
                                <div class="remark-value">
                                    <div class="value-item">
                                        <div>Машинист <input type="text" size="30"></div> 
                                        <div>Депо <input type="text" size="20"></div>
                                    </div>
                                    <div class="value-item">
                                        <div>№ Поезда <input type="text" size="10"></div> 
                                        <div>Локомотив <input type="text" size="20"></div>
                                        <div>Номер <input type="text" size="5"></div>
                                    </div>
                                    <div class="value-item-big">
                                        <div>Замечание</div>  <div><textarea name="" id="" cols="30" rows="10"></textarea></div>
                                    </div>
                                    <div class="value-item" width="50%">
                                        <div class="value-item">
                                            На дату 
                                            <input type="text" size="10">
                                            <input type="text" size="10">
                                            <input type="text" size="10">
                                        </div>
                                    </div>
                                    <div class="value-item">
                                        <div>Перейти к <a href="">корректировке ответа</a></div> 
                                        <div><a href="">Печатать</a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="remark_field-involved">
                                <div class="ivolved-title title">Причастные подразделения и предприятия</div>
                                <div class="value-item">
                                    На дату 
                                    <select class="day" name="Добавление" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <select class="mounth" name="Добавление" id="">
                                        <option value="1">Январь</option>
                                        <option value="2">Феараль</option>
                                        <option value="3">Март</option>
                                        <option value="4">Апрель</option>
                                        <option value="5">Май</option>
                                        <option value="6">Июнь</option>
                                        <option value="7">Июль</option>
                                        <option value="8">Август</option>
                                        <option value="9">Сентябрь</option>
                                        <option value="10">Октябрь</option>
                                        <option value="11">Ноябрь</option>
                                        <option value="12">Декабрь</option>
                                    </select>     
                                    <select class="year" name="Добавление" id="">
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                    </select>        
                                    <div><img src="img/plus.png" width="40px" alt=""></div>
                                </div>
                                <div class="value-item-big">
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="value-item">
                                    Другие: (указывать УРБ для ПЗЗ не нужно)
                                </div>
                                <div class="value-item">
                                    <input type="text" size="50">
                                </div>
                            </div>
                        </div>
                        <div class="remarks-footer">тут должен быть футер</div>
                    </div>    
                </div>
            </div>
            <div id = "12" class = "tabcontent2 menu__tab3">
                <h2>тест12</h2>
            </div>
            <div id = "13" class = "tabcontent2 menu__tab3">
            <div class="notremarks">
                    <div class="notremarks_list">
                        <div class="notremarks-title">Структурные подразделения железной дороги</div>
                        <div class="notremarks_listlist-buttons">
                            <div class="notbutton">Добавить</div>
                            <div class="notbutton">Удалить</div>
							<select class="notselect" name="ДН-1" id="">
                                <option selected value="1">ДН-1</option>
                                <option value="2">ДН-2</option>
                                <option value="3">ДН-3</option>
							</select>
                        </div>
						<div class="notremarks_list-list">
                            <div class="notlist-header">
                                <div class="notfirst-column">Номер</div>
                                <div class="notsecond-column">Номер тел.</div>
                                <div class="notthird-column">Имя</div>
                                <div class="notfourth-column">Описание</div>
                                <div class="notfifth-column">ДН</div> 
                                <div class="notsixth-column">Путь</div>
                                <div class="nottenth-column">Действие</div>
                            </div>
                            <div class="notlist-item">
                                <div class="notfirst-column">1</div>
                                <div class="notsecond-column">+11111111</div>
                                <div class="notthird-column">Ъуъ</div>
                                <div class="notfourth-column">Оно работает</div>
                                <div class="notfifth-column">ДН-1</div>
                                <div class="notsixth-column">Донецк-Д6</div>
                                <div class="nottenth-column">
                                    <div class="notic-up"><img src="img\up.svg" alt=""></div>
                                    <div class="notic-down"><img src="img\down.svg" alt=""></div>
                                    <div class="notic-star"><img src="img\star.svg" alt=""></div>
									<div class="notic-destroy"><img src="img\close.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="notlist-item">
							    <div class="notfirst-column">2</div>
                                <div class="notsecond-column">+11111111</div>
                                <div class="notthird-column">Ъуъ</div>
                                <div class="notfourth-column">Оно работает</div>
                                <div class="notfifth-column">ДН-1</div>
                                <div class="notsixth-column">Донецк-Д6</div>
                                <div class="nottenth-column">
                                    <div class="notic-up"><img src="img\up.svg" alt=""></div>
                                    <div class="notic-down"><img src="img\down.svg" alt=""></div>
                                    <div class="notic-star"><img src="img\star.svg" alt=""></div>
									<div class="notic-destroy"><img src="img\close.svg" alt=""></div>
                                </div>
                            </div>
                            </div>
                    </div>  
							
                </div>
            </div>
            <div id = "14" class = "tabcontent2 menu__tab3">
                <h2>тест14</h2>
            </div>
            <div id = "15" class = "tabcontent2 menu__tab3">
                <h2>тест15</h2>
            </div>
            <div id = "16" class = "tabcontent2 menu__tab3">
                <h2>тест16</h2>
            </div>
            <div id = "17" class = "tabcontent2 menu__tab3">
                <h2>тест17</h2>
            </div>
            <div id = "18" class = "tabcontent2 menu__tab3">
                <h2>тест18</h2>
            </div>
        </main>
<script>
    let t = true;
    function openMenu(evt, openMenu) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";

    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(openMenu).style.display = "flex";
    evt.currentTarget.className += " active";
}

function openMenu2(evt, openMenu2) {
    var i, tabcontent2, tablinks2;

    tabcontent2 = document.getElementsByClassName("tabcontent2");
    for (i = 0; i < tabcontent2.length; i++) {
        tabcontent2[i].style.display = "none";
    }

    tablinks2 = document.getElementsByClassName("tablinks2");
    for (i = 0; i < tablinks2.length; i++) {
        tablinks2[i].className = tablinks2[i].className.replace(" active", "");
    }

    document.getElementById(openMenu2).style.display = "flex";
    evt.currentTarget.className += " active";
}
function openRegistr(evt, openRegistr) {
    var i, tablinks3;

    tablinks3 = document.getElementsByClassName("tablinks3");

        tablinks3[0].className = tablinks3[0].className.replace(" active", "");
        if(t == true){
        document.getElementById(openRegistr).style.display = "inline-block";
        t=false;}
        else{
        document.getElementById(openRegistr).style.display = "none";
        t = true;
        }
}
function openRemarkEdit(){
var remarkedit = document.getElementsByClassName("remarks-edit")[0];
var remarklist = document.getElementsByClassName("remarks_list")[0];
remarkedit.classList.remove('d-none');
remarklist.classList.add('d-none');
}
function openRemarkList(){
var remarkedit = document.getElementsByClassName("remarks-edit")[0];
var remarklist = document.getElementsByClassName("remarks_list")[0];
remarkedit.classList.add('d-none');
remarklist.classList.remove('d-none');
}
</script>
</body>
</html>