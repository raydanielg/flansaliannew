<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'slug' => 'msfs',
                'title' => 'Missionary Society of St. Francis de Sales',
                'content' => 'The Fransalian School Bombambili is proudly owned and managed by the Missionary Society of St. Francis de Sales (MSFS), commonly known as Fransalians.',
                'meta_description' => 'Learn about the ownership and heritage of Fransalian School Bombambili.',
            ],
            [
                'slug' => 'mission',
                'title' => 'Our Mission',
                'content' => 'To contribute to the overall growth of the student: mentally, emotionally, and physically. To provide students with an understanding of their rights and an appreciation for truth and peace.',
                'meta_description' => 'The mission of Fransalian School Bombambili.',
            ],
            [
                'slug' => 'vision',
                'title' => 'Our Vision',
                'content' => 'To develop an awareness of national identity, respect, equality, and cultural values. To prepare students to be capable of physical and mental work, and to contribute to a better world.',
                'meta_description' => 'The vision of Fransalian School Bombambili.',
            ],
            [
                'slug' => 'admission',
                'title' => 'Admissions',
                'content' => 'Fransalian School Bombambili offers a nurturing environment where children can excel academically and grow spiritually. Our admission process is simple and transparent.',
                'meta_description' => 'How to join Fransalian School Bombambili.',
            ],
            [
                'slug' => 'fees',
                'title' => 'School Fees',
                'content' => 'Transparent and affordable investment in your child\'s holistic development. Detailed fee structures are available at the school office.',
                'meta_description' => 'Information about school fees and payment plans.',
            ],
            [
                'slug' => 'portal',
                'title' => 'Parents\' Portal',
                'content' => 'Welcome to the Fransalian Parents\' Portal. Access your child\'s academic reports, attendance, and school announcements in one place.',
                'meta_description' => 'Secure access for parents of Fransalian School students.',
            ],
            [
                'slug' => 'contact',
                'title' => 'Contact Us',
                'content' => 'Have questions about admissions, fees, or our curriculum? Our team is here to help you.',
                'meta_description' => 'Get in touch with Fransalian School Bombambili.',
            ],
            [
                'slug' => 'news',
                'title' => 'News & Updates',
                'content' => 'Stay informed with the latest happenings at Fransalian School Bombambili. From academic achievements to school events, find all the recent updates here.',
                'meta_description' => 'Latest news and updates from Fransalian School Bombambili.',
            ],
            [
                'slug' => 'feedback',
                'title' => 'Feedback',
                'content' => 'We value your input. Share your thoughts, suggestions, or concerns with us to help us improve our services and educational environment.',
                'meta_description' => 'Provide feedback to Fransalian School Bombambili.',
            ],
            [
                'slug' => 'help-desk',
                'title' => 'Help Desk',
                'content' => 'Need assistance? Our help desk is here to provide support for students, parents, and staff. Find answers to common questions or reach out for direct help.',
                'meta_description' => 'Support and assistance for the Fransalian School community.',
            ],
        ];

        foreach ($pages as $page) {
            Page::updateOrCreate(['slug' => $page['slug']], $page);
        }

        // Add dummy News
        \App\Models\News::updateOrCreate(['slug' => 'enrollment-2026'], [
            'title' => 'New Academic Year Enrollment',
            'slug' => 'enrollment-2026',
            'content' => 'Registration for the 2026 academic year is now open. Parents are encouraged to visit the school for detailed admission requirements.',
            'published_at' => now(),
        ]);

        \App\Models\News::updateOrCreate(['slug' => 'sports-day-2026'], [
            'title' => 'Annual Sports Day Success',
            'slug' => 'sports-day-2026',
            'content' => 'Our annual sports day was a huge success with outstanding performances from all houses. We are proud of our young athletes!',
            'published_at' => now()->subDays(5),
        ]);

        // Add more comprehensive FAQs
        $faqs = [
            [
                'question' => 'How can I apply for admission?',
                'answer' => 'You can apply online by clicking the "APPLY NOW" button on our website or visit the school office to collect a physical application form. Ensure you have the required documents like birth certificate and previous school reports.',
                'category' => 'Admission',
                'order' => 1,
            ],
            [
                'question' => 'What are the school hours?',
                'answer' => 'Our school hours are from 7:30 AM to 3:30 PM, Monday to Friday. Students are expected to be in school by 7:15 AM for morning assembly.',
                'category' => 'General',
                'order' => 2,
            ],
            [
                'question' => 'Does the school provide transport services?',
                'answer' => 'Yes, we provide safe and reliable school bus services covering various routes in Gongo la Mboto and surrounding areas. Transport fees are paid separately from tuition fees.',
                'category' => 'Transport',
                'order' => 3,
            ],
            [
                'question' => 'Are there extracurricular activities?',
                'answer' => 'Absolutely! We offer various clubs including Music, Drama, Sports (Football, Netball), Scouting, and Debate to ensure the holistic development of our students.',
                'category' => 'Activities',
                'order' => 4,
            ],
            [
                'question' => 'How can I track my child\'s academic progress?',
                'answer' => 'Parents can log in to the Parents\' Portal using their unique username and password to view academic reports, attendance, and teacher feedback in real-time.',
                'category' => 'Portal',
                'order' => 5,
            ],
            [
                'question' => 'What is the school\'s policy on discipline?',
                'answer' => 'We follow the MSFS philosophy of "Gentleness and Humility." We encourage positive discipline and character building, focusing on mutual respect and responsibility.',
                'category' => 'Policy',
                'order' => 6,
            ],
            [
                'question' => 'Are school meals provided?',
                'answer' => 'Yes, we provide nutritious and well-balanced breakfast and lunch for all students. The food fee is included in the annual fee structure.',
                'category' => 'General',
                'order' => 7,
            ],
            [
                'question' => 'How can I contact the school administration?',
                'answer' => 'You can reach us via phone at 0784377306 or 0758204865, or email us at fransalianb2@gmail.com. Our office is also open from 8:00 AM to 4:00 PM on weekdays.',
                'category' => 'Contact',
                'order' => 8,
            ],
        ];

        foreach ($faqs as $faq) {
            \App\Models\HelpDesk::updateOrCreate(['question' => $faq['question']], $faq);
        }

        // Add Fees data
        $fees = [
            [
                'level_en' => 'Nursery',
                'level_sw' => 'Awali',
                'tuition_fees' => '600,000',
                'food' => '300,000',
                'stationery' => '100,000',
                'other_expenses' => '50,000',
                'total' => '1,050,000',
                'term_1' => '600,000',
                'term_2' => '450,000',
            ],
            [
                'level_en' => 'Standard 1-4',
                'level_sw' => 'Darasa la 1-4',
                'tuition_fees' => '700,000',
                'food' => '350,000',
                'stationery' => '150,000',
                'other_expenses' => '70,000',
                'total' => '1,270,000',
                'term_1' => '750,000',
                'term_2' => '520,000',
            ],
            [
                'level_en' => 'Standard 5-7',
                'level_sw' => 'Darasa la 5-7',
                'tuition_fees' => '800,000',
                'food' => '400,000',
                'stationery' => '200,000',
                'other_expenses' => '100,000',
                'total' => '1,500,000',
                'term_1' => '900,000',
                'term_2' => '600,000',
            ],
        ];

        foreach ($fees as $fee) {
            \App\Models\Fee::updateOrCreate(['level_en' => $fee['level_en']], $fee);
        }

        // Add Admission Steps
        $steps = [
            [
                'step_number' => 1,
                'title' => 'Pick Application Form',
                'description' => 'Visit the school office to pick up the application form or apply online.',
            ],
            [
                'step_number' => 2,
                'title' => 'Interview/Placement Test',
                'description' => 'The child will undergo a placement test to determine their level.',
            ],
            [
                'step_number' => 3,
                'title' => 'Payment of Fees',
                'description' => 'Upon successful interview, pay the required fees to secure the vacancy.',
            ],
        ];

        foreach ($steps as $step) {
            \App\Models\AdmissionStep::updateOrCreate(['step_number' => $step['step_number']], $step);
        }

        // Add Admission Requirements
        $requirements = [
            [
                'title' => 'Birth Certificate',
                'requirement' => 'A copy of the child\'s birth certificate.',
            ],
            [
                'title' => 'Academic Reports',
                'requirement' => 'Previous academic reports from the former school.',
            ],
            [
                'title' => 'Passport Photos',
                'requirement' => 'Two recent passport size photographs of the child.',
            ],
        ];

        foreach ($requirements as $requirement) {
            \App\Models\AdmissionRequirement::updateOrCreate(['title' => $requirement['title']], $requirement);
        }
    }
}
