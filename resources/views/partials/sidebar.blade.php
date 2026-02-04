<aside class="sidebar"
		   data-panel="sidebar">
		<div class="options-navigation">
			<div class="shortUserInfo">
				<div class="avatar"></div>
				<div class="personal_info"></div>
				<div class="userE-mail"></div>
			</div>

			<nav class="nav-group">
				<h2 class="nav-caption">Main options</h2>
				<ul class="switch-tabs-button">
					<li>
						<button class="nav-btn settings"
								data-action="switchTabButtons"
								data-value="settings">
							<i class="icon-options"></i> Settings
						</button>
					</li>
					<li>
						<button class="nav-btn firstIndex"
								data-action="switchTabButtons"
								data-value="firstIndex">
							<i class="icon-FirstIndex"></i> First Index
						</button>
					</li>
					<li>
						<button class="nav-btn secondIndex"
								data-action="switchTabButtons"
								data-value="secondIndex">
							<i class="icon-FirstIndex"></i> Second Index
						</button>
					</li>
				</ul>
			</nav>

			<div class="nav-group only-user is-none">
				<h2 class="nav-caption">Personal</h2>
				<ul class="switch-tabs-button">

					<li>
						<button class="nav-btn" data-action="switch" data-target="user_window">
							My Portfolio
						</button>
					</li>
				</ul>
			</div>
			<div class="nav-group only-admin is-none">
				<h2 class="nav-caption">admin</h2>
				<ul class="switch-tabs-button" >
					<li>
						<button class="nav-btn" data-action="switch" data-target="user_window">
						</button>
					</li>
				</ul>
			</div>
		</div>
		<div class="options">
			<div class="options-panel"
				 data-panel="settings">
				<h3>Global Settings</h3>
				<p> Lorem ipsum dolor sit amet
				</p>
			</div>
			<div class="options-panel "
				 data-panel="first_index">
				<h3>First Index</h3>
				<input type="number">
			</div>
			<div class="options-panel"
				 data-panel="second_index">
				<h3>Second Index</h3>
				<input type="number">
			</div>
		</div>
	</aside>
