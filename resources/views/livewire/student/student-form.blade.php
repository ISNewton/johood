<ul class="form-section page-section">
    <li id="li1" class="form-input-wide">
        <div class="form-header-group  header-large">
            <div class="header-text httac htvam">
                <h1 id="header1" class="form-header">استمارة الاشتراك</h1>
            </div>

        </div>
    </li>
    <li id="li2" class="form-input-wide">
        <div class="form-header-group  header-default">
            <div class="header-text httal htvam">
                <h2 id="header2" class="form-header" style="text-align:right;">
                    @if ($currentStep == 1)
                    معلومات الدفع
                    @elseif($currentStep == 2)
                    المعلومات الشخصية

                    @elseif($currentStep == 3)
                    معلومات الضامن

                    @elseif($currentStep == 4)
                    معلومات السكن

                    @else

                    @endif
                </h2>
            </div>
        </div>
    </li>


    @if ($currentStep == 1)

    <li class="form-line" id="li3" style="text-align:right;">
        <div id="div1" class="form-input-wide">
            <div class="form-address-table jsTest-addressField">
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            {{-- <select class="form-textbox form-address-city" wire:model.defer='student.payment_method'
                                name="" id="">
                                <option value="bankak">بنك الخرطوم - بنكك</option>
                                <option value="fawry">بنك فيصل - فوري</option>
                            </select>
                            <label class="form-sub-label" id="label2" style="min-height:13px" aria-hidden="false">وسيلة
                                الدفع</label> --}}
                                <input wire:model.defer='student.payment_date' type="date" id="input3"
                                name="q34_address[addr_line2]" class="form-textbox form-address-line" />
                            <label class="form-sub-label" id="label3_5" style="min-height:13px"
                                aria-hidden="false">@lang('admin.payments.payment_date')</label>
                            @error('student.payment_date')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </span>

                    </span>
                    @error('student.payment_method')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.payment_number' style="margin-left: 22px" type="number"
                                id="input5" name="q34_address[state]" class="form-textbox form-address-state" />
                            <label class="form-sub-label" id="label3" style="min-height:13px" aria-hidden="false">رقم
                                العملية</label>
                        </span>

                    </span>
                    @error('student.payment_number')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-street-line jsTest-address-lineField">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            {{-- <input wire:model.defer='student.payment_date' type="date" id="input3"
                                name="q34_address[addr_line2]" class="form-textbox form-address-line" />
                            <label class="form-sub-label" id="label3_5" style="min-height:13px"
                                aria-hidden="false">@lang('admin.payments.payment_date')</label>
                            @error('student.payment_date')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </span>
                    </span>
                </div>
                {{--
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.first_phone' type="number" id="input6"
                                class="form-textbox form-address-city" />
                            <label class="form-sub-label" id="label4" style="min-height:13px" aria-hidden="false">رقم
                                الهاتف
                                1</label>
                        </span>
                        @error('student.first_phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </span>
                    <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.second_phone' style="margin-left: 22px" type="number"
                                id="input7" name="q34_address[state]" class="form-textbox form-address-state" />
                            <label class="form-sub-label" id="label5" style="min-height:13px" aria-hidden="false">رقم
                                الهاتف
                                2</label>
                        </span>
                        @error('student.second_phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </span>
                </div> --}}
            </div>
        </div>
    </li>

    @elseif($currentStep == 2)


    <li class="form-line" id="li3" style="text-align:right;">
        <div id="div1" class="form-input-wide">
            <div class="form-address-table jsTest-addressField">
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-street-line jsTest-address-lineField">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <label class="form-sub-label" id="label1" style="min-height:13px" aria-hidden="false">الاسم
                                بالكامل
                            </label>
                        </span>
                    </span>
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-street-line jsTest-address-lineField">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.name' type="text" id="input3"
                                name="q34_address[addr_line2]" class="form-textbox form-address-line" />
                            @error('student.name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </span>
                    </span>
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            {{-- <input type="text" id="input4" class="form-textbox form-address-city" /> --}}
                            <select class="form-textbox form-address-city" wire:model.defer='student.gender' name=""
                                id="">
                                <option value="male">ذكر</option>
                                <option value="female">أنثى</option>
                            </select>
                            <label class="form-sub-label" id="label2" style="min-height:13px"
                                aria-hidden="false">الجنس</label>
                        </span>

                    </span>
                    @error('student.gender')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.personal_id' style="margin-left: 22px" type="text"
                                id="input5" name="q34_address[state]" class="form-textbox form-address-state" />
                            <label class="form-sub-label" id="label3" style="min-height:13px" aria-hidden="false">الرقم
                                الوطني</label>
                        </span>

                    </span>
                    @error('student.personal_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.first_phone' type="number" id="input6"
                                class="form-textbox form-address-city" />
                            <label class="form-sub-label" id="label4" style="min-height:13px" aria-hidden="false">رقم
                                الهاتف
                                1</label>
                        </span>
                        @error('student.first_phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </span>
                    <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.second_phone' style="margin-left: 22px" type="number"
                                id="input7" name="q34_address[state]" class="form-textbox form-address-state" />
                            <label class="form-sub-label" id="label5" style="min-height:13px" aria-hidden="false">رقم
                                الهاتف
                                2</label>
                        </span>
                        @error('student.second_phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </span>
                </div>
            </div>
        </div>
    </li>

    <div style="text-align:right;" class="form-address-line-wrapper jsTest-address-line-wrapperField">
        <span class="form-address-line form-address-city-line jsTest-address-lineField ">
            <span class="form-sub-label-container" style="vertical-align:top">
                <li class="form-line" data-type="control_fileupload" id="li4">
                    <label class="form-label form-label-top form-label-auto" id="label6" for="input_10"> الرجاء تحميل
                        الصورة
                        الشخصية</label>
                    <div id="div2" class="form-input-wide" data-layout="full">
                        <div class="jfQuestion-fields" data-wrapper-react="true">
                            <div class="jfField isFilled">
                                <div class="jfUpload-wrapper">
                                    <div class="jfUpload-container">

                                        <div style="margin-left:225px" class="jfUpload-button-container">
                                            <div class="jfUpload-button" aria-hidden="true" tabindex="0"
                                                style="display:none" data-version="v2">Browse Files
                                                <div class="jfUpload-heading forDesktop">Drag and drop files here
                                                </div>
                                                <div class="jfUpload-heading forMobile">اختر الملف</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left:120px" class="jfUpload-files-container">
                                        <div class="validate[multipleUpload]">
                                            <input wire:model='photo' type="file" class="form-upload-multiple"
                                                data-imagevalidate="yes" aria-label="Browse Files" />
                                            @error('photo')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div data-wrapper-react="true"></div>
                            </div>
                            <span style="display:none" class="cancelText">Cancel</span>
                            <span style="display:none" class="ofText">of</span>
                        </div>
                    </div>
                </li>
            </span>
        </span>
        <span class="form-address-line form-address-state-line jsTest-address-lineField ">
            <span class="form-sub-label-container" style="vertical-align:top">
                <li class="form-line" data-type="control_fileupload" id="li5">
                    <label class="form-label form-label-top form-label-auto" id="label7" for="input_10"> الرجاء تحميل
                        الرقم
                        الوطني</label>
                    <div id="div3" class="form-input-wide" data-layout="full">
                        <div class="jfQuestion-fields" data-wrapper-react="true">
                            <div class="jfField isFilled">
                                <div class="jfUpload-wrapper">
                                    <div class="jfUpload-container">

                                        <div class="jfUpload-button-container">
                                            <div class="jfUpload-button" aria-hidden="true" tabindex="0"
                                                style="display:none" data-version="v2">Browse Files
                                                <div class="jfUpload-heading forDesktop">Drag and drop files here</div>
                                                <div class="jfUpload-heading forMobile">اختر الملف</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left:120px" class="jfUpload-files-container">
                                        <div class="validate[multipleUpload]">
                                            <input wire:model='personal_id_photo' type="file"
                                                aria-label="Browse Files" />
                                            @error('personal_id_photo')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div data-wrapper-react="true"></div>
                            </div>
                            <span style="display:none" class="cancelText">Cancel</span>
                            <span style="display:none" class="ofText">of</span>
                        </div>
                    </div>
                </li>
            </span>
        </span>
    </div>

    @elseif($currentStep == 3)
    <li class="form-line" id="li2_3" style="text-align:right;">
        <div id="div2_1" class="form-input-wide">
            <div class="form-address-table jsTest-addressField">
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-street-line jsTest-address-lineField">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <label class="form-sub-label" id="label2_1" style="min-height:13px"
                                aria-hidden="false">الاسم بالكامل
                            </label>
                        </span>
                    </span>
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-street-line jsTest-address-lineField">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.guarantor_name' type="text" id="input2_3"
                                name="q34_address[addr_line2]" class="form-textbox form-address-line" />
                        </span>
                    </span>
                    @error('student.guarantor_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <select class="form-textbox form-address-city" wire:model.defer='student.guarantor_gender'
                                name="" id="">
                                <option value="male">ذكر</option>
                                <option value="female">أنثى</option>
                            </select>
                            <label class="form-sub-label" id="label2_2" style="min-height:13px"
                                aria-hidden="false">الجنس</label>
                        </span>
                    </span>
                    @error('student.guarantor_gender')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.guarantor_personal_id' style="margin-left: 22px"
                                type="text" id="input2_5" name="q34_address[state]"
                                class="form-textbox form-address-state" />
                            <label class="form-sub-label" id="label2_3" style="min-height:13px"
                                aria-hidden="false">الرقم الوطني</label>
                        </span>
                    </span>
                    @error('student.guarantor_personal_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.guarantor_work_company' type="text" id="input2_6"
                                class="form-textbox form-address-city" />
                            <label class="form-sub-label" id="label2_4" style="min-height:13px" aria-hidden="false">جهة
                                الوظيفة</label>
                        </span>
                    </span>
                    @error('student.guarantor_work_company')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.guarantor_job' style="margin-left: 22px" type="text"
                                id="input2_7" name="q34_address[state]" class="form-textbox form-address-state" />
                            <label class="form-sub-label" id="label2_5" style="min-height:13px"
                                aria-hidden="false">الوظيفة</label>
                        </span>
                    </span>
                    @error('student.guarantor_job')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.guarantor_first_phone' type="number" id="input2_8"
                                class="form-textbox form-address-city" />
                            <label class="form-sub-label" id="label2_6" style="min-height:13px" aria-hidden="false">رقم
                                الهاتف</label>
                        </span>
                    </span>
                    @error('student.guarantor_first_phone')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.guarantor_work_address' style="margin-left: 22px"
                                type="text" id="input2_9" name="q34_address[state]"
                                class="form-textbox form-address-state" />
                            <label class="form-sub-label" id="label2_7" style="min-height:13px"
                                aria-hidden="false">عنوان الوظيفة</label>
                        </span>
                    </span>
                    @error('student.guarantor_work_address')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </li>

    <div style="text-align:right;" class="form-address-line-wrapper jsTest-address-line-wrapperField">
        <span class="form-address-line form-address-city-line jsTest-address-lineField ">
            <span class="form-sub-label-container" style="vertical-align:top">
                <li class="form-line" data-type="control_fileupload" id="li4">
                    <label class="form-label form-label-top form-label-auto" id="label6" for="input_10"> الرجاء تحميل
                        الصورة
                        الشخصية</label>
                    <div id="div2" class="form-input-wide" data-layout="full">
                        <div class="jfQuestion-fields" data-wrapper-react="true">
                            <div class="jfField isFilled">
                                <div class="jfUpload-wrapper">
                                    <div class="jfUpload-container">

                                        <div style="margin-left:225px" class="jfUpload-button-container">
                                            <div class="jfUpload-button" aria-hidden="true" tabindex="0"
                                                style="display:none" data-version="v2">Browse Files
                                                <div class="jfUpload-heading forDesktop">Drag and drop files here
                                                </div>
                                                <div class="jfUpload-heading forMobile">اختر الملف</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left:120px" class="jfUpload-files-container">
                                        <div class="validate[multipleUpload]">
                                            <input wire:model='guarantor_photo' type="file" id="input8"
                                                class="form-upload-multiple" data-imagevalidate="yes"
                                                data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif"
                                                data-file-maxsize="10854" data-file-minsize="0" data-file-limit="0"
                                                data-component="fileupload" aria-label="Browse Files" />
                                            @error('guarantor_photo')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div data-wrapper-react="true"></div>
                            </div>
                            <span style="display:none" class="cancelText">Cancel</span>
                            <span style="display:none" class="ofText">of</span>
                        </div>
                    </div>
                </li>
            </span>
        </span>
        <span class="form-address-line form-address-city-line jsTest-address-lineField ">
            <span class="form-sub-label-container" style="vertical-align:top">
                <li class="form-line" data-type="control_fileupload" id="li4">
                    <label class="form-label form-label-top form-label-auto" id="label6" for="input_10"> الرجاء تحميل
                        الرقم
                        الوطني</label>
                    <div id="div2" class="form-input-wide" data-layout="full">
                        <div class="jfQuestion-fields" data-wrapper-react="true">
                            <div class="jfField isFilled">
                                <div class="jfUpload-wrapper">
                                    <div class="jfUpload-container">

                                        <div style="margin-left:225px" class="jfUpload-button-container">
                                            <div class="jfUpload-button" aria-hidden="true" tabindex="0"
                                                style="display:none" data-version="v2">Browse Files
                                                <div class="jfUpload-heading forDesktop">Drag and drop files here
                                                </div>
                                                <div class="jfUpload-heading forMobile">اختر الملف</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left:120px" class="jfUpload-files-container">
                                        <div class="validate[multipleUpload]">
                                            <input wire:model='guarantor_personal_id_photo' type="file" id="input8"
                                                class="form-upload-multiple" data-imagevalidate="yes"
                                                data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif"
                                                data-file-maxsize="10854" data-file-minsize="0" data-file-limit="0"
                                                data-component="fileupload" aria-label="Browse Files" />
                                            @error('guarantor_personal_id_photo')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div data-wrapper-react="true"></div>
                            </div>
                            <span style="display:none" class="cancelText">Cancel</span>
                            <span style="display:none" class="ofText">of</span>
                        </div>
                    </div>
                </li>
            </span>
        </span>
        {{-- <span class="form-address-line form-address-state-line jsTest-address-lineField ">
            <span class="form-sub-label-container" style="vertical-align:top">
                <li class="form-line" data-type="control_fileupload" id="li5">
                    <label class="form-label form-label-top form-label-auto" id="label7" for="input_10"> الرجاء تحميل
                        الرقم
                        الوطني</label>
                    <div id="div3" class="form-input-wide" data-layout="full">
                        <div class="jfQuestion-fields" data-wrapper-react="true">
                            <div class="jfField isFilled">
                                <div class="jfUpload-wrapper">
                                    <div class="jfUpload-container">

                                        <div class="jfUpload-button-container">
                                            <div class="jfUpload-button" aria-hidden="true" tabindex="0"
                                                style="display:none" data-version="v2">Browse Files
                                                <div class="jfUpload-heading forDesktop">Drag and drop files here</div>
                                                <div class="jfUpload-heading forMobile">اختر الملف</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left:120px" class="jfUpload-files-container">
                                        <div class="validate[multipleUpload]">
                                            <input wire:model='guarantor_personal_id_photo' type="file"
                                                class="form-upload-multiple" data-imagevalidate="yes"
                                                data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif"
                                                data-file-maxsize="10854" data-file-minsize="0" data-file-limit="0"
                                                data-component="fileupload" aria-label="Browse Files" />
                                            @error('guarantor_personal_id_photo')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div data-wrapper-react="true"></div>
                            </div>
                            <span style="display:none" class="cancelText">Cancel</span>
                            <span style="display:none" class="ofText">of</span>
                        </div>
                    </div>
                </li>
            </span>
        </span> --}}
    </div>

    @elseif($currentStep == 4)

    <li class="form-line" id="li3_3" style="text-align:right;">
        <div id="div3_1" class="form-input-wide">
            <div class="form-address-table jsTest-addressField">
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.house_number' type="number" id="input3_3"
                                class="form-textbox form-address-city" />
                            <label class="form-sub-label" id="label3_1" style="min-height:13px" aria-hidden="false">رقم
                                المنزل</label>
                        </span>
                        @error('student.house_number')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </span>
                    <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.house_address' style="margin-left: 22px" type="text"
                                id="input3_4" name="q34_address[state]" class="form-textbox form-address-state" />
                            <label class="form-sub-label" id="label3_2" style="min-height:13px"
                                aria-hidden="false">عنوان السكن</label>
                        </span>
                        @error('student.house_address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </span>
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.house_owner' type="text" id="input3_5"
                                class="form-textbox form-address-city" />
                            <label class="form-sub-label" id="label3_3" style="min-height:13px" aria-hidden="false">جنس
                                مالك المنزل</label>
                        </span>
                        @error('student.house_owner')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </span>
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                    <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model.defer='student.house_owner_phone' type="number" id="input3_7"
                                class="form-textbox form-address-city" />
                            <label class="form-sub-label" id="label3_5" style="min-height:13px" aria-hidden="false">رقم
                                هاتف مالك المنزل</label>
                        </span>
                        @error('student.house_owner_phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </span>
                    <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model='student.house_owner_personal_id' style="margin-left: 22px" type="text"
                                id="input3_8" name="q34_address[state]" class="form-textbox form-address-state" />
                            <label class="form-sub-label" id="label3_6" style="min-height:13px"
                                aria-hidden="false">الرقم الوطني لمالك المنزل</label>
                        </span>
                        @error('student.house_owner_personal_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </span>
                </div>
            </div>
        </div>
    </li>

    <div style="text-align:right;" class="form-address-line-wrapper jsTest-address-line-wrapperField">
        <span class="form-address-line form-address-city-line jsTest-address-lineField ">
            <span class="form-sub-label-container" style="vertical-align:top">
                <li class="form-line" data-type="control_fileupload" id="li3_4">
                    <label class="form-label form-label-top form-label-auto" id="label3_7" for="input_10"> الرجاء تحميل
                        شهادة السكن</label>
                    <div id="div3_2" class="form-input-wide" data-layout="full">
                        <div class="jfQuestion-fields" data-wrapper-react="true">
                            <div class="jfField isFilled">
                                <div class="jfUpload-wrapper">
                                    <div class="jfUpload-container">

                                        <div style="margin-left:225px" class="jfUpload-button-container">
                                            <div class="jfUpload-button" aria-hidden="true" tabindex="0"
                                                style="display:none" data-version="v2">Browse Files
                                                <div class="jfUpload-heading forDesktop">Drag and drop files here
                                                </div>
                                                <div class="jfUpload-heading forMobile">اختر الملف</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left:120px" class="jfUpload-files-container">
                                        <div class="validate[multipleUpload]">
                                            <input type="file" wire:model='house_certificate_photo'
                                                class="form-upload-multiple" data-imagevalidate="yes"
                                                data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif"
                                                data-file-maxsize="10854" data-file-minsize="0" data-file-limit="0"
                                                data-component="fileupload" aria-label="Browse Files" />
                                        </div>
                                        @error('house_certificate_photo')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div data-wrapper-react="true"></div>
                            </div>
                            <span style="display:none" class="cancelText">Cancel</span>
                            <span style="display:none" class="ofText">of</span>
                        </div>
                    </div>
                </li>
            </span>
        </span>
        <span class="form-address-line form-address-state-line jsTest-address-lineField ">
            <span class="form-sub-label-container" style="vertical-align:top">
                <li class="form-line" data-type="control_fileupload" id="li3_5">
                    <label class="form-label form-label-top form-label-auto" id="label3_8" for="input_10"> الرجاء تحميل
                        الرقم الوطني</label>
                    <div id="div3_3" class="form-input-wide" data-layout="full">
                        <div class="jfQuestion-fields" data-wrapper-react="true">
                            <div class="jfField isFilled">
                                <div class="jfUpload-wrapper">
                                    <div class="jfUpload-container">

                                        <div class="jfUpload-button-container">
                                            <div class="jfUpload-button" aria-hidden="true" tabindex="0"
                                                style="display:none" data-version="v2">Browse Files
                                                <div class="jfUpload-heading forDesktop">Drag and drop files here</div>
                                                <div class="jfUpload-heading forMobile">اختر الملف</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left:120px" class="jfUpload-files-container">
                                        <div class="validate[multipleUpload]">
                                            <input type="file" wire:model='house_owner_personal_id_photo'
                                                class="form-upload-multiple" data-imagevalidate="yes"
                                                data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif"
                                                data-file-maxsize="10854" data-file-minsize="0" data-file-limit="0"
                                                data-component="fileupload" aria-label="Browse Files" />
                                        </div>
                                        @error('house_owner_personal_id_photo')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div data-wrapper-react="true"></div>
                            </div>
                            <span style="display:none" class="cancelText">Cancel</span>
                            <span style="display:none" class="ofText">of</span>
                        </div>
                    </div>
                </li>
            </span>
        </span>
    </div>

    @elseif($currentStep == 5)
       
    <h4 style="
    text-align:center;
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-top-color: transparent;
    border-right-color: transparent;
    border-bottom-color: transparent;
    border-left-color: transparent;
    border-radius: .25rem;
    ">.تم تسجيلك طلبك بنجاح , سيتم ارسال رسالة التأكيد وموعد الحضور لرقم هاتفك </h4>
    @endif

    {{-- buttons --}}
    @if($currentStep != 5)
    <li id="li6" class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
            <div class="form-pagebreak-next-container">
                <a>
                    <button wire:click='directToCorrectStep' id="button1" type="button"
                        class="form-pagebreak-next  jf-form-buttons" data-component="pagebreak-next">التالي
                    </button>
                </a>
            </div>
            <div class="form-pagebreak-back-container">
                <a>
                    <button wire:click='{{  $currentStep > 1 ? ' back' : '' }}' id="button2" type="button"
                        class="form-pagebreak-back  jf-form-buttons" data-component="pagebreak-back">السابق
                    </button>
                </a>
            </div>

            <div style="clear:both" class="pageInfo form-sub-label" id="div4"></div>
        </div>
    </li>
    @endif
</ul>