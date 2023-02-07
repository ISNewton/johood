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
                <h2 id="header2" class="form-header" style="text-align:right;">المعلومات الشخصية</h2>
            </div>
        </div>
    </li>

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
                            <input wire:model='student.name' type="text" id="input3" name="q34_address[addr_line2]"
                                class="form-textbox form-address-line" />
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
                            <select class="form-textbox form-address-city" wire:model='student.gender' name="" id="">
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
                            <input wire:model='student.personal_id' style="margin-left: 22px" type="text" id="input5"
                                name="q34_address[state]" class="form-textbox form-address-state" />
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
                            <input wire:model='student.first_phone' type="text" id="input6"
                                class="form-textbox form-address-city" />
                            <label class="form-sub-label" id="label4" style="min-height:13px" aria-hidden="false">رقم
                                الهاتف
                                2</label>
                        </span>
                        @error('student.first_phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </span>
                    <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input wire:model='student.second_phone' style="margin-left: 22px" type="text" id="input7"
                                name="q34_address[state]" class="form-textbox form-address-state" />
                            <label class="form-sub-label" id="label5" style="min-height:13px" aria-hidden="false">رقم
                                الهاتف
                                1</label>
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
                                            <input wire:model='student.photo' type="file" id="input8"
                                                name="q10_pleaseUpload[]" multiple="" class="form-upload-multiple"
                                                data-imagevalidate="yes"
                                                data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif"
                                                data-file-maxsize="10854" data-file-minsize="0" data-file-limit="0"
                                                data-component="fileupload" aria-label="Browse Files" />
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
                                            <input wire:model='student.personal_id_photo' type="file" id="input9"
                                                name="q10_pleaseUpload[]" multiple="" class="form-upload-multiple"
                                                data-imagevalidate="yes"
                                                data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif"
                                                data-file-maxsize="10854" data-file-minsize="0" data-file-limit="0"
                                                data-component="fileupload" aria-label="Browse Files" />
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

    <li id="li6" class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
            <div class="form-pagebreak-next-container">
                <a>
                    <button wire:click='validatePersonalInfo' id="button1" type="button"
                        class="form-pagebreak-next  jf-form-buttons" data-component="pagebreak-next">التالي
                    </button>
                </a>
            </div>
            <div class="form-pagebreak-back-container">
                <a>
                    <button id="button2" type="button" class="form-pagebreak-back  jf-form-buttons"
                        data-component="pagebreak-back">السابق
                    </button>
                </a>
            </div>

            <div style="clear:both" class="pageInfo form-sub-label" id="div4"></div>
        </div>
    </li>
</ul>