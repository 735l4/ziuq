<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            'category' => 'history',
            'difficulty' =>  'medium',
            'question' => "Through military might, Prithvi Narayan Shah laid the foundation for the Kingdom of Nepal by unifying the lands surrounding the Kathmandu Valley in what century?",
            'option' => json_encode(["Twelfth","Eighteenth", "Fourteenth", "Sixteenth"]),
            'correct_answer' => "Eighteenth",
            'description' => 'Prior to his campaign, the territory comprising modern day Nepal was divided into several feuding kingdoms. After conquering the Kathmandu Valley in 1768, he led further campaigns to unify the surrounding territory into one kingdom. He was successful, and by the time he died in 1775, Nepal was about a third larger than it is today.'
        ]);
        DB::table('quizzes')->insert([
            'category' => 'history',
            'difficulty' => 'medium',
            'question' => "Attempts by Prithvi Narayan Shah's successors to further expand Nepal came to an end when a nearby country sent part of its army into Tibet to expel the Nepali forces in the area. Which country was it?",
            'option' => json_encode(["India", "Bangladesh", "Bhutan", "China"]),
            'correct_answer' => "China",
            'description' => 'In 1792, Chinese Emperor Qianlong dispatched a large number of troops to deal with Nepal before it became too much of a threat. The Chinese forces won easily, forcing Nepal to retreat from the area. Nepal was also forced to pay a large tribute to the Chinese government as a result of the defeat.'
        ]);
        DB::table('quizzes')->insert([
            'category' => 'history',
            'difficulty' =>  'medium',
            'question' => "Nepal was forced to relinquish about a third of its land in 1816 after losing a war with what colonial power in the region?",
            'option' => json_encode(["France","Britain","Russia","Portugal"]),
            'correct_answer' => "Britain",
            'description' => "The Anglo-Nepalese War lasted from 1814 to 1816, ending in a crushing defeat for Nepal. The war itself was a result of disagreements over the border between the Nepali kingdom and the British presence in the region. The loss of land resulted in Nepal's borders being redrawn to approximately what they are today. The one upside: the British forces were impressed enough with the Gurkhas (Nepali soldiers) that they would recruit them to join their army as a special force."
        ]);
        DB::table('quizzes')->insert([
            'category' => 'history',
            'difficulty' =>  'medium',
            'question' => "Upon taking control of the government in 1846, Jang Bahadur founded a dynasty which would control Nepal until the early 1950s. What is the name of this dynasty?",
            'option' => json_encode(["Jang","Rana","Gorkha","Magar"]),
            'correct_answer' => "Rana",
            'description' => "The Rana regime attempted to control all aspects of Nepali life during its rule. The Ranas maintained an isolationist policy towards the rest of the world, thus stunting economic and political development in Nepal. However, they were very friendly towards Britain, importing luxury goods for themselves and other members of the aristocracy, as well as providing assistance to British forces in India."
        ]);
        DB::table('quizzes')->insert([
            'category' => 'history',
            'difficulty' =>  'medium',
            'question' => "As ruler, one of Jang Bahadur's most important accomplishments was the creation of the 1400 page Muluki Ain. What was the main purpose of this document?",
            'option' => json_encode(["Provide a unified set of laws for the kingdom","Increase trade relations with both India and China","Establish Buddhism as the kingdom's official religion","Introduce a parliamentary system of government"]),
            'correct_answer' => "Provide a unified set of laws for the kingdom",
            'description' => "The Muluki Ain was a very thorough attempt at establishing a set of laws to cover all legal matters within the kingdom. It was heavily influenced by the Hindu caste system, often giving privileges to members of higher castes such as lesser punishments for crime. Other topics included ranged from revenue collection to which castes are allowed to intermarry with each other."
        ]);
        DB::table('quizzes')->insert([
            'category' => 'history',
            'difficulty' =>  'medium',
            'question' => "During the 19th century, many Nepalis migrated to India in search of jobs in the British tea industry. In what area, famous for its tea, did the vast majority of these Nepalis end up?",
            'option' => json_encode(["Bihar","Sikkim","Darjeeling","Orissa"]),
            'correct_answer' => "Darjeeling",
            'description' => "Ethnic Nepalis soon became the majority population in Darjeeling, but often felt that they were treated as second-class citizens by the Indian government. Their discontent has led to political struggles and violence in the region, much of it stemming from the activities of the Gorkha National Liberation Front, formed to give ethnic Nepalis in the region a stronger political voice."
        ]);
        DB::table('quizzes')->insert([
            'category' => 'history',
            'difficulty' =>  'medium',
            'question' => "In 1953, which Sherpa rose to fame for being part of the duo that is believed to be the first to reach the summit of Mount Everest?",
            'option' => json_encode(["Tenzing Norgay","Lhakpa Gelu","Pemba Dorjie","Girija Prasad Koirala"]),
            'correct_answer' => "Tenzing Norgay",
            'description' => "He later founded a company that provided trekking adventures in the Himalayas."
        ]);
        DB::table('quizzes')->insert([
            'category' => 'history',
            'difficulty' =>  'medium',
            'question' => "The Nepalese Civil War was fought between the Nepali government and the armed forces of what group?",
            'option' => json_encode(["Gorkha National Liberation Front (GNLF)",
            "Rana Revivalists",
            "Communist Party of Nepal (Maoists)",
            "Students for Nepali Democratic Reforms"]),
            'correct_answer' => "Communist Party of Nepal (Maoists)",
            'description' => "Led by Prachanda, the Maoists turned to violence as they felt the government was not addressing their needs. The Gorkha National Liberation Front is based in West Bengal, and did not participate in the war. The other two groups were made up."
        ]);
        DB::table('quizzes')->insert([
            'category' => 'history',
            'difficulty' =>  'medium',
            'question' => "During what years did the Nepalese Civil War take place?",
            'option' => json_encode([
                "1976-1986",
                "1936-1946",
                "1996-2006",
                "1956-1966",
            ]),
            'correct_answer' => "1996-2006",
            'description' => "The war resulted in over 12,000 casualties and widespread human rights abuses from the actions of both government and rebel forces. United Nations estimates state that over 100,000 people were displaced. Nepal's already struggling economy also took a hit, as the tourism industry was damaged due to the ongoing war."
        ]);
        DB::table('quizzes')->insert([
            'category' => 'history',
            'difficulty' =>  'medium',
            'question' => "Which of the following members of the Nepali royal family died during the infamous palace massacre of 2001?",
            'option' => json_encode([
                "King Birenda",
                "All of them",
                "Queen Aiswarya",
                "Prince Dipendra",
            ]),
            'correct_answer' => "All of them",
            'description' => "The official report states that a drunk Prince Dipendra shot and killed ten people, including his mother and father, before killing himself. While the motive is open to debate, it is widely believed that his parent's strong opposition to the woman he wanted to marry was the main reason for his rampage. Prince Gyanendra ascended to the throne shortly afterwards."
        ]);
        DB::table('quizzes')->insert([
            'category' => 'politics',
            'difficulty' =>  'medium',
            'question' => "What is the name of the recently appointed minister of Culture, Tourism and Civil Aviation of Nepal?",
            'option' => json_encode([
                "Rabindra Adhikari",
                "Madhav Dhungel",
                "Yogesh Bhattarai",
                "Tham Maya Tamang",
            ]),
            'correct_answer' => "Yogesh Bhattarai",
        ]);
        DB::table('quizzes')->insert([
            'category' => 'politics',
            'difficulty' =>  'medium',
            'question' => "Leader of CPN and former PM Prachanda said that he would be hailed a hero if were taken to a certain court. What court was it?",
            'option' => json_encode([
                "International Criminal Court in The Hauge",
                "International Court of Justice",
                "Supreme Court of Nepal",
                "United Nations",
            ]),
            'correct_answer' => "International Criminal Court in The Hauge",
        ]);
        DB::table('quizzes')->insert([
            'category' => 'politics',
            'difficulty' =>  'medium',
            'question' => "The Election Commission announced that it was going to hold by-elections. What level of government are these elections for?",
            'option' => json_encode([
                "Federal",
                "Provincial",
                "Local level",
                "All three",
            ]),
            'correct_answer' => "All three",
        ]);
        DB::table('quizzes')->insert([
            'category' => 'politics',
            'difficulty' =>  'medium',
            'question' => "Law-makers are calling for the reduction of legal marriageable age. What is the current minimum marriageable age in Nepal?",
            'option' => json_encode([
                "18",
                "16",
                "20",
                "21",
            ]),
            'correct_answer' => "20",
        ]);
        DB::table('quizzes')->insert([
            'category' => 'politics',
            'difficulty' =>  'medium',
            'question' => "When is the International Day of the World’s Indigenous Peoples celebrated?",
            'option' => json_encode([
                "August 1",
                "August 5",
                "August 9",
                "August 10",
            ]),
            'correct_answer' => "August 10",
        ]);
        DB::table('quizzes')->insert([
            'category' => 'politics',
            'difficulty' =>  'medium',
            'question' => "Which of the following programs received flak for exploiting taxes?",
            'option' => json_encode([
                "Prime Minister's Employment Program",
                "Mid-day meals program for schools",
                "Elderly social security allowance",
                "Subsidies for petrol and other fuels",
            ]),
            'correct_answer' => "Prime Minister's Employment Program",
        ]);
        DB::table('quizzes')->insert([
            'category' => 'politics',
            'difficulty' =>  'medium',
            'question' => "According to the Ministry of Finance, what is the total debt that Nepal government owes?",
            'option' => json_encode([
                "586 billion Nepali rupees",
                "1.04 trillion Nepali rupees",
                "2.7 trillion Nepali rupees",
                "627 billion Nepali rupees"
            ]),
            'correct_answer' => "1.04 trillion Nepali rupees",
        ]);
        
        DB::table('quizzes')->insert([
            'category' => 'politics',
            'difficulty' =>  'medium',
            'question' => "How many federal level ministries are there in Nepal?",
            'option' => json_encode([
                    "16",
                    "17",
                    "20",
                    "22",
                ]),
            'correct_answer' => "22",
        ]);
        
    }
}


