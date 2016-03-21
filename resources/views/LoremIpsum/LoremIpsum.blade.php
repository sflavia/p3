<!DOCTYPE html>
<html>
<head>



</Head>
<Body>

  <Header>
    <form method='POST' action='/paragraph'>
{{ csrf_field() }}
<input type='text'name='paragraphs'>
<input type='submit'value='submit'>
</form>

    </header>


</body>
</html>
