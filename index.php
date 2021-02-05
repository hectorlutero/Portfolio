<?php 



	if (isset($_GET['lg'])) {
		$lg = $_GET['lg'];
		if ($lg === 'pt-br'){
			$pt_br = true;
		} else {
			$pt_br = false;
		}
	}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title><?php if(!isset($_GET['lg']) || $_GET['lg'] !== 'pt-br') :?>
				Hector Siman Portfolio
				<?php elseif($_GET['lg'] === 'pt-br') : ?>
				Hector Siman Portfólio
				<?php endif; ?>
		</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<nav>
							<ul>
								<li><a href="index.php?lg=pt-br">PT - BR</a></li>
								<li><a href="index.php?lg=en">EN</a></li>
							</ul>
						</nav>
						<div class="logo">
							<span class="fas fa-code fa-3x" style="padding-top: 26%;"></span>
						</div>
						<div class="content">
							<div class="inner">
							<?php if(!isset($_GET['lg']) || $_GET['lg'] !== 'pt-br') :?>
								<h1>Hi There I'm Hector</h1>
								<p>Here in this simple portfolio you can discover a little bit more about me and my works!<br />
								  At the intro you can see more of my expertise. Please, enjoy the tour!</p>
							<?php elseif($_GET['lg'] === 'pt-br') : ?>
								<h1>E aí, eu sou Hector</h1>
								<p>Aqui neste simples portfólio você pode descobrir um pouco sobre mim e meus trabalhos!<br />
								  Na intro você poderá ver mais sobre a minha expertise. Por favor, aproveite o tuor!</p>
							<?php endif; ?>
							</div>
						</div>
						<?php if(!isset($_GET['lg']) || $_GET['lg'] !== 'pt-br') :?>
							<nav>
								<ul>
									<li><a href="#intro">Intro</a></li>
									<li><a href="#works">Works</a></li>
									<li><a href="#contact">Contact</a></li>
								</ul>
							</nav>
						<?php elseif($_GET['lg'] === 'pt-br') : ?>
							<nav>
								<ul>
									<li><a href="#intro">Intro</a></li>
									<li><a href="#works">Trabalhos</a></li>
									<li><a href="#contact">Contato</a></li>
								</ul>
							</nav>
						<?php endif; ?>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
							<?php if(!isset($_GET['lg']) || $_GET['lg'] !== 'pt-br') :?>
								<h2 class="major">Intro</h2>
								<span class="image main"><img src="images/pic01.jpg" alt="" /></span>
								<p>Hi There, my name is Hector Siman, I love guitar, music, videogames, good movies e to hangout with friends, currently I am rediscovering myself as a drummer, leading the team's rythm!</p>
								<p>I am a Full-Stack Developer with focus on Back-End, professional of details on the construction and execution of any kind of product. I have been raised at the science's world, with a bachellor on Biomedical Sciences at Universitary Centre of Belo Horizonte UNI-BH (2018), I've found myself in Techonology area, mainly on Database treatment, as a good self-taught professional I have been learning the best tools in the market such as React and Laravel, as well as MySQL. I am curious, and I like to learn and work with challenges, specially digital ones, also I am a lover of efficient processes and to participate in projects that will make the difference, mainly developing products that makes sense with a high added value. Check some of my <a href="#works">works!</a></p>

								<p>I also believe that in time of crisis techonology is a powerfull tool to get over it, and that's the reason I commit myself to be always up to date, offering solutions for small business to survive to the current scenario, thus, we can keep business, people, families and of course life itself. I am all the time open to new challenges and willing to make the difference in peoples' life. What I don't know, I learn it, as a good Self-Taught guy. Do you wanna know more? <a href="https://www.linkedin.com/in/hector-siman/?locale=en_US">let's have a talk! ;)</a></p>
							<?php elseif($_GET['lg'] === 'pt-br') : ?>
								<h2 class="major">Introdução</h2>
								<span class="image main"><img src="images/pic01.jpg" alt="" /></span>
								<p>Olá, meu nome é Hector Siman, amo guitarra, música, videogames, bons filmes e estar com amigos, atualmente estou me redescobrindo como baterista dando o ritmo pra equipe.</p>

								<p>Fui criado no mundo da ciência, formado em Biomedicina pelo Centro Universitário UNI-BH (2018), me redescobri na área de TI, principalmente no tratamento de Banco de Dados, como bom autoditada tenho me desenvolvido aprendendo as melhores ferramentas do mercado como React e Laravel, além do MySQL. Sou curioso, gosto de aprender e trabalhar com desafios, principalmente digitais, além de ser um amante de processos eficientes e de participar de projetos que façam a diferença, principalmente desenvolvendo marcas que façam sentido e com alto valor agregado. Dê uma olhada em alguns dos meus <a href="#works">trabalhos!</a></p>

								<p>Acredito que em tempos de crise a tecnologia é uma poderosa arma para vencê-la, e por isso me dedico a estar sempre atualizado, oferencendo soluções as pequenas empresas a sobreviverem ao cenário atual, podemos manter negócios, pessoas, famílias e assim a vida. Estou sempre aberto a novos desafios e disposto a fazer a diferença na vida das pessoas. O que eu não sei eu aprendo, como todo bom Autodidata. Quer saber mais?  <a href="https://www.linkedin.com/in/hector-siman/?locale=en_US">Vamos trocar uma ideia! ;)</a></p>
							<?php endif; ?>
							</article>
							

						<!-- Work -->
							<article id="works">
							<?php if(!isset($_GET['lg']) || $_GET['lg'] !== 'pt-br') :?>
								<h2 class="major">Works</h2>
								<a href="http://taskmanager.hectorsimandomain.com.br/" class="image-work main"><img src="images/taskmanager.png" alt="Task Manager" /></a>
								<h3 class="major"><a href="http://taskmanager.hectorsimandomain.com.br/" class="link-title">Task Manager</a></h3>
								<p>This is my first project with PHP OOP (Oriented programing Language). I've made in collaboration with a partner <a href="https://www.linkedin.com/in/figueiredonrafael/"> Rafael Figueiredo </a>, this project was part of a challenge in a Developer Community called <a href="https://devplay.com.br/">Devplay</a> , that yield to us a title as one the three first white belts on the community.</p>
								<p>The project consist of a platform capable of tracking and managing tasks for a small company, counting with a login system, recovery password system and of course the Task Manager system. Also we've developed for the first time a credential controller system for Admins Users, where the Admin can register, delete or even promote other users. Each Simple User is able to set a task, the conclusion estimated time as well as edit, start, finish and delete its task.</p>
								<hr />

								<a class="image-work main"><img src="images/devplaystore.jpg" alt="DevPlay Store" /></a>
								<h3 class="major">DevPlay Store ...In Progress</h3>
								<p>This is another collaboration with the <a href="https://devplay.com.br/">DevPlay Community</a>, in this project we've helped to develop a e-commerce using Laravel, this project still in progress.</p>
								<p>In a bit we gonna achive awesome results!</p>
								<hr />

								<a href="https://wpinstitutional.hectorsimandomain.com.br/" class="image-work main"><img src="images/nerdstore.png" alt="Task Manager" /></a>
								<h3 class="major"><a href="https://wpinstitutional.hectorsimandomain.com.br/" class="link-title">NerdStore Wordpress Small Project</a></h3>
								<p>That's an e-commerce example made in WordPress called <a href="https://wpinstitutional.hectorsimandomain.com.br/">NerdStore</a>. This is a Store for Geek Culture, it has a landing page, and a store.</p>
								<p>Once again that's a collaboration with <a href="https://www.linkedin.com/in/figueiredonrafael/">Rafael Figueiredo</a>!</p>

								<hr />
								<h4>If you want to see more, consider to check my <a href="github.com/hectorlutero" class="icon brands fa-github"> GitHub</a>  where I constantly Update </h4>
							<?php elseif($_GET['lg'] === 'pt-br') : ?>
								<h2 class="major">Trabalhos</h2>
								<a href="http://taskmanager.hectorsimandomain.com.br/" class="image-work main"><img src="images/taskmanager.png" alt="Task Manager" /></a>
								<h3 class="major"><a href="http://taskmanager.hectorsimandomain.com.br/" class="link-title">Gerenciador de Tarefas</a></h3>
								<p>Esse é o meu primeiro projeto com PHP OOP (Programação Orientada de Objetos). Fiz em colaboração com um parceiro <a href="https://www.linkedin.com/in/figueiredonrafael/">Rafael Figueiredo</a>, Esse projeto foi parte de um desafio em uma comunidade de Desenvolvedores chamada <a href="https://devplay.com.br/">Devplay</a>, o que nos rendeu um título como dois dos três primeiros Faixa Branca na comunidade.</p>
								<p>O projeto consiste de uma plataforma capaz de rastrear e gerenciar tarefas para uma pequena empresa, contando com um sistema de login, recuperação de senha, e claro, o gerenciador de tarefas. Nós também desenvolvemos pela primeira vez um sistema controlador de credenciais para Usuários Administradores, onde o Admin pode cadastrar, deletar ou mesmo promover outros usuários. Cada Usuário Simples é capaz de criar uma tarefa, definir o tempo estimado de conclusão como também editar, começar, finalizar e deletar as suas tarefas.</p>
								<hr />

								<a class="image-work main"><img src="images/devplaystore.jpg" alt="DevPlay Store" /></a>
								<h3 class="major">DevPlay Store ...Em Desenvolvimento</h3>
								<p>Esta é mais uma colaboração com a <a href="https://devplay.com.br/">Comunidade DevPlay</a>, neste projeto temos ajudado a desenvolver uma e-commerce utilizando Laravel, esse projeto ainda está em desenvolvimento.</p>
								<p>Daqui a pouquinho nós vamos alcançar excelentes resultados!</p>
								<hr />

								<a href="https://wpinstitutional.hectorsimandomain.com.br/" class="image-work main"><img src="images/nerdstore.png" alt="Task Manager" /></a>
								<h3 class="major"><a href="https://wpinstitutional.hectorsimandomain.com.br/" class="link-title">NerdStore Pequeno Projeto de Wordpress</a></h3>
								<p>Este é um exemplo de e-commerce feito em WordPress chamado <a href="https://wpinstitutional.hectorsimandomain.com.br/">NerdStore</a>. Esta é uma loja da Cultura Geek, possui uma Landing Page e uma loja virtual.</p>
								<p>Mais uma vez esta é uma grande colaboração com <a href="https://www.linkedin.com/in/figueiredonrafael/">Rafael Figueiredo</a>!</p>

								<hr />
								<h4>Se você quiser ver mais, considere dar uma olhada no meu <a href="http://github.com/hectorlutero" class="icon brands fa-github"> GitHub</a> onde eu constantemente atualizo.</h4>
							<?php endif; ?>
							<br>
							</article>

						<!-- Contact -->

						<article id="contact">
						<?php if(!isset($_GET['lg']) || $_GET['lg'] !== 'pt-br') :?>
								<h2 class="major">Contact</h2>

								<section>
									<h3 class="major">Location</h3>
									<h5>Currently I live in <strong>Belo Horizonte city, MG - Brazil</strong>.</h5>
									<h3 class="major">Email</h3>
									<p class="button"><strong>hectorlutero@hotmail.com</strong></p>
									<br><br>
									<h5>For more additional informations get in touch.</h5>
									<hr />
								</section>
								<div class="container" style="display: flex;">
									<div style="margin:auto;">
										<h4>Visit my GitHub</h4>
										<div style="text-align: center;">
											<p><a href="https://github.com/hectorlutero" class="icon brands fa-github fa-4x"><span class="label">GitHub</span></a></p>
										</div>
									</div>
									<div style="margin:auto;">
										<h4>Visit my LinkedIn</h4>
										<div style="text-align: center;">
											<p><a href="https://linkedin.com/in/hector-siman" class="icon brands fa-linkedin fa-4x"><span class="label">GitHub</span></a></p>
										</div>
									</div>
								</div>
							
						<?php elseif($_GET['lg'] === 'pt-br') : ?>

							<h2 class="major">Contato</h2>

							<section>
								<h3 class="major">Localização</h3>
								<h5>Atualmente resido em <strong>Belo Horizonte city, MG - Brazil</strong>.</h5>
								<h3 class="major">Email</h3>
								<p class="button"><strong>hectorlutero@hotmail.com</strong></p>
								<br><br>
								<h5>Para informações adicionais entre em contato.</h5>
								<hr />
							</section>
							<div class="container" style="display: flex;">
								<div style="margin:auto;">
									<h4>Visite my GitHub</h4>
									<div style="text-align: center;">
										<p><a href="https://github.com/hectorlutero" class="icon brands fa-github fa-4x"><span class="label">GitHub</span></a></p>
									</div>
								</div>
								<div style="margin:auto;">
									<h4>Visite my LinkedIn</h4>
									<div style="text-align: center;">
										<p><a href="https://linkedin.com/in/hector-siman" class="icon brands fa-linkedin fa-4x"><span class="label">GitHub</span></a></p>
									</div>
								</div>
							</div>

						<?php endif; ?>
						</article>

						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button primary">Primary</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
										<li><a href="#" class="button icon solid fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="demo-name">Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
											</div>
											<div class="field half">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
											</div>
											<div class="field">
												<label for="demo-category">Category</label>
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="field">
												<label for="demo-message">Message</label>
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">HECTOR SIMAN | FULL-STACK DEVELOPER</a></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
