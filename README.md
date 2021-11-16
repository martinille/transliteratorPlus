# transliteratorPlus

This class extends the functionality of [PHP Transliterator class](https://www.php.net/manual/en/class.transliterator.php) and simplifies working with this class.


### Main functions
- Transliterates any text into Basic Latin.
- Overwrites language-specific characters, such as German "ß" to "ss" or Myanmar "æ" to "ae", etc.
- It can generate an URL-safe link using the functions *punctuation()*, *toLower()* and *setDelimiter()*.

### Install
Basic usage:

```php
// include main class
include_once '/path/to/transliteratorPlus.php';

// create object instance of the class
$tp = new transliteratorPlus();

// convert non-latin text to basic-latin
$output = $tp->getOutput("Falsches Üben von Xylophonmusik quält jeden größeren Zwerg.");

// returns: Falsches Uben von Xylophonmusik qualt jeden grosseren Zwerg.
echo $output; 
```

### How to create URL-safe link from a string
```php
// the string you need to make a secure SEO link
$string = "Jó foxim és don Quijote húszwattos lámpánál ülve egy pár bűvös cipőt készít. Árvíztűrő tükörfúrógép.";

// include main class
include_once '/path/to/transliteratorPlus.php'; 

// create object instance of the class
$tp = new transliteratorPlus();

// create URL/SEO safe link 
$seoLink = $tp->toLower(true)->punctuation(false)->setDelimiter('-')->getOutput($string);

// returns: jo-foxim-es-don-quijote-huszwattos-lampanal-ulve-egy-par-buvos-cipot-keszit-arvizturo-tukorfurogep
echo $seoLink;
```

### Table of examples converted strings

| Language | Original string | Simple Converted | URL Converted |
| -------- | --------------- | ---------------- | ------------- |
| English  | A quick brown fox jumps over the lazy dog.  | A quick brown fox jumps over the lazy dog.  | a-quick-brown-fox-jumps-over-the-lazy-dog  |
| Arabic  | صِف خَلقَ خَودِ كَمِثلِ الشَمسِ إِذ بَزَغَت — يَحظى الضَجيعُ بِها نَجلاءَ مِعطارِ  | sif khalqa khawdi kamithli alshamsi aidh bazaghat - yahzy aldajy u biha najla a mi tari  | sif-khalqa-khawdi-kamithli-alshamsi-aidh-bazaghat-yahzy-aldajy-u-biha-najla-a-mi-tari  |
| Azeri  | Zəfər, jaketini də papağını da götür, bu axşam hava çox soyuq olacaq.  | Z f r, jaketini d papagini da gotur, bu axsam hava cox soyuq olacaq.  | z-f-r-jaketini-d-papagini-da-gotur-bu-axsam-hava-cox-soyuq-olacaq  |
| Breton  | Yec’hed mat Jakez ! Skarzhit ar gwerennoù-mañ, kavet e vo gwin betek fin ho puhez.  | Yec'hed mat Jakez ! Skarzhit ar gwerennou-man, kavet e vo gwin betek fin ho puhez.  | yec-hed-mat-jakez-skarzhit-ar-gwerennou-man-kavet-e-vo-gwin-betek-fin-ho-puhez  |
| Bulgarian  | Ах чудна българска земьо, полюшвай цъфтящи жита.  | Ah cudna b"lgarska zem'o, polusvaj c"ftasi zita.  | ah-cudna-b-lgarska-zem-o-polusvaj-c-ftasi-zita  |
| Croatian  | Gojazni đačić s biciklom drži hmelj i finu vatu u džepu nošnje.  | Gojazni dacic s biciklom drzi hmelj i finu vatu u dzepu nosnje.  | gojazni-dacic-s-biciklom-drzi-hmelj-i-finu-vatu-u-dzepu-nosnje  |
| Czech  | Nechť již hříšné saxofony ďáblů rozezvučí síň úděsnými tóny waltzu, tanga a quickstepu.  | Necht jiz hrisne saxofony dablu rozezvuci sin udesnymi tony waltzu, tanga a quickstepu.  | necht-jiz-hrisne-saxofony-dablu-rozezvuci-sin-udesnymi-tony-waltzu-tanga-a-quickstepu  |
| Danish  | Quizdeltagerne spiste jordbær med fløde, mens cirkusklovnen Walther spillede på xylofon.  | Quizdeltagerne spiste jordbaer med flode, mens cirkusklovnen Walther spillede pa xylofon.  | quizdeltagerne-spiste-jordbaer-med-flode-mens-cirkusklovnen-walther-spillede-pa-xylofon  |
| Esperanto  | Eble ĉiu kvazaŭ-deca fuŝĥoraĵo ĝojigos homtipon.  | Eble ciu kvazau-deca fushorajo gojigos homtipon.  | eble-ciu-kvazau-deca-fushorajo-gojigos-homtipon  |
| Estonian  | Põdur Zagrebi tšellomängija-följetonist Ciqo külmetas kehvas garaažis  | Podur Zagrebi tsellomangija-foljetonist Ciqo kulmetas kehvas garaazis  | podur-zagrebi-tsellomangija-foljetonist-ciqo-kulmetas-kehvas-garaazis  |
| Finnish  | Wieniläinen sioux’ta puhuva ökyzombie diggaa Åsan roquefort-tacoja.  | Wienilainen sioux'ta puhuva okyzombie diggaa Asan roquefort-tacoja.  | wienilainen-sioux-ta-puhuva-okyzombie-diggaa-asan-roquefort-tacoja  |
| French  | Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d’un cœur qui au zéphyr préfère les jattes de kiwi  | Bachez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambigue d'un coeur qui au zephyr prefere les jattes de kiwi  | bachez-la-queue-du-wagon-taxi-avec-les-pyjamas-du-fakir-voix-ambigue-d-un-coeur-qui-au-zephyr-prefere-les-jattes-de-kiwi  |
| West Frisian  | Alve bazige froulju wachtsje op dyn komst  | Alve bazige froulju wachtsje op dyn komst  | alve-bazige-froulju-wachtsje-op-dyn-komst  |
| German  | Falsches Üben von Xylophonmusik quält jeden größeren Zwerg  | Falsches Uben von Xylophonmusik qualt jeden grosseren Zwerg  | falsches-uben-von-xylophonmusik-qualt-jeden-grosseren-zwerg  |
| Greek  | Ταχίστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός Takhístè alôpèx vaphês psèménè gè, draskelízei ypér nòthroý kynós  | Tachiste alopex baphes psemene ge, draskelizei yper nothrou kynos Takhiste alopex vaphes psemene ge, draskelizei yper nothroy kynos  | tachiste-alopex-baphes-psemene-ge-draskelizei-yper-nothrou-kynos-takhiste-alopex-vaphes-psemene-ge-draskelizei-yper-nothroy-kynos  |
| Hebrew  | דג סקרן שט בים מאוכזב ולפתע מצא חברה dg sqrn šṭ bjM mʾwkzb wlptʿ mṣʾ ḥbrh  | dg sqrn st bym m'wkzb wlpt' mz' hbrh dg sqrn st bjM m wkzb wlpt ms hbrh  | dg-sqrn-st-bym-m-wkzb-wlpt-mz-hbrh-dg-sqrn-st-bjm-m-wkzb-wlpt-ms-hbrh  |
| Hindi  | ऋषियों को सताने वाले दुष्ट राक्षसों के राजा रावण का सर्वनाश करने वाले विष्णुवतार भगवान श्रीराम, अयोध्या के महाराज दशरथ के बड़े सपुत्र थे।  | rsiyom ko satane vale dusta raksasom ke raja ravana ka sarvanasa karane vale visnuvatara bhagavana srirama, ayodhya ke maharaja dasaratha ke bare saputra the.  | rsiyom-ko-satane-vale-dusta-raksasom-ke-raja-ravana-ka-sarvanasa-karane-vale-visnuvatara-bhagavana-srirama-ayodhya-ke-maharaja-dasaratha-ke-bare-saputra-the  |
| Hungarian  | Jó foxim és don Quijote húszwattos lámpánál ülve egy pár bűvös cipőt készít. Árvíztűrő tükörfúrógép.  | Jo foxim es don Quijote huszwattos lampanal ulve egy par buvos cipot keszit. Arvizturo tukorfurogep.  | jo-foxim-es-don-quijote-huszwattos-lampanal-ulve-egy-par-buvos-cipot-keszit-arvizturo-tukorfurogep  |
| Icelandic  | Kæmi ný öxi hér, ykist þjófum nú bæði víl og ádrepa. Svo hölt, yxna kýr þegði jú um dóp í fé á bæ.  | Kaemi ny oxi her, ykist thjofum nu baedi vil og adrepa. Svo holt, yxna kyr thegdi ju um dop i fe a bae.  | kaemi-ny-oxi-her-ykist-thjofum-nu-baedi-vil-og-adrepa-svo-holt-yxna-kyr-thegdi-ju-um-dop-i-fe-a-bae  |
| Igbo  | Nne, nna, wepụ he’l’ụjọ dum n’ime ọzụzụ ụmụ, vufesi obi nye Chukwu, ṅụrịanụ, gbakọọnụ kpaa, kwee ya ka o guzoshie ike; ọ ghaghị ito, nwapụta ezi agwa.  | Nne, nna, wepu he'l'ujo dum n'ime ozuzu umu, vufesi obi nye Chukwu, nurianu, gbakoonu kpaa, kwee ya ka o guzoshie ike; o ghaghi ito, nwaputa ezi agwa.  | nne-nna-wepu-he-l-ujo-dum-n-ime-ozuzu-umu-vufesi-obi-nye-chukwu-nurianu-gbakoonu-kpaa-kwee-ya-ka-o-guzoshie-ike-o-ghaghi-ito-nwaputa-ezi-agwa  |
| Indonesian  | Muharjo seorang xenofobia universal yang takut pada warga jazirah, contohnya Qatar.  | Muharjo seorang xenofobia universal yang takut pada warga jazirah, contohnya Qatar.  | muharjo-seorang-xenofobia-universal-yang-takut-pada-warga-jazirah-contohnya-qatar  |
| Irish  | D’fhuascail Íosa Úrmhac na hÓighe Beannaithe pór Éava agus Ádhaimh  | D'fhuascail Iosa Urmhac na hOighe Beannaithe por Eava agus Adhaimh  | d-fhuascail-iosa-urmhac-na-hoighe-beannaithe-por-eava-agus-adhaimh  |
| Italian  | Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja!  | Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja!  | quel-vituperabile-xenofobo-zelante-assaggia-il-whisky-ed-esclama-alleluja  |
| Japanese  | いろはにほへと ちりぬるを わかよたれそ つねならむ うゐのおくやま けふこえて あさきゆめみし ゑひもせす（ん）  | irohanihoheto chirinuruwo wakayotareso tsunenaramu uwinookuyama kefukoete asakiyumemishi wehimosesu(n)  | irohanihoheto-chirinuruwo-wakayotareso-tsunenaramu-uwinookuyama-kefukoete-asakiyumemishi-wehimosesu-n  |
| Latin  | Sic fugiens, dux, zelotypos, quam Karus haberis.  | Sic fugiens, dux, zelotypos, quam Karus haberis.  | sic-fugiens-dux-zelotypos-quam-karus-haberis  |
| Latvian  | Muļķa hipiji mēģina brīvi nogaršot celofāna žņaudzējčūsku.  | Mulka hipiji megina brivi nogarsot celofana znaudzejcusku.  | mulka-hipiji-megina-brivi-nogarsot-celofana-znaudzejcusku  |
| Lithuanian  | Įlinkdama fechtuotojo špaga sublykčiojusi pragręžė apvalų arbūzą  | Ilinkdama fechtuotojo spaga sublykciojusi pragreze apvalu arbuza  | ilinkdama-fechtuotojo-spaga-sublykciojusi-pragreze-apvalu-arbuza  |
| Lojban  | .o’i mu xagji sofybakni cu zvati le purdi  | .o'i mu xagji sofybakni cu zvati le purdi  | o-i-mu-xagji-sofybakni-cu-zvati-le-purdi  |
| Macedonian  | Ѕидарски пејзаж: шугав билмез со чудење џвака ќофте и кељ на туѓ цех.  | Zidarski pejzaz: sugav bilmez so cudene dvaka kofte i kel na tug ceh.  | zidarski-pejzaz-sugav-bilmez-so-cudene-dvaka-kofte-i-kel-na-tug-ceh  |
| Malayalam  | അജവും ആനയും ഐരാവതവും ഗരുഡനും കഠോര സ്വരം പൊഴിക്കെ ഹാരവും ഒഢ്യാണവും ഫാലത്തില്‍ മഞ്ഞളും ഈറന്‍ കേശത്തില്‍ ഔഷധ എണ്ണയുമായി ഋതുമതിയും അനഘയും ഭൂനാഥയുമായ ഉമ ദുഃഖഛവിയോടെ  | ajavum anayum airavatavum garudanum katheara svaram pealikke haravum odhyanavum phalattil mannalum iran kesattil ausadha ennayumayi rtumatiyum anaghayum bhunathayumaya uma duhkhachaviyeate  | ajavum-anayum-airavatavum-garudanum-katheara-svaram-pealikke-haravum-odhyanavum-phalattil-mannalum-iran-kesattil-ausadha-ennayumayi-rtumatiyum-anaghayum-bhunathayumaya-uma-duhkhachaviyeate  |
| Mapudungun  | Ngütram minchetu apochiküyeṉ: ñidol che mamüll ka rag kushe ḻafkeṉ mew.  | Ngutram minchetu apochikuyen: nidol che mamull ka rag kushe lafken mew.  | ngutram-minchetu-apochikuyen-nidol-che-mamull-ka-rag-kushe-lafken-mew  |
| Mongolian  | Щётканы фермд пийшин цувъя. Бөгж зогсч хэльюү.  | Setkany fermd pijsin cuv"a. B gz zogsc hel'u .  | setkany-fermd-pijsin-cuv-a-b-gz-zogsc-hel-u  |
| Myanmar  | Vår sære Zulu fra badeøya spilte jo whist og quickstep i min taxi.  | Var saere Zulu fra badeoya spilte jo whist og quickstep i min taxi.  | var-saere-zulu-fra-badeoya-spilte-jo-whist-og-quickstep-i-min-taxi  |
| Polish  | Dość gróźb fuzją, klnę, pych i małżeństw! Chwyć małżonkę, strój bądź pleśń z fugi.  | Dosc grozb fuzja, klne, pych i malzenstw! Chwyc malzonke, stroj badz plesn z fugi.  | dosc-grozb-fuzja-klne-pych-i-malzenstw-chwyc-malzonke-stroj-badz-plesn-z-fugi  |
| Romanian  | Înjurând pițigăiat, zoofobul comandă vexat whisky și tequila.  | Injurand pitigaiat, zoofobul comanda vexat whisky si tequila.  | injurand-pitigaiat-zoofobul-comanda-vexat-whisky-si-tequila  |
| Russian  | В чащах юга жил бы цитрус? Да, но фальшивый экземпляр!  | V casah uga zil by citrus? Da, no fal'sivyj ekzemplar!  | v-casah-uga-zil-by-citrus-da-no-fal-sivyj-ekzemplar  |
| Sanskrit  | कः खगौघाङचिच्छौजा झाञ्ज्ञोऽटौठीडडण्ढणः। तथोदधीन् पफर्बाभीर्मयोऽरिल्वाशिषां सहः।।  | kah khagaughanacicchauja jhanjnotauthidadandhanah. tathodadhin papharbabhirmayorilvasisam sahah..  | kah-khagaughanacicchauja-jhanjnotauthidadandhanah-tathodadhin-papharbabhirmayorilvasisam-sahah  |
| Scottish Gaelic  | Mus d’fhàg Cèit-Ùna ròp Ì le ob.  | Mus d'fhag Ceit-Una rop I le ob.  | mus-d-fhag-ceit-una-rop-i-le-ob  |
| Serbian  | Gojazni đačić s biciklom drži hmelj i finu vatu u džepu nošnje. Љубазни фењерџија чађавог лица хоће да ми покаже штос.  | Gojazni dacic s biciklom drzi hmelj i finu vatu u dzepu nosnje. Lubazni fenerdija cadavog lica hoce da mi pokaze stos.  | gojazni-dacic-s-biciklom-drzi-hmelj-i-finu-vatu-u-dzepu-nosnje-lubazni-fenerdija-cadavog-lica-hoce-da-mi-pokaze-stos  |
| Slovak  | Kŕdeľ šťastných ďatľov učí pri ústí Váhu mĺkveho koňa obhrýzať kôru a žrať čerstvé mäso.  | Krdel stastnych datlov uci pri usti Vahu mlkveho kona obhryzat koru a zrat cerstve maso.  | krdel-stastnych-datlov-uci-pri-usti-vahu-mlkveho-kona-obhryzat-koru-a-zrat-cerstve-maso  |
| Slovenian  | V kožuščku hudobnega fanta stopiclja mizar. Šerif bo za vajo spet kuhal domače žgance.  | V kozuscku hudobnega fanta stopiclja mizar. Serif bo za vajo spet kuhal domace zgance.  | v-kozuscku-hudobnega-fanta-stopiclja-mizar-serif-bo-za-vajo-spet-kuhal-domace-zgance  |
| Spanish  | José compró una vieja zampoña en Perú. Excusándose, Sofía tiró su whisky al desagüe de la banqueta.  | Jose compro una vieja zampona en Peru. Excusandose, Sofia tiro su whisky al desague de la banqueta.  | jose-compro-una-vieja-zampona-en-peru-excusandose-sofia-tiro-su-whisky-al-desague-de-la-banqueta  |
| Swedish  | Yxskaftbud, ge vår WC-zonmö IQ-hjälp. Gud hjälpe Zorns mö qvickt få byxa.  | Yxskaftbud, ge var WC-zonmo IQ-hjalp. Gud hjalpe Zorns mo qvickt fa byxa.  | yxskaftbud-ge-var-wc-zonmo-iq-hjalp-gud-hjalpe-zorns-mo-qvickt-fa-byxa  |
| Tagalog  | Ang bawat rehistradong kalahok sa patimpalak ay umaasang magantimpalaan ng ñino  | Ang bawat rehistradong kalahok sa patimpalak ay umaasang magantimpalaan ng nino  | ang-bawat-rehistradong-kalahok-sa-patimpalak-ay-umaasang-magantimpalaan-ng-nino  |
| Thai  | เป็นมนุษย์สุดประเสริฐเลิศคุณค่า กว่าบรรดาฝูงสัตว์เดรัจฉาน จงฝ่าฟันพัฒนาวิชาการ อย่าล้างผลาญฤๅเข่นฆ่าบีฑาใคร ไม่ถือโทษโกรธแช่งซัดฮึดฮัดด่า หัดอภัยเหมือนกีฬาอัชฌาสัย ปฏิบัติประพฤติกฎกำหนดใจ พูดจาให้จ๊ะๆ จ๋าๆ น่าฟังเอยฯ  | pen mnus'y sudpraserith leis khunkha kwa brrda fung satw deracchan cng fafan phat'hna wichakar xya lang phlay vi khen kha bitha khir mi thux thos' korth chaeng sad hudhad da had xphay hemuxn kila xachchasay ptibati praphvti kd kahnd ci phudca hi ca<< ca<< na fang xey  | pen-mnus-y-sudpraserith-leis-khunkha-kwa-brrda-fung-satw-deracchan-cng-fafan-phat-hna-wichakar-xya-lang-phlay-vi-khen-kha-bitha-khir-mi-thux-thos-korth-chaeng-sad-hudhad-da-had-xphay-hemuxn-kila-xachchasay-ptibati-praphvti-kd-kahnd-ci-phudca-hi-ca-ca-na-fang-xey  |
| Turkish  | Öküz ajan hapse düştü yavrum, ocağı felç gibi.  | Okuz ajan hapse dustu yavrum, ocagi felc gibi.  | okuz-ajan-hapse-dustu-yavrum-ocagi-felc-gibi  |
| Ukrainian  | Жебракують філософи при ґанку церкви в Гадячі, ще й шатро їхнє п’яне знаємо.  | Zebrakuut' filosofi pri ganku cerkvi v Gadaci, se j satro ihne p'ane znaemo.  | zebrakuut-filosofi-pri-ganku-cerkvi-v-gadaci-se-j-satro-ihne-p-ane-znaemo  |
| Urdu  | ٹھنڈ میں، ایک قحط زدہ گاؤں سے گذرتے وقت ایک چڑچڑے، باأثر و فارغ شخص کو بعض جل پری نما اژدہے نظر آئے۔  | n my , ayk qht zd gaw s gdhrt wqt ayk ch ch , baathr w fargh shkhs kw b d jl pry nma azhd nzr ay  | n-my-ayk-qht-zd-gaw-s-gdhrt-wqt-ayk-ch-ch-baathr-w-fargh-shkhs-kw-b-d-jl-pry-nma-azhd-nzr-ay  |
| Uyghur  | ئاۋۇ بىر جۈپ خوراز فرانسىيەنىڭ پارىژ شەھرىگە يېقىن تاغقا كۆچەلمىدى.  | yav byr j p khwraz fransyy nyng paryzh sh ryg y qyn taghqa k ch lmydy.  | yav-byr-j-p-khwraz-fransyy-nyng-paryzh-sh-ryg-y-qyn-taghqa-k-ch-lmydy  |
| Yoruba  | Ìwò̩fà ń yò̩ séji tó gbojúmó̩, ó hàn pákànpò̩ gan-an nis̩é̩ rè̩ bó dò̩la.  | Iwofa n yo seji to gbojumo, o han pakanpo gan-an nise re bo dola.  | iwofa-n-yo-seji-to-gbojumo-o-han-pakanpo-gan-an-nise-re-bo-dola  |
| Welsh  | Parciais fy jac codi baw hud llawn dŵr ger tŷ Mabon.  | Parciais fy jac codi baw hud llawn dwr ger ty Mabon.  | parciais-fy-jac-codi-baw-hud-llawn-dwr-ger-ty-mabon  |

### These languages are not fully supported yet
- Cherokee  
- Dzongkha  
- Klingon  
- Tibetan
