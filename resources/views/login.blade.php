<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/app/css/style.css">
    <link rel="stylesheet" href="assets/app/css/main.css">

    <style>
        body {
            margin: 0;
            .login-container {  /* I revised this section, mostly I just added some attributes*/
                position: absolute;
                width: 1050px;
                padding: 15em;
                background: rgba(255, 255, 255, 0.9);
                border-radius: 8px;
                overflow: hidden;
                display: flex;
                margin-top: -120px;
                height: 50vh;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            }

            .login-container h2 {
                color: #333333;
                margin-bottom: 1em;
            }

            .login-container input[type="text"],
            .login-container input[type="password"] {
                width: 100%;
                padding: 0.75em;
                margin: 0.5em 0;
                border: 1px solid #ddd;
                border-radius: 5px;
                box-sizing: border-box;
                font-size: 1em;
            }

            .login-container .checkbox-label {
                display: flex;
                align-items: center;
                font-size: 0.9em;
                color: #666;
                border: 2px solid #008CBA; /* Add a border with color */
                border-radius: 8px; /* Optional: Rounded corners */
            }

            .login-container button {
                background-color: #008CBA;
                color: white;
                padding: 0.75em;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
                font-size: 1em;
                margin-top: 1em;
            }

            .login-container button:hover {
                background-color: #0079a1;
            }


            .login-left {
                flex: 1;
                color: #fff;
                text-align: center;
                padding: 20px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .login-left img {
                max-width: 500px;
                width: 98%;
                height: 100vh;
                display: flex;
                margin-bottom: 10px;
                margin-top: 110px;
                margin-right: 250px;
            }

            .login-right h4 {
                margin-bottom: 20px;
                text-align: center;
            }

            .login-right.login-container {
                width: 20%;
                padding: 10px;
                top: 30px;
                width: 50px;
                margin-bottom: 250px;
                margin-top: 200px;
                border: 1px solid #ccc;
                border-radius: 4px;
                margin-right: 100px;
            }

            .login-right .btn {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                margin-top: 10px;
                border: none;
                border-radius: 4px;
                font-size: 16px;
            }

            .btn-primary {
                background: #0047AB;
                color: #fff;
            }

            .btn-secondary {
                background: #6c757d;
                color: #fff;
            }

            .btn-info {
                background: #17a2b8;
                color: #fff;
            }

            .btn:hover {
                opacity: 0.9;
            }

            .login-right a {
                color: #0047AB;
                text-decoration: none;
            }

            .login-right a:hover {
                text-decoration: underline;
            }

            .text-muted {
                font-size: 12px;
                color: #666;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Bagian Kiri -->
        <div class="login-left">
        <img src= "{{asset('images/senantiasa BCA.jpg') }}"alt="Image">
        </div>

        <!-- Bagian Kanan -->
        <div class="login-right">
            <h4>Masuk</h4>
            <form method="POST" action= "">
               @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="checkbox" id="ingat" name="ingat">
                    <label for="ingat">Ingat saya</label>

                </div>
                <button type="submit" class="btn btn-info">Log In</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <script src="assets/popperjs/dist/umd/popper.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>
