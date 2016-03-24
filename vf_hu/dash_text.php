<?php

$Definition['<strong>Heads Up!</strong> Deleting a role can result in users not having access to the application.'] = '<strong>Figyelem!</strong> Egy szerep törlése azt erdeményezheti, hogy felhasználók nem fognak hozzáférni az alkalmazáshoz.';
$Definition['<strong>Heads Up!</strong> Moving discussions into a replacement category can result in discussions vanishing (or appearing) if the replacement category has different permissions than the category being deleted.'] = '<strong>Figyelem!</strong> Beszélgetések atmozgatása egy másik kategóriába azt erdeményezheti, hogy beszélgetések eltűnnek (vagy megjelennek) ha a másik kategória más jogokkal rendelkezik, mint amiben a beszélgetés eredetileg szerepelt (ahonnan törölve lett).';

$Definition['About.DisableStatistics'] = 'Ha le kell tiltanod ezt az adatküldési opciót, valamilyen üzleti okból, úgy teheted meg, hogy a következő sort adod hozzá a telepítésed konfigurációs file-jához: <code>$Configuration[\'Garden\'][\'Analytics\'][\'Enabled\'] = FALSE;</code>';
$Definition['About.VanillaStatistics'] = 'Életbevágóan fontos ennek az ingyenes, nyílt forrású software-nek, hogy pontosan mérjük azt, hogy mennyire elérhető és hatékony a Vanilla. Arra kérünk, hogy legyél kedves és ne kapcsold ki az adatküldést.';
$Definition['AboutCommentEmbedding'] = 'A Vanilla használható a blogod beágyazott hozzászólási rendszereként is. Sőt, arra is használható, hogy bármilyen weboldalhoz hozzászólásokat tudj adni.';
$Definition['AboutEmbedding'] = 'A beágyazás a közösséged részét vagy teljes egészét ágyazza be más alkalmazásokba vagy weboldalakba.';
$Definition['About Vanilla Statistics'] = 'A Vanilla Statisztikájáról';
$Definition['Access your community forum by clicking the "Visit Site" link.'] = 'Lépjen be a közösség oldalára az oldal tetején lévő "Belépés" hivatkozásra, vagy <a href={/,url}> ide kattintva </a>. A közösségi fórum az, amit minden felhasználó és vendég lát, amikor ellátogat ide <a href="{/,url,domain}">{/,url,domain</a>';
$Definition['ApplicationHelp'] = 'Az alkalmazások segítségével nagy számú funkcionalitást adhatsz az oldaladhoz.<br />Amint egy alklamazás a %s mappához hozzá lett adva, itt engedélyezheted vagy tilthatod le.';

$Definition['Check out these tutorials to get started using Vanilla'] = 'A Vanilla a legegyszerűbb, leghathatósabb közösségi platform a világon. A legeslegeslegegyszerűbb használni. Kezdd ezzel a bevezető videóval majd folytasd az alábbi lépésekkel. Sok sikert!';

$Definition['Deleting a role can result in users not having access to the application.'] = 'Egy szerep törlése azt erdeményezheti, hogy felhasználók nem fognak hozzáférni az alkalmazáshoz.';
$Definition['Discussion categories are used to help your users organize their discussions in a way that is meaningful for your community.'] = 'A beszélgetés kategóriák arra valók, hogy segítsenek a felhasználóknak rendszerezni a beszélgetéseiket a közösség számára használható, érthető módon.';
$Definition['Don\'t embed your forum admin dashboard (pop it out to full-screen)'] = 'Ne ágyazd be a fórumod adminisztrációs vezérlőpultját (ugorjon fel teljes képernyőként)';
$Definition['Drag and drop the categories below to sort and nest them.'] = 'Húzd-és-dobd a lenti kategóriákat azok rendezéséhez és egymásba ágyazásához.';

$Definition['Enter the address of your Wordpress Blog and we\'ll take it from there.'] = 'Add meg a Wordpress Blogod címét, innen átvesszük az irányítást.';
$Definition['Enter the connection settings for your sphinx server below.'] = 'Add meg a sphinx szervered kapcsolódási paramétereit.';
$Definition['Every edit or deletion is recorded here. Use &lsquo;Restore&rsquo; to undo any change.'] = 'Minden módosítás fel van itt jegyezve. Használd a &lsquo;Visszaállítás&rsquo; -t, hogy visszavonj bármilyen módosítást.';
$Definition['Everyone who signs up gets a profile page.'] = 'Mindazok, akik regisztrálnak a közösségi oldaladra, kapnak egy nyilvános oldalt, ahova   feltölthetik a saját képeiket,  a beállításaikat  valamint figyelhetik, milyen érdekességek zajlanak a csoportban. <a href="{/profile,url}">Módosítsa a beállításait most</a>.';
$Definition['Every user in your site is assigned to at least one role. Roles are used to determine what the users are allowed to do.'] = 'Az oldal minden felhasználójához legalább egy szerepkör hozzá lesz rendelve. A szerepkörök határozzák meg, hogy az oldal egy felhasználója mire képes és mire nem.';

$Definition['Failed to connect to the database with the username and password you entered. Did you mistype them? The database reported: <code>%s</code>'] = 'Nem sikerült a kapcsolódás az adatbáziskezelőhöz a megadott felhasználói név és jelszó párossal. Elírtad? Ezt jelentette az adatbázis: <code>%s</code>';
$Definition['Force the dashboard to only be accessible through this url <em>(not recommended)</em>'] = 'Kényszerítsd a vezérlőpultot, hogy csak ezen az url-en keresztül lehessen elérni <em>(nem javasolt)</em>';
$Definition['For SEO purposes, search engine crawlers are excluded from being forced to view the forum in the remote url.'] = 'SEO okok miatt, a kereső botok nincsenek kényszerítve, hogy a fórumot a távoli url-en keresztül nézzék.';

$Definition['Garden.StatisticsDisabled'] = 'Kimondottan kikapcsoltad a Vanilla Statisztikát a konfigurációs file-odban.';
$Definition['Garden.StatisticsLocal.Explain'] = 'Úgy tűnik ez a fórum teszt környezetben fut, vagy legalábbis privát IP címet jelent le. Alapértelmezés szerint, privát IP-n futó fórumok nincsenek nyomonkövetve.';
$Definition['Garden.StatisticsLocal.Resolve'] = 'Ha biztos vagy abban, hogy a fórum elérhető az Itnernetről, akkor itt kényszerítheted ki a statisztika használatát:';
$Definition['Garden.StatisticsReadonly.Explain'] = 'A config.php file-od csak olvashatónak tűnik. Ez azt jelenti, hogy a Vanilla nem lesz képes automatikusan regisztrálni a fórumod InstallationID-jét és InstallationSecret-jét';
$Definition['Garden.StatisticsReadonly.Resolve'] = 'A mgoldáshoz állítsd 777-re a conf/config.php file-t.';

$Definition['Heads Up! This is a special role that does not allow active sessions. For this reason, the permission options have been limited to "view" permissions.'] = 'Figyelem, ez egy speciális feladat amit nem csak a megfelelő jogosultsággal rendelkező felhasználók láthatnak.';

$Definition['If a banner logo is uploaded, it will replace the banner title on user-facing forum pages.'] = 'Ha egy banner logo-t feltöltesz, le fogja cserélni a banner címsort a felhasználói fórum oldalakon.';
$Definition['If you want to decrease the warning level then remove a warning.'] = 'Ha csökkenteni szeretnéd a figyelmeztetési szintet, akkor törölnöd kell egy figyelmeztetést.';
$Definition['Invitations can be sent from users\' profile pages.'] = 'Ha meghívásos regisztráció-típust használsz, a felhasználók profilja tartalmazni fog egy <a href="%s" class="Popup">Meghívóim</a> linket.';
$Definition['It appears as though the database you specified does not exist yet. Have you created it yet? Did you mistype the name? The database reported: <code>%s</code>'] = 'Úgy tűnik, hogy az általad megadott adatbázis meg nem létezik. Létre hoztad már? Elgépelted a nevét? Ezt jelentette az adatbázis: <code>%s</code>';
$Definition['It is a good idea to keep the maximum number of characters allowed in a comment down to a reasonable size.'] = 'Javasolt az egy bejegyzésben megadható karakterek maximális számát egy ésszerű szinten tartani.';

$Definition['Learn about custom routing.'] = 'Tudjon meg többet az egyedi útvonalakról.';
$Definition['Learn how to completely change your forum\'s look and feel: upload your logo, set your homepage, choose a theme and customize it.'] = 'Ismerd meg, hogy tudod teljesen lecserélni a fórumod kinézetét: tölts fel logókat, állítsd be a honlapod, válassz egy témát és tedd egyedivé.';
$Definition['Learn how to use the basic functionality of your forum.'] = 'Ismerd meg, hogy használd az alapvető fórum-funkciókat.';
