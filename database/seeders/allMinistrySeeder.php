<?php

namespace Database\Seeders;

use App\Models\Ministrie;
use Illuminate\Database\Seeder;

class allMinistrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ministrie::create([
            'name' => 'مجلس النواب',
            'image' => 'blue.png'
          ]);
        Ministrie::create([
            'name' => 'المجلس الاعلى للدولة',
            'image' => 'blue.png'
          ]);
          Ministrie::create([
              'name' => 'المجلس الرئاسي',
              'image' => 'blue.png'
            ]);
            Ministrie::create([
                'name' => 'مجلس الوزراء',
                'image' => 'blue.png'
              ]);
              Ministrie::create([
                  'name' => 'وزارة الداخلية',
                  'image' => 'blue.png',
                ]);
                Ministrie::create([
                    'name' => ' وزارة العدل',
                    'image' => 'blue.png',
                  ]);
                  Ministrie::create([
                      'name' => 'وزارة الخارجية و التعاون الدولي',
                      'image' => 'blue.png',
                    ]);
                    Ministrie::create([
                        'name' => 'وزارة المالية',
                        'image' => 'blue.png',
                      ]);
                      Ministrie::create([
                          'name' => 'وزارة الصحة',
                          'image' => 'blue.png',
                        ]);
                        Ministrie::create([
                            'name' => ' وزارة التربية والتعليم',
                            'image' => 'blue.png',
                          ]);
                          Ministrie::create([
                              'name' => 'وزارة التعليم العالي و البحث العلمي',
                              'image' => 'blue.png',
                            ]);
                            Ministrie::create([
                                'name' => ' وزارة التعليم التقني و الفني',
                                'image' => 'blue.png',
                              ]);
                              Ministrie::create([
                                  'name' => 'وزارة الاقتصاد و التجارة',
                                  'image' => 'blue.png',
                                ]);
                                Ministrie::create([
                                    'name' => 'وزارة الصناعة و المعادن',
                                    'image' => 'blue.png',
                                  ]);
                                  Ministrie::create([
                                      'name' => 'وزارة المواصلات',
                                      'image' => 'blue.png',
                                    ]);
                                    Ministrie::create([
                                        'name' => 'وزارة الشؤون الإجتماعية',
                                        'image' => 'blue.png',
                                      ]);
                                      Ministrie::create([
                                          'name' => 'وزارة التخطيط',
                                          'image' => 'blue.png',
                                        ]);
                                        Ministrie::create([
                                            'name' => 'وزارة الحكم المحلي',
                                            'image' => 'blue.png',
                                          ]);
                                          Ministrie::create([
                                              'name' => 'وزارة الدفاع',
                                              'image' => 'blue.png',
                                            ]);
                                            Ministrie::create([
                                                'name' => 'وزارة الزراعة والثروة الحيوانية',
                                                'image' => 'blue.png',
                                              ]);
                                              Ministrie::create([
                                                  'name' => 'وزارة الثروة البحرية',
                                                  'image' => 'blue.png',
                                                ]);
                                                Ministrie::create([
                                                    'name' => 'وزارة العمل والتأهيل',
                                                    'image' => 'blue.png',
                                                  ]);
                                                  Ministrie::create([
                                                      'name' => 'وزارة الاسكان والتعمير',
                                                      'image' => 'blue.png',
                                                    ]);
                                                    Ministrie::create([
                                                        'name' => 'وزارة السياحة و الصناعات التقليدية',
                                                        'image' => 'blue.png',
                                                      ]);
                                                      Ministrie::create([
                                                          'name' => 'وزارة الثقافة و التنمية المعرفية',
                                                          'image' => 'blue.png',
                                                        ]);
                                                        Ministrie::create([
                                                            'name' => 'وزارة الرياضة',
                                                            'image' => 'blue.png',
                                                          ]);
                                                          Ministrie::create([
                                                              'name' => 'وزارة الشباب',
                                                              'image' => 'blue.png',
                                                            ]);
                                                            Ministrie::create([
                                                                'name' => 'وزارة الخدمة المدنية',
                                                                'image' => 'blue.png',
                                                              ]);
                                                              Ministrie::create([
                                                                  'name' => 'وزارة الموارد المائية ',
                                                                  'image' => 'blue.png',
                                                                ]);
                                                              Ministrie::create([
                                                                  'name' => 'وزارة البيئة',
                                                                  'image' => 'blue.png',
                                                                ]);
                                                                Ministrie::create([
                                                                    'name' => 'وزارة النفط و الغاز',
                                                                    'image' => 'blue.png',
                                                                  ]);
                                                                  Ministrie::create([
                                                                      'name' => 'هيئة رعاية أسر الشهداء والمفقودين ',
                                                                      'image' => 'blue.png',
                                                                    ]);
                                                                    Ministrie::create([
                                                                        'name' => 'الهيئة العامة للأوقاف والشؤون الاسلامية',
                                                                        'image' => 'blue.png',
                                                                      ]);
                                                                      Ministrie::create([
                                                                          'name' => 'الهيئة العامة للاتصالات',
                                                                          'image' => 'blue.png',
                                                                        ]);
                                                                        Ministrie::create([
                                                                            'name' => 'المؤسسة الليبية للاعلام',
                                                                            'image' => 'blue.png',
                                                                          ]);
                                                                          Ministrie::create([
                                                                              'name' => 'جهات غير واردة بالميزانية',
                                                                              'image' => 'blue.png',
                                                                            ]);

    }
}
