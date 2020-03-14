<?php
print_unescaped($l->t("Guten Tag,\n\n %s hat dies mit Ihnen geteilt %s .\nView it: %s\n\n", [$_['user_displayname'], $_['filename'], $_['link']]));
if (isset($_['expiration'])) {
	print_unescaped($l->t("Die geteilten Daten laufen am %s ab.", [$_['expiration']]));
	print_unescaped("\n\n");
}
if (isset($_['personal_note'])) {
	// TRANSLATORS personal note in share notification email
	print_unescaped($l->t("Persönliche Information vom Absender: \n %s.", $_['personal_note']));
	print_unescaped("\n\n");
}
// TRANSLATORS term at the end of a mail
p($l->t("Cheers!"));
?>

<?php print_unescaped($this->inc('plain.mail.footer'));
