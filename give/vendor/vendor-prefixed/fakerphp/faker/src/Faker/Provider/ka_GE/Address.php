<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 21-March-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\ka_GE;

class Address extends \Give\Vendors\Faker\Provider\Address
{
    protected static $cityPrefix = ['ქალაქი', 'ქ.'];

    protected static $regionSuffix = ['რაიონი'];
    protected static $streetSuffix = [
        'ჩიხი', 'ქ.', 'გამზირი', 'ქუჩა', 'გზატკეცილი', 'მოედანი', 'ბულვარი',
        'აღმართი', 'ხეივანი',
    ];

    protected static $buildingNumber = ['%#'];
    protected static $postcode = ['####'];
    protected static $country = [
        'ავსტრალია', 'ავსტრია', 'ავღანეთი', 'აზერბაიჯანი', 'ალანდის კუნძულები', 'ალბანეთი',
        'ალჟირი', 'ამერიკის სამოა', 'ანგილია', 'ანგოლა', 'ანდორა', 'ანტარქტიდა', 'ანტიგუა და ბარბუდა',
        'არაბთა გაერთიანებული საამიროები', 'არგენტინა', 'არუბა', 'აღმოსავლეთი ტიმორი', 'აშშ',
        'აშშ-ის მიმდებარე მცირე კუნძულები', 'ახალი ზელანდია', 'ახალი კალედონია', 'ბანგლადეში',
        'ბარბადოსი', 'ბაჰამის კუნძულები', 'ბაჰრეინი', 'ბელარუსი', 'ბელგია', 'ბელიზი', 'ბენინი',
        'ბერმუდის კუნძულები', 'ბოლივია', 'ბოსნია და ჰერცეგოვინა', 'ბოტსვანა', 'ბრაზილია',
        'ბრუნეი დარუსალამი', 'ბუვე', 'ბულგარეთი', 'ბურკინა-ფასო', 'ბურუნდი', 'ბჰუტანი', 'გაბონი',
        'გაერთიანებული სამეფო', 'გაიანა', 'გამბია', 'განა', 'გერმანია', 'გერნზი', 'გვადელუპა', 'გვატემალა',
        'გვინეა', 'გვინეა-ბისაუ', 'გიბრალტარი', 'გრენადა', 'გრენლანდია', 'გუამი', 'დანია', 'დასავლეთი საჰარა',
        'დომინიკა', 'დომინიკელთა რესპუბლიკა', 'ეგვიპტე', 'ეთიოპია', 'ეკვადორი', 'ეკვატორული გვინეა', 'ერაყი',
        'ერიტრეა', 'ესპანეთი', 'ესტონეთი', 'ვანუატუ', 'ვატიკანი (წმინდა საყდარი)', 'ვენესუელა', 'ვიეტნამი',
        'ვირჯინის კუნძულები (აშშ-ის)', 'ვირჯინის კუნძულები (ბრიტანეთის)', 'ზამბია', 'ზიმბაბვე', 'თურქეთი',
        'თურქმენეთი', 'იამაიკა', 'იაპონია', 'იემენი', 'ინდოეთი', 'ინდონეზია', 'იორდანია',
        'ირანის მუსულმანური რესპუბლიკა', 'ირლანდია', 'ისლანდია', 'ისრაელი', 'იტალია', 'კაბო-ვერდე',
        'კაიმანის კუნძულები', 'კამბოჯა', 'კამერუნი', 'კანადა', 'კატარი', 'კენია', 'კვიპროსი', 'კირიბატი',
        'კოლუმბია', 'კომორის კუნძულების კავშირი', 'კონგო', 'კონგოს დემოკრატიული რესპუბლიკა', 'კოსტა-რიკა',
        'კოტ-დ’ივუარი', 'კუბა', 'კუკის კუნძულები', 'კუნძული მენი', 'ლაოსის სახალხო დემოკრატიული რესპუბლიკა',
        'ლატვია', 'ლესოთო', 'ლიბანი', 'ლიბერია', 'ლიბიის არაბული ჯამაჰირია', 'ლიტვა', 'ლიხტენშტაინი',
        'ლუქსემბურგი', 'მადაგასკარი', 'მავრიკი', 'მავრიტანია', 'მაიოტა', 'მაკაო', 'მაკედონია', 'მალავი',
        'მალაიზია', 'მალდივი', 'მალი', 'მალტა', 'მაროკო', 'მარტინიკა', 'მარშალის კუნძულები', 'მექსიკა',
        'მიანმარი', 'მიკრონეზიის ფედერაციული შტატები', 'მოზამბიკი', 'მოლდოვას რესპუბლიკა', 'მონაკო', 'მონსერატი',
        'მონღოლეთი', 'ნამიბია', 'ნაურუ', 'ნეპალი', 'ნიგერი', 'ნიგერია', 'ნიდერლანდი', 'ნიდერლანდის ანტილები',
        'ნიკარაგუა', 'ნიუე', 'ნორვეგია', 'ნორფოლკი (კუნძული)', 'ომანი', 'პაკისტანი', 'პალაუ',
        'პალესტინის ტერიტორიები, ოკუპირებული', 'პანამა', 'პაპუა-ახალი გვინეა', 'პარაგვაი', 'პერუ',
        'პიტკერნის კუნძულები', 'პოლონეთი', 'პორტუგალია', 'პუერტო-რიკო', 'რეიუნიონი', 'რუანდა', 'რუმინეთი',
        'რუსეთი', 'საბერძნეთი', 'სალვადორი', 'სამოა', 'სამხრეთი აფრიკა',
        'სამხრეთი გეორგია და სამხრეთ სენდვიჩის კუნძულები', 'სამხრეთი კორეა', 'სან-მარინო', 'სან-ტომე და პრინსიპი',
        'საუდის არაბეთი', 'საფრანგეთი', 'საფრანგეთის გვიანა', 'საფრანგეთის პოლინეზია',
        'საფრანგეთის სამხრეთული და ანტარქტიდული ტერიტორია', 'საქართველო', 'სეიშელი', 'სენ-ბართელმი',
        'სენ-პიერი და მიკელონი', 'სენეგალი', 'სენტ-ვინსენტი და გრენადინები', 'სენტ-კიტსი და ნევისი',
        'სენტ-ლუსია', 'სერბეთი', 'სვაზილენდი', 'სვალბარდი და იან-მაიენი', 'სიერა-ლეონე', 'სინგაპური',
        'სირიის არაბთა რესპუბლიკა', 'სლოვაკეთი', 'სლოვენია', 'სოლომონის კუნძულები', 'სომალი', 'სომხეთი', 'სუდანი',
        'სურინამი', 'ტაივანი', 'ტაილანდი', 'ტანზანიის გაერთიანებული რესპუბლიკა', 'ტაჯიკეთი',
        'ტერქსისა და კაიკოსის კუნძულები', 'ტოგო', 'ტოკელაუ', 'ტონგა', 'ტრინიდადი და ტობაგო', 'ტუვალუ', 'ტუნისი',
        'უგანდა', 'უზბეკეთი', 'უკრაინა', 'უნგრეთი', 'უოლისი და ფუტუნა', 'ურუგვაი', 'ფარერის კუნძულები', 'ფილიპინები',
        'ფინეთი', 'ფიჯი', 'ფოლკლენდის კუნძულები (მალვინები)', 'ქოქოსის კუნძულები', 'ქუვეითი', 'ყაზახეთი', 'ყირგიზეთი',
        'შვედეთი', 'შვეიცარია', 'შობის კუნძული', 'შრი-ლანკა', 'ჩადი', 'ჩერნოგორია', 'ჩეხეთი', 'ჩილე', 'ჩინეთი',
        'ჩრდილოეთი კორეა', 'ჩრდილოეთი მარიანას კუნძულები', 'ცენტრალური აფრიკის რესპუბლიკა', 'წმინდა ელენეს კუნძული',
        'წმინდა მარტინი (საფრანგეთის ნაწილი)', 'ხორვატია', 'ჯერზი', 'ჯიბუტი', 'ჰაიტი',
        'ჰერდი და მაკდონალდის კუნძულები', 'ჰონგ-კონგი', 'ჰონდურასი',
    ];

    protected static $region = [
        'აფხაზეთი', 'აჭარა', 'იმერეთი', 'სამეგრელო-ზემო სვანეთი', 'მცხეთა-მთიანეთი', 'სამცხე-ჯავახეთი',
        'შიდა ქართლი', 'კახეთი', 'რაჭა-ლეჩხუმი და ქვემო სვანეთი', 'გურია', 'ქვემო ქართლი',
    ];

    protected static $regionGenitiveForm = [
        'აფხაზეთის', 'აჭარის', 'იმერეთის', 'სამეგრელო-ზემო სვანეთის', 'მცხეთა-მთიანეთის', 'სამცხე-ჯავახეთის',
        'შიდა ქართლის', 'კახეთის', 'რაჭა-ლეჩხუმი და ქვემო სვანეთის', 'გურიის', 'ქვემო ქართლის',
    ];

    protected static $city = [
        'აბაშა', 'ამბროლაური', 'ახალი ათონი', 'ახალქალაქი', 'ახალციხე', 'ახმეტა', 'ბათუმი', 'ბაღდათი',
        'ბოლნისი', 'ბორჯომი', 'გაგრა', 'გალი', 'გარდაბანი', 'გორი', 'გუდაუთა', 'გურჯაანი', 'დედოფლისწყარო',
        'დმანისი', 'დუშეთი', 'ვალე', 'ვანი', 'ზესტაფონი', 'ზუგდიდი', 'თბილისი', 'თეთრიწყარო', 'თელავი',
        'თერჯოლა', 'კასპი', 'ლაგოდეხი', 'ლანჩხუთი', 'მარნეული', 'მარტვილი', 'მცხეთა', 'ნინოწმინდა', 'ოზურგეთი',
        'ონი', 'ოჩამჩირე', 'რუსთავი', 'საგარეჯო', 'სამტრედია', 'საჩხერე', 'სენაკი', 'სიღნაღი', 'სოხუმი',
        'ტყვარჩელი', 'ტყიბული', 'ფოთი', 'ქარელი', 'ქობულეთი', 'ქუთაისი', 'ყვარელი', 'ცაგერი', 'ცხინვალი',
        'წალენჯიხა', 'წალკა', 'წნორი', 'წყალტუბო', 'ჭიათურა', 'ხაშური', 'ხობი', 'ხონი', 'ჯვარი',
    ];

    protected static $street = [
        'რუსთაველის', 'ტაბიძის', 'აღმაშენებლის', 'ბარათაშვილის', 'თამარ მეფის', 'სააკაძის', 'ყაზბეგის', 'რობაქიძის',
        'ვაჟა-ფშაველას', 'ნუცუბიძის', 'შეშელიძის', 'სააკაძის', 'სანაპიროს', 'გორგასლის', 'ელიავას', 'ჭონქაძის',
        'ფანასკერტელის',
    ];

    protected static $addressFormats = [
        'საქართველო, {{regionGenitiveForm}} {{regionSuffix}}, {{city}}, {{streetAddress}}, {{postcode}}',
        '{{regionGenitiveForm}} {{regionSuffix}}, {{city}}, {{streetAddress}}, {{postcode}}',
        '{{streetAddress}}, {{postcode}}, {{city}}, {{regionGenitiveForm}} {{regionSuffix}}',
        '{{streetAddress}}, {{postcode}}, {{city}}, {{regionGenitiveForm}} {{regionSuffix}}, საქართველო',
        '{{city}}, {{streetAddress}}, {{postcode}}',
        'საქართველო, {{city}}, {{streetAddress}}, {{postcode}}',
        '{{streetAddress}}, {{postcode}}, {{city}}',
        '{{streetAddress}}, {{postcode}}, {{city}}, საქართველო',
    ];

    protected static $streetAddressFormats = [
        '{{street}} {{streetSuffix}} #{{buildingNumber}}',
    ];

    protected static $cityFormats = [
        '{{cityPrefix}} {{cityName}}',
    ];

    public static function regionSuffix()
    {
        return static::randomElement(static::$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::$region);
    }

    public static function regionGenitiveForm()
    {
        return static::randomElement(static::$regionGenitiveForm);
    }

    public static function cityName()
    {
        return static::randomElement(static::$city);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    public static function streetSuffix()
    {
        return static::randomElement(static::$streetSuffix);
    }

    public static function street()
    {
        return static::randomElement(static::$street);
    }
}
