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
        
        DB::table("herbs")->insert([
            'herbsImage' => 'img/herbs/luminous lilies.png',
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
            'herbsImage' => 'img/herbs/mystical marigolds.png',
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
            'herbsImage' => 'img/herbs/enchanted echinaceas.png',
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
            'herbsImage' => 'img/herbs/Whimsical Wisterias.png',
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
            'herbsImage' => 'img/herbs/Magical Magnolias.png',
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
            'herbsImage' => 'img/herbs/Radiant Roses.png',
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
            'herbsImage' => 'img/herbs/Mystic Moonflowers.png',
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
            'herbsImage' => 'img/herbs/Enchanted Eryngiums.png',
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
            'herbsImage' => 'img/herbs/Whimsical Wildflowers.png',
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
            'herbsImage' => 'img/herbs/Magical Morning Glories.png',
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
        
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/dandelion wisp.png',
            'herbName' => 'Dandelion Wisp',
            'herbPrice' => '30.00',
            'herbFact' => 'Dandelion Wisps are attracted to bright lights, so they can often be seen flying around street lamps and campfires at night.',
            'scientificName' => 'Taraxacum officinale var. wisp',
            'herbOrigin' => 'Dandelion Wisps are said to have originated in the gardens of fairies, but they can now be found all over the world.',
            'herbCollection' => 'Alchemical',
            'magicalProperty' => 'Dandelion Wisps are known for their ability to grant wishes. If you can catch one and make a wish before it flies away, your wish is said to come true.',
            'watering' => 'do not need to be watered',
            'temperature' => 'prefer mild temperatures, but they can tolerate extremes.',
            'sunlight' => 'need sunlight',
            'soil' => 'sandy soil that is well-drained',
            'appearance' => 'Dandelion Wisps are small, delicate creatures with dandelion-like heads and wispy bodies. They are usually white or yellow in color, but they can also be found in other colors, such as pink and purple.',
            'history' => 'Dandelion Wisps have been mentioned in folklore and mythology for centuries. They are often associated with good luck and new beginnings.',
            'endingDescription' => 'According to legend, Dandelion Wisps are said to disappear when their wish-granting powers are exhausted. However, some people believe that they simply fly away to other gardens to continue granting wishes.'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' =>'img/herbs/azure dreamflower.png',
            'herbName' => 'Azure Dreamflower',
            'herbPrice' => '30.00',
            'herbFact' => 'Azure Dreamflowers are said to be able to communicate with dreams. If you place one under your pillow before you go to sleep, you will have vivid and prophetic dreams.',
            'scientificName' => 'Delphinium azureum var. dreamflower',
            'herbOrigin' => 'Azure Dreamflowers are native to the enchanted forests of the Far East.',
            'herbCollection' => 'Alchemical',
            'magicalProperty' => 'Azure Dreamflowers have the ability to heal the mind and spirit. If you are feeling sad, lonely, or anxious, placing an Azure Dreamflower in your home will help to lift your spirits and bring you peace.',
            'watering' => 'overwater them',
            'temperature' => 'mild temperatures',
            'sunlight' => 'indirect sunlight',
            'soil' => 'well-drained soil',
            'appearance' => 'Azure Dreamflowers have tall, slender stems with delicate blue flowers. The flowers are typically 1-2 inches in diameter and have five petals. The center of the flower is often white or yellow.',
            'history' => 'Azure Dreamflowers have been used in traditional Chinese medicine for centuries. They are said to be able to heal a variety of ailments, including anxiety, depression, and insomnia.',
            'endingDescription' => 'Azure Dreamflowers are said to bloom only once a year, during the summer solstice. Once they have bloomed, their petals will fall off and the plant will die. However, the seeds from the flower will disperse and grow into new plants the following year.'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/blue moon iris.png',
            'herbName' => 'Blue Moon Iris',
            'herbPrice' => '100.00',
            'herbFact' => 'this flower attracts night creature to make them paralize',
            'scientificName' => 'Iris versicolor',
            'herbOrigin' => 'The Blue Moon Iris is native to North America, where it grows in wet meadows and woodlands',
            'herbCollection' => 'Exotic',
            'magicalProperty' => 'has the power to emite smell that attract insect at night',
            'watering' => 'regular watering',
            'temperature' => 'warm temperatures',
            'sunlight' => 'full sun to partial shade',
            'soil' => 'well-drained soil',
            'appearance' => 'The Blue Moon Iris has delicate blue petals and a yellow center. The flowers are about 3 inches wide and bloom in the late spring or early summer',
            'history' => 'The Blue Moon Iris has been used by Native Americans for centuries for its medicinal and magical properties. It is also a popular ornamental plant',
            'endingDescription' => 'The Blue Moon Iris is a beautiful and magical flower that is sure to bring good luck to anyone who has it in their home. If you are lucky enough to find one of these rare flowers, make sure to pluck it and make a wish while looking at the moon'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/firefly lily.png',
            'herbName' => 'Firefly Lily',
            'herbPrice' => '100.00',
            'herbFact' => 'The Firefly Lily is said to glow at night, just like a firefly',
            'scientificName' => 'Lilium tigrinum',
            'herbOrigin' => 'The Firefly Lily is native to Asia, where it grows in forests and meadows',
            'herbCollection' => 'Exotic',
            'magicalProperty' => 'The Firefly Lily is said to have the power to guide people in the dark. If you are lost, hold a Firefly Lily in your hand and it will lead you to safety',
            'watering' => 'regular watering',
            'temperature' => 'warm temperatures',
            'sunlight' => 'full sun to partial shade',
            'soil' => 'well-drained soil',
            'appearance' => 'The Firefly Lily has orange and black spotted petals. The flowers are about 3 inches wide and bloom in the summer',
            'history' => 'The Firefly Lily has been used by people in Asia for centuries for its medicinal and magical properties. It is also a popular ornamental plant',
            'endingDescription' => 'The Firefly Lily is a beautiful and magical flower that is sure to bring light and joy to your home. If you are lucky enough to have one of these rare flowers, make sure to place it in a spot where it will get plenty of sunlight and water it regularly. And don\'t forget to keep an eye on it at night, just in case you see a magical glow'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/dream weaver.png',
            'herbName' => 'Dream Weaver',
            'herbPrice' => '100.00',
            'herbFact' => 'it has the power to emit the smell that make you sleep nicely and dream more accurately',
            'scientificName' => 'Plumeria rubra',
            'herbOrigin' => 'The Dream Weaver is native to Central and South America, where it grows in tropical forests',
            'herbCollection' => 'Exotic',
            'magicalProperty' => 'If you place a Dream Weaver flower under your pillow before bed, it is said to help you have lucid dreams. Lucid dreams are dreams where you are aware that you are dreaming, and you can control what happens in the dream',
            'watering' => 'regular watering',
            'temperature' => 'warm temperatures',
            'sunlight' => 'prefers full sun to partial shade',
            'soil' => 'well-drained soil',
            'appearance' => 'The Dream Weaver has white, pink, or yellow petals with a yellow center. The flowers are about 4 inches wide and bloom in the spring and summer',
            'history' => 'The Dream Weaver has been used by people in Central and South America for centuries for its medicinal and magical properties. It is also a popular ornamental plant',
            'endingDescription' => 'The Dream Weaver is a beautiful and magical flower that is sure to help you have the best dreams of your life. If you are lucky enough to have one of these rare flowers, make sure to place it under your pillow before bed and close your eyes. Who knows what amazing adventures you will have in your dreams'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/phoenix flower.png',
            'herbName' => 'Phoenix Flower',
            'herbPrice' => '100.00',
            'herbFact' => 'The Phoenix Flower is said to be able to heal any wound, no matter how severe',
            'scientificName' => 'Delonix regia',
            'herbOrigin' => 'The Phoenix Flower is native to Madagascar, but it is now grown in many tropical and subtropical regions around the world.',
            'herbCollection' => 'Exotic',
            'magicalProperty' => 'If you place a Phoenix Flower petal on a wound, it will heal immediately. The Phoenix Flower is also said to be able to cure diseases and extend life',
            'watering' => 'regular watering',
            'temperature' => 'warm temperatures',
            'sunlight' => 'full sun to partial shade',
            'soil' => 'well-drained soil',
            'appearance' => 'The Phoenix Flower has orange, red, or yellow petals with a yellow center. The flowers are about 4 inches wide and bloom in the spring and summer',
            'history' => 'The Phoenix Flower has been used by people in Madagascar and other tropical regions for centuries for its medicinal and magical properties. It is also a popular ornamental plant',
            'endingDescription' => 'The Phoenix Flower is a beautiful and magical flower that is sure to bring healing and good luck to anyone who has it. If you are lucky enough to have one of these rare flowers, make sure to place it near you when you are sick or injured. And don\'t forget to share it with others who need its healing power'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/moonshadow orchid.png',
            'herbName' => 'Moonshadow Orchid',
            'herbPrice' => '100.00',
            'herbFact' => 'The Moonshadow Orchid is said to bloom only on the night of a full moon',
            'scientificName' => 'Dracula vampira',
            'herbOrigin' => 'The Moonshadow Orchid is native to the cloud forests of Central and South America',
            'herbCollection' => 'Exotic',
            'magicalProperty' => 'The Moonshadow Orchid is said to have the power to protect its owner from harm. If you carry a Moonshadow Orchid with you, it will ward off evil spirits and protect you from danger',
            'watering' => 'regular watering',
            'temperature' => 'cool temperatures',
            'sunlight' => 'partial shade to full shade',
            'soil' => 'well-drained soil',
            'appearance' => 'The Moonshadow Orchid has white or pale pink petals with dark purple veins. The flowers are about 2 inches wide and bloom at night',
            'history' => 'The Moonshadow Orchid has been used by people in Central and South America for centuries for its medicinal and magical properties. It is also a popular ornamental plant',
            'endingDescription' => 'The Moonshadow Orchid is a beautiful and magical flower that is sure to bring protection and good luck to anyone who has it. If you are lucky enough to have one of these rare flowers, make sure to carry it with you when you travel or when you are in dangerous situations. And don\'t forget to plant a seed so that others can enjoy the beauty and magic of the Moonshadow Orchid'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/crimson blosoom.png',
            'herbName' => 'Crimson Blossom',
            'herbPrice' => '50.00',
            'herbFact' => 'It is said that the flower has the power to heal any wound or ailment when brewed into a tea',
            'scientificName' => 'Crimmy lossom',
            'herbOrigin' => 'The bloosom can be found around the australia forest and dessert',
            'herbCollection' => 'Swiftgrow',
            'magicalProperty' => 'this flower can heal the deadly plague that the people need',
            'watering' => 'moderate watering',
            'temperature' => 'between 60°F and 75°F',
            'sunlight' => 'indirect sunlight',
            'soil' => 'well-draining soil',
            'appearance' => 'The Crimson Blossom is a large, red flower with multiple petals',
            'history' => 'According to legend, the Crimson Blossom was first discovered by a group of monks who were searching for a cure for a deadly plague that had ravaged their village.',
            'endingDescription' => 'The monks stumbled upon the flower in a remote forest and used it to cure the sick. Since then, the Crimson Blossom has been revered as a symbol of hope and healing'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/purple sphere.png',
            'herbName' => 'Purple Sphere',
            'herbPrice' => '50.00',
            'herbFact' => 'This flower makes the owner are protected from all sort of insect',
            'scientificName' => 'Lilium lancifolium',
            'herbOrigin' => 'The Purple Sphere is native to the mountainous regions of Japan',
            'herbCollection' => 'Swiftgrow',
            'magicalProperty' => 'this flower can make people meditate freely with the smell of this flower',
            'watering' => 'frequent watering',
            'temperature' => 'between 50°F and 70°F',
            'sunlight' => 'indirect sunlight',
            'soil' => 'well-draining soil',
            'appearance' => 'The Purple Sphere is a cluster of small flowers that form a spherical shape',
            'history' => 'According to legend, the Purple Sphere was first discovered by a group of monks who were searching for a way to bring peace to their village',
            'endingDescription' => 'The monks stumbled upon the flower in a remote mountain and used it to bring peace to their village. Since then, the Purple Sphere has been revered as a symbol of peace and harmony'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/orange bud.png',
            'herbName' => 'Orange Buds',
            'herbPrice' => '50.00',
            'herbFact' => 'The flower gives a special smell around the garden that protects the owner from negative energy',
            'scientificName' => 'Calendula officinalis',
            'herbOrigin' => 'The Orange Buds is native to the Mediterranean region',
            'herbCollection' => 'Swiftgrow',
            'magicalProperty' => 'The flower is known for its magical property of protection. It is said that the flower has the power to protect against evil spirits and negative energy',
            'watering' => 'frequent watering',
            'temperature' => 'between 60°F and 75°F',
            'sunlight' => 'direct sunlight',
            'soil' => 'well-draining soil',
            'appearance' => 'The Orange Buds is a small, orange flower with multiple buds at the tips of its stems',
            'history' => 'According to legend, the Orange Buds was first discovered by a group of witches who were searching for a way to protect their coven from harm',
            'endingDescription' => 'The witches stumbled upon the flower in a remote meadow and used it to protect their coven. Since then, the Orange Buds has been revered as a symbol of protection and safety'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/whitestar.png',
            'herbName' => 'White Star',
            'herbPrice' => '50.00',
            'herbFact' => 'The flower makes people fall inlove straight away if both people smell it at the same time',
            'scientificName' => 'Gardenia jasminoides',
            'herbOrigin' => 'The White Star is native to the tropical and subtropical regions of Africa and Asia',
            'herbCollection' => 'Swiftgrow',
            'magicalProperty' => 'The flower is known for its magical property of love. It is said that the flower has the power to attract love and romance into one’s life',
            'watering' => 'frequent watering',
            'temperature' => 'between 65°F and 75°F.',
            'sunlight' => 'indirect sunlight',
            'soil' => 'well-draining soil',
            'appearance' => 'The White Star is a complex, white flower with multiple petals',
            'history' => 'According to legend, the White Star was first discovered by a group of lovers who were searching for a way to express their love for each other',
            'endingDescription' => 'The lovers stumbled upon the flower in a remote garden and used it to express their love. Since then, the White Star has been revered as a symbol of love and romance'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/purple minimalist.png',
            'herbName' => 'Purple Minimalist',
            'herbPrice' => '50.00',
            'herbFact' => 'people that drink or smell the flower can increase their iq',
            'scientificName' => 'Iris germanica',
            'herbOrigin' => 'The Purple Minimalist is native to the Mediterranean region',
            'herbCollection' => 'Swiftgrow',
            'magicalProperty' => 'The flower is known for its magical property of creativity',
            'watering' => 'moderate watering',
            'temperature' => 'between 60°F and 75°F.',
            'sunlight' => 'indirect sunlight',
            'soil' => 'well-draining soil',
            'appearance' => 'The Purple Minimalist is a minimalist, purple flower with a skeletal structure',
            'history' => 'According to legend, the Purple Minimalist was first discovered by a group of artists who were searching for a way to express their creativity',
            'endingDescription' => 'The flower has the ability to make people be more creative in all aspect'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/enchanted iris.png',
            'herbName' => 'Enchanted Iris',
            'herbPrice' => '50.00',
            'herbFact' => 'If you bring the flower around it can carry you luck makes you feel lucky everytime',
            'scientificName' => 'Iris versicolor',
            'herbOrigin' => 'The Enchanted Iris is native to North America',
            'herbCollection' => 'Swiftgrow',
            'magicalProperty' => 'This flower is use to decorate the front of the house gate',
            'watering' => 'regular watering',
            'temperature' => 'prefers cool temperatures',
            'sunlight' => 'full sun to partial shade',
            'soil' => 'well-drained soil',
            'appearance' => 'The Enchanted Iris has delicate blue petals and a yellow center. The flowers are about 3 inches wide and bloom in the late spring or early summer',
            'history' => 'The Enchanted Iris has been used by Native Americans for centuries for its medicinal and magical properties. It is also a popular ornamental plant',
            'endingDescription' => 'The Enchanted Iris is a beautiful and magical flower that is sure to bring good luck to anyone who has it.'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/dancing flame lily.png',
            'herbName' => 'Dancing Flame Lily',
            'herbPrice' => '50.00',
            'herbFact' => 'The lily can dance freely under the moonlight shinning to the lily at night',
            'scientificName' => 'Lilium tigrinum',
            'herbOrigin' => 'The Dancing Flame Lily is native to Asia',
            'herbCollection' => 'Swiftgrow',
            'magicalProperty' => 'This flower is popular cause it can move freely by its own while under sunlight',
            'watering' => 'regular watering',
            'temperature' => 'warm temperatures',
            'sunlight' => 'sun to partial shade',
            'soil' => 'well-drained soil',
            'appearance' => 'The Dancing Flame Lily has orange and black spotted petals. The flowers are about 3 inches wide and bloom in the summer',
            'history' => 'Elevate your surroundings with the Himalayan Blush, a testament to the mystical allure of the Himalayas. Embrace its enchanting aroma, but be wary of its mesmerizing beauty, for even a fleeting glance may lead you through a momentary journey of sensory bewilderment.',
            'endingDescription' => 'The Dancing Flame Lily is a beautiful and magical flower that is sure to bring light and joy to your home. If you are lucky enough to have one of these rare flowers, make sure to place it in a spot where it will get plenty of sunlight and water it regularly'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/invisible flower.png',
            'herbName' => 'Invisible flower',
            'herbPrice' => '50.00',
            'herbFact' => 'This flower can only be seen by people who hav insanely high intelect and mental',
            'scientificName' => 'Invica berry',
            'herbOrigin' => 'The flower cannot be found in all over the world',
            'herbCollection' => 'Swiftgrow',
            'magicalProperty' => 'this flower can be deadly if this flower are in the wrong hands',
            'watering' => 'no watering',
            'temperature' => 'can be in all places',
            'sunlight' => 'no need',
            'soil' => 'no need',
            'appearance' => 'it can gro up to 100m tall or over the sky limit',
            'history' => 'this plant use by people that have mentall illness',
            'endingDescription' => 'this flower can make people go insane if holding on to the flower for too long'
        ]);
        DB::table('herbs')->insert([
            'herbsImage' => 'img/herbs/dreamcatcher.png',
            'herbName' => 'Dreamcatcher Flower',
            'herbPrice' => '50.00',
            'herbFact' => 'The Dreamcatcher Flower is said to be able to weave dreams into reality',
            'scientificName' => 'Plumeria rubra',
            'herbOrigin' => 'The Dreamcatcher Flower is native to Central and South America',
            'herbCollection' => 'Swiftgrow',
            'magicalProperty' => 'If you place a Dreamcatcher Flower under your pillow before bed, it is said to help you have lucid dreams. Lucid dreams are dreams where you are aware that you are dreaming, and you can control what happens in the dream',
            'watering' => 'regular watering',
            'temperature' => 'regular watering',
            'sunlight' => 'sun to partial shade',
            'soil' => 'well-drained soil',
            'appearance' => 'The Dreamcatcher Flower has white, pink, or yellow petals with a yellow center. The flowers are about 4 inches wide and bloom in the spring and summer',
            'history' => 'The Dreamcatcher Flower has been used by people in Central and South America for centuries for its medicinal and magical properties. It is also a popular ornamental plant',
            'endingDescription' => 'The Dreamcatcher Flower is a beautiful and magical flower that is sure to help you have the best dreams of your life'
        ]);
    }
}
