<!DOCTYPE>
<html lang="ar">

<head>

  <title>المعلومات الشخصية</title>

  <link type="text/css" rel="stylesheet" href="{{ asset('css/css1.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('css/css2.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('css/css3.css') }}" />
  <style>
    .text-danger {
      color: red;
    }
  </style>
  @livewireStyles
</head>

<body>

  <form class="jotform-form" id="form1">
    <input type="hidden" name="formID" />
    <input type="hidden" id="input1" value="" />
    <input type="hidden" id="input2" value="" />
    <div role="main" class="form-all">
      <style>
        .form-all:before {
          background: none;
          text-align: right;
        }
      </style>
      @livewire('student.student-form')
    </div>
  </form>
  @livewireScripts
</body>

</html>