<?php

use Illuminate\Database\Seeder;

class ADSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\ADS::create([
        	'title' => 'Lorem Ipsum',
            'author_id' => 1,
        	'category_id' => 1,
            'price' => 100,
            'publishet' => 'published',
            'text' => '
				<h2>What is Lorem Ipsum?</h2>
				<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
        ]);
        App\ADS::create([
            'title' => 'Будинок',
            'author_id' => 2,
            'category_id' => 2,
            'price' => 40000,
            'publishet' => 'published',
            'text' => '
                Будинок з усіма вигодами. Капітальний гараж з оглядовою ямою, під ним холодний підвал з подвійними стінами та гідроізоляцією між ними, підлоги, та стелі виконані залізобетонними перекриттями. Яблука зберігаються до кінця травня.<br>
Літня кухня потребує капремонту. На садибі яблуня Кальвіль Сніжний з урожайністю 25-50 відер, волоський горіх з урожайністю 20-30 відер, полуниці, чорна смородина. Опалення комбіноване газ/вугілля, є запас на одну зиму дров та вугілля. Каналізація у вигрібну яму на 3 кубометра. Розгляну обмін на житло у Кропивницькому.',
        ]);
        App\ADS::create([
            'title' => 'BMW 5 e60',
            'author_id' => 2,
            'category_id' => 3,
            'price' => 11500,
            'publishet' => 'published',
            'text' => 'Идеальное состояние. Официал. Первая регистрация в 2010году',
        ]);
        App\ADS::create([
            'title' => 'Мясорубка 2500вт.новая.',
            'author_id' => 2,
            'category_id' => 4,
            'price' => 500,
            'publishet' => 'published',
            'text' => 'Продам мясорубку KINGBERG. Мощность 2500вт. Есть функция реверс. Все в комплекте. Стоит без дела. Олх.доставки нет.Смогу отослать любой почтой. Вайбер 0662810671',
        ]);
    }
}
