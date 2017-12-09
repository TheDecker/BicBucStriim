# Allowed languages, i.e. languages with translations
$allowedLangs = array('de', 'en', 'es', 'fr', 'gl' , 'hu', 'it', 'nl');
# Fallback language if the browser prefers otherau than the allowed languages
$fallbackLang = 'en';
# Application Name
$appname = 'BicBucStriim';
# App version
$appversion = '1.4.1-SNAPSHOT';

$appmode = 'development';

# Init app globals
$globalSettings = array();
$globalSettings['appname'] = $appname;
$globalSettings['version'] = $appversion;
$globalSettings['sep'] = ' :: ';
# Find the user language, either one of the allowed languages or
# English as a fallback.
$globalSettings['lang'] = getUserLang($allowedLangs, $fallbackLang);
$globalSettings['l10n'] = new L10n($globalSettings['lang']);
$globalSettings['langa'] = $globalSettings['l10n']->langa;
$globalSettings['langb'] = $globalSettings['l10n']->langb;
# Init admin settings with std values, for upgrades or db errors
$globalSettings[CALIBRE_DIR] = '';
$globalSettings[DB_VERSION] = DB_SCHEMA_VERSION;
$globalSettings[KINDLE] = 0;
$globalSettings[KINDLE_FROM_EMAIL] = '';
$globalSettings[THUMB_GEN_CLIPPED] = 1;
$globalSettings[PAGE_SIZE] = 30;
$globalSettings[DISPLAY_APP_NAME] = $appname;
$globalSettings[MAILER] = Mailer::MAIL;
$globalSettings[SMTP_USER] = '';
$globalSettings[SMTP_PASSWORD] = '';
$globalSettings[SMTP_SERVER] = '';
$globalSettings[SMTP_PORT] = 25;
$globalSettings[SMTP_ENCRYPTION] = 0;
$globalSettings[METADATA_UPDATE] = 0;
$globalSettings[LOGIN_REQUIRED] = 1;
$globalSettings[TITLE_TIME_SORT] = TITLE_TIME_SORT_TIMESTAMP;
$globalSettings[RELATIVE_URLS] = 1;
