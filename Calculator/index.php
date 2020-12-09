<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai3</title>
</head>
<body>
<form>

    <h1>Simple Calculator</h1>
    <fieldset>
        <legend>Caculator</legend>
        <label for="so1">First Operation</label>
        <input type="number" name="a" id="so1"/><br>
        <label for="c">Toán tử</label>

        <select name="chontoantu" id="c">
            <option value="tru">+</option>
            <option value="nhan">-</option>
            <option value="chia">*</option>
            <option value="chia">/</option>
        </select>
        <br>
        <label for="so2">First Operation</label>
        <input type="number" name="b" id="so2"/><br>
        <input type="submit" id="xacnhan" value="Caculate"/>
    </fieldset>
</form>


</body>
</html>