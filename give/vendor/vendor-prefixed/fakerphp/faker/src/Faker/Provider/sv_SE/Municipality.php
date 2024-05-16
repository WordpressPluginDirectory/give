<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 15-May-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\sv_SE;

use Give\Vendors\Faker\Provider\Base;

class Municipality extends Base
{
    /**
     * This provider uses wikipedia's ”List of municipalities of Sweden”
     *
     * @see https://en.wikipedia.org/wiki/List_of_municipalities_of_Sweden
     */
    private static $municipalities = ['Ale kommun', 'Alingsås kommun', 'Alvesta kommun', 'Aneby kommun', 'Arboga kommun', 'Arjeplogs kommun', 'Arvidsjaurs kommun', 'Arvika kommun', 'Askersunds kommun', 'Avesta kommun', 'Bengtsfors kommun', 'Bergs kommun', 'Bjurholms kommun', 'Bjuvs kommun', 'Bodens kommun', 'Bollebygds kommun', 'Bollnäs kommun', 'Borgholms kommun', 'Borlänge kommun', 'Borås stad', 'Botkyrka kommun', 'Boxholms kommun', 'Bromölla kommun', 'Bräcke kommun', 'Burlövs kommun', 'Båstads kommun', 'Dals-Eds kommun', 'Danderyds kommun', 'Degerfors kommun', 'Dorotea kommun', 'Eda kommun', 'Ekerö kommun', 'Eksjö kommun', 'Emmaboda kommun', 'Enköpings kommun', 'Eskilstuna kommun', 'Eslövs kommun', 'Essunga kommun', 'Fagersta kommun', 'Falkenbergs kommun', 'Falköpings kommun', 'Falu kommun', 'Filipstads kommun', 'Finspångs kommun', 'Flens kommun', 'Forshaga kommun', 'Färgelanda kommun', 'Gagnefs kommun', 'Gislaveds kommun', 'Gnesta kommun', 'Gnosjö kommun', 'Region Gotland', 'Grums kommun', 'Grästorps kommun', 'Gullspångs kommun', 'Gällivare kommun', 'Gävle kommun', 'Göteborgs stad', 'Götene kommun', 'Habo kommun', 'Hagfors kommun', 'Hallsbergs kommun', 'Hallstahammars kommun', 'Halmstads kommun', 'Hammarö kommun', 'Haninge kommun', 'Haparanda stad', 'Heby kommun', 'Hedemora kommun', 'Helsingborgs stad', 'Herrljunga kommun', 'Hjo kommun', 'Hofors kommun', 'Huddinge kommun', 'Hudiksvalls kommun', 'Hultsfreds kommun', 'Hylte kommun', 'Håbo kommun', 'Hällefors kommun', 'Härjedalens kommun', 'Härnösands kommun', 'Härryda kommun', 'Hässleholms kommun', 'Höganäs kommun', 'Högsby kommun', 'Hörby kommun', 'Höörs kommun', 'Jokkmokks kommun', 'Järfälla kommun', 'Jönköpings kommun', 'Kalix kommun', 'Kalmar kommun', 'Karlsborgs kommun', 'Karlshamns kommun', 'Karlskoga kommun', 'Karlskrona kommun', 'Karlstads kommun', 'Katrineholms kommun', 'Kils kommun', 'Kinda kommun', 'Kiruna kommun', 'Klippans kommun', 'Knivsta kommun', 'Kramfors kommun', 'Kristianstads kommun', 'Kristinehamns kommun', 'Krokoms kommun', 'Kumla kommun', 'Kungsbacka kommun', 'Kungsörs kommun', 'Kungälvs kommun', 'Kävlinge kommun', 'Köpings kommun', 'Laholms kommun', 'Landskrona stad', 'Laxå kommun', 'Lekebergs kommun', 'Leksands kommun', 'Lerums kommun', 'Lessebo kommun', 'Lidingö stad', 'Lidköpings kommun', 'Lilla Edets kommun', 'Lindesbergs kommun', 'Linköpings kommun', 'Ljungby kommun', 'Ljusdals kommun', 'Ljusnarsbergs kommun', 'Lomma kommun', 'Ludvika kommun', 'Luleå kommun', 'Lunds kommun', 'Lycksele kommun', 'Lysekils kommun', 'Malmö stad', 'Malung-Sälens kommun', 'Malå kommun', 'Mariestads kommun', 'Markaryds kommun', 'Marks kommun', 'Melleruds kommun', 'Mjölby kommun', 'Mora kommun', 'Motala kommun', 'Mullsjö kommun', 'Munkedals kommun', 'Munkfors kommun', 'Mölndals stad', 'Mönsterås kommun', 'Mörbylånga kommun', 'Nacka kommun', 'Nora kommun', 'Norbergs kommun', 'Nordanstigs kommun', 'Nordmalings kommun', 'Norrköpings kommun', 'Norrtälje kommun', 'Norsjö kommun', 'Nybro kommun', 'Nykvarns kommun', 'Nyköpings kommun', 'Nynäshamns kommun', 'Nässjö kommun', 'Ockelbo kommun', 'Olofströms kommun', 'Orsa kommun', 'Orust kommun', 'Osby kommun', 'Oskarshamns kommun', 'Ovanåkers kommun', 'Oxelösunds kommun', 'Pajala kommun', 'Partille kommun', 'Perstorps kommun', 'Piteå kommun', 'Ragunda kommun', 'Robertsfors kommun', 'Ronneby kommun', 'Rättviks kommun', 'Sala kommun', 'Salems kommun', 'Sandvikens kommun', 'Sigtuna kommun', 'Simrishamns kommun', 'Sjöbo kommun', 'Skara kommun', 'Skellefteå kommun', 'Skinnskattebergs kommun', 'Skurups kommun', 'Skövde kommun', 'Smedjebackens kommun', 'Sollefteå kommun', 'Sollentuna kommun', 'Solna stad', 'Sorsele kommun', 'Sotenäs kommun', 'Staffanstorps kommun', 'Stenungsunds kommun', 'Stockholms stad', 'Storfors kommun', 'Storumans kommun', 'Strängnäs kommun', 'Strömstads kommun', 'Strömsunds kommun', 'Sundbybergs stad', 'Sundsvalls kommun', 'Sunne kommun', 'Surahammars kommun', 'Svalövs kommun', 'Svedala kommun', 'Svenljunga kommun', 'Säffle kommun', 'Säters kommun', 'Sävsjö kommun', 'Söderhamns kommun', 'Söderköpings kommun', 'Södertälje kommun', 'Sölvesborgs kommun', 'Tanums kommun', 'Tibro kommun', 'Tidaholms kommun', 'Tierps kommun', 'Timrå kommun', 'Tingsryds kommun', 'Tjörns kommun', 'Tomelilla kommun', 'Torsby kommun', 'Torsås kommun', 'Tranemo kommun', 'Tranås kommun', 'Trelleborgs kommun', 'Trollhättans stad', 'Trosa kommun', 'Tyresö kommun', 'Täby kommun', 'Töreboda kommun', 'Uddevalla kommun', 'Ulricehamns kommun', 'Umeå kommun', 'Upplands Väsby kommun', 'Upplands-Bro kommun', 'Uppsala kommun', 'Uppvidinge kommun', 'Vadstena kommun', 'Vaggeryds kommun', 'Valdemarsviks kommun', 'Vallentuna kommun', 'Vansbro kommun', 'Vara kommun', 'Varbergs kommun', 'Vaxholms stad', 'Vellinge kommun', 'Vetlanda kommun', 'Vilhelmina kommun', 'Vimmerby kommun', 'Vindelns kommun', 'Vingåkers kommun', 'Vårgårda kommun', 'Vänersborgs kommun', 'Vännäs kommun', 'Värmdö kommun', 'Värnamo kommun', 'Västerviks kommun', 'Västerås stad', 'Växjö kommun', 'Ydre kommun', 'Ystads kommun', 'Åmåls kommun', 'Ånge kommun', 'Åre kommun', 'Årjängs kommun', 'Åsele kommun', 'Åstorps kommun', 'Åtvidabergs kommun', 'Älmhults kommun', 'Älvdalens kommun', 'Älvkarleby kommun', 'Älvsbyns kommun', 'Ängelholms kommun', 'Öckerö kommun', 'Ödeshögs kommun', 'Örebro kommun', 'Örkelljunga kommun', 'Örnsköldsviks kommun', 'Östersunds kommun', 'Österåkers kommun', 'Östhammars kommun', 'Östra Göinge kommun', 'Överkalix kommun', 'Övertorneå kommun'];

    /**
     * Swedish municipality
     *
     * @see https://en.wikipedia.org/wiki/Municipality
     *
     * @return string
     */
    public function municipality()
    {
        return static::randomElement(static::$municipalities);
    }
}
