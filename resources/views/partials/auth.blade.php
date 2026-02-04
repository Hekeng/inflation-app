
			<div class="auth-overlay"
				 data-panel="auth-overlay">
				<div class="auth-backdrop"
					 data-action="closeAuthOverlay"
					 data-value="closed">
				</div>
				<div class="auth-card">
					<button
						type="button"
						class="btn-exit"
						data-action="closeAuthOverlay"
						data-value="closed">
						<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</button>

					<ul class="switch-tabs" data-panel="switch-tabs-container">
						<li>
							<button class="auth-tab auth-tab-auth"
									role="heading"
									aria-level="2"
									data-action="switchAuthTab"
									data-value="authorization"
									type="button">
								Authorization
							</button>
						<li>
							<button class="auth-tab auth-tab-reg"
									role="heading"
									aria-level="2"
									data-action="switchAuthTab"
									data-value="registration"
									type="button">
								Registration
							</button>
						</li>
					</ul>

					<div class="auth-content">
						<form class="auth-form-login "
							  id="auth_form_login"
							  name="auth_form_login"
							  data-action="loginAsUser"
							  data-value="user"
							  action=""
							  method="post">
							<h2 class="sr-only">Authorization Form</h2>
							<label for="user_login">E-mail</label>
							<input
								type="text"
								name="user_login"
								id="user_login"
								placeholder="mail@you-email.com" >
							<span class="error-text"></span>
							<label for="user_pas">Password</label>
							<input
								type="password"
								id="user_pas"
								name="user_pas"
								placeholder="******">
							<span class="error-text"></span>
							<div class="auth-spacer"></div>
							<button class="btn btn-submit"
									type="submit">Send</button>
						</form>

						<form class="auth-form-reg"
							  name="reg_window"
							  id="reg_window"
							  data-action="loginAsUser"
							  data-value="user"
							  method="post">
							<h2 class="sr-only">Registration Form</h2>
							<label for="new_user_login">E-mail</label>
							<input
								type="text"
								name="new_user_login"
								id="new_user_login"
								placeholder="mail@you-email.com" >
							<span class="error-text"></span>
							<label for="new_user_pas">Password</label>
							<input
								type="password"
								name="new_user_pas"
								id="new_user_pas"
								placeholder="******">
							<span class="error-text"></span>
							<label for="new_user_pas_rep">Repeat Password</label>

							<input
								type="password"
								name="new_user_pas_rep"
								id="new_user_pas_rep"
								placeholder="******">
							<span class="error-text"></span>
							<!-- <br> -->
							<button class="btn btn-submit"


									type="submit">Registration user</button>
						</form>

					</div>
				</div>
			</div>

