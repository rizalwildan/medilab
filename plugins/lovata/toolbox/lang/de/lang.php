<?php return [
    'plugin'     => [
        'name'        => 'Toolbox',
        'description' => 'Toolbox ist eine Reihe von Helfern für eine schnellere Entwicklung für Oktober CMS.',
    ],
    'field'      => [
        'id'                       => 'ID',
        'name'                     => 'Name',
        'title'                    => 'Titel',
        'active'                   => 'Aktiv',
        'hidden'                   => 'Versteckt',
        'code'                     => 'Code',
        'slug'                     => 'URL',
        'external_id'              => 'Externe ID',
        'preview_text'             => 'Vorschau des Textes',
        'preview_image'            => 'Vorschau des Bildes',
        'image'                    => 'Bild',
        'images'                   => 'Bilder (Galerie)',
        'description'              => 'Beschreibung',
        'category'                 => 'Kategorie',
        'email'                    => 'Email',
        'phone'                    => 'Telefon',
        'moderation'               => 'Moderation',
        'mode'                     => 'Modus',
        'status'                   => 'Status',
        'city'                     => 'Stadt',
        'address'                  => 'Adresse',
        'street'                   => 'Straße',
        'lat'                      => 'lat',
        'lng'                      => 'lng',
        'type'                     => 'Typ',
        'avatar'                   => 'Avatar',
        'property'                 => 'Eigenschaft',
        'property_list_value'      => 'verfügbare Eigenschaftswerte',
        'property_mode'            => 'Eigenschaftsmodus',
        'property_tab'             => 'Tab name',
        'property_is_translatable' => 'Eigenschaft ist übersetzbar',
        'key'                      => 'Schlüssel',
        'value'                    => 'Wert',
        'label'                    => 'Label',
        'date'                     => 'Datum',
        'datetime'                 => 'Datum und Zeit',
        'time'                     => 'Zeit',
        'file'                     => 'Date',
        'decimals'                 => 'Anzahl der Nachkommastellen',
        'dec_point'                => 'Bruchteilstrennung',
        'thousands_sep'            => 'Tausendertrennzeichen',
        'dot'                      => 'Punkt',
        'comma'                    => 'Komma',
        'together'                 => 'Zusammenführen',
        'space'                    => 'Leerzeichen',
        'date_begin'               => 'Anfangsdatum',
        'date_end'                 => 'Enddatum',
        'discount_value'           => 'Rabattwert',
        'discount_type'            => 'Rabattart',
        'discount_price'           => 'Preisnachlass',
        'discount'                 => 'Rabatt',
        'product'                  => 'Produkt',
        'priority'                 => 'Priorität',
        'group'                    => 'Gruppe',
        'count'                    => 'Zählen',
        'length'                   => 'Länge',
        'amount'                   => 'Betrag',
        'author'                   => 'Autor',
        'link'                     => 'Link',
        'is_default'               => 'Is default',
        'symbol'                   => 'Symbol',

        'sort_order' => 'Sortierung',
        'created_at' => 'Erstellt',
        'updated_at' => 'Aktualisiert',
        'deleted_at' => 'Gelöscht am',
        'deleted'    => 'Gelöscht',
        'empty'      => 'Leer',
        'password'   => 'Passwort',

        'site_settings'                 => 'Anwendungseinstellungen',
        'site_settings_description'     => 'Allgemeine Einstellungen der Anwendung',
        'queue_on'                      => 'Senden von Nachrichten aus der Warteschlange',
        'queue_name'                    => 'Der Name der Warteschlange für den Versand der E-Mails.',
        'import_queue_on'               => 'Use queue when processing import items',
        'import_queue_name'             => 'The name of the queue for processing import items',
        'email_list_description'        => 'Fill out list of emails separated by commas',
        'import_deactivate'             => 'Elemente deaktivieren',
        'import_deactivate_description' => 'Alle aktiven Elemente, die sich nicht in der CSV-Datei befinden, werden deaktiviert.',

        'country'  => 'Land',
        'state'    => 'Staat',
        'house'    => 'Hausnummer',
        'flat'     => 'Wohnungsnummer',
        'address1' => 'Adresse 1',
        'address2' => 'Adresse 2',
        'postcode' => 'Postleitzahl',
    ],
    'tab'        => [
        'preview_content' => 'Inhaltsvorschau',
        'full_content'    => 'Inhalt',
        'images'          => 'Bilder',
        'settings'        => 'Einstellungen',
        'description'     => 'Beschreibung',
        'properties'      => 'Eigenschaften',
        'mail'            => 'Senden von Emails',
        'import'          => 'Importieren',
        'permissions'     => 'Seiteneinstellungen verwalten',
        'prices_format'   => 'Preisformat',
    ],
    'component'  => [
        'property_name_error_404' => '404 Seite anzeigen',
        'property_slug'           => 'Slug',
        'property_slug_required'  => 'Slug wird benötigt',
        'property_url_check'      => 'Smart url check',
        'pagination'              => 'Seitennavigation',
        'pagination_desc'         => 'Rendert Button für Seitennavigation',

        'property_redirect_page'         => 'Seite umleiten',
        'property_redirect_success_page' => 'Erfolgsseite umleiten',
        'property_redirect_fail_page'    => 'Fehlerseite umleiten',
        'property_redirect_on'           => 'Umleitung EIN',
        'property_flash_on'              => 'Flash EIN',
        'property_mode'                  => 'Komponenten-Modus',
        'mode_submit'                    => 'Formular absenden',
        'mode_ajax'                      => 'Ajax',
    ],
    'message'    => [
        'create_success'                  => ':name erstellen war erfolgreich',
        'update_success'                  => ':name aktualisieren war erfolgreich',
        'delete_success'                  => ':name löschen war erfolgreich',
        'restore_confirm'                 => 'Möchten Sie ausgewählte Elemente wiederherstellen?',
        'restore_success'                 => 'Wiederherstellen von Elementen war erfolgreich!',
        'e_not_correct_request'           => 'Anfrage ist nicht korrekt!',
        'row_is_empty'                    => 'Zeile ist leer.',
        'external_id_is_empty'            => 'Die externe ID ist leer.',
        'import_additional_info'          => 'Zusätzliche Importinformationen.',
        'import_active_field_info'        => 'Der Wert des Feldes "aktiv" wird auf "wahr" gesetzt, wenn es sich nicht in der CSV-Datei befindet.',
        'import_preview_image_field_info' => 'Der Pfad zur Vorschau-Bilddatei muss relativ zum Speicherort Ihres Projekts eingestellt sein. Zum Beispiel: "app/media/image.jpg".',
        'import_images_field_info'        => 'Der Pfad zur Bilddatei muss relativ zum Speicherort Ihres Projekts eingestellt werden. Zum Beispiel: "app/media/image.jpg". Pfade zu Bilddateien müssen durch Kommas getrennt werden.',
    ],
    'settings'   => [
        'count_per_page'                => 'Elemente pro Seite zählen',
        'available_count_per_page'      => 'Liste der verfügbaren Werte für "count_per_page".',
        'available_count_per_page_desc' => 'Setzen Sie zulässige Werte, die durch Kommas getrennt sind.',
        'number_validation'             => 'Sie müssen die Nummer eingeben.',
        'pagination_limit'              => 'Buttons für max count',
        'active_class'                  => 'Klasse für "Active Button"',
        'button_list'                   => 'Button Liste',
        'button_list_description'       => 'main,first,first-more,prev,prev-more,next,next-more,last,last-more',
        'button_name'                   => 'Button Name',
        'button_limit'                  => 'Button nach Seite anzeigen',
        'button_number'                 => 'Zeigt den Namen des Buttons an',
        'button_class'                  => 'CSS class',
        'last_button'                   => '"Zuletzt" Button',
        'last-more_button'              => '"Mehr" (vor "Zuletzt")',
        'next_button'                   => '"Nächste" Button',
        'next-more_button'              => '"Mehr" (vor "Nächste")',
        'prev_button'                   => '"Vorher" Button',
        'prev-more_button'              => '"Mehr" (nach "Vorher")',
        'first_button'                  => '"Zuerst" Button',
        'first-more_button'             => '"Mehr" (nach "Zuerst")',
        'main_button'                   => '"Haupt" Button',
        'slug_is_translatable'          => 'URL is translatable',
    ],
    'button'     => [
        'add_property_value' => 'Eigenschaftswert hinzufügen',
        'import_from_csv'    => 'Importieren mit CSV',
        'export_in_csv'      => 'Exportieren in CSV',
        'import_button'      => 'Datensätze importieren',
    ],
    'type'       => [
        'input'            => 'Text field (input)',
        'number'           => 'Text field (number)',
        'textarea'         => 'Text field (textarea)',
        'rich_editor'      => 'Text field (wysiwyg)',
        'single_checkbox'  => 'Single checkbox',
        'switch'           => 'Switch',
        'checkbox'         => 'Checkbox list (checkbox)',
        'balloon_selector' => 'Balloon selector',
        'tag_list'         => 'Tag list',
        'select'           => 'Select',
        'radio'            => 'Radio button',
        'date'             => 'Date picker (datetime)',
        'colorpicker'      => 'Color picker (colorpicker)',
        'mediafinder'      => 'Datei',
    ],
    'permission' => [
        'settings' => 'Einstellungen verwalten',
    ],
];
