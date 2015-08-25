<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>Кузница | SliTaz</title>
	<meta name="description" content="«Кузница» разработчиков SliTaz"/>
	<meta name="keywords" lang="ru" content="SliTaz, разработчики, hg, bugs"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.ru.html");
include("../../lib/html/nav.ru.html"); 
include("../../lib/lang.php");
?>

<!-- Content -->
<section id="content">

<h2>
Совместное управление
</h2>

<ul>
<li>
<a href="#kiss">KISS и соответствие стандартам</a>
</li>
<li>
<a href="#tank">Сборочный хост и дом</a>
</li>
<li>
<a href="#repos">Репозитории Mercurial</a>
</li>
<li>
<a href="#gui">GUI в GTK и CGI/web</a>
</li>
<li>
<a href="#iconv">Реализация iconv()</a>
</li>
<li>
<a href="#pkgs">Сборка пакетов SliTaz</a>
</li>
<li>
<a href="#website">Управление сайтом</a>
</li>
</ul>


<h2 id="kiss">
KISS и соответствие стандартам
</h2>

<p>
Что означает <a target="_blank" href="http://ru.wikipedia.org/wiki/KISS_%28%D0%BF%D1%80%D0%B8%D0%BD%D1%86%D0%B8%D0%BF%29">KISS</a>?
Будьте проще: следуйте лучшим стандартам, тщательно планируйте и пишите качественную документацию, делайте систему стабильной и надежной, сохраняйте <em>rootfs</em> на LiveCD настолько лёгким, чтобы дистрибутив мог запускаться на компьютерах со 128 МБ оперативки.
В дистрибутиве возможно использование GTK+2, Dialog, SHell-скриптов и средств разработки PHP.
Идея заключается в том, чтобы не дублировать существующее, и думать о малом…
</p>


<h2 id="tank">
Tank — сборочный хост и домашние папки
</h2>

<p>
Участники проекта могут получить аккаунт на сервере Tank с безопасным доступом, дисковым пространством, общим каталогом и всеми средствами разработки.
Разработчики могут компилировать пакеты, а мэйнтейнеры зеркала могут осуществлять синхронизацию.
На сервере Tank также находятся домены веб-загрузки, сборочного бота и SliTaz Pro: <a href="http://tank.slitaz.org/">tank.slitaz.org</a>.
</p>
<p>
Инструкции по использованию сборочного хоста описаны в Cookbook: <a href="http://doc.slitaz.org/en:cookbook:buildhost">SliTaz Build Host (Tank)</a>.
</p>


<h2 id="repos">
Репозитории Mercurial
</h2>

<p>
Репозитории SliTaz Mercurial (Hg) можно просматривать и клонировать без ограничений, используя адрес <a href="http://hg.slitaz.org/">http://hg.slitaz.org/</a>.
Те, у кого есть доступ на запись, могут напрямую использовать адрес <tt>repos.slitaz.org</tt>, требующий аутентификации.
Mercurial работает на Python; его можно установить командой <code>tazpkg get-install mercurial</code>
</p>


<h3>~/.hgrc</h3>

<p>
Перед тем, как отправить ваш первый коммит на сервер, внесите в файл конфигурации Hg ваше имя, фамилию и адрес электронной почты.
Запомните, Hg не будет работать, если вы root.
Пример персонального файла ~/.hgrc:
</p>

<pre class="script">
[ui]
username = Ivan Ivanov &lt;ivanov@example.com&gt;
</pre>


<h4>
Клонировать → изменить → зафиксировать изменения → отправить
</h4>

<p>
Клонировать репозиторий, к примеру, wok:
</p>

<pre>
$ hg clone http://repos.slitaz.org/wok
</pre>

<p>
Перейдите в папку wok; вы должны находиться в репозитории, чтобы иметь возможность использовать команды 'hg'.
Чтобы проверить все журналы, или просто последний журнал:
</p>

<pre>
$ hg log
$ hg head
</pre>

<p>
Добавьте или измените один или несколько файлов и зафиксируйте коммит:
</p>

<pre>
$ hg add
$ hg status
$ hg commit -m "Log message..."
$ hg log
</pre>

<p>
Обратите внимание, что вы можете использовать команду <code>rollback</code> для отмены последней операции.
Перед отправкой изменений на сервер (<em>push</em> — «протолкнуть» изменения на сервер) возьмите за правило принимать текущие изменения с сервера (при их наличии):
</p>

<pre>
$ hg pull
$ hg push
</pre>

<p>
Готово, теперь ваши изменения, код или исправления находятся на сервере.
</p>


<h4>
Обновление локального wok
</h4>

<p>
Для того, чтобы обновить ваш wok скомандуйте (<em>pull</em> — «втянуть» изменения с сервера):
</p>

<pre>
$ hg pull -u
</pre>


<h4>
Полезные команды
</h4>

<p>
Могут быть использованы следующие команды Hg:
</p>

<ul>
<li>
<code>hg help</code> — показать полный список команд.
</li>
<li>
<code>hg rollback</code> — отменить последнее действие (commit, pull, push).
</li>
<li>
<code>hg log пакет</code> — показать журнал для пакета.
</li>
<li>
<code>hg head</code> — показать последний журнал.
</li>
</ul>

<p>
В сети можно найти немало статей и учебников по Hg на русском языке.
Мне, например, понравился цикл переводных статей Джоэля Спольски: <a href="http://habrahabr.ru/post/108658/" target="_blank">Hg Init: Часть 2. Основы Mercurial</a>.
Самое основное, действительно, можно рассказать за минуту, но иногда могут возникнуть ситуации, когда вам понадобится помощь.
Прочитайте и обязательно закрепите полученные данные на практике, прежде чем работать с репозитариями SliTaz.
</p>


<h2 id="gui">
GUI — на C/GTK, Yad, Vala/Genie и CGI/web
</h2>

<p>
Существует много способов создания пользовательского интерфейса в мире открытого исходного кода.
С самого начала проекта и до 3.0 мы, в основном, использовали утилиту под названием GtkDialog.
Она позволяет нам создавать очень красивый и сложный интерфейс в GTK с помощью скриптового языка, который можно просто запустить без необходимости компиляции.
Но GtkDialog перестал развиваться, в нём не хватает многих новых возможностей GTK.
Поэтому мы перешли на Yad для простых графических диалогов.
А все диалоги администрирования, пакетного менеджера и утилит настройки используют TazPanel, веб-интерфейс которой написан на xHTML 5 и CSS 3.
</p>
<p>
Yad очень прост, он не позволяет создавать сложные интерфейсы, даже если нам нужны только 2 или 3 пункта с метками и несколько кнопок, поэтому придётся искать другое решение.
Преимущество скриптового языка в том, что его не нужно компилировть, диалоги можно писать в режиме реального времени (но он производит медленные приложения).
Написание утилит на C сложно и доступно не каждому, в то время как скрипты оболочки проще для понимания.
Поэтому сейчас наш руководящий принцип — сохранить и продолжать совершенствовать наши утилиты командной строки, а также обеспечить их графическим интерфейсом на GTK или CGI/веб.
</p>
<p>
Многие новые языки, такие как Genie, Vala и GTKaml, используют GTK.
Но имейте в виду, что они не так популярны, как C и GTK, и не факт, что их проще освоить и использовать (для выполнения действий в простых приложениях можно использовать скрипты оболочки).
Вы можете использовать Vala, но посмотрите на чистый код GTK, создающий одно окно, для этого нужно всего 14 строк:
</p>

<pre>
#include &lt;gtk/gtk.h&gt;

int main(int argc, char *argv[])
{
	GtkWidget *window;

	gtk_init(&amp;argc, &amp;argv);
	window = gtk_window_new(GTK_WINDOW_TOPLEVEL);
	g_signal_connect (G_OBJECT (window), "destroy",
		G_CALLBACK (gtk_main_quit), NULL);

	gtk_widget_show(window);
	gtk_main();
	return 0;
}
</pre>

<p>
Если вы не уверены в том, какой язык использовать, обсудите его в рассылке.
Если вам нужен только небольшой функционал GUI, посмотрите на tazbox в репозитории slitaz-tools, в нём есть крошечные утилиты для рабочего стола, такие как окно выхода из системы.
Первый подпроект SliTaz, написанный на чистом GTK, — это TazWeb.
Вы можете разобраться с ним, чтобы узнать способы использования system() для добавления системных команд в интерфейс.
Например, TazWeb использует Wget для загрузки и Sed для добавления закладок.
</p>
<p>
Скрипты Yad должны следовать руководящим принципам TazYad:
<a href="http://hg.slitaz.org/slitaz-dev-tools/raw-file/tip/tazyad/README">README</a>
и
<a href="http://hg.slitaz.org/slitaz-dev-tools/raw-file/tip/tazyad/tazyad">пример кода</a>.
</p>


<h2 id="iconv">
Реализация iconv()
</h2>

<p>
SliTaz использует iconv(), предоставленный GNU glibc — любые пакеты, предлагающие <code>libiconv</code>, должны использовать библиотеку, содержащуюся в <code>glibc-locale</code>.
Поэтому в SliTaz больше не входит пакет libiconv (1,2 МБ).
</p>


<h2 id="pkgs">
Сборка пакетов SliTaz
</h2>

<p>
Официальная сборка осуществляется с помощью Cookutils.
Программа, а также документация о том, как использовать cook и <a href="http://hg.slitaz.org/cookutils/raw-file/tip/doc/cookutils.en.html">создавать пакеты SliTaz</a> для пакетного менеджера TazPKG, установлена на каждой системе SliTaz.
</p>
<p>
Пакеты tazpkg в SliTaz создаются автоматически при помощи <a href="http://cook.slitaz.org/">Cooker</a> («повар») из пакета Cookutils, а также рецепта из wok.
В Cookbook описан формат <a href="http://doc.slitaz.org/en:cookbook:receipt">рецептов</a>.
Прежде, чем начать, необходимо прочитать документацию о Cook и рецептах.
</p>
<p>
Что касается выбора пакета, идея состоит в том, чтобы предложить пакет по задаче или функциональности, т.е. выбрать самое легкое приложение в какой-либо области, которое не дублирует уже имеющихся функций других пакетов.
Обратите внимание, что текущие пакеты могут быть изменены; если вы найдете альтернативу, которая легче, или с более широкими возможностями, или более <em>привлекательная</em> за счет нескольких дополнительных килобайт, вы можете предложить ее другим в рассылке.
Особое внимание необходимо уделить пакетам для LiveCD, они должны быть очищены, лишены необязательных зависимостей и опций компилятора.
Обычно, кандидаты пакетов для основного LiveCD обсуждаются в рассылке.
</p>
<p>
Прежде чем вы приступите к компиляции и созданию пакетов для SliTaz, убедитесь, что их еще нет в <a href="http://download.tuxfamily.org/slitaz/packages/undigest/">неофициальном</a> wok, который находится на основном зеркале SliTaz.
Не забывайте, что участники рассылки могут помочь вам и о том, что документация по <a href="http://doc.slitaz.org/en:cookbook:wok">wok и утилитам</a> написана, чтобы помочь вам начать работу.
</p>


<h3 id="pkgs-naming">
Именование пакетов
</h3>

<p>
В большинстве случаев пакет называется так же, как его исходник, за исключением модулей Python, Perl, PHP, Ruby и Lua.
Например, пакет, содержащий шаблон Kid для системы, написанной на Python и XML называется <code>python-kid</code>.
</p>


<h2 id="website">
Управление сайтом
</h2>

<p>
Управление сайтом осуществляется через репозиторий Mercurial, он может быть клонирован командой:
</p>

<pre>
$ hg clone http://hg.slitaz.org/website
</pre>

<p>
Или, если у вас есть соответствующие права:
</p>

<pre>
$ hg clone http://repos.slitaz.org/website
</pre>


<h3>
Стиль написания xHTML
</h3>

<p>
Страницы и различные <em>книги</em> написаны на xHTML 1.0 Transitional.
Заголовок 1-го уровня используется только один раз (вверху страницы), заголовок 2-го уровня — это название документа, а уровни 3 и 4 используются для подзаголовков.
Если используется маркированный список со ссылками на подразделы страницы, то он помещается вверху, сразу после заголовка 2-го уровня.
Абзацы текста окружаются тегами <code>&lt;p&gt;…&lt;/p&gt;</code>.
Для отступов мы используем не пробелы, а табуляцию — она помогает понять структуру страницы и экономит вес, занимаемый страницей (в байтах).
Для того, чтобы поместить внутри абзаца код, как, например, имя команды, предпочтительно использовать <code>&lt;code&gt;</code>.
Для отображения команд и демонстрации использования терминала в веб-странице используется <code>&lt;pre&gt;</code> для отображения заранее отформатированного текста.
Пример:
</p>

<pre>
$ команда
</pre>

<p>
Для отображения текста, который можно скопировать и вставить, например, скриптов, фрагментов кода, примеров конфигурационных файлов и т.д. — мы также используем <code>&lt;pre&gt;</code>, но с CSS-классом под названием «script».
Пример:
</p>

<pre class="script">
&lt;pre class="script"&gt;

код…

&lt;/pre&gt;
</pre>

<p>
<em>Выделенные</em> слова помещаются в тег <code>&lt;em&gt;</code>, а внутренние ссылки являются относительными.
Не забудьте проверить соответствие кода стандартам при помощи онлайнового <em>валидатора</em> от W3C.
</p>


<h2 id="diff">
Diff и patch
</h2>

<p>
Утилиты командной строки <code>diff</code> и <code>patch</code> соответственно создают и применяют специальные файлы (<em>«патчи»</em>), в которых содержатся различия между двумя файлами.
Эта техника часто используется для совместной работы — она позволяет легко увидеть изменения, внесенные в исходный файл.
Чтобы создать файл <code>diff</code>, который предназначен для чтения людьми в простом текстовом редакторе, используйте параметр <code>-u</code>:
</p>

<pre>
$ diff -u файл.оригинал файл.измененный &gt; файл.diff
</pre>

<p>
Применить патч:
</p>

<pre>
$ patch файл.оригинал файл.diff
</pre>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
