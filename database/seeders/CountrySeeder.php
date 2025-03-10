<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Country:: truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::unprepared("INSERT INTO `countries` (`id`, `name`) VALUES
        (1, 'Afganisztán'),
        (2, 'Albánia'),
        (3, 'Algéria'),
        (4, 'Amerikai Egyesült Államok'),
        (5, 'Andorra'),
        (6, 'Angola'),
        (7, 'Antigua és Barbuda'),
        (8, 'Argentína'),
        (10, 'Ausztrália'),
        (11, 'Ausztria'),
        (12, 'Azerbajdzsán'),
        (13, 'Bahama-szigetek'),
        (14, 'Bahrein'),
        (15, 'Banglades'),
        (16, 'Barbados'),
        (18, 'Belgium'),
        (19, 'Belize'),
        (20, 'Benin'),
        (21, 'Bhután'),
        (22, 'Bolívia'),
        (23, 'Bosznia és Hercegovina'),
        (24, 'Brazília'),
        (25, 'Brunei'),
        (26, 'Bulgária'),
        (27, 'Burkina Faso'),
        (28, 'Burundi'),
        (29, 'Ciprus'),
        (30, 'Csehország'),
        (31, 'Dánia'),
        (32, 'Dél-afrikai Köztársaság'),
        (33, 'Dél-Korea'),
        (34, 'Dél-Szudán'),
        (36, 'Dominika'),
        (35, 'Dominikai Köztársaság'),
        (37, 'Dzsibuti'),
        (38, 'Ecuador'),
        (39, 'Egyenlítői-Guinea'),
        (40, 'Egyiptom'),
        (41, 'Elefántcsontpart'),
        (42, 'Eritrea'),
        (43, 'Észtország'),
        (44, 'Etiópia'),
        (17, 'Fehéroroszország'),
        (45, 'Fidzsi-szigetek'),
        (46, 'Finnország'),
        (47, 'Franciaország'),
        (48, 'Gabon'),
        (49, 'Gambia'),
        (50, 'Ghána'),
        (53, 'Görögország'),
        (51, 'Grenada'),
        (52, 'Grúzia'),
        (54, 'Guatemala'),
        (55, 'Guinea'),
        (56, 'Guinea-Bissau'),
        (57, 'Guyana'),
        (58, 'Haiti'),
        (59, 'Honduras'),
        (60, 'Horvátország'),
        (61, 'India'),
        (62, 'Indonézia'),
        (63, 'Irak'),
        (64, 'Irán'),
        (65, 'Írország'),
        (66, 'Izland'),
        (67, 'Izrael'),
        (68, 'Jamaica'),
        (69, 'Japán'),
        (70, 'Jemen'),
        (71, 'Jordánia'),
        (72, 'Kambodzsa'),
        (73, 'Kamerun'),
        (74, 'Kanada'),
        (75, 'Katar'),
        (76, 'Kazahsztán'),
        (77, 'Kenya'),
        (78, 'Kína'),
        (79, 'Kirgizisztán'),
        (80, 'Kiribati'),
        (81, 'Kolumbia'),
        (82, 'Komore-szigetek'),
        (83, 'Kongó'),
        (84, 'Kongói Demokratikus Köztársaság'),
        (85, 'Koszovó'),
        (86, 'Kuba'),
        (87, 'Kuvait'),
        (88, 'Laosz'),
        (89, 'Lengyelország'),
        (90, 'Lesotho'),
        (91, 'Lettország'),
        (92, 'Libanon'),
        (93, 'Libéria'),
        (94, 'Líbia'),
        (95, 'Liechtenstein'),
        (96, 'Litvánia'),
        (97, 'Luxemburg'),
        (100, 'Macedónia'),
        (98, 'Madagaszkár'),
        (99, 'Magyarország'),
        (101, 'Malajzia'),
        (102, 'Malawi'),
        (103, 'Maldív-szigetek'),
        (104, 'Mali'),
        (105, 'Málta'),
        (106, 'Marokkó'),
        (107, 'Marshall-szigetek'),
        (108, 'Mauritánia'),
        (109, 'Mauritius'),
        (110, 'Mexikó'),
        (111, 'Mianmar'),
        (112, 'Mikronézia'),
        (113, 'Moldova'),
        (114, 'Monaco'),
        (115, 'Mongólia'),
        (116, 'Montenegró'),
        (117, 'Mozambik'),
        (118, 'Namíbia'),
        (119, 'Nauru'),
        (120, 'Németország'),
        (121, 'Nepál'),
        (122, 'Nicaragua'),
        (123, 'Nigéria'),
        (124, 'Norvégia'),
        (125, 'Nyugat-Szahara'),
        (126, 'Olaszország'),
        (127, 'Omán'),
        (128, 'Oroszország'),
        (9, 'Örményország'),
        (129, 'Pakisztán'),
        (130, 'Palau'),
        (131, 'Palesztina'),
        (132, 'Panama'),
        (133, 'Pápua Új-Guinea'),
        (134, 'Paraguay'),
        (135, 'Peru'),
        (136, 'Portugália'),
        (138, 'Románia'),
        (137, 'Ruanda'),
        (139, 'Salamon-szigetek'),
        (140, 'Salvador'),
        (141, 'San Marino'),
        (142, 'Sao Tomé és Príncipe'),
        (143, 'Seychelle-szigetek'),
        (144, 'Sierra Leone'),
        (151, 'Spanyolország'),
        (152, 'Sri Lanka'),
        (153, 'Suriname'),
        (155, 'Svájc'),
        (154, 'Svédország'),
        (146, 'Szerbia'),
        (145, 'Szingapúr'),
        (147, 'Szíria'),
        (148, 'Szlovákia'),
        (149, 'Szlovénia'),
        (150, 'Szomália'),
        (156, 'Szváziföld'),
        (157, 'Tádzsikisztán'),
        (158, 'Tajvan'),
        (159, 'Tanzánia'),
        (160, 'Thaiföld'),
        (161, 'Togo'),
        (162, 'Tonga'),
        (163, 'Trinidad és Tobago'),
        (164, 'Tunézia'),
        (166, 'Tuvalu'),
        (165, 'Türkmenisztán'),
        (167, 'Uganda'),
        (169, 'Új-Zéland'),
        (168, 'Ukrajna'),
        (170, 'Uruguay'),
        (171, 'Üzbegisztán'),
        (172, 'Vanuatu'),
        (173, 'Vatikán'),
        (174, 'Venezuela'),
        (175, 'Vietnam'),
        (176, 'Zambia'),
        (177, 'Zimbabwe');");

        error_log(date("H:i:s")." - Countries table feltöltve");
    }
}
