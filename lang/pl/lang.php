<?php
/*
|--------------------------------------------------------------------------
| 5 Steps to Contribute a New Twill Localization at Ease
|--------------------------------------------------------------------------
| 1. Find the "lang.csv" under "lang" directory.
| 2. Import the csv file into a blank Google Sheet.
| 3. Each column is a language, enter the translation for a column. (tips: feel free to freeze rows and columns).
| 4. Download the Google Sheet as CSV, replace the original "lang/lang.csv" with the new one.
| 5. Run the command "php artisan twill:lang" to sync all lang files.
 */


return [
    'auth' => [
        'back-to-login' => 'Powrót do logowania',
        'choose-password' => 'Wybierz hasło',
        'forgot-password' => 'Zapomniałem hasła',
        'login' => 'Zaloguj się',
        'oauth-link-title' => 'Wprowadź hasło ponownie aby połączyć swoje konto z :provider',
        'otp' => 'Kod jednorazowy',
        'password' => 'Hasło',
        'password-confirmation' => 'Potwierdź hasło',
        'reset-password' => 'Zresetuj hasło',
        'reset-send' => 'Wyślij link resetujący hasło',
        'verify-login' => 'Zweryfikuj tożsamość',
    ],
    'buckets' => [
        'intro' => 'Co chciałbyś dzisiaj wyróżnić?',
        'none-available' => 'Nie ma żadnych elementów które mógłbyś wyróżnić.',
        'none-featured' => 'Nie wyróżniono żadnych elementów.',
        'publish' => 'Opublikuj',
        'source-title' => 'Dostępne elementy',
    ],
    'dashboard' => [
        'all-activity' => 'Cała aktywność',
        'create-new' => 'Utwórz nowy',
        'empty-message' => 'Nie masz jeszcze żadnej aktywności.',
        'my-activity' => 'Moja aktywność',
        'my-drafts' => 'Moje wersje robocze',
        'search-placeholder' => 'Szukaj na całej stronie...',
        'statitics' => 'Statystyki',
    ],
    'dialog' => [
        'cancel' => 'Anuluj',
        'ok' => 'OK',
        'title' => 'Przenieś do kosza',
    ],
    'editor' => [
        'cancel' => 'Anuluj',
        'delete' => 'Usuń',
        'done' => 'Zatwierdź',
        'title' => 'Edytor treści',
    ],
    'emails' => [
        'all-rights-reserved' => 'Wszelkie prawa zastrzeżone.',
        'hello' => 'Witaj!',
        'problems' => 'Jeżeli nie możesz kliknąć przycisku ":actionText", wklej ten link do swojej przeglądarki: [:url](:url)',
        'regards' => 'Pozdrawiamy,',
    ],
    'fields' => [
        'block-editor' => [
            'add-content' => 'Dodaj treść',
            'collapse-all' => 'Zwiń wszystke',
            'create-another' => 'Dodaj kolejny',
            'delete' => 'Usuń',
            'expend-all' => 'Rozwiń wszystkie',
            'loading' => 'Wczytywanie',
            'open-in-editor' => 'Otwórz w edytorze',
            'preview' => 'Podgląd',
        ],
        'browser' => [
            'add-label' => 'Dodaj',
            'attach' => 'Załącz',
        ],
        'files' => [
            'add-label' => 'Dodaj',
        ],
        'generic' => [
            'switch-language' => 'Zmień język',
        ],
        'map' => [
            'hide' => 'Ukryj&nbsp;mapę',
            'show' => 'Pokaż&nbsp;mapę',
        ],
        'medias' => [
            'btn-label' => 'Załącz obraz',
            'crop' => 'Przytnij',
            'crop-edit' => 'Zmień kadrowanie obrazu',
            'crop-list' => 'kadr',
            'crop-save' => 'Zapisz',
            'delete' => 'Usuń',
            'download' => 'Pobierz',
            'edit-close' => 'Schowaj szczegóły',
            'edit-info' => 'Edytuj szczegóły',
            'original-dimensions' => 'Oryginalne wymiary',
        ],
    ],
    'filter' => [
        'apply-btn' => 'Zastosuj',
        'clear-btn' => 'Wyczyść wybór',
        'search-placeholder' => 'Szukaj',
        'toggle-label' => 'Filtruj',
    ],
    'footer' => [
        'version' => 'Wersja',
    ],
    'form' => [
        'content' => 'Treść',
        'dialogs' => [
            'delete' => [
                'confirm' => 'Usuń',
                'confirmation' => 'Czy na pewno chcesz to zrobić? <br />Tej zmiany nie można cofnąć.',
                'delete-content' => 'Usuń zawartość',
                'title' => 'Usuń zawartość',
            ],
        ],
        'editor' => 'Edytor',
    ],
    'lang-manager' => [
        'published' => 'opublikowano',
    ],
    'lang-switcher' => [
        'edit-in' => 'Edytuj w',
    ],
    'listing' => [
        'add-new-button' => 'Dodaj nowy',
        'bulk-actions' => 'Dostępne akcje',
        'bulk-clear' => 'Wyczyść wybór',
        'columns' => [
            'featured' => 'Wyróżniono',
            'name' => 'Nazwa',
            'published' => 'Opublikowano',
            'show' => 'Wyświetl',
            'thumbnail' => 'Miniatura',
        ],
        'dialogs' => [
            'delete' => [
                'confirm' => 'Usuń',
                'disclaimer' => 'Ten element nie zostanie trwale usunięty, tylko przeniesiony do kosza.',
                'move-to-trash' => 'Przenieś do kosza',
                'title' => 'Usuń element',
            ],
            'destroy' => [
                'confirm' => 'Usuń',
                'destroy-permanently' => 'Usuń na zawsze',
                'disclaimer' => 'Tego elementu nie będzie można przywrócić.',
                'title' => 'Usuń trwale',
            ],
        ],
        'dropdown' => [
            'delete' => 'Usuń',
            'destroy' => 'Usuń (trwale)',
            'duplicate' => 'Zduplikuj',
            'edit' => 'Edytuj',
            'feature' => 'Wyróżnij',
            'publish' => 'Opublikuj',
            'restore' => 'Przyrwóć',
            'unfeature' => 'Unfeature',
            'unpublish' => 'Cofnij publikację',
        ],
        'filter' => [
            'all-items' => 'Wszystko',
            'draft' => 'Wersje robocze',
            'mine' => 'Dodane przeze mnie',
            'published' => 'Opublikowane',
            'trash' => 'Kosz',
        ],
        'languages' => 'Języki',
        'listing-empty-message' => 'Nie dodano tutaj jeszcze żadnych rzeczy.',
        'paginate' => [
            'rows-per-page' => 'Wierszy na stronę:',
        ],
    ],
    'main' => [
        'create' => 'Utwórz',
        'draft' => 'Wersja robocza',
        'published' => 'Opublikowany',
        'title' => 'Tytuł',
        'update' => 'Zapisz',
    ],
    'media-library' => [
        'files' => 'Pliki',
        'filter-select-label' => 'Filtruj według tagów',
        'images' => 'Obrazy',
        'insert' => 'Wstaw',
        'sidebar' => [
            'alt-text' => 'Tekst alternatywny',
            'caption' => 'Podpis',
            'clear' => 'Wyczyść wybór',
            'dimensions' => 'Wymiary',
            'empty-text' => 'Nie wybrano żadnego pliku',
            'files-selected' => 'pliki wybrano',
            'tags' => 'Tagi',
        ],
        'title' => 'Biblioteka mediów',
        'update' => 'Zmień',
    ],
    'modal' => [
        'create' => [
            'button' => 'Utwórz',
            'create-another' => 'Utwórz i dodaj nowy',
            'title' => 'Dodaj nowy',
        ],
        'permalink-field' => 'Bezpośredni link',
        'title-field' => 'Tytuł',
        'update' => [
            'button' => 'Zapisz',
            'title' => 'Edytuj element',
        ],
    ],
    'nav' => [
        'admin' => 'Administracja',
        'cms-users' => 'Użytkownicy panelu',
        'logout' => 'Wyloguj się',
        'media-library' => 'Biblioteka mediów',
        'settings' => 'Ustawienia',
    ],
    'notifications' => [
        'reset' => [
            'action' => 'Zresetuj swoje hasło',
            'content' => 'Otrzymujesz tą wiadomość ponieważ ktoś zgłosił prośbę o zresetowanie hasła dla tego konta. Jeżeli nie byłeś to ty, możesz po prostu zignorować tą wiadomość.',
        ],
        'welcome' => [
            'action' => 'Ustaw swoje hasło',
            'content' => 'Otrzymujesz tą wiadomość ponieważ zostało utworzone dla ciebie konto na :name.',
            'title' => 'Witaj',
        ],
    ],
    'overlay' => [
        'close' => 'Zamknij',
    ],
    'previewer' => [
        'compare-view' => 'Porównaj wersje',
        'current-revision' => 'Najnowsza',
        'editor' => 'Edytor',
        'last-edit' => 'Ostatnia zmiana',
        'past-revision' => 'Starsza',
        'restore' => 'Przywróć',
        'revision-history' => 'Historia zmian',
        'single-view' => 'Wyświetl tylko starszą',
        'title' => 'Podgląd zmian',
        'unsaved' => 'Podgląd zawiera twoje niezapisane zmiany',
    ],
    'publisher' => [
        'cancel' => 'Anuluj',
        'current' => 'Najnowsza',
        'end-date' => 'Koniec publikacji',
        'immediate' => 'Natychmiast',
        'languages' => 'Języki',
        'languages-published' => 'opublikowano',
        'last-edit' => 'Ostatnia zmiana',
        'preview' => 'Podgląd zmian',
        'publish' => 'Opublikuj',
        'publish-close' => 'Opublikuj i zamknij',
        'publish-new' => 'Opublikuj i dodaj nowy',
        'published-on' => 'Data publikacji',
        'restore-draft' => 'Przywróć jako wersja robocza',
        'restore-draft-close' => 'Przywróć jako wersja robocza i zamknij',
        'restore-draft-new' => 'Przywróć jako wersja robocza i dodaj nowy',
        'restore-live' => 'Przywróć i opublikuj',
        'restore-live-close' => 'Przywróć, opublikuj i zamknij',
        'restore-live-new' => 'Przywróć, opublikuj i dodaj nowy',
        'restore-message' => 'Jesteś w trakcie edytowania starszej wersji tej strony (zapisanej przez użytkownika :user w :date). Dodaj pożądane zmiany, i kliknij \'przywróć\', aby zapisać stronę jako nową wersję.',
        'restore-success' => 'Starsza wersja przywrócona pomyślnie.',
        'revisions' => 'Historia zmian',
        'save' => 'Zapisz jako wersja robocza',
        'save-close' => 'Zapisz jako wersja robocza i zamknij',
        'save-new' => 'Zapisz jako wersja robocza i dodaj nowy',
        'save-success' => 'Strona zapisana pomyślnie.',
        'start-date' => 'Początek publikacji',
        'switcher-title' => 'Stan',
        'update' => 'Zapisz',
        'update-close' => 'Zapisz i zamknij',
        'update-new' => 'Zapisz i dodaj nowy',
    ],
    'select' => [
        'empty-text' => 'Nie znaleziono pasujących parametrów.',
    ],
    'uploader' => [
        'dropzone-text' => 'lub upuść pliki tutaj',
        'upload-btn-label' => 'Dodaj nowy',
    ],
    'user-management' => [
        '2fa' => 'uwierzytelnianie dwuskładnikowe',
        '2fa-description' => 'Zeskanuj ten kod QR w aplikacji kompatybilnej z Google Authenticator i wprowadź swój jednorazowy kod do poniższego pola. <a href=":link" target="_blank" rel="noopener">Tutaj</a> możesz znaleźć listę kompatybilnych aplikacji.',
        '2fa-disable' => 'Podaj swój kod jednorazowy aby wyłączyć uwierzytelnianie dwuskładnikowe',
        'active' => 'Aktywny',
        'cancel' => 'Anuluj',
        'content-fieldset-label' => 'Ustawienia użytkownika',
        'description' => 'Opis',
        'disabled' => 'Nieaktywny',
        'edit-modal-title' => 'Zmień nazwe użytkownika',
        'email' => 'Email',
        'enable-user' => 'Uaktywnij użytkownika',
        'enable-user-and-close' => 'Uaktywnij użytkownika i zamknij',
        'enable-user-and-create-new' => 'Uaktywnij użytkownika i dodaj nowego',
        'enabled' => 'Aktywny',
        'language' => 'Język',
        'language-placeholder' => 'Wybierz język',
        'name' => 'Nazwa',
        'otp' => 'Kod jednorazowy',
        'profile-image' => 'Zdjęcie profilowe',
        'role' => 'Rola',
        'role-placeholder' => 'Wybierz rolę',
        'title' => 'Tytuł',
        'trash' => 'Kosz',
        'update' => 'Zapisz',
        'update-and-close' => 'Zapisz i zamknij',
        'update-and-create-new' => 'Zapisz i dodaj nowego',
        'update-disabled-and-close' => 'Zapisz nieaktywnego użytkownika i zamknij',
        'update-disabled-user' => 'Zapisz nieaktywnego użytkownika',
        'update-disabled-user-and-create-new' => 'Zapisz nieaktywnego użytkownika i dodaj nowego',
        'user-image' => 'Zdjęcie',
        'users' => 'Użytkownicy',
    ],
];
