<?php

namespace App\Http\Livewire\Student;

use App\Models\User;
use HtmlSanitizer\Extension\Table\NodeVisitor\ThNodeVisitor;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class StudentForm extends Component
{
    use WithFileUploads;

    public User $student;
    public $currentStep = 1;
    public $photo;
    public $personal_id_photo;
    public $guarantor_photo;
    public $guarantor_personal_id_photo;
    public $house_owner_personal_id_photo;
    public $house_certificate_photo;


    public function render()
    {
        return view('livewire.student.student-form');
    }

    public function mount()
    {
        $this->student = new User([
            'type' => User::TYPE_STUDENT,
            'gender' => 'male',
            'guarantor_gender' => 'male',
        ]);
    }

    protected function rules()
    {
        return [
            'student.name' => 'required|string|max:255',
            'student.gender' => 'required|in:male,female',
            'student.personal_id' => 'required|string',
            'student.first_phone' => 'required|integer',
            'student.second_phone' => 'nullable|integer',
            'photo' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:1024'],
            'personal_id_photo' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:1024'],

            'student.guarantor_name' => 'required|string|max:255',
            'student.guarantor_gender' => 'required|in:male,female',
            'student.guarantor_first_phone' => 'required|integer',
            'student.guarantor_second_phone' => 'nullable|integer',
            'student.guarantor_personal_id' => 'required|string',
            'student.guarantor_job' => 'required|string',
            'student.guarantor_work_company' => 'required|string',
            'student.guarantor_work_address' => 'required|string',
            'student.guarantor_photo' => 'required|image|mimes:jpg,jpeg,png|max:1024',
            'student.guarantor_personal_id_photo' => 'required|image|mimes:jpg,jpeg,png|max:1024',

            'student.house_number' => 'required|integer',
            'student.house_address' => 'required|string',
            'student.house_owner' => 'required|string',
            'student.house_owner_phone' => 'required|integer',
            'student.house_owner_personal_id' => 'required|string',
            'house_owner_personal_id_photo' => 'required|image|mimes:jpg,jpeg,png,web|max:1024',
            'house_certificate_photo' => 'required|image|mimes:jpg,jpeg,png,web|max:1024',

            'student.payment_method' => 'required|in:fawry,bankak',
            'student.payment_number' => 'required|integer',
            'student.payment_date' => 'required|date',
        ];
    }

    protected $validationAttributes = [];



    public function validatePersonalInfo()
    {
        $this->validate([
            'student.name' => 'required|string|max:255',
            'student.gender' => 'required|in:male,female',
            'student.personal_id' => 'required|string',
            'student.first_phone' => 'required|integer',
            'student.second_phone' => 'required|integer',
            'photo' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:1024'],
            'personal_id_photo' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:1024'],
        ], [], [
            'student.name' => 'الاسم الكامل',
            'student.gender' => 'الجنس',
            'student.personal_id' => ' الرقم الوطني',
            'student.first_phone' => 'رقم الهاتف 1',
            'student.second_phone' => 'رقم الهاتف 2',
            'photo' => __('admin.users.photo'),
            'personal_id_photo' => __('admin.users.personal_id_photo'),
        ]);
        $this->currentStep = 2;
    }

    public function validateGuarantorInfo()
    {
        $this->validate([
            'student.guarantor_name' => 'required|string|max:255',
            'student.guarantor_gender' => 'required|in:male,female',
            'student.guarantor_first_phone' => 'required|integer',
            'student.guarantor_second_phone' => 'nullable|integer',
            'student.guarantor_personal_id' => 'required|string',
            'student.guarantor_job' => 'required|string',
            'student.guarantor_work_company' => 'required|string',
            'student.guarantor_work_address' => 'required|string',
            'guarantor_photo' => 'required|file|mimes:jpg,jpeg,png|max:1024',
            'guarantor_personal_id_photo' => 'required|file|mimes:jpg,jpeg,png|max:1024',
        ], [], [
            'student.guarantor_name' => __('admin.users.guarantor_name'),
            'student.guarantor_gender' => __('admin.users.guarantor_gender'),
            'student.guarantor_first_phone' => __('admin.users.guarantor_first_phone'),
            'student.guarantor_second_phone' => __('admin.users.guarantor_second_phone'),
            'student.guarantor_personal_id' => __('admin.users.guarantor_personal_id'),
            'student.guarantor_job' => __('admin.users.users'),
            'student.guarantor_work_company' => __('admin.users.guarantor_work_company'),
            'student.guarantor_work_address' => __('admin.users.guarantor_work_address'),
            'guarantor_photo' => __('admin.users.guarantor_photo'),
            'guarantor_personal_id_photo' => __('admin.users.guarantor_personal_id_photo'),
        ]);

        $this->student->payment_method = 'bankak';

        $this->currentStep = 3;
    }

    public function validateHousingInfo()
    {
        $this->validate([
            'student.house_number' => 'required|integer',
            'student.house_address' => 'required|string',
            'student.house_owner' => 'required|string',
            'student.house_owner_phone' => 'required|integer',
            'student.house_owner_personal_id' => 'required|string',
            'house_owner_personal_id_photo' => 'required|image|mimes:jpg,jpeg,png,webp|max:1024',
            'house_certificate_photo' => 'required|image|mimes:jpg,jpeg,png,webp|max:1024',
        ], [], [
            'student.house_address' => __('admin.users.house_address'),
            'student.house_number' => __('admin.users.house_number'),
            'student.house_owner_phone' => __('admin.users.house_owner_phone'),
            'student.house_owner' => __('admin.users.house_owner'),
            'student.house_owner_personal_id' =>   __('admin.users.house_owner_personal_id'),
            'house_owner_personal_id_photo' => __('admin.users.house_owner_personal_id_photo'),
            'house_certificate_photo' => __('admin.users.house_certificate_photo'),
        ]);
        $this->currentStep = 4;
    }

    public function validatePaymentInfo()
    {
        $this->validate([
            'student.payment_method' => 'required|in:fawry,bankak',
            'student.payment_number' => 'required|integer',
            'student.payment_date' => 'required|date',
        ], [], [
            'student.payment_method' => __('admin.payments.payment_method'),
            'student.payment_number' => __('admin.payments.payment_number'),
            'student.payment_date' => __('admin.payments.payment_date'),
        ]);
        // $this->currentStep = 5;
        $this->save();
    }

    public function save()
    {
        return DB::transaction(function ($q) {

            $student = collect($this->student)->except([
                'photo',
                'personal_id_photo',
                'guarantor_photo',
                'guarantor_personal_id_photo',
                'house_owner_personal_id_photo',
                'house_certificate_photo'
            ]);

            $student->put('type', User::TYPE_STUDENT);

            $user = User::create($student->toArray());

            $this->student->addMedia(Image::make($this->photo)->basePath())
                ->usingName(Str::uuid())
                ->toMediaCollection('student_photo');

            $this->student->addMedia(Image::make($this->personal_id_photo)->basePath())
                ->usingName(Str::uuid())
                ->toMediaCollection('personal_id_photo');

            $this->student->addMedia(Image::make($this->guarantor_photo)->basePath())
                ->usingName(Str::uuid())
                ->toMediaCollection('guarantor_photo');

            $this->student->addMedia(Image::make($this->guarantor_personal_id_photo)->basePath())
                ->usingName(Str::uuid())
                ->toMediaCollection('guarantor_personal_id_photo');


            session()->flush('success' , 'تم حفظ الطلب بنجاح سيتم مراسلتك بالتفاصيل في رقم الهاتف');
        });
    }

    public function directToCorrectStep()
    {
        switch ($this->currentStep) {
            case 1:
                $this->validatePersonalInfo();
                break;

            case 2:
                $this->validateGuarantorInfo();
                break;

            case 3:
                $this->validateHousingInfo();
                break;

            case 4:
                $this->validatePaymentInfo();
                break;

            case 5:
                $this->save();
                break;
            default:
        }
    }

    public function back()
    {
        --$this->currentStep;
    }
}
