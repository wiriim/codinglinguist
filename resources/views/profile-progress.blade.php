<div class="c-progress d-flex gap-5 align-items-center">
    <img src="{{asset('images/C_Programming_Language.png')}}" alt="c" width="80">
    <div class="progress-bar">
        @for ($i = 1; $i <= $cProgress; $i++)
            <div class="progress-block"></div>
        @endfor
    </div>

</div>

<div class="python-progress d-flex gap-5 align-items-center">
    <img src="{{asset('images/Python.png')}}" alt="python" width="80">
    <div class="progress-bar">
        @for ($i = 1; $i <= $pythonProgress; $i++)
            <div class="progress-block"></div>
        @endfor
    </div>
</div>

<div class="java-progress d-flex gap-5 align-items-center">
    <img src="{{asset('images/Java_programming_language_logo.png')}}" alt="java" width="80">
    <div class="progress-bar">
        @for ($i = 1; $i <= $javaProgress; $i++)
            <div class="progress-block"></div>
        @endfor
    </div>
</div>
