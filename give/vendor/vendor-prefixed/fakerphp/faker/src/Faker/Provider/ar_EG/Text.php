<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 17-July-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\ar_EG;

class Text extends \Give\Vendors\Faker\Provider\Text
{
    protected static function validStart($word)
    {
        return preg_match('/^\p{Arabic}/u', $word);
    }

    /**
     * License: Attribution-ShareAlike 3.0 Unported (CC BY-SA 3.0)
     *
     * Title: ألف ليلة وليلة
     * Language: Arabic
     *
     * @see https://ar.wikisource.org/wiki/%D8%A3%D9%84%D9%81_%D9%84%D9%8A%D9%84%D8%A9_%D9%88%D9%84%D9%8A%D9%84%D8%A9/%D8%A7%D9%84%D8%AC%D8%B2%D8%A1_%D8%A7%D9%84%D8%A3%D9%88%D9%84
     *
     * @var string
     */
    protected static $baseText = <<<'EOT'
ففي الليلة الأولى قالت: بلغني أيها الملك السعيد أنه كان تاجر من التجار كثير المال والمعاملات في البلاد قد ركب يومًا وخرج يطالب في بعض البلاد فاشتد عليه الحر فجلس تحت شجرة وحط يده في خرجه وأكل كسرة كانت معه وتمرة فلما فرغ من أكل التمرة رمى النواة وإذا هو بعفريت طويل القامة وبيده سيف فدنا من ذلك التاجر وقال له: قم حتى أقتلك مثل ما قتلت ولدي فقال له التاجر: كيف قتلت ولدك قال له: لما أكلت التمرة ورميت نواتها جاءت النواة في صدر ولدي فقضي عليه ومات من ساعته فقال التاجر للعفريت: أعلم أيها العفريت أني على دين ولي مال كثير وأولاد وزوجة وعندي رهون فدعني أذهب إلى بيتي وأعطي كل ذي حق حقه ثم أعود إليك ولك علي عهد وميثاق أني أعود إليك فتفعل بي ما تريد والله على ما أقول وكيل. فاستوثق منه الجني وأطلقه فرجع إلى بلده وقضى جميع تعلقاته وأوصل الحقوق إلى أهلها وأعلم زوجته وأولاده بما جرى له فبكوا وكذلك جميع أهله ونساءه وأولاده وأوصى وقعد عندهم إلى تمام السنة ثم توجه وأخذ كفنه تحت إبطه وودع أهله وجيرانه وجميع أهله وخرج رغمًا عن أنفه وأقيم عليه العياط والصراخ فمشى إلى أن وصل إلى ذلك البستان وكان ذلك اليوم أول السنة الجديدة فبينما هو جالس يبكي على ما يحصل له وإذا بشيخ كبير قد أقبل عليه ومعه غزالة مسلسلة فسلم على هذا التاجر وحياه وقال له: ما سبب جلوسك في هذا المكان وأنت منفرد وهو مأوى الجن فأخبره التاجر بما جرى له مع ذلك العفريت وبسبب قعوده في هذا منهم الشيخ الأول وهو صاحب الغزالة وقبل يد ذلك العفريت وقال له: يا أيها الجني وتاج ملوك الجن إذا حكيت لك حكايتي مع هذه الغزالة ورأيتها عجيبة أتهب لي ثلث دم هذا التاجر قال: نعم. يا أيها الشيخ إذا أنت حكيت لي الحكاية ورأيتها عجيبة وهبت لك ثلث دمه فقال ذلك الشيخ الأول: اتعلم يا أيها العفريت أن هذه الغزالة هي بنت عمي ومن لحمي ودمي وكنت تزوجت بها وهي صغيرة السن وأقمت معها نحو ثلاثين سنة فلم أرزق منها بولد فأخذت لي سرية فرزقت منها بولد ذكر كأنه البدر إذا بدا بعينين مليحتين وحاجبين مزججين وأعضاء كاملة فكبر شيئًا فشيئًا إلى أن صار ابن خمس عشرة سنة فطرأت لي سفرة إلى بعض المدن فسافرت بمتجر عظيم وكانت بنت عمي هذه الغزالة تعلمت السحر والكهانة من صغرها فسحرت ذلك الولد عجلًا وسحرت الجارية أمه بقرة وسلمتها إلى الراعي ثم جئت أنا بعد مدة طويلة من السفر فسألت عن ولدي وعن أمه فقالت لي جاريتك ماتت وابنك هرب ولم أعلم أين راح فجلست مدة سنة وأنا حزين القلب باكي العين إلى أن جاء عيد الضحية فأرسلت إلى الراعي أن يخصني ببقرة سمينة وهي سريتي التي سحرتها تلك الغزالة فشمرت ثيابي وأخذت السكين بيدي وتهيأت لذبحها فصاحت وبكت بكاء شديدًا فقمت عنها وأمرت ذلك الراعي بذبحها وسلخها فلم يجد فيها شحمًا ولا لحمًا غير جلد وعظم فندمت على ذبحها حيث لا ينفعني الندم وأعطيتها للراعي وقلت له: ائتني بعجل سمين فأتاني بولدي المسحور عجلًا فلما رآني ذلك العجل قطع حبله وجاءني وتمرغ علي وولول وبكى فأخذتني الرأفة عليه وقلت للراعي ائتني ببقرة ودع هذا. وأدرك شهرزاد الصباح فسكتت عن الكلام المباح. فقالت لها أختها: ما أطيب حديثك وألطفه وألذه وأعذبه فقالت: وأين هذا مما أحدثكم به الليلة القابلة إن عشت وأبقاني الملك فقال الملك في نفسه: والله ما أقتلها حتى أسمع بقية حديثها ثم أنهم باتوا تلك الليلة إلى الصباح متعانقين فخرج الملك إلى محل حكمه وطلع الوزير بالكفن تحت إبطه ثم حكم الملك وولي وعزل إلى آخر النهار ولم يخبر الوزير بشيء من ذلك فتعجب الوزير غاية العجب ثم انفض الديوان ودخل الملك شهريار قصره.

و في الليلة الثانية قالت دنيازاد لأختها شهرزاد: يا أختي أتممي لنا حديثك الذي هو حديث التاجر والجني. قالت حبًا وكرامة إن أذن لي الملك في ذلك فقال لها الملك: احكي فقالت: بلغني أيها الملك السعيد ذو الرأي الرشيد أنه لما رأى بكاء العجل حن قلبه إليه وقال للراعي: ابق هذا العجل بين البهائم. كل ذلك والجني يتعجب من حكاية ذلك الكلام العجيب ثم قال صاحب الغزالة: يا سيد ملوك الجان كل ذلك جرى وابنة عمي هذه الغزالة تنظر وترى وتقول اذبح هذا العجل فإنه سمين فلم يهن علي أن أذبحه وأمرت الراعي أن يأخذه وتوجه به ففي ثاني يوم وأنا جالس وإذا بالراعي أقبل علي وقال: يا سيدي إني أقول شيئًا تسر به ولي البشارة. فقلت: نعم فقال: أيها التاجر إن لي بنتًا كانت تعلمت السحر في صغرها من امرأة عجوز كانت عندنا فلما كنا بالأمس وأعطيتني العجل دخلت به عليها فنظرت إليه ابنتي وغطت وجهها وبكت ثم إنها ضحكت وقالت: يا أبي قد خس قدري عندك حتى تدخل علي الرجال الأجانب. فقلت لها: وأين الرجال الأجانب ولماذا بكيت وضحكت فقالت لي أن هذا العجل الذي معك ابن سيدي التاجر ولكنه مسحور وسحرته زوجة أبيه هو وأمه فهذا سبب ضحكي وأما سبب بكائي فمن أجل أمه حيث ذبحها أبوه فتعجبت من ذلك غاية العجب وما صدقت بطلوع الصباح حتى جئت إليك لأعلمك فلما سمعت أيها الجني كلام هذا الراعي خرجت معه وأنا سكران من غير مدام من كثرة الفرح والسرور والذي حصل لي إلى أن أتيت إلى داره فرحبت بي ابنة الراعي وقبلت يدي ثم إن العجل جاء إلي وتمرغ علي فقلت لابنة الراعي: أحق ما تقولينه عن ذلك العجل فقالت: نعم يا سيدي إيه ابنك وحشاشة كبدك فقلت لها: أيها الصبية إن أنت خلصتيه فلك عندي ما تحت يد أبيك من المواشي والأموال فتبسمت وقالت: يا سيدي ليس لي رغبة في المال إلا بشرطين: الأول: أن تزوجني به والثاني: أن أسر من سحرته وأحبسها وإلا فلست آمن مكرها فلما سمعت أيها الجني كلام بنت الراعي قلت : ولك فوق جميع ما تحت يد أبيك من الأموال زيادة وأما بنت عمي فدمها لك مباح. فلما سمعت كلامي أخذت طاسة وملأتها ماء ثم أنها عزمت عليها ورشت بها العجل وقالت: إن كان الله خلقك عجلًا فدم على هذه الصفة ولا تتغير وإن كنت مسحورًا فعد إلى خلقتك الأولى بإذن الله تعالى وإذا به انتفض ثم صار إنسانًا فوقعت عليه وقلت له: بالله عليك احك لي جميع ما صنعت بك وبأمك بنت عمي فحكى لي جميع ما جرى لهما فقلت: يا ولدي قد قيض الله لك من خلصك وخلص حقك ثم إني أيها الجني زوجته ابنة الراعي ثم أنها سحرت ابنة عمي هذه الغزالة وجئت إلى هنا فرأيت هؤلاء الجماعة فسألتهم عن حالهم فأخبروني بما جرى لهذا التاجر فجلست لأنظر ما يكون وهذا حديثي فقال الجني: هذا حديث عجيب وقد وهبت لك ثلث دمه فعند ذلك تقدم الشيخ صاحب الكلبتين السلاقيتين وقال له: اعلم يا سيد ملوك الجان أن هاتين الكلبتين أخوتي وأنا ثالثهم ومات والدي وخلف لنا ثلاثة آلاف دينار ففتحت دكانًا أبيع فيه وأشتري وسافر أخي بتجارته وغاب عنا مدة سنة مع القوافل ثم أتى وما معه شيء فقلت له: يا أخي أما أشرت عليك بعدم السفر فبكى وقال: يا أخي قدر الله عز وجل علي بهذا ولم يبق لهذا الكلام فائدة ولست أملك شيئًا فأخذته وطلعت به إلى الدكان ثم ذهبت به إلى الحمام وألبسته حلة من الملابس الفاخرة وأكلت أنا وإياه وقلت له: يا أخي إني أحسب ربح دكاني من السنة إلى السنة ثم أقسمه دون رأس المال بيني وبينك ثم إني عملت حساب الدكان من بربح مالي فوجدته ألفي دينار فحمدت الله عز وجل وفرحت غاية الفرح وقسمت الربح بيني وبينه شطرين وأقمنا مع بعضنا أيامًا ثم إن أخوتي طلبوا السفر أيضًا وأرادوا أن أسافر معهم فلم أرض وقلت لهم: أي شيء كسبتم من سفركم حتى أكسب أنا فألحوا علي ولم أطعهم بل أقمنا في دكاكيننا نبيع ونشتري سنة كاملة وهم يعرضون علي السفر وأنا لم أرض حتى مضت ست سنوات كوامل.

ثم وافقتهم على السفر وقلت لهم: يا أخوتي إننا نحسب ما عندنا من المال فحسبناه فإذا هو ستة آلاف دينار فقلت: ندفن نصفها تحت الأرض لينفعا إذا أصابنا أمر ويأخذ كل واحد منا ألف دينار ونتسبب فيها قالوا: نعم الرأي فأخذت المال وقسمته نصفين ودفنت ثلاثة آلاف دينار. وأما الثلاثة آلاف الأخرى فأعطيت كل واحد منهم ألف دينار وجهزنا بضائع واكترينا مركبًا ونقلنا فيها حوائجنا وسافرنا مدة شهر كامل إلى أن دخلنا مدينة وبعنا بضائعنا فربحنا في الدينار عشرة دنانير ثم أردنا السفر فوجدنا على شاطئ البحر جارية عليها خلق مقطع فقبلت يدي وقالت: يا سيدي هل عندك إحسان ومعروف أجازيك عليهما قلت: نعم إن عندي الإحسان والمعروف ولو لم تجازيني فقالت: يا سيدي تزوجني وخذني إلى بلادك فإني قد وهبتك نفسي فافعل معي معروفًا لأني ممن يصنع معه المعروف والإحسان ويجازي عليهما ولا يغرنك حالي. فلما سمعت كلامها حن قلبي إليها لأمر يريده الله عز وجل فأخذتها وكسوتها وفرشت لها في المركب فرشًا حسنًا وأقبلت عليها وأكرمتها ثم سافرنا وقد أحبها قلبي محبة عظيمة وصرت لا أفارقها ليلًا ولا نهارًا أو اشتغلت بها عن إخوتي فغاروا مني وحسدوني على مالي وكثرت بضاعتي وطمحت عيونهم في المال جميعه وتحدثوا بقتلي وأخذ مالي وقالوا: نقتل أخانا ويصير المال جميعه لنا وزين لهم الشيطان أعمالهم فجاؤوني وأنا نائم بجانب زوجتي ورموني في البحر فلما استيقظت زوجتي انتفضت فصارت عفريتة وحملتني وأطلعتني على جزيرة وغابت عني قليلًا وعادت إلي عند الصباح وقالت لي: أنا زوجتك التي حملتك ونجيتك من القتل بإذن الله تعالى واعلم أني جنية رأيتك فحبك قلبي وأنا مؤمنة بالله ورسوله فجئتك بالحال الذي رأيتني فيه فتزوجت بي وها أنا قد نجيتك من الغرق وقد غضبت على إخوتك ولا بد أن أقتلهم. فلما سمعت حكايتها تعجبت وشكرتها على فعلها وقلت لها أما هلاك إخوتي فلا ينبغي ثم حكيت لها ما جرى لي معهم من أول الزمان إلى آخره. فلما سمعت كلامي قالت: أنا في هذه الليلة أطير إليهم وأغرق مراكبهم وأهلكهم فقلت لها: بالله لا تفعلي فإن صاحب المثل يقول: يا محسنًا لمن أساء كفي المسيء فعله وهم إخوتي على كل حال قالت لا بد من قتلهم فاستعطفتها ثم أنها حملتني وطارت فوضعتني على سطح داري ففتحت الأبواب وأخرجت الذي خبأته تحت الأرض وفتحت دكاني بعد ما سلمت على الناس واشتريت بضائع فلما كان الليل دخلت داري فوجدت هاتين الكلبتين مربوطتين فيها فلما رأياني قاما إلي وبكيا وتعلقا بي فلم أشعر إلا وزوجتي قالت هؤلاء إخوتك فقلت من فعل بهم هذا الفعل قالت أنا أرسلت إلى أختي ففعلت بهم ذلك وما يتخلصون إلا بعد عشر سنوات فجئت وأنا سائر إليها تخلصهم بعد إقامتهم عشر سنوات في هذا الحال فرأيت هذا الفتى قال الجني: إنها حكاية عجيبة وقد وهبت لك ثلث دمه في جنايته فعند ذلك تقدم الشيخ الثالث صاحب البغلة وقال للجني أنا أحكي لك حكاية أعجب من حكاية الاثنين وتهب لي باقي دمه وجنايته فقال الجني نعم فقال الشيخ أيها السلطان ورئيس الجان إن هذه البغلة كانت زوجتي سافرت وغبت عنها سنة كاملة ثم قضيت سفري وجئت إليها في الليل فرأيت عبد أسود راقد معها في الفراش وهما في كلام وغنج وضحك وتقبيل وهراش فلما رأتني عجلت وقامت إلي بكوز فيه ماء فتكلمت عليه ورشتني وقالت اخرج من هذه الصورة إلى صورة كلب فصرت في الحال كلبًا فطردتني من البيت فخرجت من الباب ولم أزل سائرًا حتى وصلت دكان جزار فتقدمت وصرت آكل من العظام. فلما رآني صاحب الدكان أخذني ودخل بي بيته فلما رأتني بنت الجزار غطت وجهها مني فقالت أتجيء لنا برجل وتدخل علينا به فقال أبوها أين الرجل قالت إن هذا الكلب سحرته امرأة وأنا أقدر على تخليصه فلما سمع أبوها كلامها قال: بالله عليك يا بنتي خلصيه فأخذت كوزًا فيه ماء وتكلمت عليه ورشت علي منه قليلًا وقالت: اخرج من هذه الصورة إلى صورتك الأولى فصرت إلى صورتي الأولى فقبلت يدها وقلت لها: أريد أن تسحري زوجتي كما سحرتني فأعطتني قليلًا من الماء وقالت إذا رأيتها نائمة فرش هذا الماء عليها فإنها تصير كما أنت طالب فوجدتها نائمة فرششت عليها الماء وقلت اخرجي من هذه الصورة إلى صورة بغلة فصارت في الحال بغلة وهي هذه التي تنظرها بعينك أيها السلطان ورئيس ملوك الجان ثم التفت إليها وقال: أصحيح هذا فهزت رأسها وقالت بالإشارة نعم هذا صحيح فلما فرغ من حديثه اهتز الجني من الطرب ووهب له باقي دمه وأدرك شهرزاد الصباح فسكتت عن الكلام المباح. فقالت لها أختها: يا أختي ما أحلى حديثك وأطيبه وألذه وأعذبه فقالت: أين هذا مما أحدثكم به الليلة القابلة إن عشت وأبقاني الملك فقال الملك: والله لا أقتلها حتى أسمع بقية حديثها لأنه عجيب ثم باتوا تلك الليلة متعانقين إلى الصباح فخرج الملك إلى محل حكمه ودخل عليه الوزير والعسكر واحتبك الديوان فحكم الملك وولى وعزل ونهى وأمر إلى آخر النهار ثم انفض الديوان ودخل الملك شهريار إلى قصره.

وفي الليلة الثالثة قالت لها أختها دنيا زاد : يا أختي أتمي لنا حديثك فقالت حبًا وكرامة بلغني أيها الملك السعيد أن التاجر أقبل على الشيوخ وشكرهم هنوه بالسلامة ورجع كل واحد إلى بلده وما هذه بأعجب من حكاية الصياد فقال لها الملك: وما حكاية الصياد؟يا ناس اقرأو الكتب فالكتب مشوقة و اتمنى ان تقرأوا القصة التالية لانها مشوقة .
EOT;
}
