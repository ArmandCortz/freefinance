<!-- Main Footer -->

<script LANGUAGE="JavaScript">
    function confirmDel(url) {
        //var agree = confirm("¿Realmente desea eliminarlo?");
        if (confirm("¿Realmente deseas eliminar estos datos?"))
            window.location.href = url;
        else
            return false;
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript"></script>


<footer class="bg-white text-center text-black-50 py-3 shadow">
    {{ config('app.name') }} | Copyright @ {{ date('Y') }}
</footer>
