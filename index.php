<!DOCTYPE html>
<html>
<title></title>
<head>
    <!--
<script
        type="text/javascript"
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src="request.js"></script>-->
    <script src="jquery-3.3.1.js"></script>
    <script src="request.js"></script>
</head>
<body>

<div>
    <h3>Создать сущность</h3>
    <form method="post" action="">
        <input name="add_obj" id="add_obj" placeholder="Добавить сущность">
        <input type="button" id="form1_submit" value="Отправить">
    </form>
</div>

<div>
    <h3>Добавить дополнительное поле</h3>
    <div>
        <div>
            <p>Тип сущности</p>
            <select name="type_obj" id="type_obj">
                <option>Сделка</option>
                <option>Контакт</option>
                <option>Покупатель</option>
                <option>Компания</option>
            </select>
            <div>
                <input name="id_obj_field" id="form2_id" placeholder="id сущности">
            </div>
            <div>
                <input name="field_name" id="form2_name" placeholder="название поля">
            </div>
            <div>
                <input type="button" id="form2_submit" value="Отправить">
            </div>
        </div>


        <div>
            <h3>Добавить примечание</h3>
            <div>
                <div>
                    <p>Тип примечания</p>
                    <select name="item">
                        <option>Примечание</option>
                        <option>Входящий вызов</option>
                    </select>
                    <div>
                        <input name="id_obj_task" id="form3_id" placeholder="id сущности">
                    </div>
                    <div>
                        <input name="text_note" id="form3_text" placeholder="Текст примечания">
                    </div>
                    <div>
                        <input type="button" id="form3_submit" value="Отправить">
                    </div>
                </div>
                </div>


                    <h3>Добавить задачу</h3>
                    <div>
                        <div>
                            <p>Тип задачи</p>
                            <select name="type_task">
                                <option>Связаться с клиентом</option>
                                <option>Встреча</option>
                            </select>
                            <div>
                                <input name="id_obj_task" id="form4_id" placeholder="id сущности">
                            </div>
                            <div>
                                <input name="task_date" id="form4_date" placeholder="Дата завершения">
                            </div>
                            <div>
                                <input name="task_text" id="form4_text" placeholder="Текст задачи">
                            </div>
                            <div>
                                <input type="button" id="form5_submit" value="Отправить">
                            </div>
                        </div>
                        <div>


                            <h3>Завершение задачи</h3>
                            <div>
                                <input name="id_task_update" id="form5_id" placeholder="id сущности">
                            </div>
                            <div>
                                <input name="task_date_update" id="form5_date" placeholder="Дата завершения">
                            </div>
                            <div>
                                <input name="task_text_update" id="form5_text" placeholder="Комментарий">
                            </div>
                            <div>
                                <input type="button" id="form5_submit" value="Отправить">
                            </div>
                        </div>
                        </div>

</body>
</html>