<html>

<head>
    <title></title>
</head>

<body>
    <div>
        <form action="{{url('ceklogin')}}" method="post">
            @csrf
            <div>
                <label for="username">username</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password">password</label>
                <input type="password" id="password" name="password">
            </div>
            <div>
                <button type="submit">simpan</button>
            </div>
        </form>
    </div>
</body>

</html>