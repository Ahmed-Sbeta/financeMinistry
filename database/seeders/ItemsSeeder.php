<?php

namespace Database\Seeders;


use App\Models\Items;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
        
        Items::create([
            'name' => 'المرتبات الأساسية ',
            'door' => 1
          ]); 
          
        Items::create([
            'name' => 'علاوة العائلة ',
            'door' => 1
          ]); 
             
        Items::create([
            'name' => 'علاوة سكن',
            'door' => 1
          ]); 
             
        Items::create([
            'name' => 'علاوة تدريس',
            'door' => 1
          ]); 
             
        Items::create([
            'name' => 'علاوة التمييز وطبيعة العمل ',
            'door' => 1
          ]); 
             
        Items::create([
            'name' => 'مكآفاة نهاية الخدمة للمغتربين',
            'door' => 1
          ]); 
             
        Items::create([
            'name' => 'الإعاشة والإقامة للعاملين ',
            'door' => 1
          ]); 
             
        Items::create([
            'name' => 'مقابل العمل الإضافي والمحاضرات والحصص',
            'door' => 1
          ]); 
             
        Items::create([
            'name' => 'الملابس والقيافة ',
            'door' => 1
          ]); 
             
        Items::create([
            'name' => 'المساهمة في الضمان الاجتماعي',
            'door' => 1
          ]); 
             
        Items::create([
            'name' => 'المساهمة في التأمين الطبي ',
            'door' => 1
          ]); 



              
          


        Items::create([
            'name' => 'إتعاب ومكافأة لغير العاملين ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'وقود وزيوت وقوى محركة ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'الكهرباء ',
            'door' => 2
          ]); 
          
        Items::create([
            'name' => 'بريد ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'المياه ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'مطبوعات وقرطاسيه وأدوات مكتبية ومود التصوير ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'نفقات السفر والمبيت والمهمات الرسمية ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'إعلان وعلاقات عامة وضيافة ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'اشتراكات ومساهمات وحصص دولية ومحلية ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'مصروفات النظافة ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'إيجار المباني ومصروفات النقل والشحن والتأمين ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'التأمينات والضرائب والرسوم ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'نفقات انعقاد الموتمرات ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'معدات طبية ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'كتب ومراجع ومستلزمات المختبرات والمعامل ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'تجهيزات ( أغطية – مفروشات – مقاعد دراسية ...... الخ )',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'قطع غيار ومهمات وأدوات ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'الصيانة ( للمباني والتجهيزات والأثاث والآليات ووسائل النقل .. الخ )',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'تدريب وبعثات',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'مصروفات النشاط المدرسي الثقافي الاجتماعي',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'شراء مواد وخامات',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'أدوية وما في حكمها ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'أغذية لغير العاملين ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'التزامات قانونية ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'الإعانات والمساعدات والمنح ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'مصروفات علاج ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'مصروفات خدمية ( مصاريف دراسية – مصروفات خدمية ...... الخ )',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'مصروفات سنوات سابقة ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'دعم ميزانيات جهات أخرى ',
            'door' => 2
          ]);
          
        Items::create([
            'name' => 'استقطاعات الضمانية',
            'door' => 2
          ]);







             
        Items::create([
            'name' => 'دعم الادوية',
            'door' => 4
          ]);
               
        Items::create([
            'name' => 'دعم الكهرباء',
            'door' => 4
          ]);
               
        Items::create([
            'name' => 'النظافة العامة',
            'door' => 4
          ]);
               
        Items::create([
            'name' => 'المياه والصرف الصحي',
            'door' => 4
          ]);
               
        Items::create([
            'name' => 'منحة زوجة والابناء',
            'door' => 4
          ]);
               
        Items::create([
            'name' => 'دعم الوقود',
            'door' => 4
          ]);






    }
}
