<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-4 col-md-4 text-center">
            <div class="form-group" style="margin-top: 50px;">
                <label for="group">Dropdown List</label>
                <select id="list" onchange="changeValue()" class="form-control">
                    <option value="0">Select Item</option>
                    <option value="1">Item One</option>
                    <option value="2">Item Two</option>
                    <option value="3">Item Three</option>
                    <option value="4">Item Four</option>
                    <option value="5">Item Five</option>
                </select>
            </div>
        </div>
    </div>
</div>

<script>
    function changeValue() {
        var value = $("#list").val();
        alert(value);
    }
</script>
