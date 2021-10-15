<?php

namespace Database\Seeders;

use App\Models\Preguntas;
use Illuminate\Database\Seeder;

class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Preguntas::create([
            'texto' =>'¿En su unidad administrativa existe un ambiente de trabajo cordial?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'1',
        ]);

        Preguntas::create([
            'texto' =>'¿Su jefa(e) inmediato fomenta la igualdad y no discriminación entre mujeres y hombres?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'1',
        ]);

        Preguntas::create([
            'texto' =>'¿El trato entre mujeres y hombres es respetuoso, sin importar el nivel jerárquico o sexo?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'1',
        ]);

        Preguntas::create([
            'texto' =>'¿Ha sido discriminada(o) por su apariencia física, sexo, edad, discapacidad, condición de salud, estado civil, embarazo o preferencia sexual?',
            'tipo_ponderacion' =>'0',
            'id_factor' =>'1',
        ]);

        Preguntas::create([
            'texto' =>'¿Existen actos, hechos o expresiones que refuercen actitudes de desigualdad entre mujeres y hombres?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'1',
        ]);

        Preguntas::create([
            'texto' =>'¿Se respeta y promueve la opinión por igual de mujeres y hombres sin distinción en su ámbito de trabajo?',
            'tipo_ponderacion' =>'0',
            'id_factor' =>'1',
        ]);


        Preguntas::create([
            'texto' =>'¿La asignación de responsabilidades y cargas de trabajo son las mismas para mujeres y hombres en el mismo nivel jerárquico?',
            'tipo_ponderacion' =>'0',
            'id_factor' =>'1',
        ]);

        Preguntas::create([
            'texto' =>'¿Ha sentido intimidación o maltrato por causa de su sexo?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'1',
        ]);

        Preguntas::create([
            'texto' =>'¿Se respeta por igual la autoridad de mujeres y hombres?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'1',
        ]);

        Preguntas::create([
            'texto' =>'¿Conoce sus derechos laborales?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'2',
        ]);

        Preguntas::create([
            'texto' =>'¿Conoce sus prestaciones laborales?',
            'tipo_ponderacion' =>'0',
            'id_factor' =>'2',
        ]);

        Preguntas::create([
            'texto' =>'¿Considera que las prestaciones otorgadas benefician por igual a mujeres y hombres?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'2',
        ]);

        Preguntas::create([
            'texto' =>'¿Considera que son equilibradas las condiciones generales de trabajo entre mujeres y hombres?',
            'tipo_ponderacion' =>'0',
            'id_factor' =>'2',
        ]);
        Preguntas::create([
            'texto' =>'¿Considera que influye la apariencia física, edad u otra característica personal entre mujeres y hombres para tener mejores condiciones de trabajo?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'2',
        ]);
        Preguntas::create([
            'texto' =>'¿Existen funciones laborales asignadas a cada sexo de acuerdo a roles socialmente establecidos por prejuicios?',
            'tipo_ponderacion' =>'0',
            'id_factor' =>'2',
        ]);
        Preguntas::create([
            'texto' =>'¿Mujeres y hombres tienen la misma oportunidad para obtener un incremento salarial?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'3',
        ]);
        Preguntas::create([
            'texto' =>'¿Importa el que sea mujer u hombre para ascender o ser promocionada(o)?',
            'tipo_ponderacion' =>'0',
            'id_factor' =>'3',
        ]);

        Preguntas::create([
            'texto' =>'¿Considera que la rotación de personal se da más en mujeres?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'3',
        ]);

        Preguntas::create([
            'texto' =>'¿Ha influido en su crecimiento profesional su estado civil o ser madre?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'3',
        ]);

        Preguntas::create([
            'texto' =>'¿Se fomenta la participación por igual de mujeres y hombres para que accedan a puestos directivos, en razón de sus capacidades, actitudes y aptitudes?',
            'tipo_ponderacion' =>'0',
            'id_factor' =>'3',
        ]);

        Preguntas::create([
            'texto' =>'¿Se ha enfrentado a obstáculos para ascender o ser promocionada(o) por su estado civil, embarazo, tener hijas(os), edad, discapacidad, condición de salud o preferencia sexual?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'3',
        ]);
        Preguntas::create([
            'texto' =>'¿Ha recibido capacitación básica en materia de género?',
            'tipo_ponderacion' =>'0',
            'id_factor' =>'4',
        ]);
        Preguntas::create([
            'texto' =>'¿La capacitación y formación se ofertan por igual a mujeres y hombres?',
            'tipo_ponderacion' =>'0',
            'id_factor' =>'4',
        ]);
        Preguntas::create([
        'texto' =>'¿Le interesa capacitarse en temas con enfoque de género y derechos humanos?',
        'tipo_ponderacion' =>'1',
        'id_factor' =>'4',
        ]);
        Preguntas::create([
            'texto' =>'¿Considera que los temas de género son sólo para mujeres?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'4',
        ]);
        Preguntas::create([
        'texto' =>'¿Ha participado en cursos o talleres de sensibilización o desarrollo que promuevan igualdad de trato y oportunidades entre mujeres y hombres?',
        'tipo_ponderacion' =>'0',
        'id_factor' =>'4',
        ]);
        Preguntas::create([
        'texto' =>'¿Cuándo recibe alguna capacitación en el tema de género, le permite reflexionar sobre su actuar?',
        'tipo_ponderacion' =>'0',
        'id_factor' =>'4',
        ]);
        Preguntas::create([
        'texto' =>'¿Tiene bajo su cuidado, niñas(os), personas adultas mayores o personas con discapacidad en su vida familiar?',
        'tipo_ponderacion' =>'1',
        'id_factor' =>'5',
        ]);
        Preguntas::create([
            'texto' =>'¿En su unidad administrativa existe flexibilidad para solicitar permiso para atender asuntos personales o familiares?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'5',
        ]);
        Preguntas::create([
            'texto' =>'¿Ha dejado de presentarse a trabajar porque le fue negado un permiso para atender asuntos de su vida personal o familiar?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'5',
        ]);
        Preguntas::create([
            'texto' =>'¿El horario laboral le permite que tenga equilibrio entre su vida personal, familiar y laboral?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'5',
        ]);
        Preguntas::create([
            'texto' =>'¿Para cuidar de hijas(os) enfermas(os), personas adultas mayores que así lo requieran, le han dado oportunidad de realizar parte de la jornada laboral en el hogar u otro lugar diferente?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'5',
        ]);
        Preguntas::create([
            'texto' =>'¿Se agendan reuniones de trabajo fuera del horario laboral o en días no laborales?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'5',
        ]);
        Preguntas::create([
            'texto' =>'¿Se le ha respetado la incapacidad por maternidad o la licencia de paternidad?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'5',
        ]);
        Preguntas::create([
            'texto' =>'¿Ha participado con su familia en actividades recreativas organizadas por el Poder Legislativo?',
            'tipo_ponderacion' =>'1',
            'id_factor' =>'5',
        ]);
    }
}
