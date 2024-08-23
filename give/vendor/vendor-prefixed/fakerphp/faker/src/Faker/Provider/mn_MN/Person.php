<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 22-August-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\mn_MN;

class Person extends \Give\Vendors\Faker\Provider\Person
{
    /**
     * @see http://ner.query.mn/son
     */
    protected static $firstNameMale = [
        'Агь-Од', 'Адархидай', 'Адхираг', 'Ажай', 'Аз-Оргил', 'Алаг-Наяа', 'Алахуш-дигитхури', 'Алдиэр', 'Алтаннар', 'Алхуй', 'Алчи', 'Алчидай', 'Амал', 'Амбагай', 'Амин-Эрдэнэ', 'Анхлан', 'Арачиан', 'Аргасун', 'Арин', 'Арулад', 'Архай Хасар', 'Аучу', 'Ачиг-Чирүн', 'Ачиг-Ширүн', 'Аша-хамбу',
        'Баарьдай', 'Багу-Чорхи', 'Байшинхор', 'Бала', 'Бала-Чэрби', 'Балхачи', 'Барула', 'Баруладай', 'Бахажи', 'Баярмагнай', 'Бодончар', 'Боржигидай', 'Боролдай', 'Боролдайсуялби', 'Бужир', 'Буйраг', 'Булуган', 'Бурьбулчиру', 'Буту', 'Буха-Төмөр', 'Бухатай', 'Бухату', 'Бучаран', 'Бэсүдэй', 'Бүлтэчү', 'Бүри', 'Бүри-Бөхө', 'Бүрибөх', 'Бүхэдэй', 'Бөгэн',
        'Гилүгэтэй', 'Гэнигэдэй', 'Гүнгуа', 'Гүр-Хан', 'Гүчүгүр', 'Гүчүд',
        'Дайр', 'Дайр-Үсүн', 'Далдурхан', 'Дамача', 'Дарбай', 'Даридай', 'Даун', 'Добу', 'Доголдай', 'Доголху', 'Додай', 'Дорибөхө', 'Дува', 'Дэгэй', 'Дэй-Сэцэн', 'Дөрбуй', 'Дөрбэй',
        'Егү', 'Еди-Тоблуг', 'Есүнхэй', 'Ехэй-Хонтагар',
        'Жажирадай', 'Жалалдин', 'Жали', 'Жалибуха', 'Жалман', 'Жарчиудай', 'Жатай', 'Жаурьдай', 'Жаха-Хамбу', 'Жахахамбу', 'Жибгэ', 'Жибэгэ', 'Жидай', 'Жидэр', 'Жихүр', 'Жубхан', 'Жунсо', 'Жэгэй', 'Жэхү', 'Жэүн', 'Жүрчидэй',
        'Зочи', 'Зүтгэлбөх',
        'Ивгээл', 'Идухадай', 'Идүүд', 'Илаху', 'Илугай', 'Инал', 'Иналч', 'Инанча', 'Итүргэн', 'Их-Нэүрин', 'Их-Чэрэн', 'Ихнүдэн', 'Ихчирэн',
        'Кишлиг',
        'Лаблах',
        'Мангай', 'Мангудай', 'Масхуд', 'Молор', 'Молор эрдэнэ', 'Моричи', 'Мороха', 'Мулхалху', 'Мухулай буюу Мухули', 'Мэгэтү', 'Мэгүжин', 'Мэлиг', 'Мэнгитү', 'Мэнлиг', 'Мэнэн', 'Мүгэ', 'Мүлхэ-тотаг', 'Мүнтүүр', 'Мөчи',
        'Нарийн-гэгээн', 'Наринтоорил', 'Наху', 'Ноёгидай', 'Нэүдэйн Цагаан',
        'Огда', 'Оготор', 'Олар', 'Олдхар', 'Онгууд', 'Оронар', 'Оронартай', 'Охинбархаг',
        'Өлэбэг', 'Өнгүр', 'Өэлэн',
        'Саль-Хачау', 'Саргай', 'Сача-Бэхи', 'Сачуур', 'Сорхату', 'Сорхоншар', 'Сохо-Сэцэн', 'Сэмсэчүлэ', 'Сэцэ-Домог', 'Сэчиүр', 'Сэчэ-Бэхи', 'Сүбэхэй', 'Сүйхэтү', 'Сүхэхэй', 'Сүхэхэй-Жаун', 'Сүхэхэй-Жэүн', 'Сөнид',
        'Тай-Төмөр', 'Тайчар', 'Тайчиудай', 'Тайчу', 'Тамача', 'Тамир', 'Таргудай', 'Тататунга', 'Тобуха', 'Тогочар', 'Тогтоа', 'Тогучар', 'Тодойн-Гэрти', 'Тодсаха', 'Толун', 'Торбиташ', 'Торголжин', 'Торойн отчигон', 'Тугудай', 'Тунбинай', 'Тунхуйдай', 'Тусах', 'Туху', 'Тэв тэнгэр', 'Тэлэгэтү', 'Тэмүжин-Үгэ', 'Тэмүжинүгэ', 'Тэрхэг', 'Түгэ', 'Түгэ-Маха',
        'Удутай', 'Уйгуртай', 'Уруудай', 'Усун', 'Ухуна',
        'Үгэ', 'Үгэлэн', 'Үнгүр',
        'Хаатай Дармала', 'Хабич', 'Хабтурхас', 'Хадиги', 'Хайду', 'Халжа', 'Халиудар', 'Хан-Эрдэнэ', 'Хангиадай', 'Ханхархан', 'Хар-Хадаан', 'Хараудар', 'Харачар', 'Хархай', 'Хархалзан', 'Хархирүгэ', 'Харчу', 'Хауран', 'Хачи-Хүлүг', 'Хачиу', 'Хачиун', 'Хачула', 'Хаши', 'Хашин', 'Хингиадай', 'Хиратай', 'Хирилтуг', 'Хирмау', 'Хишилиг', 'Ходун',
        'Цагаангуа',
        'Чанай', 'Чаужин', 'Чаурхан', 'Чахурхан', 'Чигу', 'Чилгутай', 'Чилэгэрбөх', 'Чилэгүтэн-Тахи', 'Чилэдү', 'Чинбай', 'Чирхай', 'Чирхитэй', 'Чихарай', 'Чихитай', 'Чормаган', 'Чоёг Цагаан', 'Чуу мэргэн', 'Чүлгэдэй',
        'Шижуудай', 'Шинч', 'Шинэсочи', 'Ширахул',
        'Эди', 'Элжгэдэй', 'Элхудур', 'Эрххар', 'Эхлэлсайхан',
        'Ю-Хунан', 'Юрүхан',
        'Ядир', 'Ялавач', 'Ялбаг',
    ];

    /**
     * @see http://ner.query.mn/daugther
     */
    protected static $firstNameFemale = [
        'Агь-Од', 'Алагабэх', 'Алалтун', 'Алахчит', 'Амин-Эрдэнэ', 'Анхлан',
        'Баргужин-Гуа', 'Баярмагнай', 'Борогчин-Гуа',
        'Гүрбэсү',
        'Дөргэнэ',
        'Ибага', 'Ивгээл',
        'Мааяадээвий', 'Моло', 'Монголжин-Гуа',
        'Олуйхан', 'Орбай',
        'Өэлүн-Үжин',
        'Саргай', 'Сорхагтан', 'Сохатай', 'Сочигэл',
        'Тамир', 'Тухай',
        'Ужаур-Үжин',
        'Хожинбэх', 'Хорижин', 'Хуагчин', 'Хутугтай', 'Хуурчин',
        'Цотан',
        'Чаалун', 'Чаурбэх', 'Чэчэйхэн',
        'Эбэхэй',
    ];

    protected static $namePrefix = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'К', 'Л', 'М', 'Н', 'О', 'Ө', 'П', 'Р', 'С', 'Т', 'У', 'Ү', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Э', 'Ю', 'Я'];

    protected static $alphabet = ['А', 'Л', 'Х', 'Б', 'М', 'Ц', 'В', 'Н', 'Ч', 'Г', 'О', 'Ш', 'Д', 'Ө', 'Щ', 'Е', 'П', 'Ъ', 'Ё', 'Р', 'Ы', 'Ж', 'С', 'Ь', 'З', 'Т', 'Э', 'И', 'У', 'Ю', 'Й', 'Ү', 'Я', 'К', 'Ф'];

    protected static $maleNameFormats = [
        '{{namePrefix}}.{{firstNameMale}}',
    ];

    protected static $femaleNameFormats = [
        '{{namePrefix}}.{{firstNameFemale}}',
    ];

    protected static $idNumberFormat = '{{alphabet}}{{alphabet}}########';

    /**
     * Generate an identification number.
     *
     * @example ИЙ92011412
     */
    public function idNumber()
    {
        return static::numerify($this->generator->parse(static::$idNumberFormat));
    }

    /**
     * @return string
     *
     * @example 'Ф'
     */
    public function alphabet()
    {
        return static::randomElement(static::$alphabet);
    }

    /**
     * @return string
     *
     * @example 'Э'
     */
    public function namePrefix()
    {
        return static::randomElement(static::$namePrefix);
    }
}
