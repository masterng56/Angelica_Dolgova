<?php
get_header();
get_sidebar();
?>

<div id="container">

<h1 class="postitle">Страница не найдена<hr /></h1>
<br>
<p>Запрашиваемая Вами страница не найдена на сервере. Попробуйте начать поиск с <a href="<?php bloginfo('url'); ?>" title="Главная страница блога">первой страницы</a>.</p>
<p>Если ошибка будет повторяться, обратитесь к Вебмастеру.</p>

<p>Альтернатива - используйте одну из приведенных ниже ссылок, чтобы найти то, что вы ищете:</p>
<ul>
<?php wp_list_pages('title_li=' ); ?>
<li><a href="<?php bloginfo('rss2_url'); ?>">RSS Канал</a></li>
</ul>
<?php /* Локализация шаблона - FreeWordpressThemes.ru */ ?>

<h2>Последние статьи:</h2>
<ul>
<?php wp_get_archives('type=postbypost&limit=10'); ?>
</ul>
</div>

</div>

<?php get_footer(); ?>
