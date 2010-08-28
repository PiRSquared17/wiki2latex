<?php

/*
 * File:    w2lMessages.php
 * Created: 2007-09-01
 * Version: 0.9
 *
 * Purpose:
 * Contains all the strings, which are to be localized
 *
 * License:
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */

if ( !defined('MEDIAWIKI') ) {
	$msg  = 'To install Wiki2LaTeX, put the following line in LocalSettings.php:<br/>';
	$msg .= '<tt>require_once( $IP."/extensions/path_to_Wiki2LaTeX_files/wiki2latex.php" );</tt>';
	echo $msg;
	exit( 1 );
}
$messages = array();


$messages['en'] = array(
	'wiki2latex'           => 'Wiki2LaTeX',
	'wiki2latexspecialpage'    => 'Wiki2LaTeX',
	'w2l_tab'              => 'LaTeX/PDF',
	'w2l_description'      => 'Converts an article to LaTeX and PDF.',
	'w2l_export_title'     => '$1 (Wiki2LaTeX)',
	'w2l_export_subtitle'  => 'Export of: $1',
	'w2l_export'           => 'Export as ...',
	'w2l_export_textarea'  => 'Textarea',
	'w2l_export_tex_files' => 'Download tex files',
	'w2l_export_pdf'       => 'Download pdf file (needs working LaTeX-Distribution on server!)',
	'w2l_export_start'     => 'Start Export',
	'w2l_chapter'          => 'chapter',
	'w2l_page'             => 'page',
	'w2l_select_docclass_book' => 'Documentclass Book/scrbook (==heading== gets \chapter{heading})',
	'w2l_select_docclass_report' => 'Documentclass Report/scrreprt (==heading== gets \chapter{heading})',
	'w2l_select_docclass_article' => 'Documentclass Article/scrartcl (==heading== gets \section{heading})',
	'w2l_options' => 'Options',
	'w2l_select_paralist' => 'Paralist',
	'w2l_select_leavenoinclude' => 'Leave NoInclude-blocks in main Article',
	'w2l_select_insertincludeonly' => 'Insert IncludeOnly-blocks in main Article',
	'w2l_select_removetemplates' => 'Remove Template and Parserfunction calls',
	'w2l_select_donotprocesstemplates' => 'Do not process Templates and Parserfunctions (but leave calls in the string)',
	'w2l_select_processtemplates' => 'Process Templates and Parserfunctions',
	'w2l_select_templates_heading' => 'LaTeX-Templates',
	'w2l_select_babel_language' => 'Document Language',
	'w2l_select_template' => 'LaTeX-Template',
	'w2l_select_output' => 'Export article...',
	'w2l_select_textarea' => 'In a Textarea',
	'w2l_select_texfiles' => 'Download tex-files',
	'w2l_select_pdf' => 'Download $1-file (needs working LaTeX-installation on server!)',
	'w2l_start_export' => 'Start Export',
	'w2l_pdfexport_disabled' => '<p>Sorry, pdf-export is not enabled.</p>',
	'w2l_debug_info' => '<p>Time taken to parse article: $1 seconds. Template-Statistic: $2 Inclusions with $3 Bytes</p>',
	'w2l_result_subtitle' => 'Result of: $1',
	'w2l_result_title' => '$1 (Wiki2LaTeX)',
	'w2l_export_mode' => '<p>Mode: $1</p>',
	'w2l_compile_command' => 'Command: $1',
	'w2l_temppath' => 'Path: $1',
	'w2l_compile_run' => '== Run #$1 ==',
	'w2l_result_heading' => '<h2>LaTeX-Result</h2>',
	'w2l_result_folder'=> '<table style="width:100%;"><tr><td><big><strong><a href="$1/extensions/w2l/w2lSendFile.php?title=$2&fid=$3&fmt=pdf">$2.pdf</a></strong></big></td><td style="text-align:right;">Additional links: <a href="$1/extensions/w2l/w2lSendFile.php?title=$2&fid=$3&fmt=tex">$2.tex</a>, <a href="$1/extensions/w2l/w2lSendFile.php?title=$2&fid=$3&fmt=log">$2.log</a></td></table>',
	'w2l_result_tex'=> '<big><strong><a href="$1/extensions/w2l/w2lSendFile.php?title=$2&fid=$3&fmt=tex">$2.tex</a></strong></big>',
	'w2l_parser_article_not_existing' => 'Article does not exist: $1',
	'w2l_parser_protocol' => '<p>Error protocol</p>',
	'w2l_parser_no_namespace' => 'Caution: Namespace could not be found: $1.',
	'w2l_delete_success' => 'Files have been removed (click to hide this message)',
	'w2l_delete_error' => 'Files have not been removed. Please delete them manually. (click to hide this message)',
	'w2l_form_delete_link' => 'Delete temporary files',
	'w2l_delete_confirmation' => 'Really delete all files?',
	'w2l_delete_file_confirmation' => 'Really delete file $1?',
	'w2l_latex_failed' => '<p>LaTeX failed to create your file. Most often this error occurs when your LaTeX-Code requests packages which are not part of your LaTeX-Distribution: <a href="$1/extensions/w2l/w2lSendFile.php?fid=$2&fmt=tex">Main.tex</a>, <a href="$1/extensions/w2l/w2lSendFile.php?fid=$2&fmt=log">Main.log</a></p>', 
	'w2l_warning_archive_activated' => '<div style="border:1px solid black; margin:5px 10% 5px 10%;padding:5px;">You have enabled the archive-support of Wiki2LaTeX 0.7. This feature has been removed as of Version 0.8. You can still access your files <a href="$1">here</a>.</div>',
	'w2l_temp_dir_missing' => 'Wiki2LaTeX could not create the temp-dir required in order to create the pdf. Please check that the server has all rights to access your system\'s tmp-dir.',
	'w2l_show_log' => "show log file"
);
$messages['de'] = array(
	'wiki2latex'           => 'Wiki2LaTeX',
	'wiki2latexspecialpage'    => 'Wiki2LaTeX',
	'w2l_tab'              => 'LaTeX/PDF',
	'w2l_description'      => 'Konvertiert eine Wiki-Seite in LaTeX und PDF.',
	'w2l_export_title'     => '$1 (Wiki2LaTeX)',
	'w2l_export_subtitle'  => 'Ausgabe von: $1',
	'w2l_export'           => 'Ausgabe als ...',
	'w2l_export_textarea'  => 'Textarea',
	'w2l_export_tex_files' => 'Download *.tex files',
	'w2l_export_pdf'       => 'Download PDF-Datei (benötigt eine funktionierende LaTeX-Distribution auf dem Server!)',
	'w2l_export_start'     => 'Start',
	'w2l_chapter'          => 'chapter',
	'w2l_page'             => 'page',
	'w2l_select_docclass_book' => 'Documentclass Book/scrbook (==Überschrift== wird \chapter{heading})',
	'w2l_select_docclass_report' => 'Documentclass Report/scrreprt (==Überschrift== wird \chapter{heading})',
	'w2l_select_docclass_article' => 'Documentclass Article/scrartcl (==Überschrift== wird \section{heading})',
	'w2l_options' => 'Optionen',
	'w2l_select_paralist' => 'Paralist',
	'w2l_select_leavenoinclude' => 'Belasse NoInclude-Blöcke auf der Seite',
	'w2l_select_insertincludeonly' => 'Füge IncludeOnly-Blocke auf der Seite ein',
	'w2l_select_removetemplates' => 'Entferne Templates und Parserfunktionen',
	'w2l_select_donotprocesstemplates' => 'Füge keine Templates ein und führe keine Parserfunktionen aus (aber zeige die entsprechenden Aufrufe)',
	'w2l_select_processtemplates' => 'Füge Templates ein und führe Parserfunktionen aus (Standard)',
	'w2l_select_templates_heading' => 'LaTeX-Templates',
	'w2l_select_babel_language' => 'Dokumentensprache',
	'w2l_select_template' => 'LaTeX-Template',
	'w2l_select_output' => 'Export article...',
	'w2l_select_textarea' => 'In eine Textarea',
	'w2l_select_texfiles' => 'Download *.tex-Dateien',
	'w2l_select_pdf' => 'Download $1-Datei (Benötigt eine funktionierende LaTeX-Distribution auf dem Server!)',
	'w2l_start_export' => 'Start Export',
	'w2l_pdfexport_disabled' => '<p>Der PDF-Export ist hier deaktiviert.</p>',
	'w2l_debug_info' => '<p>Benötigte Zeit: $1 seconds. Template-Statistik: $2 Inclusions mit $3 Bytes</p>',
	'w2l_result_subtitle' => 'Ergebnis von: $1',
	'w2l_result_title' => '$1 (Wiki2LaTeX)',
	'w2l_export_mode' => '<p>Modus: $1</p>',
	'w2l_compile_command' => 'Kommando: $1',
	'w2l_temppath' => 'Pfad: $1',
	'w2l_compile_run' => '== Lauf #$1 ==',
	'w2l_result_heading' => '<h2>LaTeX-Ergebnis</h2>',
	'w2l_result_folder'=> '<table style="width:100%;"><tr><td><big><strong><a href="$1/extensions/w2l/w2lSendFile.php?title=$2&fid=$3&fmt=pdf">$2.pdf</a></strong></big></td><td style="text-align:right;">Zusätzliche Links: <a href="$1/extensions/w2l/w2lSendFile.php?title=$2&fid=$3&fmt=tex">$2.tex</a>, <a href="$1/extensions/w2l/w2lSendFile.php?title=$2&fid=$3&fmt=log">$2.log</a></td></table>',
	'w2l_result_tex'=> '<big><strong><a href="$1/extensions/w2l/w2lSendFile.php?title=$2&fid=$3&fmt=tex">$2.tex</a></strong></big>',
	'w2l_parser_article_not_existing' => 'Artikel existiert nicht: $1',
	'w2l_parser_protocol' => '<p>Fehlerprotokoll</p>',
	'w2l_parser_no_namespace' => 'Auchtung: Namespace konnte nicht gefunden werden: $1.',
	'w2l_delete_success' => 'Dateien wurden gelöscht (Nachricht wegklicken)',
	'w2l_delete_error' => 'Dateien konnten nicht gelöscht werden. Bitte manuell entfernen (Nachricht wegklicken).',
	'w2l_form_delete_link' => 'Lösche temporäre Dateien',
	'w2l_delete_confirmation' => 'Wirklich alle Dateien löschen?',
	'w2l_delete_file_confirmation' => 'Wirklich Datei $1 löschen?',
	'w2l_latex_failed' => '<p>LaTeX konnte die Datei nicht erstellen. Dies passiert meist wenn der LaTeX-Code nicht vorhandene LaTeX-Pakete anfordert: <a href="$1/extensions/w2l/w2lSendFile.php?fid=$2&fmt=tex">Main.tex</a>, <a href="$1/extensions/w2l/w2lSendFile.php?fid=$2&fmt=log">Main.log</a></p>', 
	'w2l_warning_archive_activated' => '<div style="border:1px solid black; margin:5px 10% 5px 10%;padding:5px;">Die Archivfunktion von Wiki2LaTeX 0.7 ist aktiviert. Diese Funktion wurde ab Version 0.8 entfernt. <a href="$1">Die Dateien können hier noch abgerufen werden</a>.</div>',
	'w2l_temp_dir_missing' => 'Wiki2LaTeX konnte kein temporäres Verzeichnis erstellen, um das PDF zu erstellen. Bitte sicherstellen, dass der Webserver auf das System-Temp-Verzeichnis zugreifen kann.',
	'w2l_show_log' => "zeige das Log-File"
);
$messages['uk'] = array(
	'wiki2latex'				=> 'Wiki2LaTeX',
	'wiki2latexspecialpage'		=> 'Wiki2LaTeX',
	'w2l_tab'					=> 'LaTeX/PDF',
	'w2l_description'			=> 'Конвертує статтю в LaTeX та PDF.',
	'w2l_export_title'			=> '$1 (Wiki2LaTeX)',
	'w2l_export_subtitle'		=> 'Експорт : $1',
	'w2l_export'				=> 'Експортувати як ...',
	'w2l_export_textarea'		=> 'Текстове поле',
	'w2l_export_tex_files'		=> 'Завантажити tex-файл',
	'w2l_export_pdf'			=> 'Завантажити PDF файл (вимагає робочого LaTeX-пакету на сервері!)',
	'w2l_export_start'     => 'Почати Експорт',
	'w2l_chapter'          => 'розділ',
	'w2l_page'             => 'сторінка',
	'w2l_select_docclass_book' => 'Documentclass Book/scrbook (==заголовок== стане \chapter{заголовок})',
	'w2l_select_docclass_report' => 'Documentclass Report/scrreprt (==заголовок== стане \chapter{заголовок})',
	'w2l_select_docclass_article' => 'Documentclass Article/scrartcl (==заголовок== стане \section{заголовок})',
	'w2l_options' => 'Налаштування',
	'w2l_select_paralist' => 'Paralist',
	'w2l_select_leavenoinclude' => 'Залишати NoInclude-блоки в основній Статті',
	'w2l_select_insertincludeonly' => 'Вставляти IncludeOnly-блоки в основну Статтю',
	'w2l_select_removetemplates' => 'Видалити визови Template та Parserfunction',
	'w2l_select_donotprocesstemplates' => 'Не обробляти Templates та Parserfunctions (але залишити визови в стрічці)',
	'w2l_select_processtemplates' => 'Обробляти Templates та Parserfunctions',
	'w2l_select_templates_heading' => 'LaTeX-Templates',
	'w2l_select_babel_language' => 'Мова Документу',
	'w2l_select_template' => 'LaTeX-Template',
	'w2l_select_output' => 'Експортувати статтю...',
	'w2l_select_textarea' => 'В текстовий блок',
	'w2l_select_texfiles' => 'Завантажити tex-файл',
	'w2l_select_pdf' => 'Завантажити $1-файл (вимагає робочу LaTeX-інсталяцію на сервері!)',
	'w2l_start_export' => 'Почати Експорт',
	'w2l_pdfexport_disabled' => '<p>Вибачте, pdf-експорт не увімкнено.</p>',
	'w2l_debug_info' => '<p>Час опрацювання статті: $1 секунд(и). Template-Statistic: $2 Вставок розміром $3 Байти</p>',
	'w2l_result_subtitle' => 'Результат: $1',
	'w2l_result_title' => '$1 (Wiki2LaTeX)',
	'w2l_error_no_template' => '<p>Вибачте, треба вибрати шаблон(template)! <a href="javascript:history.back();">Назад</a></p>',
	'w2l_export_mode' => '<p>Режим: $1</p>',
	'w2l_compile_command' => 'Команда: $1',
	'w2l_temppath' => 'Шлях: $1',
	'w2l_compile_run' => '== Виконання #$1 ==',
	'w2l_result_heading' => '<h2>LaTeX-Результат</h2>',
	'w2l_result_folder'=> '<table style="width:100%;"><tr><td><big><strong><a href="$1/extensions/w2l/w2lSendFile.php?fid=$2&fmt=pdf">Main.pdf</a></strong></big></td><td style="text-align:right;">Додаткові посилання: <a href="$1/extensions/w2l/w2lSendFile.php?fid=$2&fmt=tex">Main.tex</a>, <a href="$1/extensions/w2l/w2lSendFile.php?fid=$2&fmt=log">Main.log</a></td></table>',
	'w2l_result_tex'=> '<big><strong><a href="$1/extensions/w2l/w2lSendFile.php?fid=$2&fmt=tex">Main.tex</a></strong></big>',
	'w2l_parser_no_default_value' => "Не може бути типовим значенням",
	'w2l_parser_article_not_existing' => 'Стаття не існує: $1',
	'w2l_parser_protocol' => '<p>Помилка протоколу</p>',
	'w2l_parser_no_namespace' => 'Застереження: Простір імен не знайдено: $1.',
	'w2l_delete_success' => 'Файли видалено (клацнути щоб сховати це повідомлення)',
	'w2l_delete_error' => 'Файли не було видалено. Будьласка видаліть їх власноруч. (клацнути щоб сховати це повідомлення)',
	'w2l_form_delete_link' => 'Видалити тимчасові файли',
	'w2l_delete_confirmation' => 'Дійсно видалити всі файли?',
	'w2l_delete_file_confirmation' => 'Дійсно видалити файл $1?',
	'w2l_latex_failed' => '<p>LaTeX не зміг створити файл. Найчастіше така помилка виникає коли LaTeX-Code вимагає пакунки які не є частиною LaTeX-Distribution: <a href="$1/extensions/w2l/w2lSendFile.php?fid=$2&fmt=tex">Main.tex</a>, <a href="$1/extensions/w2l/w2lSendFile.php?fid=$2&fmt=log">Main.log</a></p>', 
		'w2l_warning_archive_activated' => '<div style="border:1px solid black; margin:5px 10% 5px 10%;padding:5px;">Увімкнено підтримку архівів у Wiki2LaTeX 0.7. Цю можливість було видалено починаючи з версії 0.8. Планується повернути її як реалізацію, що використовуватиме репозиторій файлів Mediawiki. Все ще можна отримати доступ до файлів <a href="$1">тут</a>.</div>',
	'w2l_temp_dir_missing' => 'Wiki2LaTeX не може створити temp-директорію необхідну для створення PDF-файлу. Будьласка перевірте чи має сервер всі права на доступ до системної tmp-директорії.',
);
	
$messages['pl'] = array(
	'wiki2latex'           => 'Wiki2LaTeX',
	'wiki2latexspecialpage'    => 'Wiki2LaTeX',
	'w2l_tab'              => 'LaTeX/PDF',
	'w2l_description'      => 'Konwertuje artykul do LaTeX lub PDF.',
	'w2l_export_title'     => '$1 (Wiki2LaTeX)',
	'w2l_export_subtitle'  => 'Export of: $1',
	'w2l_export'           => 'Export as ...',
	'w2l_export_textarea'  => 'Okno podgladu',
	'w2l_export_tex_files' => 'Pobierz plik TeX',
	'w2l_export_pdf'       => 'Pobierz plik PDF (wymaga instalacji LaTeX)',
	'w2l_export_start'     => 'Rozpocznik konwersje',
	'w2l_chapter'          => 'chapter',
	'w2l_page'             => 'page',
	'w2l_select_docclass_book' => 'Klasa dokumentu: book (==naglowki== stana sie nazwami rozdzialow \chapter{})',
	'w2l_select_docclass_report' => 'Klasa dokumentu: report (==naglowki== stana sie nazwami rozdzialow \chapter{})',
	'w2l_select_docclass_article' => 'Klasa dokumentu: article  (==naglowki== stana sie nazwami sekcji \section{})',
	'w2l_options' => 'Opcje',
	'w2l_select_paralist' => 'Paralist',
	'w2l_select_leavenoinclude' => 'Leave NoInclude-blocks in main Article',
	'w2l_select_insertincludeonly' => 'Insert IncludeOnly-blocks in main Article',
	'w2l_select_removetemplates' => 'Usun wzorce i funkcje',
	'w2l_select_donotprocesstemplates' => 'Nie przetwarzaj wzorcy i funkcji (ale pozostaw je w pliku)',
	'w2l_select_processtemplates' => 'Przetworz wzorce i funkcje',
	'w2l_select_templates_heading' => 'Wzorzec pliku LaTeX',
	'w2l_select_babel_language' => 'Jezyk docelowego dokumentu',
	'w2l_select_template' => 'Wybierz wzorzec',
	'w2l_select_output' => 'Wynik operacji...',
	'w2l_select_textarea' => 'W oknie podgladu',
	'w2l_select_texfiles' => 'Pobierz gotowy plik TeX',
	'w2l_select_pdf' => 'Pobierz plik $1 (wymaga instalacji LaTeX!)',
	'w2l_start_export' => 'Rozpocznij przetwarzanie',
	'w2l_pdfexport_disabled' => '<p>Eksport do PDF zablokowany.</p>',
	'w2l_debug_info' => '<p>Czas przetwarzania: $1 sekund. Statystiki wzorce: $2 zalaczen, $3 bajtow</p>',
	'w2l_result_subtitle' => 'Wynik dzialana na: $1',
	'w2l_result_title' => '$1 (Wiki2LaTeX)',
	'w2l_error_no_template' => '<p>Blad, musisz wybrac wzorzec dokumentu! <a href="javascript:history.back();">Cofnij</a></p>',
	'w2l_export_mode' => '<p>Tryb: $1</p>',
	'w2l_compile_command' => 'Polecenie: $1',
	'w2l_temppath' => 'Sciezka: $1',
	'w2l_compile_run' => '== Wykonaj #$1 ==',
	'w2l_result_heading' => '<h2>Wynik dzialania LaTeX</h2>',
	'w2l_result_folder'=> '<table style="width:100%;"><tr><td><big><strong><a href="$1/extensions/w2l/w2lSendFile.php?title=$2&fid=$3&fmt=pdf">$2.pdf</a></strong></big></td><td style="text-align:right;">Additional links: <a href="$1/extensions/w2l/w2lSendFile.php?title=$2&fid=$3&fmt=tex">$2.tex</a>, <a href="$1/extensions/w2l/w2lSendFile.php?title=$2&fid=$3&fmt=log">$2.log</a></td></table>',
	'w2l_result_tex'=> '<big><strong><a href="$1/extensions/w2l/w2lSendFile.php?title=$2&fid=$3&fmt=tex">$2.tex</a></strong></big>',
	'w2l_parser_article_not_existing' => 'Artykul $1 nie istnieje',
	'w2l_parser_protocol' => '<p>Blad protokolu</p>',
	'w2l_parser_no_namespace' => 'Uwaga: Przestrzeni nazw $1 nie znaleziono',
	'w2l_delete_success' => 'Pliki zostaly usuniete (kliknij aby ukryc komunikat)',
	'w2l_delete_error' => 'Nie udalo sie usunac plikow, usun je recznie (kliknij aby ukryc komunikat)',
	'w2l_form_delete_link' => 'Usun pliki tymczasowe',
	'w2l_delete_confirmation' => 'Czy aby na pewno chcesz usunac wszystkie pliki?',
	'w2l_delete_file_confirmation' => 'Czy aby na pewno chcesz usunac plik $1?',
	'w2l_latex_failed' => '<p>LaTeX nie mogl przetworzyc pliku. Przypuszczalnie plik TeX wymaga instalcji dodatkowych pakietow. <href="$1/extensions/w2l/w2lSendFile.php?fid=$2&fmt=tex">Main.tex</a>, <a href="$1/extensions/w2l/w2lSendFile.php?fid=$2&fmt=log">Main.log</a></p>', 
	'w2l_warning_archive_activated' => '<div style="border:1px solid black; margin:5px 10% 5px 10%;padding:5px;">Funkcja obslugi archiwow z wersji 0.7 Wiki2LaTeX jest wlaczona. Ta funkcjonalnosc od wersji 0.8 jest inna. Mozesz skorzystac z archiwum Mediawiki. Dostep do plikow jest pod <a href="$1">linkiem</a>',
	'w2l_temp_dir_missing' => 'Wiki2LaTeX nie moze utworzyc katalogu tymczasowego. Sprawdz uprawnienia do katalogow w serwerze.',
	'w2l_show_log' => "show log file"
);

