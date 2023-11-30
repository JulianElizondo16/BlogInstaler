<form method="post" action="{{ url('store') }}">

    <textarea name="editor" id="editor"></textarea>
    @csrf
    <input type="submit" name="submit" value="Submit">


</form>
