<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Func;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $groups = [
            ['name' => 'Naranja'],
            ['name' => 'Rojo'],
            ['name' => 'Verde'],
            ['name' => 'Blanco'],
        ];
        \App\Models\Group::insert($groups);
        // $products=[
        //     ['name' => 'Product 01','code'=>'AB02D', 'image'=>'', 'group_id'=>1],
        //     ['name' => 'Product 02','code'=>'J4K8A', 'image'=>'', 'group_id'=>2],
        //     ['name' => 'Product 03','code'=>'B7TEU', 'image'=>'', 'group_id'=>3],
        //     ['name' => 'Product 04','code'=>'8AIBF', 'image'=>'', 'group_id'=>1],
        //     ['name' => 'Product 05','code'=>'7S5D6', 'image'=>'', 'group_id'=>2],
        // ];
        // \App\Models\Product::insert($products);
        // $j=1;$y=1;
        // $products=[];
        // for ($i=1; $i <=28 ; $i++) {
        //     if($j>7){
        //         $j=1;
        //         $y+=1;
        //     }
        //     $a=['name' => 'Product '.$i,'code'=>Func::generateCode(6), 'image'=>'', 'group_id'=>$y];
        //     $j++;
        //     $products[]=$a;
        // }
        // \Log::info($products);
        // \App\Models\Product::insert($products);
        // $coins=[
        //     ['name'=>'bronce','pts'=>10],
        //     ['name'=>'plata','pts'=>20],
        //     ['name'=>'oro','pts'=>30],
        //     ['name'=>'diamante','pts'=>50],
        // ];
        // \App\Models\Coin::insert($coins);
        // $minist=[
        //     ['name' => 'JUDEA'],
        //     ['name' => 'VALIENTES'],
        //     ['name' => 'LOKHEM'],
        // ];
        // \App\Models\Ministry::insert($minist);

        $users = [
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => Hash::make(12345678), 'group_id' => null, 'role_id' => 1],
            ['name' => 'user', 'email' => 'yerfe717@gmail.com', 'password' => Hash::make(12345678), 'group_id' => 1, 'role_id' => 1]
        ];
        \App\Models\User::insert($users);

        //insertar 150 qr codes
        // $qr=[];
        // for ($i=1; $i <=150 ; $i++) {
        //     $a=['code'=>Func::generateCode(6)];
        //     $qr[]=$a;
        // }
        // \App\Models\Qr::insert($qr);


        //biblicas
        $biblicas = [
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Qué le dolió en el alma a Pablo durante su viaje a Atenas?',
                'correct_answer' => 'La cantidad de ídolos en la ciudad.',
                'incorrect_answers' => json_encode(['La promiscuidad del pueblo griego.', 'La falta de sinagogas.', 'Ninguna de la anteriores']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cuáles discípulos le preguntaron a Jesús si podían hacer descender fuego del cielo?',
                'correct_answer' => 'Juan y Jacobo',
                'incorrect_answers' => json_encode(['Pedro y Juan', 'Jacobo y Pedro', 'Juan y Pedro']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cómo se llamaba el rey de Israel que sacrificó en el fuego a su hijo?',
                'correct_answer' => 'Acaz',
                'incorrect_answers' => json_encode(['Joaz', 'Joacaz', 'Ismael']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cuál era el nombre de la única hija de Lea?',
                'correct_answer' => 'Dina',
                'incorrect_answers' => json_encode(['Zilpa', 'Sara', 'Raquel']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿A cuál tribu pertenecía Saúl?',
                'correct_answer' => 'Benjamín',
                'incorrect_answers' => json_encode(['Neftalí', 'Leví', 'Juda']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿A quién llamó el Apóstol Pablo "el querido médico"?',
                'correct_answer' => 'Lucas',
                'incorrect_answers' => json_encode(['Jesús', 'Juan', 'Mateo']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Quién tenía una cabellera que pesaba más de 2 kilos?',
                'correct_answer' => 'Absalón',
                'incorrect_answers' => json_encode(['David', 'Sansón', 'Enoc']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cuántos capítulos tiene el Libro de Nahúm?',
                'correct_answer' => '3',
                'incorrect_answers' => json_encode(['1', '4', '6']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cuál era el nombre babilónico de Daniel?',
                'correct_answer' => 'Beltsasar',
                'incorrect_answers' => json_encode(['Azarías', 'Abednego', 'Mesac']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cuál libro de la Biblia termina con un signo de interrogación?',
                'correct_answer' => 'Jonás',
                'incorrect_answers' => json_encode(['Joel', 'Judas', 'Malaquías']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿A quién Dios le prolongó la vida por 15 años más después de que oró?',
                'correct_answer' => 'Ezequías',
                'incorrect_answers' => json_encode(['Enoc', 'Matusalén', 'Moises']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Qué le dio el faraón a José cuando lo nombró gobernador?',
                'correct_answer' => 'El anillo oficial',
                'incorrect_answers' => json_encode(['Una buena cena', 'Doce caballos', 'Unos sirvientes']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cómo se llamaba el papá de Saúl?',
                'correct_answer' => 'Quis / Cis',
                'incorrect_answers' => json_encode(['Abiel', 'Zeror', 'Eram / Emar']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿A cambio de cuántas monedas Judas entregó a Jesús?',
                'correct_answer' => '30 monedas de plata',
                'incorrect_answers' => json_encode(['30 monedas de oro', '100 denarios', '30 denarios']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cuántos años más vivió Noé después del diluvio?',
                'correct_answer' => '350 años',
                'incorrect_answers' => json_encode(['100 años', '7 días', '77 años']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Quién era un hombre rico y recaudador de impuestos?',
                'correct_answer' => 'Zaqueo',
                'incorrect_answers' => json_encode(['Zacarías', 'Zebedeo', 'Zabulon']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cuál de estos libros tiene más de un capítulo?',
                'correct_answer' => 'Joel',
                'incorrect_answers' => json_encode(['Judas', 'Abdías', 'Filemon']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => 'En la visión profética de Juan, ¿cuántos eran los jinetes del Apocalipsis?',
                'correct_answer' => '4',
                'incorrect_answers' => json_encode(['7', '6', '5']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cómo se llamaba la primera mujer que ha existido sobre la tierra?',
                'correct_answer' => 'Eva',
                'incorrect_answers' => json_encode(['María', 'Sara', 'Evo']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Dónde vivían Adán y Eva?',
                'correct_answer' => 'En el Jardín del Edén',
                'incorrect_answers' => json_encode(['En una pirámide', 'En un barco', 'En el paraíso']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuál era el nombre de la esposa de Abraham?',
                'correct_answer' => 'Sara',
                'incorrect_answers' => json_encode(['Ana', 'Raquel', 'María']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cómo reaccionó Sara cuando el ángel le dijo a Abraham que tendrían un hijo?',
                'correct_answer' => 'Ella se rió',
                'incorrect_answers' => json_encode(['Ella lloró', 'Ella se desmayó', 'Ella salto de gozo']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Quién dirigió al pueblo para derribar la muralla de Jericó?',
                'correct_answer' => 'Josué',
                'incorrect_answers' => json_encode(['José', 'Bernabé', 'Moises']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => ' ¿Cómo se le llama al momento en el que el mundo quedó cubierto por agua?',
                'correct_answer' => 'El diluvio',
                'incorrect_answers' => json_encode(['La gran tempestad', 'La gran inundación', 'El Maremoto']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿A quién se considera el hombre más fuerte de la Biblia?',
                'correct_answer' => 'Sansón',
                'incorrect_answers' => json_encode(['Pedro', 'Faraón', 'Moises']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Dónde clavaron a Jesús?',
                'correct_answer' => 'En una cruz',
                'incorrect_answers' => json_encode(['En un árbol', 'En una mesa', 'En una madera']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuántos discípulos tenía Jesús?',
                'correct_answer' => '12',
                'incorrect_answers' => json_encode(['3', '11', '9']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => ' ¿Cómo logró salir de Egipto el pueblo de Israel?',
                'correct_answer' => 'El mar se abrió y el pueblo pasó',
                'incorrect_answers' => json_encode(['El pueblo nadó por el mar Rojo', 'El pueblo desapareció de Egipto y apareció en Israel', 'El pueblo no salio de Egipto']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cuál mujer fue jueza y líder de Israel según dice la Biblia?',
                'correct_answer' => 'Débora',
                'incorrect_answers' => json_encode(['Jael', 'Ester', 'Noemi']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuántos discípulos tenía Jesús?',
                'correct_answer' => '12',
                'incorrect_answers' => json_encode(['3', '11', '9']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Quién reinaba en Judá cuando Nabucodonosor sitió Jerusalén?',
                'correct_answer' => 'Joacim',
                'incorrect_answers' => json_encode(['David', 'Acaz', 'Eliazer']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuál fue el primer milagro que Jesús realizó según el Nuevo Testamento?',
                'correct_answer' => 'Convertir agua en vino',
                'incorrect_answers' => json_encode(['Caminar sobre el agua', 'Multiplicar panes y peces', 'Sanar a un ciego']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuántos libros conforman el Antiguo Testamento de la Biblia?',
                'correct_answer' => '39',
                'incorrect_answers' => json_encode(['27', '46', '66']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Quién fue el padre de Moisés?',
                'correct_answer' => 'Amram',
                'incorrect_answers' => json_encode(['Josué', 'Aarón', 'Isaías']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuál de los apóstoles de Jesús negó conocerlo tres veces antes de su crucifixión?',
                'correct_answer' => 'Pedro',
                'incorrect_answers' => json_encode(['Juan', 'Andrés', 'Mateo']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuál es el último libro del Nuevo Testamento?',
                'correct_answer' => 'Apocalipsis',
                'incorrect_answers' => json_encode(['Hechos', 'Romanos', 'Corintios']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Quién escribió la mayor parte de los Salmos en la Biblia?',
                'correct_answer' => 'David',
                'incorrect_answers' => json_encode(['Moisés', 'Salomón', 'Isaías']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿En qué montaña recibió Moisés las tablas de la ley de Dios?',
                'correct_answer' => 'Monte Sinaí',
                'incorrect_answers' => json_encode(['Monte Nebo', 'Monte Horeb', 'Monte Carmelo']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Qué personaje bíblico fue arrojado al foso de los leones?',
                'correct_answer' => 'Daniel',
                'incorrect_answers' => json_encode(['Jonás', 'José', 'David']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Qué par de hermanos famosos aparecen en el Antiguo Testamento?',
                'correct_answer' => 'Cain y Abel',
                'incorrect_answers' => json_encode(['Moisés y Aarón', 'Pedro y Andrés', 'Juan y Santiago']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuál es el nombre de la esposa de Isaac en el Antiguo Testamento?',
                'correct_answer' => 'Rebeca',
                'incorrect_answers' => json_encode(['Raquel', 'Lea', 'Sara']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuántos mandamientos recibió Moisés en el monte Sinaí?',
                'correct_answer' => '10',
                'incorrect_answers' => json_encode(['7', '12', '15']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿En qué ciudad bíblica ocurrió la historia de la Torre de Babel?',
                'correct_answer' => 'Babel',
                'incorrect_answers' => json_encode(['Jerusalén', 'Nínive', 'Sodoma']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuál de los apóstoles de Jesús fue conocido como "el discípulo amado"?',
                'correct_answer' => 'Juan',
                'incorrect_answers' => json_encode(['Pedro', 'Andrés', 'Santiago']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuál es el primer libro del Antiguo Testamento?',
                'correct_answer' => 'Génesis',
                'incorrect_answers' => json_encode(['Éxodo', 'Levítico', 'Números']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Quién fue el profeta que desafió a los profetas de Baal en el Monte Carmelo?',
                'correct_answer' => 'Elías',
                'incorrect_answers' => json_encode(['Isaías', 'Jeremías', 'Ezequiel']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuál de los apóstoles de Jesús era pescador antes de convertirse en su discípulo?',
                'correct_answer' => 'Pedro',
                'incorrect_answers' => json_encode(['Juan', 'Andrés', 'Mateo']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuál de los siguientes personajes bíblicos pasó 40 días y 40 noches en el Monte Horeb?',
                'correct_answer' => 'Moisés',
                'incorrect_answers' => json_encode(['Elías', 'Abraham', 'Josué']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Qué animal envió Noé para determinar si las aguas del Diluvio habían disminuido?',
                'correct_answer' => 'Paloma',
                'incorrect_answers' => json_encode(['Cuervo', 'Gaviota', 'León']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cuál fue el nombre de la esposa de Adán en el Antiguo Testamento?',
                'correct_answer' => 'Eva',
                'incorrect_answers' => json_encode(['Lea', 'Raquel', 'Sara']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Qué instrumento musical se menciona en el libro de los Salmos en la Biblia?',
                'correct_answer' => 'Arpa',
                'incorrect_answers' => json_encode(['Trompeta', 'Flauta', 'Laúd']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Quién fue el rey que construyó el Primer Templo en Jerusalén según el Antiguo Testamento?',
                'correct_answer' => 'Salomón',
                'incorrect_answers' => json_encode(['David', 'Saúl', 'Josafat']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuál fue la plaga que Dios envió sobre Egipto antes de que los israelitas fueran liberados?',
                'correct_answer' => 'Diezmos',
                'incorrect_answers' => json_encode(['Oscuridad', 'Sapos', 'Granizo']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'medium',
                'question' => '¿Cuántas piezas de plata recibió Judas Iscariote por traicionar a Jesús?',
                'correct_answer' => '30',
                'incorrect_answers' => json_encode(['20', '40', '50']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cuál de los siguientes personajes bíblicos se destacó por su habilidad para interpretar sueños?',
                'correct_answer' => 'José',
                'incorrect_answers' => json_encode(['Daniel', 'Isaías', 'Moisés']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Qué figura bíblica lideró a los israelitas en la travesía del desierto hacia la Tierra Prometida?',
                'correct_answer' => 'Moisés',
                'incorrect_answers' => json_encode(['Josué', 'Aarón', 'Caleb']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cuál fue el alimento que Dios proporcionó a los israelitas durante su estadía en el desierto?',
                'correct_answer' => 'Maná',
                'incorrect_answers' => json_encode(['Miel', 'Pan', 'Peces']),
            ],
            [
                'category' => 'Biblical',
                'type' => 'multiple',
                'difficulty' => 'hard',
                'question' => '¿Cuántas plagas envió Dios sobre Egipto antes de que los israelitas fueran liberados?',
                'correct_answer' => '10',
                'incorrect_answers' => json_encode(['5', '7', '12']),
            ],
            // estrellitas
            [
                'category' => 'estrellas',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Qué cosas usó Dios para mostrarle a Jonás que no tenía que enojarse por la piedad que tuvo con Nínive?',
                'correct_answer' => 'Una calabacera y un gusano',
                'incorrect_answers' => json_encode(['Un terremoto y un rayo', 'Una tormenta y un eclipse', 'Una calabacera y un 100 pies']),
            ],
            [
                'category' => 'estrellas',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => 'Dios le pidió a Jonás que vaya a una ciudad a dar su mensaje. ¿Cuál es el nombre de esa ciudad?',
                'correct_answer' => 'Nínive',
                'incorrect_answers' => json_encode(['Jerusalén', 'Babilonia', 'Belen']),
            ],
            [
                'category' => 'estrellas',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '13.	¿Qué dijo Isaías en respuesta al llamado de Dios?',
                'correct_answer' => 'Heme aquí, envíame a mí',
                'incorrect_answers' => json_encode(['¿Por qué yo?', 'Lo pensaré', 'Voy mas tarde']),
            ],
            [
                'category' => 'estrellas',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Qué hizo preparar Amán en el patio de su casa?',
                'correct_answer' => 'Una horca',
                'incorrect_answers' => json_encode(['Un altar para sacrificios', 'Un banquete real', 'Un parque con arboles']),
            ],
            [
                'category' => 'estrellas',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿De quién era la imagen en la moneda que Jesús pidió?',
                'correct_answer' => 'César',
                'incorrect_answers' => json_encode(['Moisés', 'Herodes', 'Pilatos']),
            ],
            [
                'category' => 'estrellas',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Qué es lo que no entra por la puerta al redil de las ovejas?',
                'correct_answer' => 'Un ladrón',
                'incorrect_answers' => json_encode(['Un pastor', 'Un mensajero', 'Un discípulo']),
            ],
            [
                'category' => 'estrellas',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Quién puede arrebatarnos de la mano del Padre?',
                'correct_answer' => 'Nadie',
                'incorrect_answers' => json_encode(['Los ángeles', 'Los enemigos', 'satanás']),
            ],
            [
                'category' => 'estrellas',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Cuántos discípulos tenía Jesús?',
                'correct_answer' => '12',
                'incorrect_answers' => json_encode(['7', '9', '11']),
            ],
            [
                'category' => 'estrellas',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Qué hizo el rey de Judá cuando escuchó la lectura del rollo del profeta Jeremías? ',
                'correct_answer' => 'Cortó el rollo y lo quemó',
                'incorrect_answers' => json_encode(['Cortó un libro y lo quemó', 'Cortó el rollo', 'Cortó el rollo y explico']),
            ],
            [
                'category' => 'estrellas',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Qué tragó a Jonás? ',
                'correct_answer' => 'Un gran pez',
                'incorrect_answers' => json_encode(['Una ballena', 'Un ispi gigante', 'Un pez']),
            ],
            [
                'category' => 'estrellas',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Qué le dijo Dios que hiciera Oseas con esa mujer llamada Gomer? ',
                'correct_answer' => 'Que se casara con ella.',
                'incorrect_answers' => json_encode(['Que la matara', 'Que caminaran', 'Que huyera']),
            ],
            // seguidores
            [
                'category' => 'seguidores',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿A qué imagen Dios creó al hombre?',
                'correct_answer' => 'A su imagen y semejanza.',
                'incorrect_answers' => json_encode(['A una imagen de arcilla', 'A imagen de un ángel', 'A imagen de la tierra']),
            ],
            [
                'category' => 'seguidores',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Cómo entró la maldad al mundo?',
                'correct_answer' => 'Cuando Satanás dijo la primera mentira.',
                'incorrect_answers' => json_encode(['Cuando Adán y Eva comieron del árbol prohibido', 'Cuando Caín mató a Abel', 'Cuando Noé construyó el arca']),
            ],
            [
                'category' => 'seguidores',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Qué castigos puso Dios al hombre y a la mujer luego de su desobediencia?',
                'correct_answer' => 'Tuvieron muerte espiritual y enfermedades.',
                'incorrect_answers' => json_encode(['Fueron expulsados del Edén', 'Perdieron su inmortalidad', 'Tuvieron que trabajar duro para sobrevivir']),
            ],
            [
                'category' => 'seguidores',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿De dónde provienen las razas/etnias que hay en el mundo?',
                'correct_answer' => 'Descendencia de Noé y su esposa.',
                'incorrect_answers' => json_encode(['De diferentes evoluciones', 'De diferentes dioses', 'De diferentes planetas']),
            ],
            [
                'category' => 'seguidores',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Nombre los 3 hijos mayores de Isaí que siguieron a Saúl a la guerra?',
                'correct_answer' => 'Eliab, Abinadab y Sama.',
                'incorrect_answers' => json_encode(['David, Josué y Caleb', 'Moisés, Aarón y Josué', 'Gedeón, Sansón y Jefté']),
            ],
            [
                'category' => 'seguidores',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿En nombre de quién fue David a pelear contra Goliat?',
                'correct_answer' => 'En nombre de Jehová de los ejércitos.',
                'incorrect_answers' => json_encode(['En nombre del rey Saúl', 'En nombre de su padre Isaí', 'En nombre de los filisteos']),
            ],
            [
                'category' => 'seguidores',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Qué dijo Dios a Josué acerca de la palabra de Dios?',
                'correct_answer' => 'Meditar de día y noche en la Biblia',
                'incorrect_answers' => json_encode(['Obedecerla en todo momento', 'Enseñarla a otros', 'Esconderla de los enemigos']),
            ],
            [
                'category' => 'seguidores',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Quién fue el rey más joven de la Biblia?',
                'correct_answer' => 'El rey Josías',
                'incorrect_answers' => json_encode(['El rey David', 'El rey Salomón', 'El rey Ezequías']),
            ],
            [
                'category' => 'seguidores',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿A qué hora Dios quiere oír nuestra voz?',
                'correct_answer' => 'De mañana',
                'incorrect_answers' => json_encode(['A medio día', 'En la tarde', 'Por la noche']),
            ],
            [
                'category' => 'seguidores',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Cuantos capítulos tiene el libro de Jonás?',
                'correct_answer' => '4',
                'incorrect_answers' => json_encode(['1', '2', '3']),
            ],
            [
                'category' => 'seguidores',
                'type' => 'multiple',
                'difficulty' => 'easy',
                'question' => '¿Qué debemos hacer cuando tenemos miedo?',
                'correct_answer' => 'Confiar en Dios',
                'incorrect_answers' => json_encode(['Orar', 'Ser Valientes', 'Dormir']),
            ],

        ];
        // agregar code a cada registro si no existe
        foreach ($biblicas as &$q) {
            if (!isset($q['code']) || empty($q['code'])) {
                $q['code'] = Func::generateCode(10);
            }
        }
        \App\Models\Question::insert($biblicas);
    }
}
