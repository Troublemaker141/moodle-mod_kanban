<?php
// Diese Datei ist Teil von Moodle – https://moodle.org/
//
// Moodle ist freie Software: Sie können es weiterverbreiten und/oder modifizieren
// gemäß den Bedingungen der GNU General Public License, wie sie von der
// Free Software Foundation veröffentlicht wurde, entweder Version 3 der Lizenz
// oder (nach Ihrer Wahl) jeder späteren Version.
//
// Moodle wird in der Hoffnung verteilt, dass es nützlich sein wird,
// jedoch OHNE JEDE GEWÄHRLEISTUNG; sogar ohne die implizite Gewährleistung der
// MARKTFÄHIGKEIT oder EIGNUNG FÜR EINEN BESTIMMTEN ZWECK. Weitere Details finden Sie
// in der GNU General Public License.
//
// Sie sollten eine Kopie der GNU General Public License zusammen mit Moodle erhalten haben.
// Falls nicht, siehe <https://www.gnu.org/licenses/>.

/**
 * Sprachdatei für mod_kanban
 *
 * @package     mod_kanban
 * @copyright   2023-2024 ISB Bayern
 * @author      Stefan Hanauska <stefan.hanauska@csg-in.de>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 oder später
 */

// --- Übersetzung - Tony Thomas - 16.01.25

defined('MOODLE_INTERNAL') || die();

$string['addcard'] = 'Eine Karte zu dieser Spalte hinzufügen';
$string['addcolumn'] = 'Eine Spalte zu diesem Board hinzufügen';
$string['aftercompletion'] = 'nachdem die Karte geschlossen wurde';
$string['afterdue'] = 'nach Fälligkeit der Karte';
$string['assignee'] = 'Zugewiesene Person';
$string['assignees'] = 'Zugewiesene Personen';
$string['assignme'] = 'Mich zuweisen';
$string['attachments'] = 'Anhänge';
$string['autoclose'] = 'Karten automatisch schließen';
$string['autohide'] = 'Geschlossene Karten automatisch ausblenden';
$string['cachedef_board'] = 'Cache für eine Board-Instanz';
$string['cachedef_timestamp'] = 'Zeitstempel der letzten Änderung von Karte, Spalte oder Board';
$string['cardtitle'] = 'Kartentitel';
$string['changegroup'] = 'Gruppen-Board ändern';
$string['changeuser'] = 'Benutzer-Board ändern';
$string['closecard'] = 'Karte schließen';
$string['color'] = 'Farbe';
$string['column'] = 'Spalte';
$string['columntitle'] = 'Spaltentitel';
$string['completioncomplete'] = 'Diese Anzahl von Karten abschließen';
$string['completioncreate'] = 'Diese Anzahl von Karten erstellen';
$string['completiondetail:complete'] = 'Karten abschließen: {$a}';
$string['completiondetail:create'] = 'Karten erstellen: {$a}';
$string['connectionlost'] = 'Verbindung unterbrochen';
$string['connectionlostmessage'] = 'Die Verbindung zum Server ist unterbrochen. Versuche erneut zu verbinden …';
$string['courseboard'] = 'Gemeinsames Board';
$string['createtemplate'] = 'Vorlage erstellen';
$string['deleteboard'] = 'Board löschen';
$string['deleteboardconfirm'] = 'Sind Sie sicher, dass Sie dieses Board löschen möchten? Ein neues Board wird basierend auf der Vorlage erstellt.';
$string['deletecard'] = 'Karte löschen';
$string['deletecardconfirm'] = 'Möchten Sie diese Karte wirklich löschen?';
$string['deletecolumn'] = 'Spalte löschen';
$string['deletecolumnconfirm'] = 'Möchten Sie diese Spalte wirklich löschen?';
$string['deletemessage'] = 'Nachricht löschen';
$string['deletemessageconfirm'] = 'Möchten Sie diese Nachricht wirklich löschen?';
$string['deletetemplate'] = 'Vorlage löschen';
$string['deletetemplateconfirm'] = 'Sind Sie sicher, dass Sie diese Vorlage löschen möchten?';
$string['doing'] = 'In Bearbeitung';
$string['done'] = 'Erledigt';
$string['due'] = 'Fällig';
$string['duedate'] = 'Fälligkeitsdatum';
$string['editboard'] = 'Board bearbeiten';
$string['editcard'] = 'Karte bearbeiten';
$string['editcolumn'] = 'Spalte bearbeiten';
$string['editdetails'] = 'Details bearbeiten';
$string['editing_this_card_is_not_allowed'] = 'Das Bearbeiten dieser Karte ist nicht erlaubt';
$string['enablehistory'] = 'Verlauf aktivieren';
$string['enablehistory_help'] = 'Verlauf aller Kartenänderungen in diesem Board aufzeichnen (z.B. wann eine Karte verschoben/umbenannt/abgeschlossen wurde).';
$string['enablehistorydescription'] = 'Wenn diese Option aktiviert ist, wird der Änderungsverlauf für das Board verfügbar gemacht.';
$string['groupboard'] = 'Gruppen-Board für die Gruppe "{$a}"';
$string['hidehidden'] = 'Versteckte Karten ausblenden';
$string['history'] = 'Verlauf';
$string['history_card_added'] = '{$a->username} hat die Karte "{$a->title}" in die Spalte "{$a->columnname}" hinzugefügt';
$string['history_card_assigned'] = '{$a->username} hat die Karte der Nutzerin / dem Nutzer {$a->affectedusername} zugewiesen';
$string['history_card_completed'] = '{$a->username} hat die Karte abgeschlossen';
$string['history_card_deleted'] = '{$a->username} hat die Karte aus der Spalte "{$a->columnname}" gelöscht';
$string['history_card_moved'] = '{$a->username} hat die Karte in die Spalte "{$a->columnname}" verschoben';
$string['history_card_reopened'] = '{$a->username} hat die Karte wiedereröffnet';
$string['history_card_unassigned'] = '{$a->username} hat die Zuweisung der Karte für Nutzerin / Nutzer {$a->affectedusername} aufgehoben';
$string['history_card_updated'] = '{$a->username} hat den Kartentitel in "{$a->title}" geändert';
$string['history_discussion_added'] = '{$a->username} hat eine neue Diskussionsnachricht hinzugefügt';
$string['history_discussion_deleted'] = '{$a->username} hat eine Diskussionsnachricht gelöscht';
$string['kanban:addcard'] = 'Eine Karte zu einem Kanban-Board hinzufügen';
$string['kanban:addinstance'] = 'Ein Kanban-Board hinzufügen';
$string['kanban:assignothers'] = 'Anderen Personen eine Karte zuweisen';
$string['kanban:assignself'] = 'Sich selbst eine Karte zuweisen';
$string['kanban:editallboards'] = 'Alle Boards bearbeiten';
$string['kanban:manageallcards'] = 'Alle Karten bearbeiten/verschieben';
$string['kanban:manageassignedcards'] = 'Karten bearbeiten/verschieben, die einem selbst zugewiesen sind';
$string['kanban:manageboard'] = 'Das Board verwalten (Vorlagen, Board löschen)';
$string['kanban:managecolumns'] = 'Spalten des Boards bearbeiten';
$string['kanban:view'] = 'Ein Kanban-Board ansehen';
$string['kanban:viewallboards'] = 'Alle Boards ansehen';
$string['kanban:viewhistory'] = 'Den Verlauf des Boards ansehen';
$string['liveupdatetime'] = 'Intervall für Live-Aktualisierung in Sekunden';
$string['liveupdatetimedescription'] = 'Nach Ablauf dieses Intervalls suchen Boards nach Aktualisierungen. Auf 0 setzen, um Live-Aktualisierungen zu deaktivieren.';
$string['loading'] = 'Lade Kanban-Board';
$string['loadingdiscussion'] = 'Diskussion wird geladen';
$string['lock'] = 'Sperren';
$string['lockboardcolumns'] = 'Spalten des Boards sperren';
$string['message_assigned_fullmessage'] = 'Die Karte "{$a->title}" im Board "{$a->boardname}" wurde Ihnen von {$a->username} zugewiesen';
$string['message_assigned_smallmessage'] = 'Die Karte "{$a->title}" wurde Ihnen zugewiesen';
$string['message_closed_fullmessage'] = 'Die Karte "{$a->title}" wurde von {$a->username} geschlossen';
$string['message_closed_smallmessage'] = 'Die Karte "{$a->title}" wurde geschlossen';
$string['message_discussion_fullmessage'] = 'Es gibt eine neue Nachricht in der Diskussion zur Karte "{$a->title}" im Board "{$a->boardname}":
{$a->username}
{$a->content}';
$string['message_discussion_smallmessage'] = 'Die Karte "{$a->title}" wurde diskutiert';
$string['message_due_fullmessage'] = 'Die Karte "{$a->title}" im Board "{$a->boardname}" ist am {$a->duedate} fällig';
$string['message_due_smallmessage'] = 'Die Karte "{$a->title}" ist fällig';
$string['message_moved_fullmessage'] = 'Die Karte "{$a->title}" wurde von {$a->username} in die Spalte "{$a->columnname}" verschoben';
$string['message_moved_smallmessage'] = 'Die Karte "{$a->title}" wurde verschoben';
$string['message_reopened_fullmessage'] = 'Die Karte "{$a->title}" im Board "{$a->boardname}" wurde von {$a->username} wiedereröffnet';
$string['message_reopened_smallmessage'] = 'Die Karte "{$a->title}" wurde wiedereröffnet';
$string['message_unassigned_fullmessage'] = 'Die Zuweisung der Karte "{$a->title}" im Board "{$a->boardname}" wurde von {$a->username} aufgehoben';
$string['message_unassigned_smallmessage'] = 'Die Karte "{$a->title}" wurde nicht mehr Ihnen zugewiesen';
$string['messageprovider:assigned'] = 'Karte zugewiesen / Zuweisung aufgehoben';
$string['messageprovider:closed'] = 'Karte geschlossen / wiedereröffnet';
$string['messageprovider:discussion'] = 'Kartendiskussion';
$string['messageprovider:due'] = 'Fälligkeit einer Karte';
$string['messageprovider:moved'] = 'Karte verschoben';
$string['modulename'] = 'Kanban-Board';
$string['modulename_help'] = 'Diese Aktivität unterstützt die Verwendung der Kanban-Methode für Projekt- oder Lernprozessmanagement.
Kanban ist eine agile Projektmanagement-Methode, die Aufgaben über ein visuelles Board organisiert, um Arbeitsabläufe zu optimieren. Aufgaben werden in Spalten wie „Zu erledigen“, „In Bearbeitung“ und „Erledigt“ kategorisiert, um den Fortschritt transparent zu machen. Das Ziel ist es, Engpässe im Arbeitsablauf zu erkennen und die Effizienz kontinuierlich zu verbessern.
<br>Abhängig von den Einstellungen kann es in einer Kanban-Aktivität verschiedene Board-Typen geben:
<ul>
    <li>Das Kurs-Board: Zugänglich für alle, die Zugang zur Aktivität haben</li>
    <li>Persönliche Boards: Für jede Nutzerin/jeden Nutzer</li>
    <li>Gruppen-Boards</li>
    <li>Vorlagen-Boards: Jeder, der Boards verwalten kann, kann ein bestehendes Board als Vorlage kopieren.</li>
</ul>';
$string['modulenameplural'] = 'Kanban-Boards';
$string['moveaftercard'] = 'Verschieben nach';
$string['movecard'] = 'Karte verschieben';
$string['movecolumn'] = 'Spalte verschieben';
$string['myuserboard'] = 'Mein persönliches Board';
$string['name'] = 'Name des Boards';
$string['name_help'] = 'Dieser Name wird in der Kursübersicht und als Titel des Boards angezeigt';
$string['newcard'] = 'Neue Karte';
$string['newcolumn'] = 'Neue Spalte';
$string['nogroupavailable'] = 'Keine Gruppe verfügbar';
$string['nokanbaninstances'] = 'In diesem Kurs gibt es keine Kanban-Boards oder Sie haben keine Berechtigung, auf diese zuzugreifen';
$string['nonewduedate'] = 'Kein neues Fälligkeitsdatum';
$string['nouser'] = 'Keine Nutzerin / kein Nutzer';
$string['nouserboards'] = 'Keine persönlichen Boards';
$string['pluginadministration'] = 'Kanban-Administration';
$string['pluginname'] = 'Kanban-Board';
$string['privacy:metadata:action'] = 'Aktion';
$string['privacy:metadata:affected_userid'] = 'Betroffene Nutzer-ID';
$string['privacy:metadata:content'] = 'Inhalt';
$string['privacy:metadata:createdby'] = 'Nutzer, der die Karte erstellt hat';
$string['privacy:metadata:groupid'] = 'Gruppen-ID';
$string['privacy:metadata:kanban_assignee'] = 'Zugewiesene Person';
$string['privacy:metadata:kanban_board'] = 'Board';
$string['privacy:metadata:kanban_card'] = 'Karte';
$string['privacy:metadata:kanban_column'] = 'Spalte';
$string['privacy:metadata:kanban_discussion_comment'] = 'Kommentar';
$string['privacy:metadata:kanban_history'] = 'Verlauf';
$string['privacy:metadata:parameters'] = 'Informationen über die Aktion';
$string['privacy:metadata:timecreated'] = 'Erstellungszeit';
$string['privacy:metadata:timemodified'] = 'Zeit der letzten Änderung';
$string['privacy:metadata:timestamp'] = 'Zeitpunkt der Aktion';
$string['privacy:metadata:userid'] = 'Nutzer-ID';
$string['pushcard'] = 'Karte an alle Boards verteilen';
$string['pushcardconfirm'] = 'Dadurch wird eine Kopie dieser Karte an alle Boards innerhalb dieser Kanban-Aktivität gesendet (einschließlich Vorlagen). Vorhandene Kopien werden ersetzt.';
$string['reminderdate'] = 'Erinnerungsdatum';
$string['remindertask'] = 'Benachrichtigungen zur Erinnerung senden';
$string['repeat'] = 'Karte wiederholen';
$string['repeat_help'] = 'Wenn ausgewählt, wird nach Abschluss dieser Karte automatisch eine neue Kopie dieser Karte in die linkeste Spalte erstellt. Diskussion, Verlauf und Zuweisungen werden dabei nicht kopiert.
Sie können festlegen, wie das neue Fälligkeitsdatum berechnet werden soll, falls nötig. Dies gilt auch für das neue Erinnerungsdatum.';
$string['repeat_interval'] = 'Intervall';
$string['repeat_interval_type'] = 'Häufigkeit';
$string['repeat_newduedate'] = 'Neues Fälligkeitsdatum';
$string['reset_group'] = 'Gruppen-Boards zurücksetzen';
$string['reset_kanban'] = 'Gemeinsame Boards zurücksetzen';
$string['reset_personal'] = 'Persönliche Boards zurücksetzen';
$string['saveastemplate'] = 'Als Vorlage speichern';
$string['saveastemplateconfirm'] = 'Sind Sie sicher, dass Sie dieses Board als Vorlage speichern möchten? Vorhandene Vorlagen werden dabei überschrieben, falls eine existiert.';
$string['senddiscussion'] = 'Diskussionsnachricht senden';
$string['showattachment'] = 'Anhänge anzeigen';
$string['showboard'] = 'Gemeinsames Board anzeigen';
$string['showdescription'] = 'Beschreibung anzeigen';
$string['showdiscussion'] = 'Diskussion anzeigen';
$string['showhidden'] = 'Versteckte Karten anzeigen';
$string['showtemplate'] = 'Vorlage anzeigen';
$string['startdiscussion'] = 'Diskussion starten';
$string['template'] = 'Vorlage';
$string['toboard'] = 'Board "{$a->boardname}"';
$string['todo'] = 'Zu erledigen';
$string['topofcolumn'] = 'An den Anfang der Spalte';
$string['unassign'] = 'Zuweisung für diese Person aufheben';
$string['unassignme'] = 'Meine Zuweisung aufheben';
$string['uncomplete'] = 'Wiedereröffnen';
$string['unlock'] = 'Entsperren';
$string['unlockboardcolumns'] = 'Spalten des Boards entsperren';
$string['userboard'] = 'Persönliches Board für {$a}';
$string['userboards'] = 'Persönliche Boards';
$string['userboards_help'] = 'Aktiviert persönliche Boards für Teilnehmende (nur für sie selbst und für Trainer/Trainerinnen sichtbar)';
$string['userboardsenabled'] = 'Persönliche Boards aktiviert';
$string['userboardsonly'] = 'Nur persönliche Boards';
