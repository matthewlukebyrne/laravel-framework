    @extends('layouts.layout')
    @section('content')  
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="wrapper create-stack">
            <h1>Create a new Stack</h1>
            <form action="/stacks" method="POST">
                {{-- Cross site forgery token --}}
                @csrf
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" name="name">
                <hr>
                <label for="framework">Choose Stack:</label>
                <br>
                <select name="framework" id="framework">
                    <option value="django">Django</option>
                    <option value="spring">Spring</option>
                    <option value="onrails">Ruby on Rails</option>
                    <option value="vue">Vue</option>
                    <option value="revel">Revel</option>
                    <option value="ionic">Ionic(Angular)</option>
                    <option value="laravel">Laravel</option>
                </select>
                <label for="language">Select Language:</label>
                <br>
                <select name="language" id="language">
                    <option value="python">Python</option>
                    <option value="java">Java</option>
                    <option value="ruby">Ruby</option>
                    <option value="javascript">JavaScript</option>
                    <option value="typescript">Typscript</option>
                    <option value="kotlin">Kotlin</option>
                    <option value="php">PHP</option>
                </select>
                <br>
                <fieldset>
                    <input type="checkbox" name="features[]" value="hoisting">Hoisting<br />
                    <input type="checkbox" name="features[]" value="block-level-scope">Block Level Scope<br />
                    <input type="checkbox" name="features[]" value="event-delegation">Event Delegation<br />
                    <input type="checkbox" name="features[]" value="jinja-syntax">Jinja Syntax<br />
                    <input type="checkbox" name="features[]" value="csrf-tokens">CSRF Tokens<br />
                    <input type="checkbox" name="features[]" value="resusable-components">Resuable Components<br />
                    <input type="checkbox" name="features[]" value="widget-declerations">Widget Declerations<br />
                    <input type="checkbox" name="features[]" value="templating-engines">Templating Engines<br />
                </fieldset>
                <input type="submit" value="Confirm Stack">
            </form>
        </div>
    </div>
</div>
    @endsection