<?php

use App\Models\Order;
use App\Models\Payment;

return [
  'products' => [
    'products' => 'المنتجات',
    'product' => 'منتج',
    'title' => 'العنوان',
    'quantity' => 'الكمية',
    'price' => 'السعر',
    'images' => 'الصور',
    'description' => 'الوصف',
    'is_visible' => 'متاح',
    'price_for_12_months' => 'السعر لأقساط 12 شهر',
    'price_for_24_months' => 'السعر لأقساط 24 شهر',
  ],
  'users' => [
    'users' => ' المستخدمين',
    'user' => 'مستخدم',
    'type' => 'نوع المستخدم',
    'name' => 'الاسم',
    'email' => 'البريد الالكتروني',
    'password' => 'كلمة المرور',
    'gender' => 'الجنس',
    'first_phone' => 'الهاتف الاول',
    'second_phone' => 'الهاتف الثاني',
    'address' => 'العنوان',
    'personal_id' => 'رقم الهوية',
    'personal_id_photo' => 'رقم الهوية',
    'photo' => ' الصورة الشخصية ',
    'personal_id_photo' => 'صورة الهوية',
    'student_data' => 'بيانات الطالب',
    //guarantor
    'guarantor_name' => 'اسم الضامن',
    'guarantor_gender' => 'جنس الضامن',
    'guarantor_first_phone' => ' رقم الهاتف الاول للضامن ',
    'guarantor_second_phone' => ' رقم الهاتف الثاني للضامن ',
    'guarantor_personal_id' => 'رقم هوية الضامن',
    'guarantor_personal_id_photo' => 'صورة هوية الضامن',
    'guarantor_job' => 'وظيفة الضامن',
    'guarantor_work_company' => ' اسم عمل الضامن ',
    'guarantor_work_address' => 'عنوان عمل الضامن',
    'guarantor_job' => 'وظيفة الضامن',
    'guarantor_photo' => '  صورة الضامن ',
    'guarantor_data' => 'بيانات الضامن',


    //housing
    'house_address' => 'عنوان المنزل',
    'house_owner' => 'اسم مالك المنزل',
    'house_owner_personal_id' => 'رقم هوية مالك المنزل',
    'house_owner_gender' => 'جنس مالك المنزل',
    'house_owner_phone' => ' رقم هاتف مالك المنزل',
    'house_number' => '  رقم المنزل',
    'house_data' => 'بيانات السكن',
    'house_certificate_photo' => 'صورة شهادة السكن',
    'house_owner_personal_id_photo' => 'صورة هوية مالك المنزل',

  ],

  'orders' => [
    'orders' => 'الطلبات',
    'order' => 'طلب',
    'status' => 'الحالة',
    Order::STATUS_PENDING => 'مقدم',
    Order::STATUS_REVIEWING => 'مرشح',
    Order::STATUS_RECEIVED => 'مستلم',

  ],

  'payments' => [
    'payments' => 'المدفوعات',
    'payment' => 'مدفوع',
    'amount' => 'المبلغ',
    'date' => 'التاريخ',
    'order_id' => 'رقم الطلب',
    'payment_date' => 'تاريخ الدفع',
    'payment_status' => 'حالة الدفع',
    Payment::STATUS_PAID => 'مدفوع',
    Payment::STATUS_REFUSED => 'متعسر',
    'payment_method' => 'وسيلة الدفع',
    'payment_date' => 'تاريخ الدفع',
    'payment_number' => 'رقم العملية',
  ],

  'site' => [
    'created_at' => 'تاريخ الانشاء',
    'updated_at' => 'تاريخ التعديل',
    'deleted_at' => 'تاريخ الحذف',
    
  ],

  'institutions' => [
    'institutions' => 'المؤسسات',
    'institution' => 'مؤسسة',
    'title' => 'الاسم',
    
  ],
];
