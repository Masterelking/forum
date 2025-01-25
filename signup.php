
<?php require 'actions/signupAction.php'; ?>

<!DOCTYPE html>

<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <form class="container" action="signup.php" method="post">
        <?php if(isset($errorMsg)){
            echo '<div class="alert alert-danger" role="alert">'.$errorMsg.'</div>';
        } ?>
        <div class="mb-3">
            <label for="username" class="form-label">pseudo</label>
            <input type="text" name="pseudo" class="form-control" id="username">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="name" name="lastname" class="form-control" id="email">

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Prénom</label>
            <input type="email" name="firstname" class="form-control" id="firstname">

        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="password">

        </div>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
        <a href="login.php"><p>j'ai deja un compte je me connecte</p></a>
    </form>
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