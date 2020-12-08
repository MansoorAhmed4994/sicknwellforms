@if($errors->any())
<script>
    alert("{{ implode('', $errors->all('<div>:message</div>')) }}")
</script>
@endif
@if(session()->has('success'))
<script>
    alert("{{ session()->get('success') }}")
</script>
@endif