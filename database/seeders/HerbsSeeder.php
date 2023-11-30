<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HerbsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("herbs")->insert([
            'herbName' => 'Luminous Lilies',
            'herbPrice' => 30.00,
            'herbFact' => 'In Japanese culture, these lilies are believed to bring good luck and prosperity.',
            'scientificName' => 'Lilium auratum',
            'herbOrigin' => 'Originated in Japan',
            'herbCollection' => 'Alchemical',
            'magicalProperty' => 'Lilies are known for their ability to glow in the dark',
            'watering' => 'moderate watering.',
            'temperature' => 'between 60°F and 75°F',
            'sunlight' => 'partial sunlight',
            'soil' => 'well-drained soil',
            'appearance' => 'The flowers are large and trumpet-shaped with white petals and yellow stripes.',
            'history' => 'In Japanese culture, these lilies are believed to bring good luck and prosperity.',
            'endingDescription' => 'Lilies are known for their ability to glow in the dark.',
        ]);

        DB::table("herbs")->insert([
            'herbName' => 'Mystical Marigolds',
            'herbPrice' => 30.00,
            'herbFact' => 'In Mexican culture, these marigolds are used to celebrate the Day of the Dead.',
            'scientificName' => 'Tagetes erecta',
            'herbOrigin' => 'Native to Mexico',
            'herbCollection' => 'Alchemical',
            'magicalProperty' => 'These marigolds are said to have the power to ward off evil spirits.',
            'watering' => 'regular watering',
            'temperature' => 'between 50°F and 85°F',
            'sunlight' => 'full sunlight',
            'soil' => 'well-drained soil',
            'appearance' => 'The flowers are small and daisy-like with yellow or orange petals.',
            'history' => 'In Mexican culture, these marigolds are used to celebrate the Day of the Dead.',
            'endingDescription' => 'These marigolds are said to have the power to ward off evil spirits.',
        ]);

        DB::table("herbs")->insert([
            'herbName' => 'Enchanted Echinaceas',
            'herbPrice' => 30.00,
            'herbFact' => 'In Native American culture, these echinaceas are used to treat colds and other ailments.',
            'scientificName' => 'Echinacea purpurea',
            'herbOrigin' => 'Native to North America',
            'herbCollection' => 'Alchemical',
            'magicalProperty' => 'These echinaceas are believed to have healing powers',
            'watering' => 'moderate watering.',
            'temperature' => 'between 60°F and 80°F',
            'sunlight' => 'full sunlight',
            'soil' => 'well-drained soil',
            'appearance' => 'The flowers are large and daisy-like with pink or purple petals.',
            'history' => 'In Native American culture, these echinaceas are used to treat colds and other ailments.',
            'endingDescription' => 'These echinaceas are believed to have healing powers.',
        ]);

        DB::table('herbs')->insert([
            'herbName' => 'Whimsical Wisterias',
            'herbPrice' => 30.00,
            'herbFact' => 'In Chinese culture, these wisterias are associated with good luck and prosperity.',
            'scientificName' => 'Wisteria sinensis',
            'herbOrigin' => 'Originated in China',
            'herbCollection' => 'Alchemical',
            'magicalProperty' => 'These wisterias are known for their ability to attract fairies.',
            'watering' => 'moderate watering',
            'temperature' => 'between 50°F and 75°F.',
            'sunlight' => 'full sunlight',
            'soil' => 'well-drained soil',
            'appearance' => 'The flowers are long and drooping with purple or white petals.',
            'history' => 'In Chinese culture, these wisterias are associated with good luck and prosperity.',
            'endingDescription' => 'These wisterias are known for their ability to attract fairies.'
        ]);

        DB::table('herbs')->insert([
            'herbName' => 'Magical Magnolias',
            'herbPrice' => 30.00,
            'herbFact' => 'In ancient Chinese culture, these magnolias were used to treat anxiety and depression.',
            'scientificName' => 'Magnolia grandiflora',
            'herbOrigin' => 'Native to the southeastern United States',
            'herbCollection' => 'Alchemical',
            'magicalProperty' => 'These magnolias are believed to have the power to enhance psychic abilities.',
            'watering' => 'moderate watering',
            'temperature' => 'between 40°F and 85°F',
            'sunlight' => 'partial sunlight',
            'soil' => 'well-drained soil',
            'appearance' => 'The flowers are large and fragrant with white petals and a lemony scent.',
            'history' => 'In ancient Chinese culture, these magnolias were used to treat anxiety and depression.',
            'endingDescription' => 'These magnolias are believed to have the power to enhance psychic abilities.'
        ]);

        DB::table('herbs')->insert([
            'herbName' => 'Radiant Roses',
            'herbPrice' => 30.00,
            'herbFact' => 'In Greek mythology, roses were associated with Aphrodite, the goddess of love.',
            'scientificName' => 'Rosa spp',
            'herbOrigin' => 'Originated in China',
            'herbCollection' => 'Alchemical',
            'magicalProperty' => 'These roses are known for their ability to heal a broken heart.',
            'watering' => 'moderate watering',
            'temperature' => 'between 60°F and 75°F',
            'sunlight' => 'full sunlight ',
            'soil' => 'well-drained soil',
            'appearance' => 'The flowers are large and fragrant with petals in shades of pink, red, and white.',
            'history' => 'In Greek mythology, roses were associated with Aphrodite, the goddess of love.',
            'endingDescription' => 'These roses are known for their ability to heal a broken heart.'
        ]);

        DB::table('herbs')->insert([
            'herbName' => 'Mystic Moonflowers',
            'herbPrice' => 30.00,
            'herbFact' => 'In some cultures, these moonflowers are used to treat insomnia.',
            'scientificName' => 'Ipomoea alba',
            'herbOrigin' => 'Tropical regions of the Americas',
            'herbCollection' => 'Alchemical',
            'magicalProperty' => 'These moonflowers are said to have the power to induce prophetic dreams.',
            'watering' => 'regular watering',
            'temperature' => 'between 60°F and 85°F.',
            'sunlight' => 'full sunlight ',
            'soil' => ' well-drained soil',
            'appearance' => 'The flowers are large and trumpet-shaped with white petals that bloom at night.',
            'history' => 'In some cultures, these moonflowers are used to treat insomnia.',
            'endingDescription' => 'these moonflowers are said to have the power to induce prophetic dreams.'
        ]);

        DB::table('herbs')->insert([
            'herbName' => 'Enchanted Eryngiums',
            'herbPrice' => 30.00,
            'herbFact' => 'In medieval times, these eryngiums were used to ward off evil spirits.',
            'scientificName' => 'Eryngium planum',
            'herbOrigin' => 'Native to Europe and Asia',
            'herbCollection' => 'Alchemical',
            'magicalProperty' => 'These eryngiums are believed to have protective powers.',
            'watering' => 'moderate watering',
            'temperature' => 'between 50°F and 80°F',
            'sunlight' => 'full sunlight',
            'soil' => 'well-drained soil',
            'appearance' => 'The flowers are small and spiky with blue or purple petals.',
            'history' => 'In medieval times, these eryngiums were used to ward off evil spirits.',
            'endingDescription' => 'These eryngiums are believed to have protective powers.'
        ]);

        DB::table('herbs')->insert([
            'herbName' => 'Whimsical Wildflowers',
            'herbPrice' => 30.00,
            'herbFact' => 'In Mexican culture, these wildflower are used to celebrate Christmas.',
            'scientificName' => 'Aster spp',
            'herbOrigin' => 'Native to Mexico',
            'herbCollection' => 'Alchemical',
            'magicalProperty' => 'These wildflowers are believed to have the power to bring good luck and prosperity.',
            'watering' => 'moderate watering',
            'temperature' => 'between 50°F and 75°F',
            'sunlight' => 'full sunlight',
            'soil' => 'well-drained soil',
            'appearance' => 'The flowers are small and daisy-like with petals in shades of pink, purple, and white.',
            'history' => 'In Mexican culture, these wildflower are used to celebrate Christmas.',
            'endingDescription' => 'These wildflowers are believed to have the power to bring good luck and prosperity.'
        ]);

        DB::table('herbs')->insert([
            'herbName' => 'Magical Morning Glories',
            'herbPrice' => 30.00,
            'herbFact' => 'In Aztec culture, these morning glories were used to induce hallucinations.',
            'scientificName' => 'Ipomoea purpurea',
            'herbOrigin' => 'Native to tropical regions of the Americas',
            'herbCollection' => 'Alchemical',
            'magicalProperty' => 'These morning glories are believed to have the power to enhance creativity.',
            'watering' => 'regular watering',
            'temperature' => 'between 60°F and 85°F',
            'sunlight' => 'full sunlight',
            'soil' => 'well-drained soil',
            'appearance' => 'The flowers are large and trumpet-shaped with petals in shades of blue, pink, and white.',
            'history' => 'In Aztec culture, these morning glories were used to induce hallucinations.',
            'endingDescription' => 'These morning glories are believed to have the power to enhance creativity.'
        ]);
        
        // DB::table('herbs')->insert([
        //     'herbName' => '',
        //     'herbPrice' => '',
        //     'herbFact' => '',
        //     'scientificName' => '',
        //     'herbOrigin' => '',
        //     'herbCollection' => '',
        //     'magicalProperty' => '',
        //     'watering' => '',
        //     'temperature' => '',
        //     'sunlight' => '',
        //     'soil' => '',
        //     'appearance' => '',
        //     'history' => '',
        //     'endingDescription' => ''
        // ]);
        // DB::table('herbs')->insert([
        //     'herbName' => '',
        //     'herbPrice' => '',
        //     'herbFact' => '',
        //     'scientificName' => '',
        //     'herbOrigin' => '',
        //     'herbCollection' => '',
        //     'magicalProperty' => '',
        //     'watering' => '',
        //     'temperature' => '',
        //     'sunlight' => '',
        //     'soil' => '',
        //     'appearance' => '',
        //     'history' => '',
        //     'endingDescription' => ''
        // ]);
        // DB::table('herbs')->insert([
        //     'herbName' => '',
        //     'herbPrice' => '',
        //     'herbFact' => '',
        //     'scientificName' => '',
        //     'herbOrigin' => '',
        //     'herbCollection' => '',
        //     'magicalProperty' => '',
        //     'watering' => '',
        //     'temperature' => '',
        //     'sunlight' => '',
        //     'soil' => '',
        //     'appearance' => '',
        //     'history' => '',
        //     'endingDescription' => ''
        // ]);
    }
}
