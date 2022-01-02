<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cau5.js"></script>

<script>
    $(document).ready(function(){
        $('#SOLAN').keypress(function(){
            var keycode = (event.keycode ? event.keycode : event.which);
            if(keycode == 13){
                var SOLAN = $('#SOLAN').val();
                listSLBD(SOLAN);
            }
        })
    });
</script>

<div>
    <h3>Liệt kê</h3>
    <div>
    Chọn số lần bảo dưỡng
    <input type="text" id="SOLAN" name="SOLAN">   
    </div><br>

    <table class="tablel" id="table1"></table>

</div>