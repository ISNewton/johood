<?php

namespace App\Http\Livewire\Student;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentForm extends Component
{
    use WithFileUploads;

    public User $student;

    public function render()
    {
        return view('livewire.student.student-form');
    }

    public function mount()
    {
        $this->student = new User();
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
        dd(55);
    }
}
