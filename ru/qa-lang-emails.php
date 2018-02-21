<?php
return array(
    'a_commented_body' => "К вашему ответу на сайте ^site_title добавлен новый комментарий от ^c_handle:\n\n^open^c_content^close\n\nВаш ответ был:\n\n^open^c_context^close\n\nВы можете ответить добавив свой комментарий:\n\n^url\n\nСпасибо, \n\n^site_title",
    'a_commented_subject' => 'На сайте ^site_title к вашему ответу добавлен комментарий',

    'a_followed_body' => "К вашему ответу на сайте ^site_title был добавлен связанный вопрос от ^q_handle:\n\n^open^q_title^close\n\nВаш ответ был:\n\n^open^a_content^close\n\nНажмите ниже, чтобы ответить на этот вопрос:\n\n^url\n\nСпасибо, \n\n^site_title",
    'a_followed_subject' => 'К вашему вопросу на сайте ^site_title был добавлен связанный вопрос',

    'a_selected_body' => "Поздравляем вас! Ваш ответ на сайте ^site_title был выбран лучшим. Пользователь: ^s_handle:\n\n^open^a_content^close\n\nВопрос:\n\n^open^q_title^close\n\nНажмите ниже, чтобы посмотреть ответ:\n\n^url\n\nСпасибо, \n\n^site_title",
    'a_selected_subject' => 'На сайте ^site_title был выбран лучший ответ!',

    'c_commented_body' => "Новый комментарий от ^c_handle был добавлен после вашего комментария на сайте ^site_title:\n\n^open^c_content^close\n\nПродолжение обсуждения:\n\n^open^c_context^close\n\nВы можете добавить другой комментарий:\n\n^url\n\nСпасибо, \n\n^site_title",
    'c_commented_subject' => 'На сайте ^site_title был добавлен комментарий',

    'confirm_body' => "Перейдите по ссылке ниже, чтобы подтвердить свой адрес электронной почты на сайте ^site_title.\n\n^url\n\nКод подтверждения: ^code\n\nСпасибо, \n^site_title",
    'confirm_subject' => '^site_title - Подтверждение электронной почты',

    'feedback_body' => "Комментарий:\n^message\n\nИмя:\n^name\n\nЭлектронная почта:\n^email\n\nСо страницы:\n^previous\n\nПользователь:\n^url\n\nIP:\n^ip\n\nБраузер:\n^browser",
    'feedback_subject' => '^ - Отзыв',

    'flagged_body' => "Сообщение ^p_handle отмечено ^flags:\n\n^open^p_context^close\n\nНажмите ниже для просмотра сообщения:\n\n^url\n\n\nНажмите ниже для просмотра всех отмеченных сообщений:\n\n^a_url\n\n\nСпасибо, \n\n^site_title",
    'flagged_subject' => '^site_title - Отмеченное сообщение',

    'moderate_body' => "Сообщение ^p_handle требует вашего одобрения:\n\n^open^p_context^close\n\nНажмите ниже, чтобы подтвердить или отклонить сообщение:\n\n^url\n\n\nНажмите ниже для просмотра всех сообщений ожидающих одобрения:\n\n^a_url\n\n\nСпасибо, \n\n^site_title",
    'moderate_subject' => '^site_title - Модерация',

    'new_password_body' => "Ваш новый пароль для сайта ^site_title.\n\nПароль: ^password\n\nРекомендуем вам его сменить сразу после входа на сайт.\n\nСпасибо, \n^site_title\n^url",
    'new_password_subject' => '^site_title - Ваш новый пароль',

    'private_message_body' => "Вам было отправлено личное сообщение ^f_handle на сайте ^site_title:\n\n^open^message^close\n\n^moreСпасибо, \n\n^site_title\n\n\nДля блокировки личных сообщений зайдите в свой профиль на сайте:\n^a_url",
    'private_message_info' => "Подробнее о ^f_handle:\n\n^url\n\n",
    'private_message_reply' => "Нажмите ниже, чтобы ответить отправить ^f_handle личное сообщение:\n\n^url\n\n",
    'private_message_subject' => 'Сообщение от ^f_handle на сайте ^site_title',

    'remoderate_body' => "Отредактированное сообщение ^p_handle требует вашего повторного подтверждения:\n\n^open^p_context^close\n\nНажмите ниже, чтобы подтвердить или скрыть отредактированное сообщение:\n\n^url\n\n\nНажмите ниже, чтобы просмотреть всю очередь сообщений:\n\n^a_url\n\n\nСпасибо,\n\n^site_title",
    'remoderate_subject' => "^site_title - Перемодерация",

    'q_answered_body' => "К вашему вопросу на сайте ^site_title добавлен ответ от ^a_handle:\n\n^open^a_content^close\n\nВаш вопрос:\n\n^open^q_title^close\n\nЕсли вам нравится этот ответ, вы можете выбрать его в качестве лучшего:\n\n^url\n\nСпасибо, \n\n^site_title",
    'q_answered_subject' => 'На сайте ^site_title ответили на ваш вопрос',

    'q_commented_body' => "К вашему вопросу на сайте ^site_title добавлен новый комментарий от ^c_handle:\n\n^open^c_content^close\n\nВаш вопрос:\n\n^open^c_context^close\n\nВы можете ответить, добавив свой комментарий:\n\n^url\n\nСпасибо, \n\n^site_title",
    'q_commented_subject' => 'К вашему вопросу, на сайте ^site_title, добавлен комментарий',

    'q_posted_body' => "Новый вопрос задал ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nНажмите ниже, чтобы посмотреть вопрос:\n\n^url\n\nСпасибо, \n\n^site_title",
    'q_posted_subject' => 'Добавлен новый вопрос на сайте ^site_title',

    'reset_body' => "Нажмите ниже, чтобы сменить пароль на сайте ^site_title.\n\n^url\n\nКроме того, введите код в соответствующее поле.\n\nКод: ^code\n\nЕсли вы не запрашивали смену пароля, то просто проигнорируйте сообщение.\n\nСпасибо, \n^site_title",
    'reset_subject' => '^site_title - Сброс забытого пароля',

    'to_handle_prefix' => "^, \n\n",

    'u_approved_body' => "Увидеть свой новый профиль можно здесь:\n\n^url\n\nСпасибо,\n\n^site_title",
    'u_approved_subject' => "Пользователь ^site_title был подтвержден",
    'u_registered_body' => "Новый пользователь зарегистрирован как ^u_handle.\n\nНажмите ниже, чтобы посмотреть профиль пользователя:\n\n^url\n\nСпасибо,\n\n^site_title",
    'u_registered_subject' => "^site_title - Зарегистрирован новый пользователь",
    'u_to_approve_body' => "Новый пользователь зарегистрирован как ^u_handle.\n\nНажмите ниже, чтобы подтвердить пользователя:\n\n^url\n\nНажмите ниже, чтобы просмотреть список пользователей ожидающих подтверждения:\n\n^a_url\n\nСпасибо,\n\n^site_title",

    'wall_post_subject' => "^site_title - Запись на вашей стене",
    'wall_post_body' => "^f_handle оставил запись на вашей стене на сайте ^site_title:\n\n^open^post^close\n\nДля ответа нажмите здесь:\n\n^url\n\nСпасибо,\n\n^site_title",

    'welcome_body' => "Благодарим за регистрацию на сайте ^site_title.\n\n^custom^confirmВаши данные:\n\nИмя пользователя: ^handle\nЭлектронная почта: ^email\nПароль: ^password\n\nЗапомните эту информацию.\n\nСпасибо, \n\n^site_title\n^url",
    'welcome_confirm' => "Пожалуйста, нажмите ниже, чтобы подтвердить свой адрес электронной почты.\n\n^url\n\n",
    'welcome_subject' => 'Добро пожаловать на сайт ^site_title!',
);
