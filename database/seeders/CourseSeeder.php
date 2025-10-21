<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Teacher;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            ['name' => 'Pre-Intermediate', 'code' => 'pre_a_1', 'description' => 'Just a basic pre-intermediate class'],
            ['name' => 'Intermediate English', 'code' => 'int_a_1', 'description' => 'English course for intermediate learners'],
            ['name' => 'Advanced English', 'code' => 'adv_a_1', 'description' => 'Advanced English language course'],
            ['name' => 'English Grammar Basics', 'code' => 'eng_g_1', 'description' => 'Fundamentals of English grammar'],
            ['name' => 'English Vocabulary Builder', 'code' => 'eng_v_1', 'description' => 'Expand your English vocabulary'],
            ['name' => 'Business English', 'code' => 'bus_eng_1', 'description' => 'English for business communication'],
            ['name' => 'Conversational English', 'code' => 'conv_eng_1', 'description' => 'Improve spoken English skills'],
            ['name' => 'Academic English', 'code' => 'acad_eng_1', 'description' => 'English for academic purposes'],
            ['name' => 'English for Kids', 'code' => 'eng_kids_1', 'description' => 'Basic English for children'],
            ['name' => 'English Pronunciation', 'code' => 'eng_pron_1', 'description' => 'Improve English pronunciation'],
            ['name' => 'Python Basics', 'code' => 'py_basics_1', 'description' => 'Introduction to Python programming'],
            ['name' => 'Advanced Python', 'code' => 'py_adv_1', 'description' => 'Advanced Python concepts'],
            ['name' => 'Web Development', 'code' => 'web_dev_1', 'description' => 'Learn HTML, CSS, and JS for web development'],
            ['name' => 'Frontend with React', 'code' => 'react_1', 'description' => 'Build frontend apps with React'],
            ['name' => 'Backend with Laravel', 'code' => 'laravel_1', 'description' => 'Learn backend development using Laravel'],
            ['name' => 'Java Programming', 'code' => 'java_1', 'description' => 'Introduction to Java programming'],
            ['name' => 'C++ Programming', 'code' => 'cpp_1', 'description' => 'Basics of C++ programming'],
            ['name' => 'Data Structures', 'code' => 'ds_1', 'description' => 'Learn essential data structures'],
            ['name' => 'Algorithms', 'code' => 'algo_1', 'description' => 'Basic algorithms and problem solving'],
            ['name' => 'Database Design', 'code' => 'db_1', 'description' => 'Learn relational database design'],
            ['name' => 'SQL Fundamentals', 'code' => 'sql_1', 'description' => 'Basic SQL queries and database management'],
            ['name' => 'Machine Learning Basics', 'code' => 'ml_1', 'description' => 'Introduction to machine learning'],
            ['name' => 'Deep Learning', 'code' => 'dl_1', 'description' => 'Deep learning concepts and neural networks'],
            ['name' => 'Artificial Intelligence', 'code' => 'ai_1', 'description' => 'Introduction to AI concepts'],
            ['name' => 'Cloud Computing', 'code' => 'cloud_1', 'description' => 'Basics of cloud services and deployment'],
            ['name' => 'Cybersecurity', 'code' => 'cyber_1', 'description' => 'Learn the fundamentals of cybersecurity'],
            ['name' => 'Ethical Hacking', 'code' => 'hack_1', 'description' => 'Introduction to ethical hacking techniques'],
            ['name' => 'Computer Networks', 'code' => 'net_1', 'description' => 'Basics of computer networking'],
            ['name' => 'Operating Systems', 'code' => 'os_1', 'description' => 'Learn operating system concepts'],
            ['name' => 'Mobile App Development', 'code' => 'mobile_1', 'description' => 'Develop mobile apps for Android and iOS'],
            ['name' => 'Game Development', 'code' => 'game_1', 'description' => 'Introduction to game development'],
            ['name' => 'Robotics Basics', 'code' => 'robotics_1', 'description' => 'Learn basic robotics principles'],
            ['name' => 'Internet of Things', 'code' => 'iot_1', 'description' => 'Basics of IoT and smart devices'],
            ['name' => 'Project Management', 'code' => 'pm_1', 'description' => 'Learn fundamentals of project management'],
            ['name' => 'Business Management', 'code' => 'bm_1', 'description' => 'Introduction to business management'],
            ['name' => 'Marketing Essentials', 'code' => 'marketing_1', 'description' => 'Basics of marketing strategies'],
            ['name' => 'Accounting Basics', 'code' => 'acc_1', 'description' => 'Learn fundamental accounting principles'],
            ['name' => 'Finance for Beginners', 'code' => 'finance_1', 'description' => 'Basic financial management concepts'],
            ['name' => 'Human Resources', 'code' => 'hr_1', 'description' => 'Introduction to HR principles'],
            ['name' => 'Leadership Skills', 'code' => 'lead_1', 'description' => 'Develop leadership and management skills'],
            ['name' => 'Communication Skills', 'code' => 'comm_1', 'description' => 'Improve communication abilities'],
            ['name' => 'English Literature', 'code' => 'eng_lit_1', 'description' => 'Study of English literature'],
            ['name' => 'Creative Writing', 'code' => 'writing_1', 'description' => 'Learn to write creatively'],
            ['name' => 'History of Art', 'code' => 'art_hist_1', 'description' => 'Introduction to art history'],
            ['name' => 'Music Theory', 'code' => 'music_1', 'description' => 'Basics of music theory'],
            ['name' => 'Psychology Basics', 'code' => 'psych_1', 'description' => 'Introduction to psychology'],
            ['name' => 'Sociology Fundamentals', 'code' => 'soc_1', 'description' => 'Basics of sociology'],
            ['name' => 'Philosophy 101', 'code' => 'phil_1', 'description' => 'Introduction to philosophy'],
            ['name' => 'Environmental Science', 'code' => 'env_1', 'description' => 'Basics of environmental science'],
            ['name' => 'Chemistry Basics', 'code' => 'chem_1', 'description' => 'Introduction to chemistry'],
            ['name' => 'Physics Fundamentals', 'code' => 'phys_1', 'description' => 'Learn basic physics concepts'],
            ['name' => 'Biology 101', 'code' => 'bio_1', 'description' => 'Introduction to biology'],
            ['name' => 'Advanced Python Programming', 'code' => 'py_adv_2', 'description' => 'Advanced Python concepts for experienced learners'],
            ['name' => 'Data Analysis with Python', 'code' => 'py_data_1', 'description' => 'Analyze data using Python libraries'],
            ['name' => 'Python for Data Science', 'code' => 'py_ds_1', 'description' => 'Learn Python for data science applications'],
            ['name' => 'Java Advanced Concepts', 'code' => 'java_adv_1', 'description' => 'Advanced Java programming topics'],
            ['name' => 'C# Programming Basics', 'code' => 'cs_1', 'description' => 'Introduction to C# programming'],
            ['name' => 'C# Advanced Programming', 'code' => 'cs_adv_1', 'description' => 'Advanced C# programming techniques'],
            ['name' => 'Ruby on Rails Basics', 'code' => 'ruby_1', 'description' => 'Learn web development with Ruby on Rails'],
            ['name' => 'PHP Advanced Techniques', 'code' => 'php_adv_1', 'description' => 'Advanced PHP programming'],
            ['name' => 'Laravel Advanced', 'code' => 'laravel_2', 'description' => 'Deep dive into Laravel framework'],
            ['name' => 'Node.js Essentials', 'code' => 'node_1', 'description' => 'Learn backend development with Node.js'],
            ['name' => 'Express.js Framework', 'code' => 'express_1', 'description' => 'Build server-side apps with Express.js'],
            ['name' => 'React Native Mobile Apps', 'code' => 'react_native_1', 'description' => 'Develop mobile apps using React Native'],
        ];

        foreach ($courses as $course) {
            $course['teacher_id'] = Teacher::inRandomOrder()->first()->id;
            Course::create($course);
        }
    }
}
