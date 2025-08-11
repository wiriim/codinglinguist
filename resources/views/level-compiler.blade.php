<div class="compiler-container mt-5 w-100 d-flex flex-column">
    <h4>Input Your Code Here:</h4>
    <p>
        <span class="note-button"><i class="bi bi-journals"></i> Note</i></span>
    <ul class="note-list d-none">
        <li class="fw-bold">You program only needs satisfy "Example Input 1:" & "Expected Output 1:"</li>
        <li>If the input box is too small, you can resize the box on the bottom right corner</li>
        <li>If you are coding C, remember to <code>#include &lt;stdio.h&gt;</code></li>
        <li>If you are coding C, remember to wrap your main code in a proper <code>int main()</code> function</li>
        <li>If you are coding Java, remember to import any necessary package. e.g; <code>import java.util.Scanner</code>
        </li>
        <li>If you are coding Java, remember to wrap your code in a <code>public Class Main</code> & <code>public static
                void main(String[] args)</code></li>
    </ul>
    </p>
    <textarea name="level-boss-input" id="level-boss-input"></textarea>
    <h5 class="mt-3">Output:</h5>
    <textarea id="level-boss-output" readonly></textarea>

    @if (Auth::check() && Auth::user()->levelFinished($level->id, $level->course->id))
    @else
        <button class="align-self-end level-boss-run-btn mt-3">Run</button>
    @endif
</div>
