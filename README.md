# test-assignment-ivolga01-news-agency
01 The problem
==============

1. PHP и HTML. Напишите код на PHP
В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости. Нужно в переменную $b записать сокращенный текст новости по правилам:
- обрезать до 180 символов
- приписать многоточие
- последние 2 слова и многоточие сделать ссылкой на полный текст новости. 
Какие проблемы вы видите в решении этой задачи? Что может пойти не так? 
Результат: ссылка на репозиторий с кодом и ваши комментарии.

02 Files
========
[!!readme.txt]
[env.bat]   To run on Windows
[index.php] 
[ivolga_text_constants_chinese.php] Chinese simplified
[ivolga_text_constants_eng.php]  English
[ivolga_text_constants_rus.php]  Russian
[php.ini]   Just in case. To set "UTF-8" charset constant

03 ISSUES
=========

I use UTF-8 but no such luck! ;-) 

03.1 Chinese, Arabic
------------
It does not work for Chinese at the moment as my PHP 7 regex engine does not support Chinese space characters out of the box.

In my opinion it does not work for Arabic languages as well. There should be some extra code to solve these problems.
