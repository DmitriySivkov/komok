<h1>Комок</h1>
<ul>
<li>Запустить докер - docker-compose up</li>
<li>Сделать дамп - make mysql_container + make dump(внутри контейнера)</li>
<li>Импортировать дамп - make import</li>
</ul>
<p>Новый дамп появляется в директории: /dump/new_dump.sql</p>

<p><strong>Если не появляются картинки из БД:</strong></p>
<ul>
<li>прописать симлинки на сервере: php artisan storage:link</li>
</ul>

