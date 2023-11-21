<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    function transferData() {
        var input1 = document.getElementById('input1').value;
        document.getElementById('input2').value = input1;
    }
</script>
<body>
    <div>
        <input type="text" id="input1" placeholder="ช่องที่ 1">
    </div>

    <div>
        <button onclick="transferData()">ย้ายข้อมูล</button>
    </div>

    <div>
        <input type="text" id="input2" placeholder="ช่องที่ 2">
    </div>
</body>
</html>