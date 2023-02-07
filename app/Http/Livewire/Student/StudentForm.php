<?php

namespace App\Http\Livewire\Student;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class StudentForm extends Component
{
    use WithFileUploads;

    public User $student;
    public $currentStep = 1;

    public function render()
    {
        return view('livewire.student.student-form');
    }

    public function mount()
    {
        $this->student = new User([
            'type' => User::TYPE_STUDENT,
            'gender' => 'male',
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
        ];
    }

    protected $validationAttributes = [
        'student.name' => 'الاسم الكامل',
        'student.gender' => 'الجنس',
        'student.personal_id' => ' الرقم الوطني',
        'student.first_phone' => 'رقم الهاتف 1',
        'student.second_phone' => 'رقم الهاتف 2',
    ];



    public function validatePersonalInfo()
    {
        $this->validate();
        $this->currentStep = 2;
    }

    public function validateGuarantorInfo()
    {
        $this->validate();
        $this->currentStep = 3;

    }

    public function validateHousingInfo()
    {
        $this->validate();
        $this->currentStep = 4;

    }

    public function save()
    {
        $this->student->addMedia(Image::make($this->student['photo'])->basePath())
            ->usingName(Str::uuid())
            ->toMediaCollection('student_photo');
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

            default:
        }
    }
}
