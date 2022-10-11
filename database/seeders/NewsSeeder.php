<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // News that created automatically from starting project.
        News::create(['name' => 'Saeimas komisija vienbalsīgi atbalsta Plepa kandidatūru AT senatora amatam ',
            'content' => 'Saeimas Juridiskā komisija otrdien, 11. oktobrī, vienbalsīgi atbalstīja Valsts prezidenta Egila Levita padomnieka tiesību politikas jautājumos Jāņa Plepa kandidatūru Augstākās tiesas (AT) senatora amatam.
            Diskusijās pirms balsojuma AT priekšsēdētājs Aigars Strupišs norādīja, ka AT Administratīvo lietu departamentā ir trīs vakances, uz kurām bija pieteikušies seši spēcīgi kandidāti, tostarp Pleps.
            Strupišs Plepu raksturoja kā Latvijā pazīstamu juristu ar augstu autoritāti. "Viņa akadēmiskā darbība ir tā, ko viņš var pienest Senātam. Tā [akadēmiskā darba] neitralitāte un plašais loks ir tas, kas vajadzīgs kasācijas instancei," sacīja AT priekšsēdētājs.
            Savukārt pats Pleps deputātiem norādīja, ka izvēlējies kandidēt uz senatora amatu, jo, viņa ieskatā, 40 gadu vecums ir simboliska robežšķirtne. "Nākamais vecuma cenzs Latvijā ir pensija," norādīja jurists. Tāpat viņš skaidroja, ka ilgstoši strādājis likumdevēja "zarā", kā arī akadēmiskajā vidē, bet tagad viņam ir vēlme risināt konkrētus juridiskus kāzusus un piemērot juridiskās normas.
            "Es ilgstoši mācu studentiem, kā pareizi piemērot tiesību normas, bet tad ceru, ka man pašam būs iespēja to darīt praksē," sacīja topošais senators. Tāpat viņš atzīmēja, ka savas karjeras pirmsākumos strādājis kā tiesneša palīgs, tamdēļ atminoties kā rakstīt procesuālos dokumentus un iesiet sējumus.
            Uzklausījuši Plepu un Strupišu, Saeimas komisijas deputāti neiestiga garās debatēs, vien vaicājot Plepam par to, vai viņš turpinās akadēmisko darbību, kā arī vai no viņa gaidāmas vēl jurisprudences grāmatas, par kurām īpaši interesējās Valērijs Agešins (S), kurš uzsvēra, ka ar lielu interesi tās lasa.
            Jau pēc balsojuma Inese Lībiņa-Egnere (JV) pauda pateicību Plepam par viņa līdz šim sniegto atbalstu likumdevējam, kas izpaudies gan viņa darbā Saeimas Juridiskajā birojā, gan, piemēram, Valsts prezidenta birojā.
            Par šo jautājums plānots lemt 13. oktobra Saeimas sēdē.
            Publiski pieejamā informācija liecina, ka 2011. gadā Pleps Latvijas Universitātes (LU) Juridiskajā fakultātē ieguvis doktora grādu tiesību teorijā un vēsturē.
            Kopš 2015. gada Pleps strādāja arī kā Valsts prezidenta Raimonda Vējoņa konstitucionālo tiesību padomnieks. Līdztekus Valsts prezidenta padomnieka darbam viņš ir LU Juridiskās fakultātes Tiesību teorijas un vēstures zinātņu katedras vadītājs un docents.
            Papildus darbam Valsts prezidenta institūcijā Jānis Pleps ir strādājis Saeimas Juridiskajā birojā kā juridiskais padomnieks, vēlāk bijis vecākais juridiskais padomnieks. Bijis Satversmes tiesas tiesneša palīgs no 2005. līdz 2008. gadam. Akadēmiskā un pētnieciskā darba pieredzi papildina Biznesa augstskolas "Turība"
            Pleps ar pārtraukumiem bijis nedēļas žurnāla "Jurista Vārds" tieslietu redaktors. Bijis Valsts prezidenta Andra Bērziņa Ekspertu grupas pārvaldības pilnveidei loceklis. Savukārt kopš 2015. gada viņš ir Latvijas Nacionālās en']);
    }
}
