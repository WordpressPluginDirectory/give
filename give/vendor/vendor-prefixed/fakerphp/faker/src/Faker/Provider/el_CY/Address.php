<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 13-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\el_CY;

class Address extends \Give\Vendors\Faker\Provider\Address
{
    protected static $citySuffix = ['Λευκωσία', 'Λεμεσός', 'Λάρνακα', 'Πάφος'];
    protected static $streetSuffix = [];
    protected static $streetPrefix = [
        'Όδος', 'Οδός', 'Λεωφόρος',
    ];
    protected static $cityFormats = [
        '{{citySuffix}}',
    ];
    protected static $streetNameFormats = [
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{lastName}} {{lastName}}',
        '{{streetPrefix}} Αγίου {{lastName}}',
        '{{streetPrefix}} Βασιλέως {{lastName}}',
    ];
    protected static $streetAddressFormats = [
        '{{streetName}}, {{buildingNumber}}',
    ];
    protected static $buildingNumber = ['%#', '%'];
    protected static $postcode = ['####'];
    protected static $country = [
        'Ανγκόλα', 'Αζερμπαϊτζάν', 'Αίγυπτος', 'Αιθιοπία', 'Αϊτή', 'Αλβανία', 'Αλγερία', 'Αργεντινή', 'Αρμενία', 'Αυστραλία', 'Αυστρία', 'Αφγανιστάν',
        'Βέλγιο', 'Βενεζουέλα', 'Βιετνάμ', 'Βολιβία', 'Βοσνία και Ερζεγοβίνη', 'Βουλγαρία', 'Βραζιλία',
        'Γαλλία', 'Γερμανία', 'Γεωργία', 'Γροιλανδία',
        'Δανία', 'Δομινικανή Δημοκρατία',
        'Ελβετία', 'Ελλάδα', 'Ερυθραία', 'Εσθονία',
        'ΗΠΑ', 'Ηνωμένο Βασίλειο',
        'Ιαπωνία', 'Ινδία', 'Ινδονησία', 'Ιορδανία', 'Ιράκ', 'Ιράν', 'Ιρλανδία', 'Ισλανδία', 'Ισπανία', 'Ισραήλ', 'Ιταλία',
        'Καζακστάν', 'Καμπότζη', 'Καναδάς', 'Κεντροαφρικανική Δημοκρατία', 'Κένυα', 'Κίνα', 'Κιργιζία', 'Κολομβία', 'Κομόρες', 'Δημοκρατία του Κονγκό', 'Λαϊκή Δημοκρατία του Κονγκό', 'Βόρεια Κορέα', 'Νότια Κορέα', 'Κόστα Ρίκα', 'Κουβέιτ', 'Κροατία', 'Κύπρος',
        'Λάος', 'Λεττονία', 'Λευκορωσία', 'Λίβανος', 'Λιβερία', 'Λιβύη', 'Λιθουανία', 'Λουξεμβούργο',
        'Μαδαγασκάρη', 'Μαλαισία', 'Μάλτα', 'Μαρόκο', 'Μαυρίκιος', 'Μαυριτανία', 'Μαυροβούνιο', 'Μεξικό', 'Μογγολία', 'Μοζαμβίκη', 'Μολδαβία', 'Μονακό', 'Μποτσουάνα', 'Μπουρούντι', 'Μπουτάν',
        'Νέα Ζηλανδία', 'Νεπάλ', 'Νίγηρας', 'Νιγηρία', 'Νικαράγουα', 'Νορβηγία', 'Νότια Αφρική',
        'Ολλανδία', 'Ουγγαρία', 'Ουγκάντα', 'Ουζμπεκιστάν', 'Ουκρανία', 'Ουρουγουάη',
        'Πακιστάν', 'Παλαιστίνη', 'Παναμάς', 'Παραγουάη', 'Περού', 'Πολωνία', 'Πουέρτο Ρίκο', 'Πορτογαλία', 'Πρώην Γιουγκοσλαβική Δημοκρατία της Μακεδονίας',
        'Ρουάντα', 'Ρουμανία', 'Ρωσία',
        'Σαμόα', 'Σαουδική Αραβία', 'Σενεγάλη', 'Σερβία', 'Σιγκαπούρη', 'Σλοβακία', 'Σλοβενία', 'Σομαλία', 'Σουαζιλάνδη', 'Σουδάν', 'Σουηδία', 'Σουρινάμ', 'Συρία',
        'Ταϊβάν', 'Ταϊλάνδη', 'Τανζανία', 'Τατζικιστάν', 'Τζαμάικα', 'Τόγκο', 'Τόνγκα', 'Τουβαλού', 'Τουρκία', 'Τουρκμενιστάν', 'Τσεχία', 'Τυνησία',
        'Υεμένη',
        'Φιλιππίνες', 'Φινλανδία',
        'Χιλή',
    ];

    /**
     * @example 'Όδος'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }
}
