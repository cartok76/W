<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>


	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
		</header>

		<section>
			<?= $this->section('main_content') ?>

            <div class="connection">
                <nav class="connection-nav">
                    <p>
                        <a href="#box-signup">Signup</a> — <a href="#box-login">Login</a>
                    </p>
                </nav>

                <section class="box signup" id="box-signup">
                    <h2>Signup</h2>

                    <form class="form form-signup" id="signup">
                        <p>
                            <label>
                                E-mail *
                                <input type="email" required placeholder="jeancharles@gmail.com">
                            </label>
                        </p>
                        <p>
                            <label>
                                Password *
                                <input type="password" required placeholder="****">
                            </label>
                        </p>
                        <p>
                            <label>
                                First Name
                                <input type="text" placeholder="Jean-Charles">
                            </label>
                        </p>
                        <p>
                            <label>
                                Last Name
                                <input type="text" placeholder="Philibert">
                            </label>
                        </p>

                        <p class="center">
                            <label>
                                <input type="radio" name="sex" value="F" checked> F
                            </label>
                            <label>
                                <input type="radio" name="sex" value="M"> M
                            </label>
                        </p>

                        <p>
                            <input type="submit" value="Signup">
                        </p>

                        <hr>

                        <p>
                            <input class="button-twitter" type="button" value="Signup with Twitter">
                        </p>
                        <p>
                            <input class="button-google" type="button" value="Signup with Google">
                        </p>
                    </form>
                </section>

                <section class="box login" id="box-login">
                    <h2>Login</h2>

                    <form class="form form-login" id="login">
                        <p>
                            <label>
                                E-mail *
                                <input type="email" required placeholder="jeancharles@gmail.com">
                            </label>
                        </p>
                        <p>
                            <label>
                                Password *
                                <input type="password" required placeholder="****">
                            </label>
                        </p>

                        <p>
                            <input type="submit" value="Login">
                        </p>
                    </form>
                </section>
            </div>



		<footer>
		</footer>
	</div>
</body>
</html>