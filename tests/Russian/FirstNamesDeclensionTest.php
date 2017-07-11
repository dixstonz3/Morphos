<?php
namespace morhos\test\Russian;
require __DIR__.'/../../vendor/autoload.php';

use morphos\Gender;
use morphos\NamesDeclension;
use morphos\Russian\Cases;
use morphos\Russian\FirstNamesDeclension;

class FirstNamesDeclensionTest extends \PHPUnit_Framework_TestCase {
    /**
     * @dataProvider allMenNamesProvider
     */
    public function testMutableMen($name) {
        $this->assertTrue(FirstNamesDeclension::isMutable($name, FirstNamesDeclension::MALE));
    }

    /**
     * @dataProvider allWomenNamesProvider
     */
    public function testMutableWomen($name) {
        $this->assertTrue(FirstNamesDeclension::isMutable($name, FirstNamesDeclension::FEMALE));
    }

    public function allMenNamesProvider() {
        return [
            ['Август'], ['Авдей'], ['Аверкий'], ['Аверьян'], ['Авксентий'], ['Автоном'], ['Агап'], ['Агафон'], ['Аггей'], ['Адам'], ['Адриан и Андриян'], ['Азарий'], ['Аким'], ['Александр'], ['Алексей'], ['Амвросий'], ['Амос'], ['Ананий'], ['Анатолий'], ['Андрей'], ['Андрон'], ['Андроник'], ['Аникей'], ['Аникита'], ['Анисим и Онисим'], ['Антип'], ['Антонин'], ['Аполлинарий'], ['Аполлон'], ['Арефий'], ['Аристарх'], ['Аркадий'], ['Арсений'], ['Артемий'], ['Артем'], ['Архип'], ['Аскольд'], ['Афанасий'], ['Афиноген'], ['Бажен'], ['Богдан'], ['Болеслав'], ['Борис'], ['Борислав'], ['Боян'], ['Бронислав'], ['Будимир'], ['Вадим'], ['Валентин'], ['Валерий'], ['Валерьян'], ['Варлаам'], ['Варфоломей'], ['Василий'], ['Вацлав'], ['Велимир'], ['Венедикт'], ['Вениамин'], ['Викентий'], ['Виктор'], ['Викторин'], ['Виссарион'], ['Виталий'], ['Владилен'], ['Владлен'], ['Владимир'], ['Владислав'], ['Влас'], ['Всеволод'], ['Всемил'], ['Всеслав'], ['Вышеслав'], ['Вячеслав'], ['Гаврила и Гавриил'], ['Галактион'], ['Гедеон'], ['Геннадий'], ['Георгий'], ['Герасим'], ['Герман'], ['Глеб'], ['Гордей'], ['Гостомысл'], ['Гремислав'], ['Григорий'], ['Гурий'], ['Давыд и Давид'], ['Данила и Даниил'], ['Дементий'], ['Демид'], ['Демьян'], ['Денис'], ['Дмитрий'], ['Добромысл'], ['Доброслав'], ['Дорофей'], ['Евгений'], ['Евграф'], ['Евдоким'], ['Евлампий'], ['Евсей'], ['Евстафий'], ['Евстигней'], ['Егор'], ['Елизар'], ['Елисей'], ['Емельян'], ['Епифан'], ['Еремей'], ['Ермил'], ['Ермолай'], ['Ерофей'], ['Ефим'], ['Ефрем'], ['Захар'], ['Зиновий'], ['Иван'], ['Игнатий'], ['Игорь'], ['Измаил'], ['Изот'], ['Изяслав'], ['Иларион'], ['Илья'], ['Иннокентий'], ['Иосиф'], ['Осип'], ['Ипат'], ['Ипатий'], ['Ипполит'], ['Ираклий'], ['Исай'], ['Исидор'], ['Казимир'], ['Каллистрат'], ['Капитон'], ['Карл'], ['Карп'], ['Касьян'], ['Ким'], ['Кир'], ['Кирилл'], ['Клавдий'], ['Климент'], ['Клементий'], ['Клим'], ['Кондрат'], ['Кондратий'], ['Конон'], ['Константин'], ['Корнил'], ['Корней'], ['Корнилий'], ['Кузьма'], ['Куприян'], ['Лавр'], ['Лаврентий'], ['Ладимир'], ['Ладислав'], ['Лазарь'], ['Лев'], ['Леон'], ['Леонид'], ['Леонтий'], ['Лонгин'], ['Лука'], ['Лукьян'], ['Лучезар'], ['Любим'], ['Любомир'], ['Любосмысл'], ['Макар'], ['Максим'], ['Максимильян'], ['Мариан'], ['Марк'], ['Мартын'], ['Мартьян'], ['Матвей'], ['Мефодий'], ['Мечислав'], ['Милан'], ['Милен'], ['Милий'], ['Милован'], ['Мина'], ['Мир'], ['Мирон'], ['Мирослав'], ['Митофан'], ['Михаил'], ['Михей'], ['Модест'], ['Моисей'], ['Мокей'], ['Мстислав'], ['Назар'], ['Наркис'], ['Натан'], ['Наум'], ['Нестор'], ['Никандр'], ['Никанор'], ['Никита'], ['Никифор'], ['Никодим'], ['Николай'], ['Никон'], ['Нифонт'], ['Олег'], ['Олимпий'], ['Онуфрий'], ['Орест'], ['Остап'], ['Остромир'], ['Павел'], ['Панкратий'], ['Панкрат'], ['Пантелеймон'], ['Панфил'], ['Парамон'], ['Парфен'], ['Пахом'], ['Петр'], ['Пимен'], ['Платон'], ['Поликарп'], ['Порфирий'], ['Потап'], ['Пров'], ['Прокл'], ['Прокофий'], ['Прохор'], ['Радим'], ['Радислав'], ['Радован'], ['Ратибор'], ['Ратмир'], ['Родион'], ['Роман'], ['Ростислав'], ['Рубен'], ['Руслан'], ['Рюрик'], ['Савва'], ['Савватий'], ['Савелий'], ['Самсон'], ['Самуил'], ['Светозар'], ['Святополк'], ['Святослав'], ['Севастьян'], ['Селиван'], ['Селиверст'], ['Семен'], ['Серафим'], ['Сергей'], ['Сигизмунд'], ['Сидор'], ['Силантий'], ['Сильвестр'], ['Симон'], ['Сократ'], ['Соломон'], ['Софон'], ['Софрон'], ['Спартак'], ['Спиридон'], ['Станимир'], ['Станислав'], ['Степан'], ['Стоян'], ['Тарас'], ['Твердислав'], ['Творимир'], ['Терентий'], ['Тимофей'], ['Тимур'], ['Тит'], ['Тихон'], ['Трифон'], ['Трофим'], ['Ульян'], ['Устин'], ['Фадей'], ['Федор'], ['Федосий'], ['Федот'], ['Феликс'], ['Феоктист'], ['Феофан'], ['Ферапонт'], ['Филарет'], ['Филимон'], ['Филипп'], ['Фирс'], ['Флорентин'], ['Фока'], ['Фома'], ['Фортунат'], ['Фотий'], ['Фрол'], ['Харитон'], ['Харлампий'], ['Христофор'], ['Чеслав'], ['Эдуард'], ['Эммануил'], ['Эраст'], ['Эрнест'], ['Эрнст'], ['Ювеналий'], ['Юлиан'], ['Юлий'], ['Юрий'], ['Яков'], ['Ян'], ['Якуб'], ['Януарий'], ['Ярополк'], ['Ярослав']
        ];
    }

    public function allWomenNamesProvider() {
        return [
            ['Августа'], ['Агата'], ['Агафья'], ['Агнесса'], ['Агния'], ['Аграфена'], ['Агриппина'], ['Ада'], ['Аделаида'], ['Аза'], ['Алевтина'], ['Александра'], ['Алина'], ['Алиса'], ['Алла'], ['Альбина'], ['Анастасия'], ['Ангелина'], ['Анисья'], ['Анна'], ['Антонида'], ['Антонина'], ['Анфиса'], ['Аполлинария'], ['Ариадна'], ['Беатриса'], ['Берта'], ['Борислава'], ['Бронислава'], ['Валентина'], ['Валерия'], ['Ванда'], ['Варвара'], ['Василиса'], ['Васса'], ['Вера'], ['Вероника'], ['Викторина'], ['Виктория'], ['Виргиния'], ['Влада'], ['Владилена'], ['Владлена'], ['Владислава'], ['Власта'], ['Всеслава'], ['Галина'], ['Галя'], ['Ганна'], ['Генриетта'], ['Глафира'], ['Горислава'], ['Дарья'], ['Диана'], ['Дина'], ['Доминика'], ['Домна'], ['Ева'], ['Евгеиня'], ['Евдокия'], ['Евлампия'], ['Екатерина'], ['Елена'], ['Елизавета'], ['Ефросинья'], ['Жанна'], ['Зинаида'], ['Злата'], ['Изабелла'], ['Изольда'], ['Инга'], ['Инесса'], ['Инна'], ['Ираида'], ['Ирина'], ['Ия'], ['Казимира'], ['Калерия'], ['Капитолина'], ['Каролина'], ['Кира'], ['Клавдия'], ['Клара'], ['Кларисса'], ['Клементина'], ['Клеопатра'], ['Конкордия'], ['Ксения'], ['Лада'], ['Лариса'], ['Леокадия'], ['Лиана'], ['Лидия'], ['Лилиана'], ['Клеопатра'], ['Конкордия'], ['Ксения'], ['Лада'], ['Лариса'], ['Леокадия'], ['Лиана'], ['Лидия'], ['Лилиана'], ['Лилия'], ['Лия'], ['Луиза'], ['Лукерья'], ['Любава'], ['Любомила'], ['Любомира'], ['Людмила'], ['Майя'], ['Мальвина'], ['Маргарита'], ['Марианна'], ['Мариетта'], ['Марина'], ['Мария'], ['Марта'], ['Марфа'], ['Меланья'], ['Мелитриса'], ['Милана'], ['Милена'], ['Милица'], ['Мира'], ['Мирослава'], ['Млада'], ['Мстислава'], ['Муза'], ['Надежда'], ['Наталья'], ['Наталия'], ['Неонила'], ['Ника'], ['Нина'], ['Нона'], ['Оксана'], ['Октябрина'], ['Олимпиада'], ['Ольга'], ['Пелагея'], ['Поликсена'], ['Полина'], ['Прасковья'], ['Пульхерия'], ['Рада'], ['Раиса'], ['Регина'], ['Рената'], ['Римма'], ['Рогнеда'], ['Роза'], ['Розалия'], ['Розина'], ['Ростислава'], ['Руфина'], ['Светлана'], ['Серафима'], ['Сильва'], ['Сильвия'], ['Саломея'], ['Софья'], ['Станислава'], ['Стела'], ['Степанида'], ['Сусанна'], ['Таисия'], ['Тамара'], ['Татьяна'], ['Ульяна'], ['Фаина'], ['Федосья'], ['Фелицата'], ['Флора'], ['Флорентина'], ['Фатина'], ['Харитина'], ['Христина'], ['Эвелина'], ['Элеонора'], ['Эльвира'], ['Эмилия'], ['Эмма'], ['Юлия'], ['Ядвига'], ['Ярослава']
        ];
    }

    /**
     * @dataProvider menNamesProvider()
     */
    public function testDeclenationForMen($name, $name2, $name3, $name4, $name5, $name6) {
        $this->assertEquals(array(
            Cases::IMENIT => $name,
            Cases::RODIT => $name2,
            Cases::DAT => $name3,
            Cases::VINIT => $name4,
            Cases::TVORIT => $name5,
            Cases::PREDLOJ => $name6,
        ), FirstNamesDeclension::getCases($name, FirstNamesDeclension::MALE));
    }

    /**
     * @dataProvider womenNamesProvider()
     */
    public function testDeclenationForWomen($name, $name2, $name3, $name4, $name5, $name6) {
        $this->assertEquals(array(
            Cases::IMENIT => $name,
            Cases::RODIT => $name2,
            Cases::DAT => $name3,
            Cases::VINIT => $name4,
            Cases::TVORIT => $name5,
            Cases::PREDLOJ => $name6,
        ), FirstNamesDeclension::getCases($name, FirstNamesDeclension::FEMALE));
    }

    public function menNamesProvider() {
        return array(
            array('Иван', 'Ивана', 'Ивану', 'Ивана', 'Иваном', 'об Иване'),
            array('Святослав', 'Святослава', 'Святославу', 'Святослава', 'Святославом', 'о Святославе'),
            array('Тимур', 'Тимура', 'Тимуру', 'Тимура', 'Тимуром', 'о Тимуре'),
            array('Рем', 'Рема', 'Рему', 'Рема', 'Ремом', 'о Реме'),
            array('Казбич', 'Казбича', 'Казбичу', 'Казбича', 'Казбичем', 'о Казбиче'),
            array('Игорь', 'Игоря', 'Игорю', 'Игоря', 'Игорем', 'об Игоре'),
            array('Виль', 'Виля', 'Вилю', 'Виля', 'Вилем', 'о Виле'),
            array('Рауль', 'Рауля', 'Раулю', 'Рауля', 'Раулем', 'о Рауле'),
            array('Шамиль', 'Шамиля', 'Шамилю', 'Шамиля', 'Шамилем', 'о Шамиле'),
            array('Петрусь', 'Петруся', 'Петрусю', 'Петруся', 'Петрусем', 'о Петрусе'),
            array('Абай', 'Абая', 'Абаю', 'Абая', 'Абаем', 'об Абае'),
            array('Федяй', 'Федяя', 'Федяю', 'Федяя', 'Федяем', 'о Федяе'),
            array('Андрей', 'Андрея', 'Андрею', 'Андрея', 'Андреем', 'об Андрее'),
            array('Гарей', 'Гарея', 'Гарею', 'Гарея', 'Гареем', 'о Гарее'),
            array('Джансуй', 'Джансуя', 'Джансую', 'Джансуя', 'Джансуем', 'о Джансуе'),
            array('Ной', 'Ноя', 'Ною', 'Ноя', 'Ноем', 'о Ное'),
            array('Дмитрий', 'Дмитрия', 'Дмитрию', 'Дмитрия', 'Дмитрием', 'о Дмитрии'),
            array('Гордий', 'Гордия', 'Гордию', 'Гордия', 'Гордием', 'о Гордии'),
            array('Пий', 'Пия', 'Пию', 'Пия', 'Пием', 'о Пии'),
            array('Геннадий', 'Геннадия', 'Геннадию', 'Геннадия', 'Геннадием', 'о Геннадии'),
            array('Хаджибий', 'Хаджибия', 'Хаджибию', 'Хаджибия', 'Хаджибием', 'о Хаджибии'),
            array('Никита', 'Никиты', 'Никите', 'Никиту', 'Никитой', 'о Никите'),
            array('Данила', 'Данилы', 'Даниле', 'Данилу', 'Данилой', 'о Даниле'),
            array('Эйса', 'Эйсы', 'Эйсе', 'Эйсу', 'Эйсой', 'об Эйсе'),
            array('Кузьма', 'Кузьмы', 'Кузьме', 'Кузьму', 'Кузьмой', 'о Кузьме'),
            array('Мустафа', 'Мустафы', 'Мустафе', 'Мустафу', 'Мустафой', 'о Мустафе'),
            array('Байхужа', 'Байхужи', 'Байхуже', 'Байхужу', 'Байхужой', 'о Байхуже'),
            array('Хасанша', 'Хасанши', 'Хасанше', 'Хасаншу', 'Хасаншой', 'о Хасанше'),
            array('Карча', 'Карчи', 'Карче', 'Карчу', 'Карчой', 'о Карче'),
            array('Гыкга', 'Гыкги', 'Гыкге', 'Гыкгу', 'Гыкгой', 'о Гыкге'),
            array('Бетикка', 'Бетикки', 'Бетикке', 'Бетикку', 'Бетиккой', 'о Бетикке'),
            array('Анания', 'Анании', 'Анании', 'Ананию', 'Ананией', 'об Анании'),
            array('Неемия', 'Неемии', 'Неемии', 'Неемию', 'Неемией', 'о Неемии'),
            array('Малахия', 'Малахии', 'Малахии', 'Малахию', 'Малахией', 'о Малахии'),
            array('Осия', 'Осии', 'Осии', 'Осию', 'Осией', 'об Осии'),
            array('Иеремия', 'Иеремии', 'Иеремии', 'Иеремию', 'Иеремией', 'об Иеремии'),
            array('Илия', 'Илии', 'Илии', 'Илию', 'Илией', 'об Илии'),
            array('Данило', 'Данилы', 'Даниле', 'Данилу', 'Данилой', 'о Даниле'),
            array('Иванко', 'Иванки', 'Иванке', 'Иванку', 'Иванкой', 'об Иванке'),
            array('Слава', 'Славы', 'Славе', 'Славу', 'Славой', 'о Славе'),
            array('Сергей', 'Сергея', 'Сергею', 'Сергея', 'Сергеем', 'о Сергее'),
            array('Илья', 'Ильи', 'Илье', 'Илью', 'Ильей', 'об Илье'),
        );
    }

    public function womenNamesProvider() {
        return array(
            array('Анна', 'Анны', 'Анне', 'Анну', 'Анной', 'об Анне'),
            array('Эра', 'Эры', 'Эре', 'Эру', 'Эрой', 'об Эре'),
            array('Асма', 'Асмы', 'Асме', 'Асму', 'Асмой', 'об Асме'),
            array('Хафиза', 'Хафизы', 'Хафизе', 'Хафизу', 'Хафизой', 'о Хафизе'),
            array('Ольга', 'Ольги', 'Ольге', 'Ольгу', 'Ольгой', 'об Ольге'),
            array('Моника', 'Моники', 'Монике', 'Монику', 'Моникой', 'о Монике'),
            array('Голиндуха', 'Голиндухи', 'Голиндухе', 'Голиндуху', 'Голиндухой', 'о Голиндухе'),
            array('Снежа', 'Снежи', 'Снеже', 'Снежу', 'Снежой', 'о Снеже'),
            array('Гайша', 'Гайши', 'Гайше', 'Гайшу', 'Гайшой', 'о Гайше'),
            array('Милица', 'Милицы', 'Милице', 'Милицу', 'Милицей', 'о Милице'),
            array('Ляуца', 'Ляуцы', 'Ляуце', 'Ляуцу', 'Ляуцей', 'о Ляуце'),
            array('Куаца', 'Куацы', 'Куаце', 'Куацу', 'Куацей', 'о Куаце'),
            array('Олеся', 'Олеси', 'Олесе', 'Олесю', 'Олесей', 'об Олесе'),
            array('Дарья', 'Дарьи', 'Дарье', 'Дарью', 'Дарьей', 'о Дарье'),
            array('Майя', 'Майи', 'Майе', 'Майю', 'Майей', 'о Майе'),
            array('Моя', 'Мои', 'Мое', 'Мою', 'Моей', 'о Мое'),
            array('Пелагея', 'Пелагеи', 'Пелагее', 'Пелагею', 'Пелагеей', 'о Пелагее'),
            array('Марция', 'Марции', 'Марции', 'Марцию', 'Марцией', 'о Марции'),
            array('Наталия', 'Наталии', 'Наталии', 'Наталию', 'Наталией', 'о Наталии'),
            array('Армения', 'Армении', 'Армении', 'Армению', 'Арменией', 'об Армении'),
            array('Лия', 'Лии', 'Лии', 'Лию', 'Лией', 'о Лии'),
            array('Ия', 'Ии', 'Ии', 'Ию', 'Ией', 'об Ии'),
            array('Любовь', 'Любови', 'Любови', 'Любовь', 'Любовью', 'о Любови'),
            array('Эсфирь', 'Эсфири', 'Эсфири', 'Эсфирь', 'Эсфирью', 'об Эсфири'),
            array('Нинель', 'Нинели', 'Нинели', 'Нинель', 'Нинелью', 'о Нинели'),
            array('Айгюль', 'Айгюли', 'Айгюли', 'Айгюль', 'Айгюлью', 'об Айгюли'),
            array('Вартануш', 'Вартануши', 'Вартануши', 'Вартануш', 'Вартанушью', 'о Вартануши'),
            array('Катиш', 'Катиши', 'Катиши', 'Катиш', 'Катишью', 'о Катиши'),
            array('Хуж', 'Хужи', 'Хужи', 'Хуж', 'Хужью', 'о Хужи'),
            array('Гуащ', 'Гуащи', 'Гуащи', 'Гуащ', 'Гуащью', 'о Гуащи'),
            array('Карач', 'Карачи', 'Карачи', 'Карач', 'Карачью', 'о Карачи'),
            array('Мария', 'Марии', 'Марии', 'Марию', 'Марией', 'о Марии'),
            array('Дарья', 'Дарьи', 'Дарье', 'Дарью', 'Дарьей', 'о Дарье')
        );
    }

    /**
     * @dataProvider immutableNamesProvider()
     */
    public function testImmutabeNames($name, $gender) {
        $this->assertFalse(FirstNamesDeclension::isMutable($name, $gender));
    }

    public function immutableNamesProvider() {
        return array(
            array('Тореро', FirstNamesDeclension::FEMALE),
            array('Айбу', FirstNamesDeclension::FEMALE),
            array('Хосе', FirstNamesDeclension::FEMALE),
            array('Каншау', FirstNamesDeclension::FEMALE),
            array('Франсуа', FirstNamesDeclension::FEMALE),
            array('Тойбухаа', FirstNamesDeclension::FEMALE),
            array('Качаа', FirstNamesDeclension::FEMALE),
            array('Зиа', FirstNamesDeclension::FEMALE),
            array('Хожулаа', FirstNamesDeclension::FEMALE),
        );
    }

    /**
     * @dataProvider mutableNamesProvider()
     */
    public function testMutableNames($name, $gender) {
        $this->assertTrue(FirstNamesDeclension::isMutable($name, $gender));
    }

    /**
     * @dataProvider allMenNamesProvider()
     */
    public function testDetectGenderMen($name) {
        $result = FirstNamesDeclension::detectGender($name);
        if ($result !== null) $this->assertEquals(NamesDeclension::MALE, $result);
    }

    /**
     * @dataProvider allWomenNamesProvider()
     */
    public function testDetectGenderWomen($name) {
        $result = FirstNamesDeclension::detectGender($name);
        if ($result !== null) $this->assertEquals(NamesDeclension::FEMALE, $result);
    }

    public function mutableNamesProvider() {
        return array(
            array('Иван', FirstNamesDeclension::MALE),
            array('Игорь', FirstNamesDeclension::MALE),
            array('Андрей', FirstNamesDeclension::MALE),
            array('Фома', FirstNamesDeclension::MALE),
            array('Никита', FirstNamesDeclension::MALE),
            array('Илья', FirstNamesDeclension::MALE),
            array('Анна', FirstNamesDeclension::FEMALE),
            array('Наталья', FirstNamesDeclension::FEMALE),
            array('Виринея', FirstNamesDeclension::FEMALE),
            // foreign names
            array('Айдын', FirstNamesDeclension::MALE),
            array('Наиль', FirstNamesDeclension::MALE),
            array('Тукай', FirstNamesDeclension::MALE),
            array('Мустафа', FirstNamesDeclension::MALE),
            array('Нафиса', FirstNamesDeclension::FEMALE),
            array('Асия', FirstNamesDeclension::FEMALE),
            array('Лючия', FirstNamesDeclension::FEMALE),
        );
    }

    /**
     * @dataProvider menNamesProvider()
     */
    public function testGetCase($name, $case2) {
        $this->assertEquals($case2, FirstNamesDeclension::getCase($name, Cases::RODIT, Gender::MALE));
    }
}
